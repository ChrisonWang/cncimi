<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 8 : intval($cid);
if(isset($action) and $action=='add')
{
$posttime = GetMkTime(time());
$a1 = htmlspecialchars($a1);
$a2 = htmlspecialchars($a2);
$a3 = htmlspecialchars($a3);
$a4 = htmlspecialchars($a4);
$a5 = htmlspecialchars($a5);
$a6 = htmlspecialchars($a6);
$a7 = htmlspecialchars($a7);
$a8 = htmlspecialchars($a8);
$a9 = htmlspecialchars($a9);
$a10 = htmlspecialchars($a10);
$a11 = htmlspecialchars($a11);
$a12 = htmlspecialchars($a12);
$a13 = htmlspecialchars($a13);
$a14 = htmlspecialchars($a14);
$a15 = htmlspecialchars($a15);
$sql = "INSERT INTO `#@__yanjiang` (a1, a2, a3, a4, a5,a6,a7,a8,a9,a10,a11,a12,a13,a14,a15,shijian) VALUES ('$a1', '$a2', '$a3', '$a4', '$a5', '$a6', '$a7', '$a8', '$a9', '$a10', '$a11', '$a12', '$a13', '$a14', '$a15', '$posttime')";
					if($dosql->ExecNoneQuery($sql))
					{
						ShowMsg('参与演讲提交成功，工作人员会在3个工作日内与您电话确认！','index.php');
						exit();
					}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $cfg_webname; ?> - <?php echo GetCatName($cid); ?></title>
<meta name="keywords" content="北京中仑工业微生物研究所">
<meta name="description" content="北京中仑工业微生物研究所">

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
?>

<?php 
	require_once('left.php');
?>
    
    
    <div class="page-r"> 
		<div class="page-r-t clearfix">
        	<span>参与演讲</span>
        </div>

    	<div class="page-r-c">
        	<div class="login-box">
        	
            	<div class="login-box-l" style="border:0;width:100%">
                	<form  method="post" action="" onSubmit="return checkform()">
                	<ul class="form">
                        <li>
                            <span class="f">姓名<font style="color:#f00">*</font></span>
                            <input type="text" name="a1" id="useId" class="need">
                            <samp>请输入姓名</samp>
                        </li>
                        <li>
                            <span class="f">手机号码<font style="color:#f00">*</font></span>
                            <input type="text" name="a2" id="useName" class="need">
                            <samp>请输入手机号码</samp>
                        </li>
                        <li>
                            <span class="f">所在单位<font style="color:#f00">*</font></span>
                            <input type="text" name="a3" id="mail" class="need">
                            <samp>请输入所在单位</samp>
                        </li>
                        <li>
                            <span class="f">所在城市<font style="color:#f00">*</font></span>
                            <input type="text" name="a4" id="mail" class="need">
                            <samp>请输入所在城市</samp>
                        </li>
                        <li>
                            <span class="f">E-Mail<font style="color:#f00">*</font></span>
                            <input type="text" name="a5" id="company" class="need">
                            <samp>E-Mail</samp>
                        </li>
                        <li>
                            <span class="f">部门<font style="color:#f00">*</font></span>
                            <input type="text" name="a6"  id="depart" class="need">
                            <samp>请输入部门</samp>
                        </li>
                        <li>
                            <span class="f">微博&微信</span>
                            <input type="text" name="a7" id="depart">
                        </li>
                        <li>
                            <span class="f">职务<font style="color:#f00">*</font></span>
                            <input type="text" name="a8" id="depart" class="need">
                            <samp>请输入职务</samp>
                        </li>
                        
                        
                        
                        <li>
                        	<span class="f">您的个人简介<font style="color:#f00">*</font></span>
                        	<textarea class="need" name="a9" ></textarea>
                            <samp>请输入您的个人简介</samp>
                            <div class="clear"></div>
                        </li>
                        <li>
                        	<span class="f">您的演讲经验<font style="color:#f00">*</font></span>
                        	<textarea class="need" name="a10" ></textarea>
                            <samp>请输入您的演讲经验</samp>
                            <div class="clear"></div>
                        </li>
                        <li>
                        	<span class="f">您的演讲题目<font style="color:#f00">*</font></span>
                        	<textarea class="need" name="a11" ></textarea>
                            <samp>请输入您的演讲题目</samp>
                            <div class="clear"></div>
                        </li>
                        <li>
                        	<span class="f">药品类演讲类型<font style="color:#f00">*</font></span>
                        	<div class="option-div">
                            	<input type="radio" name="a12" value="法规专场">微生物法规专场<input type="radio" name="a12" value="环境专场">微生物环境专场<input type="radio" name="a12" value="检验专场">微生物检验专场<input type="radio" name="a12" value="控制专场">微生物控制专场
                            </div>
                            <div class="clear"></div>
                        </li>
                        <li>
                        	<span class="f">您的演讲会为参会者带来哪些收益<font style="color:#f00">*</font></span>
                        	<textarea class="need" name="a13"></textarea>
                            <samp>请输入您的演讲题目</samp>
                            <div class="clear"></div>
                        </li>
                        <li>
                        	<span class="f">内容大纲(50字以上)<font style="color:#f00">*</font></span>
                        	<textarea class="need" name="a14"></textarea>
                            <samp>请输入您的演讲题目</samp>
                            <div class="clear"></div>
                        </li>
                        <li>
                        	<span class="f">议题是否分享过？（在哪里分享过）<font style="color:#f00">*</font></span>
                        	<textarea class="need" name="a15"></textarea>
                            <samp>请输入您的演讲题目</samp>
                            <div class="clear"></div>
                        </li>
                        
                        <li>
                        <input type="hidden" name="action" id="action" value="add" />
                            <span class="f">&nbsp;</span>
                            <button type="submit">提交</button>
                        </li>
                	</ul>
                    </form>
                </div>
        	
            	
            </div>
        </div>
    
    </div>
    
    <div class="clear"></div>
    
</div>

<?php 
	require_once('footer.php');
?>
