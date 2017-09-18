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
    	<div class="notice-t"><a href="<?php echo Getclass(37,1);?>" class="more2" style="margin-top:8px; margin-right:0px"></a><?php echo Getclass(37);?></div>
    	<div class="notice-c">
    		<ul class="list">
    		<?php echo Infolist(37,7,15,3);?>
    			
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
    	
        <a href="news.php?cid=46" title="美国药典订购"><img src="/images/l1.gif" alt="美国药典订购" style="display:block; margin-bottom:12px" /></a>
        
        <a href="news.php?cid=47" title="欧洲药典订购"><img src="/images/l2.gif" alt="欧洲药典订购" style="display:block; margin-bottom:12px" /></a>
        
        <a href="news.php?cid=84" title="英国药典订购"><img src="/images/l3.gif" alt="英国药典订购"  style="display:block;"/></a>
        
        <div class="func-div mt10" style="height:194px">
    		<div class="func-div-t clearfix">
            	<a href="<?php echo Getclass(39,1);?>" class="more2"></a>
            	政策法规
            </div>
    		<div class="center-l-box2">
    			<ul class="center-list2">
                	<?php echo Infolist(39,5,15);?>
    			</ul>
    		</div>
    	</div>
        
        
        <div class="index-login mt10">
        	<div class="index-login-t"><i></i>会员中心</div>
        	<div class="index-login-c">
            	<script type="text/javascript" src="<?php echo $cfg_webpath; ?>/templates/default/js/member.js"></script>
            	<form id="form" method="post" action="/member.php?c=login&a=login" onsubmit="return CheckLog();">
            	<ul>
            		<li><input type="text" class="index-input1" placeholder="用户名" name="username" id="username"></li>
            		<li><input type="password" class="index-input2" placeholder="密码"  name="password" id="password"></li>
                    <li><input type="text" id="yzm" class="need" name="validate" maxlength="4" style="width:100px; margin-right:10px;height:20px; line-height:20px; border:solid 1px #bdbdbd" placeholder="验证码"><img id="ckstr" src="data/captcha/ckstr.php" title="看不清？点击更换" align="absmiddle" style="cursor:pointer;" onClick="this.src=this.src+'?'" /></li>
            		<li><button class="i-btn1"  type="submit"></button><button class="i-btn2" onClick="location.href='/member.php?c=reg'" type="button"></button></li>
            	</ul>
                </form>
            
            </div>
        </div>
    </div>
    
    <div class="center-c pull-left ml10">
    	<div class="center-box">
    		<div class="center-box-t clearfix ct1">
            	<a href="<?php echo Getclass(69,1);?>" class="more2" style="margin-top:10px; padding:0px"></a>
            	<span date="<?php echo Getclass(69,1);?>" class="center-a pull-left current">制药培训</span>
            	<span date="<?php echo Getclass(70,1);?>" class="center-a pull-left">报到通知</span>
                <span date="<?php echo Getclass(71,1);?>" class="center-a pull-left">培训纪要</span>
                <span date="<?php echo Getclass(80,1);?>" class="center-a pull-left">课件下载</span>
            </div>
            <div class="center-box-c cc1">
            	<div>
                    <div class="center-box-tip clearfix">
                        <?php echo Infone(69,'c');?>
                    </div>
                    
                    <ul class="list">
                    <?php echo Infolist(69,6,25,1,0,1);?>
                    </ul>
                </div>
                
                <div class="hide">
                    <div class="center-box-tip clearfix">
                        <?php echo Infone(70,'c');?>
                    </div>
                    
                    <ul class="list">
                    <?php echo Infolist(70,6,25,1,0,1);?>
                    </ul>
                </div>
                
                <div class="hide">
                    <div class="center-box-tip clearfix">
                        <?php echo Infone(71,'c');?>
                    </div>
                    
                    <ul class="list">
                    <?php echo Infolist(71,6,25,1,0,1);?>
                    </ul>
                </div>
                
                <div class="hide">
                    <div class="center-box-tip clearfix">
                        <?php echo Infone(80,'c');?>
                    </div>
                    
                    <ul class="list">
                    <?php echo Infolist(80,6,25,1,0,1);?>
                    </ul>
                </div>
                
                
    		</div>
    	</div>
    
    	<div class="center-box" style="margin-top:12px">
    		<div class="center-box-t clearfix ct2">
            	<a href="<?php echo Getclass(73,1);?>" class="more2" style="margin-top:10px; padding:0px"></a>
            	<span date="<?php echo Getclass(73,1);?>" class="center-a pull-left current">医械培训</span>
            	<span date="<?php echo Getclass(74,1);?>" class="center-a pull-left">报到通知</span>
                <span date="<?php echo Getclass(75,1);?>" class="center-a pull-left">培训纪要</span>
                <span date="<?php echo Getclass(81,1);?>" class="center-a pull-left">课件下载</span>
            </div>
            <div class="center-box-c cc2">
            	<div>
                    <div class="center-box-tip clearfix">
                        <?php echo Infone(73,'c');?>
                    </div>
                    
                    <ul class="list">
                        <?php echo Infolist(73,6,25,1,0,1);?>
                    </ul>
                </div>    
                 
                 <div>
                    <div class="center-box-tip clearfix">
                        <?php echo Infone(74,'c');?>
                    </div>
                    
                    <ul class="list">
                        <?php echo Infolist(74,6,25,1,0,1);?>
                    </ul>
                </div> 
                
                <div>
                    <div class="center-box-tip clearfix">
                        <?php echo Infone(75,'c');?>
                    </div>
                    
                    <ul class="list">
                        <?php echo Infolist(75,6,25,1,0,1);?>
                    </ul>
                </div> 
                
                <div>
                    <div class="center-box-tip clearfix">
                        <?php echo Infone(81,'c');?>
                    </div>
                    
                    <ul class="list">
                        <?php echo Infolist(81,6,25,1,0,1);?>
                    </ul>
                </div> 
                 
                    
                    
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
                
        		<ul class="list box-list wt">
                    <?php echo Infolist(28,10);?>
                </ul>
        		<div class="clear"></div>
        	</div>
        </div>
    </div>
    
    <div class="index-box mt10 pull-left" style="margin-left:16px">
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
    
    <div class="index-box mt10 pull-left" style="margin-left:16px">
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
             <select onchange=mbar(this) >
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
             
             <select onchange=mbar(this) >
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
             
             <select onchange=mbar(this) >
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
             
             <select onchange=mbar(this) >
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
             
             <select  onchange=mbar(this) >
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
             
             <select style="margin-right:0px" onchange=mbar(this) >
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
    
   <script type="text/JavaScript">

                    function mbar(sobj) {
                    var docurl =sobj.options[sobj.selectedIndex].value;
                    if (docurl != "") {
                       open(docurl,'_blank');
                       sobj.selectedIndex=0;
                       sobj.blur();
                    }
                    }

 </script> 
    
