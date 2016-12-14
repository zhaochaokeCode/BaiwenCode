<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户完善资料</title>
</head>
<body>
<center>
	<form action="/index.php/Reg/Perfect_information" method="post">
		<table border="1">
			<tr>
				<td>昵称</td>
				<td><input type="text" name="nicename"></td>
			</tr>
			<tr>
				<td>邮箱</td>
				<td>
				<input type="text" name="email">
				<input type="hidden" value="<?php echo ($user_type); ?>" name="user_type">
				<input type="hidden" value="<?php echo ($user_mark); ?>" name="user_mark">
				</td>
			</tr>
			<tr>
				<td><input type="submit" value="确认"></td>
				<td><input type="reset" value="重置"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>