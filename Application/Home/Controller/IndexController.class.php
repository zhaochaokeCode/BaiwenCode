<?php

namespace Home\Controller;
use Think\Controller;
session_start();
class IndexController extends Controller {

    //展示页显示
    public function index(){
        $this -> display();
    }

    //显示官网首页
    public function home(){
        //查询首页推荐衍生品
        $commodity = A("Commodity") ->search_where("is_top = 1",5);
        $this -> assign("commodity",$commodity);
        //查询首页视频推荐位
        $view = M("generalize_view") -> find();
        //壁纸
        $this -> assign("pic1",$this -> getpic1());
        //截图
        $this -> assign("pic2",$this -> getpic2());
        //高清
        $this -> assign("pic3",$this -> getpic3());
        //同人
        $this -> assign("pic4",$this -> getpic4());

        //社区图片热点
        $hot_p = A("Hotspot") -> hot_p(6);

        //社区文字热点
        $hot_t = A("Hotspot") -> hot_t(4);

        //置顶新闻
        $news = A("News") -> top(3);

        //轮播图
        $pic = M("playpic") ->where("state = 1") -> order("id DESC") -> limit(4) -> select();
        $this -> assign("pic",$pic);
        $this -> assign("hot_p",$hot_p);
        $this -> assign("hot_t",$hot_t);
        $this -> assign("news",$news);
        $this -> assign("view",$view);
        $this -> display();
    }

    //查询壁纸
    public function getpic1(){
        $pic = M("view");
        return $pic -> where("type = -1") -> order("update_time DESC") -> limit(8) -> select();
    }
    //查询截图
    public function getpic2(){
        $pic = M("view");
        return $pic -> where("type = -2") -> order("update_time DESC") -> limit(8) -> select();
    }
    //查询高清
    public function getpic3(){
        $pic = M("view");
        return $pic -> where("type = -3") -> order("update_time DESC") -> limit(8) -> select();
    }
    //查询同人
    public function getpic4(){
        $pic = M("view");
        return $pic -> where("type = -4") -> order("update_time DESC") -> limit(8) -> select();
    }


    public function lastinfo(){
        if(isset($_SESSION['userinfo'])){
            $last_login = A("Games")->last_login();
            if($last_login['state'] == 1){
                $this -> assign("last_login",$last_login['data']);
            }else{
                return false;
            }
        }
    }

    public function getnews0(){
    	$news = M('news');
    	$map['type'] = '通知';
        $data = $news -> where($map) -> order('createtime DESC') -> limit(3) -> select();
        return $data;
    }

   public function getnews1(){
    	$news = M('news');
    	$map['type'] = '活动';
        $data = $news -> where($map) -> order('createtime DESC') -> limit(3) -> select();
        return $data;    	
    }

    public function getPlaypic(){
        $playpic = M('playpic');
        $map['type'] = 0;
        $data = $playpic -> where($map) -> select();
        return $data;
    }

    public function getSmallPlaypic(){
        $playpic = M('playpic');
        $map['type'] = 1;
        $data = $playpic -> where($map) -> select();
        return $data;
    }    
    public function getSidePlaypic(){
        $playpic = M('playpic');
        $map['type'] = 2;
        $data = $playpic -> where($map) -> select();
        return $data;
    }

    public function getWebsite(){
        $website = M('website');
        $data = $website -> select();
        return $data;
    }

    public function dologin(){
        if($_POST['sub']){
            if(($_POST['loginname']||$_POST['password'])==''){
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                echo "<script>alert('用户名密码不能为空!');location.href='index'</script>";
            }
            $_POST['password'] = md5($_POST['password']);
            $user = M("user");
            $data = $user -> where($_POST) -> find();
            if ($data['isout'] == 1) {
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                echo "<script>alert('您已退会,无法登陆,请联系客服!');location.href='index'</script>";
            }else{
                if($data){
                    $_SESSION['userinfo'] = $data;
                    $_SESSION['isLog'] = 2;
                    echo 1;
                    $this -> redirect("Index/index"); 
                }else{
                    echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
                    echo "<script>alert('登录名或密码错误,请重新登录!');location.href='index'</script>";
                }
            }
        }
    }