</div>

<div class="map">
	<div class="wrap">
    	<dl>
        	<dt><a href="news.php?cid=65">技术培训</a></dt>
        	<dd><a href="news.php?cid=65">行业标准</a></dd>
        	<dd><a href="news.php?cid=66">培训资料</a></dd>
            <dd><a href="news.php?cid=67">知识普及</a></dd>
            <dd><a href="news.php?cid=68">制药培训</a></dd>
            <dd><a href="news.php?cid=72">医械培训</a></dd>
            <dd><a href="news.php?cid=76">食品微生物培训</a></dd>
        </dl>
        <dl>
        	<dt><a href="about.php?cid=41">委托检测</a></dt>
        	<dd><a href="about.php?cid=41">服务流程</a></dd>
        	<dd><a href="news.php?cid=42">检测项目</a></dd>
            <dd><a href="soft.php?cid=43">表单下载</a></dd>
            <dd><a href="about.php?cid=44">样品邮寄</a></dd>
            <dd><a href="about.php?cid=45">汇款方式</a></dd>
        </dl>
        <dl>
        	<dt><a href="news.php?cid=46">药典订购</a></dt>
        	<dd><a href="news.php?cid=46">美国药典</a></dd>
        	<dd><a href="news.php?cid=47">欧盟药典</a></dd>
            <dd><a href="news.php?cid=84">英国药典</a></dd>
        </dl>
        <dl>
        	<dt><a href="about.php?cid=53">菌种鉴定</a></dt>
        	<dd><a href="about.php?cid=53">鉴定程序</a></dd>
        	<dd><a href="news.php?cid=54">鉴定项目</a></dd>
            <dd><a href="news.php?cid=55">药典鉴定</a></dd>
            <dd><a href="soft.php?cid=56">表单下载</a></dd>
            <dd><a href="about.php?cid=57">样品邮寄</a></dd>
            <dd><a href="about.php?cid=58">汇款方式</a></dd>
        </dl>
        
        <dl>
        	<dt><a href="news.php?cid=59">工业培养基</a></dt>
        	<dd><a href="news.php?cid=59">干粉培养基</a></dd>
        	<dd><a href="news.php?cid=60">液体培养基</a></dd>
            <dd><a href="news.php?cid=61">预制平板</a></dd>
            <dd><a href="news.php?cid=62">显色培养基</a></dd>
        </dl>
        
        <dl>
        	<dt><a href="about.php?cid=4">联系我们</a></dt>
        	<dd><a href="baoming.php">在线报名</a></dd>
        	<dd><a href="yanjiang.php">参与演讲</a></dd>
            <dd><a href="fabiao.php">论文发表</a></dd>
            <dd><a href="message.php">建议留言</a></dd>
            <dd><a href="chaxun.php">证书查询</a></dd>
            <dd><a href="member.php?c=reg">会员注册</a></dd>
            <dd><a href="intrain.php">内训需求</a></dd>
            
        </dl>
        
    	<dl class="world">
        	<h1><a href="#">CIPI相关技术培训区域</a></h1>
            <span>cipi的相关技术培训地点已覆盖全国大部分省份的省会城市。报名方式支持：网络在线报名、微信扫一扫报名</span>
            <a href="#" class="pull-right">查看详情 >></a>
        </dl>
    	<div class="clear"></div>
    </div>


</div>



<?php require_once('footer.php'); ?>