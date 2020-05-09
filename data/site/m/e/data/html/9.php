<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width='100%' align=center cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'><tr><td width='16%' height=25 bgcolor='ffffff'>发号标题</td><td bgcolor='ffffff'>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
<tr> 
  <td height="25" bgcolor="#FFFFFF">
	<?=$tts?"<select name='ttid'><option value='0'>标题分类</option>$tts</select>":""?>
	<input type=text name=title value="<?=ehtmlspecialchars(stripSlashes($r[title]))?>" size="60"> 
	<input type="button" name="button" value="图文" onclick="document.add.title.value=document.add.title.value+'(图文)';"> 
  </td>
</tr>
<tr> 
  <td height="25" bgcolor="#FFFFFF">属性: 
	<input name="titlefont[b]" type="checkbox" value="b"<?=$titlefontb?>>粗体
	<input name="titlefont[i]" type="checkbox" value="i"<?=$titlefonti?>>斜体
	<input name="titlefont[s]" type="checkbox" value="s"<?=$titlefonts?>>删除线
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色: <input name="titlecolor" type="text" value="<?=stripSlashes($r[titlecolor])?>" size="10" class="color">
  </td>
</tr>
</table>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>特殊属性</td><td bgcolor='ffffff'>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
  <tr>
    <td height="25" bgcolor="#FFFFFF">信息属性: 
      <input name="checked" type="checkbox" value="1"<?=$r[checked]?' checked':''?>>
      审核 &nbsp;&nbsp; 推荐 
      <select name="isgood" id="isgood">
        <option value="0">不推荐</option>
	<?=$ftnr['igname']?>
      </select>
      &nbsp;&nbsp; 头条 
      <select name="firsttitle" id="firsttitle">
        <option value="0">非头条</option>
	<?=$ftnr['ftname']?>
      </select></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">关键字&nbsp;&nbsp;&nbsp;: 
      <input name="keyboard" type="text" size="52" value="<?=stripSlashes($r[keyboard])?>">
      <font color="#666666">(多个请用&quot;,&quot;隔开)</font></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">外部链接: 
      <input name="titleurl" type="text" value="<?=stripSlashes($r[titleurl])?>" size="52">
      <font color="#666666">(填写后信息连接地址将为此链接)</font></td>
  </tr>
</table>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>礼包图片</td><td bgcolor='ffffff'>
<input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>发布时间</td><td bgcolor='ffffff'>
<input name="newstime" type="text" value="<?=$r[newstime]?>" size="28" class="Wdate" onClick="WdatePicker({skin:'default',dateFmt:'yyyy-MM-dd HH:mm:ss'})"><input type=button name=button value="设为当前时间" onclick="document.add.newstime.value='<?=$todaytime?>'">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>是否淘号</td><td bgcolor='ffffff'><input name="pattern" type="radio" value="0"<?=$r[pattern]=="0"?' checked':''?>>否<input name="pattern" type="radio" value="2"<?=$r[pattern]=="2"?' checked':''?>>是</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>游戏名称</td><td bgcolor='ffffff'>
<input name="titlegame" type="text" id="titlegame" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlegame]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>相关专区链接</td><td bgcolor='ffffff'>
<input name="appurl" type="text" id="appurl" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[appurl]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>相关专区攻略</td><td bgcolor='ffffff'>
<input name="appurlgl" type="text" id="appurlgl" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[appurlgl]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>相关专区下载</td><td bgcolor='ffffff'>
<input name="appurlxz" type="text" id="appurlxz" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[appurlxz]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>游客领号</td><td bgcolor='ffffff'><input name="permissions" type="radio" value="1"<?=$r[permissions]=="1"||$ecmsfirstpost==1?' checked':''?>>是<input name="permissions" type="radio" value="0"<?=$r[permissions]=="0"?' checked':''?>>否</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>开始时间</td><td bgcolor='ffffff'>
<input name="starttime" type="text" id="starttime" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[starttime]))?>" size="12" class="Wdate" onClick="WdatePicker({skin:'default',dateFmt:'yyyy-MM-dd'})">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>结束时间</td><td bgcolor='ffffff'>
<input name="endtime" type="text" id="endtime" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[endtime]))?>" size="12" class="Wdate" onClick="WdatePicker({skin:'default',dateFmt:'yyyy-MM-dd'})">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>发号状态</td><td bgcolor='ffffff'><input name="zhuangtai" type="radio" value="2"<?=$r[zhuangtai]=="2"||$ecmsfirstpost==1?' checked':''?>>正在发放<input name="zhuangtai" type="radio" value="1"<?=$r[zhuangtai]=="1"?' checked':''?>>预定中<input name="zhuangtai" type="radio" value="3"<?=$r[zhuangtai]=="3"?' checked':''?>>活动结束</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>卡号列表</td><td bgcolor='ffffff'><a href="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[cardtxt]))?>" target="_blank"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[cardtxt]))?></a>
<br /> <br /> <font color="red">* </font>为保障卡号的完整性，系统暂不支持用户自己行入库卡号，请点击链接手动复制卡号批量添加！
 <input name="cardtxt" type="hidden" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[cardtxt]))?>"></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>礼包内容</td><td bgcolor='ffffff'><textarea name="cardbody" cols="60" rows="10" id="cardbody"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[cardbody]))?></textarea>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>礼包简介</td><td bgcolor='ffffff'><textarea name="jianjie" cols="60" rows="10" id="jianjie"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[jianjie]))?></textarea>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>游戏首字母</td><td bgcolor='ffffff'><input name="szm" type="text" id="szm" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[szm]))?>" size="5">
自动获取游戏名称的首字母，也可以手动填写</td></tr></table>