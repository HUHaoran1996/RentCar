<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
$table = "rentcar";
session_start();
$username=$_SESSION['client'];
$license=$_SESSION['license'];
$model=$_SESSION['model'];
$mileage=$_SESSION['mileage'];
$money=$_SESSION['money'];
$address=$_SESSION['address'];
$abrasion=$_SESSION['abrasion'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$insurance=$_POST['insurance'];
$d=DiffDate($sdate, $edate);
$totalmoney=$d*$money+$insurance;
$query="update car set situation='no'where license='$license'";
$res=mysqli_query ( $link, $query );
if($res)
{
    $data = compact('username','license','model','mileage','address','abrasion','money','sdate','edate','insurance','totalmoney');
    $res = insert($link, $data, $table);
    if($res){
    
        alertMes("Success", "SearchCar.html");
    
    
    }else{
        alertMes("Failture", "SearchCar.html");
    }
}
else{
    alertMes("Failture", "SearchCar.html");
}