<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?=$grpagetitle?>-<?=$public_r['add_www_92kaifa_com_biaoyu']?></title>
    <meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
    <meta name="description" content="<?=$grpagetitle?>" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="applicable-device" content="pc" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url=<?=$public_r['add_www_92kaifa_com_sj']?><?=$grtitleurl?>" />
    <meta http-equiv="mobile-agent" content="format=html5; url=<?=$public_r['add_www_92kaifa_com_sj']?><?=$grtitleurl?>" />
    <script type="text/javascript">
        var from='';if(from!='wap'){var userAgentInfo=navigator.userAgent;if(userAgentInfo.indexOf("Android")>0||userAgentInfo.indexOf("iPhone")>0||userAgentInfo.indexOf("SymbianOS")>0||userAgentInfo.indexOf("Windows Phone")>0||userAgentInfo.indexOf("iPod")>0||userAgentInfo.indexOf("UCBrowser")>0){window.location.href="<?=$public_r['add_www_92kaifa_com_sj']?><?=$grtitleurl?>"}}
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
<section class="main clearfix">
    
</section>
<nav class="crumb-nav clearfix">
    所在位置：
    <?=$grurl?>
</nav>
<section class="dlContent main clearfix">
    <div class="col-l">
        <div class="inner">
            <div class="att">
                <img class="ico" src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" alt="<?=$grpagetitle?>" />
                <h1><?=$grpagetitle?></h1>
            </div>
            <div class="param-box">
                <div class="param-content">
                    <ul class="param-list">
                        <li>软件大小：<span><?=$ecms_gr[daxiao]?></span></li>
                        <li>更新日期：<span><?=date('Y-m-d',$ecms_gr[newstime])?></span></li>
                        <li>软件语言：<span><?=$ecms_gr[yuyan]?></span></li>
                        <li>软件类别：<span><?=$class_r[$ecms_gr[classid]][classname]?></span></li>
                        <li>软件授权：<span><?=$ecms_gr[banben]?></span></li>
                        <li>评分等级：<span class="star<?=$ecms_gr[pingfen]?>"></span></li>
                        <li>插件情况：<span>无插件请放心使用</span></li>
                        <li>软件官网：<span><a href="http://192.168.0.88" target="_blank" rel="nofollow">583下载站</a></span></li>
                        <li>适用平台：<span><?=$ecms_gr[pingtai]?></span></li>
                        <li></li>
                    </ul>
                  <a href="#123">
                    <div class="dl-btn">
                        <span class="bendown"  title="本地下载"><b>本地下载</b><i>文件大小：<?=$ecms_gr[daxiao]?></i></span>
                    </div>
                  </a>
                </div>
                <div class="ad" id="downShow_paramAd">
                    <script src=/d/js/acmsd/thea3.js></script>
                </div>
            </div>
            <div class="tap mt30" id="down-nav">
                <div class="tablist">
                    <span class="cur">软件介绍</span>
                    <span>人气软件</span>
                    <span>相关文章</span>
                    <span class="down-btn">下载地址</span>
                </div>
            </div>
            <article class="content" id="down-content">
                <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
            </article>
            <div class="news-tags clearfix">
                <span class="tt">标签</span>
                <?php
$tsql=$empire->query("select tagid from {$dbtbpre}enewstagsdata where id=".$navinfor['id']." and classid=".$navinfor['classid']."");
                while($tr=$empire->fetch($tsql)){
                $tt=$empire->fetch1("select * from {$dbtbpre}enewstags where tagid=".$tr['tagid']." limit 1");
                $tagurl=user_HtmlTagLink($tr['tagid']);
                ?>
                <a href="<?=$tagurl?>" title="<?=$tt['tagname']?>"><?=$tt['tagname']?></a>
                <?
}
?>
            </div>
            <div class="pub-mod down-box mt10" id="down-server">
                <div class="hd">
                    <a name="123"><span>下载地址</span></a>
                </div>
                <div class="dlServer">
                    <h3 class="mt10"><?=$grpagetitle?></h3>
                  <div class="sendErr-wrap">
                        如不能下载请联系网站管理员！
                    </div>
                    <ul class="dl-list downloader bzClick" style="cursor: pointer;" bz_track="42">
                      <?php
