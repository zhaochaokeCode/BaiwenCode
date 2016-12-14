<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>模拟登陆</title>
	<script src="/gamenoll.com/Public/js/jquery.js"></script>
</head>
<body>
    <?php if($last_login["state"] == 1): ?><h1>最近登录:</h1>
    	<foreache name="last_login.data" item="last_server">
    		<?php echo ($last_server["server_info"]["s_name"]); ?> <br>
    	</foreache><?php endif; ?>
	<form action="/gamenoll.com/index.php/Exlogin/Choice_server" method="post">
		<select name="g_id" id="servers">
			<option value="">请选择服务器</option>
		<?php if(is_array($servers)): foreach($servers as $key=>$server): ?><option value="<?php echo ($server["s_id"]); ?>"><?php echo ($server["s_name"]); ?></option><?php endforeach; endif; ?>
		</select>
		<!-- <select name="s_id" id="servers">
			<option value="">请选择游戏</option>
		</select> -->
		<br>
		<input type="submit" value="进入游戏" >
	</form>

<!-- <script>
	$(function(){
		$(document).on('change','#games',function(){
			var g_id = $(this).val();
			$.ajax({
				url:"/gamenoll.com/index.php/Exlogin/server.html",
				data:{g_id:g_id},
				type:'GET',
				success:function(data){
					$("#servers").html(data);
				}
			});
		});
	});
</script> -->
</body>
</html>