<?php	if(!defined('IN_PHPMYWIND')) exit('Request Error!');

/*
**************************
(C)2010-2015 phpMyWind.com
update: 2014-5-31 21:58:06
person: Feng
**************************
*/


/*
 * 函数说明：单页信息调用
 *
 * @access  public
 * @param   $cid      int     类别ID
 * @param   $num      int     字数显示 0或空为不限制
 * @param   $gourl    string  跳转连接
 * @return            string  返回单页内容
 */
function Info($cid=0, $num=0, $gourl='')
{
	global $dosql;
	$contstr = '';

	$row = $dosql->GetOne("SELECT * FROM `#@__info` WHERE classid=$cid");
	if(isset($row['content']))
	{
		if(!empty($num))
		{
			$contstr .= ReStrLen($row['content'], $num);
		}
		else
		{
			return GetContPage($row['content']);
		}
		if($gourl != '') $contstr .= ' <a href="'.$gourl.'">[更多>>]</a>';
	}
	else
	{
		$contstr .= '网站资料更新中...';
	}

	return $contstr;
}

/*
 * 函数说明：列表页面调用
 *
 * @access  public
 * @param   $cid      int     类别ID
 * @param   $num      int     字数显示 0或空为不限制
 * @param   $gourl    string  跳转连接
 * @return            string  返回单页内容
 * 1 出现时间列表  2出现图片列表   3普通列表
 */
function Infolist($cid=0, $num=0,$strlength=25,$timectrl=0,$flag='',$start='0')
{
	global $dosql;
	$contstr = '';
	$f = '';
	if($flag){
		$f = "AND flag ='".$flag."'";
	}
// 	echo "SELECT * FROM `#@__infolist` WHERE classid=$cid AND delstate='' AND checkinfo=true ".$f." ORDER BY orderid,id DESC LIMIT 0,$num";
	$dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=$cid AND delstate='' ".$f." ORDER BY flag DESC,id DESC LIMIT $start,$num");
	while($row = $dosql->GetArray())
	{
		$i++;
		if($row['linkurl'] == '') $gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
        else $gourl = $row['linkurl'];
		if ($timectrl==1){
			$contstr.="<li><span >".GetDateMk($row['posttime'])."</span><a href='".$gourl."' style='color:".$row['colorval']."' >". ReStrLen($row['title'],$strlength)."</a></li>";
		}elseif($timectrl==2){
			$contstr.="<li><a href='".$gourl."' ><img src='".$row['picurl']."' width='415' height='240' alt='".$row['title']."'></a></li>";
		}elseif($timectrl==3){
			$contstr.="<li><a href='".$gourl."' style='color:".$row['colorval']."'>". ReStrLen($row['title'],$strlength)."</a>".($i<4 ?'<img src="/images/news1.gif">':'')."</li>";
		}else{
			$contstr.="<li><a href='".$gourl."' style='color:".$row['colorval']."'>". ReStrLen($row['title'],$strlength)."</a></li>";
		}
	}
	if(empty($contstr)){
		$dosql->Execute("SELECT * FROM `#@__infolist` WHERE parentid=$cid AND delstate=''  ".$f." ORDER BY flag DESC,id DESC LIMIT 0,$num");
		while($row = $dosql->GetArray())
		{
		
			if($row['linkurl'] == '') $gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
			else $gourl = $row['linkurl'];
			if ($timectrl==1){
				$contstr.="<li><span>".GetDateMk($row['posttime'])."</span><a href='".$gourl."' >". ReStrLen($row['title'],$strlength)."</a></li>";
			}elseif($timectrl==2){
				$contstr.="<li><a href='".$gourl."' ><img src='".$row['picurl']."' width='415' height='240' alt='".$row['title']."'></a></li>";
			}else{
				$contstr.="<li><a href='".$gourl."' >". ReStrLen($row['title'],$strlength)."</a></li>";
			}
		}
	}
	return $contstr;
}




