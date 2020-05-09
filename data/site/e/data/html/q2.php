<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width=100% align=center cellpadding=3 cellspacing=1 bgcolor=#DBEAF5><tr><td width='16%' height=25 bgcolor='ffffff'>软件名称</td><td bgcolor='ffffff'><input name="title" type="text" size="42" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'title',stripSlashes($r[title]))?>">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>特殊属性</td><td bgcolor='ffffff'>
<input name="keyboard" type="text" size=42 value="<?=stripSlashes($r[keyboard])?>">
<font color="#666666">(多个请用&quot;,&quot;隔开)</font>
</td></tr><tr><td height=25 colspan=2 bgcolor='ffffff'><div align=left>正文</div></td></tr></table><div style='background-color:#D0D0D0'><?=ECMS_ShowEditorVar("newstext",$ecmsfirstpost==1?"":DoReqValue($mid,'newstext',stripSlashes($r[newstext])),"Default","","300","100%")?>
</div><table width='100%' align=center cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'><tr><td width='16%' height=25 bgcolor='ffffff'>内容简介</td><td bgcolor='ffffff'>
<textarea name="smalltext" cols="60" rows="10" id="smalltext"><?=$ecmsfirstpost==1?"":DoReqValue($mid,'smalltext',stripSlashes($r[smalltext]))?></textarea>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>软件大小</td><td bgcolor='ffffff'>
<input name="daxiao" type="text" id="daxiao" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'daxiao',stripSlashes($r[daxiao]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>版本</td><td bgcolor='ffffff'>
<input name="banben" type="text" id="banben" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'banben',stripSlashes($r[banben]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>平台</td><td bgcolor='ffffff'>
<input name="pingtai" type="text" id="pingtai" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'pingtai',stripSlashes($r[pingtai]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>语言</td><td bgcolor='ffffff'>
<input name="yuyan" type="text" id="yuyan" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'yuyan',stripSlashes($r[yuyan]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>评分</td><td bgcolor='ffffff'><select name="pingfen" id="pingfen"><option value="1"<?=$r[pingfen]=="1"?' selected':''?>>1</option><option value="2"<?=$r[pingfen]=="2"?' selected':''?>>2</option><option value="3"<?=$r[pingfen]=="3"?' selected':''?>>3</option><option value="4"<?=$r[pingfen]=="4"?' selected':''?>>4</option><option value="5"<?=$r[pingfen]=="5"?' selected':''?>>5</option></select></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>下载链接</td><td bgcolor='ffffff'>
<input name="xzlj" type="text" id="xzlj" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'xzlj',stripSlashes($r[xzlj]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>软件预览图</td><td bgcolor='ffffff'><input type="file" name="titlepicfile" size="45">
</td></tr></table>