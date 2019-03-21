<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
session_start();
$username=$_SESSION['agent'];
$oldpass=$_POST["oldpass"];
$query="select Id from agent where  password='$oldpass'and username='$username'";
$res =fetchAll ( $link, $query );
if($res){
    $table="agent";
    $password=$_POST["newpass"];
    $data = compact('password');
    $query1="update agent set password='$password' where username='$username' ";
    $res==mysqli_query( $link, $query1 );
    if(res){
        alertMes("Success", "ChangePassword2.php");
    }
    else{
        alertMes("failture", "ChangePassword2.php");
    }
}else{
    alertMes("failture", "ChangePassword2.php");
}