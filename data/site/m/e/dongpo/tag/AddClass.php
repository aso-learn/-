<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
require("dp_funs.php");
$link=db_connect();
$empire=new mysqlquery();
$ecms_hashur=hReturnDPHashStrAll();

$enews=$_GET['enews'];
$postword='增加';

//修改
if($enews=="editclass")
{
	$postword='修改';
	$classid=(int)$_GET['classid'];
	$r=$empire->fetch1("select * from {$dbtbpre}enewstagsclass where classid='$classid'");
	$cadd=$empire->fetch1("select * from {$dbtbpre}enewstagsclassadd where classid='$classid'");
}

//列表模板
$listtemp_options='';
$msql=$empire->query("select mid,mname from {$dbtbpre}enewsmod order by myorder,mid");
while($mr=$empire->fetch($msql)){
	$listtemp_options.="<option value=0 style='background:#99C4E3'>".$mr[mname]."</option>";
	$l_sql=$empire->query("select tempid,tempname from ".GetTemptb("enewslisttemp")." where modid='$mr[mid]'");
	while($l_r=$empire->fetch($l_sql))
	{
		if($l_r[tempid]==$cadd[tempid])
		{$l_d=" selected";}
		else
		{$l_d="";}
		$listtemp_options.="<option value=".$l_r[tempid].$l_d."> |-".$l_r[tempname]."</option>";
	}
}

//栏目
$options=ShowClass_AddClass("",$cadd[modid],0,"|-",0,0);

//页面标题
$thispage=$postword.'TAGS分类';
//导航
$url='<a href="ListTags.php'.$ecms_hashur['whehref'].'">TAG管理</a> -> <a href="ListClass.php'.$ecms_hashur['whehref'].'">分类管理</a> -> '.$thispage;

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
    <td>当前位置：<?=$url?></td>
  </tr>
</table>
<form name="form1" method="post" action="do.php">
  <?=$ecms_hashur['form']?>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
    <tr class="header"> 
      <td height="25" colspan="2"><?=$thispage?> 
        <input name="enews" type="hidden" id="enews" value="<?=$enews?>">
		<input name="classid" type="hidden" id="classid" value="<?=$classid?>">
      </td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width="18%" height="25">分类名称:</td>
      <td width="82%" height="25"> <input name="classname" type="text" id="classname" value="<?=$r[classname]?>"  style="width:200px;"> 
      </td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width="18%" height="25">默认目录:</td>
      <td width="82%" height="25"> 根目录/tag/
	    <input name="path" type="text" id="path" value="<?=$cadd[path]?>" size="20">

	  </td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width="18%" height="25">默认tag模板:</td>
      <td width="82%" height="25">
	  <select name="tempid" id="tempid" style="width:200px;">
		  <option value=0 selected>--不设置--</option>
          <?=$listtemp_options?>
        </select>
	  </td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width="18%" height="25">绑定栏目:</td>
      <td width="82%" height="25">
	  <select name="modid" id="modid" style="width:200px;">
          <option value="0">不绑定栏目</option>
          <?=$options?>
        </select>
	  </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25"> <input type="submit" name="Submit" value="提交"> <input type="reset" name="Submit2" value="重置"></td>
    </tr>
  </table>
</form>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
    <tr class="header"> 
      <td height="25">说明</td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="25"><b>绑定栏目</b>:绑定栏目后，方便在目标栏目调用此分类下的tag</td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="25"><b>默认目录</b>:可以不用设定。设定默认目录后，此分类下的tag将生成在此目录下，目录中不得包含斜杠"/"</td>
    </tr>
  </table>

</body>
</html>
<?
db_close();
$empire=null;
?>