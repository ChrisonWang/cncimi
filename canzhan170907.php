<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 2 : intval($cid);
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
$a26 = '会议费';
$a27 = htmlspecialchars($a27);
$a28 = htmlspecialchars($a28);
$a29 = htmlspecialchars($a29);
$a30 = htmlspecialchars($a30);
$a31 = htmlspecialchars($a31);
$a32 = htmlspecialchars($a32);
$sql = "INSERT INTO `#@__canzhan` (a1, a2, a3, a4, a5,a6,a7,a8,a9,a10,a11,a12,a13,a14,a15,a16,a17,a18,a19,a20,a21,a22,a23,a24,a25,a26,a27,a28,a29,a30,a31,a32,shijian) VALUES ('$a1', '$a2', '$a3', '$a4', '$a5', '$a6', '$a7', '$a8', '$a9', '$a10', '$a11', '$a12', '$a13', '$a14', '$a15', '$a16',  '$a17', '$a18', '$a19', '$a20', '$a21', '$a22', '$a23', '$a24', '$a25', '$a26', '$a27', '$a28', '$a29', '$a30', '$a31', '$a32', '$posttime')";
					if($dosql->ExecNoneQuery($sql))
					{
						ShowMsg('参展申请提交成功，工作人员会在3个工作日内与您电话确认！','index.php');
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
        	<span>参展申请</span>
        </div>

    	<div class="page-r-c">
        	<div class="login-box">
        	
            	<div class="login-box-l" style="border:0;width:100%">
                	<form onSubmit="return checkform()">
                	<ul class="form">
                        <li>
                            <span class="f">单位名称<font style="color:#f00">*</font></span>
                            <input type="text" id="useId" class="need">
                            <samp>请输入单位名称</samp>
                        </li>
                        <li>
                            <span class="f">联系人<font style="color:#f00">*</font></span>
                            <input type="text" id="useName" class="need">
                            <samp>请输入联系人</samp>
                        </li>
                        <li>
                            <span class="f">网址</span>
                            <input type="text" id="mail">
                        </li>
                        <li>
                            <span class="f">手机号码<font style="color:#f00">*</font></span>
                            <input type="text" id="mail" class="need">
                            <samp>请输入手机号码</samp>
                        </li>
                        <li>
                            <span class="f">邮箱<font style="color:#f00">*</font></span>
                            <input type="text" id="company" class="need">
                            <samp>请输入邮箱</samp>
                        </li>
                        <li>
                            <span class="f">办公电话<font style="color:#f00">*</font></span>
                            <input type="text" id="depart" class="need">
                            <samp>请输入办公电话</samp>
                        </li>
                        
                        <li>
                            <span class="f">展位门楣中文<font style="color:#f00">*</font></span>
                            <input type="text" id="depart" class="need">
                            <samp>请输入展位门楣中文</samp>
                        </li>
                        
                        <li>
                            <span class="f">展位门楣英文<font style="color:#f00">*</font></span>
                            <input type="text" id="depart" class="need">
                            <samp>请输入展位门楣英文</samp>
                        </li>
                        
                        <li>
                            <span class="f">通讯地址<font style="color:#f00">*</font></span>
                            <input type="text" id="depart" class="need">
                            <samp>请输入通讯地址</samp>
                        </li>
                        
                        <li>
                        	<table cellspacing="0" cellpadding="0" border="0" class="form-tab">
                                <tr>
                                    <td width="15%" bgcolor="#ccc" align="center">联系人姓名</td>
                                    <td width="10%" bgcolor="#ccc" align="center">性别</td>
                                    <td width="10%" bgcolor="#ccc" align="center">部门</td>
                                    <td width="25%" bgcolor="#ccc" align="center">职位</td>
                                    <td width="20%" bgcolor="#ccc" align="center">手机</td>
                                    <td width="20%" bgcolor="#ccc" align="center">邮箱</span>                                    </td>
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
                                
                            </table>
                        
                        </li>
                        
                        <li>
                        	<span class="f">企业类型<font style="color:#f00">*</font></span>
                        	<div class="option-div">
                            	<input type="radio">生产商<input type="radio">代理商<input type="radio">经销商<input type="radio">零售商<input type="radio">进口商<input type="radio">出口商<input type="radio">其他
                            
                            </div>
                            <div class="clear"></div>
                        </li>
                        
                        <li>
                        	<span class="f">参展产品明细<font style="color:#f00">*</font></span>
                        	<textarea class="need"></textarea>
                            <samp>请输入您的演讲题目</samp>
                            <div class="clear"></div>
                        </li>
                        
                        <li>
                        	<span class="f">企业类型<font style="color:#f00">*</font></span>
                        	<div class="option-div">
                            	<input type="radio">金牌参展<input type="radio">银牌参展<input type="radio">铜牌参展
                            </div>
                            <div class="clear"></div>
                        </li>
                        
                        <li>
                        	<span class="f">参展规则</span>
                        	<div class="option-div">
                            	 1、填写参展申请表，承办方确认之后，需在11月10日前电汇参展费用；<br>
   2、参展企业需客观的宣传参展产品，并配合组委会在论坛现场的统一安排；<br>
   3、申请表详细填写，加盖公章后邮寄或传真至组委会，申请表一经签字盖章后具有合同效力；<br>
   4、对于不符合参展要求和相关规定的企业，组委会有权拒绝任何形式的合作，并不承担任何责任；<br>
   5、本展会不允许参展企业擅自转让展位，及两家公用一个展位，一经发现将取消其参展资格，费用概不退还。
                            </div>
                            <div class="clear"></div>
                        </li>
                        
                        <li>
                        	<span class="f">发票信息<font style="color:#f00">*</font></span>
                        	<div class="option-div">
                            	 <input type="radio">不需要发票 <input type="radio">需要发票(增值税专用发票)<br>
								<ul>
                                	<li>
                                        <span class="f" style="width:80px"> 发票内容</span>
                                        <input type="text" id="depart">
                                    </li>
                                    <li>
                                        <span class="f" style="width:80px">发票抬头</span>
                                        <input type="text" id="depart">
                                    </li>
                                    <li>
                                        <span class="f" style="width:80px">纳税人号</span>
                                        <input type="text" id="depart">
                                    </li>
                                    <li>
                                        <span class="f" style="width:80px">开户银行</span>
                                        <input type="text" id="depart">
                                    </li>
                                    <li>
                                        <span class="f" style="width:80px">银行账号</span>
                                        <input type="text" id="depart">
                                    </li>
                                	<li>
                                        <span class="f" style="width:80px">地址电话</span>
                                        <input type="text" id="depart">
                                    </li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </li>
                        
                        
                        <li>
                        	<span class="f">留言<font style="color:#f00">*</font></span>
                        	<textarea class="need"></textarea>
                            <samp>请输入您的留言</samp>
                            <div class="clear"></div>
                        </li>
                        <li>
                        <input type="hidden" name="action" id="action" value="add" />
                            <span class="f">&nbsp;</span>
                            <button type="submit">立即申请</button>
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
