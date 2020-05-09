<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_ecms_infotmp_cards`;");
E_C("CREATE TABLE `www_92fangzhan_com_ecms_infotmp_cards` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `classid` int(10) unsigned NOT NULL DEFAULT '0',
  `oldurl` char(200) NOT NULL DEFAULT '',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `tmptime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `keyboard` char(100) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `lianqu` varchar(255) NOT NULL DEFAULT '',
  `pattern` tinyint(4) NOT NULL DEFAULT '0',
  `titlegame` varchar(255) NOT NULL DEFAULT '',
  `appurl` varchar(255) NOT NULL DEFAULT '',
  `appurlgl` varchar(255) NOT NULL DEFAULT '',
  `appurlxz` varchar(255) NOT NULL DEFAULT '',
  `permissions` tinyint(4) NOT NULL DEFAULT '0',
  `starttime` varchar(255) NOT NULL DEFAULT '',
  `endtime` varchar(255) NOT NULL DEFAULT '',
  `zhuangtai` varchar(1) NOT NULL DEFAULT '',
  `cardtxt` varchar(255) NOT NULL DEFAULT '',
  `cardbody` mediumtext NOT NULL,
  `cardtext` mediumtext NOT NULL,
  `jianjie` varchar(255) NOT NULL DEFAULT '',
  `szm` varchar(1) NOT NULL DEFAULT '',
  `shuliang` int(11) NOT NULL DEFAULT '0',
  `renum` int(11) NOT NULL DEFAULT '0',
  `fahaoid` varchar(255) NOT NULL DEFAULT '',
  `renshu` int(11) NOT NULL DEFAULT '0',
  `weeks` int(11) NOT NULL DEFAULT '0',
  `day` int(11) NOT NULL DEFAULT '0',
  `taomun` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>