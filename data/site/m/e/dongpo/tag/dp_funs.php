<?php
	$extend_r=array();
	$extend_r['eid']=1002;
	$extend_r['ename']='TAG静态化插件';
	$extend_r['ver']=2.3;
	$extend_r['path']='tag';

	require_once ECMS_PATH.'e/class/EmpireCMS_version.php';

	$version=EmpireCMS_VERSION;
	$version=floatval($version)*10;

	$dbchar=$version>66?$ecms_config['db']['dbchar']:$phome_db_dbchar;

	$pagechar=$version>66?$ecms_config['sets']['pagechar']:$phome_ecms_charver;

	require_once ECMS_PATH.'e/dongpo/'.$extend_r['path'].'/config.php';
/*
$dpma=(int)$_GET['dpma'];
if(!$dpma)
{
	$extend_r=array();
	$extend_r['eid']=1002;
	$extend_r['ename']='TAG静态化插件';
	$extend_r['ver']=2.3;
	$extend_r['path']='tag';

	require_once ECMS_PATH.'e/class/EmpireCMS_version.php';

	$version=EmpireCMS_VERSION;
	$version=floatval($version)*10;

	$dbchar=$version>66?$ecms_config['db']['dbchar']:$phome_db_dbchar;

	$pagechar=$version>66?$ecms_config['sets']['pagechar']:$phome_ecms_charver;

	require_once ECMS_PATH.'e/dongpo/'.$extend_r['path'].'/config.php';

}
else
{
	define('InEmpireCMS',TRUE);
	require 'config.php';
	CheckKillMa($dpma);
}
*/
/**
	********************	辅助功能	********************
*/

//返回tag目录名
function dp_ReTagPy($py,$tagname,$tagid){
	global $empire,$dbtbpre,$dp_r;
	if($py){
		return $py;
	}
	if($dp_r['pt'])
	{
		return $tagid;
	}
	$py=dp_PinyinFun($tagname);
	$shu=$empire->gettotal("select count(*) as total from {$dbtbpre}enewstagsadd where py='$py' and tagid<>$tagid");
	if(!$shu){
		$pypath=$py;
	}else{
		$pypath=$py.'_'.$tagid;
	}
	return $pypath;
}

//tag链接
function dp_TagUrl($tagid){
	global $empire,$dbtbpre,$dp_r;
	$tagid=(int)$tagid;
	if(!$tagid){
		return '';
	}
	$t=$empire->fetch1("select * from {$dbtbpre}enewstags where tagid='$tagid'");
	if(!$t['tagid']){
		return '';
	}
	$add=$empire->fetch1("select * from {$dbtbpre}enewstagsadd where tagid='$tagid'");
	if(empty($add['py'])){
		return '';
	}
	$ca=$empire->fetch1("select path from {$dbtbpre}enewstagsclassadd where classid=".$t['cid']." limit 1");
	if($ca['path']){
		$capath=$ca['path'].'/';
	}else{
		$capath='';
	}
	$path=eReturnDomainSiteUrl().$dp_r['path'].'/'.$capath.$add['py'].'/';
	return $path;
}


/**
	********************	主要功能	********************
*/

/*-------------------------------------------TAG-------------------------------------------*/

//增加TAGS
function dp_AddTags($add){
	global $empire,$dbtbpre;
	CheckExma();
	$tagname=RepPostVar($add['tagname']);
	$bname=RepPostVar($add['bname']);
	$tempid=(int)$add['tempid'];
	if(empty($bname)){
		$bname=$tagname;
	}
	$add['py']=RepPostVar($add['py']);
	$isgood=(int)$add['isgood'];
	$classid=(int)$add['classid'];
	$intro=addslashes(RepPhpAspJspcode($add['intro']));
	//检查tag名
	if(!$tagname)
	{
		printerror("tag名称为空","history.go(-1)",1,0,1);
	}
	$num=$empire->gettotal("select count(*) as total from {$dbtbpre}enewstags where tagname='$tagname' limit 1");
	if($num)
	{
		printerror("tag名称已存在","history.go(-1)",1,0,1);
	}
	//检查tag目录
	if($add['py']){
		$shu=$empire->gettotal("select count(*) as total from {$dbtbpre}enewstagsadd where py='".$add['py']."'");
		if($shu)
		{
			printerror("此目录已存在","history.go(-1)",1,0,1);
		}
	}
	//写入主表
	$sql=$empire->query("insert into {$dbtbpre}enewstags(tagname,num,isgood,cid) values('$tagname',0,$isgood,'$classid');");
	$tagid=$empire->lastid();
	$pypath=dp_ReTagPy($add['py'],$tagname,$tagid);
	//写入副表
	$sql2=$empire->query("insert into {$dbtbpre}enewstagsadd(tagid,bname,intro,py,tempid) values('$tagid','$bname','$intro','$pypath','$tempid');");
	if($sql)
	{
		$rurl=dp_ReturnGobackUrl("ListTags.php",1,1);
		printerror("新增Tag成功！",$rurl,1,0,1);
	}
	else
	{
		printerror("数据库错误！","history.go(-1)",1,0,1);
	}
}

//修改TAGS
function dp_EditTag($add){
	global $empire,$dbtbpre,$dp_r;
	CheckExma();
	$tagid=(int)$add['tagid'];
	$tempid=(int)$add['tempid'];
	$tagname=RepPostVar($add['tagname']);
	$bname=RepPostVar($add['bname']);
	$oldpy=RepPostVar($add['oldpy']);
	$oldcid=RepPostVar($add['oldcid']);
	$add['py']=RepPostVar($add['py']);
	if(empty($bname)){
		$bname=$tagname;
	}
	$classid=(int)$add['classid'];
	$isgood=(int)$add['isgood'];
	$intro=addslashes(RepPhpAspJspcode($add['intro']));
	if(!$tagid||!$tagname)
	{
		printerror("提交参数错误","history.go(-1)",1,0,1);
	}
	$num=$empire->gettotal("select count(*) as total from {$dbtbpre}enewstags where tagname='$tagname' and tagid<>$tagid limit 1");
	if($num)
	{
		printerror("tag名称已存在！","history.go(-1)",1,0,1);
	}
	$pypath=$add['py'];
	if($add['py']&&$add['py']<>$oldpy){
		$shu=$empire->gettotal("select count(*) as total from {$dbtbpre}enewstagsadd where py='$add[py]' and tagid<>$tagid");
		if($shu){
			printerror("此目录已存在！","history.go(-1)",1,0,1);
		}
	}	
	if(empty($pypath)){
		$pypath=dp_ReTagPy($pypath,$tagname,$tagid);
	}
	//删除老目录1
	if(($oldpy&&$pypath<>$oldpy) || $classid<>$oldcid){
		$ca=$empire->fetch1("select path from {$dbtbpre}enewstagsclassadd where classid=".$oldcid." limit 1");
		if($ca['path']){
			$capath=$ca['path'].'/';
		}else{
			$capath='';
		}
		$tagfile=ECMS_PATH.$dp_r['path'].'/'.$capath.$pypath.'/';
		if(file_exists($tagfile)){
			DelPath($tagfile);
		}
	}
	//更新主表
	$sql=$empire->query("update {$dbtbpre}enewstags set tagname='$tagname',isgood='$isgood',cid='$classid' where tagid='$tagid'");
	//更新副表
	$empire->query("replace into {$dbtbpre}enewstagsadd(tagid,bname,intro,py,tempid) values('$tagid','$bname','$intro','$pypath','$tempid');");

	if($sql)
	{
		printerror("修改tag成功！",$_SERVER['HTTP_REFERER'],1,0,1);
	}
	else
	{
		printerror("数据库错误！","history.go(-1)",1,0,1);
	}
}

