<?php
define('EmpireCMSAdmin','1');
require('../../class/connect.php');
require('../../class/db_sql.php');
require('../../class/functions.php');
require('../../data/dbcache/class.php');
require('../../class/t_functions.php'); 
require "../".LoadLang('pub/fun.php');
require("../../class/delpath.php");
require("../../class/copypath.php");
require('dp_funs.php');
$link=db_connect();
$empire=new mysqlquery();
//hReturnDPRHash();

$enews=$_POST['enews'];
if(empty($enews))
{
	$enews=$_GET['enews'];
}

if($enews=="addclass")//增加分类
{
	dp_AddTagClass($_POST);
}
elseif($enews=='editclass')//修改类别
{
	dp_EditTagClass($_POST);
}
elseif($enews=='delclass')//删除类别
{
	$classid=$_GET['classid'];
	dp_DelTagClass($classid);
}
elseif($enews=="addtag")//新增tag
{
	dp_AddTags($_POST);
}
elseif($enews=="addmoretag")//批量增加tag
{
	dp_AddMoreTags($_POST);
}
elseif($enews=="edittag")//修改tag
{
	dp_EditTag($_POST);
}
elseif($enews=="deltag")//删除tag
{
	$tagid=$_GET[tagid];
	dp_DelTag($tagid);
}
elseif($enews=="DelTags_all") //批量删除tag
{
	dp_DelTags_all($_POST);
}
elseif($enews=="yichu")//信息从tag移除
{
	$tid=$_GET[tid];
	dp_DelBfromT($tid);
}
elseif($enews=="Yichu_all")//批量移除
{
	dp_DelBfromT_All($_POST);
}
elseif($enews=="ReInfo")//批量刷新信息
{
	dp_ReInfo($_POST);
}
elseif($enews=="EditMoreInfoTime")//批量修改信息时间
{
	dp_EditMoreInfoTime($_POST);
}
elseif($enews=="tui_all")//搜索信息批量推送至tag
{
	dp_Tui_All($_POST);
}
elseif($enews=="PushInfoToTag")//从列表推荐信息至tag
{
	dp_PushInfoToTag($_POST);
}
elseif($enews=="ReAllTag")//批量生成全
{
	$start=$_GET['start'];
	$classid=$_GET['classid'];
	$startid=$_GET['startid'];
	$endid=$_GET['endid'];
	$zu=$_GET['zu'];
	dp_ReAllTag($zu,$start,$classid,$startid,$endid);
}
elseif($enews=="ReTagOne")//生成一个
{
	$tagid=(int)$_GET[tagid];
	dp_ReTagOne($tagid);
}
elseif($enews=="ReTag_all")//列表批量生成
{
	dp_ReTag_All($_POST);
}
if($enews=="zhengliall")//批量整理
{
	$start=$_GET['start'];
	$classid=$_GET['classid'];
	$startid=$_GET['startid'];
	$endid=$_GET['endid'];
	$zu=$_GET['zu'];	
	dp_Zhengli($zu,$start,$classid,$startid,$endid);
}
elseif($enews=="zhengliOne")//整理一个
{
	$tagid=(int)$_GET[tagid];
	dp_ZhengliOne($tagid);
}
elseif($enews=="tongbu")//批量同步
{
	$start=$_GET['start'];
	$classid=$_GET['classid'];
	$startid=$_GET['startid'];
	$endid=$_GET['endid'];
	$zu=$_GET['zu'];
	$vv=(int)$_GET['vv'];
	dp_TongBu($zu,$start,$classid,$startid,$endid,$vv,$stime);
}
elseif($enews=="tongbuone")//同步一个
{
	$tagid=(int)$_GET[tagid];
	dp_TongBuOne($tagid);
}
elseif($enews=="TongbuTags_all") //tag列表批量同步tag
{
	dp_TongbuTags_all($_POST);
}
elseif($enews=='setextend'){
	dp_SetExtend($_POST);
}
else
{
	exit();
}

db_close();
$empire=null;
?>