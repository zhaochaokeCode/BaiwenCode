<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>练习消费</title>
</head>
<body>
	<h3>请选择游戏:</h3>
	<?php if(is_array($games)): foreach($games as $key=>$game): ?><a href="/index.php/Exrc/consumption_server?g_id=<?php echo ($game["g_id"]); ?>" title="<?php echo ($game["g_name"]); ?>"><img src="/Public/<?php echo ($game["g_img"]); ?>" alt="" width="100" height="100"></a>&nbsp;&nbsp;&nbsp;&nbsp;<?php endforeach; endif; ?>
</body>
</html>