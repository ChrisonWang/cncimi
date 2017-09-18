<?php require_once('/include/config.inc.php'); 
$cid = empty($cid) ? 10 : intval($cid);
//初始化参数检测正确性
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
$a16 = htmlspecialchars($a16);
$a17 = htmlspecialchars($a17);
$a18 = htmlspecialchars($a18);
$a19 = htmlspecialchars($a19);
$a20 = htmlspecialchars($a20);
$a21 = htmlspecialchars($a21);
$a22 = htmlspecialchars($a22);
$a23 = htmlspecialchars($a23);
$a24 = htmlspecialchars($a24);
$a25 = htmlspecialchars($a25);
$a26 = htmlspecialchars($a26);
$a27 = htmlspecialchars($a27);
$a28 = htmlspecialchars($a28);
$a29 = htmlspecialchars($a29);
$a30 = htmlspecialchars($a30);
$a31 = htmlspecialchars($a31);
$a32 = htmlspecialchars($a32);
$a33 = htmlspecialchars($a33);
$a34 = htmlspecialchars($a34);
$a35 = htmlspecialchars($a35);
$a36 = htmlspecialchars($a36);
$a37 = htmlspecialchars($a37);
$a38 = htmlspecialchars($a38);
$a39 = htmlspecialchars($a39);
$a40 = htmlspecialchars($a40);
$a41 = htmlspecialchars($a41);
$a42 = htmlspecialchars($a42);
$a43 = htmlspecialchars($a43);
$a44 = htmlspecialchars($a44);
$a45 = htmlspecialchars($a45);
$a46 = htmlspecialchars($a46);
$b1 = htmlspecialchars($b1);
$b2 = htmlspecialchars($b2);
$b4 = htmlspecialchars($b3);
$b4 = htmlspecialchars($b4);
$sql = "INSERT INTO `#@__baoming` (a1, a2, a3, a4, a5,a6,a7,a8,a9,a10,a11,a12,a13,a14,a15,a16,a17,a18,a19,a20,a21,a22,a23,a24,a25,a26,a27,a28,a29,a30,a31,a32,a33,a34,a35,a36,a37,a38,a39,a40,a41,a42,a43,a44,a45,a46,b1,b2,b3,b4,shijian) VALUES ('$a1', '$a2', '$a3', '$a4', '$a5', '$a6', '$a7', '$a8', '$a9', '$a10', '$a11', '$a12', '$a13', '$a14', '$a15', '$a16',  '$a17', '$a18', '$a19', '$a20', '$a21', '$a22', '$a23', '$a24', '$a25', '$a26', '$a27', '$a28', '$a29', '$a30', '$a31', '$a32', '$a33', '$a34', '$a35', '$a36', '$a37', '$a38', '$a39', '$a40', '$a41', '$a42', '$a43', '$a44', '$a45', '$a46','$b1','$b2','$b3','$b4', '$posttime')";
					if($dosql->ExecNoneQuery($sql))
					{
						ShowMsg('参会报名提交成功，工作人员会在3个工作日内与您电话确认！','index.php');
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
<style>
.STYLE1 {
    color: #FFFFFF;
}
</style>
<body>

<?php 
	require_once('head.php');
?>

<?php 
	require_once('left.php');
?>
    
    <div class="page-r"> 
		<div class="page-r-t clearfix">
        	<span>在线报名</span>
        </div>

    	<div class="page-r-c">
        	<div class="login-box">
        	
            	<div class="login-box-l" style="border:0;width:100%">
                	<form  method="post" action="" id="form">
                    
                    	<table style="font-size: 12px;
                    color: #333; background: #005288; line-height: 28px; " width="800" cellspacing="1" cellpadding="5" border="0" align="center">
                    <tbody><tr>
                        <td colspan="4" style="background: #005288; color: #fff; font-family: Microsoft YaHei,Arial;
                            font-weight: bold; font-size: 14px; padding: 8px;" align="center">
                            参会报名表<br>
                        </td>
                    </tr>
                    <tr>
                        <td width="100" bgcolor="#FFFFFF" align="center">
                            单位名称 <span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="270" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input  type="text" id="useId" name="a1"  style="border: none;border-bottom:1px solid #ccc;  width: 254px; height:22px;">
                            </span>
                        </td>
                        <td style="padding-left: 5px;" width="100" bgcolor="#FFFFFF" align="center">
                            联系人 <span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="270" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input d="useName" name="a2"  style=" border: none; border-bottom:1px solid #ccc;width: 254px; height:22px;" type="text">
                            </span>
                        </td>
                    </tr>
                    <tr>
                        
						<td width="100" bgcolor="#FFFFFF" align="center">
                            手机号码 <span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="270" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input id="company" name="a4" style="border: none;border-bottom:1px solid #ccc;  width: 254px; height:22px;" type="text">
                            </span>
                        </td>
                        <td style="padding-left: 5px;" width="100" bgcolor="#FFFFFF" align="center">
                            邮箱 <span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="270" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input  id="mail" name="a5" style=" border: none; border-bottom:1px solid #ccc;width: 254px; height:22px;" type="text">
                            </span>
                        </td>
                    </tr>
					<tr>
                        
						<td width="100" bgcolor="#FFFFFF" align="center">
                            办公电话<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="270" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input id="depart" name="a6" style="border: none;border-bottom:1px solid #ccc;  width: 254px; height:22px;" type="text">
                            </span>
                        </td>
                        <td width="100" bgcolor="#FFFFFF" align="center">
                            通讯地址<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="235" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input id="depart" name="a7" style="border: none;border-bottom:1px solid #ccc;  width: 254px; height:22px;" type="text">
                            </span>
                        </td>
                        
                    </tr>
                    <tr>
                    	<td style="padding-left: 5px;" width="100" bgcolor="#FFFFFF" align="center">
                             参加的培训班名称<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="270" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="b1" id="b1" style=" border: none; border-bottom:1px solid #ccc;width: 254px; height:22px;" type="text" placeholder="填写您选择参加培训班的名称">
                            </span>
                        </td>
                        <td bgcolor="#FFFFFF" align="center">
                            参加的培训班地点<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span> 
                        </td>
                        <td bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="b2" id="b2" style="border: none;border-bottom:1px solid #ccc;  width: 254px; height:30px;" type="text" placeholder="填写您选择参加培训班的地点">
                            </span>
                        </td>
                        
                    </tr>
                    <tr>
                    	<td bgcolor="#FFFFFF" align="center">
                            参加的培训班时间<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom"> <!--原来分会场主题2014/1/21-->
                                *</span> 
                        </td>
                        <td bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="b3" id="b3" style="border: none;border-bottom:1px solid #ccc;  width: 254px; height:30px;" type="text" placeholder="填写您选择参加培训班的时间">
                            </span>
                        </td>
                        <td bgcolor="#FFFFFF" align="center">
                            我方联系人员<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span> 
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="b4" id="b4" style="border: none;border-bottom:1px solid #ccc;  width: 254px; height:30px;" type="text" placeholder="填写您收到的培训通知上面，我方联系人的姓名">
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" bgcolor="#FFFFFF" align="center">
                            <table style="background: #ccc;" width="100%" cellspacing="1" cellpadding="5" border="0">
                                <tbody><tr style="height: 28px; line-height: 28px">
                                    <td width="112" bgcolor="#005288" align="center">
                                        <span class="STYLE1">姓名 <span style="color: #ff0000; font-size: 16px; font-weight: bolder;
                                            vertical-align: bottom;">*</span> </span>                                    </td>
                                    <td width="59" bgcolor="#005288" align="center">
                                        <span class="STYLE1">性别 <span style="color: #ff0000; font-size: 16px; font-weight: bolder;
                                            vertical-align: bottom;">*</span></span>                                    </td>
                                    <td width="89" bgcolor="#005288" align="center">
                                        <span class="STYLE1">部门 <span style="color: #ff0000; font-size: 16px; font-weight: bolder;
                                            vertical-align: bottom;">*</span></span>                                    </td>
                                    <td width="76" bgcolor="#005288" align="center">
                                        <span class="STYLE1">职位 <span style="color: #ff0000; font-size: 16px; font-weight: bolder;
                                            vertical-align: bottom">*</span></span>                                    </td>
                                    <td width="147" bgcolor="#005288" align="center">
                                        <span class="STYLE1">手机 
											<span style="color: #ff0000; font-size: 16px; font-weight: bolder;vertical-align: bottom">*</span>										</span>                                    </td>
                                    <td width="173" bgcolor="#005288" align="center">
                                        <span class="STYLE1">邮箱 <span style="color: #ff0000; font-size: 16px; font-weight: bolder;
                                            vertical-align: bottom">*</span>										</span>                                    </td>
                                </tr>
                                <tr style="height: 30px; line-height: 28px">
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a8" id="a8" style=" border: none; border-bottom:1px solid #ccc;width: 100px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <select name="a9" id="a9" style="width: 54px;">
											<option selected="selected" value="">选择</option>
	<option value="男">男</option>
	<option value="女">女</option>
</select>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a10" id="a10" style=" border: none;border-bottom:1px solid #ccc; width: 78px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a11" id="a11" style=" border: none; border-bottom:1px solid #ccc;width: 64px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a12" id="a12" style="border: none; border-bottom:1px solid #ccc; width: 136px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a13" id="a13" style=" border: none;border-bottom:1px solid #ccc; width: 186px; height:22px;" type="text">
                                        </span>
                                    </td>
                                </tr>
								<tr style="height: 30px; line-height: 28px">
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a14" id="a14" style=" border: none; border-bottom:1px solid #ccc;width: 100px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <select name="a15" id="a15" style="width: 54px;">
											<option selected="selected" value="">选择</option>
	<option value="男">男</option>
	<option value="女">女</option>
</select>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a16" id="a16" style=" border: none;border-bottom:1px solid #ccc; width: 78px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a17" id="a17" style=" border: none; border-bottom:1px solid #ccc;width: 64px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a18" id="a18" style="border: none; border-bottom:1px solid #ccc; width: 136px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a19" id="a19" style=" border: none;border-bottom:1px solid #ccc; width: 186px; height:22px;" type="text">
                                        </span>
                                    </td>
                                </tr>
								<tr style="height: 30px; line-height: 28px">
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a20" id="a20" style=" border: none; border-bottom:1px solid #ccc;width: 100px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <select name="a21" id="a21" style="width: 54px;">
											<option selected="selected" value="">选择</option>
	<option value="男">男</option>
	<option value="女">女</option>
</select>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a22" id="a22" style=" border: none;border-bottom:1px solid #ccc; width: 78px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a23" id="a23" style=" border: none; border-bottom:1px solid #ccc;width: 64px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a24" id="a24" style="border: none; border-bottom:1px solid #ccc; width: 136px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a25" id="a25" style=" border: none;border-bottom:1px solid #ccc; width: 186px; height:22px;" type="text">
                                        </span>
                                    </td>
                                </tr>
								<tr style="height: 30px; line-height: 28px">
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a26" id="a26" style=" border: none; border-bottom:1px solid #ccc;width: 100px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <select name="a27" id="a27" style="width: 54px;">
											<option selected="selected" value="">选择</option>
	<option value="男">男</option>
	<option value="女">女</option>
</select>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a28" id="a28" style=" border: none;border-bottom:1px solid #ccc; width: 78px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a29" id="a29" style=" border: none; border-bottom:1px solid #ccc;width: 64px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a30" id="a30" style="border: none; border-bottom:1px solid #ccc; width: 136px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a31" id="a31" style=" border: none;border-bottom:1px solid #ccc; width: 186px; height:22px;" type="text">
                                        </span>
                                    </td>
                                </tr>
								<tr style="height: 30px; line-height: 28px">
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a32" id="a32" style=" border: none; border-bottom:1px solid #ccc;width: 100px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                           <select name="a33" id="a33" style="width: 54px;">
											<option selected="selected" value="">选择</option>
	<option value="男">男</option>
	<option value="女">女</option>
</select>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a34" id="a34" style=" border: none;border-bottom:1px solid #ccc; width: 78px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a35" id="a35" style=" border: none; border-bottom:1px solid #ccc;width: 64px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a36" id="a36" style="border: none; border-bottom:1px solid #ccc; width: 136px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a37" id="a37" style=" border: none;border-bottom:1px solid #ccc; width: 186px; height:22px;" type="text">
                                        </span>
                                    </td>
                                </tr>
								<tr style="height: 30px; line-height: 28px">
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a38" id="a38" style=" border: none; border-bottom:1px solid #ccc;width: 100px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                           <select name="a39" id="a39" style="width: 54px;">
											<option selected="selected" value="">选择</option>
	<option value="男">男</option>
	<option value="女">女</option>
</select>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a40" id="a40" style=" border: none;border-bottom:1px solid #ccc; width: 78px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a41" id="a41" style=" border: none; border-bottom:1px solid #ccc;width: 64px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a42" id="a42" style="border: none; border-bottom:1px solid #ccc; width: 136px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a43" id="a43" style=" border: none;border-bottom:1px solid #ccc; width: 186px; height:22px;" type="text">
                                        </span>
                                    </td>
                                </tr>
                            </tbody></table>
							
							
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 106px; padding: 5px;" bgcolor="#FFFFFF" align="center">
                            您了解本论坛的途径
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <textarea name="a44" id="a44" style="border: none;border-bottom:1px solid #ccc;  width: 580px; height: 90px;
                                    font-size: 12px; line-height: 22px"></textarea>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 106px; padding: 5px;" bgcolor="#FFFFFF" align="center">
                            希望您对本论坛提出宝贵的建议
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <textarea name="a45" id="a45" style=" border: none;border-bottom:1px solid #ccc; width: 580px; height: 70px;
                                    font-size: 12px; line-height: 22px"></textarea>
                            </span>
                        </td>
                    </tr>
					<tr>
                        <td style="width: 106px; padding: 5px;" bgcolor="#FFFFFF" align="center">
                            您对本论坛的关注点
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <textarea name="a46" id="a46" style=" border: none;border-bottom:1px solid #ccc; width: 580px; height: 70px;
                                    font-size: 12px; line-height: 22px"></textarea>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style="padding: 8px;" bgcolor="#FFFFFF">
                            <p style="line-height:20px;">
	1.&nbsp;标注&nbsp;<span style="color: rgb(255, 0, 0); font-size: 16px; font-weight: bolder; vertical-align: bottom;">* </span>的各项为必填信息。</p>
<p style="line-height:20px;">
	2. 有任何疑问，请发送邮件至：<a href="mailto:cncipi@126.com">cncipi@126.com</a> &nbsp;&nbsp;&nbsp;&nbsp;电话：010-80338393</p>
<p style="line-height:20px;">
</p>
<p style="line-height:20px;">&nbsp;
	</p>
<p></p>

</td>
                    </tr><input name="action" id="action" value="add" type="hidden">
                    <tr>
                        <td colspan="4" style="padding: 8px; text-align: center" bgcolor="#FFFFFF">
                          <input name="_ctl0:ContentPlaceHolder1:img" id="_ctl0_ContentPlaceHolder1_img" src="images/tj_anniu.jpg" style="height:25px;width:75px;" onclick="cfm_msg();return false;" type="image" border="0">  
                        	
                    </td></tr>
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
		alert("请填写单位名称！");
		$("#a1").focus();
		return false;
	}
	if($("#a2").val() == "")
	{
		alert("请填写联系人！");
		$("#a2").focus();
		return false;
	}
	if($("#a4").val() == "")
	{
		alert("请填写手机号码！");
		$("#a4").focus();
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
		alert("请填写办公电话！");
		$("#a6").focus();
		return false;
	}
	if($("#a7").val() == "")
	{
		alert("请填写通讯地址！");
		$("#a7").focus();
		return false;
	}
	if($("#a8").val() == "")
	{
		alert("请填写姓名！");
		$("#a8").focus();
		return false;
	}
	if($("#a10").val() == "")
	{
		alert("请填写部门！");
		$("#a10").focus();
		return false;
	}
	if($("#a11").val() == "")
	{
		alert("请填写职位！");
		$("#a11").focus();
		return false;
	}
	if($("#a12").val() == "")
	{
		alert("请填写手机！");
		$("#a12").focus();
		return false;
	}
	if($("#a13").val() == "")
	{
		alert("请填写邮箱！");
		$("#a13").focus();
		return false;
	}
	if($("#b1").val() == "")
	{
		alert("请填写参加的培训班名称！");
		$("#b1").focus();
		return false;
	}
	if($("#b2").val() == "")
	{
		alert("请填写参加的培训班地点！");
		$("#b2").focus();
		return false;
	}
	if($("#b3").val() == "")
	{
		alert("请填写参加的培训班时间！");
		$("#b3").focus();
		return false;
	}
	if($("#b4").val() == "")
	{
		alert("请填写我方联系人员！");
		$("#b4").focus();
		return false;
	}
	
	
	$("#form").submit();
}
</script>

<?php 
	require_once('footer.php');
?>