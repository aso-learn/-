<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewskey`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewskey` (
  `keyid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `keyname` char(50) NOT NULL DEFAULT '',
  `keyurl` char(200) NOT NULL DEFAULT '',
  `cid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`keyid`),
  KEY `cid` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewskey` values('1',0xe69cbae794b2e6978be9a38ee7ab9ee68a80e59cba,0x687474703a2f2f7777772e7169796574776f2e636f6d2f7461672f6a696a69617875616e66656e676a696e676a696368616e672f,'0');");
E_D("replace into `www_92fangzhan_com_enewskey` values('2',0x4e6962c3bbe4b8ade69687e78988,0x687474703a2f2f7777772e7169796574776f2e636f6d2f7461672f4e69622f,'0');");
E_D("replace into `www_92fangzhan_com_enewskey` values('3',0xe88da3e88080e68898e59cbae5b89de59bbde4b8ade69687e78988,0x687474703a2f2f7777772e7169796574776f2e636f6d2f7461672f726f6e6779616f7a68616e6368616e67646967756f7a686f6e6777656e62616e2f,'0');");

@include("../../inc/footer.php");
?>