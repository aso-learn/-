<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
require("../../class/delpath.php");
require("../../class/t_functions.php");
require("../../data/dbcache/class.php");
require "../".LoadLang('pub/fun.php');
require("dp_funs.php");
$link=db_connect();
$empire=new mysqlquery();
$ecms_hashur=hReturnDPHashStrAll();

$page=(int)$_GET['page'];
$start=0;
$line=$dp_r['pagenum'];
if(!$line){
	$line=20;
}
$page_line=20;//每页显示链接数
$offset=$page*$line;//总偏移量
//搜索
$add='';
$search=$ecms_hashur['ehref'];
//关键字
if($_GET['keyboard'])
{
	$keyboard=RepPostVar($_GET['keyboard']);
	$show=(int)$_GET['show'];
	if($show==0)
	{
		$add.=" and tagname like '%$keyboard%'";
	}
	elseif($show==1)
	{
		$add.=" and tagid='$keyboard'";
	}
	elseif($show==2)
	{
		$add.=" and cid='$keyboard'";
	}
	$search.="&show=$show&keyboard=$keyboard";
}
//排序
$orderby=$_GET['orderby'];
if($orderby==1)//按TAGID升序排序
{$doorder='tagid asc';}
elseif($orderby==2)//按信息数降序排序
{$doorder='num desc';}
elseif($orderby==3)//按信息数升序排序
{$doorder='num asc';}
elseif($orderby==4)//按信息数升序排序
{$doorder='isgood';}
elseif($orderby==5)//按信息数升序排序
{$doorder='isgood desc';}
else//按TAGID降序排序
{$doorder='tagid desc';}
$search.="&orderby=$orderby";
$add=$add?' where '.substr($add,5):'';
$query="select * from {$dbtbpre}enewstags".$add;
$totalquery="select count(*) as total from {$dbtbpre}enewstags".$add;
$num=$empire->gettotal($totalquery);//取得总条数
$query=$query." order by ".$doorder." limit $offset,$line";
$sql=$empire->query($query);

$returnpage=page2($num,$line,$page_line,$start,$page,$search);

//页面标题
$thispage='TAG管理';
//导航
$url='<a href="ListTags.php'.$ecms_hashur['whehref'].'">TAG管理</a>';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=$pagechar?>">
<link href="../../data/images/qcss.css" rel="stylesheet" type="text/css">
<title><?=$thispage?></title>
<script>
function CheckAll(form)
  {
  for (var i=0;i<form.elements.length;i++)
    {
    var e = form.elements[i];
    if (e.name != 'chkall')
       e.checked = form.chkall.checked;
    }
  }
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td width="40%" height="25">当前位置：<?=$url?></td>
    <td width="60%" align=right></td>
  </tr>
