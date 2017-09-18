<?php require_once(dirname(__FILE__).'/inc/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>左侧菜单</title>
<link href="templates/style/menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/tinyscrollbar.js"></script>
<script type="text/javascript" src="templates/js/leftmenu.js"></script>
</head>
<body>
<div class="quickBtn"> <span class="quickBtnLeft"><a href="infolist_add.php" target="main">添列表</a></span> <span class="quickBtnRight"><a href="infoimg_add.php" target="main">添图片</a></span> </div>

<div class="tGradient"></div>
<div id="scrollmenu">
	<div class="scrollbar">
		<div class="track">
			<div class="thumb">
				<div class="end"></div>
			</div>
		</div>
	</div>
	<div class="viewport">
		<div class="overview">
			<!--scrollbar start-->
			<div class="menubox">
				<div class="title on" id="t1" onclick="DisplayMenu('leftmenu01');" title="点击切换显示或隐藏"> 网站系统管理 </div>
				<div id="leftmenu01"> <a href="admin.php" target="main">管理员管理</a> <a href="site.php" target="main">站点配置管理</a> <a href="web_config.php" target="main">网站信息配置</a> <a href="upload_filemgr_sql.php" target="main">上传文件管理</a><a href="database_backup.php" target="main">数据库管理</a> <a href="admingroup.php" target="main" title="管理组管理" class="admingroup"></a> </div>
			</div>
			<div class="hr_5"></div>
			<div class="menubox">
				<div class="title" onclick="DisplayMenu('leftmenu02');" title="点击切换显示或隐藏"> 栏目内容管理 </div>
				<div id="leftmenu02" style="display:none"> <a href="infoclass.php" target="main">栏目管理</a> <a href="maintype.php" target="main">二级类别管理</a>
					<div class="hr_1"> </div>
					<a href="info.php" target="main">单页信息管理</a> <a href="infolist.php" target="main">列表信息管理</a> <a href="infoimg.php" target="main">图片信息管理</a> <a href="soft.php" target="main">软件下载管理</a>
					<div class="hr_1"> </div>
					<a href="member4.php" target="main">在线报名</a>
					<a href="member1.php" target="main">参与演讲</a>
					<a href="memberfb.php" target="main">论文发表</a>
					<a href="member13.php" target="main">网站留言</a>
					<a href="membercx.php" target="main">证书查询</a>
					<a href="memberit.php" target="main">内训需求</a>
					<a href="memberca.php" target="main">课程建议</a>
					 <a href="member7.php" target="main">参展申请</a>  
					  <a href="infoflag.php" target="main" title="信息标记管理" class="infoattr"></a>
					   <a href="infosrc.php" target="main" title="信息来源管理" class="infosrc"></a> </div>
			</div>
			<div class="hr_5"></div>
			<div class="menubox">
				<div class="title" onclick="DisplayMenu('leftmenu03');" title="点击切换显示或隐藏"> 模块扩展管理 </div>
				<div id="leftmenu03" style="display:none"><a href="member.php" target="main">用户管理</a> <a href="userfavorite.php" target="main">用户收藏管理</a> <a href="usercomment.php" target="main">用户评论管理</a>
					<div class="hr_1"> </div>
					<a href="message.php" target="main">留言模块管理</a> <a href="admanage.php" target="main">广告模块管理</a> <a href="weblink.php" target="main">友情链接管理</a> <a href="job.php" target="main">招聘模块管理</a> <a href="vote.php" target="main">投票模块管理</a>
					<div class="hr_1"> </div>
					<a href="cascade.php" target="main">级联数据管理</a> <a href="usergroup.php" target="main" title="用户组管理" class="usertype"></a> <a href="adtype.php" target="main" title="广告位管理" class="adtype"></a> <a href="weblinktype.php" target="main" title="友情链接类别" class="weblinktype"></a> </div>
			</div>
			<div class="hr_5"></div>
			
			
			<!--scrollbar end-->
		</div>
	</div>
</div>
<div class="bGradient"></div>

<div class="copyright"> </div>
</body>
</html>
