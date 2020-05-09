<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>信息提示</title>
<style>
body{color: #999;font-family: 'Microsoft Yahei';text-align: center;margin: 0;padding: 0;}
h1{font-size: 140px;margin: 0 0 20px;padding: 10px 0;background-color: #FF4F4F;color: #fff;font-weight: normal;padding-top: 200px;}
h2{font-size: 32px;margin: 0 0 10px;font-weight: normal;}
h3{font-size: 25px;margin: 0 0 40px;font-weight: normal;}
a{font-size: 14px;color: #fff;background-color: #00AAEF;display: inline-block;padding: 10px 20px;border-radius: 2px;text-decoration: none;}
a:hover{color: #fff;background-color: #049FDE;}
@media (max-width: 600px) {
	h1{padding-top: 100px;font-size: 120px;}
}
</style>
<?php
if(!$noautourl)
{
?>
<SCRIPT language=javascript>
var secs=3;//3秒
for(i=1;i<=secs;i++) 
{ window.setTimeout("update(" + i + ")", i * 1000);} 
function update(num) 
{ 
if(num == secs) 
{ <?=$gotourl_js?>; } 
else 
{ } 
}
</SCRIPT>
<?
}
?>
</head>
<body>

<h1>信息提示</h1>
<!--<h2>出错啦</h2> -->
<h2><?=$error?></h2>
<a href="<?=$gotourl?>">如果您的浏览器没有自动跳转，请点击这里</a>

</body>
</html>