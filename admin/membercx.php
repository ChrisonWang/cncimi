<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('member'); 
if(isset($_GET['a']) and $_GET['a']=='del'){
	$dosql->ExecNoneQuery("DELETE FROM `#@__chaxun` WHERE  id=$id");
	ShowMsg('删除成功！','membercx.php');
	exit();
}
?>
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
<div class="topToolbar"> <span class="title">证书查询</span> <a href="javascript:location.reload();" class="reload">刷新</a>
<form name="form2" method="post" enctype="multipart/form-data" action="upload_excel.php">
<input type="hidden" name="leadExcel" value="true">
<input type="file" name="inputExcel"><input type="submit" name="import" value="导入数据">
</form>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="1">
<tr>
<td height="30" align="center"><strong>编号</strong></td>
<td height="30" align="center"><strong>身份证</strong></td>
<td height="30" align="center"><strong>姓名</strong></td>
<td height="30" align="center"><strong>证书编号</strong></td>
<td height="30" align="center"><strong>性别</strong></td>
<td height="30" align="center"><strong>培训内容</strong></td>
<td height="30" align="center"><strong>培训课时</strong></td>
<td height="30" align="center"><strong>培训时间</strong></td>
<td height="30" align="center"><strong>所在单位</strong></td>
<td height="30" align="center"><strong>部门职务</strong></td>
<td height="30" align="center"><strong>备注</strong></td>
<td height="30" align="center"><strong>操作</strong></td>
</tr>
<?php
				if(!empty($keyword))
				{
					$keyword = htmlspecialchars($keyword);

					$dopage->GetPage("SELECT * FROM `#@__chaxun` ");
				}
				else
				{
					$dopage->GetPage("SELECT * FROM `#@__chaxun` ");
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
<td height="30" align="center">&nbsp;<?php echo $row['a5']; ?></td>
<td height="30" align="center">&nbsp;<?php echo $row['a6']; ?></td>
<td height="30" align="center">&nbsp;<?php echo $row['a7']; ?></td>
<td height="30" align="center">&nbsp;<?php echo $row['a8']; ?></td>
<td height="30" align="center">&nbsp;<?php echo $row['a9']; ?></td>
<td height="30" align="center">&nbsp;<?php echo $row['a10']; ?></td>
<td height="30" align="center"><a href="membercx1.php?id=<?php echo $row['id']; ?>">查看</a>&nbsp;/&nbsp;<a href="membercx.php?a=del&id=<?php echo $row['id'];?>">删除</a></td>
</tr><?php
				}
				?>
</table>
<?php echo $dopage->GetList(); ?>
</html>