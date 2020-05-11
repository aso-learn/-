<?php 
//------------------增加游戏卡号
function AddCard($add,$userid,$username){
	global $empire,$dbtbpre;
	if(!$add[fahaoid]||!$add[cardpass])
	{printerror("Emptyfahaoid","history.go(-1)");}
	if(!$add[starttime]||!$add[endtime])
	{printerror("EmptyGameTime","history.go(-1)");}
	$f1=explode("\r\n", $add[cardpass]);
	$count=count($f1);
	$fahaoid=(int)$add[fahaoid];
	$starttime=to_time($add[starttime]);
	$endtime=to_time($add[endtime]);
	for($i=0;$i<$count;$i++)
	{
	      $sql=$empire->query("insert into {$dbtbpre}ecms_card_list(fahaoid,cardpass,starttime,endtime,carddate,cardname,status) values('$fahaoid','".addslashes(trim($f1[$i]))."','$starttime','$endtime',0,'',0);");
	}
	$lastid=$empire->lastid();
	if($sql)
	{
		$total=$empire->gettotal("select count(*) as total from {$dbtbpre}ecms_card_list where fahaoid='$fahaoid'");
		$num=$empire->gettotal("select count(*) as total from {$dbtbpre}ecms_card_list where fahaoid='$fahaoid' and status=0");
		$update=$empire->query("update {$dbtbpre}ecms_cards set shuliang='$total',renum='$num' where id='$fahaoid'");
		//操作日志
	    insert_dolog("cardid=".$lastid."<br>fahaoid=".$add[fahaoid]);
		printerror("AddCardSuccess","AddCard.php?enews=AddCard&cardid=$add[cardid]");
	}
	else
	{printerror("DbError","history.go(-1)");}
}

//----------------修改卡号
function EditCard($add,$userid,$username){
	global $empire,$dbtbpre,$ecms_hashur;
	$cardid=(int)$add[cardid];
	if(!$add[cardpass]||!$cardid)
	{printerror("Emptyfahaoid","history.go(-1)");}
	if(!$add[starttime]||!$add[endtime])
	{printerror("EmptyGameTime","history.go(-1)");}

	$starttime=to_time($add[starttime]);
	$endtime=to_time($add[endtime]);
	$sql=$empire->query("update {$dbtbpre}ecms_card_list set starttime=$starttime,endtime=$endtime,cardpass='".addslashes(trim($add[cardpass]))."' where cardid='$cardid'");
	if($sql)
	{
		//操作日志
		insert_dolog("cardid=".$add[cardid]."<br>fahaoid=".$add[fahaoid]);
		$info = $empire->fetch1("select cd.*,bc.bclassid from {$dbtbpre}ecms_cards  cd LEFT JOIN {$dbtbpre}ecms_card_list clu on cd.id = clu.fahaoid LEFT JOIN {$dbtbpre}enewsclass bc on bc.classid = cd.classid where clu.cardid = ".$add[cardid]);
		$url = "../AddNews.php?enews=EditNews&id=".$info[id]."&classid=".$info[classid]."&bclassid=".$info[bclassid].$ecms_hashur['ehref'];
		printerror("EditCardSuccess",$url);
	}
	else
	{printerror("DbError","history.go(-1)");}
}

