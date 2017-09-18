<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 20 : intval($cid);
$id = empty($id) ? '' : intval($id);
if(isset($action) and $action=='add')
{
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
					if($dosql->ExecNoneQuery($sql))
					{
						ShowMsg('查询证书成功','chaxunshow.php');
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
        <?php

			//检测文档正确性
			$row = $dosql->GetOne("SELECT * FROM `#@__chaxun` WHERE id=$id");
			if(is_array($row))
			{
				
			?>
<table width="725" border="0" cellspacing="1" cellpadding="5" style="font-size: 12px;
                    line-height:28px; color: #333; background: #005288;" align="center">
                    <tr>
                        <td colspan="4" align="center" style="background: #005288; color: #fff; font-family: Microsoft YaHei,Arial;
                            font-weight: bold; font-size: 14px; padding: 8px;">
                            2016年第一届IDMF国际药品微生物检验控制高峰论坛&nbsp;&nbsp;证书查询表<br />
                        </td>
                    </tr>
                    <tr>
                        <td width="123" align="center" bgcolor="#FFFFFF">
                           身份证<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>
                        </td>
                        <td width="252" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a1']; ?>
                          </span>
                      </td>
                         <td width="105" align="center" bgcolor="#FFFFFF">
                           姓名<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="200" bgcolor="#FFFFFF">
                          <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a2']; ?>
                          </span>
                      </td>
                    </tr>
                      <tr>
                        <td width="123" align="center" bgcolor="#FFFFFF">
                            证书编号<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="252" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a3']; ?>
                          </span>
                        </td>
                         <td width="105" align="center" bgcolor="#FFFFFF">
                             性别<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="200" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a4']; ?>
                          </span>
                        </td>
                    </tr>
					
					<tr>
                        <td width="123" align="center" bgcolor="#FFFFFF">
                           培训内容<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="252" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a5']; ?>
                          </span>
                      </td>
                         <td width="105" align="center" bgcolor="#FFFFFF">
                            培训课时<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="200" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a6']; ?>
                          </span>
                      </td>
                    </tr>
					<tr>
                        <td width="123" align="center" bgcolor="#FFFFFF">
                          培训时间                      </td>
                        <td width="252" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a7']; ?>
                          </span>
                      </td>
                         <td width="105" align="center" bgcolor="#FFFFFF">
                             所在单位<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span>                        </td>
                        <td width="200" bgcolor="#FFFFFF">
                          <span style="color: #000000; padding-left: 8px;">
                               <?php echo $row['a8']; ?>
                          </span>
                      </td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#FFFFFF">
                            部门职务<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span></td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a9']; ?>
                            </span>
                        </td>
                    </tr>
					<tr>
                        <td align="center" bgcolor="#FFFFFF">
                            备注<span style="color:#ff0000; font-size:16px; font-weight:bolder; vertical-align:bottom">*</span></td>
                        <td colspan="3" bgcolor="#FFFFFF">
                            <span style="color: #000000; padding-left: 8px;">
                                <?php echo $row['a10']; ?>
                            </span>
                        </td>
                    </tr>
                   
                </table><?php
				}
				?>
    </div>
    <div class="clear"></div>
</div>

<?php 
	require_once('footer.php');
?>
