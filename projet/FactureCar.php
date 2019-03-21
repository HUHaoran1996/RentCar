<?php

header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
session_start();
$username=$_SESSION['username'];
$query="select * from returnthecar where username='$username'";
$rows=fetchAll($link,$query);
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="css/pintuer.css">
<link rel="stylesheet" href="css/admin.css">
<script src="js/jquery.js"></script>
<script src="js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>Car's Facture</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="doAction28.php"> 
    <if condition="$iscid eq 1">
        <div class="form-group">
          <div class="label">
            <label>Vehicle:</label>
          </div>
          <div class="field">
            <select name="vehicle" class="input w50">
              <option value="null">null</option>
              <option value="moto">moto</option>
              <option value="car">car</option>
             
            </select>
            <div class="tips"></div>
          </div>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> submit</button>
        </div>
     
    </form>
    <table class="table table-hover text-center">
    <tr>
     
      <th width="15%">license</th>
      <th width="10%">username</th>
      <th width="10%">money</th>
      <th width="10%">starting date</th>
      <th width="10%">the actuel ending date</th>
      <th width="15%">insurance</th>
      <th width="10%">the actuel payment</th>
      
    </tr>
    <tbody>
    
   <?php foreach($rows as $car):?>
   <tr>
      
      <th width="15%"><?php echo $car['license']?></th>
      <th width="10%"><?php echo $car['username']?></th>
      <th width="10%"><?php echo $car['money']?></th>
      <th width="10%"><?php echo $car['sdate']?></th>
      <th width="10%"><?php echo $car['edate']?></th>
      <th width="15%"><?php 
      if($car['insurance']==0) 
      {
      echo'null';
      }
      elseif ($car['insurance']==50)
      {
      echo'half amount of insurance(50euros)';
      }
      elseif($car['insurance']==100)
      {
      echo'full insurance(100euros)';
      }?></th>
      <th width="10%"><?php echo $car['totalmoney']?></th>
      
      
    </tr>
  <?php endforeach;?>
    </tbody>
    
  </table>
     </div>
</div>

</body></html>