<?php
namespace Home\Controller;
use Think\Controller;


class LoginController extends Controller{
	public function index(){
		$this -> display();
	}

	public function dologin(){
		if($_POST['sub']){
            $_POST['password'] = md5($_POST['password']);
            $user = M("user");
            $data = $user -> where($_POST) -> find();
            if ($data['isout'] == 1) {
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                echo "<script>alert('您已退会,无法登陆,请联系客服!');location.href='index'</script>";
            }elseif($this -> checkcode() == false){
                echo json_encode(1);
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                echo "<script>alert('验证码错误!');location.href='index'</script>";
                exit;
            }else{
                if($data){
                    session('userinfo',$data);
                    session('isLog',2);
                    isset($_SESSION['login_callback'])?$login_callback=$_SESSION['login_callback']:$login_callback='index/index';
                    //$this -> GetCsrf($login_callback);
                    unset($_SESSION['login_callback']);
                    $this -> redirect('/'.$login_callback);
                    // $_SESSION['userinfo'] = $data;
                    // $_SESSION['isLog'] = 2;
                    // echo 1;
                    // $this -> redirect("index/index"); 
                }else{
                    echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                    echo "<script>alert('登录名或密码错误,请重新登录!');location.href='index'</script>";
                }    
            }
        }
	}

	//个人中心
	public function personal(){
         if(!isset($_SESSION['userinfo'])){
            session("login_callback",$_SERVER['PATH_INFO']."?gid=".C("GAME_ID"));
            echo "<script>alert('请先登录!');window.location.href='".U("login/index")."';</script>";die;
        }

        $pay = M('pay');
        $count = $pay -> count();
        $Page = new \Think\Page($count,5);
        $Page->parameter = $row;
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
        $map['u_id'] = $_SESSION['userinfo']['id'];
        $data = $pay -> field('payment,createtime') -> where($map) -> order('createtime DESC') -> limit($Page->firstRow.','.$Page->listRows) -> select();
        $this -> assign('page',$Page -> show());
        $this -> assign('rc',$this -> getNowRc());
        $this -> assign('record',$data);
		$this -> display();
	}

    // 获取现有RC数量
    public function getNowRc(){
        $user = M('user');
        $map['id'] = $_SESSION['userinfo']['id'];
        $rc  = $user -> where($map) -> getfield('rc');
        return $rc;
    }

    // 获取充值记录
    public function getRecord(){
        $pay = M('pay');
        $map['uid'] = $_SESSION['userinfo']['id'];
        $data = $pay -> field('payment,createtime') -> where($map) -> select();
        return $data;
    }

    //根据时间检索RC购买履历
    public function buySearch(){
        if ($_POST['submit']) {
            $_POST['birth_mon'] < 10 ? $_POST['birth_mon'] = '0'.$_POST['birth_mon'] : $_POST['birth_mon'];
            if($_POST['birth_year'] == 0){
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                echo "<script>alert('年份必选!');location.href='personal'</script>";
                exit;
            }elseif($_POST['birth_mon'] == 0){
                $time = $_POST['birth_year'];
            }else{
                $time = $_POST['birth_year'].'-'.$_POST['birth_mon'];
            }
            $pay = M('pay');
            $map['uid'] = $_SESSION['userinfo']['id'];
            $map['createtime'] = array('like',"%".$time."%");
            $data = $pay -> field('payment,createtime') -> where($map) -> order('createtime DESC') -> select();
            var_dump($data);
            // return $data;
            // $this -> assign('searchbuy',$data);
            // $this -> display();
        }       
    }

    //退会
    public function quit(){
        if ($_POST['submit']) {
            $user = M('user');
            if ($_POST['password'] != '') {
                $pass = md5($_POST['password']);
                $map['id'] = $_SESSION['userinfo']['id'];
                $udata = $user -> field('password') -> where($map) -> find();
                if ($pass == $udata['password']) {
                    $quit = M('quit');
                    $data = $_POST;
                    $data['uid'] = $_SESSION['userinfo']['id'];
                    $data['quittime'] = date('Y-m-d H:i:s',time());
                    if ($quit -> create($data)) {
                        if ($quit -> add()) {
                            $d['isout'] = 1;
                            $user -> where($map) -> save($d);
                            echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                            echo "<script>alert('退会成功!');location.href='../Index/index'</script>";
                            unset($_SESSION);
                            session_destroy();
                            // $this -> success('退会成功!');
                        }
                    }
                }else{
                    echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                    echo "<script>alert('密码错误!');location.href='personal'</script>";
                    // $this -> error('密码错误!');
                }
            }else{
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                echo "<script>alert('密码不能为空!');location.href='personal'</script>";
                // $this -> error('密码不能为空!');
            }
            
            
        }
    }

