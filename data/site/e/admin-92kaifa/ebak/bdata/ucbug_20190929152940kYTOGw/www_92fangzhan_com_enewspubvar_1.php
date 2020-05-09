<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewspubvar`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewspubvar` (
  `varid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(20) NOT NULL DEFAULT '',
  `varvalue` text NOT NULL,
  `varsay` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tocache` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  UNIQUE KEY `varname` (`varname`),
  KEY `classid` (`classid`),
  KEY `tocache` (`tocache`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewspubvar` values('1',0x7777775f39326b616966615f636f6d5f696d67,0xe59bbee78987e69c8de58aa1e599a8e59f9fe5908d,0x687474703a2f2f75636275672e7a6a2e393266616e677a68616e2e6e6574,'','0','0','1');");
E_D("replace into `www_92fangzhan_com_enewspubvar` values('2',0x7777775f39326b616966615f636f6d5f6b6f6e67,0xe7a9bae5a4b4e59f9fe5908d,0x75636275672e7a6a2e393266616e677a68616e2e6e6574,'','0','0','1');");
E_D("replace into `www_92fangzhan_com_enewspubvar` values('3',0x7777775f39326b616966615f636f6d5f77656e7469,0xe5b8b8e8a781e997aee9a298,'','','1','0','1');");
E_D("replace into `www_92fangzhan_com_enewspubvar` values('4',0x7777775f39326b616966615f636f6d5f6269616f7975,0xe6a087e9a298e6a087e8afad,0x7563627567e8bdafe4bbb6e7ab99,'','0','0','1');");
E_D("replace into `www_92fangzhan_com_enewspubvar` values('5',0x7777775f39326b616966615f636f6d5f6269616f797573,0xe5a4b4e983a8e6a087e8afad,0x7563627567e8bdafe4bbb6e7ab99efbc9ae5ae89e585a8e38081e7bbbfe889b2e38081e694bee5bf83e79a84e4b893e4b89ae4b88be8bdbde7ab99efbc81,'','0','0','1');");
E_D("replace into `www_92fangzhan_com_enewspubvar` values('6',0x7777775f39326b616966615f636f6d5f6c61697975616e,0xe69687e7aba0e58685e5aeb92ce69da5e6ba90,0x7777772e787878782e636f6d,'','0','0','1');");
E_D("replace into `www_92fangzhan_com_enewspubvar` values('7',0x7777775f39326b616966615f636f6d5f6777,0xe8bdafe4bbb6e5ae98e7bd91,0x687474703a2f2f7777772e7169796574776f2e636f6d,'','0','0','1');");
E_D("replace into `www_92fangzhan_com_enewspubvar` values('8',0x7777775f39326b616966615f636f6d5f67616f7375,0xe9ab98e9809fe4b88be8bdbde993bee68ea5,'','','0','0','1');");
E_D("replace into `www_92fangzhan_com_enewspubvar` values('9',0x7777775f39326b616966615f636f6d5f64696275,0xe5ba95e983a8e6a087e8afad,0x436f7079726967687420c2a920323030342d32303139203c7370616e3e7563627567e8bdafe4bbb6e7ab99287777772e787878782e636f6d293c2f7370616e3e2e416c6c20526967687473205265736572766564,'','0','0','1');");
E_D("replace into `www_92fangzhan_com_enewspubvar` values('10',0x7777775f39326b616966615f636f6d5f7063,0x5043e7abafe59f9fe5908d,0x687474703a2f2f75636275672e7a6a2e393266616e677a68616e2e6e6574,'','0','0','1');");
E_D("replace into `www_92fangzhan_com_enewspubvar` values('11',0x7777775f39326b616966615f636f6d5f736a,0xe6898be69cbae7ab99,0x687474703a2f2f6d2e75636275672e7a6a2e393266616e677a68616e2e6e6574,'','0','0','1');");
E_D("replace into `www_92fangzhan_com_enewspubvar` values('12',0x7777775f39326b616966615f636f6d5f626569616e68616f,0xe5a487e6a188e58fb7,0xe5a487e6a188e7bc96e58fb7efbc9ae79a96494350e5a4873138303136363732e58fb7,'','0','0','1');");
E_D("replace into `www_92fangzhan_com_enewspubvar` values('13',0x7777775f39326b616966615f636f6d5f746a,0xe7bb9fe8aea1,'','','0','0','1');");

@include("../../inc/footer.php");
?>