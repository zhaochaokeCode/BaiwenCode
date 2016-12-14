<?php
namespace Home\Controller;
use Think\Controller;
class FaqController extends Controller {
    public function index(){
    	$faq = M('faq');
    	$count = $faq -> count();
    	// $Page = new \Think\Page($count,3);
    	$faqdata = $faq -> order('id DESC') -> limit($Page->firstRow.','.$Page->listRows) -> select();
    	// $this -> assign('page',$Page->show());
    	$this -> assign('sideplaypic',R('Index/getSidePlaypic'));
        $this -> assign('rc',R('Login/getNowRc'));
    	$this -> assign('faq',$faqdata);
        $this -> display();
    }
}