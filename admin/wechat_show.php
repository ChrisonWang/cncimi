<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('infolist'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改列表信息</title>
<link href="templates/style/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/getuploadify.js"></script>
<script type="text/javascript" src="templates/js/checkf.func.js"></script>
<script type="text/javascript" src="templates/js/getjcrop.js"></script>
<script type="text/javascript" src="templates/js/getinfosrc.js"></script>
<script type="text/javascript" src="plugin/colorpicker/colorpicker.js"></script>
<script type="text/javascript" src="plugin/calendar/calendar.js"></script>
<script type="text/javascript" src="editor/kindeditor-min.js"></script>
<script type="text/javascript" src="editor/lang/zh_CN.js"></script>
</head>
<body>
<?php
$row = $dosql->GetOne("SELECT * FROM `#@__wechat` WHERE `id`=$id");
?>
<div class="formHeader"> <span class="title">修改列表信息</span> <a href="javascript:location.reload();" class="reload">刷新</a> </div>
<form name="form" id="form" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="formTable">
		<tr>
			<td height="40" align="right" width="15%">活动名称：</td>
			<td>
                <p><?php echo $row['title']?></p>
            </td>
		</tr>
		<tr>
			<td height="40" align="right">我在参加（副标题）：</td>
			<td>
				<p><?php echo $row['description']?></p>
            </td>
		</tr>
		<tr>
			<td height="40" align="right">文章链接（查看更多链接）：</td>
			<td>
                <p><a href="<?php echo $row['article_link']?>" target="_blank"><?php echo $row['article_link']?></a></p>
            </td>
		</tr>

        <tr>
			<td height="40" align="right">封面图：</td>
			<td>
				<?php
				if(!empty($row['thumb'])) {
					echo GetQRCode($row['thumb'], 200, 200);
				}
				else{
					echo "<p>未上传封面图</p>";
				}
				?>
            </td>
		</tr>

        <tr>
			<td height="40" align="right">活动起止时间：</td>
			<td>
				<p><?php echo $row['start_date'].'  至  '.$row['end_date'] ?></p>
            </td>
		</tr>

		<tr class="nb">
			<td height="40" align="right">活动状态：</td>
			<td>
				<p>
                <?php
                if($row['status'] == 'open') {
	                echo '开启';
                }
                else{
	                echo '关闭';
                }
                ?>
				</p>
            </td>
		</tr>
        <tr>
			<td height="40" align="right">活动链接：</td>
			<td>
				<p><a href="<?php echo $row['activity_link']?>" target="_blank"><?php echo $row['activity_link']?></a></p>
            </td>
		</tr>
		<tr>
			<td height="40" align="right">分享活动二维码：</td>
			<td>
                <?php echo GetQRCode($row['qr_code']) ?>
            </td>
		</tr>
		<tr>
			<td height="40" align="right">创建时间：</td>
			<td>
                <?php echo $row['create_date'] ?>
            </td>
		</tr>
		<tr>
			<td height="40" align="right">更新时间：</td>
			<td>
                <?php echo $row['update_date'] ?>
            </td>
		</tr>
		<tr class="nb">
			<td colspan="2" height="26"><div class="line"> </div></td>
		</tr>
		<tr>
			<td height="40" align="right">排名情况：</td>
			<td>
				<?php
				$aid = $row['activity_code'];
				$dosql->Execute("SELECT * FROM `#@__wechat_activity` AS a LEFT JOIN `#@__wechat_user` AS b ON a.`uid` = b.`uid` WHERE a.`activity_code` = '$aid' ORDER BY a.`up` DESC, a.`update_date` DESC");
				$i = 1;
				?>
				<table cellpadding="0" cellspacing="0" class="rank_table">
					<thead>
						<th width="80px" align="center">排名</th>
						<th width="80px" align="center">头像</th>
						<th width="80px" align="center">昵称</th>
						<th width="80px" align="center">票数</th>
						<th width="140px" align="center">最新点赞时间</th>
					</thead>
					<tbody>
					<?php
					while($row = $dosql->GetArray()){
					?>
						<tr>
							<td align="center">第<?php echo $i ?>名</td>
							<td align="center"><img src="<?php echo $row['headimgurl'] ?>" width="80" height="80"/></td>
							<td align="center"><?php echo empty($row['nickname']) ? '--' : $row['nickname'] ?></td>
							<td align="center"><?php echo $row['up'] ?>票</td>
							<td align="center"><?php echo ($row['up']==0) ? '还没有人为他点赞' :$row['update_date'] ?></td>
						</tr>
					<?php
						$i++;
					}
					?>
					</tbody>
				</table>
            </td>
		</tr>
	</table>
	<div class="formSubBtn">
		<input type="button" class="back" value="返回" onclick="history.go(-1);" />
	</div>
</form>
</body>
</html>