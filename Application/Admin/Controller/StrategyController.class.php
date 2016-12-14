<?php
namespace Admin\Controller;
// use Think\Controller;
class StrategyController extends PublicController {

	//显示攻略列表
	public function index(){
        $Strategy = M("strategy"); // 实例化User对象
        $count      = $Strategy -> count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Strategy -> order("id desc ") -> limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('strategy',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this -> display();
	}

	//查询攻略
	public function select(){
		$Strategy = M("strategy");
		return $Strategy -> select();
	}

	//添加攻略界面
	public function add(){
		$this -> display();
	}

	//添加攻略
	public function addpro(){
		$data = $_POST;	
		if($_FILES['adjunct']['error'] != 4){
        $adjunct = A("Public") -> 
        upload($file = 'adjunct',$size = 10485760,$type = array('mp4'),$rootPath = './Public/',$savePath = '/adjunct/');
        $data['adjunct'] = $adjunct;
        }

        $data['create_time'] = time();
        $data['update_time'] = time();
        $Strategy = M("strategy");
        if($Strategy->data($data)){
            $result = $Strategy->add(); 
            // 写入数据到数据库 
            if($result){
                $this -> success("添加成功！","index");
            }else{
                $this -> error("添加失败！");
            }
        }
	}

	//显示修改攻略界面
    public function mod(){
        $id = I("id");
        $Strategy = M("strategy");
        $info = $Strategy -> find($id);
        $this -> assign("data",$info);
        $this -> display();
    }

    //修改职业
    public function modpro(){
        $id = I("post.id");
        unset($_POST['id']);
        $data = $_POST;
        if($_FILES['adjunct']['error'] != 4){
        $adjunct = A("Public") -> 
        upload($file = 'adjunct',$size = 10485760,$type = array('mp4'),$rootPath = './Public/',$savePath = '/adjunct/');
        $data['adjunct'] = $adjunct;
        }
        $data['update_time'] = time();
        $Strategy = M("strategy");
        if($result = $Strategy->where("id = ".$id) -> save($data)){
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
        $Strategy = M("strategy");
        if($Strategy -> delete($id)){
            $this -> success("删除成功！");
        }else{
            $this -> error("删除失败！");
        }
    }
}