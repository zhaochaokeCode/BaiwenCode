<?php
namespace Home\Controller;
use Think\Controller;
class GamesController extends Controller {

	public function index(){
       if(isset($_SESSION['userinfo'])){
       		$g_id = C('GAME_ID');
       		$this -> redirect('games/choice_server/g_id/'.$g_id);
        }else{
        	session("login_callback",$_SERVER['PATH_INFO']."?gid=".I('gid'));
		echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
       		echo "<script charset='utf8'>alert('请先登录!');window.location.href='".U("login/index")."';</script>";die;
        }
    }

     //选择服务器
    public function choice_server(){
        if(!isset($_SESSION['userinfo'])){
	    echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
            echo "<script>alert('请先登录!');window.location.href='index';</script>";die;
        }

        $last_login = $this -> last_login();
        $server = $this -> server(I("g_id"));
        
        $this -> assign("last_login",$last_login);
        $this -> assign('servers',$server);
        $this -> assign('g_id',I('g_id'));
        $this -> display();
    }

    //最近登录的服务
    public function last_login(){
      isset($_REQUEST['g_id'])?$g_id = $_REQUEST['g_id']:$g_id = C('GAME_ID');
      $where = array(
        "g_id" => $g_id,
        "u_id" => session('userinfo.id'),
        );
        
        $gsur = M('gsur');
        $last_login = $gsur -> where($where) -> order("last_login_time DESC") -> limit(2) -> select();

        if($last_login){
                $servers = M('server');
                foreach ($last_login as $key =>& $value){
                    $value['server_info'] = $servers -> where("s_id = ".$value['s_id']) -> find();
                }
                $info['data'] = $last_login;
                $info['state'] = 1;
        }else{
            $info['state'] = 0;
        }

        return $info;
    }

    //查询指定游戏的所有服务器
    public function server($g_id){
        //$g_id = I('g_id');
        if(!$g_id){
            $this -> error("参数错误");
        }
        $servers = M('server');
        $data = $servers -> where("g_id = ".$g_id) -> select();
        return $data;
    }

    //登录游戏	
    public function login_game(){

        $_REQUEST['u_id'] = $_SESSION['userinfo']['id'];
        $_REQUEST['g_id'] = C("GAME_ID");
        $where = $_REQUEST;
        $data = $_REQUEST;
        $data['last_login_time'] = date("Y-m-d H:i:s",time());

        $gsur = M('gsur');
        $is_first_server = $gsur -> where($where) -> find();
        //print_r($is_first_server);die;
        if($is_first_server){
            $data['r_id'] = $is_first_server['r_id'];
            $re = $gsur -> where($where) -> save($data);
        }else{
            $gsur -> create($data);
            $re = $gsur -> add();
        }

        // if($re){
        //     $this -> redirect("Role/is_establish/g_id/".$data['g_id']."/s_id/".$data['s_id']);
        // }
        

        
        
        $parameter = "openid=".$data['u_id']."&serverid=".$data['s_id']."&pf=3366&timestamp=".time();
        echo $parameter."<br>";
        $sig = $this -> sigurl($parameter);
        echo $sig."<br>";


        $data['openid'] = $data['u_id'];
        $data['serverid'] = $data['s_id'];
        $data['pf'] = 3366;
        $data['timestamp'] = time();
        $data['sig'] = $sig;

        print_r($data);

        // $url = "http://121.156.116.213:80/common/login/user/login.html/";


        // $errmsg =  $this -> Curl($url,$data);

        // $login_re = json_decode($errmsg);
 
        // if($login_re['code']==0){
	    // 	if($login_re['sig']==$sig){
		// 		header("Location:".$login_re['url']);die;
		// 	}else{
		// 		echo "<script>alert('系统错误!');window.location.href='".U("index/index")."';</script>";
		// 	}
        // }else{
        // 		echo "<script>alert(".$login_re['errmsg'].");window.location.href='".U("index/index")."';</script>";
        // }
    }
  

}
