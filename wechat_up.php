<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/28
 * Time: 9:47
 */
require_once(dirname(__FILE__).'/include/config.inc.php');
$now = date('Y-m-d H:i:s', time());
$msg = '';

//处理传入参数
if(isset($_GET['code']) && isset($_GET['state'])){
    $code = $_GET['code'];
    $state = explode('XXXXX', $_GET['state']);
    $aid = isset($state[0])&&!empty($state[0]) ? $state[0] : '';
    $pid = isset($state[1])&&!empty($state[1]) ? $state[1] : '';
}
else{
    $aid = isset($_GET['aid']) ? $_GET['aid'] : '';
    $uid = isset($_GET['uid']) ? $_GET['uid'] : '';
    $pid = isset($_GET['pid']) ? $_GET['pid'] : '';
}

//判断是否有必要参数
if( empty($aid) || empty($pid) ){
    echo '点赞失败！参数错误！';
    header("refresh:2; url=/");
}
//判断活动的合法性
$activity = $dosql->GetOne("SELECT * FROM `#@__wechat` WHERE `activity_code` = '$aid' LIMIT 0,1");
if(!isset($activity['id']) || empty($activity['id'])){
    echo '活动不存在！';
    header("refresh:2; url=/");
    exit();
}
else{
    if($activity['status'] != 'open'){
        echo '活动已关闭！';
        header("refresh:2; url=/");
        exit();
    }
    if(strtotime($activity['start_date']) > time()){
        echo '活动未开始！';
        header("refresh:2; url=/");
        exit();
    }
    if(strtotime($activity['end_date']) < time()){
        echo '活动已结束！';
        header("refresh:2; url=/");
        exit();
    }
}

//取出微信配置
$wechat_settings = $dosql->GetOne("SELECT * FROM `#@__wechat_settings` LIMIT 0,1");
$app_id = isset($wechat_settings['app_id']) ? $wechat_settings['app_id'] : '';
$app_secret = isset($wechat_settings['app_secret']) ? $wechat_settings['app_secret'] : '';

//判断点赞用户是否登录
if( empty($uid)){
    if(!isset($_GET['state'])){
        $state =  $aid.'XXXXX'.$pid;
        $url = 'https://open.weixin.qq.com/connect/oauth2/authorize?';
        $url .= 'appid='.$app_id.'&redirect_uri='.urlencode("http://www.cncipi.org/wechat_up.php").'&response_type=code&scope=snsapi_userinfo&state='.$state.'#wechat_redirect';
        header("location:".$url);
        exit();
    }
    else{
        //获取access信息
        $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$app_id.'&secret='.$app_secret.'&code='.$code.'&grant_type=authorization_code';
        $access_info = file_get_contents($url);
        $access_info = json_decode($access_info, true);
        if (!isset($access_info['access_token']) && !isset($access_info['refresh_token'])) {
            echo '获取access_token失败！';
            header("refresh:2; url=/");
            exit();
        }
        //获取用户信息
        $url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_info['access_token'].'&openid='.$access_info['openid'].'&lang=zh_CN';
        $user_info = file_get_contents($url);
        $user_info = json_decode($user_info, true);
        if(isset($user_info['errcode']) || isset($user_info['errmsg'])){
            echo '获取用户信息失败！';
            header("refresh:2; url=/");
            exit();
        }
        //判断是否已经授权过
        $uid = $dosql->GetOne('SELECT `uid` FROM `#@__wechat_user` WHERE `openid` ="'.$user_info['openid'].'"');
        if(isset($uid['uid']) && !empty($uid['uid'])){
            $next_url = "/activity_page.php?&aid=".$aid."&uid=".$uid['uid'];
            $uid = $uid['uid'];
        }
        else{
            $user_info['nickname'] = empty($user_info['nickname']) ? '未设置昵称' : $user_info['nickname'];
            $code = genUnionCode();
            $sql = "INSERT INTO `#@__wechat_user`(`openid`, `uid`, `nickname`, `sex`, `headimgurl`, `country`, `province`, `city`) VALUES('".$user_info['openid']."', '".$code."', '".$user_info['nickname']."', '".$user_info['sex']."', '".$user_info['headimgurl']."', '".$user_info['country']."', '".$user_info['province']."', '".$user_info['city']."')";
            $dosql->ExecNoneQuery($sql);
            $next_url = "/activity_page.php?&aid=".$aid."&uid=".$code;
            $uid = $code;
        }
        //不能为自己点赞
        if($uid == $pid){
            $msg = '不能为自己点赞哦！快快分享专属页面给您的好友吧！';
        }
        else{
            //执行点赞操作
            $up = $dosql->GetOne("SELECT `id` FROM `#@__wechat_up` WHERE `up_uid` = '$uid' AND `uid` = '$pid' AND `aid` = '$aid' LIMIT 0,1");
            if(!empty($up) && isset($up['id'])){
                $msg = '您已为TA点过赞！快快替他分享给其他好友吧！';
            }
            else{
                $up = $dosql->GetOne("SELECT `up` FROM `#@__wechat_activity` WHERE `uid` = '".$pid."'");
                if (!isset($up['up'])){

                }
                else{
                    $up = $up['up'] + 1;
                    $sql_insert = "INSERT INTO `#@__wechat_up`(`uid`, `aid`, `up_uid`, `up_openid`, `up_headimgurl`, `up_nickname`, `up_datetime`) VALUES('".$pid."', '".$aid."', '".$uid."', '".$user_info['openid']."', '".$user_info['headimgurl']."', '".$user_info['nickname']."', '".$now."')";
                    $dosql->ExecNoneQuery($sql_insert);

                    $sql_update = "UPDATE `#@__wechat_activity` SET `update_date` = '".$now."', `up` = '".$up."' WHERE `uid` = '".$pid."' AND `activity_code` = '". $aid ."'";
                    $dosql->ExecNoneQuery($sql_update);

                    $msg = '点赞成功！感谢参与！';
                }
            }
        }

        //判断跳转路径
        if (empty($msg)){
            $next_url = 'http://www.cncipi.org/activity_page.php?aid='.$aid.'&pid='.$pid.'&uid='.$uid;
        }
        else{
            $next_url = 'http://www.cncipi.org/activity_page.php?aid='.$aid.'&pid='.$pid.'&uid='.$uid.'&msg='.$msg;
        }
        header("location:".$next_url);
        exit();
    }
}
else{
    header("location: http://www.cncipi.org/activity_page.php?aid=".$aid."&pid=".$pid."&uid=".$uid);
    exit();
}