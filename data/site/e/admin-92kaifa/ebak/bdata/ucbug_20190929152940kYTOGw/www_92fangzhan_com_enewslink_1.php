<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewslink`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewslink` (
  `lid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `lname` varchar(100) NOT NULL DEFAULT '',
  `lpic` varchar(255) NOT NULL DEFAULT '',
  `lurl` varchar(255) NOT NULL DEFAULT '',
  `ltime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `width` varchar(10) NOT NULL DEFAULT '',
  `height` varchar(10) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `myorder` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `lsay` text NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `ltype` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`lid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewslink` values('14',0x3932e4bbbfe7ab99,'',0x687474703a2f2f7777772e39326b616966612e636f6d,'2008-05-08 18:22:11','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `www_92fangzhan_com_enewslink` values('15',0xe6a8a1e69dbfe59586e59f8e,'',0x687474703a2f2f7777772e39326b616966612e636f6d2f68746d6c2f636f64652f,'2018-03-26 17:54:54','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `www_92fangzhan_com_enewslink` values('16',0xe789b9e4bbb7e69c8de58aa1e599a8,'',0x687474703a2f2f7777772e3138372e6e65742e636e2f,'2018-03-26 17:55:27','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `www_92fangzhan_com_enewslink` values('17',0xe4bbbfe7ab99e5ae9ae588b6,'',0x687474703a2f2f7777772e39326b616966612e636f6d,'2018-03-26 17:55:52','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");

@include("../../inc/footer.php");
?>