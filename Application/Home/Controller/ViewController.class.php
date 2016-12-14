<?php
namespace Home\Controller;
use Think\Controller;
class ViewController extends Controller {
	//展示影视中心页
	public function index(){
		$view = M("view");
		$data = $view -> where("type > 0") -> select();
		$this -> assign("data",$data);
        //社区图片热点
        $hot_p = A("Hotspot") -> hot_p(4);

        //社区文字热点
        $hot_t = A("Hotspot") -> hot_t(4);

        $this -> assign("hot_p",$hot_p);
        $this -> assign("hot_t",$hot_t);
		$this -> display();
	}

}