</table>
  <table width="100%" border="0" cellspacing="1" cellpadding="3">
    <form name="searchform" method="GET" action="ListTags.php">
	<?=$ecms_hashur['form']?>
    <tr> 
      <td height="25" width="70%">搜索：
        <select name="show" id="show">
          <option value="0"<?=$show==0?' selected':''?>>Tag名称</option>
		  <option value="1"<?=$show==1?' selected':''?>>TagID</option>
		  <option value="2"<?=$show==2?' selected':''?>>Tag分类ID</option>
        </select> 
        <input name="keyboard" type="text" id="keyboard" value="<?=$keyboard?>">
        <select name="orderby" id="orderby">
          <option value="0"<?=$orderby==0?' selected':''?>>按TAGID降序排序</option>
		  <option value="1"<?=$orderby==1?' selected':''?>>按TAGID升序排序</option>
          <option value="2"<?=$orderby==2?' selected':''?>>按信息数降序排序</option>
		  <option value="3"<?=$orderby==3?' selected':''?>>按信息数升序排序</option>
		  <option value="4"<?=$orderby==4?' selected':''?>>推荐等级升序</option>
		  <option value="5"<?=$orderby==5?' selected':''?>>推荐等级降序</option>
        </select> 
        <input type="submit" name="Submit2" value="显示"></td>
		<td width="30%"><div align="right" class="emenubutton">
        <input type="button" name="Submit" value="增加TAG" onclick="self.location.href='AddTag.php?enews=addtag<?=$ecms_hashur['ehref']?>';">&nbsp; 
		<input type="button" name="Submit" value="批量增加TAG" onclick="self.location.href='AddMoreTag.php?enews=addmoretag<?=$ecms_hashur['ehref']?>';">&nbsp; 
      </div></td>
    </tr>
  </form>
  </table>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <form name="listform" method="post" action="do.php" onsubmit="return confirm('确认要操作?');">
    <?=$ecms_hashur['form']?>
    <input type=hidden name=enews value=ReTag_all>
    <tr class="header"> 
	  <td width="5%" height="25"> <div align="center"></div></td>
      <td width="8%" height="25"> <div align="center">ID</div></td>
      <td height="32"> <div align="center">TAG名称</div></td>
	  <td width="8%" height="25"> <div align="center">等级</div></td>
	  <td width="15%" height="25"> <div align="center">分类</div></td>
      <td width="8%" height="25"> <div align="center">信息数</div></td>
      <td width="15%"><div align="center">管理</div></td>
      <td width="18%" height="25"> <div align="center">操作</div></td>
    </tr>
    <?
  while($r=$empire->fetch($sql))
  {
	$add=$empire->fetch1("select * from {$dbtbpre}enewstagsadd where tagid=$r[tagid]");
	$tml=$r[tagid];
	if($dp_r[pathtype]){
		$tml=$add[py];
	}	
	$cpath='';
	$cn='未分类';
	if($r[cid]){
		$csql=$empire->fetch1("select * from {$dbtbpre}enewstagsclass where classid=$r[cid]");
		$cadd=$empire->fetch1("select * from {$dbtbpre}enewstagsclassadd where classid=$r[cid]");
		$cn=$csql[classname];
		if($cadd['path']){
			$cpath=$cadd['path'].'/';
		}
	}

	$tagsurl=dp_TagUrl($r['tagid']);
  ?>
    <tr bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#E2E9EA'"> 
	  <td><div align="center"> 
          <input name="tagid[]" type="checkbox" id="tagid[]" value="<?=$r[tagid]?>">
        </div></td>
      <td height="25"> <div align="center"> 
          <a href="do.php?enews=ReTagOne&tagid=<?=$r[tagid].$ecms_hashur['href']?>" ><?=$r[tagid]?></a>
        </div></td>
      <td height="25">&nbsp;&nbsp; 
        <a href="<?=$tagsurl?>" target="_blank">
        <?=$r[tagname]?>
        </a> </td>
      <td height="25"> <div align="center">
          <?=$r[isgood]?>
        </div></td>
      <td height="25"> <div align="center">
          <?=$cn?>
        </div></td>
      <td height="25"> <div align="center">
          <?=$r[num]?>
        </div></td>
      <td><div align="center"><a href="ListTagInfo.php?tagid=<?=$r[tagid].$ecms_hashur['ehref']?>">信息管理</a></div></td>
      <td height="25"><div align="center">
          <a href="AddTag.php?enews=edittag&tagid=<?=$r[tagid].$ecms_hashur['ehref']?>" >[修改]</a>&nbsp;<a href="do.php?enews=tongbuone&tagid=<?=$r[tagid].$ecms_hashur['href']?>" >[同步]</a>&nbsp;<a href="do.php?enews=deltag&tagid=<?=$r[tagid].$ecms_hashur['href']?>"  onclick="return confirm('确认要删除？');">[删除]</a>
        </div>
	  </td>
    </tr>
    <?
  }
  ?>
    <tr bgcolor="#FFFFFF"> 
      <td height="25"><div align="center"> 
          <input type=checkbox name=chkall value=on onClick=CheckAll(this.form)>
        </div></td>
      <td height="25" colspan="8"> <div align="right">
          <input type="submit" name="Submit822" value="&nbsp;生成&nbsp;">&nbsp;&nbsp;
		  <input type="submit" name="Submit3" value="&nbsp;同步&nbsp;" onClick="document.listform.enews.value='TongbuTags_all';document.listform.action='do.php';">&nbsp;&nbsp;
		  <input type="submit" name="Submit3" value="&nbsp;删除&nbsp;" onClick="document.listform.enews.value='DelTags_all';document.listform.action='do.php';">
        </div></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25" colspan="9">
        <?=$returnpage?>
      </td>
    </tr>
	</form>
</table>

</body>
</html>
<?
db_close();
$empire=null;
?>