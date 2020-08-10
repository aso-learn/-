<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><?php $sy="cur"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>583下载站 - 免费软件下载_绿色软件下载</title>
    <meta name="keywords" content="软件下载,游戏下载,手机软件,手机游戏">
    <meta name="description" content="583下载站提供手机游戏破解版下载,4399造梦西游3修改器,洛克王国辅助,洛克王国旋风辅助,单机游戏修改器,安卓游戏修改器下载尽在583下载站!">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="applicable-device" content="pc" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url=<?=$public_r['add_www_92kaifa_com_sj']?>" />
    <meta http-equiv="mobile-agent" content="format=html5; url=<?=$public_r['add_www_92kaifa_com_sj']?>" />
    <script type="text/javascript">
        var from='';if(from!='wap'){var userAgentInfo=navigator.userAgent;if(userAgentInfo.indexOf("Android")>0||userAgentInfo.indexOf("iPhone")>0||userAgentInfo.indexOf("SymbianOS")>0||userAgentInfo.indexOf("Windows Phone")>0||userAgentInfo.indexOf("iPod")>0||userAgentInfo.indexOf("UCBrowser")>0){window.location.href="<?=$public_r['add_www_92kaifa_com_sj']?>"}}
    </script>
    <link href="/skin/static/css/style.css" type="text/css" rel="stylesheet" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="static/js/html5.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/skin/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/skin/static/js/plugin.js"></script>
    <script type="text/javascript" src="/skin/static/js/common.js"></script>
</head>
<body>
<header class="header">
    <div class="top">
        <div class="wrapper">
            <strong>583下载站：安全、绿色、放心的专业下载站！</strong>
        </div>
    </div>
    <div class="ban wrapper">
        <a href="/" class="logo" title="首页"><img src="/skin/static/images/logo.png" alt="首页" /></a>
        <div class="search">
            <form  class="bdcs-search-form"  id="searchform" name="searchform" method="post" action="/e/search/index.php" target="_blank">
                <span class="icon"></span>
                <input type="hidden" name="tbname" value="news">
                <input type="hidden" name="tempid" value="1">
                <input  class="bdcs-search-form-input"  type="text" style="float: left;display: inline;width: 385px;height: 26px;line-height: 26px;overflow: hidden;padding: 4px 60px 4px 5px;background: #fff;border: 2px solid #47b751;border-right: 0 none;font-size: 12px;color: #333;" name="keyboard" id="keyboard" placeholder="请输入搜索的关键词" />
                <input type="hidden" name="show" value="title,smalltext" />
                <input class="bdcs-search-form-submit " style="float: left;width: 72px;height: 38px;border: 0 none;cursor: pointer;background: #47b751;color: #fff;font-size: 14px;"  type="submit"  value="搜索"  />
            </form>
            <div class="bdcs-hot">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(0,4,4,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" class="bdcs-hot-item" target="_blank"><?=$bqr['title']?></a>
                <?php
}
}
?>
            </div>
        </div>
    </div>
  <?php
    if($GLOBALS[navclassid]==4||$class==4){$xw="cur";}if($GLOBALS[navclassid]==5){$rj="cur";}if($GLOBALS[navclassid]==6){$sjrj="cur";}if($GLOBALS[navclassid]==8||$class==8){$dj="cur";}
    if($GLOBALS[navclassid]==7){$sjyx="cur";}if($GLOBALS[navclassid]==9){$ms="cur";}
?>
    <nav class="nav clearfix">
        <ul class="wrapper">
            <li><a href="/" class="<?=$sy?>">首页</a></li>
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname from {$dbtbpre}enewsclass where bclassid=0 order by myorder,classid asc limit 4",5,24,0,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li class="<?=$zt?>"><a href="<?=$bqsr[classurl]?>"><?=$bqr[classname]?></a></li>
            <?php
}
}
?>
        </ul>
    </nav>
  <?php if(empty($class)){$nos="none";}else{if($class==0||$class==0||$class==5||$class==6||$class==7||$class==9){$nos="none";}else{$nos="";}} ?>
    <div class="subNav wrapper clearfix" style="display:<?=$nos?>">
        <div class="fl">
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}enewsclass where bclassid='$class' limit 10",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <a  href="<?=$bqsr[classurl]?>" title="<?=$bqr[classname]?>"><?=$bqr[classname]?></a>
            <?php
}
}
?>
        </div>
    </div>