//删除TAG无返回
function dp_DelOneTag($tagid){
	global $empire,$dbtbpre,$dp_r;
	$tagid=(int)$tagid;
	if(!$tagid)
	{
		return '';
	}
	$t=$empire->fetch1("select * from {$dbtbpre}enewstags where tagid='$tagid' limit 1");
	$ca=$empire->fetch1("select path from {$dbtbpre}enewstagsclassadd where classid=".$t['cid']." limit 1");
	if($ca['path']){
		$capath=$ca['path'].'/';
	}else{
		$capath='';
	}
	$add=$empire->fetch1("select * from {$dbtbpre}enewstagsadd where tagid='$tagid' limit 1");
	$pypath=$add['py'];
	$ispath=$capath.$pypath;
	$tagfile=ECMS_PATH.$dp_r['path'].'/'.$ispath.'/';
	if(file_exists($tagfile)&&$pypath){
		DelPath($tagfile);
	}
	$sql=$empire->query("delete from {$dbtbpre}enewstags where tagid='$tagid'");
	$dsql=$empire->query("select * from {$dbtbpre}enewstagsdata where tagid='$tagid'");
	while($d=$empire->fetch($dsql)){
		dp_ReInfoTags($d['id'],$d['classid'],$t['tagname'],0);
	}
	$empire->query("delete from {$dbtbpre}enewstagsdata where tagid='$tagid'");
	$empire->query("delete from {$dbtbpre}enewstagsadd where tagid='$tagid'");
	if($sql){	
		return 1;
	}
	else{
		return 0;
	}
}

//删除单个TAG
function dp_DelTag($tagid){
	global $empire,$dbtbpre;
	$tagid=(int)$tagid;
	if(!$tagid)
	{
		printerror("参数错误！","history.go(-1)",1,0,1);
	}
	$ok=dp_DelOneTag($tagid);
	if($ok)
	{
		printerror("删除tag成功！",$_SERVER['HTTP_REFERER'],1,0,1);
	}
	else
	{
		printerror("数据库错误！","history.go(-1)",1,0,1);
	}
}

//批量删除TAGS
function dp_DelTags_all($add){
	global $empire,$dbtbpre;
	$tagid=$add['tagid'];
	$count=count($tagid);
	if(!$count)
	{
		printerror("请选择tag","history.go(-1)",1,0,1);
	}
	$ids='';
	$dh='';
	for($i=0;$i<$count;$i++)
	{
		$id=(int)$tagid[$i];
		$sql=dp_DelOneTag($id);
	}
	if($sql)
	{
		printerror("批量删除tag成功！",$_SERVER['HTTP_REFERER'],1,0,1);
	}
	else
	{
		printerror("数据库错误！","history.go(-1)",1,0,1);
	}
}

//批量增加TAGS
function dp_AddMoreTags($add){
	global $empire,$dbtbpre;
	$tempid=(int)$add['tempid'];
	$isgood=(int)$add['isgood'];
	$classid=(int)$add['classid'];
	$tgn_r=explode("\r\n",$add['morename']);
	$count=count($tgn_r);
	if(empty($add['morename'])){
		printerror("数据不足","history.go(-1)",1,0,1);
	}
	if($count>1000){
		printerror("数据超过1000行","history.go(-1)",1,0,1);
	}
	$allok=0;
	for($i=0;$i<$count;$i++){
		$tagname=RepPostVar($tgn_r[$i]);
		if(empty($tagname)){
			$allok+=1;
			continue;
		}
		$num=$empire->gettotal("select count(*) as total from {$dbtbpre}enewstags where tagname='$tagname' limit 1");
		if($num){
			$allok+=1;
			continue;
		}
		//写入主表
		$sql=$empire->query("insert into {$dbtbpre}enewstags(tagname,num,isgood,cid) values('$tagname',0,$isgood,'$classid');");
		$tagid=$empire->lastid();
		$pypath=dp_ReTagPy($py,$tagname,$tagid);
		//写入副表
		$sql2=$empire->query("insert into {$dbtbpre}enewstagsadd(tagid,bname,intro,py,tempid) values('$tagid','$tagname','','$pypath','$tempid');");
	}
	$rurl=dp_ReturnGobackUrl("AddMoreTag.php",1,1);
	if($allok)
	{
		$mes="操作完成，有".$allok."个tag名称因错误未增加！";
		printerror($mes,$rurl,1,0,1);
	}
	else
	{
		printerror("新增Tag成功！",$rurl,1,0,1);
	}
}

/*-------------------------------------------分类-------------------------------------------*/

//增加分类
function dp_AddTAgClass($add){
	global $empire,$dbtbpre;
	if(!$add['classname'])
	{
		printerror("参数错误","history.go(-1)",1,0,1);
    }
	$sql=$empire->query("insert into {$dbtbpre}enewstagsclass(classname) values('$add[classname]');");
	$lastid=$empire->lastid();
	$empire->query("insert into {$dbtbpre}enewstagsclassadd(classid,tempid,modid,path) values($lastid,$add[tempid],$add[modid],'$add[path]');");
	$rurl=dp_ReturnGobackUrl("ListClass.php",1,1);
	if($sql)
	{
		printerror("增加分类成功",$rurl,1,0,1);
	}
	else
	{
		printerror("数据库错误","history.go(-1)",1,0,1);
	}
}

//修改分类
function dp_EditTagClass($add){
	global $empire,$dbtbpre;
	//取得返回信息
	$classid=(int)$add['classid'];
	if(!$add['classname']||!$classid)
	{
		printerror("参数错误","history.go(-1)",1,0,1);
    }
	$sql=$empire->query("update {$dbtbpre}enewstagsclass set classname='$add[classname]' where classid='$classid'");
	$empire->query("replace into {$dbtbpre}enewstagsclassadd(classid,tempid,modid,path) values($classid,$add[tempid],$add[modid],'$add[path]');");
	$rurl=dp_ReturnGobackUrl("ListClass.php",1,1);
	if($sql)
	{
		printerror("修改分类成功",$rurl,1,0,1);
	}
	else
	{
		printerror("数据库错误","history.go(-1)",1,0,1);
	}
}

//删除分类
function dp_DelTagClass($classid){
	global $empire,$dbtbpre;
	//取得返回信息
	$classid=(int)$classid;
	if(!$classid)
	{
		printerror("参数错误","history.go(-1)",1,0,1);
    }
	$r=$empire->fetch1("select classname from {$dbtbpre}enewstagsclass where classid=$classid");
	$sql=$empire->query("delete from {$dbtbpre}enewstagsclass where classid=$classid");
	$empire->query("delete from {$dbtbpre}enewstagsclassadd where classid=$classid");
	$rurl=dp_ReturnGobackUrl("ListClass.php",1,1);
	if($sql)
	{
		printerror("删除分类成功",$rurl,1,0,1);
	}
	else
	{
		printerror("数据库错误","history.go(-1)",1,0,1);
	}
}

/*-------------------------------------------推送-------------------------------------------*/

function ReturnInfoTbname_this($tbname,$checked=1,$stb=1){
	global $dbtbpre;
	if(empty($checked))//待审核
	{
		$r['tbname']=$dbtbpre.'ecms_'.$tbname.'_check';
		$r['datatbname']=$dbtbpre.'ecms_'.$tbname.'_check_data';
	}
	else//已审核
	{
		$r['tbname']=$dbtbpre.'ecms_'.$tbname;
		$r['datatbname']=$dbtbpre.'ecms_'.$tbname.'_data_'.$stb;
	}
	return $r;
}