function Infone($cid=0, $flag='')
{
	global $dosql;
	$contstr = '';
	$f = '';
	if($flag){
		$f = "AND flag like '%".$flag."%'";
	}
//  	echo "SELECT * FROM `#@__infolist` WHERE classid=$cid AND delstate='' AND checkinfo=true ".$f." ORDER BY orderid,id DESC LIMIT 0,1";
	$row =$dosql->GetOne("SELECT * FROM `#@__infolist` WHERE classid=$cid AND delstate='' AND checkinfo=true ".$f." ORDER BY id,orderid DESC LIMIT 0,1");
	if(!empty($row)){
	if($row['linkurl'] == '') $gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
		else $gourl = $row['linkurl'];
			$contstr ="<img src=".$row['picurl']." width='109' height='72'>
                    <div class='pull-left center-box-info'>
                        <h1><a href='".$gourl."'>". ReStrLen($row['title'],14)."</a></h1>		
                        <span>". ReStrLen(ClearHtml($row['content']),50)."</span>
                    </div>";
	}
	return $contstr;
}

function news_Infone($cid=0, $flag='')
{
	global $dosql;
	$contstr = '';
	$f = '';
	if($flag){
		$f = "AND flag like '%".$flag."%'";
	}
//  	echo "SELECT * FROM `#@__infolist` WHERE classid=$cid AND delstate='' AND checkinfo=true ".$f." ORDER BY orderid,id DESC LIMIT 0,1";
	$row =$dosql->GetOne("SELECT * FROM `#@__infolist` WHERE classid=$cid AND delstate='' AND checkinfo=true ".$f." ORDER BY id,orderid DESC LIMIT 0,1");
	if(!empty($row)){
	if($row['linkurl'] == '') $gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
		else $gourl = $row['linkurl'];
			$contstr ="
                    <div class='news-box-info'>
                        <h1><a href='".$gourl."'>". ReStrLen($row['title'],25)."</a></h1>		
                        <span>". ReStrLen(ClearHtml($row['content']),90)."</span>
                    </div>";
	}
	return $contstr;
}

/*
 * 函数说明：获取内容分页
 *
 * @access  public
 * @param   $content  string  设置分页内容
 * @return            string  返回替换后内容
 */
function GetContPage($content)
{
	global $cfg_isreurl;

	//设定分页标签
	$contstr  = '';
	$nextpage = '<hr style="page-break-after:always;" class="ke-pagebreak" />';


	if(strpos($content, $nextpage))
	{
		$contarr   = explode($nextpage, $content);
		$totalpage = count($contarr);

		if(!isset($_GET['page']) || !intval($_GET['page']) || $_GET['page'] > $totalpage) $page = 1;
		else $page = $_GET['page'];

		//输出内容
		$contstr .= $contarr[$page-1];

		//获取除page参数外的其他参数
		$query_str = explode('&',$_SERVER['QUERY_STRING']);

		if($query_str[0] != '')
		{
			$query_strs = '';

			foreach($query_str as $k)
			{
				$query_str_arr = explode('=', $k);

				if(strstr($query_str_arr[0],'page') == '')
				{
					$query_str_arr[0] = isset($query_str_arr[0]) ? $query_str_arr[0] : '';
					$query_str_arr[1] = isset($query_str_arr[1]) ? $query_str_arr[1] : '';

					//伪静态设置
					if($cfg_isreurl != 'Y')
						$query_strs .= $query_str_arr[0].'='.$query_str_arr[1].'&';
					else
						$query_strs .= '-'.$query_str_arr[1];
				}
			}

			$nowurl = '?'.$query_strs;
		}
		else
		{
			$nowurl = '?';
		}

		//伪静态设置
		if($cfg_isreurl == 'Y')
		{
			$request_arr  = explode('.',$_SERVER['PHP_SELF']);

			//部分环境获取地址为重写后地址，与原始地址不符，临时解决方案
			//使用此方案，文件名中不能包含 - ，否则会出现问题
			if(strpos($request_arr[0], '-'))
			{
				$request_str = explode('-', $request_arr[0]);
				$request_str = $request_str[0];
			}
			else
			{
				$request_str = $request_arr[0];
			}

			//获取除页码以外的参数
			$nowurl      = $request_str.ltrim($nowurl,'?');
		}

		$previous = $page - 1;
		if($totalpage == $page)
			$next = $page;
		else
			$next = $page + 1;

		$page_content = '<div class="contPage">';

		//显示首页的裢接
		if($page > 1)
		{
			//伪静态设置
			if($cfg_isreurl != 'Y')
			{
				$page_content .= '<a href="'.$nowurl.'page=1">&lt;&lt;</a>';
				$page_content .= '<a href="'.$nowurl.'page='.$previous.'">&lt;</a>';
			}
			else
			{
				$page_content .= '<a href="'.$nowurl.'-1.html">&lt;&lt;</a>';
				$page_content .= '<a href="'.$nowurl.'-'.$previous.'.html">&lt;</a>';
			}
		}
		else
		{
			$page_content .= '<a href="javascript:;">&lt;&lt;</a>';
			$page_content .= '<a href="javascript:;">&lt;</a>';
		}

		//显示数字页码
		for($i=1; $i<=$totalpage; $i++)
		{
			if($page == $i)
			{
				$page_content .= '<a href="javascript:;" class="on">'.$i.'</a>';
			}
			else
			{
				//伪静态设置
				if($cfg_isreurl != 'Y')
					$page_content .= '<a href="'.$nowurl.'page='.$i.'" class="num">'.$i.'</a>';
				else
					$page_content .= '<a href="'.$nowurl.'-'.$i.'.html" class="num">'.$i.'</a>';
			}
		}

		//显示尾页的裢接
		if($page < $totalpage)
		{
			//伪静态设置
			if($cfg_isreurl != 'Y')
			{
				$page_content .= '<a href="'.$nowurl.'page='.$next.'">&gt;</a>';
				$page_content .= '<a href="'.$nowurl.'page='.$totalpage.'">&gt;&gt;</a>';
			}
			else
			{
				$page_content .= '<a href="'.$nowurl.'-'.$next.'.html">&gt;</a>';
				$page_content .= '<a href="'.$nowurl.'-'.$totalpage.'.html">&gt;&gt;</a>';
			}
		}
		else
		{
			$page_content .= '<a href="javascript:;">&gt;</a>';
			$page_content .= '<a href="javascript:;">&gt;&gt;</a>';
		}
		$page_content .= '</div>';

		$contstr .= $page_content;
	}
	else
	{
		$contstr .= $content;
	}

	return $contstr;
}


