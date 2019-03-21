<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
session_start();
$username=$_SESSION['agent'];
$query="select * from agent_message where username='$username'";
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
    <form method="post" class="form-x" action="doAction23.php">  
    <?php foreach($rows as $agent):?>
      <div class="form-group">
        <div class="label">
          <label>username:<?php echo $agent['username']?></label>
        </div>
       
      </div>
      
      
      
        <div class="form-group">
        <div class="label">
          <label>nom:<?php echo $agent['nom']?></label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="nom" data-validate="required:input nom" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>prenom:<?php echo $agent['prenom']?></label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="prenom" data-validate="required:input prenom" />
          <div class="tips"></div>
        </div>
      </div>
       <div class="form-group">
        <div class="label">
          <label>date of birth:<?php echo $agent['date']?></label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="date"placeholder="yyyy-mm-dd" data-validate="required:input date of birth" />
          <div class="tips"></div>
        </div>
      </div>
      <if condition="$iscid eq 1">
        <div class="form-group">
          <div class="label">
            <label>address:<?php echo $agent['address']?></label>
          </div>
          <div class="field">
            <select name="address" class="input w50">
            <option value="null">null</option>
              <option value="Paris">Paris</option>
              <option value="Lyon">Lyon</option>
              <option value="Marseille">Marseille</option>
              <option value="Bordeaux">Bordeaux</option>
              
            </select>
            <div class="tips"></div>
          </div>
        </div>
      <?php endforeach;?>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> add</button>
        </div>
     
    </form>
  </div>
</div>

</body></html>