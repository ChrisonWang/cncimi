<?php
require_once(dirname(__FILE__).'/include/config.inc.php');
$cid = empty($cid) ? 10 : intval($cid);
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
        	<span>参展申请</span>
        </div>

    	<div class="page-r-c">
        	<div class="login-box">
        	
            	<div class="login-box-l" style="border:0;width:100%">
                	<form name="form" id="form" method="post" action="">
                <table style="font-size: 12px;
                    line-height: 28px; color: #333; background: #005288;" width="800" cellspacing="1" cellpadding="5" border="0">
                    <tbody><tr>
                        <td colspan="4" style="background: #005288; color: #fff; font-family: Microsoft YaHei,Arial;
                            font-weight: bold; font-size: 14px; padding: 8px;" align="center">
                           参展申请表<br>
                           
                        </td>
                    </tr>
                    <tr>
                        <td width="100" bgcolor="#FFFFFF" align="center">
                            单位名称 <span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="330" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a1" id="a1" style="border: none;border-bottom:1px solid #ccc;  width: 314px; height:22px;" type="text">
                            </span>
                        </td>
                        <td style="padding-left: 5px;" width="100" bgcolor="#FFFFFF" align="center">
                            联系人 <span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="140" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a2" id="a2" style=" border: none; border-bottom:1px solid #ccc;width: 124px; height:22px;" type="text">
                            </span>
                        </td>
                    </tr>
                    <tr>
                        
						<td width="100" bgcolor="#FFFFFF" align="center">
                            网址
                        </td>
                        <td width="330" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a3" id="a3" style="border: none;border-bottom:1px solid #ccc;  width: 314px; height:22px;" type="text">
                            </span>
                        </td>
                        <td style="padding-left: 5px;" width="100" bgcolor="#FFFFFF" align="center">
                            手机号码 <span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="140" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a4" id="a4" style=" border: none; border-bottom:1px solid #ccc;width: 124px; height:22px;" type="text">
                            </span>
                        </td>
                    </tr>
					<tr>
                        
						<td width="100" bgcolor="#FFFFFF" align="center">
                            E-mail<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="330" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a5" id="a5" style="border: none;border-bottom:1px solid #ccc;  width: 314px; height:22px;" type="text">
                            </span>
                        </td>
                        <td style="padding-left: 5px;" width="100" bgcolor="#FFFFFF" align="center">
                             办公电话<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="140" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a6" id="a6" style=" border: none; border-bottom:1px solid #ccc;width: 124px; height:22px;" type="text">
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF" align="center">
                            展位门楣中文<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom"> <!--原来分会场主题2014/1/21-->
                                *</span> <!--原来研讨班主题-->
                              
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a7" id="a7" style="border: none;border-bottom:1px solid #ccc;  width: 580px; height:22px;" type="text">
                            </span>
                        </td>
                    </tr>
					<tr>
                        <td bgcolor="#FFFFFF" align="center">
                            展位门楣英文<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom"> <!--原来分会场主题2014/1/21-->
                                *</span> <!--原来研讨班主题-->
                              
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a8" id="a8" style="border: none;border-bottom:1px solid #ccc;  width: 580px; height:22px;" type="text">
                            </span>
                        </td>
                    </tr>
					<tr>
                        <td bgcolor="#FFFFFF" align="center">
                            通讯地址<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom"> <!--原来分会场主题2014/1/21-->
                                *</span> <!--原来研讨班主题-->
                              <br>  <span class="style1">
							</span><br><!--&gt;&gt;点击查看日程-->
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a9" id="a9" style="border: none;border-bottom:1px solid #ccc;  width: 580px; height:30px;" type="text">
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" bgcolor="#FFFFFF" align="center">
                            <table style="background: #ccc;" width="100%" cellspacing="1" cellpadding="5" border="0">
                                <tbody><tr>
                                    <td width="110" bgcolor="#005288" align="center">
                                        <span class="STYLE1">联系人姓名<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">*</span>                                        </span>                                    </td>
                                    <td width="65" bgcolor="#005288" align="center">
                                        <span class="STYLE1">性别</span>                                    </td>
                                    <td width="90" bgcolor="#005288" align="center">
                                        <span class="STYLE1">部门</span>                                    </td>
                                    <td width="90" bgcolor="#005288" align="center">
                                        <span class="STYLE1">职位<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">*</span></span>                                    </td>
                                    <td width="119" bgcolor="#005288" align="center">
                                        <span class="STYLE1">手机<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">*</span></span>                                    </td>
                                    <td width="182" bgcolor="#005288" align="center">
                                        <span class="STYLE1">邮箱<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">*</span></span>                                    </td>
                                </tr>
                                <tr style="height: 30px; line-height: 28px">
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a10" id="a10" style=" border: none; border-bottom:1px solid #ccc;width: 100px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <select name="a11" id="a11" style="width: 54px;">
											<option selected="selected" value="">选择</option>
	<option value="男">男</option>
	<option value="女">女</option>