    //首页轮播图
    public function Recommend($g_id){
        $playpic = M('playpic');
        return $playpic -> where("g_id = ".$g_id) -> select();
    }




    //退出
    public function logout(){
        //获取登录用户的id
        $id = I('get.id');
        //删除cookie
        setcookie("$id",'',time()-1);//删除了账号
        //删除session
        //删除session值
        unset($_SESSION['userinfo']['id']);
        unset($_SESSION['userinfo']['username']);
        //删除掉session文件
        session_destroy();
        //删除掉客户端session id
        setcookie(session_name(),'',time()-1,'/');
        if(!$id){
            echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
            echo "<script>alert('您已退出!');location.href='index'</script>";
        }
    }

    // //登录地址
    // public function thirdLogin($type = null){
    //     empty($type) && $this->error('参数错误');
    //     if($type=='Twitter'){
    //         include("./twitter_login/login.php"); 
    //      }else if($type=='yahoo'){
    //          redirect("https://api.login.yahoo.com/oauth2/request_auth?client_id=dj0yJmk9OVhCNVp1b2Jhd1FDJmQ9WVdrOVRGQlZNR0ZKTlRZbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD05Mw--&redirect_uri=http://www.15combo.com/index.php/Index/callback/type/Yahoo&response_type=code&language=en-us&scope=openid sdpp-w");
    //      }else{
    //        $sns = \Org\ThinkSDK\ThinkOauth::getInstance($type);
    //         //跳转到授权页面
    //        redirect($sns->getRequestCodeURL());  
    //     }
             
        
    // }

    // //授权回调地址
    // public function callback($type = null, $code = null){
    //     header("Content-type: text/html; charset=utf-8");
    //     if($type=='twitter'){
    //         include('./twitter_login/oauth.php');
    //     }else{
    //         if(isset($_GET['code']))$code=$_GET['code'];
    //         (empty($type) || empty($code)) && $this->error('参数错误');
    //             //加载ThinkOauth类并实例化一个对象
    //             // Vendor("ThinkSDK.ThinkOauth");
    //             // $sns  = ThinkOauth::getInstance($type);
    //             $sns = \Org\ThinkSDK\ThinkOauth::getInstance($type);
    //             //请妥善保管这里获取到的Token信息，方便以后API调用
    //             //调用方法，实例化SDK对象的时候直接作为构造函数的第二个参数传入
    //             //如： $qq = ThinkOauth::getInstance('qq', $token);
    //             $token = $sns->getAccessToken($code,$extend);
    //             //获取当前登录用户信息
    //         if(is_array($token)){
    //              //echo("<h1>恭喜！使用 {$type} 用户登录成功</h1><br>");
    //             // echo("授权信息为：<br>");
    //             // dump($token);die;

    //              // echo("当前登录用户信息为：<br>");
    //              // $user_info = A('TypeEvent')->$type($token);

    //              $userInfo = $this->$type($token);
    //              //$_SESSION['userinfo'] = $userInfo;
    //              //dump($userInfo);die;
    //              switch ($type) {
    //                  case 'google':
    //                      $where['user_type'] = 2;
    //                      break;
    //                  case 'Yahoo':
    //                      $where['user_type'] = 3;
    //                      break;
    //                  case 'twitter':
    //                      $where['user_type'] = 5;
    //                      break;
    //                  case 'facebook':
    //                      $where['user_type'] = 4;
    //                      break;
    //              }
    //              $where['user_mark'] = $token['openid'];
    //              if($type=='Yahoo'){
    //                 $where['user_mark'] = $token['xoauth_yahoo_guid'];
    //              }
    //              $this->is_user($where);
    //             }else{
    //                 echo 123;die;
    //             }
    //         }
    //     }


