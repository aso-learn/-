<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_ecms_download_index`;");
E_C("CREATE TABLE `www_92fangzhan_com_ecms_download_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('1','6','1','1567785600','1567848003','1567848003','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('2','6','1','1567785600','1567848004','1567848004','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('3','6','1','1567785600','1567848005','1567848005','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('4','6','1','1567785600','1567848006','1567848006','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('5','6','1','1567785600','1567848006','1567848006','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('6','6','1','1567785600','1567848007','1567848007','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('7','6','1','1567785600','1567848008','1567848008','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('8','6','1','1567785600','1567848009','1567848009','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('9','6','1','1567785600','1567848009','1567848009','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('10','6','1','1567785600','1567848010','1567848010','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('11','6','1','1567785600','1567848011','1567848011','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('12','6','1','1567785600','1567848012','1567848012','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('13','6','1','1567785600','1567848012','1567848012','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('14','6','1','1567785600','1567848013','1567848013','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('15','6','1','1567785600','1567848014','1567848014','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('16','6','1','1567785600','1567848015','1567848015','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('17','6','1','1567785600','1567848016','1567848016','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('18','6','1','1567785600','1567848017','1567848017','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('19','6','1','1567785600','1567848017','1567848017','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('20','6','1','1567785600','1567848018','1567848018','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('21','6','1','1567785600','1567848019','1567848019','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('22','6','1','1567785600','1567848021','1567848021','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('23','7','1','1566835200','1567848022','1567848022','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('24','7','1','1564934400','1567848022','1567848022','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('25','6','1','1567785600','1567848023','1567848023','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('26','7','1','1566835200','1567848023','1567848023','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('27','7','1','1564934400','1567848024','1567848024','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('28','6','1','1567785600','1567848024','1567848024','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('29','7','1','1566835200','1567848025','1567848025','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('30','7','1','1564934400','1567848025','1567848025','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('31','6','1','1567785600','1567848026','1567999436','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('32','7','1','1566835200','1567848026','1567848026','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('33','7','1','1564934400','1567848027','1567848027','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('34','6','1','1567785600','1567848027','1567848027','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('35','7','1','1565625600','1567848028','1567848028','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('36','7','1','1564848000','1567848028','1567848028','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('37','6','1','1567785600','1567848029','1567848029','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('38','7','1','1565366400','1567848029','1567848029','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('39','7','1','1564848000','1567848030','1567848030','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('40','6','1','1567785600','1567848030','1567848030','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('41','7','1','1565107200','1567848031','1567848031','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('42','7','1','1564761600','1567848031','1567848031','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('43','6','1','1567785600','1567848032','1567848032','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('44','7','1','1565107200','1567848032','1567848032','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('45','7','1','1564588800','1567848033','1567848033','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('46','6','1','1567526400','1567848033','1567848033','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('47','7','1','1565020800','1567848034','1567848034','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('48','7','1','1564588800','1567848034','1567848034','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('49','7','1','1567526400','1567848035','1567848035','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('50','7','1','1565020800','1567848035','1567848035','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('51','7','1','1564588800','1567848036','1567848036','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('52','7','1','1564416000','1567848037','1567848037','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('53','7','1','1564416000','1567848038','1567848038','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('54','7','1','1564243200','1567848040','1567848040','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('55','7','1','1564243200','1567848041','1567848041','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('56','7','1','1564243200','1567848043','1567848043','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('57','7','1','1564243200','1567848044','1567848044','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('58','7','1','1564243200','1567848046','1567848046','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('59','7','1','1564156800','1567848048','1567848048','1');");
E_D("replace into `www_92fangzhan_com_ecms_download_index` values('60','7','1','1564070400','1567848049','1567848049','1');");

@include("../../inc/footer.php");
?>