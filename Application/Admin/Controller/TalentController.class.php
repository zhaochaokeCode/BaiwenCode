<?php
namespace Admin\Controller;
// use Think\Controller;
class TalentController extends PublicController {

	//显示天赋列表
	public function index(){
        $Talent = M("talent"); // 实例化User对象
        $count      = $Talent -> count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Talent -> join("__PROFESSION__ ON __PROFESSION__.id = __TALENT__.belong") -> order("th_talent.t_id desc ") -> limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('talent',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this -> display();
    }

	//查询天赋列表
	public function select(){
		$Talent = M("talent");
		return $Talent -> join("__PROFESSION__ ON __PROFESSION__.id = __TALENT__.belong") -> select();
	}

	//添加天赋页面
	public function add(){
		$this -> assign("profession",A("Profession")->select());
		$this -> display();
	}

	//添加天赋
	public function addpro(){
		$data = $_POST;	
		if($_FILES['t_icon']['error'] != 4){
        $t_icon = A("Public") -> 
        upload($file = 't_icon',$size = 1048576,$type = array('jpg', 'gif', 'png', 'jpeg'),$rootPath = './Public/',$savePath = '/talent/icon/');
        $data['t_icon'] = $t_icon;
        }
        if($_FILES['t_view']['error'] != 4){
        $t_view = A("Public") -> 
        upload($file = 't_view',$size = 10485760,$type = array('mp4'),$rootPath = './Public/',$savePath = '/talent/view/');
        $data['t_view'] = $t_view;
        }

        $data['t_create_time'] = time();
        $data['t_update_time'] = time();
        $Talent = M("talent");
        if($Talent->data($data)){
            $result = $Talent->add(); 
            // 写入数据到数据库 
            if($result){
                $this -> success("添加成功！","index");
            }else{
                $this -> error("添加失败！");
            }
        }
	}

    //显示修改天赋信息界面
    public function mod(){
        $id = I("id");
        $Talent = M("talent");
        $info = $Talent -> find($id);
        $this -> assign("data",$info);
        $this -> assign("profession",A("profession") -> select());
        $this -> display();
    }

    //修改天赋
    public function modpro(){
        $id = I("post.id");
        unset($_POST['id']);
        $data = $_POST;
        if($_FILES['t_icon']['error'] != 4){
        $t_icon = A("Public") -> 
        upload($file = 't_icon',$size = 1048576,$type = array('jpg', 'gif', 'png', 'jpeg'),$rootPath = './Public/',$savePath = '/talent/icon/');
        $data['t_icon'] = $t_icon;
        }
        if($_FILES['t_view']['error'] != 4){
        $t_view = A("Public") -> 
        upload($file = 't_view',$size = 10485760,$type = array('mp4'),$rootPath = './Public/',$savePath = '/talent/view/');
        $data['t_view'] = $t_view;
        }
        $data['update_time'] = time();
        $Talent = M("talent");
        if($result = $Talent->where("t_id = ".$id) -> save($data)){
            if($result){
                $this -> success("修改成功！","index");
            }else{
                $this -> error("修改失败！");
            }
        }

    }



    //删除当前职业
    public function del(){
        $id = I("id");
        $Talent = M("talent");
        if($Talent -> delete($id)){
            $this -> success("删除成功！");
        }else{
            $this -> error("删除失败！");
        }
    }
}