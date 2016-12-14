<?php
namespace Admin\Controller;
// use Think\Controller;
class GiftController extends PublicController {
	//显示cdkey列表页面
	public function index(){

		$cdk = M("cdk"); // 实例化User对象
		$count      = $cdk -> count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $cdk -> order("id desc	") -> limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('cdk',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this -> display();
	}

	//查询cdkey列表
	public function select(){
		$cdk = M("cdk");
		return $cdk -> select();
	}

	//添加页面显示
	public function add(){
		$this -> display();	
		
	}

	public function addpro(){
		// $mac = new \Org\Util\GetMac;
		// print_r($mac->result);
		// echo $mac->macAddr;
		echo "<meta charset='UTF-8'>";

		//根据英文 , 做第一次切割
		if(!empty($_POST['cdkey']) && $_FILES['text']['error'] == 4){
			//文本域添加
			$data['cdkey'] = explode(',',$_POST['cdkey']);
		}elseif($_FILES['text']['error'] != 4 && empty($_POST['cdkey'])){
			//文件添加
			$text = file_get_contents($_FILES['text']['tmp_name']);
			$data['cdkey'] = explode(',',$text);
		}elseif($_FILES['text']['error'] != 4 && !empty($_POST['cdkey'])){
			//文本域文件双添加
			$data['cdkey'][0] = explode(',',$_POST['cdkey']);
			$text = file_get_contents($_FILES['text']['tmp_name']);
			$data['cdkey'][1] = explode(',',$text);
			$data['cdkey'] = array_merge($data['cdkey'][0], $data['cdkey'][1]); 
		}else{
			$this -> error("请添加CDKEY！");
		}
		
		foreach ($data['cdkey'] as $key => $value) {
			//去除空数据
			if($value == ''){
				unset($data['cdkey'][$key]);
			}
			//根据中文 ，做第二次切割
			$v2 = explode("，",$value);  
			if($v2){
				//去除空数据
				unset($data['cdkey'][$key]);
				foreach ($v2 as $k => $v) {
					if($v == ''){
						unset($v2[$key]);
					}else{
						$data["cdkey"][] = $v2[$k];
					}
				}
			}
		}
		if(empty($data['cdkey'])){
			$this -> error("请添加正确的CDKEY！");
		}

		$cdk = M("cdk");
		foreach ($data['cdkey'] as $key => $value) {
			$info[] = array(
				'cdkey' => $value,
				'activity_begin' => strtotime($_POST['activity_begin']),
				'activity_end' => strtotime($_POST['activity_end']),
				'is_grant' => 0,
				 );
		}
		$re = $cdk->addAll($info);
		 if($re){
		 	$this -> success("添加成功！","index");
		 }else{
		 	$this -> error("添加失败！");
		 }
	}

	//添加活动页面显示
	public function addh(){
		$this -> display();	
		
	}

	public function addhpro(){
		
	}
}