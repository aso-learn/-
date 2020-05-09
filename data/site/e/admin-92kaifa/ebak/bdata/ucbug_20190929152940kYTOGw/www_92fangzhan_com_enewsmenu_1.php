<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewsmenu`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewsmenu` (
  `menuid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menuname` varchar(60) NOT NULL DEFAULT '',
  `menuurl` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `addhash` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`menuid`),
  KEY `myorder` (`myorder`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewsmenu` values('7',0xe782b9e58da1e5afbce587ba,0x2f652f657874656e642f6578706f7274436172642e706870,'0','7','0');");
E_D("replace into `www_92fangzhan_com_enewsmenu` values('8',0xe7bc93e5ad98e68f92e4bbb6283932e4bc98e58c96e7898829,0x2f652f657874656e642f636163686561646d696e2f,'0','8','0');");
E_D("replace into `www_92fangzhan_com_enewsmenu` values('9',0x544147e7aea1e7908620,0x2e2e2f646f6e67706f2f7461672f4c697374546167732e706870,'1','9','1');");
E_D("replace into `www_92fangzhan_com_enewsmenu` values('10',0x544147e58886e7b1bb20,0x2e2e2f646f6e67706f2f7461672f4c697374436c6173732e706870,'2','9','1');");
E_D("replace into `www_92fangzhan_com_enewsmenu` values('11',0x544147e69bb4e696b020,0x2e2e2f646f6e67706f2f7461672f54616748746d6c2e706870,'3','9','1');");
E_D("replace into `www_92fangzhan_com_enewsmenu` values('12',0xe58f82e695b0e8aebee7bdae,0x2e2e2f646f6e67706f2f7461672f7365742e706870,'4','9','1');");
E_D("replace into `www_92fangzhan_com_enewsmenu` values('13',0xe58f82e695b0e8aebee7bdae,0x2e2e2f646f6e67706f2f6d6f622f7365742e706870,'1','10','1');");

@include("../../inc/footer.php");
?>