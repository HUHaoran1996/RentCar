<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
session_start();
$username=$_SESSION['agent'];
$nom=$_POST['nom'];
$date=$_POST['date'];
$prenom=$_POST['prenom'];
$_SESSION['agentaddress']=$_POST['address'];
$address=$_SESSION['agentaddress'];
$query="update agent_message set nom='$nom',prenom='$prenom',date='$date',address='$address'where username='$username'";
$res1=mysqli_query($link,$query);
if($res1){

    alertMes("Success","AddA.php");
}
else{
    alertMes("failture","AddA.php");
}