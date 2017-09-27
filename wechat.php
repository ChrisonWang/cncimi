<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/27
 * Time: 11:29
 */
require_once(dirname(__FILE__).'/include/config.inc.php');
//获取微信配置
$wechat_settings = $dosql->GetOne("SELECT * FROM `#@__wechat_settings` LIMIT 0,1");
$app_id = isset($wechat_settings['app_id']) ? $wechat_settings['app_id'] : '';
$app_secret = isset($wechat_settings['app_secret']) ? $wechat_settings['app_secret'] : '';

//获取微信返回的code
$code = isset($_GET['code']) ? '$_GET[\'code\']' : '';

if(!empty($code)){
    echo '获取code失败！';
    header("refresh:2; url=/");
}
else{
    //获取用户信息
    $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$app_id.'&secret='.$app_secret.'&code='.$code.'&grant_type=authorization_code';
    $access_info = file_get_contents($url);
    var_dump($access_info);
}
