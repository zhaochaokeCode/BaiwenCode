<?php
namespace Admin\Controller;
// use Think\Controller;
class ViewController extends PublicController {

	//总视频列表
	public function index(){
        $View = M("view"); // 实例化User对象
        $count      = $View -> count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $View -> join("th_tname on th_view.type = th_tname.identification") -> where("type > 0") -> order("th_view.id desc ") -> limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this -> display();

	}

	//上传视频页面
	public function add(){
		$this -> display();
	}

	//上传视频
	public function addpro(){
		$data = $_POST;
		if($_FILES['view']['error'] != 4){
        $view = A("Public") -> 
        upload($file = 'view',$size = 10485760,$type = array('mp4'),$rootPath = './Public/',$savePath = '/view/');
        $data['view'] = $view;
        }
        if($_FILES['picture']['error'] != 4){
        $picture = A("Public") -> 
        upload($file = 'picture',$size = 10485760,$type = array('jpg','jpeg','png'),$rootPath = './Public/',$savePath = '/view/');
        $data['picture'] = $picture;
        }

        $data['create_time'] = time();
        $data['update_time'] = time();
        $View = M("view");
        if($View->data($data)){
            $result = $View->add(); 
            // 写入数据到数据库 
            if($result){
                // 如果主键是自动增长型 成功后返回值就是最新插入的值
                $this -> success("添加成功！");
            }else{
                $this -> error("添加失败！");
            }
        }
	}

	//分类视频列表
	public function viewlist(){
		$type = I('type');

        $View = M("view"); // 实例化User对象
        $count      = $View -> where("type = '".$type."'") -> count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $View ->join("th_tname on th_view.type = th_tname.identification") -> where("type = '".$type."'") -> order("th_view.id desc ") -> limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this -> assign("type",$type);
        if(isset($_GET['pic'])){
            $this -> display("indexp");
        }else{
            $this -> display("index");
        } 
	}

	//修改视频页面
	public function mod(){
		$id = I("id");
        $View = M("view");
        $info = $View -> find($id);
        $this -> assign("data",$info);
        $this -> display();
	}

	//修改视频
    public function modpro(){
        $id = I("post.id");
        unset($_POST['id']);
        echo " <meta http-equiv='Content-Type' content='text/html'; charset='utf-8' />";
        $data = $_POST;
        if($_FILES['view']['error'] != 4){
        $view = A("Public") -> 
        upload($file = 'view',$size = 10485760,$type = array('mp4'),$rootPath = './Public/',$savePath = '/view/');
        $data['view'] = $view;
        }
        if($_FILES['picture']['error'] != 4){
        $picture = A("Public") -> 
        upload($file = 'picture',$size = 10485760,$type = array('jpg','jpeg','png'),$rootPath = './Public/',$savePath = '/view/');
        $data['picture'] = $picture;
        }
        $data['update_time'] = time();
        $View = M("view");
        if($result = $View->where("id = ".$id) -> save($data)){
            if($result){
                $this -> success("修改成功！","index.html");
            }else{
                $this -> error("修改失败！");
            }
        }

    }

    //删除当前视频
    public function del(){
        $id = I("id");
        $View = M("view");
        if($View -> delete($id)){
            $this -> success("删除成功！");
        }else{
            $this -> error("删除失败！");
        }
    }

    //上传图片页面
    public function addp(){
        $this -> display();
    }

    //上传图片
    public function addppro(){
        $data = $_POST;
        if($_FILES['pic']['error'] != 4){
        $view = A("Public") -> 
        upload($file = 'pic',$size = 10485760,$type = array('jpg','png'),$rootPath = './Public/',$savePath = '/img/');
        $data['picture'] = $view;
        }

        $data['create_time'] = time();
        $data['update_time'] = time();
        $View = M("view");
        if($View->data($data)){
            $result = $View->add();
            // 写入数据到数据库 
            if($result){
                // 如果主键是自动增长型 成功后返回值就是最新插入的值
                $this -> success("添加成功！");
            }else{
                $this -> error("添加失败！");
            }
        }
    }

    //总图片列表
    public function indexp(){
        $View = M("view"); // 实例化User对象
        $count      = $View -> count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $View ->join("th_tname on th_view.type = th_tname.identification") -> where("type < 0") ->order("th_view.id desc ") -> limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this -> display();

    }

    //修改视频页面
    public function modp(){
        $id = I("id");
        $View = M("view");
        $info = $View -> find($id);
        $this -> assign("data",$info);
        $this -> display();
    }

    //修改视频
    public function modppro(){
        $id = I("post.id");
        unset($_POST['id']);
        echo " <meta http-equiv='Content-Type' content='text/html'; charset='utf-8' />";
        $data = $_POST;
        if($_FILES['pic']['error'] != 4){
        $view = A("Public") -> 
        upload($file = 'pic',$size = 10485760,$type = array('jpg','png'),$rootPath = './Public/',$savePath = '/img/');
        $data['picture'] = $view;
        }
        $data['update_time'] = time();
        $View = M("view");
        if($result = $View->where("id = ".$id) -> save($data)){
            if($result){
                $this -> success("修改成功！","viewlist//pic/1/type/".$data['type'].".html");
            }else{
                $this -> error("修改失败！");
            }
        }

    }

    //删除当前视频
    public function delp(){
        $id = I("id");
        $View = M("view");
        if($View -> delete($id)){
            $this -> success("删除成功！");
        }else{
            $this -> error("删除失败！");
        }
    }
}
