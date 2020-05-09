<?php
if(!defined('InEmpireCMS'))
{exit();}
?><tr bgcolor='#FFFFFF' height=25><td>推荐</td><td><select name="isgood" id="isgood"><option value="不推荐"<?=$addr[isgood]=="不推荐"?' selected':''?>>不推荐</option><option value="推荐"<?=$addr[isgood]=="推荐"?' selected':''?>>推荐</option></select></td></tr>