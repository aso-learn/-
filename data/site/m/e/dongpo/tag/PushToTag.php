<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
require("../../data/dbcache/class.php");
require("dp_funs.php");
$link=db_connect();
$empire=new mysqlquery();
$ecms_hashur=hReturnDPHashStrAll();

//ID
$id=$_GET['id'];
$bookid=explode(',',$id);
$count=count($bookid);
$mbk='';

//栏目
$classid=(int)$_GET['classid'];
$tid=(int)$_GET['tid'];

//分类
$cid=(int)$_GET[cid];
$search=$ecms_hashur['ehref'];
if($cid)
{
	$add.=" and cid='$cid'";
	$search.="&cid=$cid";
}
//关键字
if($_GET['keyboard'])
{
	$keyboard=RepPostVar($_GET['keyboard']);
	$show=(int)$_GET['show'];
	if($show==1)
	{
		$add.=" and tagid='$keyboard'";
	}
	else
	{
		$add.=" and tagname like '%$keyboard%'";
	}
	$search.="&show=$show&keyboard=$keyboard";
}

$add=$add?' where '.substr($add,5):'';

//分类
$csql=$empire->query("select classid,classname from {$dbtbpre}enewstagsclass order by classid");
while($cr=$empire->fetch($csql))
{
	$select="";
	if($cid==$cr[classid])
	{
		$select=" selected";
	}
	$cs.="<option value='".$cr[classid]."'".$select.">".$cr[classname]."</option>";
}


if($sinfo&&empty($id))
{
	$firstpost=1;
}
$time=time();
//专题
$i=0;
$query="select tagid,tagname,num,isgood from {$dbtbpre}enewstags ".$add." order by isgood desc,tagid desc";
$sql=$empire->query($query);

$thispage='推送信息至TAG';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=$pagechar?>">
<link href="../../data/images/qcss.css" rel="stylesheet" type="text/css">
<title><?=$thispage?></title>
<style type="text/css">
	.noa span{white-space:nowrap;}
</style>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
    <tr class=header>
      <td>
	  推送信息到TAG
	  </td>
    </tr>
	<tr  bgcolor="#FFFFFF">
      <td style="padding:10px 15px; line-height:27px;">
	  <b>想要推送的信息ID：</b><br><div class="noa"><?=$id?></div>
	  </td>
    </tr>
	<tr  bgcolor="#FFFFFF">
      <td style="padding:10px 15px; line-height:27px;">


<form name="searchform" method="GET" action="PushToTag.php">
    <?=$ecms_hashur['form']?>
    搜索：
        <select name="show" id="show">
          <option value="0"<?=$show==0?' selected':''?>>TAG名称</option>
		  <option value="1"<?=$show==1?' selected':''?>>TAGID</option>
        </select> 
        <input name="keyboard" type="text" id="keyboard" value="<?=$keyboard?>">
        <select name="cid" id="cid">
          <option value="0">不限分类</option>
		  <?=$cs?>
        </select>
		<input name="id" type="hidden" id="id" value="<?=$id?>">
		  <input name="tid" type="hidden" id="tid" value="<?=$tid?>">
		  <input name="classid" type="hidden" id="classid" value="<?=$classid?>">
        <input type="submit" name="Submit2" value="显示">
  </form>
	  </td>
    </tr>
<form name="form1" method="post" action="do.php">
	<?=$ecms_hashur['form']?>
	<tr  bgcolor="#FFFFFF">
      <td style="padding:10px 15px; line-height:27px;">
	  <b>请选择目标Tag：</b><br>
	  <table width="100%" border="0" cellpadding="0" cellspacing="0">
	    <tr bgcolor="#FFFFFF">

    <?
  while($r=$empire->fetch($sql))
  {
	  $i+=1;
  ?>
     
      <td height="25" width=25%><input name="tagid[]" type="checkbox" id="tagid[]" value="<?=$r[tagid]?>"<?=$check?>>
        <?=$r['tagname']?></td>
  <?php
	if($i%4==0){
		  echo '</tr><tr bgcolor="#FFFFFF">';
	  }
	
  }
  ?>
		 </tr>
	   </table>

	  </td>
    </tr>

    <tr bgcolor="#FFFFFF"> 
      <td height="25" style="padding:10px 15px;"> 
          <input type="submit" name="Submit2" value="确定推送">
          &nbsp;&nbsp; 
          <input name="enews" type="hidden" id="enews" value="PushInfoToTag">
          <input name="id" type="hidden" id="id" value="<?=$id?>">
		  <input name="tid" type="hidden" id="tid" value="<?=$tid?>">
		  <input name="classid" type="hidden" id="classid" value="<?=$classid?>">
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
