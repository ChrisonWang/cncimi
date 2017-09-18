<?php require_once('/include/config.inc.php'); 
$cid = empty($cid) ? 26 : intval($cid);
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<?php echo GetHeader(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo $cfg_webpath; ?>/templates/default/css/basic.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $cfg_webpath; ?>/templates/default/css/login.css" type="text/css" rel="stylesheet" />
<script src="<?php echo $cfg_webpath; ?>/templates/default/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $cfg_webpath; ?>/templates/default/js/member.js"></script>
</head>

<body class="login-body">
<div class="login-top wrap">

</div>
<div class="login-bg">
	<div class="wrap">
		<div class="login-in-box">
        	<div class="login-in-t"><?php
				if($d == md5('reg'))
				{
					echo '恭喜您，注册成功，请登录！';
				}
				else if($d == md5('newpwd'))
				{
					echo '重设新密码成功！';
				}else
				{
					echo '用户登录';
				}
				?></div>
        	<div class="login-in-c">
            	<form id="form" method="post" action="?a=login" onsubmit="return CheckLog();">
        		<ul>
        			<li class="clearfix"><span class="l-id"></span><input type="text" name="username" id="username" class="input" placeholder="用户名"></li>
        			<li class="clearfix"><span class="l-psw"></span><input type="password" name="password" id="password" class="input" placeholder="密码"></li>
                    <li class="clearfix"><input type="text" id="yzm" class="need" name="validate" maxlength="4" style="width:100px; margin-right:10px;height:20px; line-height:20px; border:solid 1px #bdbdbd" placeholder="验证码"><img id="ckstr" src="data/captcha/ckstr.php" title="看不清？点击更换" align="absmiddle" style="cursor:pointer;" onClick="this.src=this.src+'?'" /> <a href="javascript:;" onClick="var v=document.getElementById('ckstr');v.src=v.src+'?';return false;">看不清?</a></li>
        			<li><button type="submit">登录</button></li>
        		</ul>
                </form>
        	</div>
            <div class="login-in-bg"><a href="?c=reg"></a></div>
		</div>
	</div>
</div>


<div class="login-bottom">版权所有 2010-2017 北京中工医药研究院 北京中仑工业微生物研究院<br>
地址：北京市京良路2号万科九晟商业广场1-21层 邮编：102422 电话：010-80338393 56271519 传真：010-56271516 邮箱：cncipi@126.com cncimi@126.com<br>
京ICP证05038177号 京公网安备110105013410号 站长统计 网站排名</div>

</body>
</html>
