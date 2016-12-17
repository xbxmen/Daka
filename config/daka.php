<?php
/*
 * 打卡 接口
 * */
include_once 'myDB.php';
error_reporting();
$response = array("statue" => '');
$con = new opDB();
date_default_timezone_set("Asia/Shanghai");
if(isset($_COOKIE['user'])){
    $time = $_POST['time'];
    $account = $_COOKIE['user'];
    $username = $_COOKIE['username'];
    $sql  = "SELECT * FROM logs WHERE Account='{$account}' && Time='{$time}'";
    $res = $con->excute_dql($sql);
    if($res == 1){
        $sql = "UPDATE logs SET 一1='{$_POST['一1']}',一2='{$_POST['一2']}',一3='{$_POST['一3']}',一4='{$_POST['一4']}',
                一5='{$_POST['一5']}',一6='{$_POST['一6']}',一7='{$_POST['一7']}',
                二1='{$_POST['二1']}',二2='{$_POST['二2']}',二3='{$_POST['二3']}',二4='{$_POST['二4']}',二5='{$_POST['二5']}',
                三1='{$_POST['三1']}',三2='{$_POST['三2']}',三3='{$_POST['三3']}' WHERE Account='{$account}' && Time = '{$time}'";

        if($con->excute_dml($sql) == 1){
            echo 1;
            exit;
        }else if($con->excute_dml($sql) == -1 ){
            echo  -2;
            exit;
        }
    }else{
        $sql ="INSERT INTO logs VALUES('$account','$username','$time','{$_POST['一1']}','{$_POST['一2']}','{$_POST['一3']}','{$_POST['一4']}','{$_POST['一5']}','{$_POST['一6']}','{$_POST['一7']}','{$_POST['二1']}','{$_POST['二2']}','{$_POST['二3']}','{$_POST['二4']}','{$_POST['二5']}','{$_POST['三1']}','{$_POST['三2']}','{$_POST['三3']}')";
        echo $con->excute_dml($sql);
        exit;
    }
}else{
	$con->for_close();
	echo -1;
	exit ;
}