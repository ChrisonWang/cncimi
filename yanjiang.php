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
                	<form name="form" id="form" method="post" action="">
                <table style="font-size: 12px;
                    line-height:28px; color: #333; background: #005288;" width="800" cellspacing="1" cellpadding="5" border="0">
                    <tbody><tr>
                        <td colspan="4" style="background: #005288; color: #fff; font-family: Microsoft YaHei,Arial;
                            font-weight: bold; font-size: 14px; padding: 8px;" align="center">
                            演讲征集表<br>
                          
                        </td>
                    </tr>
                    <tr>
                        <td width="123" bgcolor="#FFFFFF" align="center">
                            姓名<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="252" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a1" id="a1" style=" border: none;border-bottom:1px solid #ccc; width: 256px; height:22px;" type="text">
                          </span>
                      </td>
                         <td width="105" bgcolor="#FFFFFF" align="center">
                            手机号码<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="200" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a2" id="a2" style="width:189px; border-bottom:1px solid #ccc; border-left-style: none; border-left-color: inherit; border-left-width: medium; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium; height:22px;" type="text">
                          </span>
                      </td>
                    </tr>
                      <tr>
                        <td width="123" bgcolor="#FFFFFF" align="center">
                            所在单位<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="252" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a3" id="a3" style=" border: none;border-bottom:1px solid #ccc; width: 256px; height:22px;" type="text">
                          </span>
                        </td>
                         <td width="105" bgcolor="#FFFFFF" align="center">
                             所在城市<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="200" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a4" id="a4" style="width:189px; border-bottom:1px solid #ccc; border-left-style: none; border-left-color: inherit; border-left-width: medium; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium; height:22px;" type="text">
                          </span>
                        </td>
                    </tr>
					
					<tr>
                        <td width="123" bgcolor="#FFFFFF" align="center">
                            E-Mail<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="252" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a5" id="a5" style=" border: none;border-bottom:1px solid #ccc; width: 256px; height:22px;" type="text">
                          </span>
                      </td>
                         <td width="105" bgcolor="#FFFFFF" align="center">
                             部门<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="200" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a6" id="a6" style="width:189px; border-bottom:1px solid #ccc; border-left-style: none; border-left-color: inherit; border-left-width: medium; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium; height:22px;" type="text">
                          </span>
                      </td>
                    </tr>
					<tr>
                        <td width="123" bgcolor="#FFFFFF" align="center">
                            微博&amp;微信                        </td>
                        <td width="252" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a7" id="a7" style=" border: none;border-bottom:1px solid #ccc; width: 256px; height:22px;" type="text">
                          </span>
                      </td>
                         <td width="105" bgcolor="#FFFFFF" align="center">
                             职务<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="200" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a8" id="a8" style="width:189px; border-bottom:1px solid #ccc; border-left-style: none; border-left-color: inherit; border-left-width: medium; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium; height:22px;" type="text">
                          </span>
                      </td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF" align="center">
                            您的个人简介<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span></td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <textarea name="a9" id="a9" style=" border: none;border-bottom:1px solid #ccc; width: 580px; height: 70px;
                                    font-size: 12px; line-height: 22px"></textarea>
                            </span>
                        </td>
                    </tr>
					<tr>
                        <td bgcolor="#FFFFFF" align="center">
                            您的演讲经验<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span></td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <textarea name="a10" id="a10" style=" border: none;border-bottom:1px solid #ccc; width: 580px; height: 70px;
                                    font-size: 12px; line-height: 22px"></textarea>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF" align="center">
                            <font style="color:#FF0000; font-weight:bold;">演讲题目</font><span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                           <span style="color: #000000; padding-left: 8px;">
                                <textarea name="a11" id="a11" style="height:70px;width:580px; border-bottom:1px solid #ccc; font-size: 12px; line-height: 22px; border-left-style: none; border-left-color: inherit; border-left-width: medium; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium;"></textarea>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF" align="center">
                            药品类演讲类型<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF" align="center">
                            <table id="_ctl0_ContentPlaceHolder1_rdotype" style="line-height: 25px;
                                padding-bottom: 5px;" width="80%" border="0">
	<tbody><tr>
		<td><input id="a12" name="a12" value="法规专场" checked="checked" type="radio">&nbsp;&nbsp;<label for="_ctl0_ContentPlaceHolder1_rdotype_0">微生物法规专场</label></td><td><span style="padding: 0px 5px;"><input id="a12" name="a12" value="环境专场" type="radio">&nbsp;&nbsp;<label for="_ctl0_ContentPlaceHolder1_rdotype_1">微生物环境专场</label></span></td><td><input id="a12" name="a12" value="检验专场" type="radio">&nbsp;&nbsp;<label for="_ctl0_ContentPlaceHolder1_rdotype_2">微生物检验专场</label></td><td><input id="a12" name="a12" value="控制专场
