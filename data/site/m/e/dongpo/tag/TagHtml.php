<?
$stime=microtime(true);
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

$navclass='';
$ccsql=$empire->query("select classname,classid from {$dbtbpre}enewstagsclass");
while($ccr=$empire->fetch($ccsql)){
	$navclass.='<option value="'.$ccr[classid].'">'.$ccr[classname].'</option>';
}

//页面标题
$thispage='TAG相关刷新';
//导航
$url='<a href="ListTags.php'.$ecms_hashur['whehref'].'">TAGS管理</a> -> '.$thispage;
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
<form action="do.php" method="get" name="form1" target="_blank" onsubmit="return confirm('确认要更新?');">
  <?=$ecms_hashur['form']?>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder" id="42">
    <tr class="header"> 
      <td height="25" colspan=2> <div align="center">1. 批量生成TAG页</div></td>
    </tr>
	<tr  bgcolor="#FFFFFF"> 
      <td height="25">分类</td>
      <td height="25">
	    <select name="classid">
		<option value="0">全部TAG</option>
          <option value="-1">已分类的TAG</option>
		  <option value="-2">未分类的TAG</option>
          <?=$navclass?>
        </select>
      </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">按TagID更新：</td>
      <td height="25">从 <input name="startid" type="text" value="0" size="6">
         到 <input name="endid" type="text" value="0" size="6">
          之间的tag <font color="#666666">(两个值为0将更新所有tag)</font>
      </td>
    </tr>
	<tr  bgcolor="#FFFFFF"> 
      <td height="25">每组刷新数</td>
      <td height="25">
	    <input name="zu" type="text" value="50" size="10">
      </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25">
	    <input type="submit" name="Submit62" value="开始生成"> 
        <input type="reset" name="Submit72" value="重置"> 
        <input name="enews" type="hidden" value="ReAllTag"> 
      </td>
    </tr>
  </table>
</form>


<form action="do.php" method="get" name="form1" target="_blank" onsubmit="return confirm('确认要更新?');">
  <?=$ecms_hashur['form']?>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder" id="43">
    <tr class="header"> 
      <td height="25" colspan=2> <div align="center">2. 批量整理TAG信息</div></td>
    </tr>
	<tr  bgcolor="#FFFFFF"> 
      <td height="25">分类</td>
      <td height="25">
	    <select name="classid">
          <option value="0">所有分类</option>
          <?=$navclass?>
        </select>
      </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">按TagID整理：</td>
      <td height="25">从 <input name="startid" type="text" value="0" size="6">
         到 <input name="endid" type="text" value="0" size="6">
          之间的tag <font color="#666666">(两个值为0将整理所有tag)</font>
      </td>
    </tr>
	<tr  bgcolor="#FFFFFF"> 
      <td height="25">每组整理数</td>
      <td height="25">
	    <input name="zu" type="text" value="50" size="10">
      </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25">
	    <input type="submit" name="Submit62" value="开始整理"> 
        <input type="reset" name="Submit72" value="重置"> 
        <input name="enews" type="hidden" value="zhengliall"> 
      </td>
    </tr>
  </table>
</form>
<form action="do.php" method="get" name="form1" target="_blank" onsubmit="return confirm('确认要更新?');">
  <?=$ecms_hashur['form']?>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder" id="43">
    <tr class="header"> 
      <td height="25" colspan=2> <div align="center">3. 同步TAG与关键词</div></td>
    </tr>
    <tr  bgcolor="#FFFFFF"> 
      <td height="25">分类</td>
      <td height="25">
	    <select name="classid">
          <option value="0">所有分类</option>
          <?=$navclass?>
        </select>
      </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">按TagID检查：</td>
      <td height="25">从 <input name="startid" type="text" value="0" size="6">
         到 <input name="endid" type="text" value="0" size="6">
          之间的tag <font color="#666666">(两个值为0将检查所有tag)</font>
      </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25">
	    <input type="submit" name="Submit62" value="开始同步"> 
        <input type="reset" name="Submit72" value="重置"> 
        <input name="enews" type="hidden" value="tongbu"> 
      </td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="25" colspan=2><b>注意事项：</b>替换的关键词太多会导致生成文章缓慢，tag较多时请慎用此功能！</td>
    </tr>
  </table>
</form>

</body>
</html>