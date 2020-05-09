<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_ecms_card_list`;");
E_C("CREATE TABLE `www_92fangzhan_com_ecms_card_list` (
  `cardid` int(11) NOT NULL AUTO_INCREMENT,
  `fahaoid` int(11) NOT NULL DEFAULT '0',
  `cardpass` varchar(80) NOT NULL,
  `starttime` int(11) NOT NULL DEFAULT '0',
  `endtime` int(11) NOT NULL DEFAULT '0',
  `carddate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cardname` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `ip` varchar(32) NOT NULL,
  `carduserid` int(11) NOT NULL,
  PRIMARY KEY (`cardid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1");

@include("../../inc/footer.php");
?>