</header>
<section class="home-rec main clearfix">
    <ul class="ppShow">
        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(5,10,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><?=$bqr['title']?></a></li>
        <?php
}
}
?>
    </ul>
    <dl>
        <dt>
            <a href="#">软件</a>
        </dt>
        <dd>
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(6,10,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" class="last"><?=$bqr['title']?></a>
            <?php
}
}
?>
        </dd>
    </dl>
    <dl>
        <dt>
            <a href="#">游戏</a>
        </dt>
        <dd>
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(7,10,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" class="last"><?=$bqr['title']?></a>
            <?php
}
}
?>
        </dd>
    </dl>
</section>
<section class="main mt10 clearfix">
    <script language="javascript" src="/skin/static/js/1.js"></script>
</section>
<section class="home-focus main mt10 clearfix">
    <div class="col-l">
        <div id="home-focus" class="FocusPic">
            <ul>
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(106,5,2,1,"",'newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" />
                    <s></s><strong><?=$bqr['title']?></strong></a></li>
                <?php
}
}
?>
            </ul>
        </div>
        <div class="tst">
            <div class="dt">
                手机必备软件
            </div>
            <ul class="clearfix">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(6,8,2,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a><span><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><?=$bqr['title']?></a><i style="font-size: 13px;">大小：<?=$bqr['daxiao']?><br />类别：<?=$bqsr[classname]?></i></span></li>
                <?php
}
}
?>
            </ul>
        </div>
    </div>
    <div class="col-auto">
        <div class="head">
            <div class="dt" id="home-head-tab">
                <span class="cur"><a href="/<?=$class_r[5]['classpath']?>/" title="<?=$class_r[5]['classname']?>">软件</a></span>
                <span><a href="/<?=$class_r[6]['classpath']?>/" title="<?=$class_r[6]['classname']?>">安卓</a></span>
                <span><a href="/<?=$class_r[7]['classpath']?>/" title="<?=$class_r[7]['classname']?>">手游</a></span>
                <span><a href="/<?=$class_r[106]['classpath']?>/" title="<?=$class_r[106]['classname']?>">端游</a></span>
            </div>
            <div id="home-head-content" class="clearfix">
                <div class="inner">
                    <ul>
                        <li class="new">新</li>
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(5,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <li><i class="new"><?=date("m-d",$bqr[newstime])?></i><a href="<?=$bqsr['classurl']?>" class="cname" title="<?=$bqsr[classname]?>">【<?=$bqsr[classname]?>】</a><a class="title" href="<?=$bqsr['titleurl']?>" title="<?=$bqsr['titleurl']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><?=$bqr['title']?></a></li>
                        <?php
}
}
?>
                    </ul>
                    <ul>
                        <li class="hot">热</li>
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(5,6,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <li><i class="new"><?=date("m-d",$bqr[newstime])?></i><a href="<?=$bqsr['classurl']?>" class="cname" title="<?=$bqsr[classname]?>">【<?=$bqsr[classname]?>】</a><a class="title" href="<?=$bqsr['titleurl']?>" title="<?=$bqsr['titleurl']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><?=$bqr['title']?></a></li>
                        <?php
}
}
?>
                    </ul>
                    <ul>
                        <li class="best">荐</li>
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(5,6,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <li><i class="new"><?=date("m-d",$bqr[newstime])?></i><a href="<?=$bqsr['classurl']?>" class="cname" title="<?=$bqsr[classname]?>">【<?=$bqsr[classname]?>】</a><a class="title" href="<?=$bqsr['titleurl']?>" title="<?=$bqsr['titleurl']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><?=$bqr['title']?></a></li>
                        <?php
}
}
?>
                    </ul>
                </div>
                <div class="inner hide">
                    <ul>
                        <li class="new">新</li>
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(6,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <li><i class="new"><?=date("m-d",$bqr[newstime])?></i><a href="<?=$bqsr['classurl']?>" class="cname" title="<?=$bqsr[classname]?>">【<?=$bqsr[classname]?>】</a><a class="title" href="<?=$bqsr['titleurl']?>" title="<?=$bqsr['titleurl']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><?=$bqr['title']?></a></li>
                        <?php
}
}
?>
                    </ul>
                    <ul>
                        <li class="hot">热</li>
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(6,6,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <li><i class="new"><?=date("m-d",$bqr[newstime])?></i><a href="<?=$bqsr['classurl']?>" class="cname" title="<?=$bqsr[classname]?>">【<?=$bqsr[classname]?>】</a><a class="title" href="<?=$bqsr['titleurl']?>" title="<?=$bqsr['titleurl']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><?=$bqr['title']?></a></li>
                        <?php
}
}
?>
                    </ul>
                    <ul>
                        <li class="best">荐</li>
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(6,6,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <li><i class="new"><?=date("m-d",$bqr[newstime])?></i><a href="<?=$bqsr['classurl']?>" class="cname" title="<?=$bqsr[classname]?>">【<?=$bqsr[classname]?>】</a><a class="title" href="<?=$bqsr['titleurl']?>" title="<?=$bqsr['titleurl']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><?=$bqr['title']?></a></li>
                        <?php
}
}
?>
                    </ul>
                </div>
                <div class="inner hide">
                    <ul>
                        <li class="new">新</li>
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(7,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <li><i class="new"><?=date("m-d",$bqr[newstime])?></i><a href="<?=$bqsr['classurl']?>" class="cname" title="<?=$bqsr[classname]?>">【<?=$bqsr[classname]?>】</a><a class="title" href="<?=$bqsr['titleurl']?>" title="<?=$bqsr['titleurl']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><?=$bqr['title']?></a></li>
                        <?php
}
}
?>
                    </ul>
                    <ul>
                        <li class="hot">热</li>
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(7,6,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <li><i class="new"><?=date("m-d",$bqr[newstime])?></i><a href="<?=$bqsr['classurl']?>" class="cname" title="<?=$bqsr[classname]?>">【<?=$bqsr[classname]?>】</a><a class="title" href="<?=$bqsr['titleurl']?>" title="<?=$bqsr['titleurl']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><?=$bqr['title']?></a></li>
                        <?php
}
}
?>
                    </ul>
                    <ul>
                        <li class="best">荐</li>
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(7,6,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <li><i class="new"><?=date("m-d",$bqr[newstime])?></i><a href="<?=$bqsr['classurl']?>" class="cname" title="<?=$bqsr[classname]?>">【<?=$bqsr[classname]?>】</a><a class="title" href="<?=$bqsr['titleurl']?>" title="<?=$bqsr['titleurl']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><?=$bqr['title']?></a></li>
                        <?php
}
}
?>
                    </ul>
                </div>
                <div class="inner hide">
                    <ul>
                        <li class="new">新</li>
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(106,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <li><i class="new"><?=date("m-d",$bqr[newstime])?></i><a href="<?=$bqsr['classurl']?>" class="cname" title="<?=$bqsr[classname]?>">【<?=$bqsr[classname]?>】</a><a class="title" href="<?=$bqsr['titleurl']?>" title="<?=$bqsr['titleurl']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><?=$bqr['title']?></a></li>
                        <?php
}
}
?>
                    </ul>
                    <ul>
                        <li class="hot">热</li>
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(106,6,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <li><i class="new"><?=date("m-d",$bqr[newstime])?></i><a href="<?=$bqsr['classurl']?>" class="cname" title="<?=$bqsr[classname]?>">【<?=$bqsr[classname]?>】</a><a class="title" href="<?=$bqsr['titleurl']?>" title="<?=$bqsr['titleurl']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><?=$bqr['title']?></a></li>
                        <?php
}
}
?>
                    </ul>
                    <ul>
                        <li class="best">荐</li>
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(106,6,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <li><i class="new"><?=date("m-d",$bqr[newstime])?></i><a href="<?=$bqsr['classurl']?>" class="cname" title="<?=$bqsr[classname]?>">【<?=$bqsr[classname]?>】</a><a class="title" href="<?=$bqsr['titleurl']?>" title="<?=$bqsr['titleurl']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><?=$bqr['title']?></a></li>
                        <?php
}
}
?>
                    </ul>
                </div>               
            </div>
        </div>
        <div class="aff">
            <div class="mogame">
                <h2 class="dt"><a href="/<?=$class_r[7]['classpath']?>/">更多</a>热门手游</h2>
                <div class="inner">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(7,9,12,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><?=$bqr['title']?></a>
                    <?php
}
}
?>
                </div>
            </div>
            <div style="width: 275px;height: 322px;border: 1px solid #ccc;text-align: center;line-height: 100px;background-color: #FFF;color: #333;font-family: 微软雅黑 Light;font-size: 25px;-moz-border-radius: 4px;-webkit-border-radius: 4px;margin-top: 10;margin-right: auto;margin-bottom: 0;margin-left: auto;">广告位 ID:1 275x322</div>
        </div>
    </div>
