<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 2 : intval($cid);
if(isset($action) and $action=='add')
{
$posttime = GetMkTime(time());
$a1 = htmlspecialchars($a1);
$a2 = htmlspecialchars($a2);
$a3 = htmlspecialchars($a3);
$a4 = htmlspecialchars($a4);
$a5 = htmlspecialchars($a5);
$a6 = htmlspecialchars($a6);
$sql = "INSERT INTO `#@__youjiang` (a1, a2, a3, a4, a5,a6,shijian,canshu) VALUES ('$a1', '$a2', '$a3', '$a4', '$a5', '$a6', '$posttime',1)";
					if($dosql->ExecNoneQuery($sql))
					{
						ShowMsg('有奖征集提交成功，工作人员会在3个工作日内与您电话确认！','index.php');
						exit();
					}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="images/ico.ico" rel="Shortcut Icon"/>
<?php echo GetHeader(1,0,0,'有奖征集'); ?>
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
</head>
<body>
   
    <div class="bg">
        <div class="box">
            <?php require_once('head.php'); ?>    
   <div class="content">
        <div class="cta">
            
	<div class="left_menu">
		<div class="left_menu_nr">
			<ul>
				<li><a  href="about.php?cid=7">邀请函</a></li>
				<li><a  href="news.php">论坛动态</a></li>
				<li><a  href="about.php?cid=9">峰会日程</a></li>
				<li><a  href="yanjiang.php">演讲征集</a></li>
				<li><a  href="baoming.php">参会报名</a></li>
				<li><a  href="canzhan.php">论坛参展</a></li>
				<li><a  href="hezuo.php">媒体合作</a></li>
				<li><a  href="about.php?cid=2">交通住宿</a></li>
				<li><a  href="news.php?cid=3">往届回顾</a></li>
				<li><a  href="about.php?cid=4">联系我们</a></li>
			</ul>
		</div>
	</div>
		<!--left_menu -->
        </div>
        <!--cta -->
        <div class="right">
            <div class="right_bt">
                
<strong>当前位置：</strong><a href="<?php echo $cfg_webpath; ?>">首页</a> &gt; <a href="youjiang.php">有奖征集</a>
            </div>
            <div class="right_nr">
                <table width="100%" border="0" cellspacing="4" cellpadding="8">
                                <tr>
                                    <td id="size" valign="top" style="text-align: left;">
                                       
	<p style="color:#0A4765; font-weight:bolder">
		有奖调查！2017 IDMF 论坛话题由你来定



</p>
	
	<p>&nbsp;</p>
	
	<p>
	
		2017年CDMF&nbsp;&middot;&nbsp;第一届中国药品微生物控制与检测技术论坛正在筹备之中，为了更好的组织会议与安排日程，IDMF组委会发起此调查活动，写下您希望在IDMF论坛上希望听到的话题与演讲嘉宾，帮助我们更加有效的筹办论坛。
</p>
	<p>&nbsp;</p>
	
	<p>
		
参与调查，还有机会赢取2017 CDMF论坛入场券和论坛定制的纪念礼品哦！</p>
	
	


                                    </td>
                                </tr>
                            </table>
                            <form name="form" id="form" method="post" action="">
                <table width="725" border="0" cellspacing="1" cellpadding="5" style="font-size: 12px;
                    line-height:28px; color: #333; background: #005288;">
                    <tr>
                        <td colspan="4" align="center" style="background: #005288; color: #fff; font-family: Microsoft YaHei,Arial;
                            font-weight: bold; font-size: 14px; padding: 8px;">
                            2017年CDMF&nbsp;&middot;&nbsp;第一届中国药品微生物控制与检测技术论坛&nbsp;&nbsp;有奖征集表<br />
                          
                        </td>
                    </tr>
                    <tr>
                        <td width="123" align="center" bgcolor="#FFFFFF">
                            姓名<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="252" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a1" type="text" id="a1" style=" border: none;border-bottom:1px solid #ccc; width: 256px; height:22px;" />
                          </span>
                      </td>
                         <td width="105" align="center" bgcolor="#FFFFFF">
                            手机号码<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="200" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a2" type="text" id="a2" style="width:189px; border-bottom:1px solid #ccc; border-left-style: none; border-left-color: inherit; border-left-width: medium; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium; height:22px;" />
                          </span>
                      </td>
                    </tr>
                      <tr>
                        <td width="123" align="center" bgcolor="#FFFFFF">
                            所在单位<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="252" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a3" type="text" id="a3" style=" border: none;border-bottom:1px solid #ccc; width: 256px; height:22px;" />
                          </span>
                        </td>
                         <td width="105" align="center" bgcolor="#FFFFFF">
                             E-Mail<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="200" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <input name="a4" type="text" id="a4" style="width:189px; border-bottom:1px solid #ccc; border-left-style: none; border-left-color: inherit; border-left-width: medium; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium; height:22px;" />
                          </span>
                        </td>
                    </tr>
					

                    <tr>
                        <td align="center" bgcolor="#FFFFFF">
                            希望听到的话题<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span></td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <textarea name="a5" id="a5" style=" border: none;border-bottom:1px solid #ccc; width: 580px; height: 70px;
                                    font-size: 12px; line-height: 22px"></textarea>
                            </span>
                        </td>
                    </tr>
					<tr>
                        <td align="center" bgcolor="#FFFFFF">
                            希望见到的演讲嘉宾<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span></td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <textarea name="a6" id="a6" style=" border: none;border-bottom:1px solid #ccc; width: 580px; height: 70px;
                                    font-size: 12px; line-height: 22px"></textarea>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" bgcolor="#FFFFFF" style="padding: 10px; line-height: 25px;">
                         <p style="font-weight:bold; color:#000">
	备注信息：</p>
<p style="line-height:20px; color:#ff0000">
IDMF组委会将非常重视您的信息，请您详细填写上述内容，方便抽奖（*为必填项）
	；</p>

</td>
                    </tr>
                    <input type="hidden" name="action" id="action" value="add" />
                    <tr>
                        <td colspan="4" bgcolor="#FFFFFF" style="padding: 8px; text-align: center">
                            <input type="image" name="_ctl0:ContentPlaceHolder1:img" id="_ctl0_ContentPlaceHolder1_img" src="images/tj_anniu.jpg" border="0" style="height:25px;width:75px;" onclick="cfm_msg();return false;" />
                        </td>
                    </tr>
                </table>
</form>
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
	 
	 <script type="text/javascript">
function cfm_msg()
{
	if($("#a1").val() == "")
	{
		alert("请填写姓名！");
		$("#a1").focus();
		return false;
	}
	if($("#a2").val() == "")
	{
		alert("请填写手机号码！");
		$("#a2").focus();
		return false;
	}
	if($("#a3").val() == "")
	{
		alert("请填写所在单位！");
		$("#a3").focus();
		return false;
	}
	if($("#a4").val() == "")
	{
		alert("请填写E-Mail！");
		$("#a4").focus();
		return false;
	}
	if($("#a5").val() == "")
	{
		alert("请填写希望听到的话题！");
		$("#a5").focus();
		return false;
	}
	if($("#a6").val() == "")
	{
		alert("请填写希望见到的演讲嘉宾！");
		$("#a6").focus();
		return false;
	}
	
	$("#form").submit();
}
</script>
</body>
</html>
