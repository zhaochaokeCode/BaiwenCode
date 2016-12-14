<?php
namespace Home\Controller;
use Think\Controller;
class PictureController extends Controller {
	//展示美术中心页
	public function index(){


		$picture = M("view"); 
        if(isset($_GET['where']) && !empty($_GET['where'])){
            $where = "type = ".$_GET['where'];
            $this -> assign("where","/where/".$_GET['where']);
            $count =$picture -> where("type = ".$_GET['where']." AND type < 0") -> count();
        }else{
            $where = "";
            $this -> assign("where",$where);
            $count =$picture -> where("type <0") ->count();
        } 
        //分页部分
        //总条数
        //获取分页数
        $pageId = I("get.pageId");
        $pageId = $pageId == "" ? 1 : $pageId;
        //设置分页显示条数
        $listCount = 6;
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
        if($where != ''){
			$data = $picture -> where("type < 0") -> where($where) ->limit("$limit,$listCount") ->order("update_time DESC") -> select();
        }else{
        	$data = $picture -> where("type < 0")  ->limit($limit.",".$listCount) ->order("update_time DESC") -> select();
        }
       
        $this->assign('pagePrevious',$pagePrevious); //上一页
        $this->assign('pageNext',$pageNext);    //下一页
        $this->assign('page',$pageId);  //当前页
        $this->assign('pageCount',$pageCount);  //总页数
        $this->assign('count',$count);
        $this -> assign('data',$data);
        //社区图片热点
        $hot_p = A("Hotspot") -> hot_p(4);

        //社区文字热点
        $hot_t = A("Hotspot") -> hot_t(4);

        $this -> assign("hot_p",$hot_p);
        $this -> assign("hot_t",$hot_t);

        //所有图片
        $pic_all = $this -> pic_all($where);
        $this -> assign("pic_all",$pic_all);
		$this -> display();
	}


    function pic_all($where){
       $picture = M("view"); 
       if($where != ''){
            return $picture -> where("type < 0") -> where($where) ->order("update_time DESC") -> select();
       }
       return $picture -> where("type < 0") ->order("update_time DESC") -> select();
    }


}