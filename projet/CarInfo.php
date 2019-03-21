<?php 
header("content-type:text/html;charset=utf-8");
require_once'config/config.php';
require_once'config/common.php';
require_once'config/connector.php';
$link = connect3();
$query="select * from car";
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
  <div class="panel-head"><strong class="icon-reorder"> Car's Information</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='AddCar.html'"><span class="icon-plus-square-o"></span> Add Car</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">Id</th>
      <th width="10%">license</th>
      <th width="10%">model</th>
      <th width="10%">Is it can be used</th>
      <th width="10%">mileage(km)</th>
      <th width="10%">One day's rent(euro)</th>
      <th width="15%">address</th>
      <th width="10%">abrasion</th>
      <th width="20%">operation</th>
    </tr>
    <tbody>
    
   <?php foreach($rows as $car):?>
   <tr>
      <th width="5%"><?php echo $car['Id']?></th>
      <th width="10%"><?php echo $car['license']?></th>
      <th width="10%"><?php echo $car['model']?></th>
      <th width="10%"><?php echo $car['situation']?></th>
      <th width="10%"><?php echo $car['mileage']?></th>
      <th width="10%"><?php echo $car['money']?></th>
      <th width="15%"><?php echo $car['address']?></th>
      <th width="10%"><?php echo $car['abrasion']?></th>
      <th width="20%"><div class="button-group">
      <form method="post" class="form-x" action="UpdateC.php">
      <button class="button border-main" name="update" value="<?php echo $car['license']?>"> update</button> 
      </form>  
      
      <a class="button border-red" ><span class="icon-trash-o"data_id="<?php echo $car['Id']?>">delete</span> </a>
      </div></th>
      
    </tr>
  <?php endforeach;?>
    </tbody>
    
  </table>
</div>

<script>
$(function(){
	$(".icon-trash-o").click(function(){
	var id = $(this).attr("data_id");
	var url = "doAction8.php?id="+id;
	$.get(url);
	$(this).parent().parent().parent().parent().empty();
		});
		});

</script>

    
 
</body></html>