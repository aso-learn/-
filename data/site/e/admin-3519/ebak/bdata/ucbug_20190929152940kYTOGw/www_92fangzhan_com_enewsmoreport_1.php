<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewsmoreport`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewsmoreport` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` char(60) NOT NULL DEFAULT '',
  `purl` char(255) NOT NULL DEFAULT '',
  `ppath` char(255) NOT NULL DEFAULT '',
  `postpass` char(120) NOT NULL DEFAULT '',
  `postfile` char(255) NOT NULL DEFAULT '',
  `tempgid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `mustdt` tinyint(1) NOT NULL DEFAULT '0',
  `isclose` tinyint(1) NOT NULL DEFAULT '0',
  `closeadd` tinyint(1) NOT NULL DEFAULT '0',
  `headersign` char(255) NOT NULL DEFAULT '',
  `openadmin` tinyint(1) NOT NULL DEFAULT '0',
  `rehtml` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pid`),
  KEY `isclose` (`isclose`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewsmoreport` values('1',0xe4b8bbe8aebfe997aee7abaf,0x2f,0x443a2f777777726f6f742f75636275672f777777726f6f742f,0x42774848676b614648544d5a383854635a4e4b30597845643058567432743866736f52374e6466796252637043776243596c4c453349534a774d3777,'','0','0','0','0','','0','3');");
E_D("replace into `www_92fangzhan_com_enewsmoreport` values('2',0x574150e7abaf,0x687474703a2f2f6d2e75636275672e7a6a2e393266616e677a68616e2e6e65742f,0x443a2f777777726f6f742f75636275672f777777726f6f742f6d2f,0x6e6e655950393059494f63385051534f534563706b32446c6459786d63617473313652376868545a746f427469676f3441706e515378496b4a714750,'','2','0','0','1','','0','0');");

@include("../../inc/footer.php");
?>