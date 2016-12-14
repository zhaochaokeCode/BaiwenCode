<?php
namespace Admin\Controller;
// use Think\Controller;
class UserController extends PublicController {
    public function index($type = ''){
        $user = M('user');
        $count = $user -> where("user_type = 1") -> count();
        $Page = new \Think\Page($count,5);
        $Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
        $data = $user -> where("user_type = 1") -> order('id DESC') -> limit($Page->firstRow.','.$Page->listRows) -> select();
        $this -> assign('page',$Page -> show());
        $this -> assign('data',$data);
        $this -> display();
    }

    public function third_party(){
        $user = M('user');
        $count = $user ->where("user_type != 1") -> count();
        $Page = new \Think\Page($count,5);
        $Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
        $data = $user -> where("user_type != 1") -> order('id DESC') -> limit($Page->firstRow.','.$Page->listRows) -> select();
        $this -> assign('page',$Page -> show());
        $this -> assign('data',$data);
        $this -> display();
    }

    public function add(){
    	if ($_POST['submit']) {
    		$user = M('user');
            $rule = array(
                    array('loginname','','登录名已经存在！',1,'unique',3),
                    array('loginname','require','登录名必须填写!'),
                    array('loginname','4,12','登录名必须在4-12位之间!',1,'length',1),
                    array('repwd','password','确认密码不正确',1,'confirm'),
                    array('email','email','邮箱格式不正确!'),
            );
            $_POST['password'] = md5($_POST['password']);
            $_POST['repwd'] = md5($_POST['repwd']);
    		if ($user -> validate($rule) -> create()) {
    			if ($user -> add()) {
    				$this -> redirect("User/index");
    			}
    		}else{
                $this -> error($user -> getError());
            }
    	}
    	$this -> display();
    }

    //编辑用户
    public function mod(){
        $user = M('user');
        $data = $user -> find(I('id'));
        $str = $data['content'];
        if($_POST['submit']){
            $data = $_POST;
            if($user -> create($data)){
                if($user -> save()){
                    $this -> redirect('User/index');
                }else{
                    $this -> error(':( 哦孬!修改失败!');
                }
            }else{
                $this -> error('呀!修改失败了!');
            }
        }       
        $this -> assign('user',$data);
        $this -> display();
    }

	//删除用户
    public function del(){
        if($_POST['submit']){
            $ids = I('ids');
            $ids = implode(',',$ids);
        }else{
            $ids = I('id');
        }
        $user = M('user');
        $map['id'] = array('in',$ids);
        $affectedNum = $user -> where($map) -> delete();
        if($affectedNum){
            $this -> redirect('User/index');
        }else{
            $this -> error('呀!删除失败啦!');
        }
	}}