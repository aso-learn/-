<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewstempgroup`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewstempgroup` (
  `gid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `gname` varchar(60) NOT NULL DEFAULT '',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewstempgroup` values('1',0x5043e6a8a1e69dbfe7bb84,'1');");
E_D("replace into `www_92fangzhan_com_enewstempgroup` values('2',0x574150e6a8a1e69dbfe7bb84,'0');");

@include("../../inc/footer.php");
?>