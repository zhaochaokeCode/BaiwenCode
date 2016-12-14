<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>影视中心</title>
<link rel="stylesheet" href="/th_g/Public/home/css/jquery.fancybox.css" type="text/css" media="screen" />
<!-- <link rel="stylesheet" href="/th_g/Public/home/css/lanrenzhijia.css" type="text/css" media="screen" /> -->
<!-- <link href="/th_g/Public/home/css/bootstrap/css/bootstrap.min.css" rel="stylesheet"/> -->
<link rel="stylesheet" type="text/css" href="/th_g/Public/home/css/comment.css"/>
<link rel="stylesheet" type="text/css" href="/th_g/Public/home/css/glass.css"/>
<link rel="stylesheet" type="text/css" href="/th_g/Public/home/css/movie.css">

<script type="text/javascript">
  var videopath = "";
  var swfplayer = videopath + "/th_g/Public/home/videos/flowplayer-3.1.1.swf";

</script>
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
          <i class="icon">/</i><img  class="tj" src="/th_g/Public/home/images/tj.png">
        </li>
        <li  class="shouye ">
          <a href="/th_g/index.php/view">影视中心</a><i class="icon">/</i><img class="tj-block" src="/th_g/Public/home/images/tj.png">  
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
                    <div class="span10">
                      <h2><span>———</span>  影视中心  <span>———</span></h2>
                     
                    </div>
                <div class="row-fluid">
                    <div class="row-news">
                        
                        <div class="center">
                          
                            <div class="container">
                                <div class="headCenter">
                                  <div class="movie">
                                     <ul>
                                     <?php if(is_array($data)): foreach($data as $key=>$v): ?><li>
                                            <a href="/th_g/Public/<?php echo ($v["view"]); ?>" class="video_link">
                                            <img src="/th_g/Public/<?php echo ($v["picture"]); ?>" width="1042" height="323" alt="tour" />
                                            </a>
                                              <div class="dask">
                                                  <div class="opacity"></div>
                                                  <div class="button">
                                                      <a href="/th_g/Public/home<?php echo ($v["view"]); ?>">
                                                      <button class="ClickMe"><img  src="/th_g/Public/home/images/button.png" ></button>
                                                      </a>
                                                  </div>
                                              </div>

       







                                        </li><?php endforeach; endif; ?>
                                     </ul>
                                  </div>
                                                
                               </div>
                            </div>
<!--                             <div class="qiehuan">
                                  <ul class="pagination">
                                      <li><a href="#">&laquo;</a></li>
                                      <li class="active"><a href="#">1</a></li>
                                      <li class="disabled"><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#">4</a></li>
                                      <li><a href="#">6</a></li>
                                      <li><a href="#">7</a></li>
                                      <li><a href="#">8</a></li>
                                      <li><a href="#">9</a></li>
                                      <li><a href="#">10</a></li>
                                      <li><a href="#">&raquo;</a></li>
                                  </ul>
                              </div> -->
                        </div>                 
                   
                  </div>
                </div>



            <div class="fluid-right  fluidRightMargin">
                <div class="download">
                  <img class="xiaz"src="/th_g/Public/home/images/xiaz.png">
                  <img class="sys"src="/th_g/Public/home/images/sys.png">
                </div>

                <div class="hot">
                  <img class="xiaz" src="/th_g/Public/home/images/red.png">
                  <div class="luobo">
                    <div class="luobo-img">
                      <img  src="/th_g/Public/home/images/img13.png">
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
                        <h4><img src="/th_g/Public/home/images/shequ.png"></h4>
                        <p class="clearfix"><a class="btn btn-glass pull-right" href="#">查看更多<img src="/th_g/Public/home/images/img01.png"></a></p>
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
                  <img class="xiaz"src="/th_g/Public/home/images/guanf.png">
                    <div class="offic">
                      <div class="erweima">
                        <img src="/th_g/Public/home/images/erm.png">
                        <img class="gzh"src="/th_g/Public/home/images/wxgz.png">
                    </div>
                    <div class="erweima2">
                        <img src="/th_g/Public/home/images/erm.png">
                        <img class="gzh"src="/th_g/Public/home/images/wbgz.png">
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
     <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/th_g/Public/home/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/th_g/Public/home/js/jquery.min.js"></script>






<p style="text-align:center; font-size:12px;">&nbsp;</p>
<div style="display:none;">


<script type="text/javascript" src="/th_g/Public/home/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="/th_g/Public/home/js/flowplayer-3.1.1.min.js"></script>
<script type="text/javascript" src="/th_g/Public/home/js/jquery.fancybox-1.2.1.pack.js"></script>
<script type="text/javascript" src="/th_g/Public/home/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/th_g/Public/home/js/fancyplayer.js"></script>
<script src="http://s20.cnzz.com/stat.php?id=3992412&web_id=3992412&show=pic" language="JavaScript"></script>
</body>
</html>