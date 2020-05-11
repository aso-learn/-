<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewsmemberadd`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewsmemberadd` (
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `oicq` varchar(25) NOT NULL DEFAULT '',
  `msn` varchar(120) NOT NULL DEFAULT '',
  `mycall` varchar(30) NOT NULL DEFAULT '',
  `phone` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zip` varchar(8) NOT NULL DEFAULT '',
  `spacestyleid` smallint(6) NOT NULL DEFAULT '0',
  `homepage` varchar(200) NOT NULL DEFAULT '',
  `saytext` text NOT NULL,
  `company` varchar(255) NOT NULL DEFAULT '',
  `fax` varchar(30) NOT NULL DEFAULT '',
  `userpic` varchar(200) NOT NULL DEFAULT '',
  `spacename` varchar(255) NOT NULL DEFAULT '',
  `spacegg` text NOT NULL,
  `viewstats` int(11) NOT NULL DEFAULT '0',
  `regip` varchar(20) NOT NULL DEFAULT '',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `regipport` varchar(6) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewsmemberadd` values('1','','','','','','','','1','','','','','','','','0',0x31342e3132372e38322e313639,'1561782271',0x3132302e3232392e31382e313532,'4',0x3535303638,0x3233323132);");
E_D("replace into `www_92fangzhan_com_enewsmemberadd` values('2','','','','','','','','1','','','','','','','','0',0x31342e3132372e38302e313334,'1532159644',0x31342e3132372e38302e313334,'2',0x3539353830,0x3635303236);");
E_D("replace into `www_92fangzhan_com_enewsmemberadd` values('3','','','','','','','','1','','','','','','','','0',0x31342e3132372e38312e323334,'1544853971',0x31342e3132372e38312e323334,'1',0x32373936,0x32373936);");

@include("../../inc/footer.php");
?>