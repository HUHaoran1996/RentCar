<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
$table = "car";
$license = $_POST["license"];
  
$query="select Id from car where license='$license' ";
$res =fetchAll ( $link, $query );

if($res){
  alertMes("Failure,the license has been used!", "AddCar.html");
}else{
    $license=$_POST["license"];
    $model = $_POST["model"];
    $situation = $_POST["situation"];
    $mileage=$_POST["mileage"];
    $address=$_POST["address"];
    $abrasion=$_POST['abrasion'];
    $money=$_POST['money'];
    $data = compact('license','model','situation','mileage','address','abrasion','money');
    $res = insert($link, $data, $table);
    if($res){
        
            alertMes("Success", "AddCar.html");
        
        
    }else{
        alertMes("Failure", "AddCar.html");
    }
}