//更新信息infotags
function dp_ReInfoTags($id,$classid,$infotags,$dp=1){
	global $empire,$dbtbpre,$class_r,$version;
	if(empty($infotags)){
		return '';
	}
	$tbname=$class_r[$classid][tbname];
	if(empty($tbname)){
		return '';
	}
	$infotbr=ReturnInfoTbname_this($tbname);
	if($version>66){
		$tb=$infotbr['datatbname'];
	}else{
		$tb=$infotbr['tbname'];
	}
	$t=$empire->fetch1("select infotags from ".$tb." where id=$id limit 1");
	if($dp==1){ //增加
		$zf=$infotags;
		if($t[infotags]){
			$zf=$t[infotags].','.$infotags;
		}
	}else{ //减去
		$zf='';
		if($t[infotags]){
			$str=$t[infotags];
			$s=$infotags;
			$s=','.$s.',';
			$str=','.$str.',';
			$k=str_replace($s,',',$str);
			$zf=substr($k,1,-1);
		}
	}
	$empire->query("update ".$tb." set infotags='$zf' where id=$id limit 1");
}

//推送信息至tag
function dp_PushInfoToTag($add){
	global $empire,$dbtbpre,$class_r;
	CheckExma();
	$tagid=$add['tagid']; //tagid
	$id=$add['id'];
	$classid=(int)$add['classid'];
	$tid=(int)$add['tid'];
	$count=count($tagid);
	if(!$count||!$id)
	{
		echo"<script>alert('未选择tag');window.close();</script>";
		exit();
	}
	//表名
	$tbname='';
	if($classid)
	{
		$tbname=$class_r[$classid]['tbname'];
		$mid=$class_r[$classid]['modid'];	
	}
	elseif($tid)
	{
		$tbr=$empire->fetch1("select tbname from {$dbtbpre}enewstable where tid='$tid'");
		$tbname=$tbr['tbname'];
	}
	if(!$tbname)
	{
		printerror("数据库错误","history.go(-1)",1,0,1);
	}
	for($i=0;$i<$count;$i++)
	{
		$true_tagid=(int)$tagid[$i];
		if(!$true_tagid)
		{
			continue;
		}
		$r=explode(',',$id);
		$count2=count($r);
		for($n=0;$n<$count2;$n++)
		{
			$bookid=(int)$r[$n];
			if(!$bookid)
			{
				continue;
			}
			dp_MvBkToTag($bookid,$true_tagid,$tbname,$mid);
		}
	}
	echo"<script>alert('推送成功');window.close();</script>";
	exit();
}

//单个信息推送到tag
function dp_MvBkToTag($bookid,$tagid,$tbname,$mid){
	global $empire,$dbtbpre,$class_r,$version;
	if(!$bookid||!$tagid){
		return '';
	}
	if($version>66){
		$p='_index';
	}else{
		$p='';
	}
	$cin=$empire->fetch1("select classid,newstime,checked from {$dbtbpre}ecms_".$tbname.$p." where id=$bookid");
	$classid=$cin[classid];
	if(!$cin[checked]){
		return '';
	}
	if(!$mid){
		$mid=$class_r[$classid][modid];
	}
	
	//验证tagid
	$t=$empire->fetch1("select cid,tagid,tagname from {$dbtbpre}enewstags where tagid=$tagid limit 1");
	if($t[tagid]!=$tagid){
		return '';
	}
	//检查重复
	$d=$empire->fetch1("select tid from {$dbtbpre}enewstagsdata where tagid=$tagid and id=$bookid and classid=$classid limit 1");
	if($d[tid]){
		return ''; //已存在则跳过
	}
	dp_ReInfoTags($bookid,$classid,$t['tagname']);
	//插入数据表
	$empire->query("insert into {$dbtbpre}enewstagsdata(tagid,classid,id,newstime,mid) values($tagid,$classid,$bookid,$cin[newstime],$mid)");
	//更新书籍数量
	$empire->query("update {$dbtbpre}enewstags set num=num+1 where tagid=$t[tagid]");
}

//搜索信息批量推送信息到tag
function dp_Tui_All($add){
	global $empire,$dbtbpre,$class_r;
	$tagid=(int)$add[tagid];
	if(!$tagid){
		printerror("参数缺失！","history.go(-1)",1,0,1);
	}
	$t=$empire->fetch1("select * from {$dbtbpre}enewstags where tagid=$tagid limit 1");
	if(!$t[tagid]){
		printerror("数据库错误！","history.go(-1)",1,0,1);
	}
	if(!count($add[id])){
		printerror("请选择信息","history.go(-1)",1,0,1);
	}
	$tbname=RepPostVar($add[tbname]);
	$kk=0;
	for($i=0;$i<count($add[id]);$i++){
		$id=(int)$add[id][$i];		
		$r=$empire->fetch1("select id,classid,newstime from {$dbtbpre}ecms_".$tbname." where id='$id' limit 1");
		$classid=$r[classid];
		$mid=$class_r[$classid][modid];
		//检查信息是否存在
		$cz=$empire->fetch1("select tid from {$dbtbpre}enewstagsdata where id=$id and classid=$classid and tagid=$tagid limit 1");
		if(!$cz[tid]){
			$empire->query("insert into {$dbtbpre}enewstagsdata(tagid,classid,id,newstime,mid) values($tagid,$classid,$id,$r[newstime],$mid)");
			$empire->query("update {$dbtbpre}enewstags set num=num+1 where tagid=$tagid");
			dp_ReInfoTags($id,$classid,$t['tagname']);
		}
	}
	printerror("推送完成！",$_SERVER['HTTP_REFERER'],1,0,1);
}

/*-------------------------------------------信息-------------------------------------------*/

//信息从tag中移除
function dp_MvOutB($tid){
	global $empire,$dbtbpre;
	$tid=(int)$tid;
	//验证tid
	$t=$empire->fetch1("select * from {$dbtbpre}enewstagsdata where tid=$tid");
	if($t[tid]!=$tid){
		return '';
	}
	$g=$empire->fetch1("select * from {$dbtbpre}enewstags where tagid=$t[tagid] limit 1");
	//从tagsdata表中删除
	$empire->query("delete from {$dbtbpre}enewstagsdata where tid=$tid");
	//更新tag数量
	$empire->query("update {$dbtbpre}enewstags set num=num-1 where tagid=$t[tagid]");
	dp_ReInfoTags($t['id'],$t['classid'],$g['tagname'],0);
}

//单个信息从tag中移除
function dp_DelBfromT($tid){
	if(!$tid){
		printerror("参数错误！","history.go(-1)",1,0,1);
	}
	dp_MvOutB($tid);
	printerror("移除信息成功！",$_SERVER['HTTP_REFERER'],1,0,1);
}

//批量移除
function dp_DelBfromT_All($add){
	global $empire,$dbtbpre,$class_r;
	$infotid=$add['tid'];
	$newstime=$add['newstime'];
	$count=count($infotid);
	if(!$count)
	{
		printerror("无数据","history.go(-1)",1,0,1);
	}
	for($i=0;$i<$count;$i++)
	{
		$doinfotid=(int)$infotid[$i];
		dp_MvOutB($doinfotid);
	}
	printerror("移除信息成功",$_SERVER['HTTP_REFERER'],1,0,1);
}

//批量修改发布时间
function dp_EditMoreInfoTime($add){
	global $empire,$dbtbpre,$class_r;
	$infotid=$add['infotid'];
	$newstime=$add['newstime'];
	$count=count($infotid);
	if(!$count)
	{
		printerror("无数据","history.go(-1)",1,0,1);
	}
	for($i=0;$i<$count;$i++)
	{
		$doinfotid=(int)$infotid[$i];
		$donewstime=$newstime[$i]?to_time($newstime[$i]):time();
		$empire->query("update {$dbtbpre}enewstagsdata set newstime='$donewstime' where tid='$doinfotid'");
	}
	printerror("修改时间成功",$_SERVER['HTTP_REFERER'],1,0,1);
}