/*
 * 函数说明：单页缩略图调用
 *
 * @access  public
 * @param   $classid  int     类别ID
 * @return            string  返回单页缩略图地址
 */
function InfoPic($cid=0)
{
	global $dosql;
// echo "SELECT `picurl` FROM `#@__infoclass` WHERE `id`=$cid";
	$r = $dosql->GetOne("SELECT `picurl` FROM `#@__infoclass` WHERE `id`=$cid");
	if(isset($r) && is_array($r))
	{
		return $r['picurl'];
	}
}


/*
 * 栏目SEO头部调用
 *
 * @access  public
 * @param   $sid  int     当前站点id
 * @param   $cid  int     当前页面栏目id
 * @param   $id   int     是否为内容页(非0即是)
 * @return        string  返回头部区域代码
 */
function GetHeader($sid=1,$cid=0,$id=0,$str='')
{
	global $dosql, $cfg_webname, $cfg_generator, $cfg_author,
	       $cfg_seotitle, $cfg_keyword, $cfg_description;
	//检查站点标识
	if($sid != 1)
	{
		$r = $dosql->GetOne("SELECT `sitekey` FROM `#@__site` WHERE `id`=$sid");
		if(isset($r['sitekey']))
		{
			$cfg_webname     = $GLOBALS['cfg_webname_'.$r['sitekey']];
			$cfg_generator   = $GLOBALS['cfg_generator_'.$r['sitekey']];
			$cfg_author      = $GLOBALS['cfg_author_'.$r['sitekey']];
			$cfg_seotitle    = $GLOBALS['cfg_seotitle_'.$r['sitekey']];
			$cfg_keyword     = $GLOBALS['cfg_keyword_'.$r['sitekey']];
			$cfg_description = $GLOBALS['cfg_description_'.$r['sitekey']];
		}
	}



	//设置了自定义标题
	if($str != '')
	{
		$header_str  = '<title>'.$str.' - '.$cfg_webname.'</title>'."\n";
		$header_str .= '<meta name="generator" content="'.$cfg_generator.'" />'."\n";
		$header_str .= '<meta name="author" content="'.$cfg_author.'" />'."\n";
		$header_str .= '<meta name="keywords" content="'.$cfg_keyword.'" />'."\n";
		$header_str .= '<meta name="description" content="'.$cfg_description.'" />'."\n";
	}


	else
	{
		//显示详细信息
		if(!empty($cid) && !empty($id))
		{
			$r = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=$cid");

			if(isset($r['infotype']))
			{
				if($r['infotype'] == 1)
					$tbname = '#@__infolist';

				else if($r['infotype'] == 2)
					$tbname = '#@__infoimg';

				else if($r['infotype'] == 3)
					$tbname = '#@__soft';

				else if($r['infotype'] == 4)
					$tbname = '#@__goods';

				else
					$tbname = '#@__infolist';


				//获取栏目信息
				$r2 = $dosql->GetOne("SELECT * FROM `$tbname` WHERE `id`=$id");

				$header_str = '<title>';

				if(isset($r2['title']))
					$header_str .= $r2['title'].' - ';

				if(isset($r['classname']))
					$header_str .= $r['classname'];

				$header_str .= ' - '.$cfg_webname.'</title>'."\n";
				$header_str .= '<meta name="generator" content="'.$cfg_generator.'" />'."\n";
				$header_str .= '<meta name="author" content="'.$cfg_author.'" />'."\n";
				$header_str .= '<meta name="keywords" content="';

				if(isset($r2['keywords']))
					$header_str .= $r2['keywords'];
				else
					$header_str .= $cfg_keyword;

				$header_str .= '" />'."\n";
				$header_str .= '<meta name="description" content="';

				if(isset($r2['description']))
					$header_str .= $r2['description'];
				else
					$header_str .= $cfg_description;

				$header_str .= '" />'."\n";
			}
			else
			{
				return '';
			}
		}

		//显示栏目信息
		else if(!empty($cid))
		{
			$r = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=$cid");

			$header_str = '<title>';

			if(!empty($r['seotitle']))
				$header_str .= $r['seotitle'];
			else if(!empty($r['classname']))
				$header_str .= $r['classname'].' - '.$cfg_webname;
			else
				$header_str .= $cfg_webname;

			$header_str .= '</title>'."\n";
			$header_str .= '<meta name="generator" content="'.$cfg_generator.'" />'."\n";
			$header_str .= '<meta name="author" content="'.$cfg_author.'" />'."\n";
			$header_str .= '<meta name="keywords" content="';

			if(!empty($r['keywords']))
				$header_str .= $r['keywords'];
			else
				$header_str .= $cfg_keyword;

			$header_str .= '" />'."\n";
			$header_str .= '<meta name="description" content="';

			if(!empty($r['description']))
				$header_str .= $r['description'];
			else
				$header_str .= $cfg_description;

			$header_str .= '" />'."\n";
		}

		//显示站点信息
		else
		{
			if($cfg_seotitle != '')
				$header_title = $cfg_seotitle. ' - ' .$cfg_webname;
			else
				$header_title = $cfg_webname;

			$header_str  = '<title>'.$header_title.'</title>'."\n";
			$header_str .= '<meta name="generator" content="'.$cfg_generator.'" />'."\n";
			$header_str .= '<meta name="author" content="'.$cfg_author.'" />'."\n";
			$header_str .= '<meta name="keywords" content="'.$cfg_keyword.'" />'."\n";
			$header_str .= '<meta name="description" content="'.$cfg_description.'" />'."\n";
		}
	}

	return $header_str;
}



