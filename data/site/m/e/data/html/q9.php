<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><tr><td width="90">发号标题</td><td>
<input name="title" type="text" size="42" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'title',stripSlashes($r[title]))?>">
</td></tr>
<tr><td>游戏名称</td><td>
<input name="titlegame" type="text" id="titlegame" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'titlegame',stripSlashes($r[titlegame]))?>" size="">
</td></tr>
<tr><td>幻灯图片</td><td>
<input type="file" name="titlepicfile" size="45">
</td></tr>
<tr><td>游客领号</td><td class="radio"><input name="permissions" type="radio" value="1"<?=$r[permissions]=="1"||$ecmsfirstpost==1?' checked':''?>>是<input name="permissions" type="radio" value="0"<?=$r[permissions]=="0"?' checked':''?>>否</td></tr>
<tr><td>开始时间</td><td class="time">
<input name="starttime" type="text" id="starttime" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[starttime]))?>" size="12" class="Wdate" onClick="WdatePicker({skin:'default',dateFmt:'yyyy-MM-dd'})">
</td></tr>
<tr><td>结束时间</td><td class="time">
<input name="endtime" type="text" id="endtime" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[endtime]))?>" size="12" class="Wdate" onClick="WdatePicker({skin:'default',dateFmt:'yyyy-MM-dd'})">
</td></tr>
<tr><td>发号状态</td><td class="radio"><input name="zhuangtai" type="radio" value="2"<?=$r[zhuangtai]=="2"||$ecmsfirstpost==1?' checked':''?>>正在发放<input name="zhuangtai" type="radio" value="1"<?=$r[zhuangtai]=="1"?' checked':''?>>预定中<input name="zhuangtai" type="radio" value="3"<?=$r[zhuangtai]=="3"?' checked':''?>>活动结束</td></tr>
<tr><td>礼包内容</td><td class="textarea"><textarea name="cardbody" cols="60" rows="10" id="cardbody"><?=$ecmsfirstpost==1?"":DoReqValue($mid,'cardbody',stripSlashes($r[cardbody]))?></textarea>
</td></tr>
<tr><td>使用方法</td><td class="textarea"><input name="cardtext" type="text" cols="60" rows="10" id="cardtext" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'cardtext',stripSlashes($r[cardtext]))?>" size="">
</td></tr>
<tr><td>卡号列表</td><td>
<input name="cardid" type="hidden" id="cardid" value="<?=$id?>">
<input name="fahaoid" type="hidden" id="fahaoid" value="<?=$id?>">
<textarea name="cardpass" style="height:500px;float:left;"  id="cardpass"><?=htmlspecialchars($r[cardpass])?></textarea>
<em style="vertical-align:top;float:left;">回车键换行，一行一枚卡号，请勿添加空行。<br />添加的卡号发布后不支持修改！<br />如需增加卡号，请继续在本框内添加！<br />发布预定活动时无需添加</em>
</td>
</tr>