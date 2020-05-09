<?php
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../class/user.php");
require("../class/member_registerfun.php");
$link=db_connect();
$empire=new mysqlquery();
$groupid=1;
CheckMemberGroupCanReg($groupid);
if(getcvar('mluserid'))
{
    printerror("LoginToRegister","history.go(-1)",1);
}
require(ECMS_PATH.'e/template/member/phoneRegister.php');
db_close();
$empire=null;
?>