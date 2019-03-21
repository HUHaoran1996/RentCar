<?php
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
$cylindree=$_POST["cylindree"];
$mileage1=$_POST["mileage1"];
$mileage2=$_POST["mileage2"];

if(($cylindree=='null')&&($mileage1==0)&&($mileage2==0))
{
    header("Location:SearchMoto.html");
}

  

elseif(($cylindree!='null')&&($mileage1==0)&&($mileage2==0)){
    
    $query="select * from moto where cylindree='$cylindree'  and situation='yes'and abrasion not in('severe')";
    $rows=fetchAll($link,$query);
}
elseif(($cylindree=='null')&&($mileage1!=0)&&($mileage2!=0)){
    $query="select * from moto where  $mileage1<mileage and mileage<$mileage2 and situation='yes'and abrasion not in('severe')";
    $rows=fetchAll($link,$query);
}
else{
$query="select * from moto where cylindree='$cylindree' and $mileage1<mileage and mileage<$mileage2 and situation='yes'and abrasion not in('severe')";
$rows=fetchAll($link,$query);}
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>Motos</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="doAction16.php"> 
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
         <div class="form-group">
        <div class="label">
          <label>mileage:</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="0" name="mileage1" />
          
          <input type="text" class="input w50" value="0" name="mileage2"  />
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
      <th width="10%">license</th>
      <th width="10%">cylindree</th>
      <th width="10%">Is it can be used</th>
      <th width="10%">mileage(km)</th>
      <th width="10%">One day's rent(euro)</th>
      <th width="15%">address</th>
      <th width="10%">abrasion</th>
      <th width="20%">operation</th>
      
    </tr>
    <tbody>
    
   <?php foreach($rows as $moto):?>
   <tr>
      <th width="5%"><?php echo $moto['Id']?></th>
      <th width="15%"><?php echo $moto['license']?></th>
      <th width="10%"><?php echo $moto['cylindree']?></th>
      <th width="10%"><?php echo $moto['situation']?></th>
      <th width="10%"><?php echo $moto['mileage']?></th>
      <th width="10%"><?php echo $moto['money']?></th>
      <th width="15%"><?php echo $moto['address']?></th>
      <th width="10%"><?php echo $moto['abrasion']?></th>
      <th width="25%"><div class="button-group">
      <form method="post" class="form-x" action="doAction18.php"> 
      <button class="button border-red" value="<?php echo $moto['Id']?>" name="Id">  RentMoto </button>
      </form>
      </div></th>
    </tr>
  <?php endforeach;?>
    </tbody>
    
  </table>
     </div>
</div>

</body></html>