</section> 
  <section class="home-mod mt15 main clearfix">
    <div class="title" id="home-android-tab">
        <h2><b>软件</b>Software</h2>
        <div class="ctr">
            <a class="more" href="/<?=$class_r[5]['classpath']?>/" title="更多">更多+</a>
        </div>
    </div>
    <div id="home-android-content">
        <div class="content clearfix">
            <div class="rank">
                <h3><i></i>热门手机软件排行榜</h3>
                <ul class="toplist">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(5,9,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li><em class="num n<?=$bqno?>"><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" class="txt"><?=$bqr['title']?></a><p><a href="<?=$bqsr['titleurl']?>" class="img" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a><span><i><?=$bqr['daxiao']?> /
           <s class="star<?=$bqr['pingfen']?>"></s></i><a href="<?=$bqsr['titleurl']?>" title="下载<?=$bqr['title']?>">下载</a></span></p></li>
                    <?php
}
}
?>
                </ul>
            </div>
            <ul class="app-list clearfix">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(5,18,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a><p><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><?=$bqr['title']?></a></p><p class="lb"><?=$bqsr['classname']?></p></li>
                <?php
}
}
?>
            </ul>
        </div>
    </div>
</section>
<section class="home-mod mt15 main clearfix">
    <div class="title" id="home-android-tab">
        <h2><b>安卓</b>Android</h2>
        <div class="ctr">
            <a class="more" href="/<?=$class_r[6]['classpath']?>/" title="更多">更多+</a>
        </div>
    </div>
    <div id="home-android-content">
        <div class="content clearfix">
            <div class="rank">
                <h3><i></i>热门手机软件排行榜</h3>
                <ul class="toplist">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(6,9,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li><em class="num n<?=$bqno?>"><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" class="txt"><?=$bqr['title']?></a><p><a href="<?=$bqsr['titleurl']?>" class="img" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a><span><i><?=$bqr['daxiao']?> /
           <s class="star<?=$bqr['pingfen']?>"></s></i><a href="<?=$bqsr['titleurl']?>" title="下载<?=$bqr['title']?>">下载</a></span></p></li>
                    <?php
}
}
?>
                </ul>
            </div>
            <ul class="app-list clearfix">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(6,18,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a><p><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><?=$bqr['title']?></a></p><p class="lb"><?=$bqsr['classname']?></p></li>
                <?php
}
}
?>
            </ul>
        </div>
    </div>
