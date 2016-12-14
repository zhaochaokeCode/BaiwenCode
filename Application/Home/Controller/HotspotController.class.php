<?php
namespace Home\Controller;
use Think\Controller;
class HotspotController extends Controller {

	//查询图片热点
	public function hot_p($limit = 6){
		$hotspot = M("hotspot");
		return $hotspot -> where("type = 'p'") -> limit($limit)-> select();
	}

	//查询文字热点
	public function hot_t($limit = 4){
		$hotspot = M("hotspot");
		return $hotspot -> where("type = 't'") -> limit($limit)-> select();
	}
}