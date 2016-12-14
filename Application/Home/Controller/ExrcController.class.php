<?php
namespace Home\Controller;
use Think\Controller;
class ExrcController extends Controller {
    //充值首页
    public function index(){
        if(!isset($_SESSION['userinfo'])){
            session("login_callback",$_SERVER['PATH_INFO']);
            echo "<script>alert('请先登录!');window.location.href='exlogin/index';</script>";die;
        }
        $this -> display();
    }
    //充值平台币
    public function platform(){
        $this -> SetCsrf(rand(0,9999));
        $this -> display();
    }
    //充值修改
    public function rc_mod(){
        $this -> GetCsrf("platform");
        $u_id = session("userinfo.id");
        $user = M('user');
        $before =  $user -> where("id = ".$u_id) -> getField('rc');
        $after = $before+intval($_POST['rc']);
        $user -> startTrans();
        $re = $user -> where("id = ".$u_id) -> setInc("rc",$_POST['rc']);
        if($re){
            $pay = M("pay");
            $data = array(
                "createtime" => date("Y-m-d H:i:s",time()),
                "u_id" => $u_id,
                "payamount" => $_POST['rc'],
                "type" => 1,
                "before" => $before,
                "after" => $after,
                );
            $pay_re = $pay -> add($data);
            if($pay_re){
                $user -> commit();
                echo "您当前平台币余额为<font color='red' >".$after."</font>!";
                echo " <br><a href='index'>返回</a>";
                //$this -> success("充值成功!");
            }else{
                 $user -> rollback();
                 $this -> error("充值失败!");
            }

        }else{
            $user -> rollback();
            $this -> error("充值失败!");
        }
    }




    //消费页面
    public function consumption(){
        $games = M('games');
        $games_info = $games -> select();
        $this -> assign("games",$games_info);
        $this -> display();
    }

    //确定消费服务器
    public function consumption_server(){
        $g_id = I('g_id');
        $game = M('games');
        $proportion = $game -> where("g_id = ".$g_id) -> getField('proportion'); 
        $servers = M('server');
        $g_server = $servers -> where("g_id = ".$g_id) -> select();
        $this -> assign('server',$g_server);
        $this -> assign('proportion',$proportion);
        $this -> SetCsrf(rand(0,9999));
        $this -> display();
    }

    //判断用户当前服务器是否有角色
    public function is_role(){
        $where['s_id'] = I('s_id');
        $where['u_id'] = session('userinfo.id');
        $gsur = M('gsur');
        $re = $gsur -> where($where) -> find();
        if($re){
            echo 1;
        }else{
            echo 0;
        }
    }

    //执行消费修改平台币
    public function consumption_mod(){



        $server = M('server');
        $s_id = I('s_id');
        $s_info = $server -> where("s_id = ".$s_id) -> find();
        $s_name = $s_info['s_name'];


        $g_id = $s_info['g_id'];
        $games = M('games');
        $g_name = $games -> where("g_id = ".$g_id) -> getField("g_name");
        
        $this -> GetCsrf("consumption_server/g_id/".$g_id);

        $u_id = session('userinfo.id');

        $number = I('number');
        $price = $number/intval(I('proportion'));
        


        $parameter = "openid=".$u_id."&serverid=".$s_id."&gold=".$number."&bonus=".($number/10)."&price=".$price."&timestamp=".time();
        echo $parameter."<br>";
        $sig = $this -> sigurl($parameter);
        echo $sig."<br>";


        $pay = M('pay');
        $user = M('user');
        $user -> startTrans();

        $num = $user -> where("id = ".$u_id) -> getField('rc');
        $balance =  $num - $price;
        if($balance < 0){
            $user -> rollback();
            $this -> error("平台币余额不足!");
        }


            $data = array(
            "createtime" => date("Y-m-d H:i:s",time()),
            "u_id" => $u_id,
            "g_name" => $g_name,
            "s_name" => $s_name,
            "payamount" => $price,
            "type" => 0,
            "payment" => "平台币",
            "before" => $num,
            "after" => $balance,
            );

            $c_re = $pay -> data($data) -> add();

            if($c_re){      

                $u_re = $user -> where("id = ".$u_id) -> setDec('rc',$price);
                if($u_re){
                // $data['openid'] = $u_id;
                // $data['serverid'] = $s_id;
                // $data['gold'] = $number;
                // $data['bonus'] = $number/10;
                // $data['price'] = $price;
                // $data['timestamp'] = time();

                // $url = "http://121.156.116.213:80/common/recharge/user/recharge.html/?".$parameter."&sig=".$sig;

                // $errmsg =  $this -> Curl($url,$data);

                // $rc_re = json_decode($errmsg);
         
                // if($rc_re['code']==0){
                        
                            $user -> commit();
                            echo "您当前平台币余额为<font color='red' >".$balance."</font>!";
                            echo " <br><a href='consumption'>返回</a>";
                       
                // }else{
                //      $user -> rollback();
                //      echo "<script>alert(".$login_re['errmsg'].");window.location.href='".U("Exrc/consumption_server?g_id=".$g_id)."';</script>";
                // }

                }else{
                    $user -> rollback();
                    $this -> error("消费失败");
                }
            }else{
                $user -> rollback();
                $this -> error("消费失败");
            }




        







    }
}