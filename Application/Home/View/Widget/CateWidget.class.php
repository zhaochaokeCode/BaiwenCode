<?php
namespace Home\Widget;
use Think\Controller;

class CateWidget extends Controller{

	public function menu(){
		$website = M('website');
		$data = $website -> select();
		$this -> assign('website',$data);
		$this -> display("Public:layout");
	}

}