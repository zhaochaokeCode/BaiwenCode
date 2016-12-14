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
                    <div class="sanLiSuHere3"></div>
                </div>

                <div class="clear"></div>
                <div class="sanLiSubConTi"><?php echo ($news["title"]); ?></div>
                <div class="sanLiSubCon">
                  <div class="sanLiSubCon_date"><?php echo ($news["createtime"]); ?></div>
                    <div class="sanLiSubCc">
                      <?php echo ($news["content"]); ?>
                        <div class="sanLiSubCc_bo">
                            <a href="/index.php/exnews"><img src="/Public/home/images/go_list.jpg" width="162" height="48" alt="一覧へ" class="fl" /></a>
                            <a href="#toppp"><img src="/Public/home/images/go_top.jpg" width="52" height="52" alt="トップ" class="fr" /></a>
                            <div class="clear"></div>
                        </div>
                    </div>
              </div>
            </div>
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