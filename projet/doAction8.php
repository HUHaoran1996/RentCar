<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
$table = "car";
$Id=isset($_GET["id"])?$_GET["id"]:"";
if($Id==""){
    
}else{
    delete($link,$table,"Id=".$Id);
   
}
    