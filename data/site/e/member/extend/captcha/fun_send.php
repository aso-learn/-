<?php
function aliYun($add){
    global $empire,$dbtbpre,$public_r;
    $phone = $add[phone];
    if (!$phone||strlen($phone) != 11){
        ajaxReturn(0,'手机号码不能为空');
    }
    $captcha = mt_rand(100000,999999);
    $time = time();
    if ($add[enews] == 'Login') {
        $res = $empire->query("insert into {$dbtbpre}enewscapt(phone,captcha,capttime,`type`,status) values('$phone','$captcha','$time',1,1)");
    }elseif ($add[enews] == 'Register'){
        $res = $empire->query("insert into {$dbtbpre}enewscapt(phone,captcha,capttime,`type`,status) values('$phone','$captcha','$time',2,1)");
    }elseif($add[enews] == 'phone'){
        $res = $empire->query("insert into {$dbtbpre}enewscapt(phone,captcha,capttime,`type`,status) values('$phone','$captcha','$time',3,1)");
    }elseif($add[enews] == 'getpassword'){
        $res = $empire->query("insert into {$dbtbpre}enewscapt(phone,captcha,capttime,`type`,status) values('$phone','$captcha','$time',4,1)");
    }
    if ($res){
        SmsDemo::sendSms($phone,$captcha);
        if ($add[enews] == 'phone'){
            $arr = array('code'=>200,'data'=>array('msg'=>'',"success"=>true));
            echo $add[callback] .'('. json_encode($arr).')';
            exit();
        }
        ajaxReturn(1);
    }
    ajaxReturn(0,'内部程序出错,请反馈后再进行尝试');
}

function ajaxReturn($code,$msg=''){
    $return = array();
    if ($msg){
        $return['msg']=$msg;
    }
    $return['code']=$code;
    echo json_encode($return);
    exit();
}