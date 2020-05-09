<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewssearch`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewssearch` values('1',0xe5b9bfe4b89c,'1519712145',0x7469746c65,'2',0x3131332e38382e3135392e313737,0x32,'1',0x6e65777374696d65,'0',0x3634666532616465336261663330333135653231356362653465303761346437,0x6e657773,'0','0',0x20616e6420636c617373696420696e202833342c33352c33362c33372920616e642028287469746c65204c494b45202725e5b9bfe4b89c25272929,'2');");
E_D("replace into `www_92fangzhan_com_enewssearch` values('2',0xe99d92e9939ce58991,'1519712166',0x736d616c6c74657874,'1',0x3131332e38382e3135392e313737,'0','1',0x6e65777374696d65,'0',0x6533666434343234306534633633306664333835646235623035633634313031,0x6e657773,'0','0',0x20616e64202828736d616c6c74657874204c494b45202725e99d92e9939ce5899125272929,'0');");
E_D("replace into `www_92fangzhan_com_enewssearch` values('3',0xe4bd95,'1567937165',0x7469746c652c736d616c6c74657874,'34',0x3132372e302e302e31,'','1',0x6e65777374696d65,'0',0x6630326537303431653864656566373332303830376332636436393131363036,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e4bd95252729206f722028736d616c6c74657874204c494b45202725e4bd9525272929,'0');");
E_D("replace into `www_92fangzhan_com_enewssearch` values('4',0xe4bd95,'1567937578',0x7469746c65,'8',0x3132372e302e302e31,0x34,'1',0x6e65777374696d65,'0',0x3361313162366666616464313535393431343464306161303035336361346261,0x61727469636c65,'2','0',0x20616e6420636c617373696420696e202831322c31332c31342c31352c31362c31372c31382c31392c32302c32312c32322c32332c32342c32352c32362c32372c32382c32392c33302c33312920616e642028287469746c65204c494b45202725e4bd9525272929,'4');");
E_D("replace into `www_92fangzhan_com_enewssearch` values('5',0xe4bd95,'1567937754',0x7469746c65,'1',0x3132372e302e302e31,'','1',0x6e65777374696d65,'0',0x3564306666666437616232393632653839626434633665396334356430633264,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e4bd9525272929,'0');");
E_D("replace into `www_92fangzhan_com_enewssearch` values('6',0xe5ae89e58d93,'1568002175',0x7469746c652c736d616c6c74657874,'2',0x3132372e302e302e31,'','2',0x6e65777374696d65,'0',0x3439316132376430626631373332373334616362396461633462613931656162,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e5ae89e58d93252729206f722028736d616c6c74657874204c494b45202725e5ae89e58d9325272929,'0');");
E_D("replace into `www_92fangzhan_com_enewssearch` values('7',0xe5ae89e58d93,'1567937834',0x7469746c65,'46',0x3132372e302e302e31,0x362c37,'1',0x6e65777374696d65,'0',0x6139366462646534613661633333303934393636336332383163333263393633,0x646f776e6c6f6164,'4','0',0x20616e642028636c61737369643d273627206f7220636c61737369643d2737272920616e642028287469746c65204c494b45202725e5ae89e58d9325272929,'6');");
E_D("replace into `www_92fangzhan_com_enewssearch` values('8',0xe5ae89e58d93,'1568002612',0x7469746c65,'2',0x3132372e302e302e31,'','2',0x6e65777374696d65,'0',0x6633623461363365626566633336613663636637626233376234383064386232,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e5ae89e58d9325272929,'0');");
E_D("replace into `www_92fangzhan_com_enewssearch` values('9',0xe5ae89e58d93,'1568002916',0x7469746c65,'21',0x3132372e302e302e31,0x37,'3',0x6e65777374696d65,'0',0x6261633262636364666535663535346662323338386433323636396637653532,0x646f776e6c6f6164,'5','0',0x20616e6420636c61737369643d27372720616e642028287469746c65204c494b45202725e5ae89e58d9325272929,'7');");
E_D("replace into `www_92fangzhan_com_enewssearch` values('10',0xe5ae89e58d93,'1568002618',0x7469746c65,'25',0x3132372e302e302e31,0x36,'2',0x6e65777374696d65,'0',0x3236316530663663313266646134643136616434623763613138656166653762,0x646f776e6c6f6164,'4','0',0x20616e6420636c61737369643d27362720616e642028287469746c65204c494b45202725e5ae89e58d9325272929,'6');");
E_D("replace into `www_92fangzhan_com_enewssearch` values('11',0xe5858de8b4b9,'1568008746',0x7469746c652c736d616c6c74657874,'246',0x3132372e302e302e31,'','1',0x6e65777374696d65,'0',0x3364353438356166363065343161386539616632336135396231366235323730,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e5858de8b4b9252729206f722028736d616c6c74657874204c494b45202725e5858de8b4b925272929,'0');");
E_D("replace into `www_92fangzhan_com_enewssearch` values('12',0xe5858de8b4b9,'1568008872',0x7469746c65,'3',0x3132372e302e302e31,0x34,'2',0x6e65777374696d65,'0',0x3861373966653065303736386266383065313061656632666365303162376166,0x61727469636c65,'2','0',0x20616e6420636c617373696420696e202831322c31332c31342c31352c31362c31372c31382c31392c32302c32312c32322c32332c32342c32352c32362c32372c32382c32392c33302c33312920616e642028287469746c65204c494b45202725e5858de8b4b925272929,'4');");
E_D("replace into `www_92fangzhan_com_enewssearch` values('13',0xe5858de8b4b9,'1568008891',0x7469746c65,'216',0x3132372e302e302e31,'','1',0x6e65777374696d65,'0',0x3134326332353135646433373736636131646565343130366638393062373133,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e5858de8b4b925272929,'0');");

@include("../../inc/footer.php");
?>