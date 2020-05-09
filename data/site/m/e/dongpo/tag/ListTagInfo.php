<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
require('../../data/dbcache/class.php');
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
$search=$ecms_hashur['ehref'];
$search.='&tagid='.$tagid;

$page=(int)$_GET['page'];
$start=0;
$line=$dp_r['pagenum'];
if(!$line){
	$line=20;
}
$page_line=12;
$offset=$page*$line;


$num=$empire->gettotal("select count(*) as total from {$dbtbpre}enewstagsdata where tagid=$tagid");//取得总条数
$query="select * from {$dbtbpre}enewstagsdata where tagid=$tagid order by tid desc limit $offset,$line";

$returnpage=page2($num,$line,$page_line,$start,$page,$search);

//页面标题
$thispage='信息管理';
//导航
$url='<a href="ListTags.php'.$ecms_hashur['whehref'].'">TAGS管理</a> -> <a href="ListTagInfo.php?tagid='.$t[tagid].$ecms_hashur['ehref'].'"><b>'.$t[tagname].'</b></a> -> '.$thispage;
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
    <td width="52%">当前位置： 
      <?=$url?>
    </td>
    <td width="48%"><div align="right" class="emenubutton">
		<a href="AddTag.php?enews=edittag&tagid=<?=$tagid.$ecms_hashur['ehref']?>">[修改]</a>&nbsp;
		<a href="AddListInfo.php?enews=pilistadd&tagid=<?=$tagid.$ecms_hashur['ehref']?>">[搜索批量推送]</a>&nbsp;
		<a href="do.php?enews=ReTagOne&tagid=<?=$tagid.$ecms_hashur['href']?>">[生成]</a>&nbsp;
		<a href="<?=dp_TagUrl($tagid)?>" target="_blank">[预览]</a>&nbsp;
      </div>
	</td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
<form name="listform" method="post" action="do.php" onsubmit="return confirm('确认要执行此操作？');">
  <?=$ecms_hashur['form']?>
  <input type=hidden name=enews value=EditMoreInfoTime>
  	<tr class="header">
	  <td width="5%" height="25"> <div align="center"></div></td>
      <td width="8%" height="25"><div align="center">ID</div></td>
	  <td height="25"> <div align="center">标题</div></td>
      <td width="15%" height="25"> <div align="center">栏目</div></td>
	  <td width="20%" height="25"> <div align="center">时间</div></td>
      <td width="15%" height="25"> <div align="center">操作</div></td>
    </tr>
<?php
	$sql=$empire->query($query);
	while($r=$empire->fetch($sql)){
		$tbname=$class_r[$r[classid]][tbname];
		$title='此信息不存在';
		if($tbname){
			$infor=$empire->fetch1("select title,".dp_ReturnF()." from {$dbtbpre}ecms_".$tbname." where id=$r[id] limit 1");
			if($infor[id]){
				$title='<a href="'.sys_ReturnBqTitleLink($infor).'" target="_blank">'.stripSlashes($infor['title']).'</a>';
			}else{
				$infor=$empire->fetch1("select id,classid,newspath,filename,groupid,titleurl,title from {$dbtbpre}ecms_".$tbname."_check where id=$r[id] limit 1");
				if($infor[id]){
					$title='<span style="color:red">[未审核的信息]</span>'.stripSlashes($infor['title']);
				}
			}
		}
?>
			<tr  bgcolor='#ffffff'>
				<td><div align="center"> 
				<input name="tid[]" type="checkbox" id="tid[]" value="<?=$r[tid]?>">
				</div></td>
				  <input name="infotid[]" type="hidden" value="<?=$r['tid']?>">
				  <td height="30"><div align="center"><?=$r[id]?></div></td>
				  <td> <?=$title?></td>
				  <td> <div align="center"><?=$class_r[$r[classid]][classname]?></div></td>
				  <td> <div align="center"><input type="text" name="newstime[]" value="<?=date('Y-m-d H:i:s',$r['newstime'])?>"></div></td>
				  <td> <div align="center"><a href="do.php?enews=yichu&tid=<?=$r[tid].$ecms_hashur['href']?>"  onclick="return confirm('确认要移除？');">[移除]</a></div></td>
			</tr>
<?
	}
?>
    <tr bgcolor="#FFFFFF"> 
      <td height="25"><div align="center"> 
          <input type=checkbox name=chkall value=on onClick=CheckAll(this.form)>
        </div></td>
      <td height="25" colspan="5"> <div align="right">
		<input type="submit" name="Submit8" value="R 刷新信息" onClick="document.listform.enews.value='ReInfo';document.listform.action='do.php';">&nbsp;
		<input type="submit" name="Submit7" value="E 修改时间">&nbsp;
		<input type="submit" name="Submit3" value="× 移除信息" onClick="document.listform.enews.value='Yichu_all';document.listform.action='do.php';">
        </div></td>
    </tr>
	<tr bgcolor='#ffffff'> 
    <td  colspan=6 height=25> 
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