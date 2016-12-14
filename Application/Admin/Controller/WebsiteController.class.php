<?php
namespace Admin\Controller;
// use Think\Controller;

class WebsiteController extends PublicController{
	
	public function index(){
		$config = M('website');
		$info = $config->select();
		$this->assign('info',$info);		
		$this->display();
	}

	public function mod(){
        if($_POST['sub']){
        	$website = M('website');
        	$data = $_POST;
        	if($_FILES['logo']['error'] == 0){
				$info = $this -> uppic();
				$data['logo'] = $info['savepath'].$info['savename'];
			}
            if($website -> create($data)){
                if($website -> save()){            
                    $this -> redirect("Website/index");
                }else{
                    $this -> error("修改失败");
                }
            }else{
                $this -> error("修改失败");
            }
        }
        $data = $website -> find(I("id"));
        $this -> display();       
	}

	private function uppic(){
		$config = array('maxSize' => '1000000000',
		                'exts' => array('jepg','jpg','png','gif'),
						'rootPath' => 'Public/',
						'savePath' => 'Upload/',
						'replace'  =>  true, 
		);
		$upload = new \Think\Upload($config);
		return $upload -> uploadOne($_FILES['logo']);
	}

	public function open(){	
		$open = M('website');		
		$openInfo = $open->field('status')->find();		
		$this->assign('openInfo',$openInfo);
		$this->display();
	}

	public function updateOpen(){
		$open = M('website');
		$open->create();
		if($open->where("id=1")->save()){
			$this->success('更新成功',U('website/open'),3);
		}else{
			$this->error('更新失败',U('website/open'),3);
		}
	}
	
	
}
	
	
	

	