</section>
<section class="home-mod mt15 main clearfix">
    <div class="title" id="home-mobilegame-tab">
        <h2 class="mg"><b>手游</b>M.Games</h2>
        <div class="ctr">
            <a class="more" href="/<?=$class_r[7]['classpath']?>/" title="更多">更多+</a>
        </div>
    </div>
    <div id="home-mobilegame-content">
        <div class="content clearfix">
            <div class="rank">
                <h3><i></i>热门手机游戏排行榜</h3>
                <ul class="toplist">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(7,9,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li><em class="num n<?=$bqno?>"><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" class="txt"><?=$bqr['title']?></a><p><a href="<?=$bqsr['titleurl']?>" class="img" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a><span><i><?=$bqr['daxiao']?> /
           <s class="star<?=$bqr['pingfen']?>"></s></i><a href="<?=$bqsr['titleurl']?>" title="下载<?=$bqr['title']?>">下载</a></span></p></li>
                    <?php
}
}
?>
                </ul>
            </div>
            <ul class="app-list clearfix">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(7,18,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a><p><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><?=$bqr['title']?></a></p><p class="lb"><?=$bqsr['classname']?></p></li>
                <?php
}
}
?>
            </ul>
        </div>
    </div>
</section>
<section class="home-mod mt15 main clearfix">
    <div class="title" id="home-game-tab">
        <h2 class="game"><b>端游</b>Game</h2>
        <div class="ctr">
            <a class="more" href="/<?=$class_r[106]['classpath']?>/" title="更多">更多+</a>
        </div>
    </div>
    <div id="home-game-content">
        <div class="content clearfix">
            <div class="rank">
                <h3><i></i>热门端游排行榜</h3>
                <ul class="toplist">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(106,9,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li><em class="num n<?=$bqno?>"><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" class="txt"><?=$bqr['title']?></a><p><a href="<?=$bqsr['titleurl']?>" class="img" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a><span><i><?=$bqr['daxiao']?> /
           <s class="star<?=$bqr['pingfen']?>"></s></i><a href="<?=$bqsr['titleurl']?>" title="下载<?=$bqr['title']?>">下载</a></span></p></li>
                    <?php
}
}
?>
                </ul>
            </div>
            <ul class="app-list clearfix">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(106,18,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a><p><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><?=$bqr['title']?></a></p><p class="lb"><?=$bqsr['classname']?></p></li>
                <?php
}
}
?>
            </ul>
        </div>
    </div>
