<?php
namespace Admin\Controller;
// use Think\Controller;
// class RuleController extends Controller{
class RuleController extends PublicController{

    public function index(){
		$rule = M("auth_rule");
		$count = $rule -> count();
		$Page = new \Think\Page($count,8);
        $Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
		$data = $rule -> field('id,name,title,type') -> order("id DESC") -> limit($Page->firstRow.','.$Page->listRows)->select();
		$this -> assign('page',$Page -> show());
		$this -> assign('data',$data);
		$this -> display();
    }

    public function add(){
        if($_POST){
            $rule = M("auth_rule");
            $map['name'] = $_POST['name'];
            $data = $rule -> where($map) -> count();
            if ($data == 0) {
                if($rule -> create()){
                    if($rule -> add()){
                        $this -> redirect("Rule/add");
                    }else{
                        $this -> error("添加规则失败！");
                    }
                }
            }else{
                $this -> error('规则已经存在或填写有误!请重新填写!');
            }
            
        }
        $this -> display();
    }

    public function mod(){
		$rule = M("auth_rule");
		if($_POST['submit']){
			if($rule -> create()){
				if($rule -> save()){
					$this -> redirect("Rule/index");
				}else{
					$this -> error("修改失败");
				}
			}
		}
		$data =  $rule -> find(I("id"));
		$this -> assign("rule",$data);
		$this -> display();
    }

    public function del(){		
		if($_POST['sub']){
            $ids = I('ids');
            $ids = implode(',',$ids);
        }else{
            $ids = I('id');
        }
        $rule = M('auth_rule');
        $map['id'] = array('in',$ids);
        $affectedNum = $rule -> where($map) -> delete();
        if($affectedNum){
            $this -> redirect('Rule/index');
        }else{
            $this -> error('呀!删除失败啦!');
        }		
    }
    
}
