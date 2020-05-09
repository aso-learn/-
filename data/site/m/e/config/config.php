<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
define('EmpireCMSConfig',TRUE);
$ecms_config=array();

//数据库设置
$ecms_config['db']['usedb']='mysql';	//数据库类型
$ecms_config['db']['dbver']='5.0';	//数据库版本
$ecms_config['db']['dbserver']='localhost';	//数据库登录地址
$ecms_config['db']['dbport']='';	//端口，不填为按默认
$ecms_config['db']['dbusername']='ucbug';	//数据库用户名
$ecms_config['db']['dbpassword']='c4s4H6m5';	//数据库密码
$ecms_config['db']['dbname']='ucbug';	//数据库名
$ecms_config['db']['setchar']='utf8';	//设置默认编码
$ecms_config['db']['dbchar']='utf8';	//数据库默认编码
$ecms_config['db']['dbtbpre']='www_92fangzhan_com_';	//数据表前缀
$dbtbpre=$ecms_config['db']['dbtbpre'];	//数据表前缀
$ecms_config['db']['showerror']=1;	//显示SQL错误提示(0为不显示,1为显示)


//页面编码设置
$ecms_config['sets']['pagechar']='utf-8';	//安装帝国CMS的编码版本
$ecms_config['sets']['setpagechar']=1;	//页面默认字符集,0=关闭 1=开启
$ecms_config['sets']['elang']='gb';	//语言包

//后台相关配置
$ecms_config['esafe']['openonlinesetting']=3;	//开启后台在线配置参数(0为关闭,1为开启防火墙配置,2为开启安全配置,3为全开启)
$ecms_config['esafe']['openeditdttemp']=1;	//开启后台在线修改动态模板(0为关闭,1为开启)

//易通行系统配置
$ecms_config['epassport']['open']=0;	//是否开启易通行系统(1为开启，0为关闭)

//其它配置
$ecms_config['sets']['webdebug']=1;	//是否显示PHP错误提示(0为不显示,1为显示)
$ecms_config['sets']['timezone']='PRC';	//时区
$ecms_config['sets']['getiptype']=0;	//获取IP地址类型(0为自动,1为REMOTE_ADDR,2为HTTP_X_FORWARDED_FOR,3为HTTP_CLIENT_IP)
$ecms_config['sets']['ecmscachepath']=ECMS_PATH.'ecachefiles/';	//动态页面缓存文件存放目录
$ecms_config['sets']['ecmscachefiletype']='.html';	//动态页面缓存文件扩展名
$ecms_config['sets']['txtpath']=ECMS_PATH.'d/txt/';	//文本型数据存放目录
$ecms_config['sets']['saveurlimgclearurl']=0;	//远程保存图片自动去除图片的链接(0为保留,1为去除)
$ecms_config['sets']['deftempid']=2;	//默认模板组ID
$ecms_config['sets']['selfmoreportid']=2;	//当前网站访问端ID,0为主访问端



//-------EmpireCMS.Seting.member-------

//会员系统相关配置
$ecms_config['member']['tablename']="{$dbtbpre}enewsmember";	//会员表
$user_tablename=$ecms_config['member']['tablename'];	//会员表
$ecms_config['member']['changeregisterurl']="ChangeRegister.php";    //多会员组中转注册地址
$ecms_config['member']['registerurl']="";							//会员注册地址
$ecms_config['member']['loginurl']="";								//会员登录地址
$ecms_config['member']['quiturl']="";								//会员退出地址
$ecms_config['member']['chmember']=0;//是否使用原版会员表信息,0为原版,1为非原版
$ecms_config['member']['pwtype']=2;//密码保存形式,0为md5,1为明码,2为双重加密,3为16位md5
$ecms_config['member']['regtimetype']=1;//注册时间保存格式,0为正常时间,1为数值型
$ecms_config['member']['regcookietime']=0;//注册后登录保存时间(秒)
$ecms_config['member']['defgroupid']=0;//注册时会员组ID(ecms的会员组,0为后台默认)
$ecms_config['member']['saltnum']=6;//SALT随机码字符数
$ecms_config['member']['utfdata']=0;//数据是否是GBK编码,0为正常数据,1为GBK编码

$ecms_config['memberf']['userid']='userid';//用户ID字段
$ecms_config['memberf']['username']='username';//用户名字段
$ecms_config['memberf']['password']='password';//密码字段
$ecms_config['memberf']['rnd']='rnd';//随机密码字段
$ecms_config['memberf']['email']='email';//邮箱字段
$ecms_config['memberf']['registertime']='registertime';//注册时间字段
$ecms_config['memberf']['groupid']='groupid';//会员组字段
$ecms_config['memberf']['userfen']='userfen';//积分字段
$ecms_config['memberf']['userdate']='userdate';//有效期字段
$ecms_config['memberf']['money']='money';//帐户余额字段
$ecms_config['memberf']['zgroupid']='zgroupid';//到期转向会员组字段
$ecms_config['memberf']['havemsg']='havemsg';//提示短消息字段
$ecms_config['memberf']['checked']='checked';//审核状态字段
$ecms_config['memberf']['salt']='salt';//SALT加密字段
$ecms_config['memberf']['userkey']='userkey';//用户密钥字段
$ecms_config['memberf']['ingid']='ingid';//内部会员组字段
$ecms_config['memberf']['agid']='agid';//会员管理组字段
$ecms_config['memberf']['isern']='isern';//实名字段

