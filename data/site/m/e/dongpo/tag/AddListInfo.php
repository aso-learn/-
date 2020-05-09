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

$tagid=$_GET['tagid'];

if(!$tagid){
	printerror("数据库错误","",1,0,1);
}
$t=$empire->fetch1("select * from {$dbtbpre}enewstags where tagid=$tagid limit 1");
if($t[tagid]!=$tagid){
	printerror("数据库错误","",1,0,1);
}

$page=(int)$_GET['page'];
$start=0;
$line=$dp_r['pagenum'];
if(!$line){
	$line=20;
}
$page_line=20;//每页显示链接数
$offset=$page*$line;//总偏移量
//搜索
$where='';
$search=$ecms_hashur['ehref'];

//搜索
$sear=$_GET['sear'];
if($sear)
{
	$tbname=$_GET['tbname'];
	$tbname=RepPostVar($tbname);
	if(empty($tbname)){
		printerror("请选择数据表","",1,0,1);
	}
	$keyboard=RepPostVar2($_GET['keyboard']);
	if(empty($keyboard)){
		printerror("请输入搜索词","",1,0,1);
	}
	$where=" where title like '%$keyboard%' or keyboard like '%$keyboard%' ";

	$search.="&tagid=$tagid&sear=1&keyboard=$keyboard&tbname=$tbname";

	$num=$empire->gettotal("select count(*) as total from {$dbtbpre}ecms_".$tbname." ".$where);
	$returnpage=page2($num,$line,$page_line,$start,$page,$search);
	$sql=$empire->query("select * from {$dbtbpre}ecms_".$tbname." ".$where." limit $offset,$line");
}

$changetbs='';
$tbsql=$empire->query("select tid,tbname,tname from {$dbtbpre}enewstable order by tid");
while($tbr=$empire->fetch($tbsql))
{
	$selected='';
	if(empty($tbname)&&$tbr[tbname]==$public_r[tbname]){
		$selected=' selected';
	}
	if($tbname==$tbr[tbname]){
		$selected=' selected';
	}
	$changetbs.="<option value='".$tbr[tbname]."'".$selected.">".$tbr[tname]."(".$tbr[tbname].")</option>";
}


//页面标题
$thispage='搜索信息推送至TAG';
//导航
$url='<a href="ListTags.php">TAGS管理</a>';

$url="<a href=ListTags.php".$ecms_hashur['whehref'].">管理TAGS</a> -> <a href=\"ListTagInfo.php?tagid=$tagid".$ecms_hashur['ehref']."\"><b>$t[tagname]</b></a> -> <a href='AddListInfo.php?enews=pilistadd&tagid=$tagid".$ecms_hashur['ehref']."'>$thispage</a>";
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

function GetSelectId(form)
{
  var ids='';
  var dh='';
  for (var i=0;i<form.elements.length;i++)
  {
	var e = form.elements[i];
	if (e.name == 'id[]')
	{
	   if(e.checked==true)
	   {
       		ids+=dh+e.value;
			dh=',';
	   }
	}
  }
  return ids;
}

</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <form name="SearchForm" method="GET" action="AddListInfo.php">
    <?=$ecms_hashur['form']?>
    <tr bgcolor="#FFFFFF"> 
	   <td width="50%" height=25> 当前位置：<?=$url?>
	   </td>
      <td width="50%" align=right> 
          <select name="tbname">
                <?=$changetbs?>
          </select>
          <input name="keyboard" type="text" id="keyboard" value="<?=$keyboard?$keyboard:$t['tagname']?>">
		  <input name="tagid" type="hidden" id="tagid" value="<?=$tagid?>">
          <input type="submit" name="Submit2" value="搜索">
          <input name="sear" type="hidden" value="1">
		  &nbsp; 
       </td>
    </tr>
  </form>
</table>
<br>
<form name="listform" method="post" action="do.php" onsubmit="return confirm('确认要执行此操作？');">  
  <?=$ecms_hashur['form']?>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
    <tr class="header"> 
      <td width="5%"><div align="center"></div></td>
      <td width="8%" height="25"><div align="center">ID</div></td>
      <td height="25"><div align="center">标题</div></td>
      <td width="15%" height="25"><div align="center">栏目</div></td>
      <td width="18%" height="25"> <div align="center">发布时间</div></td>
    </tr>
    <?php
	if($sear){
	while($r=$empire->fetch($sql))
		{
		$titleurl=sys_ReturnBqTitleLink($r);
		//时间
		$truetime=date("Y-m-d H:i:s",$r[truetime]);
		$lastdotime=date("Y-m-d H:i:s",$r[lastdotime]);
		//取得类别名
		$do=$r[classid];
		$dob=$class_r[$r[classid]][bclassid];
		//标题图片
		$showtitlepic="";
		if($r[titlepic])
		{
			$showtitlepic="<a href='".$r[titlepic]."' title='预览标题图片' target=_blank><img src='../../data/images/showimg.gif' border=0></a>";
		}
	?>
    <tr bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#C3EFFF'"> 
      <td align=center>
          <input name="id[]" type="checkbox" id="id[]" value="<?=$r[id]?>">
      </td>
      <td height=35 align=center><?=$r[id]?></td>
      <td> &nbsp;
          <?=$showtitlepic?>
          <a href='<?=$titleurl?>' target=_blank title="<?=$r[title]?>">
          <?=$r[title]?>
          </a> 
      </td>
      <td align=center>
          <font color="#574D5C"><?=$class_r[$r[classid]][classname]?></font>
      </td>
      <td align=center> <?=date("Y-m-d H:i:s",$r[newstime])?></td>
    </tr>
    <?
		}
	}
	?>
    <tr bgcolor="#FFFFFF"> 
      <td height=25 align=center>
          <input type=checkbox name=chkall value=on onclick=CheckAll(this.form)>
      </td>
      <td height=25 colspan=4 align=right>
          <input type="submit" name="Submit3" value="&nbsp;推送选中信息&nbsp;">
		  <input type=hidden name=enews value=tui_all>
		  <input name="tagid" type="hidden" id="tagid" value="<?=$tagid?>">
		  <input name="tbname" type="hidden" id="tagid" value="<?=$tbname?>">
      </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" colspan="8"> 
        <?=$returnpage?>
      　 </td>
    </tr>
  </table>
</form>
</body>
</html>
<?
db_close();
$empire=null;
?>