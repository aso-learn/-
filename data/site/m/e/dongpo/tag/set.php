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
$msql=$empire->query("select mid,mname from {$dbtbpre}enewsmod order by myorder,mid");
while($mr=$empire->fetch($msql))
{
	$listtemp_options.="<option value=0 style='background:#99C4E3'>".$mr[mname]."</option>";
	$l_sql=$empire->query("select tempid,tempname from ".GetTemptb("enewslisttemp")." where modid='$mr[mid]'");
	while($l_r=$empire->fetch($l_sql))
	{
		if($l_r[tempid]==$dp_r[tagstempid])
		{$l_d=" selected";}
		else
		{$l_d="";}
		$listtemp_options.="<option value=".$l_r[tempid].$l_d."> |-".$l_r[tempname]."</option>";
	}
}
//当前使用的模板组
$thegid=GetDoTempGid();

//页面标题
$thispage='参数设置';
//导航
$url='<a href="ListTags.php'.$ecms_hashur['whehref'].'">TAG管理</a> -> <a href="set.php'.$ecms_hashur['whehref'].'">'.$thispage.'</a>';
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
    <td height="25">当前位置：<?=$url?></td>
  </tr>
</table>
<form name="form1" method="post" action="do.php">
  <input name="enews" type="hidden" id="enews" value="setextend">
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
	<?=$ecms_hashur['form']?>
	<tr class="header"> 
      <td height="25" colspan="2"> 插件设置 
      </td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width=18%>TAG静态页存放文件夹</td>
      <td height="35"><input type="text" name="path" value="<?=$dp_r['path']?>" size=30> <span style="color:#666">（网站根目录下的文件夹）</span></td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width=18%>TAG静态目录类型</td>
      <td height="35"><input type="radio" name="pt" value=0 <?=$dp_r['pt']==0?'checked':''?>>自动生成拼音目录 &nbsp; <input type="radio" value=1 name="pt" <?=$dp_r['pt']==1?'checked':''?>>以TAGID为目录</td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="25">TAG静态页默认模板</td>
      <td height="25"><select name="tagstempid" id="tagstempid">
          <?=$listtemp_options?>
        </select></td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width=18%>生成TAG每页显示</td>
      <td height="35"><input type="text" name="tagslistnum" value="<?=$dp_r['tagslistnum']?>" size=30> 条记录</td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width=18%>显示总记录数</td>
      <td height="35"><input type="text" name="maxnum" value="<?=$dp_r['maxnum']?>" size=30> 条 <span style="color:#666">(0为显示所有记录)</span></td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width=18%>生成静态页数</td>
      <td height="35"><input type="text" name="repagenum" value="<?=$dp_r['repagenum']?>" size=30> 页 <span style="color:#666">(超过分页不生成，0为不限)</span></td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width=18%>TAG管理每页显示</td>
      <td height="35"><input type="text" name="pagenum" value="<?=$dp_r['pagenum']?>" size=30> 条记录</td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width=18%>数据更新每组间隔</td>
      <td height="35"><input type="text" name="time" value="<?=$dp_r['time']?>" size=30> 秒</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="35">&nbsp;</td>
      <td height="35"> <input type="submit" name="Submit" value="提交"></td>
    </tr>
  </table>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
<tr bgcolor="#ffffff">
	<td height="25">注意：请将 /e/dongpo/<?=$extend_r['path']?>/config.php 文件设置为 0777权限(Linux系统) 或 可读写权限(Win系统)，否则此设置将不能生效。</td>
</tr>
</table>
</form>
</body>
</html>
<?
db_close();
$empire=null;
?>