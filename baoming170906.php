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
$sql = "INSERT INTO `#@__baoming` (a1, a2, a3, a4, a5,a6,a7,a8,a9,a10,a11,a12,a13,a14,a15,a16,a17,a18,a19,a20,a21,a22,a23,a24,a25,a26,a27,a28,a29,a30,a31,a32,a33,a34,a35,a36,a37,a38,a39,a40,a41,a42,a43,a44,a45,a46,shijian) VALUES ('$a1', '$a2', '$a3', '$a4', '$a5', '$a6', '$a7', '$a8', '$a9', '$a10', '$a11', '$a12', '$a13', '$a14', '$a15', '$a16',  '$a17', '$a18', '$a19', '$a20', '$a21', '$a22', '$a23', '$a24', '$a25', '$a26', '$a27', '$a28', '$a29', '$a30', '$a31', '$a32', '$a33', '$a34', '$a35', '$a36', '$a37', '$a38', '$a39', '$a40', '$a41', '$a42', '$a43', '$a44', '$a45', '$a46', '$posttime')";
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
                	<form  method="post" action="" onSubmit="return checkform()">
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                	<ul class="form">
                        <li>
                            <span class="f">单位名称<font style="color:#f00">*</font></span>
                            <input type="text" id="useId" name="a1" class="need">
                            <samp>请输入单位名称</samp>
                        </li>
                        <li>
                            <span class="f">联系人<font style="color:#f00">*</font></span>
                            <input type="text" id="useName" name="a2" class="need">
                            <samp>请输入联系人</samp>
                        </li>
                        <li>
                            <span class="f">手机号码<font style="color:#f00">*</font></span>
                            <input type="text" id="company" name="a4" class="need">
                            <samp>请输入手机号码</samp>
                        </li>
                        <li>
                            <span class="f">邮箱<font style="color:#f00">*</font></span>
                            <input type="text" id="mail" name="a5" class="need">
                            <samp>请输入邮箱</samp>
                        </li>
                        <li>
                            <span class="f">办公电话<font style="color:#f00">*</font></span>
                            <input type="text" id="depart" name="a6" class="need">
                            <samp>请输入办公电话</samp>
                        </li>
                        
                        <li>
                        	<table cellspacing="0" cellpadding="0" border="0" class="form-tab">
                                <tr>
                                    <td width="15%" bgcolor="#ccc" align="center">姓名</td>
                                    <td width="10%" bgcolor="#ccc" align="center">性别</td>
                                    <td width="10%" bgcolor="#ccc" align="center">部门</td>
                                    <td width="25%" bgcolor="#ccc" align="center">职位</td>
                                    <td width="20%" bgcolor="#ccc" align="center">手机</td>
                                    <td width="20%" bgcolor="#ccc" align="center">邮箱</td>                                    </td>
                                </tr>
                                <tr >
                                    <td bgcolor="#FFFFFF"><input name="a8" id="a8" type="text"></td>
                                    <td bgcolor="#FFFFFF"><select name="a9" id="a9">
											<option selected="selected" value="">选择</option>
											<option value="男">男</option>
											<option value="女">女</option>
							</select></td>
                                    <td bgcolor="#FFFFFF"><input name="a10" id="a10" type="text"></td>
                                    <td bgcolor="#FFFFFF"><input name="a11" id="a11" type="text"></td>
                                    <td bgcolor="#FFFFFF"><input name="a12" id="a12" type="text"></td>
                                    <td bgcolor="#FFFFFF"><input name="a13" id="a13"  type="text"></td>
                                </tr>
                                <tr >
                                    <td bgcolor="#FFFFFF"><input name="a14" id="a8" type="text"></td>
                                    <td bgcolor="#FFFFFF"><select name="a15" id="a9">
											<option selected="selected" value="">选择</option>
	<option value="男">男</option>
	<option value="女">女</option>
</select></td>
                                    <td bgcolor="#FFFFFF"><input name="a16" id="a10" type="text"></td>
                                    <td bgcolor="#FFFFFF"><input name="a17" id="a11" type="text"></td>
                                    <td bgcolor="#FFFFFF"><input name="a18" id="a12" type="text"></td>
                                    <td bgcolor="#FFFFFF"><input name="a19" id="a13"  type="text"></td>
                                </tr>
                                <tr >
                                    <td bgcolor="#FFFFFF"><input name="a20" id="a8" type="text"></td>
                                    <td bgcolor="#FFFFFF"><select name="a21" id="a9">
											<option selected="selected" value="">选择</option>
	<option value="男">男</option>
	<option value="女">女</option>
</select></td>
                                    <td bgcolor="#FFFFFF"><input name="a22" id="a10" type="text"></td>
                                    <td bgcolor="#FFFFFF"><input name="a23" id="a11" type="text"></td>
                                    <td bgcolor="#FFFFFF"><input name="a24" id="a12" type="text"></td>
                                    <td bgcolor="#FFFFFF"><input name="a25" id="a13"  type="text"></td>
                                </tr>
                                <tr >
                                    <td bgcolor="#FFFFFF"><input name="a26" id="a8" type="text"></td>
                                    <td bgcolor="#FFFFFF"><select name="a27" id="a9">
											<option selected="selected" value="">选择</option>
	<option value="男">男</option>
	<option value="女">女</option>
</select></td>
                                    <td bgcolor="#FFFFFF"><input name="a28" id="a10" type="text"></td>
                                    <td bgcolor="#FFFFFF"><input name="a29" id="a11" type="text"></td>
                                    <td bgcolor="#FFFFFF"><input name="a30" id="a12" type="text"></td>
                                    <td bgcolor="#FFFFFF"><input name="a31" id="a13"  type="text"></td>
                                </tr>
                                <tr >
                                    <td bgcolor="#FFFFFF"><input name="a32" id="a8" type="text"></td>
                                    <td bgcolor="#FFFFFF"><select name="a33" id="a9">
											<option selected="selected" value="">选择</option>
	<option value="男">男</option>
	<option value="女">女</option>
</select></td>
                                    <td bgcolor="#FFFFFF"><input name="a34" id="a10" type="text"></td>
                                    <td bgcolor="#FFFFFF"><input name="a35" id="a11" type="text"></td>
                                    <td bgcolor="#FFFFFF"><input name="a36" id="a12" type="text"></td>
                                    <td bgcolor="#FFFFFF"><input name="a37" id="a13"  type="text"></td>
                                </tr>
                            </table>
                        
                        </li>
                        <li>
                        	<span class="f">您了解本论坛的途径</span>
                        	<textarea></textarea>
                            <div class="clear"></div>
                        </li>
                        <li>
                        	<span class="f">希望您对本论坛提出宝贵的建议 </span>
                        	<textarea></textarea>
                            <div class="clear"></div>
                        </li>
                        <li>
                        	<span class="f">您对本论坛的关注点</span>
                        	<textarea></textarea>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <span class="f">&nbsp;</span>
                            <input type="hidden" name="action" id="action" value="add" />
                            <button type="submit">立即报名</button>
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