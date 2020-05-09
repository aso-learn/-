<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_ecms_infoclass_book`;");
E_C("CREATE TABLE `www_92fangzhan_com_ecms_infoclass_book` (
  `classid` int(10) unsigned NOT NULL DEFAULT '0',
  `zz_title` text NOT NULL,
  `z_title` varchar(255) NOT NULL DEFAULT '',
  `qz_title` varchar(255) NOT NULL DEFAULT '',
  `save_title` varchar(10) NOT NULL DEFAULT '',
  `zz_titlepic` text NOT NULL,
  `z_titlepic` varchar(255) NOT NULL DEFAULT '',
  `qz_titlepic` varchar(255) NOT NULL DEFAULT '',
  `save_titlepic` varchar(10) NOT NULL DEFAULT '',
  `zz_newstime` text NOT NULL,
  `z_newstime` varchar(255) NOT NULL DEFAULT '',
  `qz_newstime` varchar(255) NOT NULL DEFAULT '',
  `save_newstime` varchar(10) NOT NULL DEFAULT '',
  `zz_category1` text NOT NULL,
  `z_category1` varchar(255) NOT NULL,
  `qz_category1` varchar(255) NOT NULL,
  `save_category1` varchar(10) NOT NULL,
  `zz_category2` text NOT NULL,
  `z_category2` varchar(255) NOT NULL,
  `qz_category2` varchar(255) NOT NULL,
  `save_category2` varchar(10) NOT NULL,
  `zz_category3` text NOT NULL,
  `z_category3` varchar(255) NOT NULL,
  `qz_category3` varchar(255) NOT NULL,
  `save_category3` varchar(10) NOT NULL,
  `zz_writer` text NOT NULL,
  `z_writer` varchar(255) NOT NULL,
  `qz_writer` varchar(255) NOT NULL,
  `save_writer` varchar(10) NOT NULL,
  `zz_smalltext` text NOT NULL,
  `z_smalltext` varchar(255) NOT NULL,
  `qz_smalltext` varchar(255) NOT NULL,
  `save_smalltext` varchar(10) NOT NULL,
  `zz_category4` text NOT NULL,
  `z_category4` varchar(255) NOT NULL,
  `qz_category4` varchar(255) NOT NULL,
  `save_category4` varchar(10) NOT NULL,
  `zz_category5` text NOT NULL,
  `z_category5` varchar(255) NOT NULL,
  `qz_category5` varchar(255) NOT NULL,
  `save_category5` varchar(10) NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>