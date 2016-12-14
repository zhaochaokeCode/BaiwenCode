<?php
namespace Home\Controller;
// use Think\Controller;
class HelpController extends PublicController {
    public function index(){
    	if ($_POST['submit']) {
    		$help = M('help');
    		$data = $_POST;
            $data['uname'] = $_SESSION['userinfo']['loginname'];
            $data['email'] = $_SESSION['userinfo']['email'];
            $data['sort'] = implode(",",$_POST['sort']);
            if($_FILES['accessory']['error'] == 0){
                $info = $this -> upfile();
                $data['accessory'] = $info['savepath'].$info['savename'];
            }
    		if ($help -> create($data)) {
    			if ($help -> add()) {
    				echo "<script>alert('问题已发送成功,请耐心等待!');</script>";
    			}
    		}
    	}
        $this -> assign('sideplaypic',R('Index/getSidePlaypic'));
        $this -> assign('rc',R('Login/getNowRc'));
        $this -> display();
    }

    public function upfile(){
        $config = array(
            'maxSize'    =>    3145728,
            'rootPath'   =>    'Public/',
            'savePath'   =>    'Uploads/files/',
            'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
            'autoSub'    =>    true,
            'subName'    =>    array('date','Ymd'),
        );
        $upload = new \Think\Upload($config);// 实例化上传类
        return $upload -> uploadOne($_FILES['accessory']);
    }

}