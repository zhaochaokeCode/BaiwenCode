<?php
namespace Home\Controller;
use Think\Controller;
class QuestionController extends Controller {
    public function index(){ 
        if(!isset($_SESSION['userinfo'])){
            session("login_callback",$_SERVER['PATH_INFO']."?gid=".I('gid'));
	    echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
            echo "<script>alert('请先登录!');window.location.href='".U("login/index")."';</script>";die;
        }

        $g_id = C("GAME_ID");
        $servers = A("Games") -> server($g_id);
        A("Index")->lastinfo();
        $this -> assign("servers",$servers);
        $this -> assign("g_id",$g_id);
        $this -> display();
    }


    //问题反馈
    public function add(){
        //print_r($_POST);die;
        $rules = array(
              array("u_email","email","邮箱格式不正确"),
              array("u_email","require","邮箱不能为空"),
              array("q_type","require","请选择问题分类"),
              array("r_name","require","请输入角色名"),
              //array("r_name","/^[\u0800-\u4e00\w\.\s]{2-6}$/","请输入2-6位日文角色名称"),
              array("content","require","请输入内容"),
              array("content","1,500","内容不得多于500字",1,"length"),
            );

        $question = M("question"); // 实例化User对象
        if (!$question -> validate($rules) -> create()){
             // 如果创建失败 表示验证没有通过 输出错误提示信息
             $this -> error($question->getError());
            // exit($question->getError());die;
        }
    


        if($_FILES['q_img']['error'] != 4){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     512000;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =      './Public/'; // 设置附件上传根目录
            $upload->savePath  =      '/home/question/'; // 设置附件上传（子）目录
            // 上传文件 
            $info   =   $upload->upload();
            if(!$info) {// 上传错误提示错误信息
               $this -> error("文件上传失败");
            }else{// 上传成功 获取上传文件信息
                foreach($info as $file){
                    $img_src[] = $file['savepath'].$file['savename'];
                }
            }
        }

        $q_time = mktime(I("post.time"), 0, 0, I("post.month"), I("post.day"), I("post.year"));
        $data = array(
                "u_email" => I('post.u_email'),
                "q_type" => I('post.q_type'),
                "q_img" => implode(',',$img_src),
                "q_time" => $q_time,
                "u_id" => $_SESSION['userinfo']['id'],
                "s_id" => I('post.s_id'),
                "r_name" => I('post.r_name'),
                "u_browser" => I('post.u_browser'),
                "os" => I('post.os'),
                "create_time" => time(),
                "communication" => I('communication'),
                "content" => I('content'),
                "g_id" => C("GAME_ID"),
                );

            $question = M("question");
            $re = $question -> add($data);
            if($re){
                $this -> success("提交成功!");
            }else{
                $this -> error("提交失败!");
            }
    }

    //退出
    public function loginout(){
        session('userinfo',null);
        $this -> redirect("Index/index");
    }

   
        
}
