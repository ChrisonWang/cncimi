<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 1 : intval($cid);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<?php echo GetHeader(1,$cid); ?>

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
		<div class="page-r-t clearfix">
		<form method="get" action="search.php">
        	<div class="page-search">
            	<input type="text" name="q" placeholder="请输入您的关键字">
            	<button name="submit">搜索</button>
            </div>
        </form>
        	<span><?php echo Getclass($cid); ?></span>
        </div>

    	<div class="page-r-c">
        	<ul class="list">
        		<?php

				$dopage->GetPage("SELECT * FROM `#@__infolist` WHERE (classid=$cid OR parentstr LIKE '%,$cid,%') AND delstate='' AND checkinfo=true ORDER BY posttime DESC",20);
				while($row = $dosql->GetArray())
				{
					if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y') $gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else $gourl = $row['linkurl'];

					$row2 = $dosql->GetOne("SELECT `classname` FROM `#@__infoclass` WHERE `id`=".$row['classid']);
					if($cfg_isreurl!='Y') $gourl2 = 'news.php?cid='.$row['classid'];
					else $gourl2 = 'news-'.$row['classid'].'-1.html';
				?>
                <li><span>(<?php echo MyDate('Y-m-d', $row['posttime']); ?>)</span><a href="<?php echo $gourl; ?>"><?php echo $row['title']; ?></a></li>
             
                  <?php
				}
				?>
            </ul>
        
        	
        	<div class="page-code">
                <?php echo $dopage->GetList(); ?>
            </div>
        </div>
    
    </div>
    
    <div class="clear"></div>
    
</div>

<?php require_once('footer.php'); ?>