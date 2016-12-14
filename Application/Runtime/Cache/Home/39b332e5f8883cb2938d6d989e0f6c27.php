<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>三生三世十里桃花</title>

<link rel="stylesheet" href="/th_g/Public/home/css/main.css" />

<!-- Bootstrap -->
<!-- <link href="/th_g/Public/home/css/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="/th_g/Public/home/css/home.css">
<link href="/th_g/Public/home/assets/css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/th_g/Public/home/css/comment.css"/>

<link rel="stylesheet" href="/th_g/Public/home/css/jquery.fancybox.css" type="text/css" media="screen" />
<!-- <link rel="stylesheet" href="/th_g/Public/home/css/lanrenzhijia.css" type="text/css" media="screen" /> -->

</head>
<body class="front parallax">

<section class="header">
	<div class="navbar">
		<div class="brand-center">
			<a href="#"> <img class="logo" src="/th_g/Public/home/images/logo.png"></a>
		</div>
		<div class="nav">
				<div class="nav1">
					<ul class="nav-left home-block">
						<li class="shouye "><a href="/th_g/index.php/index/home">官网首页</a>
							<i class="icon">/</i><img  class="tj-block" src="/th_g/Public/home/images/tj.png">
						</li>
						<li >
							<a href="/th_g/index.php/view">影视中心</a><i class="icon">/</i><img class="tj" src="/th_g/Public/home/images/tj.png">	
						</li>
						<li><a href="/th_g/index.php/guide">游戏资料</a><i class="icon">/</i><img class="tj" src="/th_g/Public/home/images/tj.png">
						</li>
						<li>
							<a href="http://localhost/th_l/">互动社区</a><i class="icon">/</i><img class="tj" src="/th_g/Public/home/images/tj.png">
						</li>
						<li class="drop">
							<a href="#">官方渠道</a>
								<div class="sub_menu">
										<img class="jiantou"src="/th_g/Public/home/images/jiantou.png">
										<div class="appluntan">
											<a href="">	</a>
										</div>
										<div>
											<p class="officialForum">官方论坛</p>
											<img src="/th_g/Public/home/images/guanfangweibo.png">
											<p class="officialForum2">官方微博</p>
											<img src="/th_g/Public/home/images/guanwangweixin.png">
											<p class="officialForum3">官网微信</p>
											<p class="officialForum4">204422345(1群)</p>
											<p>官网QQ群</p>
										</div>
								</div>
						</li>
					</ul>
					
				</div>
				
			</div>
	</div>
	
			

    <div class="activityRing">
    	<div class="activityRingErWeiMa">
    		<img class="img04" src="/th_g/Public/home/images/img04.png">
    	</div>
    	
    	<div class="activiyRingXiaZai">
    		<img class="ios iosImg"src="/th_g/Public/home/images/ios.png">
    		<img class="ios"src="/th_g/Public/home/images/Android.png">
    	</div>
    </div>
