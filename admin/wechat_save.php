<?php	require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('infolist');

/*
**************************
(C)2017-2018 https://github.com/ChrisonWang
update: 2017-9-24 17:03:29
person: Wang
**************************
*/


//初始化参数
$tbname = '#@__wechat';
$gourl  = 'wechat.php';
$action = isset($action) ? $action : '';
//处理参数
$now_status = $_POST['now_status'];
$id = $_POST['id'];
$title = $_POST['title'];
$status = $_POST['status'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$thumb = $_POST['thumb'];
$content = $_POST['content'];
$detail = $_POST['detail'];
$agenda = $_POST['agenda'];
$now = date('Y-m-d H:i:s', time());


//添加列表信息
if($action == 'add')
{
    //生成活动二维码与活动唯一编码
    $code = $wechatClass->genUnionCode();
    $qrcode = $wechatClass->qrcode('http://www.baidu.com', $code, 'L', 12);

    //存数据
	$sql = "INSERT INTO `$tbname` (`title`, `status`, `start_date`, `end_date`, `thumb`, `content`, `detail`, `agenda`, `qr_code`, `create_date`, `update_date`) 
VALUES ('$title', '$status', '$start_date', '$end_date', '$thumb', '$content', '$detail', '$agenda', '$qrcode', '$now', '$now')";

	if($dosql->ExecNoneQuery($sql))
	{
		header("location:$gourl");
		exit();
	}
}

//修改列表信息
else if($action == 'update')
{
	$sql = "UPDATE `$tbname` SET `title`='$title', `status`='$status', `start_date`='$start_date', `end_date`='$end_date', `thumb`='$thumb', `content`='$content', `detail`='$detail', `agenda`='$agenda', `create_date`='$now', `update_date`='$now' WHERE id=$id";
	if($dosql->ExecNoneQuery($sql))
	{
		header("location:$gourl");
		exit();
	}
}

//修改状态
else if($action == 'status')
{

	$sql = "UPDATE `$tbname` SET `status`='$status' WHERE id=$id";
	if($dosql->ExecNoneQuery($sql))
	{
		header("location:$gourl");
		exit();
	}
}


//修改审核状态
else if($action == 'status')
{
	if($now_status == 'open')
	{
		$dosql->ExecNoneQuery("UPDATE `$tbname` SET `status`='close' WHERE `id`=$id");
		echo '<a href="javascript:;" onclick="CheckInfo('.$id.',\'未审\')" title="点击进行审核与未审操作">未审</a>';
		exit();
	}

	if($now_status == 'close')
	{
		$dosql->ExecNoneQuery("UPDATE `$tbname` SET `status`='open' WHERE `id`=$id");
		echo '<a href="javascript:;" onclick="CheckInfo('.$id.',\'已审\')" title="点击进行审核与未审操作">已审</a>';
		exit();
	}
}


//无状态返回
else
{
	header("location:$gourl");
	exit();
}
?>
