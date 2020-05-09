<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_card_list_user`;");
E_C("CREATE TABLE `www_92fangzhan_com_card_list_user` (
  `fahaoid` int(11) NOT NULL,
  `cardid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `ip` varchar(32) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_card_list_user` values('1','3742','0',0x3131332e36352e3132392e313433,'2018-08-25 14:52:44',0x6c71);");
E_D("replace into `www_92fangzhan_com_card_list_user` values('1','3743','0',0x31342e3132372e38302e3631,'2018-08-25 14:54:34',0x6c71);");

@include("../../inc/footer.php");
?>