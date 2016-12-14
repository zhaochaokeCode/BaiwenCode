<?php
namespace Admin\Controller;
// use Think\Controller;
class NewsController extends PublicController {
	//新闻列表
	public function index(){
		$news = M('news');
		$count = $news -> count();
		$Page = new \Think\Page($count,8);
		$Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 (共 %TOTAL_ROW% 条)');
		$data = $news -> join("th_tname on th_tname.identification = th_news.type","LEFT") -> order("th_news.id DESC")  -> limit($Page->firstRow.','.$Page->listRows) -> select();
		$this -> assign('page',$Page->show());
        $this -> assign('data',$data);
		$this -> display();
	}

	//添加新闻
	public function add(){
		if($_POST['submit']){
			$news = M('news');
			$_POST['createtime'] = time();
			$data = $_POST;
			$data['author'] = $_SESSION['master']['username'];
			if($news -> create($data)){
				if($news -> add()){
					$this -> redirect("News/index");
				}
			}
		}
		$this -> display();	
	}

	//编辑新闻
	public function mod(){
		$news = M('news');
		$data = $news -> join("th_tname on th_tname.identification = th_news.type","LEFT") -> where("th_news.id = ".I('id')) -> find();

		$str = $data['content'];
		$data['content'] = htmlspecialchars_decode("$str"); //把带标签的内容转换为正常显示的内容
		if($_POST['submit']){
			$_POST['createtime'] = time();
			$data = $_POST;
			if($news -> create($data)){
				if($news -> save()){
					$this -> redirect('News/index');
				}else{
					$this -> error(':( 哦孬!修改失败!');
				}
			}else{
				$this -> error('呀!修改失败了!');
			}
		}		
		$this -> assign('news',$data);
		$this -> display();
	}

	//删除新闻
    public function del(){
        if($_POST['submit']){
            $ids = I('ids');
            $ids = implode(',',$ids);
        }else{
            $ids = I('id');
        }
        $news = M('news');
        $map['id'] = array('in',$ids);
        $affectedNum = $news -> where($map) -> delete();
        if($affectedNum){
            $this -> redirect('News/index');
        }else{
            $this -> error('呀!删除失败啦!');
        }
	}

	//置顶新闻
	public function top_news(){
		$id = $_REQUEST['id'];
		$is_top = $_REQUEST['is_top'];
		if($id){
			$news = M('news');
			$news -> find($id);
			if($is_top==1){
				$news -> is_top = 0;
			}else{
				$news -> is_top = 1;
			}
			if($news -> save()){
				echo 1;
				$this -> redirect('News/index');
			}else{
				echo 0;
				$this -> error(':( 哦孬!修改失败!');
			}

		}else{
			echo 0;
			$this -> error('呀!修改失败啦!');
		}

	}
}