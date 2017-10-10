<?php
	require_once(dirname(__FILE__).'/include/config.inc.php');
    require_once(dirname(__FILE__).'/include/wechat.class.php');

    $aid = $_GET['aid'];
    $pid = $_GET['pid'];
    $uid = $_GET['uid'];
    $msg = $_GET['msg'];
    if(!empty($msg)){
        echo '<script>alert("'.$msg.'")</script>';
    }

    //取出微信配置
    $wechat_settings = $dosql->GetOne("SELECT * FROM `#@__wechat_settings` LIMIT 0,1");
    $app_id = isset($wechat_settings['app_id']) ? $wechat_settings['app_id'] : '';
    $app_secret = isset($wechat_settings['app_secret']) ? $wechat_settings['app_secret'] : '';

    //获取js参数
    $wechat_common = new WechatCommon($app_id, $app_secret);
    $signPackage = $wechat_common->GetSignPackage();

    $activity_info = $dosql->GetOne("SELECT * FROM `#@__wechat` WHERE `activity_code` = '$aid' LIMIT 0,1");
    $user_info = $dosql->GetOne("SELECT * FROM `#@__wechat_user` WHERE `uid` = '$pid' LIMIT 0,1");
    $user_activity_info = $dosql->GetOne("SELECT * FROM `#@__wechat_activity` WHERE `uid` = '$pid' AND `activity_code` = '$aid' LIMIT 0,1");

    //活动信息
    if(strtotime($activity_info['start_date']) > time()){
        $a_status = 'no_start';
    }elseif(strtotime($activity_info['end_date']) < time()){
        $a_status = 'end';
    }
    else{
        $a_status = '';
    }

    //计算字数
    if(strlen($activity_info['title']) >=30 && strlen($activity_info['title'])<=130){
        $title_class = 'small';
    }
    elseif(strlen($activity_info['title']) >=130){
        $title_class = 'small_three';
    }

    //计算排名
    $rank_list = array();
    $rank_list_no = array();
    $dosql->Execute("SELECT * FROM `#@__wechat_activity` WHERE `activity_code` = '$aid' ORDER BY `up` DESC, `update_date` DESC");
    while($row = $dosql->GetArray()){
        $rank_list[$row['uid']] = array(
            'uid'=> $row['uid'],
            'up'=> $row['up']
        );
    }
    if(!empty($rank_list)){
        $rank_list = multi_sort($rank_list, 'up');
        $i = 1;
        foreach ($rank_list as $k=> $v){
            $rank_list[$k]['rank'] = $i;
            $rank_list_no[$i] = $v;
            $i++;
        }
    }
    //比前一名差多少平
    if($rank_list[$pid]['rank'] == 1){
        $per_up = 0;
    }
    else{
        $per_up = $rank_list_no[($rank_list[$pid]['rank']-1)]['up'] - $rank_list[$pid]['up'];
    }
    //比后一名多多少平
    if($rank_list[$pid]['rank'] == count($rank_list)){
        $next_up = 0;
    }
    else{
        $next_up = $rank_list[$pid]['up'] - $rank_list_no[($rank_list[$pid]['rank']+1)]['up'];
    }
    $a = 1;
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <title><?php echo $activity_info['title'].'-北京中工医药研究院（CIPI）'?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php echo $activity_info['description']?>"/>
    <link rel="stylesheet" href="<?php echo $cfg_webpath; ?>/templates/wechat/css/style.css">
	<script src="<?php echo $cfg_webpath; ?>/templates/default/js/jquery.js" type="text/javascript"></script>
	<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
</head>
<body>
<!--头部-->
<div class="header">
    <div class="hd_title <?php echo $title_class; ?>">
        <?php echo $activity_info['title']?>
    </div>
    <div class="hd_body">
        <div class="hdb_left">
            <span class="mb_ico"><img src="<?php echo $user_info['headimgurl']?>"/></span>
            <span class="mb_name"><?php echo $user_info['nickname']?></span>
        </div>
        <div class="hdb_right">
            <span class="hdbr_txt">当前排行</span>
            <span class="hd_ph"><?php echo $rank_list[$pid]['rank']?></span>
        </div>
    </div>
</div>

<!--赞数-->
<div class="zan">
    <span class="zan_top">当前已有<i id="zan"><?php echo $user_activity_info['up']?></i>赞</span>
    <span class="zan_down">距离前一名还差<i><?php echo $per_up ?></i>赞&nbsp;&nbsp;已超出后一名<i><?php echo $next_up ?></i>赞</span>
</div>

<div class="box">
<!--我在参加-->
<div class="box_item join">
    <div class="box_title">我想参加</div>
    <div class="box_body">
        <?php echo $activity_info['description']?>
        <img class="join_pic" src="<?php echo $activity_info['thumb']?>">
    </div>
