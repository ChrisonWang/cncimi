<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('member'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站留言</title>
<link href="templates/style/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/forms.func.js"></script>
</head>
<body>
<div class="topToolbar"> <span class="title">网站留言</span> <a href="javascript:location.reload();" class="reload">刷新</a></div>
<table width="100%" cellpadding="0" cellspacing="0" border="1">
<tr>
<td height="30" align="center"><strong>编号</strong></td>
<td height="30" align="center"><strong>姓名</strong></td>
<td height="30" align="center"><strong>手机号码</strong></td>
<td height="30" align="center"><strong>所在单位</strong></td>
<td height="30" align="center"><strong>E-mail</strong></td>
<td height="30" align="center"><strong>添加日期</strong></td>
<td height="30" align="center"><strong>操作</strong></td>
</tr>
<?php
				if(!empty($keyword))
				{
					$keyword = htmlspecialchars($keyword);

					$dopage->GetPage("SELECT * FROM `#@__youjiang` where canshu = 2 ");
				}
				else
				{
					$dopage->GetPage("SELECT * FROM `#@__youjiang` where canshu = 2 ");
				}
				
				
				while($row = $dosql->GetArray())
				{
					

				?>
<tr>
<td height="30" align="center">&nbsp;<?php echo $row['id']; ?></td>
<td height="30" align="center">&nbsp;<?php echo $row['a1']; ?></td>
<td height="30" align="center">&nbsp;<?php echo $row['a2']; ?></td>
<td height="30" align="center">&nbsp;<?php echo $row['a3']; ?></td>
<td height="30" align="center">&nbsp;<?php echo $row['a4']; ?></td>
<td height="30" align="center">&nbsp;<?php echo MyDate('Y-m-d', $row['shijian']); ?></td>
<td height="30" align="center"><a href="member14.php?id=<?php echo $row['id']; ?>">查看</a>&nbsp;/&nbsp;<a href="member15.php?id=<?php echo $row['id']; ?>">删除</a></td>
</tr><?php
				}
				?>
</table>
<?php echo $dopage->GetList(); ?>
</html>