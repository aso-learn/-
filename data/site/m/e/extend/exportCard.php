<?php
define('EmpireCMSAdmin','1');
require('../class/connect.php'); //
require('../class/db_sql.php'); //引入数据库操作文件
require("../class/functions.php");
require('../data/dbcache/class.php'); //引入栏目缓存文件
require("../member/class/user.php");
require LoadLang("pub/fun.php");

$link=db_connect(); //连接MYSQL
$empire=new mysqlquery(); //声明数据库操作类
$lur=is_login();
$logininid=$lur['userid'];
$loginin=$lur['username'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];
//ehash
$ecms_hashur=hReturnEcmsHashStrAll();

//$droot=dirname(__FILE__)."/";//网站根目录ECMS_PATH
$droot=ECMS_PATH;//网站根目录

$user=qCheckLoginAuthstr();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>点卡导出</title>
<link href="adminstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td>位置：点卡导出</td>
  </tr>
</table>
<form action="" method="get">
<input name="pic" type="hidden" value="show" /><?=$ecms_hashur['eform']?>
 <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
    <tr bgcolor="#FFFFFF"> 
      <td width="20%" height="25">全部：</td>
      <td width="80%" height="25"><input name="allno" type="radio" value="0" checked="checked" />全部</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">部分：</td>
      <td height="25"><input name="allno" type="radio" value="1" />从ID<input name="idfrist" type="text" />到<input name="idlast" type="text" /></td>
    </tr>

    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25"><input type="submit" value="确定" />
      </td>
    </tr>
  </table>
</form>
<?php
$result="";
if($_GET[pic]=="show"){
	$txtfile=$_GET[txtfile];
	if($_GET[allno]==1){
	$sql=$empire->query("select * from {$dbtbpre}enewscard where cardid>='$_GET[idfrist]' and cardid<='$_GET[idlast]' order by cardid desc"); 	
		}else{
$sql=$empire->query("select * from {$dbtbpre}enewscard order by cardid desc"); 
}
echo "92KaiFa.Com提示：帐号和密码<br><br><br>";
while($r=$empire->fetch($sql))        
                { //
			
	
echo $r[card_no]." ".$r[password]."<br>";

}	
	
					
//echo "导出完成,txt路径".$droot.$txtfile;
}



	



db_close(); //关闭MYSQL链接
$empire=null; //注消操作类变量
?></body>
</html>