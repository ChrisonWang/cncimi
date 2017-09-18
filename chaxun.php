<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 20 : intval($cid);
if(isset($action) and $action=='add')
{
	
$validate = empty($validate) ? '' : strtolower($validate);
if($validate == '')
{
	ShowMsg('请填写验证码','chaxun.php');
	exit();
}

$posttime = GetMkTime(time());
$a1 = htmlspecialchars($a1);
$a2 = htmlspecialchars($a2);
$a3 = htmlspecialchars($a3);
$a4 = htmlspecialchars($a4);
$a5 = htmlspecialchars($a5);
$a6 = htmlspecialchars($a6);
$a7 = htmlspecialchars($a7);
$a8 = htmlspecialchars($a8);
$a9 = htmlspecialchars($a9);
$a10 = htmlspecialchars($a10);

$sql = "select * from`#@__chaxun` where a1 = '$a1' and a2 = '$a2' and a3 = '$a3'";
// echo $sql;var_dump($dosql->GetOne($sql));die();
					if($row=$dosql->GetOne($sql))
					{
						ShowMsg("查询证书成功","chaxunshow.php?id=".$row['id']."");
						exit();
					}else{
						ShowMsg('证书信息不符，请正确填写信息','chaxun.php');
						exit();
					}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $cfg_webname; ?> - <?php echo GetCatName($cid); ?></title>
<meta name="keywords" content="北京中仑工业微生物研究所">
<meta name="description" content="北京中仑工业微生物研究所">

<link href="<?php echo $cfg_webpath; ?>/templates/default/css/basic.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $cfg_webpath; ?>/templates/default/css/login.css" type="text/css" rel="stylesheet" />
<script src="<?php echo $cfg_webpath; ?>/templates/default/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo $cfg_webpath; ?>/templates/default/js/all.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $cfg_webpath; ?>/templates/default/js/member.js"></script>
</head>
<script type="text/javascript">
//加入收藏
function AddFavorite(){
	if(document.all){
		try{
			window.external.addFavorite(window.location.href,document.title);
		}catch(e){
			alert("加入收藏失败，请使用Ctrl+D进行添加！");
		}
	}else if(window.sidebar){
		window.sidebar.addPanel(document.title, window.location.href, "");
	}else{
		alert("加入收藏失败，请使用Ctrl+D进行添加！");
	}
}
</script>
<body>

<?php 
	require_once('head.php');
?>
<?php 
	require_once('left.php');
?>
    
    <div class="page-r"> 
		<div class="page-r-t clearfix">
        	<span>证书查询</span>
        </div>

    	<div class="page-r-c">
        	<div class="login-box">
        	
            	<div class="login-box-l" style="border:0;width:100%">
                	<div class="cx_bg">
        
          <table width="89%" cellspacing="0" cellpadding="0" border="0" align="center">
            <tbody><tr>
              <td colspan="3" height="55">&nbsp;</td>
              </tr>
            <tr>
              <td width="59%" valign="top"><table width="95%" cellspacing="0" cellpadding="0" border="0" align="right">
                <tbody><tr>
                  <td class="cx_titel" align="center" height="30">职业资格证书查询</td>
                </tr>
                <tr>
                  <td valign="top">
                  
                  <form name="form1" method="post" action="">
                  <table style="margin-top:30px;" width="98%" cellspacing="0" cellpadding="0" border="0">
                    <tbody><tr>
                      <td width="35%" align="right" height="40"><strong>身份证编号：</strong></td>
                      <td width="65%"><input name="a1" class="line2" value="" size="30" type="text"></td>
                    </tr>
                    <tr>
                      <td width="35%" align="right" height="40"><strong>姓名：</strong></td>
                      <td width="65%"><input name="a2" id="xm" class="line2" style="width: 87%" value="" size="30" type="text"></td>
                    </tr>
       				<tr>
                      <td width="35%" align="right" height="40"><strong>证书编号：</strong></td>
                      <td width="65%"><input name="a3" class="line2" value="" size="30" type="text"></td>
                    </tr>
                     <tr>
                      <td width="35%" align="right" height="40"><strong>验证码：</strong></td>
                      <td width="65%">
						<input type="text" name="validate" id="validate" class="input" maxlength="4" />
						<span><img id="ckstr" src="data/captcha/ckstr.php" title="看不清？点击更换" align="absmiddle" style="cursor:pointer;" onClick="this.src=this.src+'?'" /> <a href="javascript:;" onClick="var v=document.getElementById('ckstr');v.src=v.src+'?';return false;">看不清?</a></span><br />
					  </td>
                    </tr>
                    <tr>
                      <td height="40">&nbsp;</td>
                      <input type="hidden" name="action" id="action" value="add" />
                      <td><input class="cx_btn" value="查 询"  type="submit">
                        <input name="submit2" class="cx_btn" value="重 置" onclick="javascript: document.form1.reset();" type="button">                   
                        </td>
                    </tr>
	<tr><td colspan="2" style="color:#FF0000" align="center" height="40">注明：不包括专业技术（执业）资格考试和湖南职称查询</td></tr>
                  </tbody></table>
                  </form>
                  </td>
                </tr>
              </tbody></table></td>
              <td width="10%">&nbsp;</td>
              <td width="31%" valign="top">
              <table width="205" cellspacing="0" cellpadding="0" border="0">
                <tbody><tr>
                  <td background="img/page_21.jpg" height="33"><table width="85%" cellspacing="0" cellpadding="0" border="0" align="right">
                    <tbody><tr>
                      <td height="30"><strong>友情提示1:</strong></td>
                    </tr>
                  </tbody></table></td>
                </tr>
                <tr>
                  <td><table class="ak" width="95%" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody><tr>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;查询服务系统升级后目前正处于试运行状态，查询过程中有任何问题和建议请发邮件至hnrstcx@163.com</td>
                    </tr>
                  </tbody></table></td>
                </tr>
              </tbody></table>
              <table width="205" cellspacing="0" cellpadding="0" border="0">
                <tbody><tr>
                  <td background="img/page_21.jpg" height="33"><table width="85%" cellspacing="0" cellpadding="0" border="0" align="right">
                    <tbody><tr>
                      <td height="30"><strong>友情提示2:</strong></td>
                    </tr>
                  </tbody></table></td>
                </tr>
                <tr>
                  <td><table class="ak" width="95%" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody><tr>
                      <td>
    请输入证书编号（推荐使用）或身份证号+姓名，并且应准确无误</td>
                    </tr>
                  </tbody></table></td>
                </tr>
              </tbody></table>
                <table width="205" cellspacing="0" cellpadding="0" border="0">
                  <tbody><tr>
                    <td background="img/page_21.jpg" height="33"><table width="85%" cellspacing="0" cellpadding="0" border="0" align="right">
                        <tbody><tr>
                          <td height="30"><strong>职业资格证书短信查询：</strong></td>
                        </tr>
                    </tbody></table></td>
                  </tr>
                  <tr>
                    <td>
                    <table class="ak" width="95%" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody>
                        <tr>
                          <td>编辑短信  YBZ+证书号  发送到  10661311（移动）  10628111（联通）  106219125（小灵通）</td>
                        </tr>
                    </tbody>
                    </table>
                    </td>
                  </tr>
                </tbody></table></td>
            </tr>
          </tbody></table>
        </div>
                </div>
        	
            	
            </div>
        </div>
    
    </div>
    
    <div class="clear"></div>
    
</div>

<?php 
	require_once('footer.php');
?>