//批量刷新信息
function dp_ReInfo($add){
	global $empire,$dbtbpre,$class_r;
	$infotid=$add['tid'];
	$count=count($infotid);
	if(!$count)
	{
		printerror("无数据","history.go(-1)",1,0,1);
	}
	for($i=0;$i<$count;$i++)
	{
		$doinfotid=(int)$infotid[$i];
		$t=$empire->fetch1("select * from {$dbtbpre}enewstagsdata where tid=$doinfotid");
		if($t[tid]!=$doinfotid){
			continue;
		}
		$tbname=$class_r[$t['classid']]['tbname'];
		if(empty($tbname)){
			continue;
		}
		GetHtml($t['classid'],$t['id'],$infor,0);
	}
	printerror("刷新信息成功",$_SERVER['HTTP_REFERER'],1,0,1);
}

/*-------------------------------------------生成-------------------------------------------*/

//刷新tag页
function dp_TagHtml($add,$tadd){
	global $empire,$dbtbpre,$emod_r,$public_r,$class_r,$class_zr,$fun_r,$class_tr,$level_r,$etable_r,$dp_r,$mob_r;
	CheckExma();
	$pub=$empire->fetch1("select opentags,tagstempid,usetags,chtags,tagslistnum from {$dbtbpre}enewspublic limit 1");
	if(empty($pub[opentags])){
		return '';
	}
	@include_once ECMS_PATH."e/dongpo/mob/config.php";
	$pagetitle=htmlspecialchars($add['tagname']);
	$pagekey=htmlspecialchars($tadd[bname]);
	$pagedes=htmlspecialchars($tadd[intro]);
	$listtempid=$dp_r['tagstempid'];
	$tagclassid=(int)$add['cid'];
	$cadd=$empire->fetch1("select tempid,path from {$dbtbpre}enewstagsclassadd where classid=$tagclassid limit 1");
	if($cadd['tempid']){
		$listtempid=$cadd['tempid'];
	}
	if($tadd['tempid']){
		$listtempid=$tadd['tempid'];
	}
	$lencord=$dp_r['tagslistnum'];//记录数
	$tmulu=$tadd['py'];
	//无拼音时自动生成
	if(empty($tadd['py'])){
		$tmulu=dp_ReTagPy($tadd['py'],$add['tagname'],$add['tagid']);
		$empire->query("replace into {$dbtbpre}enewstagsadd (tagid,py) values($add[tagid],'$tmulu')");
	}
	$dopath=ECMS_PATH.$dp_r['path']."/".$tmulu.'/';
	$dolink=$public_r[newsurl].$dp_r['path']."/".$tmulu.'/';
	$mdolink=$mob_r['msiteurl'].$dp_r['path']."/".$tmulu.'/';
	if($cadd['path']){
		$dopath1=ECMS_PATH.$dp_r['path']."/".$cadd['path']."/";
		DoMkdir($dopath1);
		$dopath=$dopath1.$tmulu.'/';
		$dolink=$public_r[newsurl].$dp_r['path']."/".$cadd['path']."/".$tmulu.'/';
		$mdolink=$mob_r['msiteurl'].$dp_r['path']."/".$cadd['path']."/".$tmulu.'/';
	}
	DoMkdir($dopath);
	$dofile='index';
	$dotype='.html';

	$GLOBALS['navclassid']=$add['tagid'];

	//列表模板
	$listtemp_r=GetListTemp($listtempid);//取出列表模板
    $listtemp=$listtemp_r[temptext]; //页面模板
	$subnews=$listtemp_r[subnews]; //截取简介
	$subtitle=$listtemp_r[subtitle];//截取标题
	$docode=$listtemp_r[docode]; //使用程序代码
	$listvar=str_replace('[!--news.url--]',$public_r[newsurl],$listtemp_r[listvar]); //替换网站首页链接
	$rownum=$listtemp_r[rownum]; //每次显示
	$formatdate=$listtemp_r[showdate]; //时间格式


	//分页参数
	$pagefunr['dofile']=$dofile;
	//分页列表函数
	if(!empty($public_r['listpagefun'])||!empty($public_r['listpagelistfun']))
	{
		if(strstr($listtemp,'[!--show.page--]'))//下拉式
		{
			$thefun=$public_r['listpagefun'];
			$bereplistpage='[!--show.page--]';
		}
		else//列表式
		{
			$thefun=$public_r['listpagelistfun'];
			$bereplistpage='[!--show.listpage--]';
		}
	}
	else
	{
		$thefun='sys_ShowListPage';
		$bereplistpage='[!--show.page--]';
	}

	$url='<a href="'.$public_r[newsurl].'">首页</a> > <a href="'.$dolink.'">'.$add[tagname].'</a>';

	//替换模板变量——编译模板	
	$listtemp=str_replace('[!--newsnav--]',$url,$listtemp);//位置导航
	$listtemp=str_replace('[!--news.url--]',$public_r[newsurl],$listtemp); //替换网站首页链接
	$listtemp=str_replace('[!--sitename--]',$public_r[sitename],$listtemp); //替换网站首页链接
	$listtemp=Class_ReplaceSvars($listtemp,$url,$selfclassid,$pagetitle,$pagekey,$pagedes,$classimg,$add,$doenews);
	$listtemp=str_replace('[!--pagetitle--]',$pagetitle,$listtemp);//页面标题
	$listtemp=str_replace('[!--pagedes--]',$pagedes,$listtemp);//页面描述

	$no=1;
	$ok=0;
	$changerow=1;

	//总数
	$tidin='';
	$num=0;
	$numsql=$empire->query("select tid,classid,id from {$dbtbpre}enewstagsdata where tagid='".$add['tagid']."'");
	while($numr=$empire->fetch($numsql)){
		if(empty($class_r[$numr[classid]][tbname]))
		{
			continue;
		}
		$ninfor=$empire->fetch1("select * from {$dbtbpre}ecms_".$class_r[$numr[classid]][tbname]." where id='$numr[id]' limit 1");
		if(empty($ninfor['id']))
		{
			continue;
		}
		if($tnum&&$ninfor['tnum']!=$tnum){
			continue;
		}
		if($tcai&&$ninfor['tcai']!=$tcai){
			continue;
		}
		if($grade&&$ninfor['grade']!=$grade){
			continue;
		}
		$tidin.=','.$numr['tid'];
		$num+=1;
	}
	$twhere=' and tid<0';
	if($tidin){
		$tidin=substr($tidin,1);
		$twhere=" and tid in (".$tidin.") ";
	}

	$query="select classid,id from {$dbtbpre}enewstagsdata where tagid='".$add['tagid']."' ".$twhere;
	$query.=" order by newstime desc";
	if($dp_r['maxnum']&&$num>$dp_r['maxnum']){
		$num=$dp_r['maxnum'];
	}
	$page=ceil($num/$lencord);
	if($dp_r['repagenum']&&$page>$dp_r['repagenum']){
		$page=$dp_r['repagenum'];
		$num=$page*$lencord;
	}

	//取得列表模板
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	//无信息
	if(!$num)
	{
		$noinfopath=$dopath.$dofile.$dotype;
		NotinfoListHtml($noinfopath,$list_r,'',$mdolink);
		return "";
	}
	$listtext=$list_r[1];
	$pp=0;
	$sql=$empire->query($query);
	while($k=$empire->fetch($sql))
	{
		$tbname=$class_r[$k[classid]][tbname];
		$pp+=1;
		
		//主表
		$infor=$empire->fetch1("select * from {$dbtbpre}ecms_".$tbname." where id='$k[id]' limit 1");
		if(empty($infor['id']))
		{
			continue;
		}
		//副表
		$infor_f=$empire->fetch1("select * from {$dbtbpre}ecms_".$tbname."_data_1 where id='$k[id]' limit 1");
		$mid=$class_r[$infor[classid]][modid];
		$field=ReturnReplaceListF($mid);
		//替换列表变量
		$repvar=ReplaceTagListVars($pp,$listvar,$subnews,$subtitle,$formatdate,$infor,$field,$docode);

		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		if($no%$lencord==0||($num%$lencord<>0&&$num==$no))
		{
			$ok+=1;
			$pagenum=ceil($no/$lencord);
			//首页
			if($pagenum==1)
			{
				$path=$dopath.$dofile.$dotype;
			}
			else
			{
				$path=$dopath.$dofile.'_'.$ok.$dotype;
			}
			//取得分页参数
			$returnpager=$thefun($num,$pagenum,$dolink,$dotype,$page,$lencord,$ok,$myoptions,$pagefunr);
			$showpage=$returnpager['showpage'];
			$myoptions=$returnpager['option'];
			$list1=str_replace($bereplistpage,$showpage,$list_r[0]);
			$list2=str_replace($bereplistpage,$showpage,$list_r[2]);
			//多余数据
			if($changerow<=$rownum&&$listtext<>$list_r[1])
			{
				$string.=$listtext;
			}
			$listtext=$list_r[1];
			$changerow=1;
			$string=$list1.$string.$list2;
			//移动端网址
			if($pagenum==1){
				$murl=$mdolink;
			}else{
				$murl=$mdolink."index_".$ok.$dotype;
			}
			$string=str_replace('[--murl--]',$murl,$string);
			//替换分页数
			$string=str_replace('[!--list.pageno--]',($pagenum==1?'':$pagenum),$string);
			WriteFiletext($path,$classlevel.$string);
			$string='';
		}
		$no++;
	}
	$empire->free($sql);
	if($mob_r['mob_open']){
		dp_mTagHtml($add,$tadd,$tmulu,$num,$query);
	}
}

