<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/27
 * Time: 10:12
 */
require_once(dirname(__FILE__).'/include/config.inc.php');
//处理传入参数
$a_code = isset($_GET['aid']) ? $_GET['aid'] : '';
$pid = isset($_GET['pid']) ? $_GET['pid'] : '';
$action = $_GET['action'];

//取出活动并判断是否合法
$activity = $dosql->GetOne("SELECT * FROM `#@__wechat` WHERE `activity_code` = '$a_code' LIMIT 0,1");
if(!isset($activity['id']) || empty($activity['id'])){
    echo '活动不存在！';
    header("refresh:2; url=/");
    exit();
}
else{
	//判断是否关闭状态
    if($activity['status'] != 'open'){
        echo '活动已关闭！';
        header("refresh:2; url=/");
        exit();
    }
    else{
        //取出微信配置
        $wechat_settings = $dosql->GetOne("SELECT * FROM `#@__wechat_settings` LIMIT 0,1");
        $app_id = isset($wechat_settings['app_id']) ? $wechat_settings['app_id'] : '';
        $app_secret = isset($wechat_settings['app_secret']) ? $wechat_settings['app_secret'] : '';

        $state =  $a_code.'XXXXX'.$pid;
        $url = 'https://open.weixin.qq.com/connect/oauth2/authorize?';
        $url .= 'appid='.$app_id.'&redirect_uri='.urlencode("http://www.cncipi.org/wechat.php").'&response_type=code&scope=snsapi_userinfo&state='.$state.'#wechat_redirect';
        header("location:".$url.$params);
        exit();
    }
}



