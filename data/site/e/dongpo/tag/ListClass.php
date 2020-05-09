<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
require('../../data/dbcache/class.php');
require("dp_funs.php");
$link=db_connect();
$empire=new mysqlquery();
$ecms_hashur=hReturnDPHashStrAll();

//列表模板
$mod_options='';
$listtemp_options='';
$msql=$empire->query("select mid,mname from {$dbtbpre}enewsmod order by myorder,mid");
while($mr=$empire->fetch($msql))
{
	$listtemp_options.="<option value=0 style='background:#99C4E3'>".$mr[mname]."</option>";
	$l_sql=$empire->query("select tempid,tempname from ".GetTemptb("enewslisttemp")." where modid='$mr[mid]'");
	while($l_r=$empire->fetch($l_sql))
	{
		$listtemp_options.="<option value=".$l_r[tempid].$l_d."> |-".$l_r[tempname]."</option>";
	}
	$mod_options.="<option value=".$mr[mid].$m_d.">".$mr[mname]."</option>";
}



$sql=$empire->query("select classid,classname from {$dbtbpre}enewstagsclass order by classid desc");

//页面标题
$thispage='TAGS分类管理';
//导航
$url='<a href="ListTags.php'.$ecms_hashur['whehref'].'">TAG管理</a> -> '.$thispage;

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=$pagechar?>">
<link href="../../data/images/qcss.css" rel="stylesheet" type="text/css">
<title><?=$thispage?></title>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td width=60%><p>当前位置：<?=$url?></p></td>
	<td>
		<div align="right" class="emenubutton"> 
            <input type=button name=button value="新增分类" onClick="self.location.href='AddClass.php?enews=addclass<?=$ecms_hashur['ehref']?>'">
        </div></td>
  </tr>
</table>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header">
    <td width="6%"><div align="center">ID</div></td>
    <td height="25">类别名称</td>
	<td width="20%"><div align="center">TAG默认模板</div></td>
	<td width="15%"><div align="center">绑定栏目</div></td>
	<td width="23%"><div align="center">默认目录</div></td>
    <td width="15%"><div align="center">操作</div></td>
  </tr>
  <?
  while($r=$empire->fetch($sql))
  {
	  $cadd=$empire->fetch1("select * from {$dbtbpre}enewstagsclassadd where classid=$r[classid] limit 1");
	  $list_temp='未设置';
	  if($cadd[tempid]){
			$listtemp=$empire->fetch1("select tempid,tempname from ".GetTemptb("enewslisttemp")." where tempid=$cadd[tempid] limit 1");
			$list_temp=$listtemp[tempname];
	  }
	  $mymid='未绑定';
	  if($cadd[modid]){
		  $mymid=$class_r[$cadd[modid]][classname];
	  }
	  $cp='未设定';
	  if($cadd[path]){
		  $cp='根目录/'.$dp_r['tagpath'].'/'.$cadd[path];
	  }

	

  ?>
    <tr bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#C3EFFF'">
      <td><div align="center"><?=$r[classid]?></div></td>
      <td height="25"> 
          <?=$r[classname]?>
      </td>
	  <td><div align="center"><?=$list_temp?></div></td>
	  <td><div align="center"><?=$mymid?></td>
	  <td><div align="center"><?=$cp?></div></td>
      <td height="25"><div align="center"> 
		  <a href="AddClass.php?enews=editclass&classid=<?=$r[classid].$ecms_hashur['ehref']?>">修改</a> | 
		   <a href="do.php?enews=delclass&classid=<?=$r[classid].$ecms_hashur['href']?>" onclick="return confirm('确认要删除？');">删除</a>
        </div></td>
    </tr>

  <?
  }
  db_close();
  $empire=null;
  ?>
</table>
</body>
</html>
