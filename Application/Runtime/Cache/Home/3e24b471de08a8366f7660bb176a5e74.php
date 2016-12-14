<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>news</title>

    <!-- Bootstrap -->
    <link href="/th_g/Public/home/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/th_g/Public/home/css/news.css">
    <link rel="stylesheet" type="text/css" href="/th_g/Public/home/css/glass.css">
    <link rel="stylesheet" type="text/css" href="/th_g/Public/home/css/comment.css"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="front parallax">
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
                      <li><a href="/th_g/index.php/guide">游戏资料</a><i class="icon">/</i><img   class="tj" src="/th_g/Public/home/images/tj.png">
                      
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


      <section class="new">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span10">
                      <h2>-------   新闻资讯  -------</h2>
                     <div class="message">
                     <a href="/th_g/index.php/news">
                     <?php if($_GET["where"] == ''): ?><div class="fireImg" value="new">
                            <img class="news1" src="/th_g/Public/home/images/new.png">
                            
                        </div>
                     <?php else: ?>
                      <div class="picImg" value="new">
                                <img class="news1 news2" src="/th_g/Public/home/images/new01.png">
                                <!-- <div class="slide">
                                   <a href=""><img src="/th_g/Public/home/images/news00.png"></a>
                               </div>  --> 
                          </div><?php endif; ?>
                        
                     </a>
                     <a href="/th_g/index.php/news/index/where/5">
                     <?php if($_GET["where"] == 5): ?><div class="fireImg" value="new">
                            <img class="news1" src="/th_g/Public/home/images/imgNew.png">
                        </div>
                     <?php else: ?>
                         <div class="picImg" value="news">
                                <img class="news1 news2" src="/th_g/Public/home/images/news01.png">
                                <!-- <div class="slide">
                                   <a href=""><img src="/th_g/Public/home/images/news00.png"></a>
                               </div>  --> 
                          </div><?php endif; ?>
                     </a>
                     <a href="/th_g/index.php/news/index/where/6">
                     <?php if($_GET["where"] == 6): ?><div class="fireImg" value="new">
                            <img class="news1" src="/th_g/Public/home/images/imgAffiche.png">
                        </div>
                     <?php else: ?>
                     <div class="picImg" value="gonggao">
                           <img class="news1 news2" src="/th_g/Public/home/images/gonggao01.png">
                           <!-- <div class="slide">
                               <a href=""><img src="/th_g/Public/home/images/gonggao00.png"></a>
                           </div>  --> 
                        </div><?php endif; ?>
                        
                     </a>
                     <a href="/th_g/index.php/news/index/where/7">
                     <?php if($_GET["where"] == 7): ?><div class="fireImg" value="new">
                            <img class="news1" src="/th_g/Public/home/images/imgActivity.png">
                        </div>
                     <?php else: ?>
                       <div class="picImg" value="present">
                           <img class="news1 news2" src="/th_g/Public/home/images/present01.png">
                           <!-- <div class="slide">
                               <a href=""><img src="/th_g/Public/home/images/present00.png"></a>
                           </div>  --> 
                        </div><?php endif; ?>
                       
                     </a>
                     <a href="/th_g/index.php/news/index/where/8">
                     <?php if($_GET["where"] == 8): ?><div class="fireImg" value="new">
                            <img class="news1" src="/th_g/Public/home/images/imgMedia.png">
                        </div>
                      <?php else: ?>
                      <div class="picImg" value="bubbles">
                          <img class="news1 news2" src="/th_g/Public/home/images/bubbles01.png">
                          <!-- <div class="slide">
                               <a href=""><img src="/th_g/Public/home/images/bubbles00.png"></a>
                           </div>   -->
                        </div><?php endif; ?>
                     </a>
                        
                      </div>
                    </div>
                    <div class="row-news">
                      <?php if(is_array($data)): foreach($data as $key=>$news): ?><div class="featured">
                            <div class="featured-left">
                             <a href="javascript:video(0)"> <h4>最新</h4></a>
                            </div>
                            <div class="featured-right" >
                              <a href="/th_g/index.php/News/details/id/<?php echo ($news["id"]); ?>/page/<?php echo ($page); ?>/where/<?php echo ($_GET['where']); ?>"><h4><?php echo ($news["title"]); ?></h4></a>
                              <p><?php echo (mb_substr(strip_tags(htmlspecialchars_decode($news["content"])),0,190,'utf-8')); ?>...</p>
                            </div>
                        </div><?php endforeach; endif; ?>

                    <div class="qiehuan">
                      <a href="/th_g/index.php/News/index/pageId/<?php echo ($pagePrevious); echo ($where); ?>"><img class="qieh" src="/th_g/Public/home/images/qieh.png"></a>
                      <a href="/th_g/index.php/News/index/pageId/<?php echo ($pageNext); echo ($where); ?>"><img class="qieh qieh2" src="/th_g/Public/home/images/qieh2.png"></a>
                    </div>
                  </div>
                </div>



            <div class="fluid-right">
                <div class="download">
                  <img class="xiaz"src="/th_g/Public/home/images/xiaz.png">
                  <img class="sys"src="/th_g/Public/home/images/sys.png">
                </div>

                <div class="hot">
                  <img class="xiaz" src="/th_g/Public/home/images//red.png">
                  <div class="luobo">
                    <div class="luobo-img">
                      <img  src="/th_g/Public/home/images//img13.png">
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    
                  </div>
                </div>

                <div class="community">
                  <div class="right-wrapper">
                    <div class="left-hotspot">
                      <div class="caption">
                        <h4><img src="/th_g/Public/home/images//shequ.png"></h4>
                        <p class="clearfix"><a class="btn btn-glass pull-right" href="#">查看更多<img src="/th_g/Public/home/images//img01.png"></a></p>
                      </div>
                      <div class="head">
                      <?php if(is_array($hot_p)): foreach($hot_p as $key=>$p): ?><dl>
                          <dt><img src="/th_g/Public/<?php echo ($p["pic"]); ?>" width="135" height="110"></dt>
                          <dd><?php echo ($p["title"]); ?></dd>
                        </dl><?php endforeach; endif; ?>                
                      </div>
                      <div class="head-c">
                      <?php if(is_array($hot_t)): foreach($hot_t as $key=>$t): ?><dl>
                          <dt>
                            <img src="/th_g/Public/<?php echo ($t["pic"]); ?>" width="50" height="45">
                          </dt>
                          <dd>
                            <div class="hp">
                              <h4><?php echo ($t["author"]); ?></h4>
                              <p><?php echo ($t["title"]); ?></p>
                            </div>              
                             <span><?php echo ($t["time"]); ?></span>
                          </dd>
                        </dl><?php endforeach; endif; ?>
                      </div>
                    </div>
                  
                      
                  </div>

                </div>
                <div class="official">
                  <img class="xiaz"src="/th_g/Public/home/images//guanf.png">
                    <div class="offic">
                      <div class="erweima">
                        <img src="/th_g/Public/home/images//erm.png">
                        <img class="gzh"src="/th_g/Public/home/images//wxgz.png">
                    </div>
                    <div class="erweima2">
                        <img src="/th_g/Public/home/images//erm.png">
                        <img class="gzh"src="/th_g/Public/home/images//wbgz.png">
                    </div>
                  </div>
                  
                </div>

              </div>

              
        </div>
      </section>



      <footer class="footer">   
        <p class="footerText">
          温馨提示： 本游戏适合18岁（含）以上玩家娱乐  抵制不良游戏   拒绝盗版游戏   注意自我保护  谨防受骗上当  适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活
        </p>
      </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/th_g/Public/home/js/bootstrap.min.js"></script>
     <script>
    $(function(){
      $(".picImg").on("mouseover",function(){
          var type = $(this).attr("value");
          $(this).children("img").attr("src","/th_g/Public/home/images/"+type+"00.png");
      })
      $(".picImg").on("mouseleave",function(){
        var type = $(this).attr("value");
        $(this).children("img").attr("src","/th_g/Public/home/images/"+type+"01.png");
      });
    });
        
    </script>
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
  </body>
</html>