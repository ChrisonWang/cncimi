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
	    $end_seconds = 0;
        $a_status = 'no_start';
    }elseif(strtotime($activity_info['end_date']) < time()){
	    $end_seconds = 0;
        $a_status = 'end';
    }
    else{
		$end_seconds = strtotime($activity_info['end_date']) - time();
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
	//分享描述
	$nickname = empty($user_info['nickname']) ? '' : $user_info['nickname'].'：';
	$title = $nickname.$activity_info['title'];

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <title><?php echo $activity_info['title'].'北京中工医药研究院（CIPI）'?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php echo $desc?>"/>
    <link rel="stylesheet" href="<?php echo $cfg_webpath; ?>/templates/wechat/css/style.css">
	<script src="<?php echo $cfg_webpath; ?>/templates/default/js/jquery.js" type="text/javascript"></script>
	<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
	<style type="text/css">
		h1{font-family:"微软雅黑";font-size:40px;margin:20px 0;border-bottom:solid 1px #ccc;padding-bottom:20px;letter-spacing:2px;}

		.time-item strong{background:#C71C60;color:#fff;line-height:.25rem;font-size:.2rem;font-family:Arial;padding:0 .1rem;margin-right:.1rem;border-radius:5px;box-shadow:1px 1px 3px rgba(0,0,0,0.2);}
		#day_show{float:left;line-height:.25rem;color:#c71c60;font-size:.2rem;margin:0 .1rem;font-family:Arial, Helvetica, sans-serif;}
		.item-title .unit{background:none;line-height:.25rem;font-size:.2rem;padding:0 .1rem;float:left;}
	</style>
</head>
<body>
<script>
	//初始化
    wx.config({
        debug: false,        //开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: '<?php echo $signPackage["appId"];?>',       //必填，公众号的唯一标识
        timestamp: '<?php echo $signPackage["timestamp"];?>',     //必填，生成签名的时间戳
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

	wx.ready(function() {
		//获取“分享给朋友”按钮点击状态及自定义分享内容接口
		wx.onMenuShareAppMessage({
			title: '<?php echo $title;?>', // 分享标题
			desc: '<?php echo $activity_info['description'];?>', // 分享描述
			link: 'http://www.cncipi.org/activity.php?aid=<?php echo $aid ?>&uid=<?php echo $uid ?>&pid=<?php echo $pid ?>', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
			imgUrl: 'http://www.cncipi.org/<?php echo $activity_info['thumb']?>', // 分享图标
			type: 'link', // 分享类型,music、video或link，不填默认为link
			success: function () {
				// 用户确认分享后执行的回调函数
				alert('分享成功！感谢您的支持！');
			}
		});
		//获取“分享到朋友圈”按钮点击状态及自定义分享内容接口
		wx.onMenuShareTimeline({
			title: '<?php echo $title;?>', // 分享标题
			link: 'http://www.cncipi.org/activity.php?aid=<?php echo $aid ?>&uid=<?php echo $uid ?>&pid=<?php echo $pid ?>', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
			imgUrl: 'http://www.cncipi.org/<?php echo $activity_info['thumb']?>', // 分享图标
			success: function () {
				// 用户确认分享后执行的回调函数
				alert('分享成功！感谢您的支持！');
			}
		});
	});

</script>
<!--头部-->
<div class="header">
    <div class="hd_title <?php echo $title_class; ?>">
        <?php echo $title; ?>
    </div>
    <div class="hd_body">
        <div class="hdb_left">
            <span class="mb_ico"><img src="<?php echo $user_info['headimgurl']?>"/></span>
            <span class="mb_name"><?php echo $user_info['nickname']?></span>
        </div>
	    <?php if( $rank_list[$pid]['rank'] <= 80 ){ ?>
        <div class="hdb_right">
            <span class="hdbr_txt">当前排行</span>
            <span class="hd_ph"><?php echo $rank_list[$pid]['rank']?></span>
        </div>
	    <?php } ?>
    </div>
</div>

<!--赞数-->
<div class="zan">
    <span class="zan_top">当前已有<i id="zan"><?php echo $user_activity_info['up']?></i>赞</span>
    <span class="zan_down">距离前一名还差<i><?php echo $per_up ?></i>赞&nbsp;&nbsp;已超出后一名<i><?php echo $next_up ?></i>赞</span>
</div>

<div class="box">

<!--倒计时-->
<div class="box_item join">
    <div class="box_title">距离活动结束还有</div>
    <div class="box_body">
        <div class="time-item" style="padding-left: .18rem">
			<span id="day_show">0天</span>
			<strong id="hour_show">0时</strong>
			<strong id="minute_show">0分</strong>
			<strong id="second_show">0秒</strong>
		</div><!--倒计时模块-->
    </div>
</div>

<!--我在参加-->
<div class="box_item join">
    <div class="box_title">我在参加</div>
    <div class="box_body">
        <?php echo $activity_info['description']?>
	    <div class="box_body_thumb">
		    <img class="join_pic" src="<?php echo $activity_info['thumb']?>">
	    </div>
    </div>
</div>

    <?php
    if ($a_status == 'no_start') {
    ?>
        <p style="text-align: center; color: #999999; padding-top: .2rem">活动未开始，暂不显示积赞按钮</p>
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
	    <p style="text-align: center; color: #999999; padding-top: .1rem">注：点击我也要参与积赞，将生成自己的点赞页面</p>
    <?php
    }
    ?>

	<?php if( $a_status == 'end' ){ ?>
        <div class="box_item">
        <div class="box_title">当前积赞排名前20位用户</div>
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
	<?php } ?>

    <div class="box_item">
        <div class="box_title">这些人帮 "<?php echo empty($user_info['nickname']) ? 'Ta' : $user_info['nickname'] ?>" 集过赞</div>
        <div class="box_body" style="max-height: 1.40rem; overflow: scroll">
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
	    if(isset($activity_info['article_link']) && !empty($activity_info['article_link']) && 1==2){
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
	<!--论坛会场-->
    <div class="box_item">
        <div class="box_title">论坛会场</div>
        <div class="box_body">
            <span class="all_txt">
                <?php echo $activity_info['lthc']?>
            </span>
        </div>
    </div>
	<!--往届回顾-->
    <div class="box_item">
        <div class="box_title">往届回顾</div>
        <div class="box_body">
            <span class="all_txt">
                <?php echo $activity_info['wjhg']?>
            </span>
        </div>
    </div>
</div>

<!--链接-->
<div class="foot_link">
    <span class="er_pic">
	    <a href="<?php echo $activity_info['article_link'] ?>">
		    <img src="<?php echo $cfg_webpath; ?>/templates/wechat/images/link.png"/>
	    </a>
    </span>
</div>

<!--底部-->
<div class="foot">
    <span class="er_pic">
	    <img src="<?php echo $cfg_webpath; ?>/templates/wechat/images/left_qr.png" alt="微生物研究院"/>
	    <img src="<?php echo $cfg_webpath; ?>/templates/wechat/images/right_qr.png" alt="IDMF2017在线报名" style="margin-left: 0.2rem"/>
    </span>
	<span class="er_txt_box">
		<span class="er_txt">微生物研究院</span>
        <span class="er_txt" style="margin-left: 0.28rem">IDMF2017在线报名</span>
	</span>
</div>

</body>
<script>
	var intDiff = parseInt(<?php echo $end_seconds?>);//倒计时总秒数量
	$(function(){
		timer(intDiff);
	});

	function timer(intDiff){
		if(intDiff <= 0){
			$('#day_show').html("0天");
			$('#hour_show').html('00时');
			$('#minute_show').html('00分');
			$('#second_show').html('00秒');
		}
		else {
			window.setInterval(function(){
			var day=0,
				hour=0,
				minute=0,
				second=0;//时间默认值
			if(intDiff > 0){
				day = Math.floor(intDiff / (60 * 60 * 24));
				hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
				minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);
				second = Math.floor(intDiff) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
			}
			if (minute <= 9) minute = '0' + minute;
			if (second <= 9) second = '0' + second;
			$('#day_show').html(day+"天");
			$('#hour_show').html('<s id="h"></s>'+hour+'时');
			$('#minute_show').html('<s></s>'+minute+'分');
			$('#second_show').html('<s></s>'+second+'秒');
			intDiff--;
			}, 1000);
		}
	}

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
</script>
</html>