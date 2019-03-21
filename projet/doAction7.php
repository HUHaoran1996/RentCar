<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
$table = "moto";
$license = $_POST["license"];
  
$query="select Id from moto where license='$license' ";
$res =fetchAll ( $link, $query );

if($res){
  alertMes("Failure,the license has been used!", "AddM.html");
}else{
    
    $license=$_POST["license"];
    $cylindree = $_POST["cylindree"];
    $situation = $_POST["situation"];
    $mileage=$_POST["mileage"];
    $address=$_POST["address"];
    $abrasion=$_POST['abrasion'];
    $money=$_POST['money'];
    $data = compact('license','cylindree','situation','mileage','address','abrasion','money');
    $res = insert($link, $data, $table);
    if($res){
        
            alertMes("Success", "AddM.html");
        
        
    }else{
        alertMes("Failure", "AddM.html");
    }
}