" type="radio">&nbsp;&nbsp;<label for="_ctl0_ContentPlaceHolder1_rdotype_2">微生物控制专场</label></td>
	</tr>
</tbody></table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 110px; padding: 5px;" bgcolor="#FFFFFF" align="center">
                            您的演讲会为参会者带来哪些收益<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>

</td>
                        <td colspan="3" rowspan="1" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <textarea name="a13" id="a13" style="height:70px;width:580px; border-bottom:1px solid #ccc; font-size: 12px; line-height: 22px; border-left-style: none; border-left-color: inherit; border-left-width: medium; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium;"></textarea>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 110px; padding: 5px;" bgcolor="#FFFFFF" align="center">
                            内容大纲(50字以上)<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>
<br>
                            <br>
                        </td>
						<td colspan="3" rowspan="1" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <textarea name="a14" id="a14" style="height:70px;width:580px; border-bottom:1px solid #ccc; font-size: 12px; line-height: 22px; border-left-style: none; border-left-color: inherit; border-left-width: medium; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium;"></textarea>
                            </span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="width: 110px; padding: 5px;" bgcolor="#FFFFFF" align="center">
                            议题是否分享过？（在哪里分享过）<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span></td>
						<td colspan="3" rowspan="1" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                 <textarea name="a15" id="a15" style="height:70px;width:580px; border-bottom:1px solid #ccc; font-size: 12px; line-height: 22px; border-left-style: none; border-left-color: inherit; border-left-width: medium; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium;"></textarea>
                            </span>
                        </td>
					</tr>
                    <tr>
                        <td colspan="4" style="padding: 8px; text-align: center" bgcolor="#FFFFFF">
                        <input name="action" id="action" value="add" type="hidden">
                            <input name="_ctl0:ContentPlaceHolder1:img" id="_ctl0_ContentPlaceHolder1_img" src="images/tj_anniu.jpg" style="height:25px;width:75px;" onclick="cfm_msg();return false;" type="image" border="0">
                        </td>
                    </tr>
                </tbody></table>
</form>
                </div>
        	
            	
            </div>
        </div>
    
    </div>
    
    <div class="clear"></div>
    
</div>
<script type="text/javascript">
function cfm_msg()
{
	if($("#a1").val() == "")
	{
		alert("请填写姓名！");
		$("#a1").focus();
		return false;
	}
	if($("#a2").val() == "")
	{
		alert("请填写手机号码！");
		$("#a2").focus();
		return false;
	}
	if($("#a3").val() == "")
	{
		alert("请填写所在单位！");
		$("#a3").focus();
		return false;
	}
	if($("#a5").val() == "")
	{
		alert("请填写E-Mail！");
		$("#a5").focus();
		return false;
	}
	if($("#a6").val() == "")
	{
		alert("请填写部门！");
		$("#a6").focus();
		return false;
	}
	if($("#a8").val() == "")
	{
		alert("请填写职务！");
		$("#a8").focus();
		return false;
	}
	if($("#a9").val() == "")
	{
		alert("请填写您的个人简介！");
		$("#a9").focus();
		return false;
	}
	if($("#a10").val() == "")
	{
		alert("请填写您的演讲经验！");
		$("#a10").focus();
		return false;
	}
	if($("#a11").val() == "")
	{
		alert("请填写演讲题目！");
		$("#a11").focus();
		return false;
	}
	if($("#a13").val() == "")
	{
		alert("请填写您的演讲会为参会者带来哪些收益！");
		$("#a13").focus();
		return false;
	}
	if($("#a14").val() == "")
	{
		alert("请填写内容大纲！");
		$("#a14").focus();
		return false;
	}
	if($("#a15").val() == "")
	{
		alert("请填写议题是否分享过！");
		$("#a15").focus();
		return false;
	}
	$("#form").submit();
}
</script>
<?php 
	require_once('footer.php');
?>