</section>

    <div class="sequence-wrapper">
    	<div class="container">
    		<div class="top-wrapper">

					<div class="activity-area">
				    	<img src="/th_g/Public/home/images/area.png">
				    	<img class="hzqu"src="/th_g/Public/home/images/hzqu.png">
				    	<img class="flower1"src="/th_g/Public/home/images/flower1.png">
				    	<div>

				    		<img class="huod1"src="/th_g/Public/home/images/huod1.png">
				    		<h2 class="text1"><img src="/th_g/Public/home/images/text1.png"></h2>
				    		<p class="time">【每日12-13点，21-22点】</p>
				    		<img class="fox1"src="/th_g/Public/home/images/fox1.png">
				    	</div>
				    	<div>
				    		<img class="huod2"src="/th_g/Public/home/images/huod2.png">
				    		<img class="fox2"src="/th_g/Public/home/images/fox2.png">
				    	</div>
				    	<div>
				    		<img class="huod3"src="/th_g/Public/home/images/huod3.png">
				    		<img class="fox3"src="/th_g/Public/home/images/fox3.png">
				    	</div>
				    	<div>
				    		<img class="huod4"src="/th_g/Public/home/images/huod4.png">
				    		<img class="fox4"src="/th_g/Public/home/images/fox4.png">
				    	</div>
				    	<div>
				    		<img class="huod5"src="/th_g/Public/home/images/huod5.png">
				    		<img class="fox5"src="/th_g/Public/home/images/fox5.png">
				    	</div>
				    	<img class="flower2"src="/th_g/Public/home/images/flower2.png">
				    </div>

					    			<div class="right-wrapper">
    				<div class="left-hotspot">
    					<div class="caption">
    						<h2>社区热点</h2>
    						<p class="clearfix"><a class="btn btn-glass pull-right" href="#">查看更多<img src="/th_g/Public/home/images/img01.png"></a></p>
    					</div>
    					<div class="head">
    						<?php if(is_array($hot_p)): foreach($hot_p as $key=>$p): ?><dl>
		    						<dt><img src="/th_g/Public/<?php echo ($p["pic"]); ?>" width="160" height="120"></dt>
		    						<dd><?php echo ($p["title"]); ?></dd>
		    					</dl><?php endforeach; endif; ?>
    					</div>
    					<!-- <div class="head-c">
    						<?php if(is_array($hot_t)): foreach($hot_t as $key=>$t): ?><dl class="headDl">
    						    							<dt>
    						    								<img src="/th_g/Public/<?php echo ($t["pic"]); ?>" width="50" height="50">
    						    							</dt>
    						    							<dd>
    						    								<div class="hp">
    						    									<h4><?php echo ($t["author"]); ?></h4>
    						    									<p><?php echo ($t["title"]); ?></p>
    						    								</div> 							
    						   								   <span><?php echo ($t["time"]); ?></span>
    						    							</dd>
    						    						</dl><?php endforeach; endif; ?>
    					</div> -->

					<div class="head-c">
					<?php if(is_array($hot_t)): foreach($hot_t as $key=>$t): ?><div class="headCenterDl">   							
	    							<img src="/th_g/Public/<?php echo ($t["pic"]); ?>">
	    							<div class="headCenterDiv">
		    							<div class="hp">
	    									<h4><?php echo ($t["author"]); ?></h4>
	    									<p><?php echo ($t["title"]); ?></p>
	    								</div> 
	    								<span><?php echo ($t["time"]); ?></span>	
	    							</div>
	    								
    						</div><?php endforeach; endif; ?>	
    				</div>




    				</div>
					 <div class="right-game">
    			    	<h2 class="game-v">游戏视频</h2>
			    	<div class="Video-top">
			    		<div class="Video-t">   			    			
			    			<img src="/th_g/Public/<?php echo ($view["pic"]); ?>" width="218" height="148" alt="tour" style="margin-bottom:4px" />
			    		</div>
			    		<a href="/th_g/Public/<?php echo ($view["src"]); ?>" class="video_link"><button type="button" class="ClickMe"><img class="sp2" src="/th_g/Public/home/images/sp2.png"></button></a>
    			    		
			    	</div>
			    	<div class=" banner-right">
	    			    	<ul class="banner-img2">
	    			    	<?php if(is_array($pic)): foreach($pic as $key=>$p): ?><li><a href="#"><img src="/th_g/Public/<?php echo ($p["image"]); ?>"></a></li><?php endforeach; endif; ?>
	    			    	</ul>
    			    		
    			    			<ul class="img201">
    			    				<?php if(is_array($pic)): foreach($pic as $key=>$p): if($k == 0): ?><li class="ac201"></li>
										<?php else: ?>
											<li></li><?php endif; endforeach; endif; ?>
					    		</ul>

    			    </div>
    			</div>
    			<div class="bottom-wrapper">
    				<ul class="news">
    					<?php if(is_array($news)): foreach($news as $k=>$n): if($k == 0): ?><li class="news-li">
							<?php else: ?>
							<li><?php endif; ?>
							<a href="/th_g/index.php/news/details/id/<?php echo ($n["id"]); ?>/page/1"><span>[<?php echo ($n["name"]); ?>]</span><?php echo ($n["title"]); ?></a><?php endforeach; endif; ?>
    				</ul>
    			</div>
    		</div>
    	</div>
    </div>
 <section class="outer-wrapper container">
	    <div class="container">
	    	<div class="row featured">
		    	<div class=" caption2">
    						<h2>游戏衍生品</h2>
    						<!-- <img src="/th_g/Public/home/images/btnzuo.png"> -->
    						<!-- <p class="clearfix"><a class="btn btn-glass pull-right" href="#">查看更多<img src="/th_g/Public/home/images/img01.png"></a></p> -->
    			</div>
    			<?php if(is_array($commodity)): foreach($commodity as $k=>$data): ?><div class="span4">
						<a href="<?php echo ($data["url"]); ?>"  target="_blank">
				          <article class="thumbnai<?php echo ($k+1); ?>">
				            <img src="/th_g/Public/<?php echo ($data["src"]); ?>" alt="<?php echo ($data["url"]); ?>">
				            <div class="caption-z">  
				              <h3><?php echo ($data["name"]); ?></h3>

				            </div>
				          </article>
			          	</a>
			        	</div><?php endforeach; endif; ?>
		        </div>
		    </div>
		    <div class="row featured-right">
		    	<img class="bg3" src="/th_g/Public/home/images/bg3.png">
		    	<a href="/th_g/index.php/guide/index/where/9"><img class="Newbie1" src="/th_g/Public/home/images/Newbie1.png"></a>
		    	<a href="/th_g/index.php/guide"><img class="Newbie2" src="/th_g/Public/home/images/Newbie2.png"></a>
				<a href=""><img class="Newbie3" src="/th_g/Public/home/images/Newbie3.png"></a>
				<a href="/th_g/index.php/guide"><img class="Newbie4" src="/th_g/Public/home/images/Newbie4.png"></a>

		    </div>
	    </div>
     </section>
    <section class=" carousel container">
	    <div class="container">
	    	<div class="row">
	    		<div class="kapai">
	    			<div class="prev"><i class="icon-angle-left icon-white"><img src="/th_g/Public/home/images/btn1.png"></i></div>
            		<div class="next"><i class="icon-angle-right icon-white"><img src="/th_g/Public/home/images/btn2.png"></i></div>
            		<div class="ani-c">
            			<div class="kapai01">
	            			<img src="/th_g/Public/home/images/kapai01.png">
	            		</div>
	            		<div class="kapai01">
	            			<img src="/th_g/Public/home/images/kapai02.png">
	            		</div>
	            		<div class="kapai01">
	            			<img src="/th_g/Public/home/images/kapai03.png">
	            		</div>
	            		<div class="kapai01 ">
	            			<img src="/th_g/Public/home/images/kapai04.png">
	            		</div>
	            		<div class="kapai01 ">
	            			<img src="/th_g/Public/home/images/kapai05.png">
	            		</div>
            		</div>
            		
	    		</div>
	    	</div>
	    </div>
	</section>
	<div class="container-fluid">
	  <div class="row-fluid">
	    <div class="span2">
	      <!--Sidebar content-->
	      	<div class="wallpaper" value="1">
	      			<img src="/th_g/Public/home/images/tuImg01.png">      	
		      		<!-- <a href="javascript:void(0)">			      		
			      		<img src="/th_g/Public/home/images/tuImg11.png">
		      		</a>   
	     	      	<a class="tuImg03">
			      			<img src="/th_g/Public/home/images/tuImg01.png">
			      	</a>  --> 			      		
	      	</div>
	      	<div class="wallpaper" value="2">  
	      			<img src="/th_g/Public/home/images/tuImg12.png">    
	      			<!-- <a href="javascript:void(0)">
			      		<img src="/th_g/Public/home/images/tuImg12.png">
		      		</a>
		      		<div class="tuImg03">
			      			<img src="/th_g/Public/home/images/tuImg02.png">
			      	</div>  -->          		
	      	</div>
	      	<div class="wallpaper" value="3">
	      			<img src="/th_g/Public/home/images/tuImg13.png">
	      			<!-- <a href="javascript:void(0)">
			      		<img src="/th_g/Public/home/images/tuImg13.png">			      		
		      		</a> 
		      		<div class="tuImg03">
			      			<img src="/th_g/Public/home/images/tuImg03.png">
			      	</div>  -->       		
	      	</div>
	      	
	      	<a href="/th_g/index.php/picture">
	      	<div class="wallpaper" value="0">    
	      			<img src="/th_g/Public/home/images/tuImg10.png">  
	      			<!-- <a href="/th_g/index.php/picture">
			      		<img src="/th_g/Public/home/images/tuImg10.png">
		      		</a>
		      		<div class="tuImg03">
			      			<img src="/th_g/Public/home/images/tuImg00.png">
			      	</div>     -->       		
	      	</div>
	      	</a>
	    </div>
	    <div class="span10">
	      <!--Body content-->
	      		<div class="tuku" id="pic1">
	      			<?php if(is_array($pic1)): foreach($pic1 as $key=>$p1): ?><dl class="tu1">
    					<a href="/th_g/index.php/picture/index/where/-1">
    						<dt><img src="/th_g/Public/<?php echo ($p1["picture"]); ?>" width="235" height="140"></dt>
    						<dd><?php echo ($p1["title"]); ?></dd>
						</a>
    					</dl><?php endforeach; endif; ?>
				</div>
				<div class="tuku" id="pic3" hidden>
		      		<?php if(is_array($pic2)): foreach($pic2 as $key=>$p2): ?><dl class="tu1">
		    					<a href="/th_g/index.php/picture/index/where/-3">
		    						<dt><img src="/th_g/Public/<?php echo ($p2["picture"]); ?>" width="235" height="140"></dt>
		    						<dd><?php echo ($p2["title"]); ?></dd>
	    						</a>
		    					</dl><?php endforeach; endif; ?>
				</div>
				<div class="tuku" id="pic2" hidden>
		      		<?php if(is_array($pic3)): foreach($pic3 as $key=>$p3): ?><dl class="tu1">
		    					<a href="/th_g/index.php/picture/index/where/-2">
		    						<dt><img src="/th_g/Public/<?php echo ($p3["picture"]); ?>" width="235" height="140"></dt>
		    						<dd><?php echo ($p3["title"]); ?></dd>
	    						</a>
		    					</dl><?php endforeach; endif; ?>
				</div>
				<div class="tuku" id="pic4" hidden>
		      		<?php if(is_array($pic4)): foreach($pic4 as $key=>$p4): ?><dl class="tu1">
		    						<dt><img src="/th_g/Public/<?php echo ($p4["picture"]); ?>" width="235" height="140"></dt>
		    						<dd><?php echo ($p4["title"]); ?></dd>
		    					</dl><?php endforeach; endif; ?>
				</div>		      
			</div>
	    </div>
	</div>
	<div class="row-logo">
		<img  class="footer-logo1" src="/th_g/Public/home/images/link.png">
		<img class="footer-logo1" src="/th_g/Public/home/images/link.png">
		<img class="footer-logo1" src="/th_g/Public/home/images/link.png">
		<img class="footer-logo1" src="/th_g/Public/home/images/link.png">
		<img class="footer-logo1" src="/th_g/Public/home/images/link.png">
		<img class="footer-logo1 log" src="/th_g/Public/home/images/link.png">
		<img class="footer-logo1" src="/th_g/Public/home/images/link.png">
		<img class="footer-logo1" src="/th_g/Public/home/images/link.png">
		<img class="footer-logo1" src="/th_g/Public/home/images/link.png">
		<img class="footer-logo1" src="/th_g/Public/home/images/link.png">
		<img class="footer-logo1" src="/th_g/Public/home/images/link.png">
		<img class="footer-logo1 log" src="/th_g/Public/home/images/link.png">
	</div>

	<footer class="footer-credits">
		<div class="container">
			<div class="glass-modal">
				<div class="modal modal-header">
					<img src="/th_g/Public/home/images/logo2.png">
				</div>
				<div class="modal modal-body">
					<div class="telephone ">
						<img class="tell tel" src="/th_g/Public/home/images/pt.png">
						<div class="tell">
							<p>客户服务</p>
							<span><img src="/th_g/Public/home/images/tel0.png"></span>
						</div>
						
					</div>
					<div class="share">
						<a href=""><img class="wb" src="/th_g/Public/home/images/footer-qq.png"></a>
						<a href=""><img class="wb" src="/th_g/Public/home/images/footer-weixin.png"></a>
						<a href=""><img class="wb" src="/th_g/Public/home/images/footer-k.png"></a>
						<a href=""><img class="wb" src="/th_g/Public/home/images/footer-weibo.png"></a>
					</div>
				</div>
				<div class="modal modal-footer1">
					<img class="weixin erm" src="/th_g/Public/home/images/weixin.png">
				
				</div>
				<div class="modal modal-footer2">
					<img src="/th_g/Public/home/images/weibo.png">
				</div>
			</div>
			
		</div>
	</footer>
	<footer class="footer">		
		<p class="add">
			温馨提示： 本游戏适合18岁（含）以上玩家娱乐  抵制不良游戏   拒绝盗版游戏   注意自我保护  谨防受骗上当  适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活
		</p>
	</footer>



