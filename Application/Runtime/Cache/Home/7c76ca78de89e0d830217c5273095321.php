<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>模拟登陆</title>
	<script src="/gamenoll.com/Public/js/jquery.js"></script>
</head>
<body>
    <?php if($last_login["state"] == 1): ?><h1>最近登录:</h1>
    	<?php if(is_array($last_login['data'])): foreach($last_login['data'] as $key=>$last_server): ?><span> <b><?php echo ($last_server['server_info']['s_name']); ?></b></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php endforeach; endif; endif; ?>
    <br><br><br>
	<form action="/gamenoll.com/index.php/Exlogin/login_game" method="post">
		<select name="s_id" id="servers">
		<?php if(is_array($servers)): foreach($servers as $key=>$server): ?><option value="<?php echo ($server["s_id"]); ?>"><?php echo ($server["s_name"]); ?></option><?php endforeach; endif; ?>
		</select>
		<br>
		<input type="hidden" name="g_id" value="<?php echo ($g_id); ?>">
		<input type="submit" value="进入游戏" >
	</form>
</body>
</html>