/*
 * 函数说明：获取当前栏目名称
 *
 * @access  public
 * @param   $cid  int  栏目id
 * @return  string     返回栏目名称
 */
function GetCatName($cid=0)
{
	global $dosql;
 	//echo "SELECT `classname` FROM `#@__infoclass` WHERE `id`=$cid";
	$r = $dosql->GetOne("SELECT `classname`,`parentid` FROM `#@__infoclass` WHERE `id`=$cid");
	
	if($r['parentid']){
		$r =$dosql->GetOne("SELECT `classname` FROM `#@__infoclass` WHERE `id`=".$r['parentid']."");
	}
	if(isset($r['classname']))
		return $r['classname'];
	else
		return '';
}


function GetCatName1($cid=0)
{
	global $dosql;
 	
	$r = $dosql->GetOne("SELECT `classname`,`parentid` FROM `#@__infoclass` WHERE `id`=$cid");
	
	if(isset($r['classname']))
		return $r['classname'];
	else
		return '';
}


/*
 * 获取当前页面位置
 *
 * @access  public
 * @param   $cid     int     当前页面栏目id
 * @param   $id      int     当前页面文章id
 * @param   $sign    string  栏目之间分隔符
 * @return           string
 */
function GetPosStr($cid=0,$id=0,$sign='&nbsp;&gt;&nbsp;')
{
	global $dosql, $cfg_webpath;


	//设置首页链接
	$pos_str = '<a href="'.$cfg_webpath.'">首页</a>';


	//如果cid为空，获取串，否则视为首页
	if(!empty($cid))
	{

		//获取当前栏目信息
		$r = $dosql->GetOne("SELECT * FROM `#@__infoclass` where `id`=$cid");
		if(empty($r['parentstr']))
		{
			return $pos_str.$sign.'栏目不存在';
		}
		else
		{
			//构成上级栏目字符
			if($r['parentstr'] != '0,')
			{
				$pid_arr = explode(',', $r['parentstr']);

				foreach($pid_arr as $v)
				{
					if(!empty($v))
					{
						$r = $dosql->GetOne("SELECT * FROM `#@__infoclass` where `id`=$v");
						if(!empty($r['linkurl']))
							$pos_str .= $sign.'<a href="'.$r['linkurl'].'">'.$r['classname'].'</a>';
						else
							$pos_str .= $sign.$r['classname'];
					}
				}
			}

			//构成本级栏目字符
			$r = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=$cid");
			if(isset($r) && is_array($r))
			{
				if(!empty($id))
				{
					if(!empty($r['linkurl']))
						return $pos_str.$sign.'<a href="'.$r['linkurl'].'">'.$r['classname'].'</a>'.$sign.'正文';
					else
						return $pos_str.$sign.$r['classname'].$sign.'正文';

				}
				else
				{
					if(!empty($r['linkurl']))
						return $pos_str.$sign.'<a href="'.$r['linkurl'].'">'.$r['classname'].'</a>';
					else
						return $pos_str.$sign.$r['classname'];
				}
			}
			else
			{
				return $pos_str.$sign.'栏目不存在';
			}
		}
	}
	else
	{
		return $pos_str;
	}
}