//-------EmpireCMS.Seting.member-------




//-------EmpireCMS.Seting.area-------

//后台安全设置
$ecms_config['esafe']['loginauth']='';	//登录认证码,如果设置登录需要输入此认证码才能通过
$ecms_config['esafe']['enloginauth']=0;	//登录认证码加密验证串有效时间,单位:秒(0为不启用加密)
$ecms_config['esafe']['ecookiernd']='ONexsW38msO97NdVmOYAec42CaliOhw9mtL3';	//后台登录COOKIE认证码(填写10~50个任意字符，最好多种字符组合)
$ecms_config['esafe']['ckhloginip']=0;	//后台是否验证登录IP,0为不验证,1为验证
$ecms_config['esafe']['ckhsession']=0;	//后台是否启用SESSION验证,0为不验证,1为验证
$ecms_config['esafe']['ckhanytime']=0;	//后台随时认证码变更周期,单位:秒(0为不启用)
$ecms_config['esafe']['theloginlog']=0;	//是否记录登陆日志(0为记录,1为不记录)
$ecms_config['esafe']['thedolog']=0;		//是否记录操作日志(0为记录,1为不记录)
$ecms_config['esafe']['ckfromurl']=2;	//是否启用来源地址验证,0为不验证,1为全部验证,2为后台验证,3为前台验证,4为全部验证(严格),5为后台验证(严格),6为前台验证(严格)
$ecms_config['esafe']['ckhash']=0;	//启用后台来源认证码,0为金刚模式验证,1为刺猬模式验证,2为关闭验证
$ecms_config['esafe']['ckhashename']='ehash_';	//后台来源认证码访问变量名(必须字母开头,并且只能由字母、数字、下划线组成)
$ecms_config['esafe']['ckhashrname']='rhash_';	//后台来源认证码提交变量名(必须字母开头,并且只能由字母、数字、下划线组成)
$ecms_config['esafe']['ckhuseragent']='';	//允许后台访问的UserAgent信息必须包含字符(区分大小写),多个用“||”半角双竖线隔开

//COOKIE设置
$ecms_config['cks']['ckdomain']='';		//cookie作用域
$ecms_config['cks']['ckpath']='/';		//cookie作用路径
$ecms_config['cks']['ckhttponly']=0;	//cookie的HttpOnly属性(0关闭,1开启,2只后台开启,3只前台开启)
$ecms_config['cks']['cksecure']=0;		//cookie的secure属性(0为自动识别,1为关闭,2为开启,3只后台开启,4只前台开启)
$ecms_config['cks']['ckvarpre']='jzijz';		//前台cookie变量前缀
$ecms_config['cks']['ckadminvarpre']='oayip';		//后台cookie变量前缀
$ecms_config['cks']['ckrnd']='qxQ9XvYzh2THTat3dIfZCzdCWgpJv6sE2D0';	//COOKIE验证随机码(填写10~50个任意字符，最好多种字符组合)
$ecms_config['cks']['ckrndtwo']='n7AFvmtsiHtWoKVL3Cx4ETNP4lQPmsRTuz';	//COOKIE验证随机码2(填写10~50个任意字符，最好多种字符组合)
$ecms_config['cks']['ckrndthree']='2AZunV9VWe7OqzueyH3ODePDshnPyxaq8';	//COOKIE验证随机码3(填写10~50个任意字符，最好多种字符组合)
$ecms_config['cks']['ckrndfour']='f3aNEt911B8Ok37PMcYFFHUsqRb5e4US';	//COOKIE验证随机码4(填写10~50个任意字符，最好多种字符组合)
$ecms_config['cks']['ckrndfive']='UWK7kU9DT1lU0nlmrSCWQ6bfNJoAT3h';	//COOKIE验证随机码5(填写10~50个任意字符，最好多种字符组合)

//网站防火墙配置
$ecms_config['fw']['eopen']=0;	//开启防火墙(0为关闭,1为开启)
$ecms_config['fw']['epass']='';	//防火墙加密密钥(填写10~50个任意字符，最好多种字符组合)
$ecms_config['fw']['adminloginurl']='';	//允许后台登陆的域名,设置后必须通过这个域名才能访问后台
$ecms_config['fw']['adminhour']='';	//允许登陆后台的时间：0~23小时，多个时间点用半角逗号格开
$ecms_config['fw']['adminweek']='';	//允许登陆后台的星期：星期0~6，多个星期用半角逗号格开
$ecms_config['fw']['adminckpassvar']='';	//后台预登陆验证变量名
$ecms_config['fw']['adminckpassval']='';	//后台预登陆认证码
$ecms_config['fw']['cleargettext']='';	//屏蔽提交敏感字符，多个用半角逗号格开

