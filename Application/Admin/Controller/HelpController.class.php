<?php
namespace Admin\Controller;
// use Think\Controller;
class HelpController extends PublicController {
    public function index(){
    	$help = M('help');
    	$count = $help -> count();
		$Page = new \Think\Page($count,8);
        $Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
		$data = $help -> order("id DESC") -> limit($Page->firstRow.','.$Page->listRows)->select();
		$this -> assign('page',$Page -> show());
    	$this -> assign('help',$data);
        $this -> display();
    }

    //删除问题
    public function del(){
        if($_POST['submit']){
            $ids = I('ids');
            $ids = implode(',',$ids);
            if(!isset($ids)){
                $this -> error('请至少选择一项');
            }
        }else{
            $ids = I('id');
        }
        $help = M('help');
        $map['id'] = array('in',$ids);
        $affectedNum = $help -> where($map) -> delete();
        if($affectedNum){
            $this -> redirect('Help/index');
        }else{
            $this -> error('呀!删除失败啦!');
        }
    }
}