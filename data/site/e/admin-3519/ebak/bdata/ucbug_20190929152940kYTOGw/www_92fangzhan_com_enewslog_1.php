<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_92fangzhan_com_enewslog`;");
E_C("CREATE TABLE `www_92fangzhan_com_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=utf8");
E_D("replace into `www_92fangzhan_com_enewslog` values('1',0x373733303930,'2018-02-27 13:29:23',0x3131332e38382e3135392e313737,'1','','0',0x3532373330);");
E_D("replace into `www_92fangzhan_com_enewslog` values('2',0x373733303930,'2018-03-01 17:13:35',0x3131332e38382e3135372e313037,'1','','0',0x3335353636);");
E_D("replace into `www_92fangzhan_com_enewslog` values('3',0x373733303930,'2018-03-02 10:16:05',0x32372e33382e31322e3731,'1','','0',0x3539333637);");
E_D("replace into `www_92fangzhan_com_enewslog` values('4',0x373733303930,'2018-03-19 16:49:28',0x3131332e38382e3135382e313433,'1','','0',0x3139353637);");
E_D("replace into `www_92fangzhan_com_enewslog` values('5',0x373733303930,'2018-03-19 21:06:39',0x32372e33382e31322e313037,'1','','0',0x3236383134);");
E_D("replace into `www_92fangzhan_com_enewslog` values('6',0x373733303930,'2018-03-19 21:08:20',0x32372e33382e31322e313037,'1','','0',0x3237333134);");
E_D("replace into `www_92fangzhan_com_enewslog` values('7',0x373733303930,'2018-03-19 21:14:38',0x32372e33382e31322e313037,'1','','0',0x3238363334);");
E_D("replace into `www_92fangzhan_com_enewslog` values('8',0x373733303930,'2018-03-19 21:15:24',0x32372e33382e31322e313037,'1','','0',0x3238393735);");
E_D("replace into `www_92fangzhan_com_enewslog` values('9',0x373733303930,'2018-03-19 21:16:07',0x32372e33382e31322e313037,'1','','0',0x3239313136);");
E_D("replace into `www_92fangzhan_com_enewslog` values('10',0x373733303930,'2018-03-19 21:24:22',0x32372e33382e31322e313037,'1','','0',0x3331313533);");
E_D("replace into `www_92fangzhan_com_enewslog` values('11',0x373733303930,'2018-03-19 21:32:48',0x32372e33382e31322e313037,'0','','0',0x3333313537);");
E_D("replace into `www_92fangzhan_com_enewslog` values('12',0x373733303930,'2018-03-19 21:32:58',0x32372e33382e31322e313037,'1','','0',0x3333313935);");
E_D("replace into `www_92fangzhan_com_enewslog` values('13',0x373733303930,'2018-03-19 21:36:22',0x32372e33382e31322e313037,'1','','0',0x3333383230);");
E_D("replace into `www_92fangzhan_com_enewslog` values('14',0x373733303930,'2018-03-19 21:41:33',0x32372e33382e31322e313037,'1','','0',0x3334383935);");
E_D("replace into `www_92fangzhan_com_enewslog` values('15',0x373733303930,'2018-03-20 08:54:41',0x3131332e38382e3135382e313433,'1','','0',0x3239303034);");
E_D("replace into `www_92fangzhan_com_enewslog` values('16',0x373733303930,'2018-03-26 17:52:36',0x3131332e38382e3135362e3739,'1','','0',0x3236343739);");
E_D("replace into `www_92fangzhan_com_enewslog` values('17',0x373733303930,'2018-04-21 09:26:30',0x3131332e38382e3135372e323332,'1','','0',0x3536303530);");
E_D("replace into `www_92fangzhan_com_enewslog` values('18',0x373733303930,'2018-06-05 09:28:01',0x31342e3132372e38302e313833,'1','','0',0x3233333031);");
E_D("replace into `www_92fangzhan_com_enewslog` values('19',0x373733303930,'2018-06-12 09:46:21',0x31342e3132372e38322e313639,'1','','0',0x3534343036);");
E_D("replace into `www_92fangzhan_com_enewslog` values('20',0x373733303930,'2018-06-13 16:17:18',0x31342e3132372e38322e313639,'1','','0',0x3534393035);");
E_D("replace into `www_92fangzhan_com_enewslog` values('21',0x373733303930,'2018-07-02 17:27:30',0x31342e3132372e38312e3634,'1','','0',0x3532373438);");
E_D("replace into `www_92fangzhan_com_enewslog` values('22',0x373733303930,'2018-07-02 17:28:01',0x31342e3132372e38312e3634,'1','','0',0x3532393139);");
E_D("replace into `www_92fangzhan_com_enewslog` values('23',0x373733303930,'2018-07-16 09:30:21',0x31342e3132372e38312e323033,'1','','0',0x3535383533);");
E_D("replace into `www_92fangzhan_com_enewslog` values('24',0x373733303930,'2018-07-17 10:07:54',0x3131322e39372e35392e3230,'1','','0',0x3537343933);");
E_D("replace into `www_92fangzhan_com_enewslog` values('25',0x373733303930,'2018-07-19 10:24:45',0x3131322e39372e35392e3230,'1','','0',0x3532393530);");
E_D("replace into `www_92fangzhan_com_enewslog` values('26',0x373733303930,'2018-07-21 10:41:23',0x31342e3132372e38302e313334,'1','','0',0x3538363431);");
E_D("replace into `www_92fangzhan_com_enewslog` values('27',0x373733303930,'2018-07-21 10:45:03',0x31342e3132372e38302e313334,'1','','0',0x3630333032);");
E_D("replace into `www_92fangzhan_com_enewslog` values('28',0x373733303930,'2018-07-23 15:42:50',0x31342e3132372e38302e3131,'1','','0',0x3633383336);");
E_D("replace into `www_92fangzhan_com_enewslog` values('29',0x373733303930,'2018-08-18 21:31:26',0x3131322e39372e35312e313939,'1','','0',0x3635323539);");
E_D("replace into `www_92fangzhan_com_enewslog` values('30',0x7869616f6c696e,'2018-08-21 11:22:22',0x3231382e31392e39382e313536,'1','','0',0x3538323234);");
E_D("replace into `www_92fangzhan_com_enewslog` values('31',0x7869616f6c696e,'2018-08-21 13:13:23',0x3231382e31392e39382e313536,'1','','0',0x3538333930);");
E_D("replace into `www_92fangzhan_com_enewslog` values('32',0x7869616f6c696e,'2018-08-21 20:44:57',0x3131392e3133302e3233302e313938,'1','','0',0x32333038);");
E_D("replace into `www_92fangzhan_com_enewslog` values('33',0x7869616f6c696e,'2018-08-22 11:16:18',0x3131392e3133302e3233302e313938,'1','','0',0x31303633);");
E_D("replace into `www_92fangzhan_com_enewslog` values('34',0x7869616f6c696e,'2018-08-22 12:50:14',0x3131392e3133302e3233302e313938,'1','','0',0x34343132);");
E_D("replace into `www_92fangzhan_com_enewslog` values('35',0x7869616f6c696e,'2018-08-22 20:02:29',0x3131392e3133302e3233302e313938,'1','','0',0x32373734);");
E_D("replace into `www_92fangzhan_com_enewslog` values('36',0x7869616f6c696e,'2018-08-24 17:48:09',0x3131332e36352e3133312e3735,'1','','0',0x32323134);");
E_D("replace into `www_92fangzhan_com_enewslog` values('37',0x373733303930,'2018-08-25 14:28:32',0x31342e3132372e38302e3631,'0','','0',0x31313831);");
E_D("replace into `www_92fangzhan_com_enewslog` values('38',0x373733303930,'2018-08-25 14:28:39',0x31342e3132372e38302e3631,'0','','0',0x31313831);");
E_D("replace into `www_92fangzhan_com_enewslog` values('39',0x39326b61696661,'2018-08-25 14:29:03',0x31342e3132372e38302e3631,'0','','0',0x31313831);");
E_D("replace into `www_92fangzhan_com_enewslog` values('40',0x39326b61696661,'2018-08-25 14:29:13',0x31342e3132372e38302e3631,'0','','0',0x31313831);");
E_D("replace into `www_92fangzhan_com_enewslog` values('41',0x7869616f6c696e,'2018-08-25 14:29:36',0x31342e3132372e38302e3631,'1','','0',0x31313831);");
E_D("replace into `www_92fangzhan_com_enewslog` values('42',0x7869616f6c696e,'2018-08-25 14:29:45',0x3131332e36352e3132392e313433,'1','','0',0x34363639);");
E_D("replace into `www_92fangzhan_com_enewslog` values('43',0x7869616f6c696e,'2018-08-25 14:30:09',0x31342e3132372e38302e3631,'1','','0',0x31313831);");
E_D("replace into `www_92fangzhan_com_enewslog` values('44',0x373733303930,'2018-08-25 14:30:39',0x31342e3132372e38302e3631,'1','','0',0x31313831);");
E_D("replace into `www_92fangzhan_com_enewslog` values('45',0x7869616f6c696e,'2018-08-25 14:32:40',0x3131332e36352e3132392e313433,'1','','0',0x31373239);");
E_D("replace into `www_92fangzhan_com_enewslog` values('46',0x373733303930,'2018-08-25 14:58:06',0x31342e3132372e38302e3631,'1','','0',0x31323437);");
E_D("replace into `www_92fangzhan_com_enewslog` values('47',0x373733303930,'2018-08-25 16:53:27',0x31342e3132372e38302e3631,'1','','0',0x31363939);");
E_D("replace into `www_92fangzhan_com_enewslog` values('48',0x373733303930,'2018-09-03 17:19:55',0x3131322e39372e35372e313833,'1','','0',0x33353131);");
E_D("replace into `www_92fangzhan_com_enewslog` values('49',0x373733303930,'2018-10-10 10:36:32',0x3131312e34322e31362e323530,'1','','0',0x34363234);");
E_D("replace into `www_92fangzhan_com_enewslog` values('50',0x373733303930,'2018-10-18 11:02:01',0x31342e3132372e38302e3134,'1','','0',0x34383837);");
E_D("replace into `www_92fangzhan_com_enewslog` values('51',0x6b61697469616e,'2018-10-18 11:16:29',0x31342e3132372e38302e3134,'1','','0',0x32383931);");
E_D("replace into `www_92fangzhan_com_enewslog` values('52',0x373733303930,'2018-10-29 17:31:30',0x31342e3132372e38322e3234,'1','','0',0x33343234);");
E_D("replace into `www_92fangzhan_com_enewslog` values('53',0x373733303930,'2018-11-03 10:27:56',0x3131322e39372e36332e313538,'1','','0',0x33393133);");
E_D("replace into `www_92fangzhan_com_enewslog` values('54',0x373733303930,'2018-11-07 12:45:09',0x3131322e39372e35342e313436,'1','','0',0x32363836);");
E_D("replace into `www_92fangzhan_com_enewslog` values('55',0x373733303930,'2018-11-17 11:00:41',0x3131322e39372e36332e323134,'1','','0',0x31363531);");
E_D("replace into `www_92fangzhan_com_enewslog` values('56',0x39326b61696661,'2018-12-01 17:59:21',0x3132372e302e302e31,'1','','0',0x3439333730);");
E_D("replace into `www_92fangzhan_com_enewslog` values('57',0x373733303930,'2018-12-01 20:20:12',0x31342e3132372e38332e3933,'1','','0',0x34323230);");
E_D("replace into `www_92fangzhan_com_enewslog` values('58',0x373733303930,'2018-12-13 11:09:05',0x3131322e39372e35392e323039,'1','','0',0x31333430);");
E_D("replace into `www_92fangzhan_com_enewslog` values('59',0x373733303930,'2018-12-15 14:06:51',0x31342e3132372e38312e323334,'1','','0',0x33303135);");
E_D("replace into `www_92fangzhan_com_enewslog` values('60',0x373733303930,'2018-12-22 10:37:43',0x31342e3132372e38322e3536,'1','','0',0x34303736);");
E_D("replace into `www_92fangzhan_com_enewslog` values('61',0x39326b61696661,'2019-06-04 13:53:32',0x3132372e302e302e31,'1','','0',0x3439393934);");
E_D("replace into `www_92fangzhan_com_enewslog` values('62',0x39326b61696661,'2019-06-04 13:54:21',0x3132372e302e302e31,'1','','0',0x3530373037);");
E_D("replace into `www_92fangzhan_com_enewslog` values('63',0x373733303930,'2019-06-04 18:49:34',0x31342e3132372e38322e313238,'1','','0',0x35333735);");
E_D("replace into `www_92fangzhan_com_enewslog` values('64',0x373733303930,'2019-06-17 15:45:59',0x31342e3132372e38302e323036,'1','','0',0x38303832);");
E_D("replace into `www_92fangzhan_com_enewslog` values('65',0x39326b61696661,'2019-06-19 08:55:18',0x3132352e37392e3231362e3231,'1','','0',0x39323439);");
E_D("replace into `www_92fangzhan_com_enewslog` values('66',0x39326b61696661,'2019-06-19 10:48:55',0x3132352e37392e3231362e3231,'1','','0',0x3132303033);");
E_D("replace into `www_92fangzhan_com_enewslog` values('67',0x39326b61696661,'2019-06-19 10:50:29',0x3132352e37392e3231362e3231,'1','','0',0x3132303132);");
E_D("replace into `www_92fangzhan_com_enewslog` values('68',0x39326b61696661,'2019-06-19 11:07:13',0x3132352e37392e3231362e3231,'1','','0',0x3133313232);");
E_D("replace into `www_92fangzhan_com_enewslog` values('69',0x373733303930,'2019-06-19 12:45:53',0x31342e3132372e38302e3630,'1','','0',0x3137303533);");
E_D("replace into `www_92fangzhan_com_enewslog` values('70',0x39326b61696661,'2019-06-19 12:50:05',0x3132352e37392e3231362e3231,'1','','0',0x3130313839);");
E_D("replace into `www_92fangzhan_com_enewslog` values('71',0x39326b61696661,'2019-06-19 18:39:54',0x3132352e37392e3231362e3231,'1','','0',0x3132333933);");
E_D("replace into `www_92fangzhan_com_enewslog` values('72',0x39326b61696661,'2019-06-19 18:42:44',0x3132352e37392e3231362e3231,'0','','0',0x3132353437);");
E_D("replace into `www_92fangzhan_com_enewslog` values('73',0x39326b61696661,'2019-06-19 18:42:51',0x3132352e37392e3231362e3231,'1','','0',0x3132353437);");
E_D("replace into `www_92fangzhan_com_enewslog` values('74',0x39326b61696661,'2019-06-19 18:56:34',0x3132352e37392e3231362e3231,'1','','0',0x3133313038);");
E_D("replace into `www_92fangzhan_com_enewslog` values('75',0x39326b61696661,'2019-06-19 18:58:36',0x3132352e37392e3231362e3231,'1','','0',0x3132393438);");
E_D("replace into `www_92fangzhan_com_enewslog` values('76',0x39326b61696661,'2019-06-19 19:18:59',0x3132352e37392e3231362e3231,'1','','0',0x3130323436);");
E_D("replace into `www_92fangzhan_com_enewslog` values('77',0x39326b61696661,'2019-06-20 00:35:06',0x3132352e37392e3231362e3231,'1','','0',0x3130383537);");
E_D("replace into `www_92fangzhan_com_enewslog` values('78',0x373733303930,'2019-06-20 08:32:58',0x31342e3132372e38302e3630,'1','','0',0x3134323730);");
E_D("replace into `www_92fangzhan_com_enewslog` values('79',0x39326b61696661,'2019-06-20 09:04:40',0x3132352e37392e3231362e3231,'1','','0',0x3130343236);");
E_D("replace into `www_92fangzhan_com_enewslog` values('80',0x373733303930,'2019-06-21 08:45:37',0x31342e3132372e38322e3635,'1','','0',0x3132313730);");
E_D("replace into `www_92fangzhan_com_enewslog` values('81',0x373733303930,'2019-06-26 11:42:38',0x31342e3132372e38312e323331,'1','','0',0x32303736);");
E_D("replace into `www_92fangzhan_com_enewslog` values('82',0x373733303930,'2019-06-27 15:45:08',0x31342e3132372e38302e323336,'1','','0',0x3534303939);");
E_D("replace into `www_92fangzhan_com_enewslog` values('83',0x39326b61696661,'2019-06-29 00:04:43',0x3131302e38322e3231322e323033,'1','','0',0x3130383334);");
E_D("replace into `www_92fangzhan_com_enewslog` values('84',0x373733303930,'2019-06-29 22:24:35',0x3132302e3232392e31382e313532,'1','','0',0x3232363336);");
E_D("replace into `www_92fangzhan_com_enewslog` values('85',0x373733303930,'2019-07-01 11:04:11',0x31342e3132372e38332e3936,'1','','0',0x3132343832);");
E_D("replace into `www_92fangzhan_com_enewslog` values('86',0x373733303930,'2019-07-01 11:10:03',0x3231312e3134392e3132382e323435,'1','','0',0x3536313135);");
E_D("replace into `www_92fangzhan_com_enewslog` values('87',0x39326b61696661,'2019-08-19 11:55:20',0x3132372e302e302e31,'1','','0',0x3439383430);");
E_D("replace into `www_92fangzhan_com_enewslog` values('88',0x39326b61696661,'2019-09-02 17:06:48',0x3132372e302e302e31,'1','','0',0x3534313130);");
E_D("replace into `www_92fangzhan_com_enewslog` values('89',0x39326b61696661,'2019-09-03 09:29:10',0x3132372e302e302e31,'1','','0',0x3530333837);");
E_D("replace into `www_92fangzhan_com_enewslog` values('90',0x39326b61696661,'2019-09-04 10:50:33',0x3132372e302e302e31,'1','','0',0x3539313237);");
E_D("replace into `www_92fangzhan_com_enewslog` values('91',0x39326b61696661,'2019-09-05 10:17:19',0x3132372e302e302e31,'1','','0',0x3634323335);");
E_D("replace into `www_92fangzhan_com_enewslog` values('92',0x39326b61696661,'2019-09-05 13:33:00',0x3132372e302e302e31,'1','','0',0x3439393638);");
E_D("replace into `www_92fangzhan_com_enewslog` values('93',0x39326b61696661,'2019-09-06 09:56:37',0x3132372e302e302e31,'1','','0',0x3630353932);");
E_D("replace into `www_92fangzhan_com_enewslog` values('94',0x39326b61696661,'2019-09-06 12:28:06',0x3132372e302e302e31,'1','','0',0x3537353130);");
E_D("replace into `www_92fangzhan_com_enewslog` values('95',0x39326b61696661,'2019-09-06 12:43:58',0x3132372e302e302e31,'1','','0',0x3539383535);");
E_D("replace into `www_92fangzhan_com_enewslog` values('96',0x39326b61696661,'2019-09-06 12:44:30',0x3132372e302e302e31,'1','','0',0x3539393439);");
E_D("replace into `www_92fangzhan_com_enewslog` values('97',0x39326b61696661,'2019-09-06 12:51:43',0x3132372e302e302e31,'1','','0',0x3630393833);");
E_D("replace into `www_92fangzhan_com_enewslog` values('98',0x39326b61696661,'2019-09-07 10:23:27',0x3132372e302e302e31,'1','','0',0x3530353532);");
E_D("replace into `www_92fangzhan_com_enewslog` values('99',0x39326b61696661,'2019-09-07 17:46:02',0x3132372e302e302e31,'1','','0',0x3538333332);");
E_D("replace into `www_92fangzhan_com_enewslog` values('100',0x39326b61696661,'2019-09-07 17:47:25',0x3132372e302e302e31,'1','','0',0x3538363339);");
E_D("replace into `www_92fangzhan_com_enewslog` values('101',0x39326b61696661,'2019-09-07 17:49:43',0x3132372e302e302e31,'1','','0',0x3538393833);");
E_D("replace into `www_92fangzhan_com_enewslog` values('102',0x39326b61696661,'2019-09-07 17:52:27',0x3132372e302e302e31,'1','','0',0x3539353039);");
E_D("replace into `www_92fangzhan_com_enewslog` values('103',0x39326b61696661,'2019-09-07 17:53:01',0x3132372e302e302e31,'1','','0',0x3539363132);");
E_D("replace into `www_92fangzhan_com_enewslog` values('104',0x39326b61696661,'2019-09-07 17:54:15',0x3132372e302e302e31,'1','','0',0x3539383737);");
E_D("replace into `www_92fangzhan_com_enewslog` values('105',0x39326b61696661,'2019-09-07 17:54:41',0x3132372e302e302e31,'1','','0',0x3539393634);");
E_D("replace into `www_92fangzhan_com_enewslog` values('106',0x39326b61696661,'2019-09-07 17:55:37',0x3132372e302e302e31,'1','','0',0x3630313534);");
E_D("replace into `www_92fangzhan_com_enewslog` values('107',0x39326b61696661,'2019-09-07 17:58:38',0x3132372e302e302e31,'1','','0',0x3630363531);");
E_D("replace into `www_92fangzhan_com_enewslog` values('108',0x39326b61696661,'2019-09-07 17:59:23',0x3132372e302e302e31,'1','','0',0x3630373934);");
E_D("replace into `www_92fangzhan_com_enewslog` values('109',0x39326b61696661,'2019-09-07 18:08:02',0x3132372e302e302e31,'1','','0',0x3632303437);");
E_D("replace into `www_92fangzhan_com_enewslog` values('110',0x39326b61696661,'2019-09-09 09:12:41',0x3132372e302e302e31,'1','','0',0x3532363934);");
E_D("replace into `www_92fangzhan_com_enewslog` values('111',0x39326b61696661,'2019-09-09 10:42:44',0x3132372e302e302e31,'1','','0',0x3632303335);");
E_D("replace into `www_92fangzhan_com_enewslog` values('112',0x39326b61696661,'2019-09-09 12:59:45',0x3132372e302e302e31,'1','','0',0x3531353233);");
E_D("replace into `www_92fangzhan_com_enewslog` values('113',0x39326b61696661,'2019-09-29 10:08:18',0x3132372e302e302e31,'1','','0',0x3538393737);");

@include("../../inc/footer.php");
?>