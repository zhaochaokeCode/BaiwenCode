<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户登录</title>
</head>
<body>
	<form action="/index.php/Exlogin/login" method="post">
		用户名: <input type="text" name="loginname"> <br>
		密码: <input type="password" name="password"> <br>
		<input type="hidden" name="csrf" value="<?php echo ($csrf); ?>">
		<input type="submit" value="登录">
	</form>
</body>
</html>