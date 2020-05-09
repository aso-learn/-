<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewspublicadd`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewspublicadd` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `ctimeopen` tinyint(1) NOT NULL DEFAULT '0',
  `ctimelast` int(10) unsigned NOT NULL DEFAULT '0',
  `ctimeindex` int(11) NOT NULL DEFAULT '0',
  `ctimeclass` int(11) NOT NULL DEFAULT '0',
  `ctimelist` int(11) NOT NULL DEFAULT '0',
  `ctimetext` int(11) NOT NULL DEFAULT '0',
  `ctimett` int(11) NOT NULL DEFAULT '0',
  `ctimetags` int(11) NOT NULL DEFAULT '0',
  `ctimegids` varchar(255) NOT NULL DEFAULT '',
  `ctimecids` varchar(255) NOT NULL DEFAULT '',
  `ctimernd` varchar(60) NOT NULL DEFAULT '',
  `ctimeaddre` tinyint(4) NOT NULL DEFAULT '0',
  `ctimeqaddre` tinyint(4) NOT NULL DEFAULT '0',
  `autodoopen` tinyint(1) NOT NULL DEFAULT '0',
  `autodouser` varchar(30) NOT NULL DEFAULT '',
  `autodopass` varchar(32) NOT NULL DEFAULT '',
  `autodosalt` varchar(20) NOT NULL DEFAULT '',
  `autodoshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `autodotime` int(11) NOT NULL DEFAULT '0',
  `autodoline` int(11) NOT NULL DEFAULT '0',
  `autodovar` varchar(20) NOT NULL DEFAULT '',
  `autodoval` varchar(60) NOT NULL DEFAULT '',
  `autodoshow` tinyint(1) NOT NULL DEFAULT '0',
  `autodofile` tinyint(1) NOT NULL DEFAULT '0',
  `autodopostpass` varchar(120) NOT NULL DEFAULT '',
  `autodoss` tinyint(1) NOT NULL DEFAULT '0',
  `autodoaction` varchar(200) NOT NULL DEFAULT '',
  `autodock` tinyint(1) NOT NULL DEFAULT '0',
  `digglevel` int(11) NOT NULL DEFAULT '0',
  `diggcmids` varchar(255) NOT NULL DEFAULT '',
  `toqjf` text NOT NULL,
  `qtoqjf` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewspublicadd` values('1','0','0','0','0','0','0','0','0','','',0x4e4c45597948343235783642494a474d59496e3157356d6e4263516e644d4a6666673658517a766f5377,'0','0','0','','','','0','100','12','','','1','0',0x686756494d394b317341576f4e323933497449566b524774594a435171585432574469685877474e54434548674f485a47675a6e63444e6231514a4e,'0',0x2c656d702c,'0','0','','','');");

@include("../../inc/footer.php");
?>