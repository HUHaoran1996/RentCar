<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
$oldpass=$_POST["oldpass"];
$query="select Id from admin where  password='$oldpass'";
$res =fetchAll ( $link, $query );
if($res){
    $table="admin";
    $password=$_POST["newpass"];
    $data = compact('password');
    $res = update($link, $data, $table);
    if(res){
        alertMes("Success", "ChangePassword.html");
    }
    else{
        alertMes("failture", "ChangePassword.html");
    }
}else{
    alertMes("failture", "ChangePassword.html");
}