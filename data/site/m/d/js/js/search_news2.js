function search_check(obj){if(obj.keyboard.value.length==0){alert('请输入搜索关键字');return false;}return true;}document.write("<table width=99% border=0 cellpadding=3 cellspacing=1><form name=search_js2 method=post action=\'/e/search/index.php\' onsubmit=\'return search_check(document.search_js2);\'><tr><td height=25><div align=center>关键字: <input name=keyboard type=text size=13></div></td></tr><tr><td><div align=center>范围: <select name=show><option value=title>标题</option><option value=smalltext>简介</option><option value=newstext>内容</option><option value=writer>作者</option><option value=title,smalltext,newstext,writer>搜索全部</option></select></div></td></tr><tr><td><div align=center>栏目:<select name=classid><option value=0>所有栏目</option><option value='4'>|-新闻资讯</option><option value='12' style='background:#99C4E3'>&nbsp;&nbsp;|-软件教程</option><option value='13' style='background:#99C4E3'>&nbsp;&nbsp;|-游戏攻略</option><option value='14' style='background:#99C4E3'>&nbsp;&nbsp;|-安卓教程</option><option value='15' style='background:#99C4E3'>&nbsp;&nbsp;|-手游攻略</option><option value='16' style='background:#99C4E3'>&nbsp;&nbsp;|-游戏美女</option><option value='17' style='background:#99C4E3'>&nbsp;&nbsp;|-造梦西游4攻略</option><option value='18' style='background:#99C4E3'>&nbsp;&nbsp;|-造梦西游3攻略</option><option value='19' style='background:#99C4E3'>&nbsp;&nbsp;|-我的世界攻略</option><option value='20' style='background:#99C4E3'>&nbsp;&nbsp;|-热门新闻</option><option value='21' style='background:#99C4E3'>&nbsp;&nbsp;|-创世兵魂</option><option value='22' style='background:#99C4E3'>&nbsp;&nbsp;|-洛克攻略</option><option value='23' style='background:#99C4E3'>&nbsp;&nbsp;|-业界动态</option><option value='24' style='background:#99C4E3'>&nbsp;&nbsp;|-精彩视频</option><option value='25' style='background:#99C4E3'>&nbsp;&nbsp;|-辅助技巧</option><option value='26' style='background:#99C4E3'>&nbsp;&nbsp;|-游戏开发</option><option value='27' style='background:#99C4E3'>&nbsp;&nbsp;|-玩家心得</option><option value='28' style='background:#99C4E3'>&nbsp;&nbsp;|-QQ农牧场技巧</option><option value='29' style='background:#99C4E3'>&nbsp;&nbsp;|-QQ新闻</option><option value='30' style='background:#99C4E3'>&nbsp;&nbsp;|-西游大战僵尸2</option><option value='31' style='background:#99C4E3'>&nbsp;&nbsp;|-机甲旋风</option><option value='5' style='background:#99C4E3'>|-软件下载</option><option value='6' style='background:#99C4E3'>|-手机软件</option><option value='7' style='background:#99C4E3'>|-手机游戏</option><option value='8'>|-单机游戏</option><option value='32' style='background:#99C4E3'>&nbsp;&nbsp;|-射击游戏</option><option value='33' style='background:#99C4E3'>&nbsp;&nbsp;|-模拟经营游戏</option><option value='34' style='background:#99C4E3'>&nbsp;&nbsp;|-动作游戏</option><option value='35' style='background:#99C4E3'>&nbsp;&nbsp;|-单机补丁</option><option value='36' style='background:#99C4E3'>&nbsp;&nbsp;|-角色扮演</option><option value='37' style='background:#99C4E3'>&nbsp;&nbsp;|-策略游戏</option><option value='9' style='background:#99C4E3'>|-魔兽地图</option><option value='38'>|-腾讯专区</option><option value='39' style='background:#99C4E3'>&nbsp;&nbsp;|-Dnf地下城</option><option value='40' style='background:#99C4E3'>&nbsp;&nbsp;|-CF专区</option><option value='41' style='background:#99C4E3'>&nbsp;&nbsp;|-QQ工具</option><option value='42' style='background:#99C4E3'>&nbsp;&nbsp;|-QQ炫舞</option><option value='43' style='background:#99C4E3'>&nbsp;&nbsp;|-大龙明权</option><option value='44' style='background:#99C4E3'>&nbsp;&nbsp;|-qq胡莱三国</option><option value='45' style='background:#99C4E3'>&nbsp;&nbsp;|-洛克王国</option><option value='46' style='background:#99C4E3'>&nbsp;&nbsp;|-QQ飞车</option><option value='47' style='background:#99C4E3'>&nbsp;&nbsp;|-QQ自由幻想</option><option value='48' style='background:#99C4E3'>&nbsp;&nbsp;|-QQ音速</option><option value='49' style='background:#99C4E3'>&nbsp;&nbsp;|-烽火战国</option><option value='50' style='background:#99C4E3'>&nbsp;&nbsp;|-七雄争霸</option><option value='51' style='background:#99C4E3'>&nbsp;&nbsp;|-战地之王</option><option value='52' style='background:#99C4E3'>&nbsp;&nbsp;|-寻仙</option><option value='53'>|-游戏辅助</option><option value='58' style='background:#99C4E3'>&nbsp;&nbsp;|-网游加速</option><option value='59' style='background:#99C4E3'>&nbsp;&nbsp;|-游戏工具</option><option value='60' style='background:#99C4E3'>&nbsp;&nbsp;|-游戏音乐</option><option value='61' style='background:#99C4E3'>&nbsp;&nbsp;|-跑跑卡丁车</option><option value='62' style='background:#99C4E3'>&nbsp;&nbsp;|-CSOL</option><option value='54'>|-完美游戏</option><option value='63' style='background:#99C4E3'>&nbsp;&nbsp;|-完美国际</option><option value='64' style='background:#99C4E3'>&nbsp;&nbsp;|-神鬼传奇</option><option value='65' style='background:#99C4E3'>&nbsp;&nbsp;|-口袋西游</option><option value='66' style='background:#99C4E3'>&nbsp;&nbsp;|-赤壁</option><option value='67' style='background:#99C4E3'>&nbsp;&nbsp;|-热舞派对</option><option value='68' style='background:#99C4E3'>&nbsp;&nbsp;|-诛仙</option><option value='69' style='background:#99C4E3'>&nbsp;&nbsp;|-武林外传</option><option value='70' style='background:#99C4E3'>&nbsp;&nbsp;|-完美世界</option><option value='71' style='background:#99C4E3'>&nbsp;&nbsp;|-神魔大陆</option><option value='72' style='background:#99C4E3'>&nbsp;&nbsp;|-降龙之剑</option><option value='55'>|-九城游戏</option><option value='73' style='background:#99C4E3'>&nbsp;&nbsp;|-暗黑之门</option><option value='74' style='background:#99C4E3'>&nbsp;&nbsp;|-奇迹</option><option value='75' style='background:#99C4E3'>&nbsp;&nbsp;|-奇迹世界</option><option value='76' style='background:#99C4E3'>&nbsp;&nbsp;|-卓越之剑</option><option value='77' style='background:#99C4E3'>&nbsp;&nbsp;|-FIFAOL2</option><option value='78' style='background:#99C4E3'>&nbsp;&nbsp;|-王者世界</option><option value='79' style='background:#99C4E3'>&nbsp;&nbsp;|-九州战记</option><option value='80' style='background:#99C4E3'>&nbsp;&nbsp;|-幻想世界</option><option value='81' style='background:#99C4E3'>&nbsp;&nbsp;|-仙境传说2</option><option value='82' style='background:#99C4E3'>&nbsp;&nbsp;|-快乐西游</option><option value='83' style='background:#99C4E3'>&nbsp;&nbsp;|-魔兽世界</option><option value='84' style='background:#99C4E3'>&nbsp;&nbsp;|-名将三国</option><option value='56'>|-网易游戏</option><option value='85' style='background:#99C4E3'>&nbsp;&nbsp;|-大话西游</option><option value='86' style='background:#99C4E3'>&nbsp;&nbsp;|-梦幻西游</option><option value='87' style='background:#99C4E3'>&nbsp;&nbsp;|-大唐无双</option><option value='88' style='background:#99C4E3'>&nbsp;&nbsp;|-泡泡游戏</option><option value='89' style='background:#99C4E3'>&nbsp;&nbsp;|-天下贰</option><option value='90' style='background:#99C4E3'>&nbsp;&nbsp;|-新飞飞</option><option value='91' style='background:#99C4E3'>&nbsp;&nbsp;|-魔兽世界</option><option value='57'>|-盛大游戏</option><option value='92' style='background:#99C4E3'>&nbsp;&nbsp;|-传奇世界</option><option value='93' style='background:#99C4E3'>&nbsp;&nbsp;|-热血传奇</option><option value='94' style='background:#99C4E3'>&nbsp;&nbsp;|-传奇外传</option><option value='95' style='background:#99C4E3'>&nbsp;&nbsp;|-梦幻国度</option><option value='96' style='background:#99C4E3'>&nbsp;&nbsp;|-新英雄年代</option><option value='97' style='background:#99C4E3'>&nbsp;&nbsp;|-鬼吹灯外传</option><option value='98' style='background:#99C4E3'>&nbsp;&nbsp;|-龙神传说</option><option value='99' style='background:#99C4E3'>&nbsp;&nbsp;|-仙境传说</option><option value='100' style='background:#99C4E3'>&nbsp;&nbsp;|-霸王2</option><option value='101' style='background:#99C4E3'>&nbsp;&nbsp;|-苍天神迹</option><option value='102' style='background:#99C4E3'>&nbsp;&nbsp;|-冒险岛</option><option value='103' style='background:#99C4E3'>&nbsp;&nbsp;|-传奇归来</option><option value='104' style='background:#99C4E3'>&nbsp;&nbsp;|-龙之谷</option><option value='105' style='background:#99C4E3'>&nbsp;&nbsp;|-传世群英传</option></select></div></td></tr><tr><td><div align=center><input type=submit name=Submit value=搜索></div></td></tr></form></table>");