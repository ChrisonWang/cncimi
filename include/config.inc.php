<?php

/*
 * 说明：前端引用文件
**************************
(C)2010-2015 phpMyWind.com
update: 2014-5-31 21:58:30
person: Feng
**************************
*/
ini_set("error_reporting","E_ALL & ~E_NOTICE");
ini_set("display_errors","off");
require_once(dirname(__FILE__).'/common.inc.php');
require_once(PHPMYWIND_INC.'/func.class.php');
require_once(PHPMYWIND_INC.'/page.class.php');


if(!defined('IN_PHPMYWIND')) exit('Request Error!');


//网站开关
if($cfg_webswitch == 'N')
{
	echo $cfg_switchshow.'<br /><br /><i>'.$cfg_webname.'</i>';
	exit();
}
//排名列表
$rank_no_list = array(
    '1'=> '第一名',
    '2'=> '第二名',
    '3'=> '第三名',
    '4'=> '第四名',
    '5'=> '第五名',
    '6'=> '第六名',
    '7'=> '第七名',
    '8'=> '第八名',
    '9'=> '第九名',
    '10'=> '第十名',
    '11'=> '第十一名',
    '12'=> '第十二名',
    '13'=> '第十三名',
    '14'=> '第十四名',
    '15'=> '第十五名',
    '16'=> '第十六名',
    '17'=> '第十七名',
    '18'=> '第十八名',
    '19'=> '第十九名',
    '20'=> '第二十名'
);
?>