//-------EmpireCMS.Seting.area-------


//文件类型
$ecms_config['sets']['tranpicturetype']=',.jpg,.gif,.png,.bmp,.jpeg,.webp,';	//图片
$ecms_config['sets']['tranflashtype']=',.swf,.flv,.dcr,';	//FLASH
$ecms_config['sets']['mediaplayertype']=',.wmv,.asf,.wma,.mp3,.asx,.mid,.midi,.swf,.flv,.dcr,.ogg,.webm,';	//mediaplayer
$ecms_config['sets']['realplayertype']=',.rm,.ra,.rmvb,.mp4,.mov,.avi,.wav,.ram,.mpg,.mpeg,';	//realplayer




//***************** 以下部分为缓存，不用设置 **************

//-------EmpireCMS.Public.Cache-------

//------------e_public
$public_r=array('sitename'=>'ucbug软件站 - 免费软件下载_绿色软件下载',
'newsurl'=>'/',
'KeyId'=>'',
'KeySecret'=>'',
'model'=>'',
'SignName'=>'',
'filetype'=>'|.gif|.jpg|.swf|.rar|.zip|.mp3|.wmv|.txt|.doc|',
'filesize'=>2048,
'relistnum'=>8,
'renewsnum'=>100,
'min_keyboard'=>2,
'max_keyboard'=>20,
'search_num'=>10,
'search_pagenum'=>10,
'newslink'=>0,
'checked'=>0,
'searchtime'=>2,
'loginnum'=>5,
'logintime'=>60,
'addnews_ok'=>1,
'register_ok'=>0,
'indextype'=>'.html',
'goodlencord'=>0,
'goodtype'=>'',
'searchtype'=>'.html',
'exittime'=>40,
'smalltextlen'=>160,
'defaultgroupid'=>1,
'fileurl'=>'http://ucbug.zj.92fangzhan.net/d/file/',
'install'=>0,
'phpmode'=>0,
'dorepnum'=>300,
'loadtempnum'=>50,
'bakdbpath'=>'bdata',
'bakdbzip'=>'zip',
'downpass'=>'TJutmvHQobOncrgiB70y',
'filechmod'=>1,
'loginkey_ok'=>0,
'tbname'=>'news',
'limittype'=>0,
'redodown'=>1,
'downsofttemp'=>'[ <a href=\"#ecms\" onclick=\"window.open(\'[!--down.url--]\',\'\',\'width=300,height=300,resizable=yes\');\">[!--down.name--]</a> ]',
'onlinemovietemp'=>'[ <a href=\"#ecms\" onclick=\"window.open(\'[!--down.url--]\',\'\',\'width=300,height=300,resizable=yes\');\">[!--down.name--]</a> ]',
'lctime'=>1222406370,
'candocode'=>1,
'opennotcj'=>0,
'listpagetemp'=>'页次：[!--thispage--]/[!--pagenum--]&nbsp;每页[!--lencord--]&nbsp;总数[!--num--]&nbsp;&nbsp;&nbsp;&nbsp;[!--pagelink--]&nbsp;&nbsp;&nbsp;&nbsp;转到:[!--options--]',
'reuserpagenum'=>50,
'revotejsnum'=>100,
'readjsnum'=>100,
'qaddtran'=>1,
'qaddtransize'=>50,
'ebakthisdb'=>1,
'delnewsnum'=>300,
'markpos'=>5,
'markimg'=>'../data/mark/maskdef.gif',
'marktext'=>'',
'markfontsize'=>'5',
'markfontcolor'=>'',
'markfont'=>'../data/mark/cour.ttf',
'adminloginkey'=>1,
'php_outtime'=>0,
'listpagefun'=>'sys_ShowListPage',
'textpagefun'=>'sys_ShowTextPage',
'adfile'=>'thea',
'notsaveurl'=>'',
'rssnum'=>50,
'rsssub'=>300,
'savetxtf'=>',article.newstext,',
'dorepdlevelnum'=>300,
'listpagelistfun'=>'sys_ShowListMorePage',
'listpagelistnum'=>10,
'infolinknum'=>100,
'searchgroupid'=>0,
'opencopytext'=>0,
'reuserjsnum'=>100,
'reuserlistnum'=>8,
'opentitleurl'=>1,
'searchtempvar'=>1,
'showinfolevel'=>2,
'navfh'=>'>',
'spicwidth'=>105,
'spicheight'=>118,
'spickill'=>1,
'jpgquality'=>80,
'markpct'=>65,
'redoview'=>24,
'reggetfen'=>0,
'regbooktime'=>30,
'revotetime'=>30,
'fpath'=>1,
'filepath'=>'Y/m-d',
'nreclass'=>',',
'nreinfo'=>',',
'nrejs'=>',',
'nottobq'=>',',
'defspacestyleid'=>1,
'canposturl'=>'',
'openspace'=>1,
'defadminstyle'=>1,
'realltime'=>0,
'closeip'=>'',
'openip'=>'',
'hopenip'=>'',
'textpagelistnum'=>6,
'memberlistlevel'=>2,
'ebakcanlistdb'=>0,
'keytog'=>2,
'keytime'=>30,
'keyrnd'=>'Gw5cpSQ0niUq41xPV2tvSZuieVjGidiu',
'checkdorepstr'=>',0,0,0,3,',
'regkey_ok'=>0,
'opengetdown'=>0,
'gbkey_ok'=>0,
'fbkey_ok'=>0,
'newaddinfotime'=>0,
'classnavs'=>'<a href=\"/xwzx/\">新闻资讯</a>&nbsp;|&nbsp;<a href=\"/rjxz/\">软件下载</a>&nbsp;|&nbsp;<a href=\"/sjrj/\">手机软件</a>&nbsp;|&nbsp;<a href=\"/sjyx/\">手机游戏</a>&nbsp;|&nbsp;<a href=\"/djyx/\">单机游戏</a>&nbsp;|&nbsp;<a href=\"/msdt/\">魔兽地图</a>&nbsp;|&nbsp;<a href=\"/txzq/\">腾讯专区</a>&nbsp;|&nbsp;<a href=\"/yxfz/\">游戏辅助</a>&nbsp;|&nbsp;<a href=\"/wmyx/\">完美游戏</a>&nbsp;|&nbsp;<a href=\"/jcyx/\">九城游戏</a>&nbsp;|&nbsp;<a href=\"/wyyx/\">网易游戏</a>&nbsp;|&nbsp;<a href=\"/sdyx/\">盛大游戏</a>',
'adminstyle'=>',1,2,',
'docnewsnum'=>300,
'openschall'=>0,
'schallfield'=>1,
'schallminlen'=>3,
'schallmaxlen'=>20,
'schallnum'=>20,
'schallpagenum'=>10,
'dtcanbq'=>1,
'dtcachetime'=>43200,
'repkeynum'=>0,
'regacttype'=>0,
'opengetpass'=>1,
'hlistinfonum'=>30,
'qlistinfonum'=>25,
'dtncanbq'=>1,
'dtncachetime'=>43200,
'readdinfotime'=>60,
'qeditinfotime'=>0,
'onclicktype'=>0,
'onclickfilesize'=>10,
'onclickfiletime'=>60,
'schalltime'=>0,
'defprinttempid'=>1,
'opentags'=>1,
'tagstempid'=>1,
'usetags'=>',1,2,3,4,5,6,7,8,',
'chtags'=>'',
'tagslistnum'=>25,
'closeqdt'=>0,
'settop'=>0,
'qlistinfomod'=>0,
'gb_num'=>20,
'member_num'=>20,
'space_num'=>25,
'infolday'=>0,
'filelday'=>0,
'dorepkey'=>0,
'dorepword'=>0,
'onclickrnd'=>'',
'indexpagedt'=>0,
'keybgcolor'=>'',
'keyfontcolor'=>'',
'keydistcolor'=>'',
'indexpageid'=>0,
'closeqdtmsg'=>'',
'openfileserver'=>0,
'fs_purl'=>'',
'closemods'=>',error,gb,',
'fieldandtop'=>0,
'fieldandclosetb'=>'',
'filedatatbs'=>',1,',
'filedeftb'=>1,
'pldeftb'=>1,
'plurl'=>'/e/pl/',
'plkey_ok'=>1,
'plface'=>'||[~e.jy~]##1.gif||[~e.kq~]##2.gif||[~e.se~]##3.gif||[~e.sq~]##4.gif||[~e.lh~]##5.gif||[~e.ka~]##6.gif||[~e.hh~]##7.gif||[~e.ys~]##8.gif||[~e.ng~]##9.gif||[~e.ot~]##10.gif||',
'plf'=>'',
'pldatatbs'=>',1,',
'defpltempid'=>1,
'pl_num'=>12,
'plgroupid'=>0,
'closelisttemp'=>'',
'chclasscolor'=>'99C4E3',
'timeclose'=>'',
'timeclosedo'=>'',
'ipaddinfonum'=>0,
'ipaddinfotime'=>0,
'rewriteinfo'=>'',
'rewriteclass'=>'',
'rewriteinfotype'=>'',
'rewritetags'=>'',
'rewritepl'=>'',
'memberconnectnum'=>0,
'closehmenu'=>'',
'indexaddpage'=>0,
'modmemberedittran'=>0,
'modinfoedittran'=>0,
'php_adminouttime'=>1000,
'httptype'=>0,
'qinfoaddfen'=>0,
'bakescapetype'=>1,
'hkeytime'=>30,
'hkeyrnd'=>'b8dihuPSmtcvdWl4PCCmtVdqGIbd6q06RrqX',
'mhavedatedo'=>0,
'reportkey'=>0,
'ctimeopen'=>0,
'ctimelast'=>0,
'ctimeindex'=>0,
'ctimeclass'=>0,
'ctimelist'=>0,
'ctimetext'=>0,
'ctimett'=>0,
'ctimetags'=>0,
'ctimegids'=>'',
'ctimecids'=>'',
'ctimernd'=>'NLEYyH425x6BIJGMYIn1W5mnBcQndMJffg6XQzvoSw',
'qmadminuids'=>'',
'qmforumuids'=>'',
'qmotheruids'=>'',
'ckhavemoreport'=>1,
'usetotalnum'=>0,
'autodoopen'=>0,
'autodofile'=>0,
'autodoss'=>0,
'digglevel'=>0,
'diggcmids'=>'',
'spacegids'=>'',
'candocodetag'=>0,
'openern'=>'',
'ernurl'=>'',
'toqjf'=>'',
'qtoqjf'=>'',
'ctimeaddre'=>0,
'ctimeqaddre'=>0,
'deftempid'=>0,'add_www_92kaifa_com_img'=>'http://ucbug.zj.92fangzhan.net','add_www_92kaifa_com_kong'=>'ucbug.zj.92fangzhan.net','add_www_92kaifa_com_wenti'=>'','add_www_92kaifa_com_biaoyu'=>'ucbug软件站','add_www_92kaifa_com_biaoyus'=>'ucbug软件站：安全、绿色、放心的专业下载站！','add_www_92kaifa_com_laiyuan'=>'www.xxxx.com','add_www_92kaifa_com_gw'=>'http://www.qiyetwo.com','add_www_92kaifa_com_gaosu'=>'','add_www_92kaifa_com_dibu'=>'Copyright © 2004-2019 <span>ucbug软件站(www.xxxx.com)</span>.All Rights Reserved','add_www_92kaifa_com_pc'=>'http://ucbug.zj.92fangzhan.net','add_www_92kaifa_com_sj'=>'http://m.ucbug.zj.92fangzhan.net','add_www_92kaifa_com_beianhao'=>'备案编号：皖ICP备18016672号','add_www_92kaifa_com_tj'=>'');
//------------e_public

