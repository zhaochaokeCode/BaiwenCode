<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>模拟登陆</title>
	<script src="/gamenoll.com/Public/js/jquery.js"></script>
</head>
<body>
欢迎<font color="red"><?php echo ($_SESSION["userinfo"]["nicename"]); ?></font>登录 
<a href="/gamenoll.com/index.php/Exlogin/loginout">退出</a> <br>
	<form action="/gamenoll.com/index.php/Games/choice_server" method="post">
		<select name="g_id" id="games">
		<?php if(is_array($games)): foreach($games as $key=>$game): ?><option value="<?php echo ($game["g_id"]); ?>"><?php echo ($game["g_name"]); ?></option><?php endforeach; endif; ?>
		</select>
		<br>
		<input type="hidden" value="<?php echo ($_SESSION["user"]["id"]); ?>" name="u_id">
		<input type="submit" value="确定" >
	</form>
</body>
</html>