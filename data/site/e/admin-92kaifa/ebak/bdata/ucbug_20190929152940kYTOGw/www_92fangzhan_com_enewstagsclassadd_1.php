<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewstagsclassadd`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewstagsclassadd` (
  `classid` int(10) unsigned NOT NULL DEFAULT '0',
  `tempid` int(10) unsigned NOT NULL DEFAULT '0',
  `modid` int(10) unsigned NOT NULL DEFAULT '0',
  `path` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>