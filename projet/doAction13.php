<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
session_start();
$username=$_SESSION['client'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$address=$_POST['address'];
$query="update clients_message set nom='$nom',prenom='$prenom',address='$address'where username='$username'";
$res1=mysqli_query($link,$query);
if($res1){

    alertMes("Success","AddClient.php");
}
else{
    alertMes("failture","AddClient.php");
}