<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 4 : intval($cid);
$id  = empty($id)  ? 0 : intval($id);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="images/ico.ico" rel="Shortcut Icon"/>
<?php echo GetHeader(1,$cid); ?>
<link href="css/index.css" rel="stylesheet" type="text/css" />

    <script src="js/jquery-1.6.1.min.js" type="text/javascript"></script>

    <link href="css/pager.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        ol
        {
            margin-left: 12px;
        }
        .right_nr ul li
        {
            list-style-type: disc;
            margin-left: 12px;
        }
       
    </style>
<title>

</title></head>
<body>
   
    <div class="bg">
        <div class="box">
            <?php require_once('head.php'); ?>    
   <div class="content">
        <div class="cta">
            
	<div class="left_menu">
		<div class="left_menu_nr">
			<ul>
				<li><a  href="about.php?cid=7">邀请函</a></li><li><a  href="news.php">论坛动态</a></li><li><a  href="about.php?cid=9">峰会日程</a></li><li><a  href="yanjiang.php">演讲征集</a></li><li><a  href="baoming.php">参会报名</a></li><li><a  href="canzhan.php">论坛参展</a></li><li><a  href="hezuo.php">媒体合作</a></li><li><a  href="about.php?cid=2">交通住宿</a></li><li><a  href="news.php?cid=3">往届回顾</a></li><li><a  href="about.php?cid=4">联系我们</a></li>
			</ul>
		</div>
	</div>
		<!--left_menu -->
        </div>
        <!--cta -->
        <div class="right">
            <div class="right_bt">
                
<strong>当前位置：</strong><?php echo GetPosStr($cid,$id); ?>
            </div>
            <div class="right_nr"><?php

			//检测文档正确性
			$r = $dosql->GetOne("SELECT * FROM `#@__infoimg` WHERE id=$id");
			if(@$r)
			{
			//增加一次点击量
			$dosql->ExecNoneQuery("UPDATE `#@__infoimg` SET hits=hits+1 WHERE id=$id");
			$row = $dosql->GetOne("SELECT * FROM `#@__infoimg` WHERE id=$id");
			?>
                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                    
                   
                    <tr>
                        <td height="34" colspan="3" align="left">
                            <table width="100%" border="0" cellspacing="4" cellpadding="8">
                                <tr>
                                    <td id="size" height="185" valign="top" style="text-align: left;">
                                        <?php
				if($row['content'] != '')
					echo GetContPage($row['content']);
				else
					echo '网站资料更新中...';
				?><?php
			}
		
			?>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!--right -->
        <div class="clear">
        </div>
    </div>
    <!--content -->

            <!--content -->
            


            <!-- box-->
        </div>
    <!--bg -->
    </div>
     <?php require_once('foot.php'); ?>
</body>
</html>
