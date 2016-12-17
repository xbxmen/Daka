<?php
/**
 * Created by PhpStorm.
 * User: zhaoshuai
 * Date: 16-12-16
 * Time: 下午10:53
 */
include_once 'myDB.php';
error_reporting();
$response = array("statue" => '');
$con = new opDB();
date_default_timezone_set("Asia/Shanghai");
if(isset($_COOKIE['user']) && isset($_POST['time'])){
    $time = $_POST['time'];
    $account = $_COOKIE['user'];
    $sql  = "SELECT * FROM logs WHERE Account='{$account}' && Time='{$time}'";
    $res = $con->get_result($sql);
    echo json_encode($con->deal_result($res));
    $con->for_close();
    exit;
}else{
    $con->for_close();
    echo -1;
    exit ;
}