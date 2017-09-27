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
$action = isset($action) ? $action : '';
$id = $_POST['id'];
$AppID = $_POST['AppID'];
$AppSecret = $_POST['AppSecret'];


//引入操作类
require_once(ADMIN_INC.'/action.class.php');

//判断更新还是插入
$r = $dosql->GetOne("SELECT `id` FROM `$tbname` WHERE id=$id");
$action = !isset($r)||empty($r) ? 'add' : 'update';

//添加配置
if($action == 'add')
{
	$sql = "INSERT INTO `$tbname` (`app_id`, `app_secret`) VALUES ('$AppID', '$AppSecret');";
	if($dosql->ExecNoneQuery($sql))
	{
		header("location:$gourl");
		exit();
	}
}


//修改配置
else if($action == 'update')
{
	$sql = "UPDATE `$tbname` SET `app_id` = '$AppID', `app_secret` = '$AppSecret' WHERE id=$id";
	if($dosql->ExecNoneQuery($sql))
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
