<?php
namespace Admin\Controller;
// use Think\Controller;
class RaidersController extends PublicController{

//游戏介绍列表
	public function raiders(){
		$news = M('raiders');
		$count = $news -> count();
		$Page = new \Think\Page($count,8);
		$Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
		$data = $news -> join("__GAMES__ on __GAMES__.g_id = __RAIDERS__.belong","LEFT") -> order("id DESC") -> where("id") -> limit($Page->firstRow.','.$Page->listRows) -> select();
		$this -> assign('page',$Page->show());
        $this -> assign('data',$data);
		$this -> display();
	}

//添加游戏介绍
	public function raiders_add(){
		if($_POST['submit']){
			$news = M('raiders');
			$_POST['createtime'] = date('Y-m-d H:i:s',time());
			$data = $_POST;
			$data['author'] = $_SESSION['master']['username'];
			if($news -> create($data)){
				if($news -> add()){
					$this -> redirect("raiders/raiders");
				}
			}
		}
		$this -> assign('games',A("Games")->all());
		$this -> display();	
	}



//删除游戏介绍
    public function del(){
        if($_POST['submit']){
            $ids = I('ids');
            $ids = implode(',',$ids);
        }else{
            $ids = I('id');
        }
        $news = M('raiders');
        $map['id'] = array('in',$ids);
        $affectedNum = $news -> where($map) -> delete();
        if($affectedNum){
            $this -> redirect('raiders/raiders');
        }else{
            $this -> error('呀!删除失败啦!');
        }
	}


	//编辑游戏介绍
	public function mod(){
		$news = M('raiders');
		$data = $news -> join("__GAMES__ on __RAIDERS__.belong = __GAMES__.g_id","LEFT") -> find(I('id'));
		$str = $data['content'];
		$data['content'] = htmlspecialchars_decode("$str"); //把带标签的内容转换为正常显示的内容
		if($_POST['submit']){
			$_POST['createtime'] = date('Y-m-d H:i:s',time());
			$data = $_POST;
			if($news -> create($data)){
				if($news -> save()){
					$this -> redirect('raiders/raiders');
				}else{
					$this -> error(':( 哦孬!修改失败!');
				}
			}else{
				$this -> error('呀!修改失败了!');
			}
		}
		$this -> assign('games',A("Games")->all());		
		$this -> assign('news',$data);
		$this -> display();
	}




}




