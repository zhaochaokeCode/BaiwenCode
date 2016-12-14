<?php
namespace Home\Controller;
use Think\Controller;
/*
工具类
 */
class ToolsController extends Controller{
	public function index(){
		echo 'tools';
	}

	public function t(){
		echo date('Y-m');
	}
}