</div>

    <?php
    if ($a_status == 'no_start') {
    ?>
        <div class="btn_box">
            <a href="javascript:void (0);" onclick="no_start()" class="no_start_btn">&nbsp;</a>
        </div>
    <?php
    }
    elseif($a_status == 'end'){
    ?>
        <div class="btn_box">
            <a href="javascript:void (0);" onclick="is_end()" class="end_btn">&nbsp;</a>
        </div>
    <?php
    }
    else{
    ?>
        <div class="btn_box">
            <a href="javascript:void (0);" onclick="do_up()" class="up_btn">&nbsp;</a>
            <a href="javascript:void (0);" onclick="do_shear()" class="join_btn">&nbsp;</a>
        </div>
    <?php
    }
    ?>

    <div class="box_item">
        <div class="box_title">当前点赞前20位用户</div>
        <div class="box_body">
            <ul class="yh_ul">
                <?php
                    $i = 1;
	                $dosql->Execute("SELECT * FROM `#@__wechat_activity` AS a LEFT JOIN `#@__wechat_user` AS b ON a.`uid` = b.`uid` WHERE a.`activity_code` = '$aid' ORDER BY a.`up` DESC, a.`update_date` DESC LIMIT 0, 20");
					while($row = $dosql->GetArray()){
	            ?>
                    <li class="yh_item"><?php echo $rank_no_list[$i]?>： <?php echo $row['nickname']?> —>票数:<?php echo $row['up']?></li>
	            <?php
                        $i++;
                    }
                ?>
            </ul>
        </div>
    </div>

    <div class="box_item">
        <div class="box_title">这些人帮TA集过赞</div>
        <div class="box_body">
            <ul class="zan_pic" id="zan_pic">
	            <?php
	                $dosql->Execute("SELECT * FROM `#@__wechat_up` WHERE `uid` = '$pid' AND `aid` = '$aid' ORDER BY `up_datetime` DESC");
					while($row = $dosql->GetArray()){
	            ?>
                    <li class="zan_item"><img src="<?php echo $row['up_headimgurl'] ?>" alt="<?php echo $row['up_nickname']?>" /></li>
	            <?php } ?>
            </ul>
        </div>
    </div>

    <!--活动内容-->
    <div class="box_item">
        <div class="box_title">活动内容</div>
        <div class="box_body">
            <span class="all_txt">
                <?php echo $activity_info['content']?>
            </span>
        </div>
    </div>

    <!--活动规则  有查看更多时++一个class  more-->
    <div class="box_item more">
        <div class="box_title">活动规则</div>
        <div class="box_body">
            <span class="all_txt">
                <?php echo $activity_info['detail']?>
            </span>
        </div>
	    <?php
	    if(isset($activity_info['article_link']) && !empty($activity_info['article_link'])){
			echo '<a class="more_btn" href="'.$activity_info['article_link'].'">查看更多+</a>';
	    }
	    ?>
    </div>

    <!--活动议程-->
    <div class="box_item">
        <div class="box_title">活动议程</div>
        <div class="box_body">
            <span class="all_txt">
                <?php echo $activity_info['agenda']?>
            </span>
        </div>
    </div>
</div>

<!--底部-->
<div class="foot">
    <span class="er_pic"><img src="<?php echo $cfg_webpath; ?>/templates/wechat/images/QR_Wechat.jpg"></span>
    <span class="er_txt">关于会议通知等详情可长按二维码关注公众账号索取</span>
</div>

</body>
</html>
<script>
    function no_start() {
        alert('活动尚未开始！');
    }

    function is_end() {
        alert('活动已结束！');
    }

	function do_up(){
        window.location.href = '/wechat_up.php?pid=<?php echo $pid?>&aid=<?php echo $aid?>';
	}

	function do_shear(){
		window.location.href = 'http://www.cncipi.org/activity.php?aid=<?php echo $aid ?>';
	}

    //初始化
        wx.config({
            debug: false,        //开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
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
            link: 'http://www.cncipi.org/activity.php?aid=<?php echo $aid ?>&uid=<?php echo $uid ?>&pid=<?php echo $pid ?>', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
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
            link: 'http://www.cncipi.org/activity.php?aid=<?php echo $aid ?>&uid=<?php echo $uid ?>&pid=<?php echo $pid ?>', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
            imgUrl: 'http://www.cncipi.org/<?php echo $activity_info['thumb']?>', // 分享图标
            type: '', // 分享类型,music、video或link，不填默认为link
            success: function () {
                // 用户确认分享后执行的回调函数
                alert('分享成功！感谢您的支持！');
            }
        });
</script>