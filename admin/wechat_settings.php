<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('weblink'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>公众号配置</title>
<link href="templates/style/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/getuploadify.js"></script>
<script type="text/javascript" src="templates/js/checkf.func.js"></script>
<script type="text/javascript" src="plugin/calendar/calendar.js"></script>
</head>
<body>
<?php
    //取出微信配置
    $wechat_settings = $dosql->GetOne("SELECT * FROM `#@__wechat_settings` LIMIT 0,1");
?>
<div class="formHeader"> <span class="title">公众号配置</span> <a href="javascript:location.reload();" class="reload">刷新</a> </div>
<form name="form" id="form" method="post" action="wechat_settings_save.php" onsubmit="return cfm_wechat_settings();">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="formTable">
		<tr>
			<td height="40" align="right">AppID：</td>
			<td><input type="text" name="AppID" id="AppID" class="input" value="<?php echo $wechat_settings['app_id']?>"/>
				<span class="maroon">*</span></td>
		</tr>
		<tr>
			<td height="40" align="right">AppSecret：</td>
			<td><input type="text" name="AppSecret" id="AppSecret" class="input" value="<?php echo $wechat_settings['app_secret']?>"/>
				<span class="maroon">*</span></td>
		</tr>
		<tr>
			<td height="40" align="right">二维码内嵌图：</td>
			<td>
                <input type="text" name="qr_image" id="qr_image" class="input" value="<?php echo $wechat_settings['qr_image']?>"/>
				<span class="cnote">
                    <span class="grayBtn" onclick="GetUploadify('uploadify','缩略图上传','image','image',1,<?php echo $cfg_max_file_size; ?>,'qr_image')">上 传</span>
                    <span class="cutPicTxt"><a href="javascript:;" onclick="GetJcrop('jcrop','qr_image');return false;">裁剪</a></span>
                </span>
            </td>
		</tr>
		<?php if(!empty($wechat_settings['qr_image'])) {?>
        <tr>
			<td height="40" align="right">二维码内嵌图预览：</td>
			<td>
                <?php echo GetQRCode($wechat_settings['qr_image'], 200, 200) ?>
            </td>
		</tr>
        <?php } ?>
	</table>
	<div class="formSubBtn">
		<input type="submit" class="submit" value="提交" />
		<input type="button" class="back" value="返回" onclick="history.go(-1);" />
		<input type="hidden" name="id" value="1" />
	</div>
</form>
</body>
</html>