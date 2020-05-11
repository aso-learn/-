<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewsfeedback`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewsfeedback` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `title` varchar(120) NOT NULL DEFAULT '',
  `saytext` text NOT NULL,
  `email` varchar(80) NOT NULL DEFAULT '',
  `mycall` varchar(30) NOT NULL DEFAULT '',
  `homepage` varchar(160) NOT NULL DEFAULT '',
  `company` varchar(80) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `saytime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `job` varchar(36) NOT NULL DEFAULT '',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `filepath` varchar(20) NOT NULL DEFAULT '',
  `filename` text NOT NULL,
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `haveread` tinyint(1) NOT NULL DEFAULT '0',
  `eipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `bid` (`bid`),
  KEY `haveread` (`haveread`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewsfeedback` values('1','1',0x61736461,0x7177657177,0x7177657177,0x7171776571,'',0x71776571,'','2019-08-19 14:48:31','',0x3132372e302e302e31,'','','0','','0',0x3632343338);");
E_D("replace into `www_92fangzhan_com_enewsfeedback` values('2','1',0x7177716577,'','','','','','','2019-08-19 14:50:03','',0x3132372e302e302e31,'','','0','','0',0x3632373836);");

@include("../../inc/footer.php");
?>