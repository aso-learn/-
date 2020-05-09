<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
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
$ecms_hashur=hReturnEcmsHashStrAll();

$enews=$_GET['enews'];
$url="<a href='ListCard.php'>管理游戏卡号</a>  &gt; 增加游戏卡号";
if($enews=="EditCard")
{
	$cardid=(int)$_GET['cardid'];
	$r=$empire->fetch1("select * from {$dbtbpre}ecms_card_list where cardid='$cardid'");
	$starttime=date('Y-m-d',$r['starttime']);
	$endtime=date('Y-m-d',$r['endtime']);
	$url="<a href='ListLink.php'>管理游戏卡号</a>  &gt; 修改游戏卡号：<b>".$r[lname]."</b>";
}
//分类
$cstr="";
$title="";
$csql=$empire->query("select id,title from {$dbtbpre}ecms_cards order by id desc limit 50");
while($cr=$empire->fetch($csql))
{
	$select="";
	if($cr[id]==$r[fahaoid])
	{
		$select=" selected";
		if($enews=='EditCard'){$title=$cr[title];}
	}
	
	$cstr.="<option value='".$cr[id]."'".$select.">".$cr[title]."</option>";
}
db_close();
$empire=null;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
<script src="/style/js/time.js" type="text/javascript"></script>
<title>修改单条卡号信息</title>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td><div align="right" class="emenubutton">
        <input type="button" name="Submit5" value="返回卡号列表" onclick="history.go(-1);">
      </div></td>
  </tr>
</table>
<form name="form1" method="post" action="ListCard.php">
<?=$ecms_hashur['eform']?>
<input name="enews" type="hidden" id="enews" value="<?=$enews?>" />
<input name="cardid" type="hidden" id="cardid" value="<?=$cardid?>">
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
    <tr class="header"> 
      <td height="25" colspan="2">修改游戏卡号 </td>
    </tr>
   <tr bgcolor="#FFFFFF"> 
      <td height="25"  align="right">发号标题：&nbsp;&nbsp;</td>
      <td height="25"><b><?=$title;?></b></td>
    </tr>
 <tr bgcolor="#FFFFFF"> 
      <td width="15%" height="25" align="right">使用时间：&nbsp;&nbsp;</td>
      <td width="85%" height="25"> 
	  开始：
	   <input type="text" name="starttime" value="<?=$starttime;?>" size="17" onclick="fPopCalendar(event,this,this)" onfocus="this.select()" readonly="readonly" />
	   &nbsp;&nbsp;&nbsp;&nbsp;结束：
	    <input type="text" name="endtime" value="<?=$endtime;?>" size="17" onclick="fPopCalendar(event,this,this)" onfocus="this.select()" readonly="readonly" />
       </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25"  align="right">号码信息：&nbsp;&nbsp; </td>
      <td height="25"><input name="cardpass" type="text" value="<?=htmlspecialchars($r[cardpass])?>" size="60" /></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25"> <input type="submit" name="Submit" id="submit" value="提交"> <input type="reset" name="Submit2" value="重置"></td>
    </tr>
  </table>
</form>
</body>
</html>