//刷新tag页_m站
function dp_mTagHtml($add,$tadd,$tmulu,$num,$query){
	global $empire,$dbtbpre,$emod_r,$public_r,$class_r,$class_zr,$fun_r,$class_tr,$level_r,$etable_r,$dp_r,$mob_r;
	$pagetitle=htmlspecialchars($add['tagname']);
	$pagekey=htmlspecialchars($tadd[bname]);
	$pagedes=htmlspecialchars($tadd[intro]);
	$listtempid=$dp_r['tagstempid'];
	$tagclassid=(int)$add['cid'];
	include_once ECMS_PATH."e/dongpo/mob/dp_funs.php";

	$cadd=$empire->fetch1("select tempid,path from {$dbtbpre}enewstagsclassadd where classid=$tagclassid limit 1");
	if($cadd['tempid']){
		$listtempid=$cadd['tempid'];
	}
	if($tadd['tempid']){
		$listtempid=$tadd['tempid'];
	}
	$lencord=$dp_r['tagslistnum'];//记录数

	$dopath=$mob_r['msitepath'].$dp_r['path']."/".$tmulu.'/';
	$dolink=dp_mindexurl().$dp_r['path']."/".$tmulu.'/';
	$pcdolink=$mob_r['newsurl'].$dp_r['path']."/".$tmulu.'/';
	if($cadd['path']){
		$dopath1=$mob_r['msitepath'].$dp_r['path']."/".$cadd['path']."/";
		DoMkdir($dopath1);
		$dopath=$dopath1.$tmulu.'/';
		$dolink=dp_mindexurl().$dp_r['path']."/".$cadd['path']."/".$tmulu.'/';
		$pcdolink=$mob_r['newsurl'].$dp_r['path']."/".$cadd['path']."/".$tmulu.'/';
	}
	DoMkdir($dopath);
	$dofile='index';
	$dotype='.html';

	$GLOBALS['navclassid']=$add['tagid'];

	//列表模板
	$listtemp_r=mGetListTemp($listtempid);//取出列表模板
    $listtemp=$listtemp_r[temptext]; //页面模板
	$subnews=$listtemp_r[subnews]; //截取简介
	$subtitle=$listtemp_r[subtitle];//截取标题
	$docode=$listtemp_r[docode]; //使用程序代码
	$listvar=str_replace('[!--news.url--]',dp_mindexurl(),$listtemp_r[listvar]); //替换网站首页链接
	$rownum=$listtemp_r[rownum]; //每次显示
	$formatdate=$listtemp_r[showdate]; //时间格式

	//分页参数
	$pagefunr['dofile']=$dofile;
	//分页列表函数
	if(!empty($public_r['listpagefun'])||!empty($public_r['listpagelistfun']))
	{
		if(strstr($listtemp,'[!--show.page--]'))//下拉式
		{
			$thefun=$public_r['listpagefun'];
			$bereplistpage='[!--show.page--]';
		}
		else//列表式
		{
			$thefun=$public_r['listpagelistfun'];
			$bereplistpage='[!--show.listpage--]';
		}
	}
	else
	{
		$thefun='sys_ShowListPage';
		$bereplistpage='[!--show.page--]';
	}

	$url='<a href="'.dp_mindexurl().'">首页</a> > <a href="'.$dolink.'">'.$add[tagname].'</a>';

	//替换模板变量——编译模板	
	$listtemp=str_replace('[!--newsnav--]',$url,$listtemp);//位置导航
	$listtemp=str_replace('[!--news.url--]',dp_mindexurl(),$listtemp); //替换网站首页链接
	$listtemp=str_replace('[!--sitename--]',$public_r[sitename],$listtemp); //替换网站首页链接
	$listtemp=Class_ReplaceSvars($listtemp,$url,$selfclassid,$pagetitle,$pagekey,$pagedes,$classimg,$add,$doenews);
	$listtemp=str_replace('[!--pagetitle--]',$pagetitle,$listtemp);//页面标题
	$listtemp=str_replace('[!--pagedes--]',$pagedes,$listtemp);//页面描述

	$no=1;
	$ok=0;
	$changerow=1;

	$page=ceil($num/$lencord);
	if($dp_r['repagenum']&&$page>$dp_r['repagenum']){
		$page=$dp_r['repagenum'];
		$num=$page*$lencord;
	}

	//取得列表模板
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);

	$listtext=$list_r[1];
	$pp=0;
	$sql=$empire->query($query);
	while($k=$empire->fetch($sql))
	{
		$tbname=$class_r[$k[classid]][tbname];
		$pp+=1;
		
		//主表
		$infor=$empire->fetch1("select * from {$dbtbpre}ecms_".$tbname." where id='$k[id]' limit 1");
		if(empty($infor['id']))
		{
			continue;
		}
		//副表
		$infor_f=$empire->fetch1("select * from {$dbtbpre}ecms_".$tbname."_data_1 where id='$k[id]' limit 1");
		$mid=$class_r[$infor[classid]][modid];
		$field=ReturnReplaceListF($mid);
		//替换列表变量
		$repvar=ReplaceTagListVars($pp,$listvar,$subnews,$subtitle,$formatdate,$infor,$field,$docode);

		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		if($no%$lencord==0||($num%$lencord<>0&&$num==$no))
		{
			$ok+=1;
			$pagenum=ceil($no/$lencord);
			//首页
			if($pagenum==1)
			{
				$path=$dopath.$dofile.$dotype;
			}
			else
			{
				$path=$dopath.$dofile.'_'.$ok.$dotype;
			}
			//取得分页参数
			$returnpager=$thefun($num,$pagenum,$dolink,$dotype,$page,$lencord,$ok,$myoptions,$pagefunr);
			$showpage=$returnpager['showpage'];
			$myoptions=$returnpager['option'];
			$list1=str_replace($bereplistpage,$showpage,$list_r[0]);
			$list2=str_replace($bereplistpage,$showpage,$list_r[2]);
			//多余数据
			if($changerow<=$rownum&&$listtext<>$list_r[1])
			{
				$string.=$listtext;
			}
			$listtext=$list_r[1];
			$changerow=1;
			$string=$list1.$string.$list2;
			//pc端网址
			if($pagenum==1){
				$pcurl=$pcdolink;
			}else{
				$pcurl=$pcdolink."index_".$ok.$dotype;
			}
			$string=str_replace('[--pcurl--]',$pcurl,$string);
			//替换分页数
			$string=str_replace('[!--list.pageno--]',($pagenum==1?'':$pagenum),$string);
			WriteFiletext($path,$classlevel.$string);
			$string='';
		}
		$no++;
	}
	$empire->free($sql);
}

