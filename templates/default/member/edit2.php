<?php require_once('/include/config.inc.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $cfg_webname; ?> - 会员资料</title>
<meta name="keywords" content="北京中仑工业微生物研究所">
<meta name="description" content="北京中仑工业微生物研究所">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo $cfg_webpath; ?>/templates/default/css/basic.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $cfg_webpath; ?>/templates/default/css/login.css" type="text/css" rel="stylesheet" />
<script src="<?php echo $cfg_webpath; ?>/templates/default/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo $cfg_webpath; ?>/templates/default/js/all.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $cfg_webpath; ?>/templates/default/js/member.js"></script>
</head>
<script type="text/javascript">
//加入收藏
function AddFavorite(){
	if(document.all){
		try{
			window.external.addFavorite(window.location.href,document.title);
		}catch(e){
			alert("加入收藏失败，请使用Ctrl+D进行添加！");
		}
	}else if(window.sidebar){
		window.sidebar.addPanel(document.title, window.location.href, "");
	}else{
		alert("加入收藏失败，请使用Ctrl+D进行添加！");
	}
}
</script>
<body>

<?php 
	require_once('head.php');
	if(!defined('IN_MEMBER')) exit('Request Error!');

//获取用户信息
$r_user = $dosql->GetOne("SELECT * FROM `#@__member` WHERE username='$c_uname'");

//当记录出现错误，强制跳转登录页
if(!isset($r_user) or !is_array($r_user))
	header('location:?c=login');
?>
    <div class="position">您现在的位置:首页 > 会员资料</div>
    
    <div class="page-l">
    	<div class="page-l-box">
    		<div class="page-l-t">会员中心</div>
    		<div class="page-l-c">
    		<a href="?c=edit" <?php if($c=='edit' ) echo 'class="current"'; ?>>编辑资料</a> 
			<a href="?c=edit2" <?php if($c=='edit2' ) echo 'class="current"'; ?>>修改密码</a>
            </div>
    	</div>
        
        <div class="index-box mt10" style="width:213px; margin-left:0px">
        	<div class="index-box-wrap">
        		<div class="index-box-t clearfix">
                    <span style="background-position:0px -703px">联系我们</span>
                </div>
                <div class="index-box-c page-txt">
                
                	<div class="left-title">北京中工医药研究院<br>北京中仑工业微生物研究院</div>
                    
                    <div class="left-box">
                    	<h1>联系方式</h1>
                    	<div class="left-box-c">
                        	86-18611605599<br>
							86-10-80338393<br>
							86-10-69383722
                        </div>
                    </div>
                    
                    <div class="left-box">
                    	<h1>邮箱</h1>
                    	<div class="left-box-c">
                        	<a href="mailto:cncipi@126.com" target="_blank">cncipi@126.com</a><br>
							<a href="mailto:cncimi@126.com" target="_blank">cncimi@126.com</a>
                        </div>
                    </div>
                    
                    <div class="left-box">
                    	<h1>网址</h1>
                    	<div class="left-box-c">
                        	<a href="http://www.cncipi.org" target="_blank">www.cncipi.org</a><br>
							<a href="http://www.cncimi.org" target="_blank">www.cncimi.org</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="page-r"> 
		<div class="page-r-t clearfix">
        	<span>修改密码</span>
        </div>

    	<div class="page-r-c">
        	<div class="login-box">
        	
            	<div class="login-box-l" style="width:100%; border:0">
                	<form name="form" id="form" method="post" action="?a=saveedit"   onSubmit="return checkform()">
                	<ul class="form">
                        <li>
                            <span class="f">旧密码：<font style="color:#f00">*</font></span>
                            <input type="text" name="oldpassword" id="oldpassword" class="class_input"  />
                            
                        </li>
                        <li>
                            <span class="f">新密码：<font style="color:#f00">*</font></span>
                            <input type="text" name="password" id="password" class="password"  />
                            
                        </li>
                        <li>
                            <span class="f">确　认：<font style="color:#f00">*</font></span>
                            <input type="text" name="repassword" id="repassword" class="repassword"  />
                            
                        </li>
                        <li>
                            <span class="f">&nbsp;</span>
                            <input type="hidden" name="id" id="id" value="<?php echo $r_user['id']; ?>" />
                            <button type="submit">确认修改</button>
                        </li>
                	</ul>
                    </form>
                </div>
        	
            
            </div>
        </div>
    
    </div>
    
    <div class="clear"></div>
    
</div>

<?php require_once('footer.php'); ?>