<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewscard`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewscard` (
  `cardid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `card_no` char(30) NOT NULL DEFAULT '',
  `password` char(20) NOT NULL DEFAULT '',
  `money` int(10) unsigned NOT NULL DEFAULT '0',
  `cardfen` int(10) unsigned NOT NULL DEFAULT '0',
  `endtime` date NOT NULL DEFAULT '0000-00-00',
  `cardtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `carddate` int(10) unsigned NOT NULL DEFAULT '0',
  `cdgroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `cdzgroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cardid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewscard` values('1',0x31353431353734373739,0x303734383435,'10','0','0000-00-00','2018-11-07 15:13:02','0','0','0');");

@include("../../inc/footer.php");
?>