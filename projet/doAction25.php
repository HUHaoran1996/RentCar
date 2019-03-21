<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
session_start();
$vehicle=$_POST["vehicle"];
$_SESSION['license']=$_POST['license'];
if($vehicle=='car'){
   header("Location:CarUsed.php");
}else if($vehicle=='moto'){
   header("Location:MotoUsed.php");
}
?>
