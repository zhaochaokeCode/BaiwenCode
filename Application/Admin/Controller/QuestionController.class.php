<?php
namespace Admin\Controller;
use Think\Controller;

class QuestionController extends Controller{
    
  public function index(){
    $question = M('question');
    $count      = $question -> count();// 查询满足要求的总记录数
    $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
    $show       = $Page->show();// 分页显示输出
    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    $data = $question 
    -> join("__USER__ on __QUESTION__.u_id = __USER__.id","LEFT")
    -> join("__SERVER__ on __QUESTION__.s_id = __SERVER__.s_id","LEFT")
    -> join("__GAMES__ on __QUESTION__.g_id = __GAMES__.g_id","LEFT")
    -> order('create_time desc') -> limit($Page->firstRow.','.$Page->listRows)
    -> select();


    $this -> assign('page',$show);// 赋值分页输出
    $this -> assign("data",$data);
    $this -> display();
  }


  public function del(){
  	if($_POST['submit']){
        $q_id = I('id');
        $q_id = implode(',',$q_id);
        if(!isset($q_id)){
            $this -> error('请至少选择一项');
        }
    }else{
        $q_id = I('id');
    }

  	$question = M('question');
  	$re = $question -> delete($q_id);
  	if($re){
  		$this -> redirect('Question/index');
  	}
  }


  public function show(){
  	$q_id = I('id');
  	$question = M('question');
  	$data = $question 
    -> join("__USER__ on __QUESTION__.u_id = __USER__.id","LEFT")
    -> join("__SERVER__ on __QUESTION__.s_id = __SERVER__.s_id","LEFT")
    -> join("__GAMES__ on __QUESTION__.g_id = __GAMES__.g_id","LEFT")
    -> find($q_id);
    $data['q_type'] = explode('|', $data['q_type']);
    $this -> assign("data",$data);
    $this -> display();
  }
}
