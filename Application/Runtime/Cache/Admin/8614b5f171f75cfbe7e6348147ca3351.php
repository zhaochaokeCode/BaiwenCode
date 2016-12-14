<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>播放视频</title>
</head>
<body>
/15combo/Public/<?php echo ($src); ?>

<video width="320" height="240" controls="controls">  
        <source src="/15combo/Public/<?php echo ($src); ?>" type="video/mp4" >示例视频1</source>  
        您的浏览器不支持video标签  
    </video>

</body>
</html>