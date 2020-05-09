<?php
/**
 * 发布信息公共函数
 * Created by PhpStorm.
 * User: beasy
 * Date: 2018/10/9
 * Time: 10:55
 */

//===========================================================================判重操作函数相关======================================================================================

/**
 * 通用的数据更新函数
 * @param $id
 * @param $data
 * @param $tbname
 */
function common($id, $data, $tbname)
{
    $where = " where id = '{$id}'";
    updateField($data, array(), $tbname, $where);
}

/**
 * 执行更新
 * @param $data 需要更新字段数组
 * @param $no_update 不需要更新的字段数组
 * @param $tbname 表名称
 * @param $where where限制条件
 * @return string
 */
function updateField($data, $no_update, $tbname, $where)
{
    global $dbtbpre,$empire;
    $data['newstime'] = strtotime($data['newstime']);
    //默认不需要更新的字段,一般为帝国CMS自带系统字段
    $init_no = array('classid', 'oldchecked', 'checked');
    $no_update = array_merge($init_no, $no_update);
    //判断字段主副表
    $zf_arr = array();
    $rst = $empire->query("select f,tbdataf from {$dbtbpre}enewsf where tbname = '{$tbname}'");
    while ($row = $empire->fetch($rst)) {
        $zf_arr[$row['f']] = $row['tbdataf'];
    }
    //开始拼接
    $tempZ = array(); //主表字段
    $tempF = array(); //副表字段
    foreach ($data as $k => $v) {
        if (in_array($k, $no_update)) {
            continue;
        }
        if ($zf_arr[$k] == 0) {
            $tempZ[] = "{$k} = '{$v}'";
        } elseif($zf_arr[$k] == 1) {
            $tempF[] = "{$k} = '{$v}'";
        }
    }
    if (!empty($tempZ)) {
        $sqlZ = "update {$dbtbpre}ecms_{$tbname} set " . @implode(',', $tempZ) . " {$where}";
        //file_put_contents('test.log', $sqlZ . "\r\n", 8);
        $rstZ = $empire->query($sqlZ);
        //file_put_contents('test.log', $rstZ . "\r\n", 8);
    }
    if (!empty($tempF)) {
        $sqlF = "update {$dbtbpre}ecms_{$tbname}_data_1 set " . @implode(',', $tempF) . " {$where}";
        //file_put_contents('test.log', $sqlF . "\r\n", 8);
        $rstF = $empire->query($sqlF);
        //file_put_contents('test.log', $rstF . "\r\n", 8);
    }
}

//===========================================================================表单提交数据处理函数相关===================================================================================

