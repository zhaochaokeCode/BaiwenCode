<?php
namespace Home\Controller;
use Think\Controller;
class PayController extends Controller {
    public function index(){
         if(!isset($_SESSION['userinfo'])){
            session("login_callback",$_SERVER['PATH_INFO']);
	    echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
            echo "<script>alert('请先登录!');window.location.href='".U("login/index")."';</script>";die;
        }
    	$this -> assign('rc',$this -> getRc());
        $this -> display();
    }

    public function dopay(){
        if ($_POST['submit']) {
            $_SESSION['pay'] = I();
            $this -> redirect('Pay/pay2');
        }
    }

    public function pay2(){
        if ($_SESSION['isLog'] != 2) {
            $this -> redirect('Index/index');
        }
        $data = $_SESSION['pay'];
        //print_r($data);die;
        // switch ($_SESSION['pay']['payment']) {
        //     case '0':
        //         $data['payment'] = visa;
        //         break;
        //     case '1':
        //         $data['payment'] = webmoney;
        //         break;
        //     case '2':
        //         $data['payment'] = bitcash;
        //         break;
        //     case '3':
        //         $data['payment'] = netcash;
        //         break;
        //     default:
        //         $data['payment'] = paypal;
        //         break;
        // }
        $this -> assign('payinfo',$data);
        $this -> display();
    }

    public function pay4(){
        if ($_SESSION['isLog'] != 2) {
            $this -> redirect('Index/index');
        }
        if ($_POST['submit']) {
            $pay = M('pay');
            $data = $_SESSION['pay'];
            $data['uid'] = $_SESSION['userinfo']['id'];
            $data['createtime'] = date('Y-m-d H:i:s',time());
            if ($pay -> create($data)) {
                if ($pay -> add()) {
                    $this -> success('充值成功!');
                    $user = M('user');
                    $map['id'] = $_SESSION['userinfo']['id'];
                    $data['rc'] = $_SESSION['pay']['rc'] + $_SESSION['pay']['payamount'];
                    $data = $user -> where($map) -> save($data);
                    if ($data) {
                       $this -> redirect('Login/personal');
                    }
                }
            }

        }
        $this -> display();
    }

    
    public function getRc(){
    	$user = M('user');
    	$map['id'] = $_SESSION['userinfo']['id'];
    	$rc = $user -> field('rc') -> where($map) -> find();
    	return $rc;
    }
}