    public function modpass(){
        if($_POST['submit']){
            $oldpassword = md5($_POST['oldpassword']);
            if ($oldpassword == $_SESSION['userinfo']['password']) {
                if ($_POST['password'] == $_POST['repwd']) {
                    $_POST['password'] = md5($_POST['password']);
                    $user = M('user');
                    $map['id'] = $_SESSION['userinfo']['id'];
                    $data['password'] = $_POST['password'];
                    $datanum = $user -> where($map) -> save($data);
                    if ($datanum >= 1) {
                        unset($_SESSION);
                        session_destroy();
                        echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                        echo "<script>alert('密码修改完成!请重新登录!');location.href='index'</script>";
                    }else{
                        echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                        echo "<script>alert('修改失败!');location.href='personal#pass'</script>";
                    }
                }else{
                    echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                    echo "<script>alert('两次密码输入不一致,请重新输入!');location.href='personal#pass'</script>";
                }      
            }else{
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                echo "<script>alert('原密码不正确!');location.href='personal#pass'</script>";
            }        

        }
    }

    public function code(){
        ob_clean(); 
        $config =   array(
            'expire'    =>  1800,            // 验证码过期时间（s）
            'useZh'     =>  false,           // 使用中文验证码 
            'useImgBg'  =>  false,           // 使用背景图片 
            'fontSize'  =>  18,              // 验证码字体大小(px)
            'useCurve'  =>  true,            // 是否画混淆曲线
            'useNoise'  =>  false,           // 是否添加杂点  
            'imageH'    =>  32,              // 验证码图片高度
            'imageW'    =>  121,             // 验证码图片宽度
            'length'    =>  4,               // 验证码位数
            'fontttf'   =>  '7.ttf',              // 验证码字体，不设置随机获取
            'bg'        =>  array(243, 251, 254),  // 背景颜色
            'reset'     =>  true,           // 验证成功后是否重置
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry();         
    }

    private function checkcode(){
        $Verify = new \Think\Verify();
        $code = $_POST['code'];
        return $Verify -> check($code);
    }

    //JS验证码验证
    public function jscode(){
        if ($this -> checkcode() == false) {
            echo 1;
            exit;
        }
    }

    //忘记密码
    public function forgetPass(){
        if(IS_POST){
            $user = M('user') ;
            $loginname = I('loginname') ;
            $to = I('email') ;
            $datanum = $user->where(array('loginname'=>$loginname))->find();
            $time = time();
            $email = base64_encode("email=$to&time=$time");
            $title = '会員登録用認証メール送付のお知らせ';
            $url = "http://localhost/gamenoll.com/index.php/login/passvalidate.html?".$email;
            $content = "这是一封GAMENOLL密码找回确认邮件,请点击以下按钮完成密码找回!如不是本人操作请忽略!<br> 
                    <a href=$url><button style='margin:20px 0 20px 300px;background:#ffbb27;border:none;border-radius:7px;padding:6px 8px;color:#fff;font-size:15px;'>验证邮箱</button></a><br>或复制以下链接完成注册$url";
            if ($datanum){
                if ($to !== $datanum['email']) {
                    echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                    echo "<script>alert('邮箱填写不正确,请重新填写!:)');location.href='forgetpass'</script>";
                    // $this->error('邮箱填写不正确,请重新填写'); 
                    exit();
                }if(!$to) {
                    echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                    echo "<script>alert('邮箱不能为空!');location.href='forgetpass'</script>";
                }else{
                    if(SendMail($to,$title,$content) == true){
                        echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                        echo "<script>alert('邮件发送成功,请查收!');location.href='index'</script>";
                        // $this -> redirect("Login/index");
                    }else{
                        echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                        echo "<script>alert('邮件发送失败,请重试!');location.href='forgetpass'</script>";
                    }
                }
            }else{
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                echo "<script>alert('用户不存在，请注册!:(');location.href='../Reg/index'</script>";
                // $this->error('用户不存在，请注册',U('Reg/index'));
            }
        }
        $this->display();
    }

    //邮件验证信息
    public function passValidate(){
        $key = explode('?', $_SERVER['REQUEST_URI']);
        $key = explode('&', base64_decode($key[1]));
        $email = explode('=', $key[0]);
        $time = explode('=', $key[1]);
        $exptime = strtotime(date('Y-m-d',$time[1]+24*3600));//过期时间
        $nowtime = strtotime(date('Y-m-d',time()));//现在的时间
        if ($nowtime > $exptime) {
            echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
            echo "<script>alert('邮件已过期请重新申请!');location.href='forgetpass'</script>";
            unset($nowtime);
            exit; 
        }else{
            $_SESSION['email'] = $email;
            $this -> redirect("Login/newpass");
        }
    }

    //设置新密码
    public function newPassword(){
        if ($_POST['submit']) {
            $user = M('user') ;
            // var_dump(I());
            // var_dump($_SESSION);
            if (I('password') == '' || I('repwd') == '') {
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                echo "<script>alert('密码或确认密码不能为空!');location.href='newpass'</script>";
            }elseif(I('password') != I('repwd')){
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                echo "<script>alert('确认密码和密码不一致!');location.href='newpass'</script>";
            }elseif(strlen(I('password')) < 8 || strlen(I('password')) > 16){
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                echo "<script>alert('密码必须在8-16位之间!');location.href='newpass'</script>";
            }
            if(I('password') == I('repwd')) {
                $data['password'] = md5(I('password'));
                $email = $_SESSION['email'][1];
                $data = $user->where(array('email'=>$email))->save($data);
                if($data > 0){
                    echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                    echo "<script>alert('新密码设置成功!');location.href='index'</script>";
                }
            } 
        }
    }


    public function googleInfo(){
        // Vendor('GoogleApi.src.Google.autoload');
        // $google = new Google_Model(); //实例化
        // var_dump($google);
        // $state = sha1(openssl_random_pseudo_bytes(1024));
        // $app['session']->set('state', $state);
        // return $app['twig']->render('index.html', array(
        //   'CLIENT_ID' => CLIENT_ID,
        //   'STATE' => $state,
        //   'APPLICATION_NAME' => APPLICATION_NAME
        // ));


        // $config = array(
        //     // https://developers.google.com/console
        //   'client_id' => '',
        //   'client_secret' => '',
        //   'redirect_uri' => null,
        //   'state' => null,

        //   // Simple API access key, also from the API console. Ensure you get
        //   // a Server key, and not a Browser key.
        //   'developer_key' => '',

        //   // For use with Google Cloud Platform
        //   // fetch the ApplicationDefaultCredentials, if applicable
        //   // @see https://developers.google.com/identity/protocols/application-default-credentials
        //   'use_application_default_credentials' => false,
        //   'signing_key' => null,
        //   'signing_algorithm' => null,
        //   'subject' => null,

        //   // Other OAuth2 parameters.
        //   'hd' => '',
        //   'prompt' => '',
        //   'openid.realm' => '',
        //   'include_granted_scopes' => null,
        //   'login_hint' => '',
        //   'request_visible_actions' => '',
        //   'access_type' => 'online',
        //   'approval_prompt' => 'auto',
        // )
        // include your composer dependencies
        require_once './ThinkPHP/Library/vendor/google-api-php-client/src/Google/autoload.php';

        $client = new Google_Client();
        $client->setApplicationName("Client_Library_Examples");
        $client->setDeveloperKey("YOUR_APP_KEY");

        $service = new Google_Service_Books($client);
        $optParams = array('filter' => 'free-ebooks');
        $results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

        foreach ($results as $item) {
          echo $item['volumeInfo']['title'], "<br /> \n";
        }
        // Vendor('GoogleApi.src.Google.autoload');
        // $google = new Google_Client(); //实例化
        var_dump($results);
    }

}