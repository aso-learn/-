<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><tr><td bgcolor=ffffff>标题</td><td bgcolor=ffffff><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
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
</table></td></tr><tr><td bgcolor=ffffff>副标题</td><td bgcolor=ffffff><input name="ftitle" type="text" size=60 id="ftitle" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[ftitle]))?>">
</td></tr><tr><td bgcolor=ffffff>发布时间</td><td bgcolor=ffffff><input name="newstime" type="text" value="<?=$r[newstime]?>" size="28" class="Wdate" onClick="WdatePicker({skin:'default',dateFmt:'yyyy-MM-dd HH:mm:ss'})"><input type=button name=button value="设为当前时间" onclick="document.add.newstime.value='<?=$todaytime?>'"></td></tr><tr><td bgcolor=ffffff>标题图片</td><td bgcolor=ffffff><input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a></td></tr><tr><td bgcolor=ffffff>内容简介</td><td bgcolor=ffffff><textarea name="smalltext" cols="80" rows="10" id="smalltext"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[smalltext]))?></textarea>
</td></tr><tr><td bgcolor=ffffff>软件大小</td><td bgcolor=ffffff><input name="daxiao" type="text" id="daxiao" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[daxiao]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>版本</td><td bgcolor=ffffff>
<input name="banben" type="text" id="banben" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[banben]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>平台</td><td bgcolor=ffffff>
<input name="pingtai" type="text" id="pingtai" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[pingtai]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>语言</td><td bgcolor=ffffff>
<input name="yuyan" type="text" id="yuyan" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[yuyan]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>评分</td><td bgcolor=ffffff><select name="pingfen" id="pingfen"><option value="1"<?=$r[pingfen]=="1"?' selected':''?>>1</option><option value="2"<?=$r[pingfen]=="2"?' selected':''?>>2</option><option value="3"<?=$r[pingfen]=="3"?' selected':''?>>3</option><option value="4"<?=$r[pingfen]=="4"?' selected':''?>>4</option><option value="5"<?=$r[pingfen]=="5"?' selected':''?>>5</option></select></td></tr><tr><td bgcolor=ffffff>下载链接</td><td bgcolor=ffffff>
<input name="xzlj" type="text" id="xzlj" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[xzlj]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>电脑必备</td><td bgcolor=ffffff><select name="bibei" id="bibei"><option value="1"<?=$r[bibei]=="1"?' selected':''?>>下载工具</option><option value="2"<?=$r[bibei]=="2"?' selected':''?>>聊天工具</option><option value="3"<?=$r[bibei]=="3"?' selected':''?>>拼音输入法</option><option value="4"<?=$r[bibei]=="4"?' selected':''?>>五笔输入法</option><option value="5"<?=$r[bibei]=="5"?' selected':''?>>浏览器类</option><option value="6"<?=$r[bibei]=="6"?' selected':''?>>杀毒软件</option><option value="7"<?=$r[bibei]=="7"?' selected':''?>>解压缩软件</option><option value="8"<?=$r[bibei]=="8"?' selected':''?>>视频播放器</option><option value="9"<?=$r[bibei]=="9"?' selected':''?>>音频播放器</option><option value="10"<?=$r[bibei]=="10"?' selected':''?>>网络电视</option><option value="11"<?=$r[bibei]=="11"?' selected':''?>>系统工具</option><option value="12"<?=$r[bibei]=="12"?' selected':''?>>图像处理</option><option value="13"<?=$r[bibei]=="13"?' selected':''?>>硬件驱动</option><option value="14"<?=$r[bibei]=="14"?' selected':''?>>手机助手</option><option value="15"<?=$r[bibei]=="15"?' selected':''?>>手机支付软件</option></select></td></tr><tr><td bgcolor=ffffff>新闻正文</td><td bgcolor=ffffff><?=ECMS_ShowEditorVar("newstext",$ecmsfirstpost==1?"":stripSlashes($r[newstext]),"Default","","300","100%")?>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
          <tr> 
            <td bgcolor="#FFFFFF"> <input name="dokey" type="checkbox" value="1"<?=$r[dokey]==1?' checked':''?>>
              关键字替换&nbsp;&nbsp; <input name="copyimg" type="checkbox" id="copyimg" value="1">
      远程保存图片(
      <input name="mark" type="checkbox" id="mark" value="1">
      <a href="SetEnews.php<?=$ecms_hashur[whehref]?>" target="_blank">加水印</a>)&nbsp;&nbsp; 
      <input name="copyflash" type="checkbox" id="copyflash" value="1">
      远程保存FLASH(地址前缀： 
      <input name="qz_url" type="text" id="qz_url" size="">
              )</td>
          </tr>
          <tr>
            
    <td bgcolor="#FFFFFF"><input name="repimgnexturl" type="checkbox" id="repimgnexturl" value="1"> 图片链接转为下一页&nbsp;&nbsp; <input name="autopage" type="checkbox" id="autopage" value="1">自动分页
      ,每 
      <input name="autosize" type="text" id="autosize" value="5000" size="5">
      个字节为一页&nbsp;&nbsp; 取第 
      <input name="getfirsttitlepic" type="text" id="getfirsttitlepic" value="" size="1">
      张上传图为标题图片( 
      <input name="getfirsttitlespic" type="checkbox" id="getfirsttitlespic" value="1">
      缩略图: 宽 
      <input name="getfirsttitlespicw" type="text" id="getfirsttitlespicw" size="3" value="<?=$public_r[spicwidth]?>">
      *高
      <input name="getfirsttitlespich" type="text" id="getfirsttitlespich" size="3" value="<?=$public_r[spicheight]?>">
      )</td>
          </tr>
        </table>
</td></tr>