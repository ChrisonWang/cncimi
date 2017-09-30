<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/27
 * Time: 11:29
 */
require_once(dirname(__FILE__).'/include/config.inc.php');
$table = '#@__wechat_user';
$now = date('Y-m-d H:i:s', time());

//获取微信配置
$wechat_settings = $dosql->GetOne("SELECT * FROM `#@__wechat_settings` LIMIT 0,1");
$app_id = isset($wechat_settings['app_id']) ? $wechat_settings['app_id'] : '';
$app_secret = isset($wechat_settings['app_secret']) ? $wechat_settings['app_secret'] : '';

//获取微信返回的code
$code = isset($_GET['code']) ? $_GET['code'] : '';
$state = isset($_GET['state']) ? $_GET['state'] : '';
if(!empty($state)){
    $state = explode('XXXXX', $state);
    $aid = isset($state[0])&&!empty($state[0]) ? $state[0] : '';
    $pid = isset($state[1])&&!empty($state[1]) ? $state[1] : '';
}
else{
    echo '参数错误！';
    header("refresh:2; url=/");
    exit();
}

if(empty($code)){
    echo '获取code失败！';
    header("refresh:2; url=/");
    exit();
}
else{
    //获取access信息
    $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$app_id.'&secret='.$app_secret.'&code='.$code.'&grant_type=authorization_code';
    $access_info = file_get_contents($url);
    $access_info = json_decode($access_info, true);

    if (isset($access_info['access_token']) && isset($access_info['refresh_token'])) {
        //获取用户信息
        $url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_info['access_token'].'&openid='.$access_info['openid'].'&lang=zh_CN';
        $user_info = file_get_contents($url);
        $user_info = json_decode($user_info, true);
        if(isset($user_info['errcode']) || isset($user_info['errmsg'])){
            echo '获取用户信息失败！';
            header("refresh:2; url=/");
            exit();
        }
        else{
	        //判断是否已经授权过
            $uid = $dosql->GetOne('SELECT `uid` FROM `#@__wechat_user` WHERE `openid` ="'.$user_info['openid'].'"');
            if(isset($uid['uid']) && !empty($uid['uid'])){
                $next_url = "/activity_page.php?&aid=".$aid."&uid=".$uid['uid'];
                $uid = $uid['uid'];
            }
            else{
                $user_info['nickname'] = empty($user_info['nickname']) ? '未设置昵称' : $user_info['nickname'];
                $code = genUnionCode();
                $sql = "INSERT INTO `$table`(`openid`, `uid`, `nickname`, `sex`, `headimgurl`, `country`, `province`, `city`) VALUES('".$user_info['openid']."', '".$code."', '".$user_info['nickname']."', '".$user_info['sex']."', '".$user_info['headimgurl']."', '".$user_info['country']."', '".$user_info['province']."', '".$user_info['city']."')";
                $dosql->ExecNoneQuery($sql);
                $next_url = "/activity_page.php?&aid=".$aid."&uid=".$code;
	            $uid = $code;
            }

	        //判断是根链接还是别人分享的页面
	        if(empty($pid)){
		        $user = $dosql->GetOne('SELECT `uid` FROM `#@__wechat_activity` WHERE `uid` ="'.$uid.'" AND `activity_code` = "'.$aid.'"');
		        if(!isset($user['uid'])){
			        //创建活动页面
		            $sql = "INSERT INTO `#@__wechat_activity`(`uid`, `activity_code`, `create_date`, `update_date`) VALUES('$uid', '$aid','$now', '$now')";
			        $dosql->ExecNoneQuery($sql);
			        $next_url .= '&pid='.$uid;
		        }
				else{
					$next_url .= '&pid='.$user['uid'];
				}
	        }
	        else{
		        $next_url .= '&pid='.$pid;
	        }
	        header("location:".$next_url);
            exit();
        }
    }
    else{
        echo '获取access_token失败！';
        header("refresh:2; url=/");
        exit();
    }
}
