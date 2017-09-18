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
<script>
//分享按钮
$(function(){
	var Lhref=encodeURIComponent(window.location.href);
	
	var sinahref=$('#sinaShare').attr("href");
	var QQhref=$('#QQShare').attr("href");
	var QQKJhref=$('#QQKJShare').attr("href");
	var wxhref=$('#wxShare').attr("href");
	$('#sinaShare').attr("href",sinahref+Lhref)
	$('#QQShare').attr("href",QQhref+Lhref)
	$('#QQKJShare').attr("href",QQKJhref+Lhref+'&api_key=')
	$('#wxShare').attr("href",wxhref+Lhref)

})



</script>

<?php require_once('head.php'); ?>
    
<?php require_once('left.php'); ?>
    
    <div class="page-r"> 
    <?php
			//检测文档正确性
			$row = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=$id");
			if(is_array($row))
			{
				//增加一次点击量
				$dosql->ExecNoneQuery("UPDATE `#@__infolist` SET hits=hits+1 WHERE id=$id");
			?>
		<div class="page-r-t clearfix text-center">
        	 <?php echo $row['title']; ?>
        </div>
            <div class="page-r-c">
        	
            <div class="page-info clearfix">
            
            	<table cellsapcing="0" cellpadding="0" border="0" class="pull-right">
                	<tbody>
                    	<tr>
                        	<td style="padding-top:4px">
                            	<a href="javascript:void(0);" onclick="window.close();"><img alt="关闭" id="btnDown" src="/images/close.gif"></a>
								<a href="javascript:void(0);" onclick="window.print();"><img alt="打印" id="btnPrint" src="/images/print.gif"></a>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;
                            <a target="_blank" href="http://v.t.sina.com.cn/share/share.php?title=<?php echo $row['title']; ?>&url=" id="sinaShare"><img title="分享到新浪微博" alt="分享到新浪微博" src="/images/share_sina.gif" border="0" align="absMiddle"> </a>
                            <a target="_blank" href="http://share.v.t.qq.com/index.php?c=share&a=index&title=<?php echo $row['title']; ?>&url=" id="QQShare"><img title="分享到腾讯微博" alt="分享到腾讯微博" src="/images/share_tennet.gif" border="0" align="absMiddle"> </a>
                            <a target="_blank" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?title=<?php echo $row['title']; ?>&url=" id="QQKJShare"><img title="分享到QQ空间" alt="分享到QQ空间" src="/images/share_qzone.gif" border="0" align="absMiddle"> </a>
                            <a target="_blank" href="/ewm.html?title=<?php echo $row['title']; ?>&url= " id="wxShare"><img title="分享到微信" alt="分享到微信" src="/images/share_weixin.gif" border="0" align="absMiddle"> </a>
                            </td></tr></tbody></table>
            
            
            来源：<?php echo $row['author']; ?>&nbsp;&nbsp;&nbsp;&nbsp;发布时间：<?php echo MyDate('Y-m-d', $row['posttime']); ?>&nbsp;&nbsp;&nbsp;&nbsp;阅读次数：<font style="color:#f00"><?php echo $row['hits']; ?></font>&nbsp;次 </div>
            
            <div class="page-content">
  			<?php
				if($row['content'] != '')
					echo GetContPage($row['content']);
				else
					echo '网站资料更新中...';
			?>
            <?php } ?>
            </div>
            
        </div>
            
        </div>
    <div class="clear"></div>
    </div>
    
    
    
</div>

<?php require_once('footer.php'); ?>