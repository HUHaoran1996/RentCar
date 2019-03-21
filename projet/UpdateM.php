<?php 
session_start();
$_SESSION['license']=$_POST['update'];

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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>Update Moto's Information</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="doAction11.php">  
    <div class="form-group">
        <div class="label">
          <label>license:<?php echo$_SESSION['license'];?></label>
        </div>
        
      </div>
     
      
      <if condition="$iscid eq 1">
        <div class="form-group">
          <div class="label">
            <label>cylindree:</label>
          </div>
          <div class="field">
            <select name="cylindree" class="input w50">
              <option value="null">null</option>
              <option value="SU">SU</option>
              <option value="SC">SC</option>
              <option value="SI">SI</option>
              
            </select>
            <div class="tips"></div>
          </div>
        </div>
          <if condition="$iscid eq 1">
        <div class="form-group">
          <div class="label">
            <label>Is it can be used:</label>
          </div>
          <div class="field">
            <select name="situation" class="input w50">
            <option value="null">null</option>
              <option value="yes">yes</option>
              <option value="no">no</option>
              
            </select>
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
        <div class="label">
          <label>mileage(km):</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="mileage" data-validate="required:input mileage" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>One day's rent(euro):</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="money" data-validate="required:input money" />
          <div class="tips"></div>
        </div>
      </div>
        <if condition="$iscid eq 1">
        <div class="form-group">
          <div class="label">
            <label>address:</label>
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
        <if condition="$iscid eq 1">
        <div class="form-group">
          <div class="label">
            <label>abrasion:</label>
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
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> submit</button>
        </div>
     
    </form>
  </div>
</div>

</body></html>