<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
$table = "rentmoto";
session_start();
$username=$_SESSION['client'];
$license=$_SESSION['license'];
$cylindree=$_SESSION['cylindree'];
$mileage=$_SESSION['mileage'];
$money=$_SESSION['money'];
$address=$_SESSION['address'];
$abrasion=$_SESSION['abrasion'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$insurance=$_POST['insurance'];
$d=DiffDate($sdate, $edate);
$totalmoney=$d*$money+$insurance;
$query="update moto set situation='no'where license='$license'";
$res=mysqli_query ( $link, $query );
if($res)
{
    $data = compact('username','license','cylindree','mileage','address','abrasion','money','sdate','edate','insurance','totalmoney');
    $res = insert($link, $data, $table);
    if($res){
    
        alertMes("Success", "SearchMoto.html");
    
    
    }else{
        alertMes("Failture", "SearchMoto.html");
    }
}
else{
    alertMes("Failture", "SearchMoto.html");
}