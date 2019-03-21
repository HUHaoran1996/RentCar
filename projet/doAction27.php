<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
$table="returnthemoto";
session_start();
$license=$_SESSION['license'];
$username=$_SESSION['username'];
$money=$_SESSION['money'];
$sdate=$_SESSION['sdate'];
$edate=$_POST['edate'];
$insurance=$_SESSION['insurance'];
$mileage=$_POST['mileage'];
$abrasion=$_POST['abrasion'];
$d=DiffDate($sdate, $edate);
$totalmoney=$d*$money+$insurance;
$query="update moto set mileage='$mileage',situation='yes',abrasion='$abrasion'where license='$license'";
$res=mysqli_query($link, $query);
if($res){
    $query="delete from rentmoto where license='$license' ";
    $res=mysqli_query($link, $query);
    if($res){
        $data = compact('license','username','money','sdate','edate','insurance','totalmoney');
        $res = insert($link, $data, $table);
        if($res){
            alertMes("Success", "SearchOrderInfo.php");
        }
        else{
            alertMes("Failture", "SearchOrderInfo.php");
        }
    }
    else{
        alertMes("Failture", "SearchOrderInfo.php");
    }
    
}else{
    alertMes("Failture", "SearchOrderInfo.php");
}