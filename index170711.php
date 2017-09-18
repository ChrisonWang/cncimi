<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
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
    
    <div class="notice pull-left mt10">
    	<div class="notice-t"><a href="<?php echo Getclass(37,1);?>" class="more2" style="margin-top:8px"></a><?php echo Getclass(37);?></div>
    	<div class="notice-c">
    		<ul class="list">
    		<?php echo Infolist(37,7,18,3);?>
    			
        	</ul>
            <div class="notice-img"><?php echo GetAd(4)?></div>
        </div>
    </div>
    
    <div class="news-center-box mt10 pull-left ml10">
    	<div class="news-pic smallslider">
        	<ul>
                <?php echo Infolist(38,5,25,2,'f');?>
        	</ul>
        </div>
    	<div class="search clearfix">
    	<form method="get" action="search.php">
    		<input type="text" name="q" placeholder="请输入您的关键字">
    		<button name="submit">搜索</button>
    	</form>
    	</div>
    </div>
    
    <div class="news pull-right mt10" >
    	<div class="news-t clearfix">
        	<a href="<?php echo Getclass(38,1);?>" class="more2" style="margin-top:15px"></a>
        	<?php echo Getclass(38);?>
        </div>
    	<div class="news-c">
        	<?php echo news_Infone(38,'c');?>
    		<ul class="list">
        		<?php echo Infolist(38,5);?>
        	</ul>
    	</div>
    </div>
    
    <div class="clear"></div>
    
    <div class="top-banner clearfix">
    	<div class="pull-left"><?php echo GetAd(1)?></div>
    	<div class="pull-right"><?php echo GetAd(2);?></div>
    </div>
    
    <div class="center-l pull-left">
    	<div class="ewm">
        	<ul>
        		<li><a href="#"><img src="<?php echo $cfg_webpath; ?>/templates/default/img/wx-ewm.gif"/><br>官网微信</a></li>
        		<li><a href="#"><img src="<?php echo $cfg_webpath; ?>/templates/default/img/wb-ewm.gif"/><br>官网微博</a></li>
        	</ul>
        </div>
    	
    	<div class="center-l-box mt10">
    		<div class="center-l-t"><span><a href="<?php echo Getclass(29,1);?>">科研动态</a></span></div>
    		<div class="center-l-c">
    			<ul class="list">
                    <?php echo Infolist(29,5,14);?>
                </ul>
    
    		</div>
    
    		<div class="center-l-t" style="margin-top:15px"><span><a href="<?php echo Getclass(39,1);?>">政策法规</a></span></div>
    		<div class="center-l-c">
    			<ul class="list">
                    <?php echo Infolist(39,5,14);?>
                </ul>
    
    		</div>
    	</div>
    
    </div>
    
    <div class="center-c pull-left ml10">
    	<div class="center-box">
    		<div class="center-box-t clearfix">
            	<a href="<?php echo Getclass(69,1);?>" class="more2" style="margin-top:10px; padding:0px"></a>
            	<div class="center-t pull-left">制药培训</div>
            	<a href="<?php echo Getclass(70,1);?>" class="pull-left">报到通知</a>
                <a href="<?php echo Getclass(71,1);?>" class="pull-left">培训纪要</a>
                <a href="<?php echo Getclass(80,1);?>" class="pull-left">课件下载</a>
            </div>
            <div class="center-box-c">
            	<div class="center-box-tip clearfix">
                	<?php echo Infone(69,'c');?>
                </div>
                
                <ul class="list">
                <?php echo Infolist(69,6,25,1,0,1);?>
                </ul>
    		</div>
    	</div>
    
    	<div class="center-box" style="margin-top:12px">
    		<div class="center-box-t clearfix">
            	<a href="<?php echo Getclass(73,1);?>" class="more2" style="margin-top:10px; padding:0px"></a>
            	<div class="center-t pull-left">医械培训</div>
            	<a href="<?php echo Getclass(74,1);?>" class="pull-left">报到通知</a>
                <a href="<?php echo Getclass(75,1);?>" class="pull-left">培训纪要</a>
                <a href="<?php echo Getclass(81,1);?>" class="pull-left">课件下载</a>
            </div>
            <div class="center-box-c">
            	<div class="center-box-tip clearfix">
                	<?php echo Infone(73,'c');?>
                </div>
                
                <ul class="list">
                    <?php echo Infolist(73,6,25,1,0,1);?>
                </ul>
    		</div>
    	</div>
    
    </div>
    
    <div class="center-r pull-right">
    	<div class="func-div">
    		<div class="func-div-t clearfix">
            	<a href="#" class="more2"></a>
            	功能区
            </div>
    		<div class="func-div-c clearfix">
            	<table cellpadding="0" cellspacing="0" style="height:267px">
            		<tr>
            			<td>
                        	<a href="<?php echo Getclass(10,3);?>"><i class="i1"></i></a>
                            <span><a href="<?php echo Getclass(10,3);?>">在线报名</a></span>
                        </td>
                        <td>
                        	<a href="<?php echo Getclass(20,3);?>"><i class="i2"></i></a>
                            <span><a href="<?php echo Getclass(20,3);?>">证书查询</a></span>
                        </td>
                        <td>
                        	<a href="<?php echo Getclass(21,3);?>"><i class="i3"></i></a>
                            <span><a href="<?php echo Getclass(21,3);?>">申请会员</a></span>
                        </td>
            		</tr>
            		<tr>
            			<td>
                        	<a href="<?php echo Getclass(19,3);?>"><i class="i4"></i></a>
                            <span><a href="<?php echo Getclass(19,3);?>">建议留言</a></span>
                        </td>
                        <td>
                        	<a href="<?php echo Getclass(18,3);?>"><i class="i5"></i></a>
                            <span><a href="<?php echo Getclass(18,3);?>">论文发表</a></span>
                        </td>
                        <td>
                        	<a href="<?php echo Getclass(22,3);?>"><i class="i6"></i></a>
                            <span><a href="<?php echo Getclass(22,3);?>">内训需求</a></span>
                        </td>
            		</tr>
            		<tr>
            			<td>
                        	<a href="<?php echo Getclass(23,3);?>"><i class="i7"></i></a>
                            <span><a href="<?php echo Getclass(23,3);?>">课程建议</a></span>
                        </td>
                        <td>
                        	<a href="<?php echo Getclass(8,3);?>"><i class="i8"></i></a>
                            <span><a href="<?php echo Getclass(8,3);?>">参与演讲</a></span>
                        </td>
                        <td>
                        	<a href="<?php echo Getclass(24,3);?>"><i class="i9"></i></a>
                            <span><a href="<?php echo Getclass(24,3);?>">参展申请</a></span>
                        </td>
            		</tr>
            	</table>
            </div>
        </div>
    
    	<div class="index-box mt10" style="width:308px; margin-left:0px">
        	<div class="index-box-wrap" style=" height:297px">
        		<div class="index-box-t clearfix">
                    <a href="<?php echo Getclass(30,1);?>" class="more2"></a>
                    <span>质控菌株</span>
                </div>
                <div class="index-box-c">
                    <div class="index-box-img">
                        <img src="<?php echo InfoPic(30);?>" width="98" height="66" />
                    </div>
                    <div class="index-box-item clearfix box1">
                        <a href="<?php echo Getclass(48,1);?>" class="pull-left">菌株介绍</a>
                        <a href="<?php echo Getclass(49,1);?>" class="pull-right">菌株检索</a>
                        <a href="<?php echo Getclass(50,1);?>" class="pull-left">菌株推荐</a>
                        <a href="<?php echo Getclass(51,1);?>" class="pull-right">订购流程</a>    
                    </div>
                    <div class="clear"></div>
                    <ul class="list box-list">
                        <?php echo Infolist(30,5);?>
                    </ul>
            
                </div>
            </div>
        </div>
    
    </div>
    
    <div class="clear"></div>
    
    <div class="center-banner clearfix">
    	<?php echo GetAd(3)?>
    </div>
    
    <div class="index-box mt10 pull-left" style="margin-left:0px">
    	<div class="index-box-wrap">
            <div class="index-box-t clearfix">
                <a href="<?php echo Getclass(28,1);?>" class="more2"></a>
                <span style="background-position:0px -500px">委托检测</span>
            </div>
            <div class="index-box-c">
        		<div class="index-box-img">
                	<img src="<?php echo InfoPic(28);?>" width="98" height="66" />
                </div>
                <div class="index-box-item clearfix">
                	<a href="<?php echo Getclass(41,1);?>" class="pull-left">服务流程</a>
                    <a href="<?php echo Getclass(42,1);?>" class="pull-right">检测项目</a>
					<a href="<?php echo Getclass(43,1);?>" class="pull-left">表单下载</a>
                    <a href="<?php echo Getclass(44,1);?>" class="pull-right">样品邮寄</a>    
                </div>
                
                <div class="clear"></div>
                
        		<ul class="list box-list">
                    <?php echo Infolist(28,5);?>
                </ul>
        
        	</div>
        </div>
    </div>
    
    <div class="index-box mt10 pull-left" style="margin-left:14px">
    	<div class="index-box-wrap">
            <div class="index-box-t clearfix">
                <a href="<?php echo Getclass(31,1);?>" class="more2"></a>
                <span style="background-position:0px -550px">菌种鉴定</span>
            </div>
            <div class="index-box-c">
        		<div class="index-box-img">
                	<img src="<?php echo InfoPic(31);?>" width="98" height="66" />
                </div>
                <div class="index-box-item clearfix">
                	<a href="<?php echo Getclass(53,1);?>" class="pull-left">鉴定程序</a>
                    <a href="<?php echo Getclass(54,1);?>" class="pull-right">鉴定项目</a>
					<a href="<?php echo Getclass(55,1);?>" class="pull-left">药典鉴定</a>
                    <a href="<?php echo Getclass(56,1);?>" class="pull-right">表单下载</a>    
                </div>
                
                <div class="clear"></div>
                
        		<ul class="list box-list">
                    <?php echo Infolist(31,5);?>
                </ul>
        
        	</div>
        </div>
    </div>
    
    <div class="index-box mt10 pull-left" style="margin-left:14px">
    	<div class="index-box-wrap">
            <div class="index-box-t clearfix">
                <a href="<?php echo Getclass(32,1);?>" class="more2"></a>
                <span style="background-position:0px -600px">工业培养基</span>
            </div>
            <div class="index-box-c">
        		<div class="index-box-img">
                	<img src="<?php echo InfoPic(32);?>" width="98" height="66" />
                </div>
                <div class="index-box-item clearfix">
                	<a href="<?php echo Getclass(59,1);?>" class="pull-left">干粉培养基</a>
                    <a href="<?php echo Getclass(60,1);?>" class="pull-right">液体培养基</a>
					<a href="<?php echo Getclass(61,1);?>" class="pull-left">预制平板</a>
                    <a href="<?php echo Getclass(62,1);?>" class="pull-right">显色培养基</a>    
                </div>
                <div class="clear"></div>
        		<ul class="list box-list">
                     <?php echo Infolist(32,5);?>
                </ul>
        
        	</div>
        </div>
    </div>
    
    <div class="clear"></div>
    
    <div class="link mt10 clearfix">
    	<div class="link-t">相关链接</div>
    	<div class="link-c">
             <select>
             	<option>--各国药典机构--</option>
                <?php
	$dosql->Execute("SELECT * FROM `#@__weblink` WHERE classid=1 AND checkinfo=true ORDER BY orderid,id DESC limit 0,8");
	while($row = $dosql->GetArray())
	{
	?>
             	<option value="<?php echo $row['linkurl']; ?>"><?php echo $row['webname']; ?></option>
                <?php
	}
	?>
             </select>
             
             <select>
             	<option>--行业协会--</option>
                <?php
	$dosql->Execute("SELECT * FROM `#@__weblink` WHERE classid=2 AND checkinfo=true ORDER BY orderid,id DESC limit 0,8");
	while($row = $dosql->GetArray())
	{
	?>
             	<option value="<?php echo $row['linkurl']; ?>"><?php echo $row['webname']; ?></option>
                <?php
	}
	?>
             </select>
             
             <select>
             	<option>--药检机构--</option>
                <?php
	$dosql->Execute("SELECT * FROM `#@__weblink` WHERE classid=3 AND checkinfo=true ORDER BY orderid,id DESC limit 0,8");
	while($row = $dosql->GetArray())
	{
	?>
             	<option value="<?php echo $row['linkurl']; ?>"><?php echo $row['webname']; ?></option>
                <?php
	}
	?>
             </select>
             
             <select>
             	<option>--菌种保藏机构--</option>
                <?php
	$dosql->Execute("SELECT * FROM `#@__weblink` WHERE classid=4 AND checkinfo=true ORDER BY orderid,id DESC limit 0,8");
	while($row = $dosql->GetArray())
	{
	?>
             	<option value="<?php echo $row['linkurl']; ?>"><?php echo $row['webname']; ?></option>
                <?php
	}
	?>
             </select>
             
             <select>
             	<option>--行业网站--</option>
                <?php
	$dosql->Execute("SELECT * FROM `#@__weblink` WHERE classid=5 AND checkinfo=true ORDER BY orderid,id DESC limit 0,8");
	while($row = $dosql->GetArray())
	{
	?>
             	<option value="<?php echo $row['linkurl']; ?>"><?php echo $row['webname']; ?></option>
                <?php
	}
	?>
             </select>
             
             <select>
             	<option>--其他链接--</option>
                <?php
	$dosql->Execute("SELECT * FROM `#@__weblink` WHERE classid=6 AND checkinfo=true ORDER BY orderid,id DESC limit 0,8");
	while($row = $dosql->GetArray())
	{
	?>
             	<option value="<?php echo $row['linkurl']; ?>"><?php echo $row['webname']; ?></option>
                <?php
	}
	?>
             </select>
             
             
    	</div>
    </div>
    
    
    
</div>

<?php require_once('footer.php'); ?>