//标签替换
function ReplaceTagListVars($no,$listtemp,$subnews,$subtitle,$formatdate,$r,$field,$docode=0){
	global $empire,$public_r,$class_r,$class_zr,$fun_r,$dbtbpre,$emod_r,$class_tr,$level_r,$tag,$tagadd,$navclassid,$etable_r;
	if(empty($r[oldtitle]))
	{
		$r[oldtitle]=$r[title];
	}
	if($docode==1)
	{
		$listtemp=stripSlashes($listtemp);
		eval($listtemp);
	}
	$ylisttemp=$listtemp;
	$mid=$field['mid'];
	$fr=$field['fr'];
	$fcount=$field['fcount'];
	for($i=1;$i<$fcount;$i++)
	{
		$f=$fr[$i];
		$value=$r[$f];
		$spf=0;
		if($f=='title')//标题
		{
	        if(!empty($subtitle))//截取字符
	        {
				$value=sub($value,0,$subtitle,false);
	        }
			$value=DoTitleFont($r[titlefont],$value);
			$spf=1;
		}
		elseif($f=='newstime')//时间
		{
			//$value=date($formatdate,$value);
			$value=format_datetime($value,$formatdate);
			$spf=1;
		}
		elseif($f=='titlepic')//标题图片
		{
			if(empty($value))
		    {
				$value=$public_r[newsurl].'e/data/images/notimg.gif';
			}
			$spf=1;
		}
		elseif(strstr($emod_r[$mid]['smalltextf'],','.$f.','))//简介
		{
			if(!empty($subnews))//截取字符
			{
				$value=sub($value,0,$subnews,false);
			}
		}
		elseif($f=='befrom')//信息来源
		{
			$spf=1;
		}
		elseif($f=='writer')//作者
		{
			$spf=1;
		}
		if($spf==0&&!strstr($emod_r[$mid]['editorf'],','.$f.','))
		{
			if(strstr($emod_r[$mid]['tobrf'],','.$f.','))//加br
			{
				$value=nl2br($value);
			}
			if(!strstr($emod_r[$mid]['dohtmlf'],','.$f.','))//去除html
			{
				$value=RepFieldtextNbsp(ehtmlspecialchars($value));
			}
		}
		$listtemp=str_replace('[!--'.$f.'--]',$value,$listtemp);
	}
	$titleurl=sys_ReturnBqTitleLink($r);//链接
	$listtemp=str_replace('[!--id--]',$r[id],$listtemp);
	$listtemp=str_replace('[!--classid--]',$r[classid],$listtemp);
	$listtemp=str_replace('[!--class.name--]',$add,$listtemp);
	$listtemp=str_replace('[!--ttid--]',$r[ttid],$listtemp);
	$listtemp=str_replace('[!--tt.name--]',$class_tr[$r[ttid]][tname],$listtemp);
	$listtemp=str_replace('[!--userfen--]',$r[userfen],$listtemp);
	$listtemp=str_replace('[!--titleurl--]',$titleurl,$listtemp);
	$listtemp=str_replace('[!--no.num--]',$no,$listtemp);
	$listtemp=str_replace('[!--plnum--]',$r[plnum],$listtemp);
	$listtemp=str_replace('[!--userid--]',$r[userid],$listtemp);
	$listtemp=str_replace('[!--username--]',$r[username],$listtemp);
	$listtemp=str_replace('[!--onclick--]',$r[onclick],$listtemp);
	$listtemp=str_replace('[!--oldtitle--]',$r[oldtitle],$listtemp);
	$listtemp=str_replace('[!--totaldown--]',$r[totaldown],$listtemp);
	//栏目链接
	if(strstr($ylisttemp,'[!--this.classlink--]'))
	{
		$thisclasslink=sys_ReturnBqClassname($r,9);
		$listtemp=str_replace('[!--this.classlink--]',$thisclasslink,$listtemp);
	}
	$thisclassname=$class_r[$r[classid]][bname]?$class_r[$r[classid]][bname]:$class_r[$r[classid]][classname];
	$listtemp=str_replace('[!--this.classname--]',$thisclassname,$listtemp);
	return $listtemp;
}

//单一tag刷新 only
function dp_ReTagOneOnly($tagid){
	global $empire,$dbtbpre,$dp_r;
	if(!$tagid){
		return '';
	}
	$r=$empire->fetch1("select * from {$dbtbpre}enewstags where tagid=$tagid");
	if(!$r[tagid]){
		return '';
	}
	$tadd=$empire->fetch1("select * from {$dbtbpre}enewstagsadd where tagid=$tagid limit 1");
	$path=ECMS_PATH.$dp_r['path'].'/';
	DoMkdir($path);
	dp_TagHtml($r,$tadd);
}

//单一tag刷新
function dp_ReTagOne($tagid){
	if(!$tagid){
		return '';
	}
	dp_ReTagOneOnly($tagid);
	printerror("刷新Tag成功",$_SERVER['HTTP_REFERER'],1,0,1);
}

//列表批量生成
function dp_ReTag_All($add){
	global $empire,$dbtbpre;
	$tagid=$add['tagid'];
	$count=count($tagid);
	if(!$count)
	{
		printerror("请选择tag","history.go(-1)",1,0,1);
	}
	$ids='';
	$dh='';
	for($i=0;$i<$count;$i++)
	{
		$id=(int)$tagid[$i];
		dp_ReTagOneOnly($id);
	}
	printerror("批量生成tag成功！",$_SERVER['HTTP_REFERER'],1,0,1);
}

//刷新所有tag
function dp_ReAllTag($zu,$start,$classid,$startid,$endid){
	global $empire,$dbtbpre,$public_r,$dp_r;
	$start=(int)$start;
	//按ID刷新
	$startid=(int)$startid;
	$endid=(int)$endid;
	if($startid)
	{
		$add1.=" and tagid>=$startid ";
    }
	if($endid)
	{
		$add1.=" and tagid<=$endid";
    }
	$classid=(int)$classid;
	if($classid>0){
		$add1.=" and cid=$classid";
	}elseif($classid==-1){
		$add1.=" and cid>0";
	}
	elseif($classid==-2){
		$add1.=" and cid=0";
	}
	$b=0;
	
	$sql=$empire->query("select * from {$dbtbpre}enewstags where tagid>$start ".$add1." order by tagid limit ".$zu);
	while($r=$empire->fetch($sql)){
		$newid=$r[tagid];		
		$b=1;
		dp_ReTagOneOnly($r[tagid]);
	}
	if(empty($b)){
		echo '刷新完成';
		db_close();
		$empire=null;
		exit();
	}else{
		$rurl=dp_ReturnGobackUrl("do.php?enews=ReAllTag&start=$newid&startid=$startid&endid=$endid&classid=$classid&zu=$zu",0,0);
		echo "<meta http-equiv=\"refresh\" content=\"".$dp_r['time'].";url=".$rurl."\">一组tag刷新成功(TagId:<font color=red><b>".$newid."</b></font>)";
		exit();
	}
}

/*-------------------------------------------整理-------------------------------------------*/

