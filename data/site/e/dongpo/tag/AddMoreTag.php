<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
require("dp_funs.php");
$link=db_connect();
$empire=new mysqlquery();
$ecms_hashur=hReturnDPHashStrAll();

//列表模板
$listtemp_options='';
$mod_options='';
$msql=$empire->query("select mid,mname from {$dbtbpre}enewsmod order by myorder,mid");
while($mr=$empire->fetch($msql))
{
	$listtemp_options.="<option value=0 style='background:#99C4E3'>".$mr[mname]."</option>";
	$l_sql=$empire->query("select tempid,tempname from ".GetTemptb("enewslisttemp")." where modid='$mr[mid]'");
	while($l_r=$empire->fetch($l_sql))
	{
		$listtemp_options.="<option value=".$l_r[tempid]."> |-".$l_r[tempname]."</option>";
	}
}

$navclass='';
$ccsql=$empire->query("select classname,classid from {$dbtbpre}enewstagsclass");
while($ccr=$empire->fetch($ccsql)){
	$sl='';
	if($ccr[classid]==$r[cid]){
		$sl=' selected';
	}
	$navclass.='<option value="'.$ccr[classid].'" '.$sl.'>'.$ccr[classname].'</option>';
}

//页面标题
$thispage='批量增加TAG';
//导航
$url='<a href="ListTags.php'.$ecms_hashur['whehref'].'">TAGS管理</a>  -> 批量增加TAG';

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=$pagechar?>">
<link href="../../data/images/qcss.css" rel="stylesheet" type="text/css">
<title><?=$thispage?></title>
<style type="text/css">
form{margin:0;padding:0}	
</style>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td>当前位置：<?=$url?></td>
  </tr>
</table>
<form name="form1" method="post" action="do.php">
  <?=$ecms_hashur['form']?>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
    <tr class="header"> 
      <td height="25" colspan="2">批量增加TAG 
        <input name="enews" type="hidden" id="enews" value="addmoretag"> 
	  </td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width="18%" height="25" valign=top>TAG名称:</td>
      <td width="82%" height="25"> 
	    <textarea name="morename" rows="20" cols="60"></textarea>
		<br>
		<span style="color:#666">一行一个tag名，回车换行，每次最多不超过1000行</span>
      </td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width="18%" height="25">推荐等级:</td>
      <td width="82%" height="25"> <input name="isgood" type="text" id="isgood" value="0" size="8">  (0~127)    </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td width="18%" height="25">所属分类:</td>
      <td width="82%" height="25">
	    <select name="classid">
		  <option value="0">未选择分类</option>
		  <?=$navclass?>
		</select>
      </td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width="20%" height="25">tag模板</td>
      <td width="80%" height="25"><select name="tempid" id="tempid">
			<option value=0>--不设置--</option>
          <?=$listtemp_options?>
        </select></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25"> <input type="submit" name="Submit" value="提交"> <input type="reset" name="Submit2" value="重置"></td>
    </tr>
  </table>
</form>
</body>
</html>
<?
db_close();
$empire=null;
?>