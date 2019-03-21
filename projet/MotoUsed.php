<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
session_start();
$license=$_SESSION['license'];
$address=$_SESSION['address'];
$query="select * from rentmoto where  license='$license'and address='$address'";
$rows=fetchAll($link, $query);
if($rows){
    foreach($rows as $rentmoto){
        $_SESSION['license']=$rentmoto['license'];
        $_SESSION['username']=$rentmoto['username'];
        $_SESSION['mileage']=$rentmoto['mileage'];
        $_SESSION['money']=$rentmoto['money'];
        $_SESSION['abrasion']=$rentmoto['abrasion'];
        $_SESSION['sdate']=$rentmoto['sdate'];
        $_SESSION['edate']=$rentmoto['edate'];
        $_SESSION['insurance']=$rentmoto['insurance'];
        $_SESSION['totalmoney']=$rentmoto['totalmoney'];
    }
}
else{
    alertMes("Failure", "SearchOrderInfo.php");
}
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>In <?php echo $address;?></strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="doAction25.php"> 
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
        <div class="form-group">
        <div class="label">
          <label>license:</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="license" data-validate="required:input license" />
          <div class="tips"></div>
        </div>
      </div>
      <div>
          <button class="button bg-main icon-check-square-o" type="submit"> submit</button>
        </div>
     
    </form>
     <table class="table table-hover text-center">
    <tr>
      
      <th width="10%">license</th>
      <th width="10%">username</th>
      <th width="10%">mileage</th>
      <th width="10%">One day's rent(euro)</th>
      <th width="10%">starting date</th>
      <th width="10%">ending date</th>
      <th width="10%">abrasion</th>
      <th width="10%">insurance(euro)</th>
      <th width="10%">prepaid amount</th>
      <th width="10%">operation</th>
    </tr>
    <tbody>
    
   
   <tr>
     
      <th width="10%"><?php echo $_SESSION['license']?></th>
      <th width="10%"><?php echo $_SESSION['username']?></th>
      <th width="10%"><?php echo $_SESSION['mileage']?></th>
      <th width="10%"><?php echo $_SESSION['money']?></th>
      <th width="10%"><?php echo $_SESSION['sdate']?></th>
      <th width="10%"><?php echo $_SESSION['edate']?></th>
      <th width="10%"><?php echo  $_SESSION['abrasion']?></th>
      
      <th width="10%"><?php 
      if($_SESSION['insurance']==0) 
      {
      echo'null';
      }
      elseif ($_SESSION['insurance']==50)
      {
      echo'half amount of insurance(50euros)';
      }
      elseif($_SESSION['insurance']==100)
      {
      echo'full insurance(100euros)';
      }?></th>
      <th width="10%"><?php echo$_SESSION['totalmoney'] ?></th>
      <th width="10%"><div class="button-group">
      
      <a class="button border-main"href="CheckOutM.php" ><span class="icon-edit">Check Out</span> </a>
      
      </div></th>
    </tr>

    </tbody>
    
  </table>
     </div>
</div>

</body></html>
