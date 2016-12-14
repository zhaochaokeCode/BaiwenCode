<?php
namespace Admin\Controller;
use Think\Controller;

class PublicController extends Controller{
    
    public function _initialize(){
        // if($_SESSION['master']['id'] == 7){
        //     return true;
        // }  
        if($_SESSION['master']['username'] == C('RBAC_SUPERADMIN')){
            return true;
        }   
        $userId = $_SESSION['master']['id'];
        if(!$userId){
            // $this -> error("请先登录",U("Login/login"));
            $this -> redirect("Login/login");
        }
        $rule = CONTROLLER_NAME.'/'.ACTION_NAME;
        $auth = new \Think\Auth();
        if(!$auth->check($rule,$userId)){
            $this -> error("你没有权限");
            $this -> redirect('Index/index');
        }        
    }


    public function upload($filename,$size = 3145728,$type = array('jpg', 'gif', 'png', 'jpeg'),$rootPath = './Uploads/',$savePath = ''){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     $size;// 设置附件上传大小
        $upload->exts      =     $type;// 设置附件上传类型
        $upload->rootPath  =     $rootPath;// 设置附件上传根目录
        $upload->savePath  =     $savePath; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->uploadOne($_FILES[$filename]);
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError()); exit;
        }else{// 上传成功
            return $info['savepath'].$info['savename'];
        }
    }

    public function view(){
        $src = I("src");
        $this -> assign("src",$src);
        $this -> display();
    }
}
