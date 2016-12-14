<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="/th_g/Public/home/css/comment.css"/>
		<link rel="stylesheet" type="text/css" href="/th_g/Public/home/css/news2.css"/>
		<link rel="stylesheet" type="text/css" href="/th_g/Public/home/css/glass.css">
	</head>
	<body>
      <div class="header">
          <div class="navbar">
                <div class="brand-center">
                <a href="/th_g/index.php/index/home"> <img class="logo" src="/th_g/Public/home/images/logo.png"></a>
              </div>

              <div class="nav">
                  <div class="nav1">
                    <ul class="nav-left home-block">
                      <li><a href="/th_g/index.php/index/home">官网首页</a>
                        <i class="icon">/</i>
                      </li>
                      <li>
                        <a href="/th_g/index.php/view">影视中心</a><i class="icon">/</i><img   class="tj" src="/th_g/Public/home/images/tj.png">
                          
                      </li>
                      <li class="shouye "><a href="/th_g/index.php/guide">游戏资料</a><i class="icon">/</i><img   class="tj-block" src="/th_g/Public/home/images/tj.png">
                      
                      </li>
                      <li>
                        <a href="http://localhost/th_l/">互动社区</a><i class="icon">/</i><img   class="tj" src="/th_g/Public/home/images/tj.png">
                          
                      </li>
                      <li class="drop">
                        <a href="#">官方渠道</a>
                          <div class="sub_menu">
                              <img class="jiantou"src="/th_g/Public/home/images/jiantou.png">
                              <div class="appluntan">
                                <a href=""> </a>
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



        </div>
			 
		</div>
		<div class="content">
			<div class="contentArea beCenter">
				<div class="contentBar">
					<div class="contentBarModule">
						<div class="contentBarTitle">下载游戏</div>
						<div class="contentBarCode">
							<img src="/th_g/Public/home/images/erm.png"/>
							扫一扫下载游戏
						</div>
					</div>
					<div class="contentBarModule">
						<div class="contentBarTitle">近期热点</div>
						<div class="contentBarCode contentBarRound">
							<img src="/th_g/Public/home/images/img13.png"/>
							<ul>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
					</div>
					<div class="contentBarModule contentBarHot">
						<div class="contentBarTitle">
							社区热点
							<span>查看更多</span>
						</div>
						<ul>
							<?php if(is_array($hot_p)): foreach($hot_p as $key=>$p): ?><li>
									<img src="/th_g/Public/<?php echo ($p["pic"]); ?>"/>
									<?php echo ($p["title"]); ?>
								</li><?php endforeach; endif; ?>
						</ul>
						<?php if(is_array($hot_t)): foreach($hot_t as $key=>$t): ?><div class="contentBarHotTalk">
							<img class="tx1" src="/th_g/Public/<?php echo ($t["pic"]); ?>" width="50" height="45">
							<div class="contentBarHotTalkUid"><?php echo ($t["author"]); ?></div>
							<div class="contentBarHotTalkQuestion"><?php echo ($t["title"]); ?></div>
							<div class="contentBarHotTalkTime"><?php echo ($t["time"]); ?></div>
							</div><?php endforeach; endif; ?>
					</div>
					<div class="contentBarModule contentBarEwm">
						<div class="contentBarTitle">官方媒体</div>
						<ul>
							<li>
								<img src="/th_g/Public/home/images/erm.png"/>
								<span>微信公众号</span>
							</li>
							<li>
								<img src="/th_g/Public/home/images/erm.png"/>
								<span>官方微博</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="contentTitleArea beCenter">
					<a href="/th_g/index.php/Guide/index/pageId/<?php echo ($_GET['page']); ?>/where/<?php echo ($_GET['where']); ?>"><img class="beBack" src="/th_g/Public/home/images/fanhui.png" /></a>
					<div class="contentTitle"><?php echo ($news["title"]); ?></div>
					<div class="contentTime"><?php echo (date("Y-m-d H:i:s",$news["createtime"])); ?></div>
					<div>
					
					<!-- JiaThis Button BEGIN -->
					<div class="jiathis_style_24x24">
						<a class="jiathis_button_cqq"></a>
						<a class="jiathis_button_weixin"></a>
						<a class="jiathis_button_qzone"></a>
						<a class="jiathis_button_tsina"></a>
						<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
					</div>
					<script type="text/javascript">
					var jiathis_config = {
						url:"http://www.baidu.com",
					    title:"<?php echo ($news["title"]); ?>",
					    summary:"123",
					};
					</script>
					<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
					<!-- JiaThis Button END -->



<!-- 

						<img src="/th_g/Public/home/images/qq.png"/>
						<img src="/th_g/Public/home/images/qq.png"/>
						<img src="/th_g/Public/home/images/qq.png"/>
						<img src="/th_g/Public/home/images/qq.png"/> -->
					</div>
				</div>
				<div class="contentTextArea beCenter">
					<div>
						<?php echo ($news["content"]); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="footerText beCenter">
				温馨提示:本游戏适合18岁（含）以上玩家娱乐  抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防受骗上当 适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活
			</div>
		</div>
	</body>
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	    <script type="text/javascript">
    $(document).ready(function(){
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
      //鼠标移入停止移除播放
      var $bannerle = $(".banner-left");
      $bannerle.mouseover(function(){
        clearInterval(timer);
      })      
      $bannerle.mouseout(function(){      
        timer = setInterval(function(){
          change()
        },1000)       
      })
      $(".headCenter ul li a").on("click",function() {
        $(".popup").css("visibility","visible");
      });


    });
    </script>
</html>