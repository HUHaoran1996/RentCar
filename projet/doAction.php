<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
$table = "clients";
$username = $_POST["username"];
$password = $_POST["password"];  
$query="select id from clients where username='$username' ";
$res =fetchAll ( $link, $query );

if($res){
  alertMes("Failure,the username has been used!", "index.html");
}else{
$username = $_POST["username"];
    $password = $_POST["password"];
    
    
    $data = compact('username','password');
    $res = insert($link, $data, $table);
    if($res){
        $query1 = "INSERT clients_message (username) VALUES('$username')";
        $res1 = mysqli_query ( $link, $query1 );
        if ($res1) {
            alertMes("Success", "index.html");
        
        } else {
            return false;
        }
       
    }else{
        alertMes("Failure", "index.html");
    }
}