$down="\\/url.php?url=".base64_encode($navinfor[xzlj]); 
?>
                        <li><a href="<?=$down?>" title="北京电信下载">北京电信下载</a></li>
                        <li><a href="<?=$down?>" title="广东电信下载">广东电信下载</a></li>
                        <li><a href="<?=$down?>" title="河南网通下载">河南网通下载</a></li>
                        <li><a href="<?=$down?>" title="深圳网通下载">深圳网通下载</a></li>
                    </ul>                                         
                </div>
                <div class="ad" id="downShow_serverAd">
							<script src=/d/js/acmsd/thea4.js></script>
                </div>
                <div class="ad2" id="downShow_serverAd2">
							<script src=/d/js/acmsd/thea5.js></script>
                </div>
            </div>
            <div class="dl-ad"></div>
            <div class="pub-mod mt10" id="buzz-app">
                <div class="hd">
                    <span>人气软件</span>
                </div>
                <ul class="dllist-row5">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',10,12,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li><a href="<?=$bqsr['titleurl']?>" preview="<?=$bqr['titlepic']?>" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><span><?=$bqr['title']?></span><p><?=$bqr['daxiao']?><em>/</em><?=$bqr['yuyan']?></p></a></li>
                    <?php
}
}
?>
                </ul>
            </div>
            <div class="pub-mod mt10" id="related-news">
                <div class="hd">
                    <span>相关文章</span>
                </div>
                <ul class="text-list mt10">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(selfinfo,12,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li class="col2"><em class="do"></em><a href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>"><?=$bqr['title']?></a></li>
                    <?php
}
}
?>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-r">
        <div class="pub-mod mt20">
            <ul class="same-list">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo','8,8',0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li><i></i><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><?=$bqr['title']?></a></li>
                <?php
}
}
?>
            </ul>
        </div>
        <div class="pub-mod mt15 clearfix">
            <div class="tab" id="downshow-new-tab">
                <span class="cur">今日更新推荐</span>
                <span>热门标签</span>
            </div>
            <div class="clearfix" id="downshow-new-content">
                <ul class="load-list clearfix">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo','0,8',0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li><a href="<?=$bqsr['titleurl']?>" class="btn" title="<?=$bqr['title']?>">下载</a><p><a href="<?=$bqsr['titleurl']?>" class="img" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a><span><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><?=$bqr['title']?></a><i><?=$bqr['daxiao']?>/ <?=date("Y-m-d",$bqr[newstime])?></i></span></p></li>
                    <?php
}
}
?>
                </ul>
                <ul class="hot-tag clearfix hide">
                    <?php   $tsql=$empire->query("select * from {$dbtbpre}enewstags where isgood=1 limit 30");
                    while($tr=$empire->fetch($tsql)){
                    $tagurl=user_HtmlTagLink($tr['tagid']);
                    ?>
                    <li><a href="<?=$tagurl?>" title="<?=$tr['tagname']?>"><?=$tr['tagname']?></a></li>
                    <?
                    }
                    ?>

                </ul>
            </div>
        </div>
        <div class="pub-mod mt15 clearfix">
            <div class="tab" id="downshow-top-tab">
                <span class="cur">下载周排行</span>
                <span>下载总排行</span>
            </div>
            <div class="clearfix" id="downshow-top-content">
                <ul class="toplist">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',12,1,1,'newstime>UNIX_TIMESTAMP()-86400*30');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li><em class="num n<?=$bqno?>"><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" class="txt"><?=$bqr['title']?></a><p><a href="<?=$bqsr['titleurl']?>" class="img" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a><span><i><?=$bqr['daxiao']?> /
           <s class="star<?=$bqr['pingfen']?>"></s></i><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>">下载</a></span></p></li>
                    <?php
}
}
?>
                </ul>
                <ul class="toplist hide">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',12,1,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li><em class="num n<?=$bqno?>"><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" class="txt"><?=$bqr['title']?></a><p><a href="<?=$bqsr['titleurl']?>" class="img" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a><span><i><?=$bqr['daxiao']?> /
           <s class="star<?=$bqr['pingfen']?>"></s></i><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>">下载</a></span></p></li>
                    <?php
}
}
?>
                </ul>
            </div>
        </div>
        <div class="pub-mod mt15 clearfix">
            <div class="hd">
                <span class="lv">装机必备软件</span>
            </div>
            <div class="the-installed clearfix">
                <div class="type">
                </div>
                <ul class="soft-list">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(0,18,5,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><img class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><span><?=$bqr['title']?></span></a></li>
                    <?php
}
}
?>
                </ul>
            </div>
        </div>
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
<div style="display:none"><?=$public_r['add_www_92kaifa_com_tj']?><script src=/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script></div>
<script type="text/javascript">
    $(function(){
        var tags_a=$(".hot-tag li a");
        tags_a.each(function(){
            var x=40;
            var y=0;
            var rand=parseInt(Math.random()*(x-y+1)+y);
            $(this).addClass("c"+rand)
        });
        downPage();
    })
</script>
</body>
</html>