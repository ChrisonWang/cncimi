<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('member'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>参会报名</title>
<link href="templates/style/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/forms.func.js"></script>
</head>
<body>
<div class="topToolbar"> <span class="title">参会报名</span> <a href="javascript:location.reload();" class="reload">刷新</a></div>
<?php

			//检测文档正确性
			$row = $dosql->GetOne("SELECT * FROM `#@__baoming` WHERE id=$id");
			if(is_array($row))
			{
				
			?>
<table width="800" border="0" cellspacing="1" cellpadding="5" style="font-size: 12px;
                    color: #333; background: #005288; line-height: 28px" align="center">
                    <tr>
                        <td colspan="4" align="center" style="background: #005288; color: #fff; font-family: Microsoft YaHei,Arial;
                            font-weight: bold; font-size: 14px; padding: 8px;">参会报名表<br />
                        </td>
                    </tr>
                    <tr>
                        <td width="100" align="center" bgcolor="#FFFFFF">
                            单位名称 <span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="270" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a1']; ?>
                            </span>
                        </td>
                        <td width="100" bgcolor="#FFFFFF" style="padding-left: 5px;" align="center">
                            联系人 <span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td width="270" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a2']; ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                       
                        <td width="100" bgcolor="#FFFFFF" style="padding-left: 5px;" align="center">
                            手机号码 <span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a4']; ?>
                            </span>
                        </td>
                        <td width="100" align="center" bgcolor="#FFFFFF">
                            E-mail<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a5']; ?>
                            </span>
                        </td>
                    </tr>
					<tr>
                        
                        <td width="100" bgcolor="#FFFFFF" style="padding-left: 5px;" align="center">
                             办公电话<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom">
                                *</span>
                        </td>
                        <td  bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a6']; ?>
                            </span>
                        </td>
                        <td align="center" bgcolor="#FFFFFF">
                            通讯地址<span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom"> <!--原来分会场主题2014/1/21-->
                                *</span> <!--原来研讨班主题-->
                              <br>  <span class="style1">
							</span></br><!--&gt;&gt;点击查看日程-->
                        </td>
                        <td bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a7']; ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#FFFFFF">
                            参加的培训班名称 <span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom"> <!--原来分会场主题2014/1/21-->
                                *</span> <!--原来研讨班主题-->
                              <br>  <span class="style1">
							</span></br><!--&gt;&gt;点击查看日程-->
                        </td>
                        <td bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['b1']; ?>
                            </span>
                        </td>
                        <td align="center" bgcolor="#FFFFFF">
                            参加的培训班地点  <span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom"> <!--原来分会场主题2014/1/21-->
                                *</span> <!--原来研讨班主题-->
                              <br>  <span class="style1">
							</span></br><!--&gt;&gt;点击查看日程-->
                        </td>
                        <td bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['b2']; ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#FFFFFF">
                            参加的培训班时间  <span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom"> <!--原来分会场主题2014/1/21-->
                                *</span> <!--原来研讨班主题-->
                              <br>  <span class="style1">
							</span></br><!--&gt;&gt;点击查看日程-->
                        </td>
                        <td bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['b3']; ?>
                            </span>
                        </td>
                        <td align="center" bgcolor="#FFFFFF">
                            我方联系人员   <span style="color: #ff0000; font-size: 16px; font-weight: bolder; vertical-align: bottom"> <!--原来分会场主题2014/1/21-->
                                *</span> <!--原来研讨班主题-->
                              <br>  <span class="style1">
							</span></br><!--&gt;&gt;点击查看日程-->
                        </td>
                        <td bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['b4']; ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center" bgcolor="#FFFFFF">
                            <table width="100%" border="0" cellspacing="1" cellpadding="5" style="background: #ccc;">
                                <tr style="height: 28px; line-height: 28px" style="color:#FFFFFF">
                                    <td width="100" align="center" bgcolor="#005288">
                                        <span class="STYLE1">姓名 <span style="color: #ff0000; font-size: 16px; font-weight: bolder;
                                            vertical-align: bottom;">*</span> </span>
                                    </td>
                                    <td width="70" align="center" bgcolor="#005288">
                                        <span class="STYLE1">性别 <span style="color: #ff0000; font-size: 16px; font-weight: bolder;
                                            vertical-align: bottom;">*</span></span>
                                    </td>
                                    <td width="105" align="center" bgcolor="#005288">
                                        <span class="STYLE1">部门 <span style="color: #ff0000; font-size: 16px; font-weight: bolder;
                                            vertical-align: bottom;">*</span></span>
                                    </td>
                                    <td width="105" align="center" bgcolor="#005288">
                                        <span class="STYLE1">职位 <span style="color: #ff0000; font-size: 16px; font-weight: bolder;
                                            vertical-align: bottom">*</span></span>
                                    </td>
                                    <td width="115" align="center" bgcolor="#005288">
                                        <span class="STYLE1">手机 
											<span style="color: #ff0000; font-size: 16px; font-weight: bolder;vertical-align: bottom">*</span>
										</span>
                                    </td>
                                    <td align="center" bgcolor="#005288">
                                        <span class="STYLE1">邮箱 <span style="color: #ff0000; font-size: 16px; font-weight: bolder;
                                            vertical-align: bottom">*</span>
										</span>
                                    </td>
                                </tr>
                                <tr style="height: 30px; line-height: 28px">
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a8']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a9']; ?>
                                        </span>
                                    </td>
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
                                </tr>
								<tr style="height: 30px; line-height: 28px">
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
                                </tr>
								<tr style="height: 30px; line-height: 28px">
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
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a22']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a23']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a24']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a25']; ?>
                                        </span>
                                    </td>
                                </tr>
								<tr style="height: 30px; line-height: 28px">
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a26']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                           <?php echo $row['a27']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a28']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a29']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a30']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                           <?php echo $row['a31']; ?>
                                        </span>
                                    </td>
                                </tr>
								<tr style="height: 30px; line-height: 28px">
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a32']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                           <?php echo $row['a33']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                           <?php echo $row['a34']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a35']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a36']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a37']; ?>
                                        </span>
                                    </td>
                                </tr>
								<tr style="height: 30px; line-height: 28px">
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                           <?php echo $row['a38']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                          <?php echo $row['a39']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a40']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a41']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                           <?php echo $row['a42']; ?>
                                        </span>
                                    </td>
                                    <td bgcolor="#FFFFFF">
                                        <span style="color: #000000; padding-left: 8px;">
                                            <?php echo $row['a43']; ?>
                                        </span>
                                    </td>
                                </tr>
                            </table>
							
							
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 106px; padding: 5px;" align="center" bgcolor="#FFFFFF">
                            您了解本论坛的途径
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a44']; ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 106px; padding: 5px;" align="center" bgcolor="#FFFFFF">
                            希望您对本论坛提出宝贵的建议
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                              <?php echo $row['a45']; ?>
                            </span>
                        </td>
                    </tr>
					<tr>
                        <td style="width: 106px; padding: 5px;" align="center" bgcolor="#FFFFFF">
                            您对本论坛的关注点
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                               <?php echo $row['a46']; ?>
                            </span>
                        </td>
                    </tr>
                   
                </table><?php
				}
				?>
</html>