</select>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a12" id="a12" style=" border: none;border-bottom:1px solid #ccc; width: 80px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a13" id="a13" style=" border: none; border-bottom:1px solid #ccc;width: 80px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a14" id="a14" style="border: none; border-bottom:1px solid #ccc; width: 105px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a15" id="a15" style=" border: none;border-bottom:1px solid #ccc; width: 180px; height:22px;" type="text">
                                        </span>
                                    </td>
                                </tr>
								<tr style="height: 30px; line-height: 28px">
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a16" id="a16" style=" border: none; border-bottom:1px solid #ccc;width: 100px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <select name="a17" id="a17" style="width: 54px;">
											<option selected="selected" value="">选择</option>
	<option value="男">男</option>
	<option value="女">女</option>
</select>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a18" id="a18" style=" border: none;border-bottom:1px solid #ccc; width: 80px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a19" id="a19" style=" border: none; border-bottom:1px solid #ccc;width: 80px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a20" id="a20" style="border: none; border-bottom:1px solid #ccc; width: 105px; height:22px;" type="text">
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <input name="a21" id="a21" style=" border: none;border-bottom:1px solid #ccc; width: 180px; height:22px;" type="text">
                                        </span>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
					
                    <tr>
                        <td style="width: 106px; padding: 5px;" bgcolor="#FFFFFF" align="center">
                            企业类型<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>
                        </td>
                        <td colspan="3" style="padding: 8px 0px 2px 10px;" bgcolor="#FFFFFF">
                            <table id="_ctl0_ContentPlaceHolder1_cblkc" style="line-height: 25px; padding-bottom: 5px;" width="80%" border="0">
	<tbody><tr>
		<td><input id="a22" name="a22" value="生产商" checked="checked" type="radio"><label for="_ctl0_ContentPlaceHolder1_cblkc_0"> 生产商</label></td>
	
		<td><input id="a22" name="a22" value="代理商" type="radio"><label for="_ctl0_ContentPlaceHolder1_cblkc_1"> 代理商</label></td>
	
		<td><input id="a22" name="a22" value="经销商" type="radio"><label for="_ctl0_ContentPlaceHolder1_cblkc_2"> 经销商</label></td>
	
		<td><input id="a22" name="a22" value="零售商" type="radio"><label for="_ctl0_ContentPlaceHolder1_cblkc_3"> 零售商</label></td>
	
		<td><input id="a22" name="a22" value="进口商" type="radio"><label for="_ctl0_ContentPlaceHolder1_cblkc_3"> 进口商</label></td>
	
		<td><input id="a22" name="a22" value="出口商" type="radio"><label for="_ctl0_ContentPlaceHolder1_cblkc_3"> 出口商</label></td>
		<td><input id="a22" name="a22" value="其他" type="radio"><label for="_ctl0_ContentPlaceHolder1_cblkc_3"> 其他</label></td>
	</tr>
</tbody></table>
                           
                        </td>
                    </tr>
					<tr>
                        <td style="width: 106px; padding: 5px;" bgcolor="#FFFFFF" align="center">
                            参展产品明细<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <textarea name="a23" id="a23" style=" border: none; width: 580px;border-bottom:1px solid #ccc; height: 70px;
                                    font-size: 12px; line-height: 22px"></textarea>
                            </span>
                        </td>
                    </tr>
					<tr>
                        <td style="width: 106px; padding: 5px;" bgcolor="#FFFFFF" align="center">
                            参展类别选择<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>
                        </td>
                        <td colspan="3" style="padding: 8px 0px 2px 10px;" bgcolor="#FFFFFF">
                            <table id="_ctl0_ContentPlaceHolder1_cblkc" style="line-height: 25px; padding-bottom: 5px;" border="0">
	<tbody><tr>
		<td><input id="a24" name="a24" value="金牌参展" checked="checked" type="radio"><label for="_ctl0_ContentPlaceHolder1_cblkc_0"> 金牌参展</label></td>
	</tr><tr>
		<td><input id="a24" name="a24" value="银牌参展" type="radio"><label for="_ctl0_ContentPlaceHolder1_cblkc_1"> 银牌参展</label></td>
	</tr><tr>
		<td><input id="a24" name="a24" value="铜牌参展" type="radio"><label for="_ctl0_ContentPlaceHolder1_cblkc_2"> 铜牌参展</label></td>
	</tr>
