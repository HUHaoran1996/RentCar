<?php
session_start();
$address=$_SESSION['address'];
$license=$_SESSION['license'];
$username=$_SESSION['username'];
$mileage=$_SESSION['mileage'];
$money=$_SESSION['money'];
$abrasion=$_SESSION['abrasion'];
$sdate=$_SESSION['sdate'];
$edate=$_SESSION['edate'];
$insurance=$_SESSION['insurance'];
$totalmoney=$_SESSION['totalmoney'];
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
    <form method="post" class="form-x" action="doAction26.php"> 
    <div class="form-group">
        <div class="label">
          <label>license:<?php echo $license;?></label>
        </div>
        
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>username:<?php echo $username;?></label>
        </div>
        
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>mileage:<?php echo $mileage;?></label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="mileage" data-validate="required:input the mileage at the end" />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>money:<?php echo $money;?></label>
        </div>
        
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>abrasion:<?php echo $abrasion;?></label>
        </div>
        <div class="field">
            <select name="abrasion" class="input w50">
            <option value="null">null</option>
              <option value="no">no</option>
              <option value="mild">mild</option>
              <option value="moderate">moderate</option>
              <option value="severe">severe</option>
              
            </select>
            <div class="tips"></div>
          </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>starting date:<?php echo $sdate;?></label>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>ending date:<?php echo $edate;?></label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="edate" placeholder="yyyy-mm-dd" data-validate="required:input the ending date" />
          <div class="tips"></div>
        </div>
      </div>
      
     <div class="form-group">
        <div class="label">
          <label>insurance:<?php if($insurance==0) 
      {
      echo'null';
      }
      elseif ($insurance==50)
      {
      echo'half amount of insurance(50euros)';
      }
      elseif($insurance==100)
      {
      echo'full insurance(100euros)';}?></label>
        </div>
      </div>
      
      
      <div class="form-group">
        <div class="label">
          <label>prepaid amount:<?php echo $totalmoney;?></label>
        </div>
      </div>
      
      <div>
          <button class="button bg-main icon-check-square-o" type="submit"> submit</button>
        </div>
    </form>
     </div>
</div>

</body>
</html>