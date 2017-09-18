<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('member'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>证书查询</title>
<link href="templates/style/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/forms.func.js"></script>
</head>
<body>
<div class="topToolbar"> <span class="title">证书查询</span> <a href="javascript:location.reload();" class="reload">刷新</a></div>
<?php

			//检测文档正确性
			$row = $dosql->GetOne("SELECT * FROM `#@__chaxun` WHERE id=$id");
			if(is_array($row))
			{
				
			?>
<table width="725" border="0" cellspacing="1" cellpadding="5" style="font-size: 12px;
                    line-height:28px; color: #333; background: #005288;" align="center">
                    <tr>
                        <td colspan="4" align="center" style="background: #005288; color: #fff; font-family: Microsoft YaHei,Arial;
                            font-weight: bold; font-size: 14px; padding: 8px;">证书查询表<br />
                          
                        </td>
                    </tr>
                    <tr>
                        <td width="123" align="center" bgcolor="#FFFFFF">
                            身份证<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="252" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a1']; ?>
                          </span>
                      </td>
                         <td width="105" align="center" bgcolor="#FFFFFF">
                            姓名<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="200" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a2']; ?>
                          </span>
                      </td>
                    </tr>
                      <tr>
                        <td width="123" align="center" bgcolor="#FFFFFF">
                          证书号码<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="252" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a3']; ?>
                          </span>
                        </td>
                         <td width="105" align="center" bgcolor="#FFFFFF">
                             性别<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="200" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a4']; ?>
                          </span>
                        </td>
                    </tr>
					
					<tr>
                        <td width="123" align="center" bgcolor="#FFFFFF">
                            E-Mail<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="252" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a5']; ?>
                          </span>
                      </td>
                         <td width="105" align="center" bgcolor="#FFFFFF">
                             培训内容<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="200" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a6']; ?>
                          </span>
                      </td>
                    </tr>
					<tr>
                        <td width="123" align="center" bgcolor="#FFFFFF">
                          培训课时                       </td>
                        <td width="252" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a7']; ?>
                          </span>
                      </td>
                         <td width="105" align="center" bgcolor="#FFFFFF">
                             培训时间<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="200" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                               <?php echo $row['a8']; ?>
                          </span>
                      </td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#FFFFFF">
                           所在单位<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span></td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a9']; ?>
                            </span>
                        </td>
                    </tr>
					<tr>
                        <td align="center" bgcolor="#FFFFFF">
                            部门职务<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span></td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a10']; ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#FFFFFF">
                            <font style="color:#FF0000; font-weight:bold;">备注</font><span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>
                        </td>
                        <td colspan="3" bgcolor="#FFFFFF">
                           <span style="color: #000000; padding-left: 8px;">
                               <?php echo $row['a11']; ?>
                            </span>
                        </td>
                    </tr>
                   
                </table><?php
				}
				?>
</html>