<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
    <?php
    $cr=$empire->fetch1("select bname from {$dbtbpre}enewsclass where classid='$GLOBALS[navclassid]' limit 1");
    ?>
    <meta charset="utf-8" />
    <title><?=$cr['bname']?>-<?=$public_r['add_www_92kaifa_com_biaoyu']?></title>
    <meta name="keywords" content="[!--pagekey--]" />
    <meta name="description" content="[!--pagedes--]" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="applicable-device" content="pc" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url=<?=$public_r['add_www_92kaifa_com_sj']?><?=sys_ReturnBqClassUrl($class_r[$GLOBALS[navclassid]]);?>" />
    <meta http-equiv="mobile-agent" content="format=html5; url=<?=$public_r['add_www_92kaifa_com_sj']?><?=sys_ReturnBqClassUrl($class_r[$GLOBALS[navclassid]]);?>" />
    <script type="text/javascript">
        var from='';if(from!='wap'){var userAgentInfo=navigator.userAgent;if(userAgentInfo.indexOf("Android")>0||userAgentInfo.indexOf("iPhone")>0||userAgentInfo.indexOf("SymbianOS")>0||userAgentInfo.indexOf("Windows Phone")>0||userAgentInfo.indexOf("iPod")>0||userAgentInfo.indexOf("UCBrowser")>0){window.location.href="<?=$public_r['add_www_92kaifa_com_sj']?><?=sys_ReturnBqClassUrl($class_r[$GLOBALS[navclassid]]);?>"}}
    </script>
    <link href="/skin/static/css/style.css" type="text/css" rel="stylesheet" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/skin/static/js/html5.min.js"></script>
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
            <form  class="bdcs-search-form"  id="searchform" name="searchform" method="post" action="[!--news.url--]e/search/index.php" target="_blank">
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
<section class="main clearfix">
    <script language="javascript" src="/skin/static/js/4.js"></script>
</section>
<nav class="crumb-nav clearfix">
    所在位置：
    [!--newsnav--]
</nav>
<section class="main clearfix">
    <div class="sidebar fl">
        <div class="pub-mod mt10">
            <div class="bd">
                <span>热门推荐</span>
            </div>
            <ul class="app-icon-list clearfix">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',9,2,0,'','onclick DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li><a href="<?=$bqsr['titleurl']?>" preview="<?=$bqr['titlepic']?>" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><span><?=$bqr['title']?></span></a></li>
                <?php
}
}
?>
            </ul>
        </div>
        <div class="pub-mod mt10 clearfix">
            <div class="tap" id="downshow-top-tab">
                <span class="cur">下载周排行</span>
                <span>下载总排行</span>
            </div>
            <div class="clearfix" id="downshow-top-content">
                <ul class="toplist">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',12,1,0,'newstime>UNIX_TIMESTAMP()-86400*30','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li><em class="num n<?=$bqno?>"><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" class="txt"><?=$bqr['title']?></a> <p><a href="http://192.168.0.88/soft/17034.html" class="img" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a><span><i><?=$bqr['daxiao']?> /
           <s class="star<?=$bqr['pingfen']?>"></s></i><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>">下载</a></span></p> </li>
                    <?php
}
}
?>
                </ul>
                <ul class="toplist hide">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',12,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li><em class="num n<?=$bqno?>"><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" class="txt"><?=$bqr['title']?></a> <p><a href="http://192.168.0.88/soft/17034.html" class="img" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a><span><i><?=$bqr['daxiao']?> /
           <s class="star<?=$bqr['pingfen']?>"></s></i><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>">下载</a></span></p> </li>
                    <?php
}
}
?>
                </ul>
            </div>
        </div>
    </div>
    <div class="sideauto fr">
        <div class="listPage-commend mt20">
            <div class="title">
                <h2>本类推荐</h2>
            </div>
            <div class="listPage-recom">
                <span class="prev"></span>
                <span class="next"></span>
                <div class="inner">
                    <ul class="clearfix">
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',9,2,0,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <li><a class="img" href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><span><?=esub($bqr['title'],20)?></span></a></li>
                        <?php
}
}
?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="down-list-box">
            <div class="hd">
                <h2>[!--pagetitle--]<span>共有<? @sys_TotalData($GLOBALS[navclassid],0,0,0);?>款软件</span></h2>
            </div>
            <ul class="down-list">
               
                [!--empirenews.listtemp--]
                <!--list.var1-->
                [!--empirenews.listtemp--]
            </ul>
        </div>
        <div id="pages" class="clearfix mt20">
            [!--show.listpage--]
        </div>
    </div>
    <div class="clearfix"></div>
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
<div style="display:none"><?=$public_r['add_www_92kaifa_com_tj']?></div>
<script type="text/javascript">
    $(function(){
        nextPrev(".listPage-recom .inner",".listPage-recom .prev",".listPage-recom .next",9);
    })
</script>
</body>
</html>