<!-- <div id="wrapper">
  
  <div id="videoswrap">
    <ul id="videos">
      <li> <a href="/th_g/Public/home/1.mp4" class="video_link"><img src="/th_g/Public/home/images/01.jpg" width="218" height="148" alt="tour" style="margin-bottom:4px" /></a> </li>
    </ul>
  </div>
  
</div> -->
	
	
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script> -->
    <!-- <script src="/th_g/Public/home/js/jquery.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="/th_g/Public/home/js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="/th_g/Public/home/js/flowplayer-3.1.1.min.js"></script>
	<script type="text/javascript" src="/th_g/Public/home/js/jquery.fancybox-1.2.1.pack.js"></script>
	<script type="text/javascript" src="/th_g/Public/home/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="/th_g/Public/home/js/fancyplayer.js"></script>
	
    <script src="/th_g/Public/home/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/th_g/Public/home/js/index.js"></script>
    <script type="text/javascript">
	var videopath = "";
	var swfplayer = videopath + "/th_g/Public/home/videos/flowplayer-3.1.1.swf";

	</script>
    <script>
	    $(function(){
	    	$(".wallpaper").mouseover(function(){
	    		var id = $(this).attr("value");
	    		if(id != '0'){
	    			$(".wallpaper").each(function(){
	    				$(this).children("img").attr("src","/th_g/Public/home/images/tuImg1"+$(this).attr('value')+".png");
	    			});
	    			$(this).children("img").attr("src","/th_g/Public/home/images/tuImg0"+id+".png");
	    			$(".tuku").hide();
	    			$("#pic"+id).show();
	    		}else{
	    			$(this).children("img").attr("src","/th_g/Public/home/images/tuImg0"+id+".png");
	    		}
	    	})
	    	$(".wallpaper").mouseleave(function(){
	    		var id = $(this).attr("value");
	    		if(id == '0'){
	    			$(this).children("img").attr("src","/th_g/Public/home/images/tuImg1"+id+".png");
	    		}
	    	})
	    })
    </script>
	<script type="text/javascript">
	$(function){
		var $sub_menu = $(".sub_menu");
		var $drop = $(".drop")
		$drop.mouseover(function(){
			$(this).find(".sub_menu").css("display","block");
		})
		$drop.mouseout(function(){
			$sub_menu.css("display","none");
		})
		$(".drop .sub_menu").mouseover(function(){
			$(this).css("display","block");

		})
		$(".drop .sub_menu").mouseout(function(){
			$(this).css("display","none")
		});
	</script>
	
	


  <script type="text/javascript">
  var curIndex = 0, //当前index
      imgLen = $(".banner-img2 li").length; //图片总数
     // 定时器自动变换2.5秒每次
  var autoChange = setInterval(function(){ 
    if(curIndex < imgLen-1){ 
      curIndex ++; 
    }else{ 
      curIndex = 0;
    }
    //调用变换处理函数
    changeTo(curIndex); 
  },2500);
   //左箭头滑入滑出事件处理
  $("#prev").hover(function(){ 
    //滑入清除定时器
    clearInterval(autoChange);
  },function(){ 
    //滑出则重置定时器
    autoChangeAgain();
  });
  //左箭头点击处理
  $("#prev").click(function(){ 
    //根据curIndex进行上一个图片处理
    curIndex = (curIndex > 0) ? (--curIndex) : (imgLen - 1);
    changeTo(curIndex);
  });
  //右箭头滑入滑出事件处理
  $("#next").hover(function(){ 
    //滑入清除定时器
    clearInterval(autoChange);
  },function(){ 
    //滑出则重置定时器
    autoChangeAgain();
  });
  //右箭头点击处理
  $("#next").click(function(){ 
    curIndex = (curIndex < imgLen - 1) ? (++curIndex) : 0;
    changeTo(curIndex);
  });
  //对右下角按钮index进行事件绑定处理等
  $(".img201").find("li").each(function(item){ 
    $(this).hover(function(){ 
      clearInterval(autoChange);
      changeTo(item);
      curIndex = item;
    },function(){ 
      autoChangeAgain();
    });
  });
  //清除定时器时候的重置定时器--封装
  function autoChangeAgain(){ 
      autoChange = setInterval(function(){ 
      if(curIndex < imgLen-1){ 
        curIndex ++;
      }else{ 
        curIndex = 0;
      }
    //调用变换处理函数
      changeTo(curIndex); 
    },2500);
    }
  function changeTo(num){ 
    var goLeft = num * 400;
    $(".banner-img2").animate({left: "-" + goLeft + "px"},10);
    $(".infoList").find("li").removeClass("infoOn").eq(num).addClass("infoOn");
    $(".img201").find("li").removeClass("ac201").eq(num).addClass("ac201");
  }
  </script>

<p style="text-align:center; font-size:12px;">&nbsp;</p>
<div style="display:none;">
<script src="http://s20.cnzz.com/stat.php?id=3992412&web_id=3992412&show=pic" language="JavaScript"></script>
</body>
</html>