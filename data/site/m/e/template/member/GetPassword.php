<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='取回密码';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;取回密码";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<br>
<ul>
    <li id="emailTable">邮箱找回</li>
    <li id="phoneTable">手机找回</li>
</ul>
<table class="email" width="500" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <form name="GetPassForm" method="POST" action="../doaction.php">
    <tr class="header"> 
      <td height="25" colspan="2"><div align="center">邮箱取回密码</div></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td width="23%" height="25">用户名</td>
      <td width="77%"><input name="username" type="text" id="username" size="38"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">邮箱</td>
      <td><input name="email" type="text" id="email" size="38"></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">验证码</td>
      <td>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td width="52"><input name="key" type="text" id="key" size="6"> 
                  </td>
                  <td id="getpasswordshowkey"><a href="#EmpireCMS" onclick="edoshowkey('getpasswordshowkey','getpassword','<?=$public_r['newsurl']?>');" title="点击显示验证码">点击显示验证码</a></td>
                </tr>
            </table>
	  </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp; </td>
      <td> <input type="submit" name="button" value="提交"> <input name="enews" type="hidden" id="enews" value="SendPassword"></td>
    </tr>
  </form>
</table>
<table class="phone" width="500" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder" style="display:none;">
  <form name="GetPassForm" method="POST" action="../doaction.php">
    <tr class="header">
      <td height="25" colspan="2"><div align="center">手机取回密码</div></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="23%" height="25">手机号</td>
      <td width="77%"><input name="phone" type="text" id="phone" size="38"></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">验证码 </td>
      <td><input name="captcha" type="text" id="captcha" size="6">&nbsp;&nbsp;&nbsp;<button type="button" id="captid" onclick="getCapt();">获取验证码</button> <button type="button" id="captOK" style="display: none">获取验证码</button></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">&nbsp; </td>
      <td> <input type="submit" name="button" value="提交"> <input name="enews" type="hidden" id="enews" value="SendPasswordB"></td>
    </tr>
  </form>
</table>
<br>
    <script type="text/javascript" src="../../data/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $("#emailTable").on("click",function () {
            $(".phone").css("display","none");
            $(".email").css("display","block");
        });
        $("#phoneTable").on("click",function () {
            $(".phone").css("display","block");
            $(".email").css("display","none");
        });

        function getCapt() {
            var phone = $("#phone").val();
            invokeSettime($("#captid"));
            $.ajax({
                type: "post",
                url: "../extend/captcha/doaction.php",
                data: {phone:phone,enews:'getpassword'},
                dataType: "json",
                success: function(data){
                    if (!data.code){
                        alert(data.msg);
                    }
                }
            });
        }
        function invokeSettime(obj){
            var countdown=120;
            settime(obj);
            function settime(obj) {
                if (countdown == 0) {
                    $(obj).text("发送验证码");
                    $(obj).css("display","inline-block");
                    $("#captOK").css("display","none");
                    countdown = 120;
                    return;
                } else {
                    $(obj).css("display","none");
                    $("#captOK").css("display","inline-block");
                    $("#captOK").text(countdown + "s重新发送");
                    countdown--;
                }
                setTimeout(function() {settime(obj) },1000)
            }
        }
    </script>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>