<?php
namespace Home\Controller;
use Think\Controller;
class ExloginController extends Controller {
    public function index(){
        if(isset($_SESSION['userinfo'])){
            $games = M('games');
            $games_data = $games -> select();
            $this -> assign("games",$games_data);
            $this -> display();
        }else{
            $this -> SetCsrf(rand(0,9999));
            $this -> display("login");
        }
        
    }


    //验证码
    public function code(){
            $Verify = new \Think\Verify();
            $Verify->entry();
    }

    //用户登录
    public function login(){
        $_POST['password'] = md5($_POST['password']);
        $user = M('user');
        if($user_info = $user -> where($_POST) -> find()){
            session('userinfo',$user_info);
            isset($_SESSION['login_callback'])?$login_callback=$_SESSION['login_callback']:$login_callback='index/index';
            $this -> GetCsrf($login_callback);
            unset($_SESSION['login_callback']);
            $this -> redirect('/'.$login_callback);
        }else{
            $this -> error("用户名或密码错误");
        }
    }

    //退出
    public function loginout(){
        session('userinfo',null);
        $this -> redirect("Index/index");
    }

   
        
}