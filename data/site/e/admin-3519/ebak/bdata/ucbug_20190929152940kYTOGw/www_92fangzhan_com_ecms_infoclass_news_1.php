<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_ecms_infoclass_news`;");
E_C("CREATE TABLE `www_92fangzhan_com_ecms_infoclass_news` (
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
  `zz_ftitle` text NOT NULL,
  `z_ftitle` varchar(255) NOT NULL DEFAULT '',
  `qz_ftitle` varchar(255) NOT NULL DEFAULT '',
  `save_ftitle` varchar(10) NOT NULL DEFAULT '',
  `zz_smalltext` text NOT NULL,
  `z_smalltext` varchar(255) NOT NULL DEFAULT '',
  `qz_smalltext` varchar(255) NOT NULL DEFAULT '',
  `save_smalltext` varchar(10) NOT NULL DEFAULT '',
  `zz_writer` text NOT NULL,
  `z_writer` varchar(255) NOT NULL DEFAULT '',
  `qz_writer` varchar(255) NOT NULL DEFAULT '',
  `save_writer` varchar(10) NOT NULL DEFAULT '',
  `zz_befrom` text NOT NULL,
  `z_befrom` varchar(255) NOT NULL DEFAULT '',
  `qz_befrom` varchar(255) NOT NULL DEFAULT '',
  `save_befrom` varchar(10) NOT NULL DEFAULT '',
  `zz_newstext` text NOT NULL,
  `z_newstext` varchar(255) NOT NULL DEFAULT '',
  `qz_newstext` varchar(255) NOT NULL DEFAULT '',
  `save_newstext` varchar(10) NOT NULL DEFAULT '',
  `zz_diggtop` text NOT NULL,
  `z_diggtop` varchar(255) NOT NULL DEFAULT '',
  `qz_diggtop` varchar(255) NOT NULL DEFAULT '',
  `save_diggtop` varchar(10) NOT NULL DEFAULT '',
  `zz_daxiao` text NOT NULL,
  `z_daxiao` varchar(255) NOT NULL,
  `qz_daxiao` varchar(255) NOT NULL,
  `save_daxiao` varchar(10) NOT NULL,
  `zz_banben` text NOT NULL,
  `z_banben` varchar(255) NOT NULL,
  `qz_banben` varchar(255) NOT NULL,
  `save_banben` varchar(10) NOT NULL,
  `zz_pingtai` text NOT NULL,
  `z_pingtai` varchar(255) NOT NULL,
  `qz_pingtai` varchar(255) NOT NULL,
  `save_pingtai` varchar(10) NOT NULL,
  `zz_yuyan` text NOT NULL,
  `z_yuyan` varchar(255) NOT NULL,
  `qz_yuyan` varchar(255) NOT NULL,
  `save_yuyan` varchar(10) NOT NULL,
  `zz_pingfen` text NOT NULL,
  `z_pingfen` varchar(255) NOT NULL,
  `qz_pingfen` varchar(255) NOT NULL,
  `save_pingfen` varchar(10) NOT NULL,
  `zz_xzlj` text NOT NULL,
  `z_xzlj` varchar(255) NOT NULL,
  `qz_xzlj` varchar(255) NOT NULL,
  `save_xzlj` varchar(10) NOT NULL,
  `zz_bibei` text NOT NULL,
  `z_bibei` varchar(255) NOT NULL,
  `qz_bibei` varchar(255) NOT NULL,
  `save_bibei` varchar(10) NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>