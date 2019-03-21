<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
$vehicle=$_POST["vehicle"];
if($vehicle=='car'){
   header("Location:CarM.php");
}else if($vehicle=='moto'){
   header("Location:MotoM.php");
}
?>
