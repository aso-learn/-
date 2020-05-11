<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewsuseradd`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewsuseradd` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `equestion` tinyint(4) NOT NULL DEFAULT '0',
  `eanswer` varchar(32) NOT NULL DEFAULT '',
  `openip` text NOT NULL,
  `certkey` varchar(60) NOT NULL DEFAULT '',
  `certtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewsuseradd` values('7','0','','','','0');");
E_D("replace into `www_92fangzhan_com_enewsuseradd` values('8','0','','','','0');");
E_D("replace into `www_92fangzhan_com_enewsuseradd` values('9','0','','','','0');");
E_D("replace into `www_92fangzhan_com_enewsuseradd` values('10','0','','','','0');");

@include("../../inc/footer.php");
?>