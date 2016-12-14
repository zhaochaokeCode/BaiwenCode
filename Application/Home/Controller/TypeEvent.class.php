<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2012 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi.cn@gmail.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------
// TypeEvent.class.php 2013-02-27
namespace Home\Event;
class TypeEvent{
	//登录成功，获取Github用户信息
	public function github($token){
		$github = ThinkOauth::getInstance('github', $token);
		$data   = $github->call('user');

		if(empty($data['code'])){
			$userInfo['type'] = 'GITHUB';
			$userInfo['name'] = $data['login'];
			$userInfo['nick'] = $data['name'];
			$userInfo['head'] = $data['avatar_url'];
			return $userInfo;
		} else {
			throw_exception("获取Github用户信息失败：{$data}");
		}
	}

	//登录成功，获取Google用户信息
	public function google($token){
		dump($token);die;
		$google = \Org\ThinkSDK\ThinkOauth::getInstance('google', $token);
		$data   = $google->call('userinfo');

		if(!empty($data['id'])){
			$userInfo['type'] = 'GOOGLE';
			$userInfo['name'] = $data['name'];
			$userInfo['nick'] = $data['name'];
			$userInfo['head'] = $data['picture'];
			return $userInfo;
		} else {
			throw_exception("获取Google用户信息失败：{$data}");
		}
	}

	//登录成功，获取Facebook用户信息
	public function Facebook($token){
		$facebook = \Org\ThinkSDK\ThinkOauth::getInstance('facebook', $token);
		$data   = $facebook->call('userinfo');
		if(!empty($data['id'])){
			$userInfo['type'] = 'Facebook';
			$userInfo['name'] = $data['name'];
			$userInfo['nick'] = $data['name'];
			$userInfo['head'] = $data['picture'];
			return $userInfo;
		} else {
			throw_exception("获取Facebook用户信息失败：{$data}");
		}
	}

}
