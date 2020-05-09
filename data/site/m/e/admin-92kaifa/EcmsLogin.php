<?php

/********密码验证***********/
$password='92kaifa.com';				                   //这个密码是登陆验证用的.您需要在模块里设置和这里一样的密码....注意一定需要修改.
if($password!=$_GET['pw']) exit('验证密码错误');   //安全检测,密码不符则退出

/****以下代码非专业人员不建议修改***************/
define('EmpireCMSAdmin','1');
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/functions.php");
require LoadLang("pub/fun.php");
require("../class/delpath.php");
require("../class/copypath.php");
require("../class/t_functions.php");
require("../data/dbcache/class.php");
require("../data/dbcache/MemberLevel.php");
include_once './fabuFunction.php';

//获取分类列表
foreach($class_r as $kv)
{
	$cates[]=array('cname'=>$kv['classname'],'cid'=>$kv['classid'],'pid'=>$kv['bclassid']);
}

if(empty($_POST))
{
	//这里刷新列表
    echo "<select name='list'>";
    echo maketree($cates,0,'');
    echo '</select>';
    exit();
}
$link=db_connect();
$empire=new mysqlquery();

//验证用户
$loginin=$_POST['username'];

$lur=$empire->fetch1("select * from {$dbtbpre}enewsuser where `username`='$loginin'");
if(!$lur) exit('不存在的用户名'.$loginin);

$logininid=$lur['userid'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];

$incftp=0;
if($public_r['phpmode'])
{
	include("../class/ftp.php");
	$incftp=1;
}
require("../class/hinfofun.php");
$navtheid=(int)$_POST['filepass'];
$_POST['newstime'] = date('Y-m-d H:i:s', $_POST['newstime']);

//表单提交的数据是否需要做特殊处理
$function = "{$tbname}_b";
if (function_exists($function)) {
    $_POST = $function($_POST);
}

//判重
$tbname = $class_r[$_POST['classid']]['tbname'];
$ret = $empire->fetch1("select id from {$dbtbpre}ecms_{$tbname} where title = '{$_POST['title']}' and classid = '{$_POST['classid']}' limit 1");
if ($ret['id']) {
    $function = function_exists("{$tbname}_c") ? "{$tbname}_c" : 'common';
    $function($ret['id'], $_POST, $tbname);
} else {
    AddNews($_POST,$logininid,$loginin);
}

db_close();
$empire=null;

/***生成目录的一个遍历算法***/
function maketree($ar,$id,$pre)
{
	$ids='';
	foreach($ar as $k=>$v){
		$pid=$v['pid'];
		$cname=$v['cname'];
		$cid=$v['cid'];
		if($pid==$id)
		{
			$ids.="<option value='$cid'>{$pre}{$cname}</option>";
			foreach($ar as $kk=>$vv)
			{
				$pp=$vv['pid'];
				if($pp==$cid)
				{
					$ids.=maketree($ar,$cid,$pre."&nbsp;&nbsp;");
					break;
				}
			}
		}
	}
	return $ids;
}