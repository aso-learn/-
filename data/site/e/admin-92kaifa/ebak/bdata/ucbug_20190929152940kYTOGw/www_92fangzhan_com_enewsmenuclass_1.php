<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewsmenuclass`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewsmenuclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `classname` varchar(60) NOT NULL DEFAULT '',
  `issys` tinyint(1) NOT NULL DEFAULT '0',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtype` tinyint(1) NOT NULL DEFAULT '0',
  `groupids` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`),
  KEY `myorder` (`myorder`),
  KEY `classtype` (`classtype`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewsmenuclass` values('7',0xe782b9e58da1e68f92e4bbb6,'0','0','2','');");
E_D("replace into `www_92fangzhan_com_enewsmenuclass` values('8',0xe7bc93e5ad98e68f92e4bbb6,'0','0','2','');");
E_D("replace into `www_92fangzhan_com_enewsmenuclass` values('9',0x544147e99d99e68081e58c96e68f92e4bbb6,'0','0','2','');");
E_D("replace into `www_92fangzhan_com_enewsmenuclass` values('10',0xe7a7bbe58aa8e7abafe5908ce6ada5e7949fe68890,'0','0','2','');");

@include("../../inc/footer.php");
?>