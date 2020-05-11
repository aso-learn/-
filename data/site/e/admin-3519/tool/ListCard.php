<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
require "../".LoadLang("pub/fun.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
//验证用户
$lur=is_login();
$logininid=$lur['userid'];
$loginin=$lur['username'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];
//ehash
$ecms_hashur=hReturnEcmsHashStrAll();
require('./card_functions.php');
$type = $_GET['type'] ? :'';
if (!$type) {
	$type = $_POST['type'] ? :'';
}
$enews=$_POST['enews'];
if(empty($enews))
{$enews=$_GET['enews'];}
if($enews=="AddCard")
{
	AddCard($_POST,$logininid,$loginin);
}
elseif($enews=="EditCard")
{
	EditCard($_POST,$logininid,$loginin);
}
elseif($enews=="DelCard")
{
	$cardid=(int)$_GET['cardid'];
	$fahaoid=(int)$_GET['fahaoid'];
 
	DelCard($cardid,$fahaoid,$logininid,$loginin);
	 
}
elseif($enews=="allDelCard")
{
	allDelCard($_POST,$logininid,$loginin);
}
else
{}
$page=(int)$_GET['page'];

$start=0;
$line=100;//每页显示条数
$page_line=25;//每页显示链接数
$offset=$page*$line;//总偏移量
$query="select * from {$dbtbpre}ecms_card_list";
$totalquery="select count(*) as total from {$dbtbpre}ecms_card_list";
//类别
$add="";
$fahaoid=(int)$_GET['fahaoid'];
if($fahaoid)
{
	$add=" where fahaoid=$fahaoid";
	$search="&fahaoid=$fahaoid".$ecms_hashur['ehref'];
}
$query.=$add;
$totalquery.=$add;
$num=$empire->gettotal($totalquery);//取得总条数
$query=$query." order by cardid desc limit $offset,$line";
$sql=$empire->query($query);
$returnpage=page2($num,$line,$page_line,$start,$page,$search);
$html = '';
if ($type == 'json') {
  
$html .= '<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">'; 
  $html .= '<tr class="header"> '; 
    $html .= '<td width="6%" height="25"> <div align="center">卡号ID</div></td>'; 
    $html .= '<td width="6%" height="25"> <div align="center">发号ID</div></td>'; 
    $html .= '<td width="20%" height="25"> <div align="center">卡号</div></td>'; 
    $html .= '<td width="11%" height="25"> <div align="center">开始时间</div></td>'; 
    $html .= '<td width="12%"><div align="center">结束时间</div></td>'; 
	$html .= '<td width="12%"><div align="center">领取人</div></td>'; 
	$html .= '<td width="12%"><div align="center">领取时间</div></td>'; 
    $html .= '<td width="10%" height="25"> <div align="center">状态</div></td>'; 
	$html .= '<td width="15%" height="25"> <div align="center">操作</div></td>'; 
  $html .= '</tr>';
 
  while($r=$empire->fetch($sql))
  { 
	  if($r[status])
	  {
          $status='<font color="red">已领卡</font>';
		  $carddate=$r['carddate'];
		  $r[cardname]!='' ? $cardname=$r[cardname] : $cardname="游客";
	  }
	  else
	  {
		  $status="未领卡";
		  $carddate='';
		  $cardname='';
	  } 
  $html .= '<tr bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor=\'#ffffff\'" onmouseover="this.style.backgroundColor=\'#C3EFFF\'">';
    $html .= '<td height="25"> <div align="center">'.$r[cardid].'</div></td>';
    $html .= '<td height="25"> <div align="center">'.$r[fahaoid].'</div></td>';
    $html .= '<td height="25"> <div align="center">'.$r[cardpass].'</div></td>';
    $html .= '<td height="25"> <div align="center">'.date("Y-m-d",$r[starttime]).'</div></td>';
    $html .= '<td><div align="center">'.date("Y-m-d",$r[endtime]).'</div></td>';
	$html .= '<td height="25"> <div align="center">'.$cardname.'</div></td>';
    $html .= '<td><div align="center">'.$carddate.'</div></td>';
	$html .= '<td><div align="center">'.$status.'</font></div></td>';
    $html .= '<td height="25"> <div align="center">[<a href="tool/AddCard.php?enews=EditCard&cardid='.$r[cardid].'&type=json&fahaoid='.$r[fahaoid].$ecms_hashur['ehref'].'">修改</a>]&nbsp;[<a href="tool/ListCard.php?enews=DelCard&type=json&cardid='.$r[cardid].'&fahaoid='.$r[fahaoid].$ecms_hashur['ehref'].'" onclick="return confirm(\'确认要删除？\');">删除</a>]</div></td>';
  $html .= '</tr>'; 
  } 
  $html .= '<tr bgcolor="#FFFFFF"> ';
    $html .= '<td height="25" colspan="9">&nbsp;&nbsp;&nbsp; ';
    $html .= $returnpage;
     $html .= '</td>';
   $html .= '</tr>';
   $html .= '<tr bgcolor="#FFFFFF"> ';  
   $html .= ' <td height="25" colspan="9">';
   $html .= '指定发号ID：<input type="text" name="fahaoid" value=""  size="5" />&nbsp;&nbsp;&nbsp; <a class="a-button" onclick="delone()" >删除</a>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;'; 
	$html .= '批量处理：开始卡号ID&nbsp;&nbsp; <input type="text" name="startcid" value="" size="5"/> - 结束ID&nbsp;&nbsp; <input type="text" name="endcid" value="" size="5" />&nbsp;&nbsp; &nbsp;&nbsp; ';
	$html .= '<a class="a-button" onclick="delall()">删除</a>';
    $html .= '</td>'; 
  $html .= '</tr>';
$html .= '</table>';
echo $html;
}else{


?> 

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
<title>管理游戏卡号</title>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td><div align="right" class="emenubutton">
        <input type="button" name="Submit5" value="返回上页" onclick="history.go(-1);">
      </div></td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header"> 
    <td width="6%" height="25"> <div align="center">卡号ID</div></td>
    <td width="6%" height="25"> <div align="center">发号ID</div></td>
    <td width="20%" height="25"> <div align="center">卡号</div></td>
    <td width="11%" height="25"> <div align="center">开始时间</div></td>
    <td width="12%"><div align="center">结束时间</div></td>
	<td width="12%"><div align="center">领取人</div></td>
	<td width="12%"><div align="center">领取时间</div></td>
    <td width="10%" height="25"> <div align="center">状态</div></td>
	<td width="15%" height="25"> <div align="center">操作</div></td>
  </tr>
  <?
  while($r=$empire->fetch($sql))
  {
	  if($r[status])
	  {
          $status='<font color="red">已领卡</font>';
		  $carddate=date('Y-m-d H:i:s',$r['carddate']);
		  $r[cardname]!='' ? $cardname=$r[cardname] : $cardname="游客";
	  }
	  else
	  {
		  $status="未领卡";
		  $carddate='';
		  $cardname='';
	  }
 ?>
  <tr bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#C3EFFF'">
    <td height="25"> <div align="center"><?=$r[cardid]?></div></td>
    <td height="25"> <div align="center"><?=$r[fahaoid]?></div></td>
    <td height="25"> <div align="center"><?=$r[cardpass]?></div></td>
    <td height="25"> <div align="center"><?=date('Y-m-d',$r[starttime])?></div></td>
    <td><div align="center"><?=date('Y-m-d',$r[endtime])?></div></td>
	<td height="25"> <div align="center"><?=$cardname?></div></td>
    <td><div align="center"><?=$carddate;?></div></td>
	<td><div align="center"><?=$status;?></font></div></td>
    <td height="25"> <div align="center">[<a href="AddCard.php?enews=EditCard&cardid=<?=$r[cardid]?>&fahaoid=<?=$fahaoid?><?=$ecms_hashur['ehref']?>">修改</a>]&nbsp;[<a href="ListCard.php?enews=DelCard&cardid=<?=$r[cardid]?>&fahaoid=<?=$r[fahaoid]?><?=$ecms_hashur['ehref']?>" onclick="return confirm('确认要删除？');">删除</a>]</div></td>
  </tr>
  <?
  }
  ?>
  <tr bgcolor="#FFFFFF"> 
    <td height="25" colspan="9">&nbsp;&nbsp;&nbsp; 
      <?=$returnpage?>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
   <form action=""  name="form1" method="post">
   <input name="enews" type="hidden" value="allDelCard" />
    <td height="25" colspan="9">
	指定ID：<input type="radio" name="delid" value="1" checked /><input type="text" name="fahaoid" value=""  size="5" />&nbsp;&nbsp;&nbsp; <input name="submit" type="submit" value="删除" />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
	批量处理：<input type="radio" name="delid" value="2"  />开始ID&nbsp;&nbsp; <input type="text" name="startcid" value="" size="5"/> - 结束ID&nbsp;&nbsp; <input type="text" name="endcid" value="" size="5" />&nbsp;&nbsp; &nbsp;&nbsp; 
	<input name="submit" type="submit" value="删除" />
    </td>
	</form>
  </tr>
</table>
</body>
</html>
<?
}
db_close();
$empire=null;
?>