//moreports
$emoreport_r=array();
$emoreport_r['1']=Array('pid'=>'1',
'pname'=>'主访问端',
'purl'=>'/',
'ppath'=>'D:/wwwroot/ucbug/wwwroot/',
'postpass'=>'BwHHgkaFHTMZ88TcZNK0YxEd0XVt2t8fsoR7NdfybRcpCwbCYlLE3ISJwM7w',
'postfile'=>'',
'tempgid'=>'0',
'isclose'=>'0',
'closeadd'=>'0',
'openadmin'=>'0',
'rehtml'=>'3',
'mustdt'=>'0');
$emoreport_r['2']=Array('pid'=>'2',
'pname'=>'WAP端',
'purl'=>'http://m.ucbug.zj.92fangzhan.net/',
'ppath'=>'D:/wwwroot/ucbug/wwwroot/m/',
'postpass'=>'nneYP90YIOc8PQSOSEcpk2DldYxmcats16R7hhTZtoBtigo4ApnQSxIkJqGP',
'postfile'=>'',
'tempgid'=>'2',
'isclose'=>'0',
'closeadd'=>'1',
'openadmin'=>'0',
'rehtml'=>'0',
'mustdt'=>'0');

//moreports


//-------EmpireCMS.Public.Cache-------

$emod_pubr=Array('linkfields'=>'|');