    //登录地址
    public function login($type = null){
        empty($type) && $this->error('参数错误');

        //加载ThinkOauth类并实例化一个对象
        import("Org.ThinkSDK.ThinkOauth");
        $sns  = \Org\ThinkSDK\ThinkOauth::getInstance($type);

        //跳转到授权页面
        redirect($sns->getRequestCodeURL());
    }

    //授权回调地址
    public function callback($type = null, $code = null){
        (empty($type) || empty($code)) && $this->error('参数错误');
        
        //加载ThinkOauth类并实例化一个对象
        import("Org.ThinkSDK.ThinkOauth");
        $sns  = \Org\ThinkSDK\ThinkOauth  



        ::getInstance($type);

        //腾讯微博需传递的额外参数
        $extend = null;
        if($type == 'tencent'){
            $extend = array('openid' => $this->_get('openid'), 'openkey' => $this->_get('openkey'));
        }

        //请妥善保管这里获取到的Token信息，方便以后API调用
        //调用方法，实例化SDK对象的时候直接作为构造函数的第二个参数传入
        //如： $qq = ThinkOauth::getInstance('qq', $token);
        $token = $sns->getAccessToken($code , $extend);

        //获取当前登录用户信息
        if(is_array($token)){
            $user_info = A('Type', 'Event')->$type($token);

            echo("<h1>恭喜！使用 {$type} 用户登录成功</h1><br>");
            echo("授权信息为：<br>");
            dump($token);
            echo("当前登录用户信息为：<br>");
            dump($user_info);
        }
    }


        //检测第三方用户是否已注册本网站用户
        public function is_user($where){
            $user = M("user");
            $is_user = $user -> where($where) -> find();
             if(!$is_user){
                $this -> assign($where);
                $this -> display("Perfect_information");
             }else{
                $_SESSION['userinfo'] = $is_user;
                $_SESSION['userinfo']['loginname'] = $is_user['nicename'];
                $_SESSION['isLog'] = 2;
                redirect('/index.php/Index/index');
             }
        }




        public function google($token){
            $google = \Org\ThinkSDK\ThinkOauth::getInstance('google', $token);
            $data   = $google->call('userinfo');
            //dump($data);die;
            if(!empty($data['id'])){
                $userInfo['type'] = 'GOOGLE';
                $userInfo['name'] = $data['name'];
                $userInfo['nick'] = $data['name'];
                $userInfo['head'] = $data['picture'];
                $userInfo['id']   = $token['openid'];
                $userInfo['email'] = $data['email'];
                return $userInfo;
            } else {
                throw_exception("获取Google用户信息失败：{$data}");
            }
        }

        public function Facebook($token){
            $facebook = \Org\ThinkSDK\ThinkOauth::getInstance('facebook', $token);
            $data   = $facebook->call('me');
            //dump($data);die;
            if(!empty($data['id'])){
                $userInfo['type'] = 'Facebook';
                $userInfo['name'] = $data['name'];
                $userInfo['nick'] = $data['name'];
                $userInfo['head'] = $data['picture'];
                $userInfo['email'] = $data['email'];
                return $userInfo;
            } else {
                throw_exception("获取Facebook用户信息失败：{$data}");
            }
    }



        public function Yahoo($token){
        $yahoo = iconv('GB2312//IGNORE','UTF-8',$token['id_token']);
        $data_all = explode('.',$yahoo);
        $data_user = json_decode(base64_decode(str_replace(' ','+',$data_all[1]),true));
        if($data_user){
            $userInfo['type'] = 'Yahoo';
            $userInfo['name'] = $data_user->name;
            $userInfo['nick'] = $data_user->name;
            $userInfo['email'] = $data_user->email;
            return $userInfo;
        }else{
             echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
             echo "<script>alert('出错了!');location.href='/index.php'</script>";
        }
       
    }

}
   
