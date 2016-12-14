<?php
namespace Admin\Controller;
// use Think\Controller;
class CommodityController extends PublicController {
	//显示商品列表
	public function index(){
		$commodity = $this -> commodity();
		$this -> assign("commodity",$commodity);
		$this -> display();

	}
	//查询商品列表
	public function commodity(){
		$commodity = M("commodity");
		return $commodity -> order("time desc") -> select();
	}

	//添加新商品
	public function add(){
		if(isset($_POST['sub'])){
			$data = $_POST;	
			if($_FILES['src']['error'] != 4){
	        $src = A("Public") -> 
	        upload($file = 'src',$size = 5242880,$type = array('jpg','png','jpeg'),$rootPath = './Public/',$savePath = '/Commodity/');
	        $data['src'] = $src;
	        }

	        $data['time'] = time();
	        $commodity = M("commodity");
	        if($commodity->data($data)){
	            $result = $commodity->add(); 
	            // 写入数据到数据库 
	            if($result){
	                $this -> success("添加成功！","index");
	            }else{
	                $this -> error("添加失败！");
	            }
	        }
		}else{
			$this -> display();
		}
	}

	//修改商品
	public function mod(){
		$commodity = M("commodity");
		if($_POST['sub']){
			$data = $_POST;	
			if($_FILES['src']['error'] != 4){
	        $src = A("Public") -> 
	        upload($file = 'src',$size = 5242880,$type = array('jpg','png','jpeg'),$rootPath = './Public/',$savePath = '/Commodity/');
	        $data['src'] = $src;
	        }
	        $commodity = M("commodity");
	        $commodity ->where('id='.$data['id']) ->save($data);
	        $this -> success("修改成功！","index");
		}else{
			$data =  $commodity -> find(I("id"));
			$this -> assign("commodity",$data);
			$this -> display();
		}
		
    }

    //删除商品
    public function del(){
        if($_POST['sub']){
            $ids = I('id');
            $ids = implode(',',$ids);
        }else{
            $ids = I('id');
        }
        $commodity = M('commodity');
        $map['id'] = array('in',$ids);
        $affectedNum = $commodity -> where($map) -> delete();
        if($affectedNum){
            $this -> redirect('commodity/index');
        }else{
            $this -> error('呀!删除失败啦!');
        }
	}

}