//---------------删除卡号
function DelCard($cardid,$fahaoid,$userid,$username){
	global $empire,$dbtbpre ,$ecms_hashur,$type;
	if(!$cardid)
	{printerror("EmptyCardid","history.go(-1)");}

	$sql=$empire->query("delete from {$dbtbpre}ecms_card_list where cardid='$cardid' and fahaoid='$fahaoid'");
	if($sql)
	{
		$total=$empire->gettotal("select count(*) as total from {$dbtbpre}ecms_card_list where fahaoid='$fahaoid'");
		$num=$empire->gettotal("select count(*) as total from {$dbtbpre}ecms_card_list where fahaoid='$fahaoid' and status=0");
		$update=$empire->query("update {$dbtbpre}ecms_cards set shuliang='$total',renum='$num' where id='$fahaoid'");
		//操作日志
		insert_dolog("cardid=".$cardid."<br>fahaoid=".$fahaoid);

		$info = $empire->fetch1("select cd.*,bc.bclassid from {$dbtbpre}ecms_cards  cd LEFT JOIN {$dbtbpre}ecms_card_list clu on cd.id = clu.fahaoid LEFT JOIN {$dbtbpre}enewsclass bc on bc.classid = cd.classid where clu.fahaoid = ".$fahaoid);
		$url = "../AddNews.php?enews=EditNews&id=".$info[id]."&classid=".$info[classid]."&bclassid=".$info[bclassid].$ecms_hashur['ehref'];
		
		printerror("DelCardSuccess",$url);
		
	}
	else
	{printerror("DbError","history.go(-1)");}
}
//---------------批量删除卡号
function allDelCard($add,$userid,$username){
	global $empire,$dbtbpre,$ecms_hashur,$type;
	$delid=(int)$add['delid'];
	if($delid==1)
	{
		   $fahaoid=(int)$add['fahaoid'];
		   if($fahaoid)
		   {
			    $sql=$empire->query("delete from {$dbtbpre}ecms_card_list where fahaoid='$fahaoid'");
	            if($sql)
	            {
		            $total=$empire->gettotal("select count(*) as total from {$dbtbpre}ecms_card_list where fahaoid='$fahaoid'");
		            $num=$empire->gettotal("select count(*) as total from {$dbtbpre}ecms_card_list where fahaoid='$fahaoid' and status=0");
		            $update=$empire->query("update {$dbtbpre}ecms_cards set shuliang='$total',renum='$num' where id='$fahaoid'");
		            if ($type == 'json') {
						echo json_encode(array('error'=>0));
						 
						$empire=null;
						die;
					}else{
		            	printerror("DelCardSuccess","ListCard.php?fahaoid=".$fahaoid.$ecms_hashur['ehref']);
		        	}
	            }
	            else
	            {
				   printerror("DbError","history.go(-1)");
			    }
		   }
		   else
		   {
			    printerror("请填写要删除卡号的游戏ID","history.go(-1)",0,0,1);
		   }
	}
	elseif($delid==2)
	{
		   $startcid=(int)$add['startcid'];
		   $endcid=(int)$add['endcid'];
		   $fahaoid = (int)$add['fahaoid'];
		   if($startcid && $endcid)
		   {

			    $sql=$empire->query("select fahaoid,cardid from {$dbtbpre}ecms_card_list where cardid>='$startcid' and cardid<='$endcid' and fahaoid = '$fahaoid'");
				while($row=$empire->fetch($sql))
			    {
					 $cardid=(int)$row['cardid']; 
					 $del=$empire->query("delete from {$dbtbpre}ecms_card_list where cardid='$cardid' and fahaoid = '$fahaoid' ");
	                  if($del)
	                  {
		                 $num=$empire->gettotal("select count(*) as total from {$dbtbpre}ecms_card_list where fahaoid='$fahaoid' and status=0");
		                 $update=$empire->query("update {$dbtbpre}ecms_cards set shuliang=shuliang-1,renum='$num' where id='$fahaoid'");
		              }
	             }
	             if ($type == 'json') {
						echo json_encode(array('error'=>0));
						 
						$empire=null;
						die;
				}else{
	                 printerror("DelCardSuccess","ListCard.php?fahaoid=".$fahaoid.$ecms_hashur['ehref']);
	             }
		   }
		   else
		   {
			    printerror("开始卡号ID或结束卡号ID为空","history.go(-1)",0,0,1);
		   }
	}
	else
	{
		  printerror("请选择卡号删除方式","history.go(-1)",0,0,1);
	}
	
	
}