</tbody></table>
                           
                        </td>
                    </tr>
					<tr>
                        <td style="width: 106px; padding: 5px;" bgcolor="#FFFFFF" align="center">
                            参展规则
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px; line-height:22px;"><br>
                                &nbsp;&nbsp;&nbsp;1、填写参展申请表，承办方确认之后，需在11月10日前电汇参展费用；<br>
								&nbsp;&nbsp;&nbsp;2、参展企业需客观的宣传参展产品，并配合组委会在论坛现场的统一安排；<br>
								&nbsp;&nbsp;&nbsp;3、申请表详细填写，加盖公章后邮寄或传真至组委会，申请表一经签字盖章后具有合同效力；<br>
								&nbsp;&nbsp;&nbsp;4、对于不符合参展要求和相关规定的企业，组委会有权拒绝任何形式的合作，并不承担任何责任；<br>
								&nbsp;&nbsp;&nbsp;5、本展会不允许参展企业擅自转让展位，及两家公用一个展位，一经发现将取消其参展资格，费用概不退还。<br><br>

                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 106px; padding: 5px;" bgcolor="#FFFFFF" align="center">
                            发票信息<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>
                        </td>
                        <td colspan="3" style="padding: 8px 0px 2px 10px;" bgcolor="#FFFFFF">
                            <table id="_ctl0_ContentPlaceHolder1_rdofp" style="line-height: 25px;
                                padding-bottom: 5px;" border="0">
	<tbody><tr>
		<td><span class="mao2"><input id="a25" name="a25" value="不需要发票" checked="checked" type="radio"><label for="_ctl0_ContentPlaceHolder1_rdofp_0">不需要发票</label></span></td>
	</tr><tr>
		<td><span class="mao"><input id="a25" name="a25" value="需要发票" type="radio"><label for="_ctl0_ContentPlaceHolder1_rdofp_1">需要发票(增值税专用发票)</label></span></td>
	</tr>
</tbody></table>
                             <div class="mao_1">
                            <p style="padding-bottom: 8px;">
                                <span style="padding-right: 5px;">发票内容</span><input name="a26" id="a26" disabled="disabled" value="会议费" style="height: 20px; width: 260px;
                                    border: solid 1px #ddd;" type="text"></p>
                            <p style="padding-bottom: 8px;">
                                <span style="padding-right: 5px; ">发票抬头</span><input name="a27" id="a27" style="height: 20px; width: 260px; border: solid 1px #ddd;" type="text"></p>
								<p style="padding-bottom: 8px;">
                                <span style="padding-right: 5px; ">纳税人号</span><input name="a28" id="a28" style="height: 20px; width: 260px; border: solid 1px #ddd;" type="text"></p>
								<p style="padding-bottom: 8px;">
                                <span style="padding-right: 5px; ">开户银行</span><input name="a29" id="a29" style="height: 20px; width: 260px; border: solid 1px #ddd;" type="text"></p>
								<p style="padding-bottom: 8px;">
                                <span style="padding-right: 5px; ">银行账号</span><input name="a30" id="a30" style="height: 20px; width: 260px; border: solid 1px #ddd;" type="text"></p>
								<p style="padding-bottom: 8px;">
                                <span style="padding-right: 5px; ">地址电话</span><input name="a31" id="a31" style="height: 20px; width: 260px; border: solid 1px #ddd;" type="text"></p>
								
								</div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="width: 106px; padding: 5px;" bgcolor="#FFFFFF" align="center">
                            留言<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <textarea name="a32" id="a32" style=" border: none; width: 580px;border-bottom:1px solid #ccc; height: 70px;
                                    font-size: 12px; line-height: 22px"></textarea>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style="padding: 10px; line-height: 25px;" bgcolor="#FFFFFF">
                         <p style="font-weight:bold; color:#0000FF">
	备注信息：</p>
<p style="line-height:20px;">
	1.&nbsp;标注&nbsp;<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">* </span>的各项为必填信息；</p>
<p style="line-height:20px;">
	2.&nbsp;缴费成功的客户，发票可以快递给您或到活动现场总服务台当面领取；</p>
<p style="line-height:20px;">
	3.&nbsp;有任何疑问，请发送邮件至：<a href="mailto:cncipi@126.com">cncipi@126.com</a> &nbsp;&nbsp;&nbsp;&nbsp;电话：010-80338393</p>
<p style="line-height:20px;">
	4. 细填写申请表，组委会确认符合参展要求后，将会发送参展确认表到您的邮箱，请加盖公章回传邮箱即可；
</p>
</td>
                    </tr><input name="action" id="action" value="add" type="hidden">
                    <tr>
                        <td colspan="4" style="padding: 8px; text-align: center" bgcolor="#FFFFFF">
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
		alert("请填写展位门楣中文！");
		$("#a7").focus();
		return false;
	}
	if($("#a8").val() == "")
	{
		alert("请填写展位门楣英文！");
		$("#a8").focus();
		return false;
	}
	if($("#a9").val() == "")
	{
		alert("请填写通讯地址！");
		$("#a9").focus();
		return false;
	}
	if($("#a10").val() == "")
	{
		alert("请填写联系人姓名！");
		$("#a10").focus();
		return false;
	}
	if($("#a12").val() == "")
	{
		alert("请填写部门！");
		$("#a12").focus();
		return false;
	}
	if($("#a13").val() == "")
	{
		alert("请填写职位！");
		$("#a13").focus();
		return false;
	}
	if($("#a14").val() == "")
	{
		alert("请填写手机！");
		$("#a14").focus();
		return false;
	}
	if($("#a15").val() == "")
	{
		alert("请填写邮箱！");
		$("#a15").focus();
		return false;
	}
	if($("#a23").val() == "")
	{
		alert("请填写参展产品明细！");
		$("#a23").focus();
		return false;
	}
	if($("#a32").val() == "")
	{
		alert("请填写留言！");
		$("#a32").focus();
		return false;
	}
	$("#form").submit();
}
</script>
<?php 
	require_once('footer.php');
?>
