<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewsztf`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewsztf` (
  `fid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `f` varchar(30) NOT NULL DEFAULT '',
  `fname` varchar(30) NOT NULL DEFAULT '',
  `fform` varchar(20) NOT NULL DEFAULT '',
  `fhtml` mediumtext NOT NULL,
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ftype` varchar(30) NOT NULL DEFAULT '',
  `flen` varchar(20) NOT NULL DEFAULT '',
  `fvalue` text NOT NULL,
  `fformsize` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewsztf` values('1',0x6973676f6f64,0xe68ea8e88d90,0x73656c656374,0x3c73656c656374206e616d653d5c226973676f6f645c222069643d5c226973676f6f645c223e3c6f7074696f6e2076616c75653d5c22e4b88de68ea8e88d905c223c3f3d24616464725b6973676f6f645d3d3d5c22e4b88de68ea8e88d905c223f5c272073656c65637465645c273a5c275c273f3e3ee4b88de68ea8e88d903c2f6f7074696f6e3e3c6f7074696f6e2076616c75653d5c22e68ea8e88d905c223c3f3d24616464725b6973676f6f645d3d3d5c22e68ea8e88d905c223f5c272073656c65637465645c273a5c275c273f3e3ee68ea8e88d903c2f6f7074696f6e3e3c2f73656c6563743e,'','0',0x56415243484152,0x3630,0xe4b88de68ea8e88d907ce68ea8e88d90,'');");

@include("../../inc/footer.php");
?>