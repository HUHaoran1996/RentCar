<?php

header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
session_start();
$username=$_SESSION['agent'];
$query="select address from agent_message where username='$username'";
$res=fetchAll( $link, $query );
foreach($res as $agent){
    $_SESSION['address']=$agent['address'];
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>In <?php echo $_SESSION['address'];?></strong></div>
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
     </div>
</div>

</body></html>