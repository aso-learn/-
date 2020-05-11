<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_ecms_download_data_1`;");
E_C("CREATE TABLE `www_92fangzhan_com_ecms_download_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `homepage` varchar(80) NOT NULL DEFAULT '',
  `demo` varchar(120) NOT NULL DEFAULT '',
  `downpath` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('1','6','','1','0','0','0',0xe7be8ee68b8de5ae89e58d93e789882ce7be8ee68b8de6898be69cbae789882ce79fade8a786e9a291,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('2','6','','1','0','0','0',0xe5afbae5ba93e5a5a2e4be88e593812ce585a8e79083e5a5a2e4be88e59381e8b4ade789a9e5b9b3e58fb0,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('3','6','','1','0','0','0',0x444ae5a49ae5a49ae5ae89e58d93e789882c444ae5a49ae5a49a6170702ce6898be69cba646ae8bdafe4bbb6,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('4','6','','1','0','0','0',0xe69c89e4bfa16170702ce5858de8b4b9e7bd91e7bb9ce794b5e8af9d,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('5','6','','1','0','0','0',0xe6898be69cbae8a786e9a291e589aae8be91e8bdafe4bbb62ce5bfabe589aae8be91,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('6','6','','1','0','0','0',0xe69bb4e7be8e6170702ce4b89ae5beaee695b4e5bda2e5b9b3e58fb0,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('7','6','','1','0','0','0',0x596f686f427579e69c89e8b4a76170702ce6898be69cbae8b4ade789a9e8bdafe4bbb6,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('8','6','','1','0','0','0',0xe99383e5a3b0e5a49ae5a49a6170702ce6898be69cbae99383e5a3b0e8bdafe4bbb6,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('9','6','','1','0','0','0',0xe5b08fe78cbfe6909ce9a2986170702ce68b8de785a7e6909ce9a298e588a9e599a8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('10','6','','1','0','0','0',0xe8bf94e588a9e7bd916170702ce8b4ade789a9e8bf94e588a9,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('11','6','','1','0','0','0',0xe5bdb1e8a786e5a4a7e585a8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('12','6','','1','0','0','0',0xe9ad94e7a780e6a18ce99da22ce6898be69cbae6a18ce99da2e8bdafe4bbb6,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('13','6','','1','0','0','0',0xe6898be69cbae985b7e68891e99fb3e4b9902ce985b7e68891e99fb3e4b990e5ae89e58d93e789882ce6898be69cbae590ace6ad8ce8bdafe4bbb6,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('14','6','','1','0','0','0',0xe5a4a7e4bc97e782b9e8af84e5ae89e58d93e789882ce5a4a7e4bc97e782b9e8af84e6898be69cba4150502ce6898be69cbae59ba2e8b4ade8bdafe4bbb6,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('15','6','','1','0','0','0',0xe7be8ee9a39fe69db02ce88f9ce8b0b1e8bdafe4bbb6,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('16','6','','1','0','0','0',0xe5a2a8e8bfb9e5a4a9e6b0944150502ce5a4a9e6b094e9a284e68aa5e8bdafe4bbb62ce5a2a8e8bfb9e5a4a9e6b094e5ae89e58d93e78988,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('17','6','','1','0','0','0',0xe5bda9e8a7862ce8a786e9a291e589aae8be91e8bdafe4bbb6,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('18','6','','1','0','0','0',0xe584bfe6ad8ce5a49ae5a49a6170702ce697a9e69599e590afe89299e8bdafe4bbb6,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('19','6','','1','0','0','0',0xe8bfbde4b9a6e7a59ee599a86170702ce6898be69cbae5b08fe8afb4e99885e8afbbe8bdafe4bbb6,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('20','6','','1','0','0','0',0xe5beaee4bfa14170702ce5beaee4bfa1e5ae89e58d93e789882ce9809ae8aeafe5b7a5e585b7,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('21','6','','1','0','0','0',0x6e6963652c6e696365e5ae89e58d93e789882ce59bbee78987e7a4bee4baa4e8bdafe4bbb6,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('22','6','','1','0','0','0',0xe6b798e5ae9de789b9e4bbb7e789886170702ce883bde79c81e992b1e79a84e8b4ade789a9617070,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('23','7','','1','0','0','0',0xe980a0e6a2a6e8a5bfe6b8b8e5a496e4bca0e6898be6b8b82ce58aa8e4bd9ce7b1bbe6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('24','7','','1','0','0','0',0xe78b99e587bbe78c8ee6898be4bfaee694b9e789882ce78b99e587bbe78c8ee6898be7a0b4e8a7a3e789882ce78b99e587bbe78c8ee6898be4b88be8bdbd,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('25','6','','1','0','0','0',0xe78999e58cbbe7aea1e5aeb6,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('26','7','','1','0','0','0',0xe980a0e6a2a6e8a5bfe6b8b834e6898be69cbae789882ce58aa8e4bd9ce7b1bbe6898be6b8b82ce980a0e6a2a6e8a5bfe6b8b834e5ae89e58d93e78988,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('27','7','','1','0','0','0',0x44616e646172612ce58aa8e4bd9ce7b1bbe6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('28','6','','1','0','0','0',0xe4b8bae79fa5e7ac94e8aeb02ce4ba91e7ac94e8aeb0,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('29','7','','1','0','0','0',0xe5928ce5b9b3e7b2bee88bb1e6898be6b8b82ce59083e9b8a1e6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('30','7','','1','0','0','0',0xe781abe69fb4e4babae88194e79b9fe7a0b4e8a7a3e789882ce781abe69fb4e4babae88194e79b9fe697a0e99990e992bbe79fb3e789882ce781abe69fb4e4babae88194e79b9fe4bfaee694b9e78988,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('31','6','','1','0','0','0',0x55432c547572626f2ce6898be69cbae6b58fe8a788e599a8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('32','7','','1','0','0','0',0xe6988ee697a5e4b98be5908ee6898be6b8b82ce7949fe5ad98e7b1bbe6898be6b8b82ce59083e9b8a1e6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('33','7',0x3330,'1','0','0','0',0xe781abe69fb4e4babae88194e79b9fe7a0b4e8a7a3e789882ce781abe69fb4e4babae88194e79b9fe4bfaee694b9e789882ce781abe69fb4e4babae88194e79b9fe58685e8b4ade78988,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('34','6',0x3238,'1','0','0','0',0xe4b8bae79fa5e7ac94e8aeb02ce4b8aae4babae79fa5e8af86e7aea1e79086e8bdafe4bbb6,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('35','7','','1','0','0','0',0xe5aebee69e9ce6b688e6b688e6b688e6898be6b8b82ce4bc91e997b2e7b1bbe6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('36','7','','1','0','0','0',0xe79083e79083e5a4a7e4bd9ce68898e6898be6b8b82ce4bc91e997b2e7ab9ee68a80e7b1bbe6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('37','6','','1','0','0','0',0x6a6574417564696f2ce99fb3e4b990e692ade694bee599a8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('38','7','','1','0','0','0',0xe98791e5b19ee5b08fe58886e9989fe6898be6b8b82ce58aa8e4bd9ce7b1bbe6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('39','7','','1','0','0','0',0xe8bfb7e4bda0e4b896e7958ce5ae89e58d93e789882ce8bfb7e4bda0e4b896e7958ce6898be69cbae789882ce6b299e79b92e7b1bbe6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('40','6','','1','0','0','0',0xe794b5e8a786e78b972ce794b5e8a786e79bb4e692ade8bdafe4bbb6,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('41','7','','1','0','0','0',0xe98083e8b791e590a7e5b091e5b9b4e6898be6b8b82ce4bc91e997b2e7b1bbe6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('42','7','','1','0','0','0',0xe694bee7bdaee5a5b3e58f8be6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('43','6','','1','0','0','0',0xe99a8fe6898be586992ce7ac94e8aeb0e8bdafe4bbb6,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('44','7','','1','0','0','0',0xe79c9fe5ae9ee8b59be8bda633e697a0e99990e98791e5b881e789882ce79c9fe5ae9ee8b59be8bda633e7a0b4e8a7a3e789882ce79c9fe5ae9ee8b59be8bda633e695b0e68daee58c85e78988,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('45','7','','1','0','0','0',0xe586b0e5b79de697b6e4bba3e69d91e5ba84e7a0b4e8a7a3e789882ce586b0e5b79de697b6e4bba3e69d91e5ba84e4bfaee694b9e789882ce586b0e5b79de697b6e4bba3e69d91e5ba84e697a0e99990e98791e992b1,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('46','6','','1','0','0','0',0x537570657253552c50726fe6b189e58c96e789882c537570657253552c50726fe7a0b4e8a7a3e789882ce8b685e7baa7e68e88e69d83e7aea1e79086e4b893e4b89ae78988,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('47','7','','1','0','0','0',0xe79a87e5b89de68890e995bfe8aea1e5889232e6898be6b8b82ce585bbe68890e7b1bbe6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('48','7','','1','0','0','0',0xe5889be980a0e4b88ee9ad94e6b395e6898be6b8b82ce6b299e79b92e5a4a7e4b896e7958c2ce7949fe5ad98e7b1bbe6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('49','7','','1','0','0','0',0xe889bee8afbae8bfaae4ba9a34e6898be6b8b82ce8a792e889b2e689aee6bc94e7b1bbe6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('50','7','','1','0','0','0',0xe8b7b3e8889ee79a84e7babfe6898be6b8b82ce6898be68c87e6b8b8e6888f,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('51','7','','1','0','0','0',0xe78e87e59c9fe4b98be6bba8e6898be6b8b82ce68898e4ba89e7ad96e795a5e6898be6b8b82ce6898be69cbae6b8b8e6888fe4b88be8bdbd,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('52','7','','1','0','0','0',0xe8b685e587a1e89c98e89b9be4bea032e7a0b4e8a7a3e789882ce8b685e587a1e89c98e89b9be4bea032e4bfaee694b9e789882ce8b685e587a1e89c98e89b9be4bea032e7a6bbe7babfe78988,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('53','7','','1','0','0','0',0xe68891e698afe8bda6e7a59ee4bfaee694b9e789882ce68891e698afe8bda6e7a59ee7a0b4e8a7a3e789882ce68891e698afe8bda6e7a59ee8a7a3e99481e78988,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('54','7','','1','0','0','0',0x7171e6aca2e4b990e69697e59cb0e4b8bb6170702ce6aca2e4b990e69697e59cb0e4b8bb2ce6898be69cbae6a38be7898ce6b8b8e6888f,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('55','7','','1','0','0','0',0x5151e782abe8889ee6898be6b8b82ce6898be69cbae8b7b3e8889ee6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('56','7','','1','0','0','0',0xe78e8be88085e88da3e880804150502ce5afb9e68898e7b1bbe6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('57','7','','1','0','0','0',0xe5a4a9e5a4a9e985b7e8b791e6898be6b8b82ce8b791e985b7e7b1bbe6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('58','7','','1','0','0','0',0xe8b791e8b791e58da1e4b881e8bda6e6898be6b8b82ce7ab9ee68a80e7b1bbe6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('59','7','','1','0','0','0',0xe9be99e6978fe5b9bbe683b3e6898be6b8b82ce8a792e889b2e689aee6bc94e7b1bbe6898be6b8b8,'','','');");
E_D("replace into `www_92fangzhan_com_ecms_download_data_1` values('60','7','','1','0','0','0',0xe7baaae5bfb5e7a291e8b0b732e6898be6b8b82ce7baaae5bfb5e7a291e8b0b732e7a0b4e8a7a3e78988,'','','');");

@include("../../inc/footer.php");
?>