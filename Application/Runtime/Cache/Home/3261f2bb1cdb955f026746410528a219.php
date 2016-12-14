<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>三国志　ロード・オブ・バトル</title>
<link rel="stylesheet" type="text/css" href="/Public/home/css/style.css"/>
<script src="/Public/home/js/jquery-1.7.1.min.js"></script>
<script src="/Public/home/js/nav.js" type="text/javascript"></script>
</head>

<body class="san_subbody">
<div class="san_menu">
    <ul id="nav_all">
        <li><a href="/index.php/exnews" class="sanM1" name="toppp"></a></li>
        <li><a href="/index.php/desc" class="sanM2"></a>
            <div class="abso">
                <ul class="sanSub1">
                    <li><a href="/index.php/desc/index/type/ゲーム紹介" class="sanSubM11"></a></li>
                    <li><a href="/index.php/desc/index/type/初心者ガイド" class="sanSubM12"></a></li>
                    <li><a href="/index.php/desc/index/type/ゲームガイド" class="sanSubM13"></a></li>
                </ul>
            </div>
        </li>
        <li><a href="sdfsdf" class="sanM3"></a></li>
        <li><a href="sdfsdf" class="sanM4"></a>
            <div class="abso">
                <ul class="sanSub2">
                    <li><a href="ddfsdfdsf" class="sanSubM21"></a></li>
                    <li><a href="/index.php/question" class="sanSubM22"></a></li>
                    <li><a href="ddfsdfdsf" class="sanSubM23"></a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>
