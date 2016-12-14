<?php
namespace Admin\Controller;
// use Think\Controller;
class FaqController extends PublicController {
	//FAQ列表
	public function index(){
		$faq = M('faq');
		$count = $faq -> count();
		$Page = new \Think\Page($count,3);
		$Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
		$data = $faq -> table("gn_faq") -> order("id DESC") -> where("id") -> limit($Page->firstRow.','.$Page->listRows) -> select();
		$this -> assign('page',$Page->show());
        $this -> assign('data',$data);
		$this -> display();
	}

	//添加FAQ
	public function add(){
		if($_POST['submit']){
			$faq = M('faq');
			$_POST['createtime'] = date('Y-m-d H:i:s',time());
			$data = $_POST;
			if($faq -> create($data)){
				if($faq -> add()){
					$this -> redirect("Faq/index");
				}
			}			
		}
		$this -> display();	
	}

	//编辑FAQ
	public function mod(){
		$faq = M('faq');
		$data = $faq -> find(I('id'));
		$str = $data['content'];
		// $data['content'] = htmlspecialchars_decode("$str"); //把带标签的内容转换为正常显示的内容
		if($_POST['submit']){
			// $_POST['createtime'] = date('Y-m-d H:i:s',time());
			$data = $_POST;
			if($faq -> create($data)){
				if($faq -> save()){
					$this -> redirect('Faq/index');
				}else{
					$this -> error(':( 哦孬!修改失败!');
				}
			}else{
				$this -> error('呀!修改失败了!');
			}
		}		
		$this -> assign('faq',$data);
		$this -> display();
	}

	//删除FAQ
    public function del(){
        if($_POST['submit']){
            $ids = I('ids');
            $ids = implode(',',$ids);
        }else{
            $ids = I('id');
        }
        $faq = M('faq');
        $map['id'] = array('in',$ids);
        $affectedNum = $faq -> where($map) -> delete();
        if($affectedNum){
            $this -> redirect('Faq/index');
        }else{
            $this -> error('呀!删除失败啦!');
        }
}
}