//整理tag信息
function dp_ZLTag($tagid){
	global $empire,$dbtbpre,$class_r;
	$tt=$empire->fetch1("select * from {$dbtbpre}enewstags where tagid=$tagid limit 1");
	if($tt[tagid]!=$tagid){
		return '';
	}
	$sql=$empire->query("select * from {$dbtbpre}enewstagsdata where tagid=$tagid");
	while($r=$empire->fetch($sql)){
		$tbname=$class_r[$r[classid]][tbname];
		if($tbname){
			$bi=$empire->fetch1("select id,classid from {$dbtbpre}ecms_".$tbname." where id=$r[id]");
			if(!$bi[id] || $bi[id]!=$r[id] || !$bi[classid]){
				$empire->query("delete from {$dbtbpre}enewstagsdata where tid=$r[tid] limit 1");
			}
			if($r[classid]!=$bi[classid]&&$bi[classid]){
				$empire->query("update {$dbtbpre}enewstagsdata set classid=$bi[classid] where tid=$r[tid] limit 1");
			}
		}else{
			$empire->query("delete from {$dbtbpre}enewstagsdata where tid=$r[tid] limit 1");
		}
	}
	$num=$empire->gettotal("select count(*) as total from {$dbtbpre}enewstagsdata where tagid=$tagid");
	$empire->query("update {$dbtbpre}enewstags set num=$num where tagid=$tagid limit 1");
}

//批量整理
function dp_Zhengli($zu,$start,$classid,$startid,$endid){
	global $empire,$dbtbpre,$public_r,$dp_r;
	$start=(int)$start;
	//按ID刷新
	$startid=(int)$startid;
	$endid=(int)$endid;
	if($startid)
	{
		$add1.=" and tagid>=$startid ";
    }
	if($endid)
	{
		$add1.=" and tagid<=$endid";
    }
	$classid=(int)$classid;
	if($classid){
		$add1.=" and cid=$classid";
	}
	$b=0;
	$sql=$empire->query("select * from {$dbtbpre}enewstags where tagid>$start ".$add1." order by tagid  limit ".$zu);
	while($r=$empire->fetch($sql)){
		$newid=$r[tagid];		
		$b=1;
		dp_ZLTag($r[tagid]);
	}
	if(empty($b)){
		echo '整理完成';
		db_close();
		$empire=null;
		exit();
	}else{
		$rurl=dp_ReturnGobackUrl("do.php?enews=zhengliall&start=$newid&startid=$startid&endid=$endid&classid=$classid&zu=$zu",0,0);
		echo "<meta http-equiv=\"refresh\" content=\"".$dp_r['time'].";url=".$rurl."\">一组tag信息整理成功(TagId:<font color=red><b>".$newid."</b></font>)";
		exit();
	}
}

//整理一个
function dp_ZhengliOne($tagid){
	global $empire,$dbtbpre;
	if(!$tagid){
		return '';
	}
	dp_ZLTag($tagid);
	printerror("整理Tag成功！","history.go(-1)",1,0,1);
}

/*-------------------------------------------同步-------------------------------------------*/

//批量同步
function dp_TongBu($zu,$start,$classid,$startid,$endid,$vv,$stime){
	global $empire,$dbtbpre,$public_r,$dp_r;	
	$start=(int)$start;
	$vv++;
	//按ID刷新
	$startid=(int)$startid;
	$endid=(int)$endid;
	if($startid)
	{
		$add1.=" and tagid>=$startid ";
    }
	if($endid)
	{
		$add1.=" and tagid<=$endid";
    }
	$classid=(int)$classid;
	if($classid){
		$add1.=" and cid=$classid";
	}
	$b=0;
	$num=$empire->gettotal("select count(*) as total from {$dbtbpre}enewstags where tagid>0 ".$nadd1."");
	$sy=$num-$vv;
	$sql=$empire->query("select * from {$dbtbpre}enewstags where tagid>$start ".$add1."  order by tagid  limit 1");
	while($r=$empire->fetch($sql)){
		$newid=$r[tagid];		
		$b=1;
		$add=$empire->fetch1("select * from {$dbtbpre}enewstagsadd where tagid=$r[tagid] limit 1");	
		if(empty($add['py'])){
			$path=dp_ReTagPy($add['py'],$r['tagname'],$r[tagid]);
			$empire->query("replace into {$dbtbpre}enewstagsadd (tagid,py) values($r[tagid],'$path')");
		}
		$tagurl=dp_TagUrl($r[tagid]);
		$k=$empire->fetch1("select keyid from {$dbtbpre}enewskey where keyname='$r[tagname]' and keyurl='$tagurl' limit 1");
		if(!$k[keyid]){	
			$empire->query("insert into {$dbtbpre}enewskey(keyname,keyurl) values('$r[tagname]','$tagurl')");
		}
	}
	if(empty($b)){
		echo '同步完成';
		db_close();
		$empire=null;
		exit();
	}else{
		$rurl=dp_ReturnGobackUrl("do.php?enews=tongbu&start=$newid&startid=$startid&endid=$endid&classid=$classid&zu=$zu&vv=$vv",0,0);
		$etime=microtime(true);
		$atime=$etime-$stime;
		echo "<meta http-equiv=\"refresh\" content=\"".$dp_r['time'].";url=".$rurl."\">TAGID: <font color='#660000'><b>$newid</b></font> 同步成功，本次执行时间$alltime ( 已完成数 $vv ，剩余 $sy )";
		exit();
	}
}

//同步一个
function dp_TongBuOne($tagid){
	global $empire,$dbtbpre,$public_r,$dp_r;	
	$tagid=(int)$tagid;
	$r=$empire->fetch1("select * from {$dbtbpre}enewstags where tagid=$tagid limit 1");
	if($r['tagid']!=$tagid){
		return '';
	}
	$add=$empire->fetch1("select * from {$dbtbpre}enewstagsadd where tagid=$tagid limit 1");	
	if(empty($add['py'])){
		$path=dp_ReTagPy($add['py'],$r['tagname'],$tagid);
		$empire->query("replace into {$dbtbpre}enewstagsadd (tagid,py) values($tagid,'$path')");
	}
	$tagurl=dp_TagUrl($r[tagid]);
	$k=$empire->fetch1("select keyid from {$dbtbpre}enewskey where keyname='$r[tagname]' and keyurl='$tagurl' limit 1");
	if(!$k[keyid]){	
		$empire->query("insert into {$dbtbpre}enewskey(keyname,keyurl) values('$r[tagname]','$tagurl')");
	}
	printerror("同步完成","history.go(-1)",1,0,1);
}

//批量同步
function dp_TongbuTags_all($add){
	global $empire,$dbtbpre;
	$tagid=$add['tagid'];
	$count=count($tagid);
	if(!$count)
	{
		printerror("请选择tag","history.go(-1)",1,0,1);
	}
	$ids='';
	$dh='';
	for($i=0;$i<$count;$i++)
	{
		$id=(int)$tagid[$i];
		$r=$empire->fetch1("select * from {$dbtbpre}enewstags where tagid='$id' limit 1");
		if($r['tagid']!=$id){
			continue;
		}
		$add=$empire->fetch1("select * from {$dbtbpre}enewstagsadd where tagid=$id limit 1");	
		if(empty($add['py'])){
			$path=dp_ReTagPy($add['py'],$r['tagname'],$id);
			$empire->query("replace into {$dbtbpre}enewstagsadd (tagid,py) values($id,'$path')");
		}
		$tagurl=dp_TagUrl($id);
		$k=$empire->fetch1("select keyid from {$dbtbpre}enewskey where keyname='$r[tagname]' and keyurl='$tagurl' limit 1");
		if(!$k[keyid]){	
			$empire->query("insert into {$dbtbpre}enewskey(keyname,keyurl) values('$r[tagname]','$tagurl')");
		}
	}
	printerror("同步完成！",$_SERVER['HTTP_REFERER'],1,0,1);
}


/**
	********************	版本文件	********************
*/

//返回信息调用字段
function dp_ReturnF(){
	global $version;
	$fstr='id,classid,newspath,filename,groupid,titleurl,isurl';
	if($version<70){
		$fstr='id,classid,newspath,filename,groupid,titleurl,checked';
	}
	return $fstr;
}

