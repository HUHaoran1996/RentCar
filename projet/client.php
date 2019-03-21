<?php
session_start();
$username=$_SESSION['client'];

?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>Client</title>  
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>   
</head>
<body style="background-color:grey;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="images/h.jpg" class="radius-circle rotate-hover" height="50" alt="" />Hi!<?php echo $username;?></h1>
  </div>
  <div class="head-l"><a class="button button-little bg-red" href="index.html"><span class="icon-power-off"></span> Exit</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>List</strong></div>
  <h2><span class="icon-user"></span>List</h2>
  <ul style="display:block">
    
    <li><a href="ChangePassword1.php" target="right"><span class="icon-caret-right"></span>Change Password</a></li>
 
    <li><a href="AddClient.php" target="right"><span class="icon-caret-right"></span>Add Your Information</a></li>
    <li><a href="list.html" target="right"><span class="icon-caret-right"></span>List available vehicles</a></li>
     <li><a href="SearchCar.html" target="right"><span class="icon-caret-right"></span>Search Cars</a></li>   
     <li><a href="SearchMoto.html" target="right"><span class="icon-caret-right"></span>Search Motos</a></li>   
     <li><a href="orderinfo.html" target="right"><span class="icon-caret-right"></span>Order Information</a></li>
     <li><a href="Facture.html" target="right"><span class="icon-caret-right"></span>Facture</a></li>              
  </ul> 
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>

<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="" name="right" width="100%" height="100%"></iframe>
</div>
</body>
</html>