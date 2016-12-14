<?php
namespace Home\Controller;
use Think\Controller;
class GuideController extends Controller {
	 public function index(){
        $news = M('guide');
        if(isset($_GET['where']) && !empty($_GET['where'])){
            $where = "where type = ".$_GET['where'];
            $this -> assign("where","/where/".$_GET['where']);
            $count =$news -> where("type = ".$_GET['where']) ->count();
        }else{
            $where = "";
            $this -> assign("where",$where);
            $count =$news ->count();
        }
             
        //分页部分
        //总条数
        
        //获取分页数
        $pageId = I("get.pageId");
        $pageId = $pageId == "" ? 1 : $pageId;
        //设置分页显示条数
        $listCount = 5;
        //总页数
        $pageCount = ceil($count / $listCount);
        //偏移量
        $limit = $listCount * ($pageId-1);
        //上一页
        if($pageId == 1){
            $pagePrevious = $pageId;
        }else{
            $pagePrevious = $pageId-1;
        }
        //下一页
        if($pageId == $pageCount){
            $pageNext = $pageCount;
        }else{
            $pageNext = $pageId+1;  
        }
        //数据
        $data = $news -> query("select title,content,id,is_top from th_guide ".$where." order by is_top desc , create_time desc limit ".$limit.','.$listCount);

        $this->assign('pagePrevious',$pagePrevious); //上一页
        $this->assign('pageNext',$pageNext);    //下一页
        $this->assign('page',$pageId);  //当前页
        $this -> assign('data',$data);


        //社区图片热点
        $hot_p = A("Hotspot") -> hot_p(4);

        //社区文字热点
        $hot_t = A("Hotspot") -> hot_t(4);

        $this -> assign("hot_p",$hot_p);
        $this -> assign("hot_t",$hot_t);
        $this -> display();
    }


    public function details(){
        $news = M('guide');
        $map['id'] = $_GET['id'];
        $data = $news -> where($map) -> find();
        $this -> assign('news',$data);

        //社区图片热点
        $hot_p = A("Hotspot") -> hot_p(4);
        //社区文字热点
        $hot_t = A("Hotspot") -> hot_t(4);

        $this -> assign("hot_p",$hot_p);
        $this -> assign("hot_t",$hot_t);
        $this -> display();
    }


    //查询置顶新闻
    public function top($limit){
        $news = M('guide');
        return $news -> join("th_tname on th_guide.type = th_tname.identification")-> where("th_guide.is_top = 1") -> order("th_guide.createtime DESC") -> limit($limit) -> select();
    }
	 
}