</section>
<section class="home-mod friend-link mt5 main clearfix">
    <div class="title">
        <strong>友情链接</strong>
    </div>
    <div class="inner" id="friendlink">
        <ul>
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]enewslink where checked=1 order by myorder",20,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?><li><a href="<?=$bqr[lurl]?>" title="<?=$bqr[lname]?>" target="_blank"><?=$bqr[lname]?></a></li><?php
}
}
?>
        </ul>
    </div>
    <div id="flctr" class="flctr">
        <span class="prev" id="partnerPrev">&lt;</span>
        <span class="next disable" id="partnerNext">&gt;</span>
    </div>
</section>
<footer class="footer clearfix">
    <div class="link">
        <a href="/">网站首页</a> |
        <a href="/about.html" title="关于我们">关于本站</a> |
        <a href="/xzbz.html" title="下载帮助">下载帮助</a> ｜
        <a href="/xzsm.html" title="下载声明">下载声明</a> ｜
        <a href="/rjfabu.html" title="软件发布">软件发布</a> ｜
        <a href="/gghz.html" title="广告合作">广告合作</a> ｜
        <a href="/yqlj.html" title="友情链接">友情链接</a>
    </div>
    <p></p>
    <p><a href="javascript:void(0);" target="_blank" rel="nofollow"></a> </p>
    <div style="width:300px;margin:0 auto; padding:20px 0;">
        <a target="_blank" href="javascript:void(0);" rel="nofollow" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="/skin/static/images/beianicon.png" style="float:left;" /><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;"></p></a>
    </div>
    <p></p>
</footer>
<script language="javascript" src="/skin/static/js/17.js"></script>
</body>
</html>