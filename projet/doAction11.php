<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
session_start();
$license=$_SESSION["license"];
$cylindree=$_POST["cylindree"];
$situation=$_POST["situation"];
$mileage=$_POST["mileage"];
$address=$_POST["address"];
$abrasion=$_POST["abrasion"];
$money=$_POST["money"];
$query="select Id from moto where license='$license' ";
$res=fetchAll ( $link, $query );
if($res){
    
    $query1="update moto set cylindree='$cylindree',situation='$situation',mileage='$mileage',address='$address',abrasion='$abrasion',money='$money'  where license='$license' ";
    $res==mysqli_query ( $link, $query1 );
    if($res){
        alertMes("Success", "MotoInfo.php");
    }else{
        alertMes("Failture", "MotoInfo.php");
    }
    
}else{
    
   alertMes("Failture", "MotoInfo.php");
}
    
