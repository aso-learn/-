<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewsloginfail`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewsloginfail` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `num` tinyint(4) NOT NULL DEFAULT '0',
  `lasttime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewsloginfail` values(0x3132352e37392e3231362e3231,'1','1560940964');");

@include("../../inc/footer.php");
?>