//检查是否正常信息
function dp_checkinfo($r){
	global $version;
	if($version<70&&!$r['checked']){//6.6未审核
		return 0;
	}
	if($version<70&&$r['titleurl']){//6.6外部链接
		return 0;
	}
	if($version>66&&$r['isurl']){//7.0外部链接
		return 0;
	}
	return 1;
}

//返回拼音
function dp_PinyinFun($hz){
	global $pagechar;
	include_once(ECMS_PATH.'e/class/epinyin.php');
	//编码
	if($pagechar!='gb2312')
	{
		include_once(ECMS_PATH.'e/class/doiconv.php');
		$iconv=new Chinese('../');
		$char=$pagechar=='big5'?'BIG5':'UTF8';
		$targetchar='GB2312';
		$hz=$iconv->Convert($char,$targetchar,$hz);
	}
	return c($hz);
}


/**
	********************	安全设置	********************
*/

//官网信息
function dp1037(){
	global $extend_r,$dp_r,$version,$dbchar;
}

//安全检测
function eCheckExtendSafe(){
	global $extend_r;
	if(file_exists("install/index.php")){
		if(file_exists("install/install.off")){
			echo "存在安全风险！请将 <b>/e/dongpo/".$extend_r['path']."/install/</b> 文件夹删除或改名！";
		}else{
			echo "存在安全漏洞！请将 <b>/e/dongpo/".$extend_r['path']."/install/</b> 文件夹删除或改名！";
			exit();
		}
	}
}

//安全验证1
function hReturnDPHashStrAll($ecms=0){
	global $version,$extend_r,$dp_r;
	$r=array();
	$lur=is_login();
	eCheckExtendSafe();
	if($version>70){
		$r=hReturnEcmsHashStrAll();
	}
	if($ecms==1){
		CheckExma();
	}
	$r['lur']=$lur;
	return $r;
}

//安全验证2
function hReturnDPRHash(){
	global $version;
	$r=array();
	$lur=is_login();
	if($version>70){
		hCheckEcmsRHash();
	}
	$r['lur']=$lur;
	return $r;
}

//认证码
function CheckExma(){
	return '';
}

//kill码
function CheckKillMa($ma){
	global $dp_r;
	/*
	$code=$dp_r['code'];
	$n=intval(substr($code,0,5))*2+1222;
	if($n!=$ma){
		return '';
	}
	*/
	$file='config.php';
	$exp='//dp.config.data';
	$text=dp_ReadFiletext($file);
	$r=explode($exp,$text);
	$setting="<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
\$dp_r=array();
";
	$setting=$setting.$exp.$r[1].$exp.$r[2];
	dp_WriteFiletext_n($file,$setting);
}

//读文件
function dp_ReadFiletext($filepath){
	$filepath=trim($filepath);
	$htmlfp=@fopen($filepath,"r");
	$string=@fread($htmlfp,@filesize($filepath));
	@fclose($htmlfp);
	return $string;
}

//写文件
function dp_WriteFiletext_n($filepath,$string){
	$fp=@fopen($filepath,"w");
	@fputs($fp,$string);
	@fclose($fp);
	@chmod($filepath,0777);
}

/**
	********************	基本功能	********************
*/

//返回地址
function dp_ReturnGobackUrl($url,$t=0,$e=0){
	global $version;
	$rurl=$url;
	if($version>70){
		$fn=$t==0?'hReturnEcmsHashStrHref':'hReturnEcmsHashStrHref2';
		$rurl=$url.$fn($e);
	}
	return $rurl;
}

//安装和卸载
function InstallThisExtend($ecms){
	global $extend_r,$dp_r,$dbchar,$version,$empire,$dbtbpre;
	error_reporting(E_ALL ^ E_NOTICE);
	if(file_exists("install.off")){
		echo "安装程序已锁定。如果要重新安装，请删除 <b>/e/dongpo/".$extend_r['path']."/install/install.off</b> 文件！";
		exit();
	}
	$ename=$extend_r['ename'];
	if($ecms==1){//安装
		$vercinto='';
		$verinto='';
		if($version>70){
			$vercinto=",''";
			$verinto=',1';
		}

		//创建数据表
		$empire->query(SetCreateTable("CREATE TABLE `{$dbtbpre}enewstagsadd` (
		`tagid` int(10) unsigned NOT NULL,
		`bname` varchar(255) NOT NULL default '',
		`intro` text NOT NULL,
		`py` varchar(255) NOT NULL default '',
		`tempid` int(10) unsigned NOT NULL default '0',
		PRIMARY KEY  (`tagid`),
		KEY `py` (`py`)
		) TYPE=MyISAM;",$dbchar));

		$empire->query(SetCreateTable("CREATE TABLE `{$dbtbpre}enewstagsclassadd` (
		`classid` int(10) unsigned NOT NULL default '0',
		`tempid` int(10) unsigned NOT NULL default '0',
		`modid` int(10) unsigned NOT NULL default '0',
		`path` varchar(255) NOT NULL default '',
		PRIMARY KEY  (`classid`)
		) TYPE=MyISAM;",$dbchar));

		//创建菜单
		$empire->query("insert into `{$dbtbpre}enewsmenuclass` values(NULL,'$ename','0','0','2'".$vercinto.");");
		$menuclassid=$empire->lastid();
		$empire->query("insert into `{$dbtbpre}enewsmenu` values(NULL,'TAG管理 ','../dongpo/".$extend_r['path']."/ListTags.php','1','$menuclassid'".$verinto.");");
		$empire->query("insert into `{$dbtbpre}enewsmenu` values(NULL,'TAG分类 ','../dongpo/".$extend_r['path']."/ListClass.php','2','$menuclassid'".$verinto.");");
		$empire->query("insert into `{$dbtbpre}enewsmenu` values(NULL,'TAG更新 ','../dongpo/".$extend_r['path']."/TagHtml.php','3','$menuclassid'".$verinto.");");
		$empire->query("insert into `{$dbtbpre}enewsmenu` values(NULL,'参数设置','../dongpo/".$extend_r['path']."/set.php','4','$menuclassid'".$verinto.");");

		//生成锁定文件
		$fp=@fopen("install.off","w");
		@fclose($fp);
		return '安装成功！建议将 /e/dongpo/'.$extend_r['path'].'/install/ 文件夹删除。';

	}elseif($ecms==2){//卸载

		//删除表
		$empire->query("DROP TABLE IF EXISTS `{$dbtbpre}enewstagsadd`,`{$dbtbpre}enewstagsclassadd`;");
		//删除插件菜单
		$menuclassr=$empire->fetch1("select classid from {$dbtbpre}enewsmenuclass where classname='$ename' limit 1");
		$empire->query("delete from {$dbtbpre}enewsmenuclass where classid='$menuclassr[classid]'");
		$empire->query("delete from {$dbtbpre}enewsmenu where classid='$menuclassr[classid]'");

		return '卸载成功';

	}else{
		echo "非法参数";
		exit();
	}
}

//设置
function dp_SetExtend($add){
	global $extend_r;
	$file=ECMS_PATH.'e/dongpo/'.$extend_r['path'].'/config.php';
	$exp='//dp.config.data';
	$text=ReadFiletext($file);
	$r=explode($exp,$text);
	$setting="
\$dp_r['path']='".$add['path']."';
\$dp_r['pt']=".(int)$add['pt'].";
\$dp_r['tagstempid']=".(int)$add['tagstempid'].";
\$dp_r['tagslistnum']=".(int)$add['tagslistnum'].";
\$dp_r['maxnum']=".(int)$add['maxnum'].";
\$dp_r['repagenum']=".(int)$add['repagenum'].";
\$dp_r['pagenum']=".(int)$add['pagenum'].";
\$dp_r['time']=".(int)$add['time'].";
";
	$setting=$r[0].$exp.$setting.$exp.$r[2];
	WriteFiletext_n($file,$setting);
	printerror("设置成功",dp_ReturnGobackUrl("set.php",2,1),1,0,1);
}

?>