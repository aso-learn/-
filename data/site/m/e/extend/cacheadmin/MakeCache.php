<?php
require('set.php');
if(CACHE_CLOSE) return;
date_default_timezone_set("Asia/Shanghai");
$CacheName=md5($_SERVER['REQUEST_URI']) . CACHE_FIX; //缓存文件名
$CacheDir=CACHE_ROOT . DIRECTORY_SEPARATOR . substr($CacheName,0,1);//缓存文件存放目录
$CacheUrl=$CacheDir . DIRECTORY_SEPARATOR . $CacheName;//缓存文件的完整路径
 
$script_name = $_SERVER['SCRIPT_NAME'];
$config_arr = array();
$cache_time = 0; 
 
$json_str = file_get_contents(ROOT.'config.json');
if($json_str){ 
    $config_arr = json_decode($json_str,true);  
     
    if($config_arr && array_key_exists($script_name,$config_arr['urls'])){
      $cache_time = $config_arr['urls'][$script_name];
    }else{
      $config_arr['urls'][$script_name] = $config_arr['cache_time'];
      $cache_time = $config_arr['cache_time']; 
      file_put_contents(ROOT.'config.json', json_encode($config_arr)); 
    }
}

//GET方式请求才缓存，POST之后一般都希望看到最新的结果 
if($_SERVER['REQUEST_METHOD']=='GET'){
  //如果缓存文件存在，并且没有过期，就把它读出来。
  
  if($config_arr['ctimeopen'] == 1  &&file_exists($CacheUrl) && time()-filemtime($CacheUrl)<$cache_time){ 
    
    echo gzuncompress(file_get_contents($CacheUrl));
    exit;  
    
  }
  //判断文件夹是否存在，不存在则创建
  elseif(!file_exists($CacheDir)){ 
    if(!file_exists(CACHE_ROOT)){ 
      mkdir(CACHE_ROOT,0777); 
      chmod(CACHE_ROOT,0777); 
    } 
    mkdir($CacheDir,0777); 
    chmod($CacheDir,0777); 
  }
  //回调函数，当程序结束时自动调用此函数 
  function AutoCache($contents){ 
    global $CacheUrl; 
    $fp=fopen($CacheUrl,'wb'); 
    $contents = "<!--Cache at ".(date("Y-m-d H:i:s", time()))."-->\r\n".$contents;
    fwrite($fp,gzcompress($contents)); 
    fclose($fp); 
    chmod($CacheUrl,0777); 
    //生成新缓存的同时，自动删除所有的老缓存,以节约空间,可忽略。 
    //DelOldCache();//删除缓存，超过4万文件会很卡,注掉此行，停止删除缓存文件，但依然会更新过期的缓存文件
    return $contents;
  }
  function DelOldCache(){ 
    chdir(CACHE_ROOT); 
    foreach (glob("*/*".CACHE_FIX) as $file){ 
      if(time()-filemtime($file)>CACHE_TIME) unlink($file);
    }
  }
  ob_start('AutoCache');//回调函数 auto_cache 
  clearstatcache();//清除文件缓存
}else{ 
  //不是GET的请求就删除缓存文件。 
  if(file_exists($CacheUrl)) unlink($CacheUrl); 
}
?>