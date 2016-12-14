<?php
namespace Admin\Controller;
// use Think\Controller;

// class ManageController extends Controller{
class ManageController extends PublicController{
    public function index(){
		$config = M('admins');
		if($_GET['id']){
		  $map['id']=trim($_GET['id']);
		}
		if($_GET['username']){$map['username'] = array("LIKE","%{$_GET['username']}%");}	
		unset($map['p']);
		$count = $config ->where($map)-> count();
		$Page = new \Think\Page($count,8);
        $Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
		$info = $config->order("id DESC")->where($map) -> where("username != 'admin'")->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign("page",$Page -> show());
		$this->assign('info',$info);		
		$this->display();
	}

    public function add(){
       if($_POST['sub']){
            $user = M('admins');
            if($_POST['password'] == $_POST['repwd']){
                $_POST['password'] = md5($_POST['password']);
                $data = $_POST;
                if($_FILES['avatar']['error'] == 0){
                    $info = $this -> uppic();
                    $data['avatar'] = $info['savepath'].$info['savename'];
                }
                if($user -> create($data)){ 
                    if($user -> add()){ 
                        $this -> redirect("Manage/index");
                    }
                }
            }
        }
        $this -> display();
    }       
    	
	public function mod(){
		$admins = M('admins');
        if($_POST['sub']){
            if($_POST['password'] == $_POST['repwd']){
                $_POST['password'] = md5($_POST['password']);
                $data = $_POST;
                if($_FILES['avatar']['error'] == 0){
                    $info = $this -> uppic();
                    $data['avatar'] = $info['savepath'].$info['savename'];
                }
                if($admins -> create($data)){
                    if($admins-> save()){            
                        $this -> redirect("Manage/index");
                    }else{
                        $this -> error("修改失败!!!");
                    }
                }else{
                    $this -> error("修改失败!");
                }
            }else{
                $this -> error('两次密码不一致!请重新填写!');
            }
        }
        $data = $admins -> find(I("id"));
        $this -> assign("admins",$data);
        $this -> display();
        
	}
	
	public function del(){
        if($_POST['sub']){
            $ids = I('ids');
            $ids = implode(",",$ids);
        }else{
            $ids = I("id");
        }
        $user = M('admins');
        $map['id'] = array("in",$ids);
        $affectedNum = $user -> where($map)->delete();
        if($affectedNum){
            $this -> redirect("Manage/index");
        }else{
            $this -> error("删除失败！");
        }
    }
        
	public function addGroup(){
        if($_POST){
            $groupAccess = M("auth_group_access");
            if($groupAccess -> create()){
                if($groupAccess -> add()){
                    $this -> redirect("Manage/index");
                }else{
                    $this -> error("添加失败");
                    exit;
                }
            }
        }
        $group = M("auth_group");
        $userid = $_GET['id'];
        $groups = $group -> where(array("status" => 1))->select();
        $this -> assign("userid",$userid);
        $this -> assign("groups",$groups);
        $this -> display();
    }
		
    private function uppic(){
        $config = array('maxSize' => '1000000000',
                        'exts' => array('jepg','jpg','png','gif'),
                        'rootPath' => 'Public/',
                        'savePath' => 'Upload/Avatar/',
                        'replace'  =>  true, 
        );
        $upload = new \Think\Upload($config);
        return $upload -> uploadOne($_FILES['avatar']);
    }       
		
	
    

	
}
?>