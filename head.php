<div class="top all-wrap">
	<div class="wrap clearfix">
    	<div class="top-a pull-right">
    		
    		<a href="javascript:;" onclick="AddFavorite();return false;">加入收藏</a>
    		<span style="margin-left:8px">|</span>
		<?php if($cfg_member == 'Y'){if(isset($_COOKIE['username'])){?>
	用户名：<span style="color:red;"><?php echo AuthCode($_COOKIE['username'] ,'DECODE')?></span>
	<a href="member.php?c=default">会员中心</a>&nbsp;&nbsp;
	<a href="member.php?a=logout">退出</a>
		<?php }else{ ?>
	<a href="member.php?c=login">登录</a>
	<font style="font-size:16px; font-weight:bold; margin-left:3px">·</font><a href="member.php?c=reg">注册</a>
		<?php }}else{ ?>
	<a href="javascript:;" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage(location.href);">设为首页</a>
		<?php } ?>
	
		</div>
		欢迎访问北京中工医药研究院！<span id="a"></span>
	</div>
</div>
<div class="wrap">
    <div class="head">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"
WIDTH="288" HEIGHT="195" >
<PARAM VALUE="/head.swf">
<PARAM wmode="transparent">
<PARAM VALUE=high>
<PARAM VALUE=#FFFFFF>
<EMBED src="/head.swf" quality=high  WIDTH="288" HEIGHT="195" wmode="transparent"
NAME="myMovieName" ALIGN="" TYPE="application/x-shockwave-flash"
PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
</EMBED>
</OBJECT>
    </div>

	<div class="menu clearfix">
    	<ul>
    		<li style="width:70px"><a href="/" class="top-a">首页</a></li>
    		<?php echo GetSubInfoclass(0);?>
    	</ul>
    </div>