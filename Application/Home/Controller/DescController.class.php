<?php
namespace Home\Controller;
use Think\Controller;
class DescController extends Controller {
    public function index($g_id = ''){
        $this -> SetCsrf(rand(0,9999));
        if($g_id==''){
            $g_id = C('GAME_ID');
        }

        if(isset($_GET['type'])){
            $where = "and type = '".$_GET['type']."'";
        }else{
            $where = '';
        }

        $news = M('raiders');
        $count = $news -> where('belong='.$g_id) -> count();
        $Page = new \Think\Page($count,4);
        $Page->rollPage = 2;
        $Page->parameter = $row; //此处的row是数组，为了传递查询条件
        $Page->setConfig('first','&lt;&lt;');
        $Page->setConfig('prev','&lt;');
        $Page->setConfig('next','&gt;');
        $Page->setConfig('last','&gt;&gt;');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% ');
        $data = $news -> query("select title,id,createtime from gn_raiders where belong = ".$g_id.' '.$where." order by createtime desc limit ".$Page->firstRow.','.$Page->listRows);

        foreach ($data as $key =>& $value) {
            $newstime = strtotime($value['createtime']);
            $value['createtime'] = date("Y-m-d",$newstime);     
        }

        $this -> assign('page',$Page->show());
        $this -> assign('data',$data);
        $this -> assign('g_id',$g_id);
        A("Index")->lastinfo();
        $this -> display();
    }

    public function getAll($g_id='',$limit=5){
        if($g_id!=''){
            $where = "where belong = '".$g_id."'";
        }else{
            $where = '';
        }
        $news = M('raiders');
        $data = $news -> query("select * from gn_news ".$where."order  createtime desc limit ".$limit);
        return $data;
    }

    public function details(){
        $this -> SetCsrf(rand(0,9999));
        $news = M('raiders');
        $map['id'] = $_GET['id'];
        $data = $news -> where($map) -> find();
        $newstime = strtotime($data['createtime']);
        $data['createtime'] = date("Y-m-d",$newstime);
        $this -> assign('news',$data);
        $this -> display();
        A("Index")->lastinfo();
    }

}