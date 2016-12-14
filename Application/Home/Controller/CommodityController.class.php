<?php

namespace Home\Controller;
use Think\Controller;
session_start();
class CommodityController extends Controller {
	//无条件查询商品
	public function search_all(){
		$Commodity = M("commodity");
		return $Commodity ->order("time DESC") ->select();
	}

	//条件查询商品
	public function search_where($where,$limit = ''){
		$Commodity = M("commodity");
		return $Commodity ->where($where) ->order("time DESC") ->select();
	}

}