<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('infolist'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加列表信息</title>
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
<body>
<div class="formHeader"> <span class="title">添加微信活动</span> <a href="javascript:location.reload();" class="reload">刷新</a> </div>
<form name="form" id="form" method="post" action="wechat_save.php" onsubmit="return cfm_wechat();">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="formTable">
		<tr>
			<td height="40" align="right">活动名称：</td>
			<td>
                <input type="text" name="title" id="title" class="input" />
				<span class="maroon">*</span>
            </td>
		</tr>
		<tr>
			<td height="40" align="right">活动起止时间：</td>
			<td>
                <input name="start_date" type="text" id="start_date" class="inputms" value="<?php echo GetDateTime(time()); ?>" readonly="readonly" />
                <input name="end_date" type="text" id="end_date" class="inputms" value="<?php echo GetDateTime(time()); ?>" readonly="readonly" />
				<script type="text/javascript">
				date = new Date();
				Calendar.setup({
					inputField     :    "end_date",
					ifFormat       :    "%Y-%m-%d %H:%M:%S",
					showsTime      :    true,
					timeFormat     :    "24"
				});
				Calendar.setup({
					inputField     :    "start_date",
					ifFormat       :    "%Y-%m-%d %H:%M:%S",
					showsTime      :    true,
					timeFormat     :    "24"
				});
				</script>
            </td>
		</tr>
		<tr>
			<td height="40" align="right">封面图：</td>
			<td>
                <input type="text" name="thumb" id="thumb" class="input" />
				<span class="cnote">
                    <span class="grayBtn" onclick="GetUploadify('uploadify','缩略图上传','image','image',1,<?php echo $cfg_max_file_size; ?>,'thumb')">上 传</span>
                    <span class="cutPicTxt"><a href="javascript:;" onclick="GetJcrop('jcrop','thumb');return false;">裁剪</a></span>
                </span>
            </td>
		</tr>

		<tr>
			<td height="340" align="right">活动内容：</td>
			<td>
                <textarea name="content" id="content" class="kindeditor"></textarea>
            </td>
		</tr>
        <tr>
			<td height="340" align="right">活动细则：</td>
			<td>
                <textarea name="detail" id="detail" class="kindeditor"></textarea>
            </td>
		</tr>
        <tr>
			<td height="340" align="right">活动议程：</td>
			<td>
                <textarea name="agenda" id="agenda" class="kindeditor"></textarea>
            </td>
		</tr>
        <script>
			var editor_content;
			var editor_detail;
			var editor_agenda;
			KindEditor.ready(function(K) {
				editor_content = K.create('textarea[name="content"]', {
					allowFileManager : true,
					width:'667px',
					height:'280px',
					extraFileUploadParams : {
						sessionid :  '<?php echo session_id(); ?>'
					}
				});
                editor_detail = K.create('textarea[name="detail"]', {
					allowFileManager : true,
					width:'667px',
					height:'280px',
					extraFileUploadParams : {
						sessionid :  '<?php echo session_id(); ?>'
					}
				});
                editor_agenda = K.create('textarea[name="agenda"]', {
					allowFileManager : true,
					width:'667px',
					height:'280px',
					extraFileUploadParams : {
						sessionid :  '<?php echo session_id(); ?>'
					}
				});
			});
		</script>

		<tr class="nb">
			<td colspan="2" height="26"><div class="line"> </div></td>
		</tr>

		<tr class="nb">
			<td height="40" align="right">活动状态：</td>
			<td>
                <input type="radio" name="status" value="open" checked="checked"  />
				开启 &nbsp;
				<input type="radio" name="status" value="close" />
				关闭
            </td>
		</tr>
        <tr>
			<td height="40" align="right">分享活动二维码：</td>
			<td>
                保存后系统自动生成
            </td>
		</tr>
	</table>
	<div class="formSubBtn">
		<input type="submit" class="submit" value="提交" />
		<input type="button" class="back" value="返回" onclick="history.go(-1);" />
		<input type="hidden" name="action" id="action" value="add" />
	</div>
</form>
</body>
</html>