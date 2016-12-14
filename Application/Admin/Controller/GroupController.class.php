<?php
namespace Admin\Controller;
// use Think\Controller;
class GroupController extends PublicController{
    
    public function index(){
		$rule = M("auth_group");
		$count = $rule -> count();
		$Page = new \Think\Page($count,8);
		$Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
		$data = $rule -> field('id,title,status,rules') -> order("id DESC") -> limit($Page->firstRow.','.$Page->listRows)-> select();
		 $this -> assign('page',$Page -> show());
		$this -> assign('data',$data);
		$this -> display();
    
    }
	
	public function add(){
		if($_POST){
			$group = M("auth_group");
			$_POST['rules'] = implode(",",$_POST['rules']);
			if($group ->create()){
				if($group -> add()){
					$this -> redirect("Group/index");
				}else{
					$this -> error("添加组失败");
				}
			}
		}
		$rule = M("auth_rule");
		$rules = $rule -> where(array("status" => 1)) -> select();
		$this -> assign("rules",$rules);
		$this -> display();
	}
	
	public function mod(){
		$group = M("auth_group");
		if($_POST['submit']){
			if($group -> create()){
				if($group -> save()){
					$this -> redirect("Group/index");
				}else{
					$this -> error("修改失败");
				}
			}
		}
		$data =  $group -> find(I("id"));
		$this -> assign("group",$data);
		$this -> display();
    }
	
	public function del(){		
		if($_POST['sub']){
            $ids = I('ids');
            $ids = implode(',',$ids);
        }else{
            $ids = I('id');
        }
        $rule = M('auth_group');
        $map['id'] = array('in',$ids);
        $affectedNum = $rule -> where($map) -> delete();
        if($affectedNum){
            $this -> redirect('Group/index');
        }else{
            $this -> error('呀!删除失败啦!');
        }		
    }
  	
}
