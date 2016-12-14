<?php
namespace Home\Controller;
use Think\Controller;

class RegController extends Controller {
    public function index(){
        $this -> display();
    }

    //邮件发送成功,邮件信息
    public function emailinfo(){
        if ($_SESSION['title']) {
            $email = $_SESSION['email'];
            $url = explode('@',$email);
            $mailurl = mail.'.'.$url[1];
            if ($_POST['submit']) {
                header("Location:http://$mailurl");
            }
            $title = $_SESSION['title'];
            $this -> assign('title',$title);
            $this -> display();
        }else{
            $this -> redirect("Reg/index");
            exit;
        }
        
    }

    //邮件发送处理
    public function doreg(){
        $to = $_POST['email'];
        if ($_POST['submit']) {
            $user = M('user');
            $map['email'] = $_POST['email'];
            $isemail = $user -> field('email') -> where($map) -> select();
            if($isemail[0]['email'] == $_POST['email'] && $isemail[0]['email'] != '' ) {
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                echo "<script>alert('邮箱已经存在!:(');location.href='index'</script>";
                exit;
            }
            $time = time();
            $email = base64_encode("email=$to&time=$time");
            $title = '会員登録用認証メール送付のお知らせ';
            $url = "http://localhost/gamenoll.com/index.php/Reg/validate.html?".$email;
            $content = "这是一封GAMENOLL注册邮箱确认邮件,请点击以下按钮完成注册!如不是本人操作请忽略!<br> 
                        <a href=$url><button style='margin:20px 0 20px 300px;background:#ffbb27;border:none;border-radius:7px;padding:6px 8px;color:#fff;font-size:15px;'>验证邮箱</button></a><br>或复制一下链接完成注册$url";
            if(!$to) {
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                echo "<script>alert('邮箱不能为空!');location.href='index'</script>";
            }else{
                if(SendMail($to,$title,$content) == true){
                    $_SESSION['email'] = $to;
                    $_SESSION['title'] = $title;
                    $this -> redirect("Reg/emailinfo");
                }else{
                    echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                    echo "<script>alert('邮件发送失败,请重试!');location.href='index'</script>";
                }
            }
        }
        
    }

    //邮件验证信息
    public function validate(){
        $key = explode('?', $_SERVER['REQUEST_URI']);
        $key = explode('&', base64_decode($key[1]));
        $email = explode('=', $key[0]);
        $time = explode('=', $key[1]);
        $exptime = strtotime(date('Y-m-d',$time[1]+24*3600));//过期时间
        $nowtime = strtotime(date('Y-m-d',time()));//现在的时间
        if ($nowtime > $exptime) {
            echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
            echo "<script>alert('邮件已过期请重新注册!');location.href='index'</script>";
            unset($nowtime);
            exit; 
        }else{
            $user = M('user');
            $map['email'] = $email[1];
            $data = $user -> where($map) -> getfield('email');
            if ($email[1] == $data) {
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                echo "<script>alert('您已完成注册操作!');location.href='index'</script>";
            }else{
                $_SESSION['email'] = $email;
                $this -> redirect("Reg/reginfo");
                exit;   
            }
        }
    }

    //用户注册信息
    public function reginfo(){
        if (!$_SESSION['email']) {
            $this -> redirect("Reg/index");
        }

        if ($_POST['submit']) {
            $user = M('user');
            $post = preg_replace("/\s/","",$_POST);//去除字符中的空格
            if (!preg_match("/^[a-z]{1}([a-z0-9]|[._]){4,12}$/",$_POST['loginname'])) {
                // $this -> error('登录名只能是字母,数字,下划线,并且以字母开头!');
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                echo "<script>alert('登录名不合法!');location.href=''</script>";
                exit;
            }
            $rule = array(
                    array('email','','邮箱已经存在！',1,'unique',3),
                    array('email','require','邮箱必须填写!'),
                    array('loginname','','登录名已经存在！',1,'unique',3),
                    array('loginname','require','登录名必须填写!'),
                    array('loginname','4,12','登录名必须在4-12位之间!',1,'length',1),
                    array('password','8,16','密码必须在8-16位之间!',1,'length',1),
                    array('repwd','password','确认密码不正确',1,'confirm'),
                    array('nicename','','昵称已经存在！',1,'unique',3),
                    array('nicename','require','昵称必须填写!'),
                    array('nicename','2,10','昵称必须在4-20位之间!',1,'length',1),
                    // array('code','checkcode','验证码不正确',1,'confirm'),
            );
            
            if ($user -> validate($rule) -> create()) {
                $_SESSION['reg'] = $_POST;
                $this -> redirect("Reg/infoverify");
                exit;
            }else{
                $this -> error($user -> getError());
            }  
        }

        $email = $_SESSION['email'];
        $this -> assign('email',$email[1]); 
        $this -> display();
    }

