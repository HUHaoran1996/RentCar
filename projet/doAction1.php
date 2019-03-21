<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
session_start();
$_SESSION['client']=$_POST["username"];
$username = $_POST["username"];
$password = $_POST["password"];
$query="select id from clients where username='$username' and password='$password'";
 $res =fetchAll ( $link, $query );
if($res){
    alertMes("Success", "client.php");
}else{
    alertMes("failture", "index.html");
}