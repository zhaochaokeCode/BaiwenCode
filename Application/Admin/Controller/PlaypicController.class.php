<?php
namespace Admin\Controller;
// use Think\Controller;

class PlaypicController extends PublicController{
	public function index(){
		$playpic = M('playpic');
		$count = $playpic -> count();
		$Page = new \Think\Page($count,10);
		$Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
		$data = $playpic-> order('id DESC') -> limit($Page->firstRow.','.$Page->listRows) -> select();
		$this -> assign("page",$Page->show());
		$this -> assign("data",$data);
		$this->display();
	}
	
	public function add(){
		if ($_POST['sub']) {
			$upload = new \Think\Upload();
			$upload->exts = array('jpg', 'gif', 'png', 'jpeg');
			$upload -> rootPath = "Public/";
			$upload -> savePath = "Play/";
			$info = $upload -> upload();
			$playpic = M('playpic');
			if($info){
				foreach($info as $i){
					$path['image'] = $i['savepath'].$i['savename'];
					$path['state'] = $_POST['state'];
					$playpic -> add($path);
				}
				$this -> success('增加成功','index');
				exit;
			}else{
				$this -> error($upload -> getError());
			}
		}

		$this -> display();
	}

	public function mod(){
		$id = I('id');
		$playpic = M('playpic');
		$data = $playpic -> where('id='.$id) ->find();
		$this -> assign('data',$data);
		$this -> display();
	}


	//修改状态
	public function state(){
		$id = $_REQUEST['id'];
		$state = $_REQUEST['state'];
		if($id){
			$playpic = M('playpic');
			$playpic -> find($id);
			if($state==1){
				$playpic -> state = 0;
			}else{
				$playpic -> state = 1;
			}
			if($playpic -> save()){
				echo 1;
			}else{
				echo 0;
			}

		}else{
			echo 0;
		}

	}
	
	public function domod(){
		if ($_POST['submit']) {
			$id = $_POST['id'];
			$upload = new \Think\Upload();
			$upload -> exts = array("gif","png","jpg","jpeg");
			$upload -> rootPath = "Public/";
			$upload -> savePath = "Play/";
			$info = $upload -> upload();
			$playpic = M('playpic');
			if($_FILES['image']['error'] == 0){
				if ($info) {
					$path['image'] = $info[0]['savepath'].$info[0]['savename'];
					$path['picurl'] = $_POST['picurl'];
					$playpic -> where('id = '.$id) -> save($path);
					$this -> success('修改成功','index');
				}else{
					$path['picurl'] = $_POST['picurl'];
					$path['g_id'] = $_POST['id'];
					$playpic -> where('id = '.$id) -> save($path);
					$this -> success('url修改成功','index');
				}
			}else{
	        	$this -> error($upload -> getError());
	        }
			
		}		
	}

	public function del(){       
        if($_POST['submit']){
            $ids = I('ids');
            $ids = implode(',',$ids);
        }else{
            $ids = I('id');
        }
        $playpic = M('playpic');
        $map['id'] = array('in',$ids);
        $affectedNum = $playpic -> where($map) -> delete();
        if($affectedNum){
            $this -> redirect('Playpic/index');
        }else{
            $this -> error('呀!删除失败啦!');
        }
	}	

	//视频推荐位
	public function view(){
		if($_POST['sub']){
			$generalize_view = M('generalize_view');
			if($_FILES['src']['error'] == 0){
				$upload = new \Think\Upload();
				$upload -> exts = array("mp4");
				$upload -> rootPath = "Public/";
				$upload -> savePath = "view/";
				$info = $upload -> upload();
				if ($info) {
					$path['src'] = $info['src']['savepath'].$info['src']['savename'];
				}
			}else{
					$path['src'] = $_POST['src'];
			}
			if($_FILES['pic']['error'] == 0){
				$upload = new \Think\Upload();
				$upload -> exts = array("jpg","png");
				$upload -> rootPath = "Public/";
				$upload -> savePath = "view/";
				$info = $upload -> upload();
				if ($info) {
					$path['pic'] = $info['pic']['savepath'].$info['pic']['savename'];
				}
			}else{
					$path['pic'] = $_POST['pic'];
			}
			$generalize_view ->where('id=1') ->save($path);
			$this -> success('修改成功');

		}else{
			$generalize_view = M("generalize_view");
			$data = $generalize_view -> find();
			$this -> assign("data",$data);
			$this -> display();
		}

	}
		
}