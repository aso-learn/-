<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewscapt`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewscapt` (
  `phone` char(11) NOT NULL,
  `captcha` int(6) NOT NULL,
  `capttime` int(10) NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1登陆 2注册 3绑定 4找回密码',
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewscapt` values(0x3133363337333831333038,'883566','1543477226','2','0');");
E_D("replace into `www_92fangzhan_com_enewscapt` values(0x3133363337333831333038,'610022','1543477858','2','1');");
E_D("replace into `www_92fangzhan_com_enewscapt` values(0x3133363337333831333038,'459452','1543478971','2','0');");
E_D("replace into `www_92fangzhan_com_enewscapt` values(0x3133363337333831333038,'651368','1543484701','4','1');");

@include("../../inc/footer.php");
?>