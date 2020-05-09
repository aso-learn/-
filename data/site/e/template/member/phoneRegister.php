<?php
if(!defined('InEmpireCMS'))
{
    exit();
}
?>
<?php
$public_diyr['pagetitle']='注册会员';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;注册会员";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
    <table width='100%' border='0' align='center' cellpadding='3' cellspacing='1' class="tableborder">
        <form name=userinfoform method=post enctype="multipart/form-data" action=../doaction.php>
            <input type='hidden' name='enews' value='phoneRegister'>
            <tr class="header">
                <td height="25" colspan="2">注册会员<?=$tobind?' (绑定账号)':''?></td>
            </tr>
            <tr>
                <td height="25" colspan="2"><strong>基本信息
                        <input name="groupid" type="hidden" id="groupid" value="<?=$groupid?>">
                        <input name="tobind" type="hidden" id="tobind" value="<?=$tobind?>">
                    </strong></td>
            </tr>
            <tr>
                <td height="25" bgcolor="#FFFFFF"> <div align='left'>手机号码</div></td>
                <td height="25" bgcolor="#FFFFFF"> <input name='phone' type='text' id='phone' maxlength='50'>
                    *   <button type="button" id="captid" onclick="getCapt();">获取验证码</button> <button type="button" id="captOK" style="display: none">获取验证码</button>
                </td>
            </tr>
            <tr>
                <td height="25" bgcolor="#FFFFFF"> <div align='left'>验证码</div></td>
                <td height="25" bgcolor="#FFFFFF"> <input name='captcha' type='text' id='captcha' maxlength='20'>
                    *</td>
            </tr>
            <tr>
                <td height="25" bgcolor="#FFFFFF"> <div align='left'>密码</div></td>
                <td height="25" bgcolor="#FFFFFF"> <input name='password' type='password' id='password' maxlength='20'>
                    *</td>
            </tr>
            <tr>
                <td height="25" bgcolor="#FFFFFF"> <div align='left'>重复密码</div></td>
                <td height="25" bgcolor="#FFFFFF"> <input name='repassword' type='password' id='repassword' maxlength='20'>
                    *</td>
            </tr>
            <?
            if($public_r['regkey_ok'])
            {
                ?>
                <tr>
                    <td height="25" bgcolor="#FFFFFF">验证码：</td>
                    <td height="25" bgcolor="#FFFFFF">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="52"><input name="key" type="text" id="key" size="6">
                                </td>
                                <td id="regshowkey"><a href="#EmpireCMS" onclick="edoshowkey('regshowkey','reg','<?=$public_r['newsurl']?>');" title="点击显示验证码">点击显示验证码</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <?
            }
            ?>
            <tr>
                <td height="25" bgcolor="#FFFFFF">&nbsp;</td>
                <td height="25" bgcolor="#FFFFFF"> <input type='submit' name='Submit' value='马上注册'>
                    &nbsp;&nbsp; <input type='button' name='Submit2' value='返回' onclick='history.go(-1)'></td>
            </tr>
            <tr bgcolor="#FFFFFF">
                <td height="25" colspan="2">说明：带*项为必填。</td>
            </tr>
        </form>
    </table>
    <script type="text/javascript" src="../../data/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        function getCapt() {
            var phone = $("#phone").val();
            invokeSettime($("#captid"));
            $.ajax({
                type: "post",
                url: "../extend/captcha/doaction.php",
                data: {phone:phone,enews:'Register'},
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