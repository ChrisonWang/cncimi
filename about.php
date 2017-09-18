<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 4 : intval($cid);
$id  = empty($id)  ? 0 : intval($id);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<?php echo GetHeader(); ?>

<link href="<?php echo $cfg_webpath; ?>/templates/default/css/basic.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $cfg_webpath; ?>/templates/default/css/smallslider.css" type="text/css" rel="stylesheet" />
<script src="<?php echo $cfg_webpath; ?>/templates/default/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo $cfg_webpath; ?>/templates/default/js/jquery.smallslider.js" type="text/javascript"></script>
<script src="<?php echo $cfg_webpath; ?>/templates/default/js/all.js" type="text/javascript"></script>
</head>
<body>
<?php require_once('head.php'); ?>
    
<?php require_once('left.php'); ?>
    
    <div class="page-r"> 
   
		<div class="page-r-t clearfix text-center">
        	<span><?php echo Getclass($cid); ?></span>
        </div>
            <div class="page-r-c">
        	
            <div class="page-info"> </div>
            
            <div class="page-content">
  		<?php echo Info($cid); ?>
            </div>
            
        </div>
            
        </div>
    <div class="clear"></div>
    </div>
    
    
    
</div>

<?php require_once('footer.php'); ?>