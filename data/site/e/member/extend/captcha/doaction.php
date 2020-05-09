<?php
require('../../../class/connect.php');
require('../../../class/db_sql.php');
require('../../class/user.php');
require('../../../data/dbcache/MemberLevel.php');
require('../../../data/language/gb/pub/fun.php');

$link=db_connect();
$empire=new mysqlquery();
$enews=$_REQUEST['enews'];
if ($enews == 'Login' || $enews == 'Register' || $enews == 'phone' || $enews == 'getpassword'){
    include('fun_send.php');
    require('../../aliyunphone/api_demo/SmsDemo.php');
}


if ($enews == 'Register'||$enews == 'Login' || $enews == 'phone' || $enews == 'getpassword'){ //手机验证码
    aliYun($_REQUEST);
}

else{printerror("ErrorUrl","history.go(-1)",1);}
db_close();
$empire=null;