/*
 * 参数说明：获取客服QQ
 *
 * @access  public
 * @return  string  返回HTML代码
 */
function GetQQ()
{
	global $cfg_qqcode;

	if(!empty($cfg_qqcode))
	{
		$re_str = '<div class="kf"><div class="kf_r">';
		$qqnum_arr = explode(',', $cfg_qqcode);

		foreach($qqnum_arr as $v)
		{
			$qq_arr = explode('|',$v);
			if(!empty($qq_arr[0]) and !empty($qq_arr[1]))
			{
				$re_str .= '<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin='.$qq_arr[0].'&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:'.$qq_arr[0].':41" alt="'.$qq_arr[1].'" title="'.$qq_arr[1].'"></a>';
			}
			else if(!empty($qq_arr[0]) and empty($qq_arr[1]))
			{
				$re_str .= '<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin='.$qq_arr[0].'&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:'.$qq_arr[0].':41" alt="点击这里给我发消息" title="点击这里给我发消息"></a>';
			}
			else
			{
				$re_str .= '<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin='.$v.'&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:'.$v.':41" alt="点击这里给我发消息" title="点击这里给我发消息"></a>';
			}
		}
		$re_str .= '</div></div>';

		return $re_str;
	}
}


//获取parentstr的第一位
function GetTopID($str,$i=1)
{
	if($str == '0,')
	{
		$topid = 0;
	}
	else
	{
		$ids = explode(',', $str);
		$topid = isset($ids[$i]) ? $ids[$i] : '';
	}

	return $topid;
}


/*
 * 函数说明：获取一级导航
 *
 * @access  public
 * @param   $id  int  父ID
 * @return  string    返回导航
 */
function GetNav($pid=1)
{
	global $dosql, $cfg_isreurl;
	
	$str = '';
// 	echo "SELECT * FROM `#@__nav` WHERE parentid=$pid AND checkinfo=true ORDER BY orderid ASC";
	$dosql->Execute("SELECT * FROM `#@__nav` WHERE parentid=$pid AND checkinfo=true ORDER BY orderid ASC");
// 	var_dump($row = $dosql->GetArray());
	while($row = $dosql->GetArray())
	{
		
		if($cfg_isreurl != 'Y')
			$gourl = $row['linkurl'];
		else
			$gourl = $row['relinkurl'];

		if($row['picurl'] != '')
			$classname = '<img src="'.$row['picurl'].'" />';
		else
			$classname = $row['classname'];

		$str .= '<li><a href="'.$gourl.'"';

		if($row['target'] != '')
			$str .= ' target="'.$row['target'].'"';

		$str .= '>'.$classname.'</a><ul class="nav_sub">'.GetSubNav($row['id']).'</ul></li>';
	}

	return $str;
}

