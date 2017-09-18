<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('member'); ?>
<?php
$dosql->ExecNoneQuery("DELETE FROM `#@__baoming` WHERE  id=$id");
ShowMsg('删除成功！','member4.php');
			exit();
?>