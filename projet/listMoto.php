<?php

header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
$query="select * from moto where situation='yes' and abrasion not in('severe')";
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>Available Motos</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="doAction14.php"> 
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
      <th width="5%">Id</th>
      <th width="15%">license</th>
      <th width="10%">cylindree</th>
      <th width="10%">Is it can be used</th>
      <th width="10%">mileage(km)</th>
      <th width="10%">One day's rent(euro)</th>
      <th width="15%">address</th>
      <th width="10%">abrasion</th>
      
    </tr>
    <tbody>
    
   <?php foreach($rows as $moto):?>
   <tr>
      <th width="5%"><?php echo $moto['Id']?></th>
      <th width="15%"><?php echo $moto['license']?></th>
      <th width="10%"><?php echo $moto['cylindree']?></th>
      <th width="10%"><?php echo $moto['situation']?></th>
      <th width="10%"><?php echo $moto['mileage']?></th>
       <th width="10%"><?php echo$moto['money']?></th>
      <th width="15%"><?php echo $moto['address']?></th>
      <th width="10%"><?php echo $moto['abrasion']?></th>
      
      
    </tr>
  <?php endforeach;?>
    </tbody>
    
  </table>
     </div>
</div>

</body></html>