/*
 * 函数说明：获取栏目菜单
 *
 * @access  public
 * @param   $id  int  父ID
 * @return  string    返回导航
 */
function GetInfoclass($pid=0 ,$cotrl)
{
	global $dosql, $cfg_isreurl;
	
	$str = '';
	$dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=$pid  ORDER BY orderid ASC");
	$rowq = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE parentid=$pid  ORDER BY orderid ASC");
	if(empty($rowq)){
		$row1=$dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id=$pid  ORDER BY orderid ASC");
		$dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=".$row1['parentid']."  ORDER BY orderid ASC");
	}
	
	while($row = $dosql->GetArray())
	{
		
		if($cfg_isreurl != 'Y')
			$gourl = $row['linkurl'];
		else
			$gourl = $row['relinkurl'];

		$classname = $row['classname'];
		switch ($row['infotype'])
		{
			case 0:
				$m = 'about.php';
				break;
			case 1:
				$m = 'news.php';
				break;
			case 2:
				$m = 'case.php';
				break;
			case 3:
				$m = 'soft.php';
				break;
			case 4:
				$m = 'product.php';
				break;
			default:
				echo 'No number between 1 and 3';
		}
		
		if($cotrl){
			if($gourl){
				$str .= '<li><a href="'.$gourl.'"';
				$str .= '>'.$classname.'</a></li>';
			}else{
				$str .= '<li><a href="'.$m.'?cid='.$row['id'].'"';
				$str .= '>'.$classname.'</a></li>';
			}
			
		}else{
			$str .= '<li><a href="'.$m.'?cid='.$row['id'].'"';
			$str .= '>'.$classname.'</a><ul class="nav_sub">'.GetSubInfoclass($row['id']).'</ul></li>';
			
		}
		
	}
	return $str;
}

/*
 * 函数说明：获取栏目菜单
 *
 * @access  public
 * @param   $id  int  父ID
 * @return  string    返回导航
 */
function GetSubInfoclass($id)
{
	global $dosql, $cfg_isreurl;
	$str = '';
	$row = $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=$id AND checkinfo=true ORDER BY orderid ASC", $id);
	while($row = $dosql->GetArray($id))
	{
		if($cfg_isreurl != 'Y')
			$gourl = $row['linkurl'];
		else
			$gourl = $row['relinkurl'];

		$classname = $row['classname'];
		switch ($row['infotype'])
		{
			case 0:
				$m = 'about.php';
				break;
			case 1:
				$m = 'news.php';
				break;
			case 2:
				$m = 'case.php';
				break;
			case 3:
				$m = 'soft.php';
				break;
			case 4:
				$m = 'product.php';
				break;
			default:
				echo 'No number between 1 and 3';
		}
		if($gourl){
			$str .= '<li ><a href="'.$gourl.'"';
			$str .= ' class="top-a">'.$classname.'</a>';
		}else{
			$str .= '<li ><a href="'.$m.'?cid='.$row['id'].'"';
			$str .= ' class="top-a">'.$classname.'</a>';
		}
		
		$row2 = $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE parentid=".$row["id"]." AND checkinfo=true ORDER BY orderid DESC", $row['id']);
		if($dosql->GetTotalRow($row['id']))
		{
			
			$str .= '<ul class="s">'.GetSubInfoclass($row["id"]).'</ul>';
		}
		$str .= '</li>';
	}

	return $str;
}


/*
 * 函数说明：获取栏目名称和连接
 *
 * @access  public
 * @param   $id  int  父ID
 * @return  string    返回导航
 */
function Getclass($id,$sas=2)
{
	global $dosql, $cfg_isreurl;
	$row = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id=$id  ORDER BY orderid ASC");
	switch ($row['infotype'])
		{
			case 0:
				$m = 'about.php';
				break;
			case 1:
				$m = 'news.php';
				break;
			case 2:
				$m = 'case.php';
				break;
			case 3:
				$m = 'soft.php';
				break;
			case 4:
				$m = 'product.php';
				break;
			default:
				echo 'No number between 1 and 3';
		}
		if($sas == 1){
			$str=$m.'?cid='.$row['id'];
		}elseif ($sas == 3){
			$str=$row['linkurl'];
		}else{
			$str=$row['classname'];
		}
	
	return $str;
}

/*
 * 函数说明：获取导航菜单
 *
 * @access  public
 * @param   $id  int  父ID
 * @return  string    返回导航
 */
