<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<title></title>
<link rel="stylesheet" type="text/css" href="/gamenoll.com/Public/home/css/style.css">
</head>
<body>
<div id="wrap">
    <!-- header -->
    <div id="header">
        <div class="header_in">
             <a href="<?php echo U('index/index');;?>" class="logo"><img src="/gamenoll.com/Public/home/img/logo.jpg" alt=""/></a>
             <p class="link_01">
                 <a href="<?php echo U('Login/index');?>">ログイン</a>
                 <a href="/gamenoll.com/index.php/Reg">無料会員登録</a>
             </p>
        </div>
  </div>
    <!-- //header -->
    <!-- container -->
    <div id="container">
            <!-- content -->
            <div id="content">
                 <p class="nav_box">
                     <a href="#" class="nav_01 act"><em>01</em>メールアドレス入力</a>
                     <a href="#" class="nav_02"><em>02</em>会員情報入力</a>
                     <a href="#" class="nav_03"><em>03</em>会員情報確認</a>
                     <a href="#" class="nav_04"><em>04</em>登録完了</a>
                 </p>
                 <div class="send_box">
                     <p class="tt_01">GAMENOLL会員登録が完了しました。</p>
                     <p style=" text-align:center; margin:10px 0;">昵称:<?php echo ($reg["nicename"]); ?></p>
                     <p style=" text-align:center; margin:10px 0;">Gamenollに会員登録していただき誠にありがとうございます。</p>
                     <p style=" text-align:center; margin:10px 0;">会員情報(ログインID:<?php echo ($reg["loginname"]); ?>、パスワード:<?php echo ($reg["password"]); ?>)は、</p>
                     <p style=" text-align:center; margin:10px 0;">ご登録いただいたメールアドレス宛に送信されます。<?php echo ($reg["email"]); ?></p>
                     <p style=" text-align:center; margin:10px 0;">今後とも宜しくお願い申し上げます。</p>
                     <form action="/gamenoll.com/index.php/Reg/regfinish" method="post">
                     <ul class="btn_08" style=" margin-top:20px !important;">
                          <li class="dl">
                            <a href="#" class="btn_01"></a>
                            <a href="<?php echo U('Login/personal');?>" class="btn_02">マイページへ</a>
                          </li>
                          <!-- <li class="gb"> -->
                            <!-- <a href="#" class="btn_01"></a> -->
                            <!-- <a href="#" class="btn_02">閉じる</a> -->
                            <input type="submit" name="submit" class="btn_04" style="border:none;color: #fff;font-size: 16px;" value="閉じる">
                          <!-- </li> -->
                     </ul>
                     </form>
                 </div>
            </div>
            <!-- //content -->
    </div>
    <!-- //container -->
    <!-- footer -->
    <div id="footer">
        <div class="footer_in">
         <div style="margin:0 auto;width:auto;">
            <a href="#" class="logo_bot"><img src="/gamenoll.com/Public/home/img/logo_bot.jpg" alt=""/></a> <div class="foot_wz" style="width:500px;height:84px;line-height:84px;overflow:hidden;">人生を楽しくする楽しいゲームならゲームノール！BeiJing Gamenoll Technology Co.,Ltd.</div>
         </div>
        </div>
    </div>
    <!-- //footer -->
</div>
</body>
</html>