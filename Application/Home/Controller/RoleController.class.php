<?php
namespace Home\Controller;
use Think\Controller;
class RoleController extends Controller {
    //判断当前用户在当前服务器是否有角色
    public function is_establish($g_id,$s_id){
        $gsur = M('gsur');
        $where = array(
            "g_id" => $g_id,
            "s_id" => $s_id,
            );
        $re = $gsur -> where($where) -> find();
        if($re['r_id']){
            $role = M('role');
            $role_info['data'] = $role -> where("r_id = ".$re['r_id']) -> find();
            $role_info['state'] = 1;
        }else{
            $role_info['state'] = 0;
        }

        //print_r($role_info);die;
        $this -> assign("g_id",$g_id);
        $this -> assign("s_id",$s_id);
        $this -> assign("role",$role_info);
        $this -> display("role");   
    }

    //创建角色
    public function establish_role(){
         $role = M('role');
         if($role -> create(["r_name"=>I("r_name")])){
            if($r_id = $role -> add()){
                $gsur = M('gsur');
                unset($_POST['r_name']);
                $_POST['u_id'] = session("userinfo.id");
                $data['r_id'] = $r_id;
                $re = $gsur -> where($_POST) -> data($data) -> save();
                if($re){
                    $this -> redirect("role/is_establish/g_id/".I('g_id')."/s_id/".I('s_id'));
                }
            }
         }
    }
}