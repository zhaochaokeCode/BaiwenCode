<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{
    public function login(){
        if($_POST){
            $_POST['password'] = md5($_POST['password']);
            $admins = M("admins");
            $data = $admins -> where($_POST) -> find();
            if($data){
                $_SESSION['master'] = $data;
                $_SESSION['isLogin'] = 1;
                $this -> redirect("Index/index");
            }else{
                $this -> error("登录失败！");
            }
        }
        $this -> display();
    
    }

    public function logout(){
        //获取登录用户的id
        $id = I('get.id');
        //删除cookie
        setcookie("$id",'',time()-1);//删除了账号
        //删除session
        //开启session
        // session_start();
        //删除session值
        unset($_SESSION['master']['id']);
        unset($_SESSION['master']['username']);
        //删除掉session文件
        session_destroy();
        //删除掉客户端session id
        setcookie(session_name(),'',time()-1,'/');
        if(!$id) $this->error('退出成功',U('Login/login'),3);
    }
}
