<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewsztinfo`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewsztinfo` (
  `zid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ztid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `cid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`zid`),
  KEY `ztid` (`ztid`),
  KEY `cid` (`cid`),
  KEY `classid` (`classid`),
  KEY `id` (`id`),
  KEY `newstime` (`newstime`),
  KEY `mid` (`mid`),
  KEY `isgood` (`isgood`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('1','30','0','5','364','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('2','30','0','5','365','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('3','30','0','5','368','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('4','30','0','5','370','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('5','30','0','5','372','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('6','30','0','5','374','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('7','30','0','5','376','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('8','30','0','5','378','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('9','30','0','5','380','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('10','30','0','5','382','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('11','30','0','5','384','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('12','30','0','5','386','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('13','30','0','5','388','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('14','30','0','5','389','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('15','30','0','5','391','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('16','30','0','5','393','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('17','30','0','5','395','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('18','30','0','5','397','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('19','30','0','5','399','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('20','30','0','5','401','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('21','30','0','5','403','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('22','30','0','5','405','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('23','30','0','5','407','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('24','30','0','5','409','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('25','30','0','5','411','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('26','30','0','5','413','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('27','30','0','5','415','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('28','30','0','5','417','1567785600','1','0');");
E_D("replace into `www_92fangzhan_com_enewsztinfo` values('29','30','0','5','418','1567785600','1','0');");

@include("../../inc/footer.php");
?>