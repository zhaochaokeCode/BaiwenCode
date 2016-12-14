<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>选择游戏服务器</title>
	<script src="/Public/js/jquery.js"></script>
</head>
<body>
<form action="/index.php/Exrc/consumption_mod" method="post">
	选择游戏服务器 : 
	<select name="s_id" id="server" >
	<option value="" disabled selected="ture">请选择服务器</option>
	<?php if(is_array($server)): foreach($server as $key=>$g_server): ?><option value="<?php echo ($g_server["s_id"]); ?>" ><?php echo ($g_server["s_name"]); ?></option><?php endforeach; endif; ?>
	</select> 
	<span id="is_role"></span>
	<br>
	充值元宝: <input type="number" name="number" min="1" required> 个<br>

	消耗平台币数量:<font id="money" color="red"></font>
	<input type="hidden"  id="proportion" value="<?php echo ($proportion); ?>" name="proportion"> <br>
	<input type="hidden" name="csrf" value="<?php echo ($csrf); ?>">
	<input type="submit" value="立即充值" id="sub">
</form>
<script>

	$(function(){
		var re = false;
		$("#server").on("change",function(){
			var s_id = $(this).val();
			$.ajax({
             type: "GET",
             url: "/index.php/Exrc/is_role",
             data: {s_id:s_id},
             success: function(data){
             	 if(data==0){
             	 	$("#sub").attr("disabled","true");
             	 	$("#is_role").html("<font color='red'>您当前服务器没有角色!</font>");
             	 }else{
             	 	$("#is_role").html("");
             	 	$("#sub").removeAttr("disabled");
             	 }
               }
			});
		});

		$("form").submit(function(){
			var s_id = $("#server").val();
			if(s_id==''){
				alert("请选择服务器!");
				return false;
			}
			
		});

		$("input[type='number']").on("blur",function(){
			var number = $(this).val();
			var proportion = parseInt($("#proportion").val());
			$("#money").html(number/proportion)
		});
	});
</script>
</body>
</html>