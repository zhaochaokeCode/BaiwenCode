<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>练习充值</title>
</head>
<body>
	<form action="/index.php/Exrc/rc_mod" method="post">
		充值金额: <input type="number" name="rc" min="1">
		<input type="hidden" name="csrf" value="<?php echo ($csrf); ?>">
		<input type="submit" value="充值">
	</form>
</body>
</html>