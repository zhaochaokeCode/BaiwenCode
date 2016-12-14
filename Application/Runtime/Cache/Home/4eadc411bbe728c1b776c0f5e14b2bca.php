<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>创建角色</title>
</head>
<body>
	<?php if($role["state"] == 1): ?><h1>您的当前角色:</h1>
	<font color="red"><?php echo ($role["data"]["r_name"]); ?></font>
	<a href="/gamenoll.com/index.php/Exlogin/index">退出</a>
	<?php else: ?>
	<form action="/gamenoll.com/index.php/Role/establish_role" method="post">
	请输入角色名称:	<input type="text" name="r_name"> <br>
	<input type="hidden" name="g_id" value="<?php echo ($g_id); ?>">
	<input type="hidden" name="s_id" value="<?php echo ($s_id); ?>">
	<input type="submit" value="确定">
	</form><?php endif; ?>
</body>
</html>