<div class="sanSubGohome"><a href="/index.php/index" title="サイトトップへ"></a></div>
<div class="san_cont">
    <div class="sanClist_top">
        <div class="sanClist_head">
            <div class="sanClist fl">
                <div class="sanListSubTi">
                <div class="sanGotoMain"><a href="/index.php/index">サイトトップ</a></div>
                    <div class="sanLiSuHere1"></div>
                </div>
                <div class="sanLiSubCate">
                    <a href="/index.php/Desc/index/type/ゲーム紹介" class="sLSC1 sLSC1_here"></a>
                    <a href="/index.php/Desc/index/type/初心者ガイド" class="sLSC2"></a>
                    <a href="/index.php/Desc/index/type/ゲームガイド" class="sLSC3"></a>
                </div>
                <div class="clear"></div>
                <ul class="sanList">
                <?php if(is_array($data)): foreach($data as $key=>$news): if($news["is_top"] == 1): ?><li class="top_notice">
                    <?php else: ?>
                        <li><?php endif; ?>
                        <a href="/index.php/Desc/details/id/<?php echo ($news["id"]); ?>"><?php echo ($news["title"]); ?><span><?php echo ($news["createtime"]); ?></span></a></li><?php endforeach; endif; ?>
                   <!--  <li class="top_notice"><a href="sdfsdfsdf">メンテナンス完了のお知らせ<span>2016-09-17</span></a></li>
                    <li class="top_notice"><a href="sdfsdfsdf">臨時メンテナンスについてのお詫び<span>2016-09-15</span></a></li>
                    <li><a href="sdfsdfsdf">先行イベントのお知らせ<span>2016-09-15</span></a></li>
                    <li><a href="sdfsdfsdf">メンテナンス完了のお知らせ<span>2016-09-15</span></a></li>
                    <li><a href="sdfsdfsdf">メンテナンス完了のお知らせ<span>2016-09-15</span></a></li>
                    <li><a href="sdfsdfsdf">臨時メンテナンスについてのお詫び><span>2016-09-15</span></a></li>
                    <li><a href="sdfsdfsdf">先行イベントのお知らせ<span>2016-09-14</span></a></li>
                    <li><a href="sdfsdfsdf">メンテナンス完了のお知らせ<span>2016-09-14</span></a></li>
                    <li><a href="sdfsdfsdf">メンテナンス完了のお知らせ<span>2016-09-13</span></a></li>
                    <li><a href="sdfsdfsdf">臨時メンテナンスについてのお詫び<span>2016-09-12</span></a></li>
                    <li><a href="sdfsdfsdf">先行イベントのお知らせ<span>2016-09-09</span></a></li> -->
                </ul>
                <div id="sanPageBar">
                <?php echo ($page); ?>
                   <!--  <div class="sanPageBarSamp">
                        <a href="sdfsdfdf" class="first">&lt;&lt;</a>
                        <a href="sdfsdfdf" class="prev">&lt;</a>
                        <span class="current">1</span>
                        <a href="sdfsdfdf" class="num">2</a>
                        <a href="sdfsdfdf" class="num">3</a>
                        <a href="sdfsdfdf" class="num">4</a>
                        <a href="sdfsdfdf" class="next">&gt;</a>
                        <a href="sdfsdfdf" class="last">&gt;&gt;</a>
                    </div> -->
                </div>
            </div>
            <script type="text/javascript">
                var sanPageBarSampLength = $(".sanPageBarSamp").children().length;
                $(".sanPageBarSamp").css("width",(sanPageBarSampLength*32));
            </script>
            <div class="sanGameStart fr"><a href="/index.php/Games/index?gid=<?php echo ($g_id); ?>" class="sanGStart"></a></div>
            <div class="san_m_login fr">
        <?php if(!isset($_SESSION['userinfo'])): ?><form action="/index.php/exlogin/login" method="post">
                <input name="loginname" type="text" class="sanMlogInput sanMlogId" />
                <input name="password" type="password"  class="sanMlogInput sanMlogPw" />
                <input type="hidden" name="csrf" value="<?php echo ($csrf); ?>"/>
                <input name="submit" type="image" src="/Public/home/images//login_button.jpg" width="232" height="46" style="margin:2px 0 10px 0;" />
                <a href="sdfsdsdf" style="margin-left:12px;"><img src="/Public/home/images//id_forget.png" width="206" height="20" alt="ID・パスワードを忘れた方" /></a>
            </form>
            
        <?php else: ?>
             <b>欢迎您 <a href="/index.php/login/personal"><font color="red"><?php echo ($_SESSION['userinfo']['nicename']); ?></font></a> !!! </b>
             &nbsp;&nbsp;&nbsp;
            <a  href="/index.php/Exlogin/loginout"><button>退出</button></a>
            <br />
            最近登录: 
            <br />
            <?php if(is_array($last_login)): foreach($last_login as $key=>$login_server): ?><a href="/index.php/games/login_game/s_id/<?php echo ($login_server["server_info"]["s_id"]); ?>"><font color="red"><?php echo ($login_server["server_info"]["s_name"]); ?></font></a>
                 服务器 &nbsp;&nbsp;&nbsp;<?php endforeach; endif; ?>

            <br />
            <a href="/index.php/login/personal"><font color="red">个人信息</font></a> &nbsp;&nbsp;&nbsp; <font color="red">* <?php echo ($_SESSION['userinfo']['rc']); ?> 平台币</font><?php endif; ?>
        </div>
            <div class="san_openid_log fr">
                <a href="/index.php/index/thirdLogin?type=yahoo"></a><!--yahoo-->
                <a href="/index.php/index/thirdLogin?type=google"></a><!--google-->
                <a href="/index.php/index/thirdLogin?type=Twitter"></a><!--twitter-->
                <a href="/index.php/index/'thirdLogin?type=Facebook"></a><!--facebook-->
            </div>
            <div class="sanC_4 fr">
                <a href="/index.php/reg" target="_blank"><img src="/Public/home/images/join_button.jpg" width="275" height="87" /></a>
                <a href="/index.php/pay" target="_blank"><img src="/Public/home/images/bill_button.jpg" width="275" height="87" /></a>
                <a href="sdfsdff" target="_blank"><img src="/Public/home/images/hajime_button.jpg" width="275" height="87" /></a>
            </div>
            <div class="clear"></div>
      </div>
    </div>
    <div class="sanC_bottom"></div>
</div>
</body>
</html>