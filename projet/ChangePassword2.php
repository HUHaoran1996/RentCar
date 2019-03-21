<?php
session_start();
$username=$_SESSION['agent'];

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
<div class="panel-head"><strong><span class="icon-key"></span> Change Password</strong></div>
<div class="body-content">
<form method="post" class="form-x" action="doAction22.php">
<div class="form-group">
<div class="label">
<label for="sitename">Agent:</label>
</div>
<div class="field">
<label style="line-height:33px;">
<?php echo $username;?>
</label>
</div>
</div>
<div class="form-group">
<div class="label">
<label for="sitename">Old Password:</label>
</div>
<div class="field">
<input type="password" class="input w50" id="mpass" name="oldpass" size="50" placeholder="input old password" data-validate="required:input old password" />
</div>
</div>
<div class="form-group">
<div class="label">
<label for="sitename">New Password:</label>
</div>
<div class="field">
<input type="password" class="input w50" name="newpass" size="50" placeholder="input new password" />
</div>
</div>
<div class="form-group">
<div class="label">
<label for="sitename">Confirm:</label>
</div>
<div class="field">
<input type="password" class="input w50" name="renewpass" size="50" placeholder="comfirm your new password" data-validate="required:input new password,repeat#newpass:password mismatch" />
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