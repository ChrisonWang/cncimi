<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('member'); ?>
<?php
$dosql->ExecNoneQuery("DELETE FROM `#@__yanjiang` WHERE  id=$id");
ShowMsg('删除成功！','member1.php');
			exit();
?>