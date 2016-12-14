<?php
namespace Admin\Controller;
// use Think\Controller;
class HotspotController extends PublicController {
	//显示图片热点列表
	public function index_p(){
		$data = $this -> hotspot('p',6);
		$this -> assign("data",$data);
		$this -> display();
	}
	//显示文字热点列表
	public function index_t(){
		$data = $this -> hotspot('t',4);
		$this -> assign("data",$data);
		$this -> display();
	}
	//查询热点
	public function hotspot($where,$limit = 6){
		$hotspot = M('hotspot');
		return $hotspot -> where("type = '".$where."'") -> limit($limit) -> order("id DESC") -> select();
	}

	//添加热点页面
	public function add(){
		if($_POST['sub']){

			$data = $_POST;
			if($_FILES['pic']['error'] != 4){
		        $pic = A("Public") -> 
		        upload($file = 'pic',$size = 10485760,$type = array('jpg','png'),$rootPath = './Public/',$savePath = '/hotspot/');
		        $data['pic'] = $pic;
	        }
	        
	        $hotspot = M("hotspot");
	        if($hotspot->data($data)){
	            $result = $hotspot->add();
	            // 写入数据到数据库 
	            if($result){
	                $this -> success("添加成功！","index_".$data['type']);
	            }else{
	                $this -> error("添加失败！");
	            }
	        }

		}else{
			$type = I("type");
			if($type =='p'){
				$this -> display("add_p");
			}else{
				$this -> display("add_t");
			}
		}
		
	}

	//修改热点页面
	public function mod(){
		if($_POST['sub']){
			$data = $_POST;
			if($_FILES['pic']['error'] != 4){
		        $pic = A("Public") -> 
		        upload($file = 'pic',$size = 10485760,$type = array('jpg','png'),$rootPath = './Public/',$savePath = '/hotspot/');
		        $data['pic'] = $pic;
	        }
	        $hotspot = M("hotspot");
            $result = $hotspot->save($data);
            // 写入数据到数据库 
            $this -> success("修改成功！","index_".$data['type']);

		}else{
			$type = I("type");
			$id = I("id");
			$hotspot = M("hotspot");
			$data = $hotspot -> find($id);
			$this -> assign("data",$data);
			if($type =='p'){
				$this -> display("mod_p");
			}else{
				$this -> display("mod_t");
			}
		}
	}

	//删除热点
    public function del(){
        if($_POST['submit']){
            $ids = I('ids');
            $ids = implode(',',$ids);
        }else{
            $ids = I('id');
        }
        $type = I("type");
        $hotspot = M("hotspot");
        $map['id'] = array('in',$ids);
        $affectedNum = $hotspot -> where($map) -> delete();
        if($affectedNum){
            $this -> redirect('Hotspot/index_'.$type);
        }else{
            $this -> error('呀!删除失败啦!');
        }
	}
}