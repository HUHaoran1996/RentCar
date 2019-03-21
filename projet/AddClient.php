<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
session_start();
$username=$_SESSION['client'];
$query="select * from clients_message where username='$username'";
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>Add your Information</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="doAction13.php">  
    <?php foreach($rows as $client):?>
      <div class="form-group">
        <div class="label">
          <label>username:<?php echo $client['username']?></label>
        </div>
       
      </div>
      
      
      
        <div class="form-group">
        <div class="label">
          <label>nom:<?php echo $client['nom']?></label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="nom" data-validate="required:input nom" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>prenom:<?php echo $client['prenom']?></label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="prenom" data-validate="required:input address" />
          <div class="tips"></div>
        </div>
      </div>
       <div class="form-group">
        <div class="label">
          <label>address:<?php echo $client['address']?></label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="address" data-validate="required:input address" />
          <div class="tips"></div>
        </div>
      </div>
      <?php endforeach;?>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> update</button>
        </div>
     
    </form>
  </div>
</div>

</body></html>