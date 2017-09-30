<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/30
 * Time: 9:46
 */
require_once(dirname(__FILE__).'/include/config.inc.php');
require_once(dirname(__FILE__).'/include/wechat.class.php');

//取出微信配置
$wechat_settings = $dosql->GetOne("SELECT * FROM `#@__wechat_settings` LIMIT 0,1");
$app_id = isset($wechat_settings['app_id']) ? $wechat_settings['app_id'] : '';
$app_secret = isset($wechat_settings['app_secret']) ? $wechat_settings['app_secret'] : '';

//获取js参数
$wechat_common = new WechatCommon($app_id, $app_secret);
$signPackage = $wechat_common->GetSignPackage();

//活动信息
$aid = $_GET['aid'];
$pid = $_GET['pid'];
$uid = $_GET['uid'];
$msg = $_GET['msg'];
$activity_info = $dosql->GetOne("SELECT * FROM `#@__wechat` WHERE `activity_code` = '$aid' LIMIT 0,1");
?>

<html>
    <head>
        <title>微信分享</title>
        <script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
    </head>
    <body>
        <?php
            echo 'appId: '.$signPackage["appId"].'<br/>';
            echo 'timestamp: '.$signPackage["timestamp"].'<br/>';
            echo 'nonceStr: '.$signPackage["nonceStr"].'<br/>';
            echo 'signature: '.$signPackage["signature"].'<br/>';
            echo 'title: '.$activity_info['title'].'<br/>';
            echo 'description: '.$activity_info['description'].'<br/>';
            echo 'thumb: http://www.cncipi.org/'.$activity_info['thumb'].'<br/>';
        ?>
    </body>
    <script>
        //初始化
        wx.config({
            debug: true,        //开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
            appId: '<?php echo $signPackage["appId"];?>',       //必填，公众号的唯一标识
            timestamp: <?php echo $signPackage["timestamp"];?>,     //必填，生成签名的时间戳
            nonceStr: '<?php echo $signPackage["nonceStr"];?>', //必填，生成签名的随机串
            signature: '<?php echo $signPackage["signature"];?>',      //必填，签名，见附录1
            jsApiList: [
                'checkJsApi',
                'openLocation',
                'getLocation',
                'onMenuShareTimeline',
                'onMenuShareAppMessage'
            ]       //必填，需要使用的JS接口列表，所有JS接口列表见附录2
        });

        //通过checkJsApi判断当前客户端版本是否支持分享参数自定义
        wx.checkJsApi({
            jsApiList: [
                'getLocation',
                'onMenuShareTimeline',
                'onMenuShareAppMessage'
            ],
            success: function (res) {
                alert(JSON.stringify(res));
            }
        });

        //获取“分享到朋友圈”按钮点击状态及自定义分享内容接口
        wx.onMenuShareTimeline({
            title: '<?php echo $activity_info['title'];?>', // 分享标题
            link: 'http://www.cncipi.org/activity.php?aid=<?php echo $aid ?>', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
            imgUrl: 'http://www.cncipi.org/<?php echo $activity_info['thumb']?>', // 分享图标
            success: function () {
                // 用户确认分享后执行的回调函数
                alert('分享成功！感谢您的支持！');
            }
        });

        //获取“分享给朋友”按钮点击状态及自定义分享内容接口
        wx.onMenuShareAppMessage({
            title: '<?php echo $activity_info['title'];?>', // 分享标题
            desc: '<?php echo $activity_info['description'];?>', // 分享描述
            link: 'http://www.cncipi.org/activity.php?aid=<?php echo $aid ?>', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
            imgUrl: 'http://www.cncipi.org/<?php echo $activity_info['thumb']?>', // 分享图标
            type: '', // 分享类型,music、video或link，不填默认为link
            success: function () {
                // 用户确认分享后执行的回调函数
                alert('分享成功！感谢您的支持！');
            }
        });

    </script>
</html>
