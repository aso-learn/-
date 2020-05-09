<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewsmember`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewsmember` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `rnd` char(20) NOT NULL DEFAULT '',
  `email` char(50) NOT NULL DEFAULT '',
  `registertime` int(10) unsigned NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `userdate` int(10) unsigned NOT NULL DEFAULT '0',
  `money` float(11,2) NOT NULL DEFAULT '0.00',
  `zgroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `havemsg` tinyint(1) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `salt` char(8) NOT NULL DEFAULT '',
  `userkey` char(12) NOT NULL DEFAULT '',
  `ingid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `agid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isern` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  KEY `groupid` (`groupid`),
  KEY `ingid` (`ingid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewsmember` values('1',0x373733303930,0x6665333430623536653235633034353335396566613434666330623333633164,0x766b707a4570666b614951314c53655134626b74,0x3737333039304071712e636f6d,'1528768010','1','0','0','0.00','0','0','1',0x6f4862577655,0x5072456b4b7a505975415a48,'0','0','0');");
E_D("replace into `www_92fangzhan_com_enewsmember` values('2',0xe4ba8ce6a1a5,0x3366376333613436323562313537666430326365643037633932626637343737,0x4b49414e57445738424d344868537937656e546e,0x3939353939393435334071712e636f6d,'1532140998','1','0','0','0.00','0','0','1',0x42484974636e,0x35574c55456d305048465439,'0','0','0');");
E_D("replace into `www_92fangzhan_com_enewsmember` values('3',0x313131313131,0x3331396236646232386262616432636439623239346435303062636161396461,0x376f41506e7a6b78666447556f6d6e6962337673,0x3131313131314071712e636f6d,'1544853971','1','0','0','0.00','0','0','1',0x6c3077723342,0x59766146796c36734b724130,'0','0','0');");

@include("../../inc/footer.php");
?>