$etable_r=array();
$etable_r['news']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>1);
$etable_r['download']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>2);
$etable_r['photo']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>3);
$etable_r['flash']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>4);
$etable_r['movie']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>5);
$etable_r['shop']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>6);
$etable_r['article']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>7);
$etable_r['info']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>8);
$etable_r['cards']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>9);
$etable_r['book']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>10);
$etable_r['book_category']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>11);


$emod_r=array();
$emod_r[1]=Array('mid'=>1,
'mname'=>'新闻系统模型',
'qmname'=>'新闻',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,newstime,titlepic,smalltext,writer,befrom,daxiao,banben,pingtai,yuyan,pingfen,xzlj,bibei,newstext,',
'qenter'=>',title,ftitle,special.field,titlepic,smalltext,writer,befrom,daxiao,banben,pingtai,yuyan,pingfen,xzlj,bibei,newstext,',
'listtempf'=>',title,ftitle,newstime,titlepic,smalltext,daxiao,banben,pingtai,yuyan,pingfen,xzlj,bibei,diggtop,',
'tempf'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,daxiao,banben,pingtai,yuyan,pingfen,xzlj,bibei,newstext,diggtop,',
'mustqenterf'=>',title,newstext,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,smalltext,',
'cj'=>',title,ftitle,newstime,titlepic,smalltext,daxiao,banben,pingtai,yuyan,pingfen,xzlj,bibei,newstext,',
'canaddf'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,daxiao,banben,pingtai,yuyan,pingfen,xzlj,bibei,newstext,',
'caneditf'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,daxiao,banben,pingtai,yuyan,pingfen,xzlj,bibei,newstext,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,diggtop,daxiao,banben,pingtai,yuyan,pingfen,xzlj,bibei,',
'tbdataf'=>',writer,befrom,newstext,',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,daxiao,banben,pingtai,yuyan,pingfen,xzlj,bibei,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|5|9|39|32|33|34|35|36|37|40|41|42|43|44|45|46|47|48|49|50|51|52|58|59|60|61|62|63|64|65|66|67|68|69|70|71|72|73|74|75|76|77|78|79|80|81|82|83|84|85|86|87|88|89|90|91|92|93|94|95|96|97|98|99|100|101|102|103|104|105|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>1,
'tbname'=>'news');
$emod_r[2]=Array('mid'=>2,
'mname'=>'下载系统模型',
'qmname'=>'软件',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,newstime,newstext,smalltext,daxiao,banben,pingtai,yuyan,pingfen,xzlj,titlepic,',
'qenter'=>',title,special.field,newstext,smalltext,daxiao,banben,pingtai,yuyan,pingfen,xzlj,titlepic,',
'listtempf'=>',title,newstime,newstext,smalltext,daxiao,banben,pingtai,yuyan,pingfen,xzlj,titlepic,',
'tempf'=>',title,newstime,newstext,smalltext,daxiao,banben,pingtai,yuyan,pingfen,xzlj,titlepic,',
'mustqenterf'=>',title,newstext,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,',
'cj'=>',title,newstime,newstext,smalltext,daxiao,banben,pingtai,yuyan,pingfen,xzlj,titlepic,',
'canaddf'=>',title,newstime,newstext,smalltext,daxiao,banben,pingtai,yuyan,pingfen,xzlj,titlepic,',
'caneditf'=>',title,newstime,newstext,smalltext,daxiao,banben,pingtai,yuyan,pingfen,xzlj,titlepic,',
'tbmainf'=>',title,titlepic,newstime,newstext,softfj,language,softtype,softsq,star,filetype,filesize,softsay,smalltext,daxiao,banben,pingtai,yuyan,pingfen,xzlj,',
'tbdataf'=>',homepage,demo,downpath,',
'tobrf'=>',softsay,',
'dohtmlf'=>',newstext,homepage,demo,softfj,language,softtype,softsq,star,filetype,filesize,downpath,softsay,smalltext,daxiao,banben,pingtai,yuyan,pingfen,xzlj,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',softsay,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|6|7|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>2,
'tbname'=>'download');
$emod_r[3]=Array('mid'=>3,
'mname'=>'图片系统模型',
'qmname'=>'图片',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,newstime,filesize,picsize,picfbl,picfrom,titlepic,picurl,morepic,num,width,height,picsay,',
'qenter'=>',title,special.field,filesize,picsize,picfbl,picfrom,titlepic,picurl,picsay,',
'listtempf'=>',title,newstime,titlepic,picurl,picsay,',
'tempf'=>',title,newstime,filesize,picsize,picfbl,picfrom,titlepic,picurl,morepic,num,width,height,picsay,',
'mustqenterf'=>',title,picsay,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,picsay,',
'cj'=>',title,newstime,filesize,picsize,picfbl,picfrom,titlepic,picurl,morepic,num,width,height,picsay,',
'canaddf'=>',title,newstime,filesize,picsize,picfbl,picfrom,titlepic,picurl,morepic,num,width,height,picsay,',
'caneditf'=>',title,newstime,filesize,picsize,picfbl,picfrom,titlepic,picurl,morepic,num,width,height,picsay,',
'tbmainf'=>',title,titlepic,newstime,picurl,picsay,',
'tbdataf'=>',filesize,picsize,picfbl,picfrom,morepic,num,width,height,',
'tobrf'=>',picsay,',
'dohtmlf'=>',filesize,picsize,picfbl,picfrom,picurl,morepic,num,width,height,picsay,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',picsay,',
'filef'=>',',
'imgf'=>',titlepic,picurl,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|7|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>3,
'tbname'=>'photo');
$emod_r[4]=Array('mid'=>4,
'mname'=>'FLASH系统模型',
'qmname'=>'FLASH',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,newstime,titlepic,flashwriter,email,star,filesize,flashurl,width,height,flashsay,',
'qenter'=>',title,special.field,titlepic,flashwriter,email,filesize,flashurl,width,height,flashsay,',
'listtempf'=>',title,newstime,titlepic,flashwriter,star,filesize,flashurl,flashsay,',
'tempf'=>',title,newstime,titlepic,flashwriter,email,star,filesize,flashurl,width,height,flashsay,',
'mustqenterf'=>',title,flashurl,flashsay,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,flashwriter,flashsay,',
'cj'=>',title,newstime,titlepic,flashwriter,email,star,filesize,flashurl,width,height,flashsay,',
'canaddf'=>',title,newstime,titlepic,flashwriter,email,star,filesize,flashurl,width,height,flashsay,',
'caneditf'=>',title,newstime,titlepic,flashwriter,email,star,filesize,flashurl,width,height,flashsay,',
'tbmainf'=>',title,titlepic,newstime,flashwriter,email,star,filesize,flashurl,width,height,flashsay,',
'tbdataf'=>',',
'tobrf'=>',flashsay,',
'dohtmlf'=>',flashwriter,email,star,filesize,flashurl,width,height,flashsay,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',flashsay,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',flashurl,',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|50|51|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>4,
'tbname'=>'flash');
$emod_r[5]=Array('mid'=>5,
'mname'=>'电影系统模型',
'qmname'=>'电影',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'qenter'=>',',
'listtempf'=>',title,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,moviefen,moviesay,',
'tempf'=>',title,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'mustqenterf'=>',title,moviesay,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,movietype,company,player,playadmin,moviesay,',
'cj'=>',title,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'canaddf'=>',title,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'caneditf'=>',title,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'tbmainf'=>',title,titlepic,newstime,movietype,company,movietime,player,playadmin,filetype,filesize,star,moviefen,moviesay,',
'tbdataf'=>',playdk,playtime,downpath,playerid,onlinepath,',
'tobrf'=>',moviesay,',
'dohtmlf'=>',movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',moviesay,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|42|43|44|45|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>5,
'tbname'=>'movie');
$emod_r[6]=Array('mid'=>6,
'mname'=>'商城系统模型',
'qmname'=>'商品',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,newstime,productno,pbrand,intro,unit,weight,tprice,price,buyfen,pmaxnum,titlepic,productpic,newstext,',
'qenter'=>',',
'listtempf'=>',title,newstime,productno,pbrand,intro,unit,weight,tprice,price,buyfen,pmaxnum,titlepic,productpic,newstext,psalenum,',
'tempf'=>',title,newstime,productno,pbrand,intro,unit,weight,tprice,price,buyfen,pmaxnum,titlepic,productpic,newstext,psalenum,',
'mustqenterf'=>',title,newstext,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,productno,pbrand,intro,price,newstext,',
'cj'=>',title,newstime,productno,pbrand,intro,unit,weight,tprice,price,buyfen,pmaxnum,titlepic,productpic,newstext,',
'canaddf'=>',title,newstime,productno,pbrand,intro,unit,weight,tprice,price,buyfen,pmaxnum,titlepic,productpic,newstext,',
'caneditf'=>',title,newstime,productno,pbrand,intro,unit,weight,tprice,price,buyfen,pmaxnum,titlepic,productpic,newstext,',
'tbmainf'=>',title,titlepic,newstime,productno,pbrand,intro,unit,weight,tprice,price,buyfen,pmaxnum,productpic,newstext,psalenum,',
'tbdataf'=>',',
'tobrf'=>',intro,newstext,',
'dohtmlf'=>',productno,pbrand,intro,unit,weight,tprice,price,buyfen,pmaxnum,productpic,newstext,psalenum,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',',
'filef'=>',',
'imgf'=>',titlepic,productpic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|46|47|48|49|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>6,
'tbname'=>'shop');
$emod_r[7]=Array('mid'=>7,
'mname'=>'文章系统模型',
'qmname'=>'文章',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,newstime,titlepic,smalltext,writer,befrom,texts,',
'qenter'=>',title,ftitle,special.field,titlepic,smalltext,writer,befrom,texts,',
'listtempf'=>',title,ftitle,newstime,titlepic,smalltext,diggtop,',
'tempf'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,texts,diggtop,',
'mustqenterf'=>',title,texts,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,smalltext,',
'cj'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,texts,',
'canaddf'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,texts,',
'caneditf'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,texts,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,texts,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,texts,',
'checkboxf'=>',',
'savetxtf'=>'newstext',
'editorf'=>',newstext,texts,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|31|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>7,
'tbname'=>'article');
$emod_r[8]=Array('mid'=>8,
'mname'=>'分类信息系统模型',
'qmname'=>'分类信息',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,newstime,smalltext,titlepic,myarea,email,mycontact,address,',
'qenter'=>',title,smalltext,titlepic,myarea,email,mycontact,address,',
'listtempf'=>',title,newstime,smalltext,titlepic,myarea,',
'tempf'=>',title,newstime,smalltext,titlepic,myarea,email,mycontact,address,',
'mustqenterf'=>',title,smalltext,myarea,email,',
'listandf'=>',myarea,',
'setandf'=>0,
'searchvar'=>',title,smalltext,myarea,',
'cj'=>',title,newstime,smalltext,titlepic,myarea,email,mycontact,address,',
'canaddf'=>',title,newstime,smalltext,titlepic,myarea,email,mycontact,address,',
'caneditf'=>',title,newstime,smalltext,titlepic,myarea,email,mycontact,address,',
'tbmainf'=>',title,titlepic,newstime,smalltext,myarea,',
'tbdataf'=>',email,mycontact,address,',
'tobrf'=>',smalltext,',
'dohtmlf'=>',smalltext,myarea,email,mycontact,address,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|11|12|13|14|15|16|18|19|20|21|23|24|25|26|28|29|30|31|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>8,
'tbname'=>'info');
$emod_r[9]=Array('mid'=>9,
'mname'=>'账号模型',
'qmname'=>'账号模型',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,titlepic,newstime,pattern,titlegame,appurl,appurlgl,appurlxz,permissions,starttime,endtime,zhuangtai,cardtxt,cardbody,jianjie,szm,',
'qenter'=>',titlepic,titlegame,',
'listtempf'=>',title,titlepic,newstime,lianqu,pattern,titlegame,appurl,appurlgl,appurlxz,permissions,starttime,endtime,zhuangtai,cardtxt,cardbody,jianjie,szm,shuliang,renum,fahaoid,taomun,',
'tempf'=>',title,titlepic,newstime,lianqu,pattern,titlegame,appurl,appurlgl,appurlxz,permissions,starttime,endtime,zhuangtai,cardtxt,cardbody,jianjie,szm,shuliang,renum,fahaoid,taomun,',
'mustqenterf'=>',title,',
'listandf'=>',title,newstime,pattern,titlegame,appurlxz,permissions,starttime,endtime,zhuangtai,shuliang,renum,fahaoid,',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,',
'canaddf'=>',title,titlepic,newstime,lianqu,pattern,titlegame,appurl,appurlgl,appurlxz,permissions,starttime,endtime,zhuangtai,cardtxt,cardbody,cardtext,jianjie,szm,shuliang,renum,fahaoid,renshu,weeks,day,taomun,',
'caneditf'=>',title,titlepic,newstime,lianqu,pattern,titlegame,appurl,appurlgl,appurlxz,permissions,starttime,endtime,zhuangtai,cardtxt,cardbody,cardtext,jianjie,szm,shuliang,renum,fahaoid,renshu,weeks,day,taomun,',
'tbmainf'=>',title,titlepic,newstime,lianqu,pattern,titlegame,appurl,appurlgl,appurlxz,permissions,starttime,endtime,zhuangtai,cardtxt,cardbody,cardtext,jianjie,szm,shuliang,renum,fahaoid,renshu,weeks,day,taomun,',
'tbdataf'=>',',
'tobrf'=>',',
'dohtmlf'=>',lianqu,pattern,titlegame,appurl,appurlgl,appurlxz,permissions,starttime,endtime,zhuangtai,cardtxt,cardbody,cardtext,jianjie,szm,shuliang,renum,fahaoid,renshu,weeks,day,taomun,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',',
'filef'=>',cardtxt,',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>',newstime,permissions,starttime,endtime,zhuangtai,shuliang,renum,fahaoid,renshu,weeks,day,',
'sonclass'=>'|58|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>9,
'tbname'=>'cards');
$emod_r[10]=Array('mid'=>10,
'mname'=>'图书系统模型',
'qmname'=>'图书',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,titlepic,newstime,category1,category2,category3,category4,category5,writer,smalltext,',
'qenter'=>',',
'listtempf'=>',title,titlepic,newstime,category1,category2,category3,category4,category5,writer,smalltext,',
'tempf'=>',title,titlepic,newstime,category1,category2,category3,category4,category5,writer,smalltext,',
'mustqenterf'=>',title,',
'listandf'=>',category1,category2,category3,category4,category5,',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,',
'canaddf'=>',title,titlepic,newstime,category1,category2,category3,category4,category5,writer,smalltext,',
'caneditf'=>',title,titlepic,newstime,category1,category2,category3,category4,category5,writer,smalltext,',
'tbmainf'=>',title,titlepic,newstime,category1,category2,category3,writer,smalltext,category4,category5,',
'tbdataf'=>',',
'tobrf'=>',',
'dohtmlf'=>',category1,category2,category3,writer,smalltext,category4,category5,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|60|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>10,
'tbname'=>'book');
$emod_r[11]=Array('mid'=>11,
'mname'=>'书本分类模型',
'qmname'=>'书本分类',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',type,pCategory,title,special.field,newstime,',
'qenter'=>',',
'listtempf'=>',type,pCategory,title,titlepic,newstime,',
'tempf'=>',type,pCategory,title,titlepic,newstime,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,',
'canaddf'=>',type,pCategory,title,titlepic,newstime,',
'caneditf'=>',type,pCategory,title,titlepic,newstime,',
'tbmainf'=>',title,titlepic,newstime,type,pCategory,',
'tbdataf'=>',',
'tobrf'=>',',
'dohtmlf'=>',type,pCategory,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|61|',
'maddfun'=>'',
'meditfun'=>'',
'qmaddfun'=>'',
'qmeditfun'=>'',
'tid'=>11,
'tbname'=>'book_category');


//-------EmpireCMS.Public.Cache-------