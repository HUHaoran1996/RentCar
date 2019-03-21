<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
session_start();
$_SESSION['Id']=$_POST['Id'];
$Id=$_SESSION['Id'];
$username=$_SESSION['client'];
$query="select * from car where Id='$Id'";
$rows=fetchAll($link,$query);
 foreach($rows as $car):
$_SESSION['license']=$car['license'];
$_SESSION['model']=$car['model'];
$_SESSION['mileage']=$car['mileage'];
$_SESSION['money']=$car['money'];
$_SESSION['address']=$car['address'];
$_SESSION['abrasion']=$car['abrasion'];
 endforeach;
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
  <div class="panel-head"><strong><span class="icon-key"></span> RentCar</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="doAction19.php">
      <div class="form-group">
        <div class="label">
          <label for="sitename">license:</label>
        </div>
        <div class="field">
          <label style="line-height:33px;">
          
           <?php echo $_SESSION['license']?>
           
          </label>
        </div>
      </div>     
      <div class="form-group">
        <div class="label">
          <label for="sitename">username:</label>
        </div>
        <div class="field">
          <label style="line-height:33px;">
           <?php echo $username?>
          </label>
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label for="sitename">model:</label>
        </div>
        <div class="field">
          <label style="line-height:33px;">
           <?php echo $_SESSION['model']?>
          </label>
        </div>
      </div>  
        <div class="form-group">
        <div class="label">
          <label for="sitename">address:</label>
        </div>
        <div class="field">
          <label style="line-height:33px;">
           <?php echo $_SESSION['address']?>
          </label>
        </div>
      </div>        
      <div class="form-group">
        <div class="label">
          <label for="sitename">mileage(km):</label>
        </div>
        <div class="field">
          <label style="line-height:33px;">
           <?php echo $_SESSION['mileage']?>
          </label>
        </div>
      </div>   
      <div class="form-group">
        <div class="label">
          <label for="sitename">one day's rent(euro):</label>
        </div>
        <div class="field">
          <label style="line-height:33px;">
           <?php echo $_SESSION['money']?>
          </label>
        </div>
      </div>         
      <div class="form-group">
        <div class="label">
          <label for="sitename">abrasion:</label>
        </div>
        <div class="field">
          <label style="line-height:33px;">
          <?php echo $_SESSION['abrasion']?>
          </label>
        </div>
      </div>       
       
      <div class="form-group">
        <div class="label">
          <label for="sitename">Starting Date:</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="sdate" size="50"placeholder="yyyy-mm-dd"  />         
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label for="sitename">Expiring Date:</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="edate" size="50" placeholder="yyyy-mm-dd" />          
        </div>
      </div>
       <if condition="$iscid eq 1">
        <div class="form-group">
          <div class="label">
            <label>Insurance</label>
          </div>
          <div class="field">
            <select name="insurance" class="input w50">
            <option value="0">null</option>
              <option value="100">full insurance(100euros)</option>
              <option value="50">half amount of insurance(50euros)</option>
              
            </select>
            <div class="tips"></div>
          </div>
        </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> submit</button>   
        </div>
      </div>      
    </form>
  </div>
</div>
</body></html>