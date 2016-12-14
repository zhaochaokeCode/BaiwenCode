<?php
namespace Home\Controller;
use Think\Controller;
class UcController extends Controller {
	function __construct() {
      include_once 'config.inc.php';
      include_once 'uc_client/client.php';
    }

    //同步注册
    function registeruser($username,$pwd,$email){
    	$info = uc_user_register($username,$pwd,$email);
    	$data = array();
    	if($info > 0){
    		$data['success'] = true;
    		$data['msg'] = "注册成功！";
    		$data['info'] = $info;
    	}else if($info = -1){
    		$data['success'] = false;
    		$data['msg'] = "用户名不合法！";
    	}else if($info = -2){
    		$data['success'] = false;
    		$data['msg'] = "包含不允许注册的词语！";
    	}else if($info = -3){
    		$data['success'] = false;
    		$data['msg'] = "用户名已经存在！";
    	}else if($info = -4){
    		$data['success'] = false;
    		$data['msg'] = "Email 格式有误！";
    	}else if($info = -5){
    		$data['success'] = false;
    		$data['msg'] = "Email 不允许注册！";
    	}else{
    		$data['success'] = false;
    		$data['msg'] = "该 Email 已经被注册！";
    	}

    	return $data;
    }

    //同步登录
    function login($username,$pwd,$isuid = 0){
    	list($id,$username,$pwd,$email) = uc_user_login($username,$pwd);
    	$data = array();
    	if($id > 0 ){
    		$synlogin = uc_user_synlogin($id);
    		$data['success'] = true;
    		$data['msg'] = "登录成功！";
    		$data['info'] = array("id"=>$id,"username"=>$username,"pwd"=>$pwd,"email"=>$email,"synlogin"=>$synlogin);
    	}else if($id = -1){
    		$data['success'] = false;
    		$data['msg'] = "用户不存在，或者被删除！";
    	}else if($id = -2){
    		$data['success'] = false;
    		$data['msg'] = "密码错！";
    	}else{
    		$data['success'] = false;
    		$data['msg'] = "安全提问错！";
    	}
    	return $data;
    }

    //获取用户资料
    function userinfo($user,$isuid = 0){
    	list($id,$username,$email) = uc_get_user($user,$isuid);
    	$data = array();
    	if($id > 0 ){
    		$data['success'] = true;
    		$data['msg'] = "查询成功！";
    		$data['info'] = array("id"=>$id,"username"=>$username,"email"=>$email);
    	}else{
    		$data['success'] = false;
    		$data['msg'] = "查询失败！";
    	}
    	return $data;
    }

    //同步退出
   	function loginout(){
   		return uc_user_synlogout();
   	}

    //删除用户
    function delete($uid)}{
        return uc_user_delete($uid);
    }
}