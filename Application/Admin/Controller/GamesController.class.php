<?php
namespace Admin\Controller;
// use Think\Controller;
class GamesController extends PublicController{

    //游戏列表
    public function index(){
		$config = M('games');
		if($_GET['g_id']){
		  $map['g_id']=trim($_GET['g_id']);
		}
		if($_GET['g_name']){$map['g_name'] = array("LIKE","%{$_GET['g_name']}%");}	
		unset($map['p']);
		$count = $config ->where($map)-> count();
		$Page = new \Think\Page($count,10);
        $Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
		$info = $config -> order("g_id DESC") -> where($map) -> limit($Page->firstRow.','.$Page->listRows) -> select();
		$this->assign("page",$Page -> show());
		$this->assign('info',$info);
		$this->display();
    }

    //查询全部游戏
    public function all(){
        $games = M('games');
        return $games -> select();
    }

    //添加游戏
    public function add(){
       if($_POST['sub']){
            $games = M('games');
            $data = $_POST;
            if($_FILES['g_img']['error'] == 0){
                $info = $this -> uppic();
                $data['g_img'] = $info['savepath'].$info['savename'];
            }
            if($games -> create($data)){ 
                if($games -> add()){
                    $this -> redirect("Games/index");
                }
            }
        }
        $this -> display();
    }

    //修改游戏
	public function mod(){
		$games = M('games');
        if($_POST['sub']){
                $data = $_POST;
                if($_FILES['g_img']['error'] == 0){
                    $info = $this -> uppic();
                    $data['g_img'] = $info['savepath'].$info['savename'];
                }
                if($games -> create($data)){
                    if($games-> save()){            
                        $this -> redirect("Games/index");
                    }else{
                        $this -> error("修改失败!!!");
                    }
                }else{
                    $this -> error("修改失败!");
                }
        }
        $data = $games -> find(I("g_id"));
        $this -> assign("games",$data);
        $this -> display();
        
	}
	
    //删除游戏
	public function del(){
        if($_POST['sub']){
            $s_ids = I('s_ids');
            $s_ids = implode(",",$s_ids);
        }else{
            $s_ids = I("g_id");
        }
        $games = M('games');
        $map['g_id'] = array("in",$s_ids);
        $affectedNum = $games -> where($map)->delete();
        if($affectedNum){
            $this -> redirect("Games/index");
        }else{
            $this -> error("删除失败！");
        }
    }

    //文件上传
    private function uppic(){
        $config = array('maxSize' => '1000000000',
                        'exts' => array('jepg','jpg','png','gif'),
                        'rootPath' => 'Public/',
                        'savePath' => 'Upload/Game_icon/',
                        'replace'  =>  true, 
        );
        $upload = new \Think\Upload($config);
        return $upload -> uploadOne($_FILES['g_img']);
    }

    //添加游戏服务器
    public function server_add(){
        if($_POST['sub']){
             $server = M('server');
             $data = $_POST;
              if($server -> create($data)){ 
                    if($server -> add()){ 
                        $this -> redirect("Games/server");
                    }
                }
        }else{
            $this -> assign("games",$this->all());
            $this -> display();
        }
    }

    //查询所有游戏服务器
    public function server_all(){
        $server = M('server');
        return $server -> select();
    }

    //游戏服务器列表
    public function server(){
        $config = M('server');
        if($_GET['s_id']){
          $map['s_id']=trim($_GET['s_id']);
        }
        if($_GET['s_name']){$map['s_name'] = array("LIKE","%{$_GET['g_name']}%");}
        unset($map['p']);
        $count = $config ->where($map)-> count();
        $Page = new \Think\Page($count,10);
        $Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
        $info = $config->order("s_id DESC")->where($map) ->limit($Page->firstRow.','.$Page->listRows)->select();
        $games = M('games');
        foreach ($info as $k =>& $v) {
            $game_info = $games -> find($v['g_id']);
            $v['game_info'] = $game_info;
        }
        $this->assign("page",$Page -> show());
        $this->assign('info',$info);        
        $this->display();
    }


    //修改游戏服务器
    public function server_mod(){
        $server = M('server');
        if($_POST['sub']){
                $data = $_POST;
                if($server -> create($data)){
                    if($server-> where("s_id = ".$data['s_id']) -> save()){            
                        $this -> redirect("Games/server");
                    }else{
                        $this -> error("修改失败!!!");
                    }
                }else{
                    $this -> error("修改失败!");
                }
        }
        $data = $server -> find(I("s_id"));
        $games = $this -> all();
        $this -> assign("server",$data);
        $this -> assign("games",$games);
        $this -> display();
    }
    
    //删除游戏服务器
    public function server_del(){
        if($_POST['sub']){
            $s_ids = I('s_ids');
            $s_ids = implode(",",$s_ids);
        }else{
            $s_ids = I("s_id");
        }
        $server = M('server');
        $map['s_id'] = array("in",$s_ids);
        $affectedNum = $server -> where($map) -> delete();
        if($affectedNum){
            $this -> redirect("Games/server");
        }else{
            $this -> error("删除失败！");
        }
    }

    //查询全部用户角色
    public function role_all(){
        $gsur = M('gsur');
        $count = $gsur -> count();
        $Page = new \Think\Page($count,10);
        $Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
        $info = $gsur -> join('__USER__ on __USER__.id = __GSUR__.u_id') -> join('__GAMES__ on __GAMES__.g_id = __GSUR__.g_id') -> join('__ROLE__ on __ROLE__.r_id = __GSUR__.r_id') -> join('__SERVER__ on __SERVER__.s_id = __GSUR__.s_id') -> order("gn_games.g_id DESC")  -> limit($Page->firstRow.','.$Page->listRows) -> select();
        //dump($info);die;
        $this->assign("page",$Page -> show());
        $this->assign('info',$info);
        $this->display();
    }

    //修改游戏角色
    public function role_mod($id=''){
        if($_POST['submit']){
            $data = $_POST;
            $role = M('role');
            $role -> r_name = $data['r_name'];
            $role_re = $role -> where("r_id = ".$data['r_id']) -> save();
            $gsur = M('gsur');
            $gsur -> s_id = $data['s_id'];
            $gsur_re = $gsur -> where('r_id = '.$data['r_id']) -> save();
            $this -> redirect("Games/role_all");
        }else{
            $gsur = M('gsur');
            $info = $gsur -> join('__USER__ on __USER__.id = __GSUR__.u_id') -> join('__GAMES__ on __GAMES__.g_id = __GSUR__.g_id') -> join('__ROLE__ on __ROLE__.r_id = __GSUR__.r_id') -> join('__SERVER__ on __SERVER__.s_id = __GSUR__.s_id') -> where("gn_gsur.r_id  =".$id) -> find();
            $server = M('server');
            $server_info = $server -> where("g_id = ".$info['g_id']) -> select();
            $this -> assign("info",$info);
            $this -> assign("server",$server_info);
            $this -> display();
        }
        
    }

    //删除游戏角色
    public function role_del($id){
        $role = M('role');
        $re = $role -> where('r_id = '.$id) -> delete();
        if($re){
            $gsur = M('gsur');
            $gsur_re = $gsur -> where('r_id = '.$id) -> delete();
            if($gsur_re){
                $this -> redirect("Games/role_all");
            }else{
                $this -> error("删除失败!");
            }
        }
    }
}
