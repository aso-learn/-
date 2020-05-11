<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewsuserloginck`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewsuserloginck` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `andauth` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewsuserloginck` values('1',0x3731633835393039313064376233303266306234303736313535653739363561);");
E_D("replace into `www_92fangzhan_com_enewsuserloginck` values('3',0x6663643734366630613464336663323462316238626662653232313437386434);");
E_D("replace into `www_92fangzhan_com_enewsuserloginck` values('5',0x3638656435363561343536323933303162343431653239383933613735616430);");
E_D("replace into `www_92fangzhan_com_enewsuserloginck` values('6',0x6439653933373366396463323264613937323737343434653861346665333536);");
E_D("replace into `www_92fangzhan_com_enewsuserloginck` values('7',0x3932643932306634346336626639626334353432663632386365616365386562);");
E_D("replace into `www_92fangzhan_com_enewsuserloginck` values('8',0x3563396139376136343761393663643864343837646566643761666237643061);");
E_D("replace into `www_92fangzhan_com_enewsuserloginck` values('9',0x6130366165383830663637333435376262353335663766363236386236666563);");
E_D("replace into `www_92fangzhan_com_enewsuserloginck` values('10',0x3136613561646431616139653361343565646462653631336439353532653635);");

@include("../../inc/footer.php");
?>