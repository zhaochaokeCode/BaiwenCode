<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<title></title>
<link rel="stylesheet" type="text/css" href="/Public/home/css/style.css">
</head>
<body>
<div id="wrap">
    <!-- header -->
    <div id="header">
        <div class="header_in">
             <a href="<?php echo U('index/index');;?>" class="logo"><img src="/Public/home/img/logo.jpg" alt=""/></a>
             <p class="link_01">
                 <a href="<?php echo U('Login/index');?>">ログイン</a>
                 <a href="/index.php/Reg">無料会員登録</a>
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
                     <p class="tt_01">メールアドレスに会員登録のご案内を送りいたします。</p>
                     <p class="tt_02">Gamenoll会員登録及びゲームの利用登録手続きを行います。</p>
                     <p class="tt_02">以下のメールアドレス入力欄にメールアドレスを入力して送信を押して下さい。</p>
                     <form class="mws-form" action="/index.php/Reg/doreg" method="post">
                     <p class="search_box"><span>メールアドレス</span><input type="email" name="email" placeholder="メールアドレスを入力してください" onfocus="javascript:if(this.value=='请输入内容')this.value='';"><button href="" name="submit" value="1" class="search_btn">メール送信</button></p>
                     </form>
                     <p class="tt_03">認証メールの送信先アドレスに関する注意事項</p>
                     <p class="tt_04">1.    一部ご利用頂けないアドレスがございますので予めご了承ください。</p>
                     <p class="tt_04">2.    ドメイン指定受信を設定されている方は受信できるように変更して下さい。</p>
                     <p class="tt_04">3.    入力されたメールアドレスに認証メールが届きます。</p>
                     <p class="tt_04">4.    入力されたメールアドレスで会員登録手続きが進行します。手続き途中、または会員登録後入力されたメールアドレスは変更できませんのでご注意下さい。</p>
                     <p class="btn">
                          <a href="#" class="btn_01"></a>
                          <a href="#" class="btn_02">前のページへ戻る</a>
                     </p>
                 </div>
            </div>
            <!-- //content -->
    </div>
    <!-- //container -->
    <!-- footer -->
    <div id="footer">
        <div class="footer_in">
         <div style="margin:0 auto;width:auto;">
            <a href="#" class="logo_bot"><img src="/Public/home/img/logo_bot.jpg" alt=""/></a> <div class="foot_wz" style="width:500px;height:84px;line-height:84px;overflow:hidden;">人生を楽しくする楽しいゲームならゲームノール！BeiJing Gamenoll Technology Co.,Ltd.</div>
         </div>
        </div>
    </div>
    <!-- //footer -->
</div>
</body>
</html>