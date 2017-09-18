<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 1 : intval($cid);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="images/ico.ico" rel="Shortcut Icon"/>
<?php echo GetHeader(1,$cid); ?>
<link href="css/index.css" rel="stylesheet" type="text/css" />

    <script src="js/jquery-1.6.1.min.js" type="text/javascript"></script>

    <link href="css/pager.css" rel="stylesheet" type="text/css" /><title>

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
                
<strong>当前位置：</strong><?php echo GetPosStr($cid); ?>
            </div>
            <div class="right_nr">
                <div class="xingfa_nr">
                    <ul>
                        <?php
				if(!empty($keyword))
				{
					$keyword = htmlspecialchars($keyword);

					$sql = "SELECT * FROM `#@__infoimg` WHERE (classid=$cid OR parentstr LIKE '%,$cid,%') AND title LIKE '%$keyword%' AND delstate='' AND checkinfo=true ORDER BY orderid DESC";
				}
				else
				{
					$sql = "SELECT * FROM `#@__infoimg` WHERE (classid=$cid OR parentstr LIKE '%,$cid,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC";
				}

				$dopage->GetPage($sql,25);
				while($row = $dosql->GetArray())
				{
					if($row['picurl'] != '') $picurl = $row['picurl'];
					else $picurl = 'templates/default/images/nofoundpic.gif';
					
					if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'productshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y') $gourl = 'productshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else $gourl = $row['linkurl'];
				?>
                        <li class="left_bt_li">
							<span style="float: left">
								<a  title='<?php echo $row['gongsi']; ?>' href='<?php echo $gourl; ?>'>
									<?php echo $row['gongsi']; ?>
								</a>
							</span>
							
							
                            
							<div class="clear">
                            </div>
                        </li>
                        
                       <?php
				}
				?>
                        
                    </ul>
                    <div id="_ctl0_ContentPlaceHolder1_tabpager" class="paginator" style="display:block;margin-top:15px;text-align:center;margin-bottom:30px;">

<?php echo $dopage->GetList(); ?>
                    </div>
                </div>
                <!--xingfa_nr -->
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