    public function checkLoginname(){
        $user=I('post.loginname');
        $list=M('user')->where(array('loginname'=>$user))->select();
        $list=$list[0];
        if(!empty($list)){
            echo true;
        }
    }

    //用户注册信息确认
    public function infoverify(){
        if (!$_SESSION['reg']) {
            $this -> redirect("Reg/index");
        }
        $data = $_SESSION['reg'];
        if (IS_POST) {
            $data['password'] = md5($_SESSION['reg']['password']);
            $data['regtime'] = date('Y-m-d H:i:s',time());
            $user = M('user');
            if ($user -> add($data)) {
               echo 1;
               $this -> redirect("Reg/regfinish");
            }else{
               echo 2;
            }
        }
        $this -> assign('reg',$data);
        $this -> display();
    }

    //完成注册
    public function regfinish(){
        if (!$_SESSION['reg']) {
            $this -> redirect("Reg/index");
        }
        $data = $_SESSION['reg'];
        if ($_POST['submit']) {
            unset($_SESSION);
            session_destroy();
            $this -> redirect('Index/index');
        }
        $this -> assign('reg',$data);
        $this -> display();
    }

    //验证码
    public function code(){
        ob_clean();  
        $config =   array(
            'expire'    =>  1800,            // 验证码过期时间（s）
            'useZh'     =>  false,           // 使用中文验证码 
            'useImgBg'  =>  false,           // 使用背景图片 
            'fontSize'  =>  19,              // 验证码字体大小(px)
            'useCurve'  =>  true,            // 是否画混淆曲线
            'useNoise'  =>  false,           // 是否添加杂点  
            'imageH'    =>  32,              // 验证码图片高度
            'imageW'    =>  163,             // 验证码图片宽度
            'length'    =>  4,               // 验证码位数
            'fontttf'   =>  '7.ttf',              // 验证码字体，不设置随机获取
            'bg'        =>  array(243, 251, 254),  // 背景颜色
            'reset'     =>  true,           // 验证成功后是否重置
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry(); 
        
    }

    //验证码确认
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

    //JS验证协议
    // public function jsagree(){
    //     if ($_POST['agree1'] == 1) {
    //         echo 1;
    //         exit;
    //     }
    // }
    
    //第三方用户完善信息
    public function Perfect_information(){
        $nicename = isset($_POST['nicename'])?$_POST['nicename']:'';
        $email = isset($_POST['email'])?$_POST['email']:'';
        $user_mark = isset($_POST['user_mark'])?$_POST['user_mark']:'';
        $type = isset($_POST['user_type'])?$_POST['user_type']:'';


        if($nicename=='') $this->error("昵称不能为空");
        if($email=='') $this->error("邮箱不能为空");
        if(($type||$user_mark)=='') $this->error("参数错误");

        $pattern_email = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
        if ( preg_match( $pattern_email, $email ) )
        {
            $user = M('user');
            $user -> nicename = mysql_escape_string($nicename);
            $user -> email = mysql_escape_string($email);
            $user -> user_mark = mysql_escape_string($user_mark);
            $user -> user_type = mysql_escape_string($type);
            $user -> birth = time();
            $user -> birth_day = date("d",time());
            $user -> birth_mon = date("m",time());
            $user -> birth_year = date("Y",time());
            $re = $user -> add();
            if($re){
                $where = array(
                    'user_type' => $type,
                    'user_mark' => $user_mark,
                    );
                A('Index')->is_user($where);
            }else{
                $this->error("添加失败");
            }
        }
        else
        {
            $this->error("您输入的电子邮箱地址不合法");
        }

    }
}