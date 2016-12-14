<?php
namespace Admin\Controller;
// use Think\Controller;
class GuideController extends PublicController {
	//展示任务列表
	public function index(){
		$this -> assign("guide",$this -> select());
		$this -> display();
	}

	//查询任务列表
	public function select(){
		$Guide = M("guide");
		return $Guide -> select();
	}

	//添加任务页面
	public function add(){
		$this -> display();
	}

	//添加任务
	public function addpro(){
		$data= $_POST;
		$data['create_time'] = time();
        $data['update_time'] = time();
        $Guide = M("guide");

        if($Guide->data($data)){
            $result = $Guide->add(); 
            // 写入数据到数据库 
            if($result){
                // 如果主键是自动增长型 成功后返回值就是最新插入的值
                $this -> success("添加成功！","index");
            }else{
                $this -> error("添加失败！");
            }
        }
	}

	//置顶引导
	public function top_guide(){
		$id = $_REQUEST['id'];
		$is_top = $_REQUEST['is_top'];
		if($id){
			$Guide = M("guide");
			$Guide -> find($id);
			if($is_top==1){
				$Guide -> is_top = 0;
			}else{
				$Guide -> is_top = 1;
			}
			if($Guide -> save()){
				echo 1;
				$this -> redirect('Guide/index');
			}else{
				echo 0;
				$this -> error(':( 哦孬!修改失败!');
			}

		}else{
			echo 0;
			$this -> error('呀!修改失败啦!');
		}

	}

	//编辑引导
	public function mod(){
		$Guide = M("guide");
		$data = $Guide -> find(I('id'));
		$str = $data['content'];
		$data['content'] = htmlspecialchars_decode("$str"); //把带标签的内容转换为正常显示的内容
		if($_POST['submit']){
			$_POST['update_time'] = time();
			$data = $_POST;
			if($Guide -> create($data)){
				if($Guide -> save()){
					$this -> redirect('Guide/index');
				}else{
					$this -> error(':( 哦孬!修改失败!');
				}
			}else{
				$this -> error('呀!修改失败了!');
			}
		}	
		$this -> assign('data',$data);
		$this -> display();
	}

	//删除引导
    public function del(){
        if($_POST['submit']){
            $ids = I('ids');
            $ids = implode(',',$ids);
        }else{
            $ids = I('id');
        }
        $news = M('news');
        $map['id'] = array('in',$ids);
        $affectedNum = $news -> where($map) -> delete();
        if($affectedNum){
            $this -> redirect('News/index');
        }else{
            $this -> error('呀!删除失败啦!');
        }
	}
}