function GetSubNav($id)
{
	global $dosql, $cfg_isreurl;

	$str = '';
	$row = $dosql->Execute("SELECT * FROM `#@__nav` WHERE parentid=$id AND checkinfo=true ORDER BY orderid ASC", $id);
	while($row = $dosql->GetArray($id))
	{
		if($cfg_isreurl != 'Y')
			$gourl = $row['linkurl'];
		else
			$gourl = $row['relinkurl'];


		if($row['picurl'] != '')
			$classname = $row['picurl'];
		else
			$classname = $row['classname'];


		$str .= '<li><a href="'.$gourl.'"';

		if($row['target'] != '')
			$str .= ' target="'.$row['target'].'"';

		$str .= '>'.$classname.'</a>';

		$row2 = $dosql->Execute("SELECT * FROM `#@__nav` WHERE parentid=".$row["id"]." AND checkinfo=true ORDER BY orderid DESC", $row['id']);
		if($dosql->GetTotalRow($row['id']))
		{
			$str .= '<ul class="s">'.GetSubNav($row["id"]).'</ul>';
		}
		$str .= '</li>';
	}

	return $str;
}


/*
 * 函数说明：碎片数据调用
 *
 * @access  public
 * @param   $id   int  碎片ID
 * @param   $t    int  调用的内容 0为内容 1为标识名称 2为缩略图 3为跳转连接
 * @return  string     返回碎片缩略图地址
 */
function GetFragment($id=0,$t=0)
{
	global $dosql;

	if($t == 0)
		$field = 'content';
	else if($t == 1)
		$field = 'title';
	else if($t == 2)
		$field = 'picurl';
	else if($t == 3)
		$field = 'linkurl';
	else
		$field = '*';


	$r = $dosql->GetOne("SELECT `$field` as `f` FROM `#@__fragment` WHERE `id`=$id");
	if(isset($r) && is_array($r))
	{
		return $r['f'];
	}
}

function GetAd($id)
{
	global $dosql, $cfg_isreurl;
	$str='';
	if(!empty($id)){
		$row=$dosql-> GetOne("SELECT * FROM `#@__admanage` WHERE id=$id AND checkinfo=true");
		if($row!="")
			switch($row['admode']){
				case $row['admode']=='image':
					$str .= '<a href="'.$row['linkurl'].'"><img src="'.$row['picurl'].'"></a>';
					break;
				case $row['admode']=='flash':
					$str .= '<a href="'.$row['linkurl'].'">
				<object id="video" width="225" height="185" border="0" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA">
				<param name="ShowDisplay" value="0">
				<param name="ShowControls" value="1">
				<param name="AutoStart" value="1">
				<param name="AutoRewind" value="0">
				<param name="PlayCount" value="0">
				<param name="Appearance value="0 value="">
				<param name="BorderStyle value="0 value="">
				<param name="MovieWindowHeight" value="225">
				<param name="MovieWindowWidth" value="185">
				<param name="FileName" value="'.$row['picurl'].'">
				<embed width="225" height="185" border="0" showdisplay="0" showcontrols="1" autostart="1" autorewind="0" playcount="0" moviewindowheight="225" moviewindowwidth="185" filename="'.$row['picurl'].'" src="'.$row['picurl'].'"></embed>
				</object></a>';
					break;
				case $row['admode']=='video':
					$str .= '<a href="'.$row['linkurl'].'">
				<object id="video" width="225" height="185" border="0" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA">
				<param name="ShowDisplay" value="0">
				<param name="ShowControls" value="1">
				<param name="AutoStart" value="1">
				<param name="AutoRewind" value="0">
				<param name="PlayCount" value="0">
				<param name="Appearance value="0 value="">
				<param name="BorderStyle value="0 value="">
				<param name="MovieWindowHeight" value="225">
				<param name="MovieWindowWidth" value="185">
				<param name="FileName" value="'.$row['picurl'].'">
				<embed width="225" height="185" border="0" showdisplay="0" showcontrols="1" autostart="1" autorewind="0" playcount="0" moviewindowheight="225" moviewindowwidth="185" filename="'.$row['picurl'].'" src="'.$row['picurl'].'"></embed>
				</object></a>';
					break;
				default:
					$str .= '<a href="'.$row['linkurl'].'">'.$row['adtext'].'</a>';
					break;
		}
	}
	return $str;
}
?>
