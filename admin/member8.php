<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('member'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>论坛参展</title>
<link href="templates/style/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/forms.func.js"></script>
</head>
<body>
<div class="topToolbar"> <span class="title">论坛参展</span> <a href="javascript:location.reload();" class="reload">刷新</a></div>
<?php

			//检测文档正确性
			$row = $dosql->GetOne("SELECT * FROM `#@__canzhan` WHERE id=$id");
			if(is_array($row))
			{
				
			?>

<table width="725" border="0" cellspacing="1" cellpadding="5" style="font-size: 12px;
                    line-height: 28px; color: #333; background: #005288;" align="center">
                    <tr>
                        <td colspan="4" align="center" style="background: #005288; color: #fff; font-family: Microsoft YaHei,Arial;
                            font-weight: bold; font-size: 14px; padding: 8px;">参展申请表<br />
                           
                        </td>
                    </tr>
                    <tr>
                        <td width="100" align="center" bgcolor="#FFFFFF">
                            单位名称 <span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="330" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a1']; ?>
                            </span>
                        </td>
                        <td width="100" bgcolor="#FFFFFF" style="padding-left: 5px;" align="center">
                            联系人 <span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="140" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a2']; ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        
						<td width="100" align="center" bgcolor="#FFFFFF">
                            网址
                        </td>
                        <td width="330" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a3']; ?>
                            </span>
                        </td>
                        <td width="100" bgcolor="#FFFFFF" style="padding-left: 5px;" align="center">
                            手机号码 <span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="140" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                               <?php echo $row['a4']; ?>
                            </span>
                        </td>
                    </tr>
					<tr>
                        
						<td width="100" align="center" bgcolor="#FFFFFF">
                            E-mail<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="330" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                               <?php echo $row['a5']; ?>
                            </span>
                        </td>
                        <td width="100" bgcolor="#FFFFFF" style="padding-left: 5px;" align="center">
                             办公电话<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="140" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a6']; ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#FFFFFF">
                            展位门楣中文<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom"> <!--原来分会场主题2014/1/21-->
                                *</span> <!--原来研讨班主题-->
                              
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                               <?php echo $row['a7']; ?>
                            </span>
                        </td>
                    </tr>
					<tr>
                        <td align="center" bgcolor="#FFFFFF">
                            展位门楣英文<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom"> <!--原来分会场主题2014/1/21-->
                                *</span> <!--原来研讨班主题-->
                              
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a8']; ?>
                            </span>
                        </td>
                    </tr>
					<tr>
                        <td align="center" bgcolor="#FFFFFF">
                            通讯地址<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom"> <!--原来分会场主题2014/1/21-->
                                *</span> <!--原来研讨班主题-->
                              <br>  <span class="style1">
							</span></br><!--&gt;&gt;点击查看日程-->
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                               <?php echo $row['a9']; ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center" bgcolor="#FFFFFF">
                            <table width="100%" border="0" cellspacing="1" cellpadding="5" style="background: #ccc;">
                                <tr style="color:#FFFFFF">
                                    <td width="110" align="center" bgcolor="#005288">
                                        <span class="STYLE1">联系人姓名<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">*</span>                                        </span>                                    </td>
                                    <td width="65" align="center" bgcolor="#005288">
                                        <span class="STYLE1">性别</span>                                    </td>
                                    <td width="90" align="center" bgcolor="#005288">
                                        <span class="STYLE1">部门</span>                                    </td>
                                    <td width="90" align="center" bgcolor="#005288">
                                        <span class="STYLE1">职位<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">*</span></span>                                    </td>
                                    <td width="119" align="center" bgcolor="#005288">
                                        <span class="STYLE1">手机<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">*</span></span>                                    </td>
                                    <td width="182" align="center" bgcolor="#005288">
                                        <span class="STYLE1">邮箱<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">*</span></span>                                    </td>
                                </tr>
                                <tr style="height: 30px; line-height: 28px">
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                          <?php echo $row['a10']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                           <?php echo $row['a11']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a12']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                           <?php echo $row['a13']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                           <?php echo $row['a14']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                           <?php echo $row['a15']; ?>
                                        </span>
                                    </td>
                                </tr>
								<tr style="height: 30px; line-height: 28px">
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                           <?php echo $row['a16']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a17']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a18']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                           <?php echo $row['a19']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                           <?php echo $row['a20']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a21']; ?>
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
					
                    <tr>
                        <td style="width: 106px; padding: 5px;" align="center" bgcolor="#FFFFFF">
                            企业类型<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF" style="padding: 8px 0px 2px 10px;">
                            <?php echo $row['a22']; ?>
                           
                        </td>
                    </tr>
					<tr>
                        <td style="width: 106px; padding: 5px;" align="center" bgcolor="#FFFFFF">
                            参展产品明细<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a23']; ?>
                            </span>
                        </td>
                    </tr>
					<tr>
                        <td style="width: 106px; padding: 5px;" align="center" bgcolor="#FFFFFF">
                            参展类别选择<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF" style="padding: 8px 0px 2px 10px;">
                           <?php echo $row['a24']; ?>
                           
                        </td>
                    </tr>
					<tr>
                        <td style="width: 106px; padding: 5px;" align="center" bgcolor="#FFFFFF">
                            参展规则
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px; line-height:22px;"><br />
                                &nbsp;&nbsp;&nbsp;1、填写参展申请表，承办方确认之后，需在11月10日前电汇参展费用；<br />
								&nbsp;&nbsp;&nbsp;2、参展企业需客观的宣传参展产品，并配合组委会在论坛现场的统一安排；<br />
								&nbsp;&nbsp;&nbsp;3、申请表详细填写，加盖公章后邮寄或传真至组委会，申请表一经签字盖章后具有合同效力；<br />
								&nbsp;&nbsp;&nbsp;4、对于不符合参展要求和相关规定的企业，组委会有权拒绝任何形式的合作，并不承担任何责任；<br />
								&nbsp;&nbsp;&nbsp;5、本展会不允许参展企业擅自转让展位，及两家公用一个展位，一经发现将取消其参展资格，费用概不退还。<br /><br />

                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 106px; padding: 5px;" align="center" bgcolor="#FFFFFF">
                            发票信息<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF" style="padding: 8px 0px 2px 10px;">
                            <?php echo $row['a25']; ?>
                             <div class="mao_1">
                            <p style="padding-bottom: 8px;">
                                <span style="padding-right: 5px;">发票内容</span><?php echo $row['a26']; ?></p>
                            <p style="padding-bottom: 8px;">
                                <span style="padding-right: 5px; ">发票抬头</span><?php echo $row['a27']; ?></p>
								<p style="padding-bottom: 8px;">
                                <span style="padding-right: 5px; ">纳税人号</span><?php echo $row['a28']; ?></p>
								<p style="padding-bottom: 8px;">
                                <span style="padding-right: 5px; ">开户银行</span><?php echo $row['a29']; ?></p>
								<p style="padding-bottom: 8px;">
                                <span style="padding-right: 5px; ">银行账号</span><?php echo $row['a30']; ?></p>
								<p style="padding-bottom: 8px;">
                                <span style="padding-right: 5px; ">地址电话</span><?php echo $row['a31']; ?></p>
								
								</div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="width: 106px; padding: 5px;" align="center" bgcolor="#FFFFFF">
                            留言<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a32']; ?>
                            </span>
                        </td>
                    </tr>
                    
                </table>
<?php
				}
				?>
</html>