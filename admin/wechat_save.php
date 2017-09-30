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
$id = is_null($_POST['id']) ? $_GET['id'] : $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$article_link = $_POST['article_link'];
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
	//取出内嵌图
	$inter_image = $dosql->GetOne("SELECT `qr_image` FROM `#@__wechat_settings` LIMIT 0,1");
	$inter_image = empty($inter_image['qr_image']) ? '' : $inter_image['qr_image'];

    //生成活动二维码与活动唯一编码
    $code = $wechatClass->genUnionCode();
    $qrcode = $wechatClass->qrcode('http://www.cncipi.org/activity.php?aid='.$code, $code, 'L', 12, $inter_image);
    $a_link = 'http://www.cncipi.org/activity.php?aid='.$code;
    //存数据
	$sql = "INSERT INTO `$tbname` (`title`, `description`, `article_link`, `status`, `activity_code`, `activity_link`, `start_date`, `end_date`, `thumb`, `content`, `detail`, `agenda`, `qr_code`, `create_date`, `update_date`)
VALUES ('$title', '$description', '$article_link', '$status', '$code', '$a_link', '$start_date', '$end_date', '$thumb', '$content', '$detail', '$agenda', '$qrcode', '$now', '$now')";

	if($dosql->ExecNoneQuery($sql))
	{
		header("location:$gourl");
		exit();
	}
}

//修改列表信息
else if($action == 'update')
{
	$sql = "UPDATE `$tbname` SET `title`='$title', `description`='$description', `article_link`='$article_link', `status`='$status', `start_date`='$start_date', `end_date`='$end_date', `thumb`='$thumb', `content`='$content', `detail`='$detail', `agenda`='$agenda', `create_date`='$now', `update_date`='$now' WHERE `id`=$id";
	if($dosql->ExecNoneQuery($sql))
	{
		header("location:$gourl");
		exit();
	}
}

//修改状态
else if($action == 'del')
{
    $info = $dosql->GetOne("SELECT * FROM `#@__wechat` WHERE `id` = '$id' LIMIT 0,1");
    if($info['status'] != 'close'){
        exit("<script>alert('此活动未关闭，删除活动前请先关闭活动！');window.location.href='/admin/wechat.php'</script>");
    }
    else{
        $sql_wechat = "DELETE FROM `#@__wechat` WHERE `id` = '$id'";
        $sql_activity = "DELETE FROM `#@__wechat_activity` WHERE `activity_code` = '".$info['activity_code']."'";
        $sql_up = "DELETE FROM `#@__wechat_up` WHERE `aid` = '".$info['activity_code']."'";
        if($dosql->ExecNoneQuery($sql_wechat) && $dosql->ExecNoneQuery($sql_activity) && $dosql->ExecNoneQuery($sql_up))
        {
            header("location:$gourl");
            exit();
        }
    }
}


//无状态返回
else
{
	header("location:$gourl");
	exit();
}
?>
