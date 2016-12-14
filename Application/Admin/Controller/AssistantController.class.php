<?php
namespace Admin\Controller;
// use Think\Controller;
class AssistantController extends PublicController {
	//显示副职业列表
	public function index(){
        $Assistant = M("assistant"); // 实例化User对象
        $count      = $Assistant -> count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Assistant -> order("id desc ") -> limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('assistant',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this -> display();
	}

	//查询副职业列表
	public function select(){
		$Assistant = M("assistant");
		return $Assistant -> select();
	}

	//添加副职业页面
	public function add(){
		$this -> display();
	}

	//添加副职业 
	public function addpro(){
        $data = $_POST;
        if($_FILES['img']['error'] != 4){
        $img = A("Public") -> 
        upload($file = 'img',$size = 3145728,$type = array('jpg', 'gif', 'png', 'jpeg'),$rootPath = './Public/',$savePath = '/assistant/');
        $data['img'] = $img;
        }
        if($_FILES['view']['error'] != 4){
        $view = A("Public") -> 
        upload($file = 'view',$size = 10485760,$type = array('mp4'),$rootPath = './Public/',$savePath = '/assistant/');
        $data['view'] = $view;
        }

        $data['create_time'] = time();
        $data['update_time'] = time();
        $Assistant = M("assistant");
        if($Assistant->data($data)){
            $result = $Assistant->add(); 
            // 写入数据到数据库 
            if($result){
                // 如果主键是自动增长型 成功后返回值就是最新插入的值
                $this -> success("添加成功！","index");
            }else{
                $this -> error("添加失败！");
            }
        }
	}

	//修改副职业页面
	public function mod(){
		$id = I("id");
        $Assistant = M("assistant");
        $info = $Assistant -> find($id);
        $this -> assign("data",$info);
        $this -> display();
	}

    //修改副职业
    public function modpro(){
        $id = I("post.id");
        unset($_POST['id']);
        echo " <meta http-equiv='Content-Type' content='text/html'; charset='utf-8' />";
        $data = $_POST;
        if($_FILES['img']['error'] != 4){
        $img = A("Public") -> 
        upload($file = 'img',$size = 3145728,$type = array('jpg', 'gif', 'png', 'jpeg'),$rootPath = './Public/',$savePath = '/assistant/');
        $data['img'] = $img;
        }
        if($_FILES['view']['error'] != 4){
        $view = A("Public") -> 
        upload($file = 'view',$size = 10485760,$type = array('mp4'),$rootPath = './Public/',$savePath = '/assistant/');
        $data['view'] = $view;
        }
        $data['update_time'] = time();
        $Assistant = M("assistant");
        if($result = $Assistant->where("id = ".$id) -> save($data)){
            if($result){
                $this -> success("修改成功！","index");
            }else{
                $this -> error("修改失败！");
            }
        }

    }

    //删除当前副职业
    public function del(){
        $id = I("id");
        $Assistant = M("assistant");
        if($Assistant -> delete($id)){
            $this -> success("删除成功！");
        }else{
            $this -> error("删除失败！");
        }
    }
}