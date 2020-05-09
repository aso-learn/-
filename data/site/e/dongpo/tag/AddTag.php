<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
require("dp_funs.php");
$link=db_connect();
$empire=new mysqlquery();
$ecms_hashur=hReturnDPHashStrAll(1);

$enews=$_GET['enews'];
$postword='增加';
$r[isgood]=0;

//导航
$url='<a href="ListTags.php'.$ecms_hashur['whehref'].'">TAGS管理</a>  -> '.$postword.'TAG';

//修改
if($enews=="edittag")
{
	$postword='修改';
	$tagid=(int)$_GET['tagid'];
	$r=$empire->fetch1("select * from {$dbtbpre}enewstags where tagid='$tagid'");
	$add=$empire->fetch1("select * from {$dbtbpre}enewstagsadd where tagid='$tagid'");
	$addr=$add;
	//导航
	$url='<a href="ListTags.php'.$ecms_hashur['whehref'].'">TAGS管理</a> -> <a href="ListTagInfo.php?tagid='.$tagid.$ecms_hashur['ehref'].'">'.$r['tagname'].'</a> -> '.$postword.'TAG';
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
		if($l_r[tempid]==$add[tempid])
		{$l_d=" selected";}
		else
		{$l_d="";}
		$listtemp_options.="<option value=".$l_r[tempid].$l_d."> |-".$l_r[tempname]."</option>";
	}
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=$pagechar?>">
<link href="../../data/images/qcss.css" rel="stylesheet" type="text/css">
<title><?=$postword?>TAG</title>
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
      <td height="25" colspan="2"><?=$postword?>TAG 
        <input name="enews" type="hidden" id="enews" value="<?=$enews?>"> 
		<input name="tagid" type="hidden" id="tagid" value="<?=$tagid?>">
        <input name="oldpy" type="hidden" id="oldpy" value="<?=$add['py']?>">
		<input name="oldcid" type="hidden" id="oldcid" value="<?=$r['cid']?>"> 
	  </td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width="18%" height="25">TAG名称:</td>
      <td width="82%" height="25"> <input name="tagname" type="text" id="tagname" value="<?=$r['tagname']?>" size="40"> 
      </td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width="18%" height="25">TAG别称:</td>
      <td width="82%" height="25"> <input name="bname" type="text" id="bname" value="<?=$add['bname']?>" size="40"></td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width="18%" height="25">文件目录名:</td>
      <td width="82%" height="25"> 
	    <input name="py" type="text" id="py" value="<?=$add['py']?>" size="20">
	  </td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width="18%" height="25">推荐等级:</td>
      <td width="82%" height="25"> <input name="isgood" type="text" id="isgood" value="<?=$r['isgood']?>" size="8">  (0~127)    </td>
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
      <td width="20%" height="25">本tag模板</td>
      <td width="80%" height="25"><select name="tempid" id="tempid">
			<option value=0>--不设置--</option>
          <?=$listtemp_options?>
        </select></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">TAG简介:</td>
      <td height="25">
	  <textarea name="intro" cols="80" rows="10" id="intro"><?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($add['intro']))?></textarea>
	 </td>
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