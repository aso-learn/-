<?php
//---------------------------用户自定义标签函数文件
//tag静态化链接
function user_HtmlTagLink($tagid){
    global $dp_r;
    include_once ECMS_PATH.'e/dongpo/tag/dp_funs.php';
    $url=dp_TagUrl($tagid);
    return $url;
}
//信息所属tag
function user_ReturnTagStr($id,$classid,$infotags){
    global $dbtbpre,$empire,$public_r;
    $tagstr='';
    if($infotags){
        $tsql=$empire->query("select tagid from {$dbtbpre}enewstagsdata where id=".$id." and classid=".$classid."");
        while($tr=$empire->fetch($tsql)){
            $tt=$empire->fetch1("select * from {$dbtbpre}enewstags where tagid=".$tr['tagid']." limit 1");
            if($tt['tagid']){
                $tagurl=user_hTagLink($tr['tagid']);
                $tagstr.='<a href="'.$tagurl.'" title="'.$tt['tagname'].'" class="c1" target="_blank">'.$tt['tagname'].'</a>';
            }
        }
    }
    return $tagstr;
}

?>