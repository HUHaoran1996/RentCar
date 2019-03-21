<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
$table = "admin";

$password = $_POST["password"];  
$query="select Id from admin where password='$password' ";
$res =fetchAll ( $link, $query );

if($res){
  alertMes("Sucess", "admin.html");
}else{
    alertMes("Failture", "index.html");
}