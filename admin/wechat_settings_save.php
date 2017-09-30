<?php	require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('weblink');

/*
**************************
(C)2010-2015 phpMyWind.com
update: 2014-5-30 18:08:58
person: Feng
**************************
*/


//初始化参数
$tbname = '#@__wechat_settings';
$gourl  = 'wechat.php';
$AppID = $_POST['AppID'];
$AppSecret = $_POST['AppSecret'];
$qr_image = $_POST['qr_image'];


//引入操作类
require_once(ADMIN_INC.'/action.class.php');

//判断更新还是插入
$r = $dosql->GetOne("SELECT `id` FROM `$tbname` LIMIT 0,1");
$action = (!isset($r['id']) || empty($r['id'])) ? 'add' : 'update';

//添加配置
if($action == 'add')
{
	$sql_add = "INSERT INTO `$tbname` (`app_id`, `app_secret`, `qr_image`) VALUES ('$AppID', '$AppSecret', '$qr_image');";
	if($dosql->ExecNoneQuery($sql_add))
	{
		header("location:$gourl");
		exit();
	}
}


//修改配置
if($action == 'update')
{
	$sql_update = "UPDATE `$tbname` SET `app_id` = '$AppID', `app_secret` = '$AppSecret', `qr_image` = '$qr_image' WHERE id='".$r['id']."'";
	if($dosql->ExecNoneQuery($sql_update))
	{
		header("location:$gourl");
		exit();
	}
}


//无条件返回
else
{
    header("location:$gourl");
	exit();
}
?>
