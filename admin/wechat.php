<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('weblink'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>微信推广管理</title>
<link href="templates/style/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/loadimage.js"></script>
<script type="text/javascript" src="templates/js/forms.func.js"></script>
<script type="text/javascript">
$(function(){
    $(".thumbs img").LoadImage();
});
</script>
</head>
<body>
<div class="topToolbar"> <span class="title">微信推广管理</span>
    <span class="text"><a href="wechat_settings.php">公众号配置</a></span>
    <a href="javascript:location.reload();" class="reload">刷新</a></div>
<form name="form" id="form" method="post" action="">
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="dataTable">
		<tr align="left" class="head">
			<td width="5%" height="36" class="firstCol"><input type="checkbox" name="checkid" id="checkid" onclick="CheckAll(this.checked);"></td>
			<td width="5%">ID</td>
			<td width="15%">封面</td>
			<td width="20%">活动名称</td>
			<td width="20%">活动时间</td>
			<td width="10%">状态</td>
			<td width="10">活动二维码</td>
			<td width="15%" class="endCol">操作</td>
		</tr>
		<?php
        //取出数据
		$sql = "SELECT * FROM `#@__wechat`";
		$dopage->GetPage($sql);
		while($row = $dosql->GetArray())
		{
			switch($row['status'])
			{
				case 'open':
					$status = '开启';
					break;  
				case 'close':
					$status = '关闭';
					break;
				default:
					$status = '没有获取到参数';
			}
		?>
		<tr align="left" class="dataTr">
			<td height="70" class="firstCol"><input type="checkbox" name="id[]" id="id[]" value="<?php echo $row['id']; ?>" /></td>
			<td><?php echo $row['id']; ?></td>
			<td><span class="thumbs"><?php echo GetMgrThumbs($row['thumb']); ?></span></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['start_date'].' 至 '.$row['end_date']; ?></td>
			<td><?php echo $status; ?></td>
			<td><?php echo GetQRCode($row['qr_code'], 100, 100) ?></td>
			<td class="action endCol">
				<span>
                    <a href="wechat_show.php?id=<?php echo $row['id']; ?>">活动状态</a>
                </span> |
                <span>
                    <a href="wechat_update.php?id=<?php echo $row['id']; ?>">修改</a>
                </span> |
                <span>
                    <a href="wechat_save.php?action=del&id=<?php echo $row['id']; ?>" onclick="return ConfActivityDel()">删除</a>
                </span>
            </td>
		</tr>
		<?php
		}	
		?>
	</table>
</form>
<?php

//判断无记录样式
if($dosql->GetTotalRow() == 0)
{
	echo '<div class="dataEmpty">暂时没有相关的记录</div>';
}
?>
<div class="bottomToolbar">
<!--    <span class="selArea"><span>选择：</span> <a href="javascript:CheckAll(true);">全部</a> - <a href="javascript:CheckAll(false);">无</a> - <a href="javascript:DelAll('weblink_save.php');" onclick="return ConfDel(0);">删除</a></span> -->
    <a href="wechat_add.php" class="dataBtn">添加活动</a> </div>
<div class="page"> <?php echo $dopage->GetList(); ?> </div>
<?php

//判断是否启用快捷工具栏
if($cfg_quicktool == 'Y')
{
?>
<div class="quickToolbar">
	<div class="qiuckWarp">
		<div class="quickArea">
<!--            <span class="selArea"><span>选择：</span> <a href="javascript:CheckAll(true);">全部</a> - <a href="javascript:CheckAll(false);">无</a> - <a href="javascript:DelAll('weblink_save.php');" onclick="return ConfDel(0);">删除</a></span> -->
            <a href="wechat_add.php" class="dataBtn">添加活动</a>
            <span class="pageSmall"><?php echo $dopage->GetList(); ?></span>
        </div>
		<div class="quickAreaBg"></div>
	</div>
</div>
<?php
}
?>
</body>
</html>