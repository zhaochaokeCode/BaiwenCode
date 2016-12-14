<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta name='description' content="<?php echo ($website["0"]["description"]); ?>"/>
<meta name="keywords" content="<?php echo ($website["0"]["keyword"]); ?>"/>
<!-- <meta name="google-signin-client_id" content="102583044950-ohdrp9rt8sh0nvo1c0dpf1tqt1oo8a4e.apps.googleusercontent.com">
<meta name="google-site-verification" content="1VGyNjLANRCnP6lkpVza6oLNzCNPGiz20nGBeYoTzoE" /> -->
<title><?php echo ($website["0"]["title"]); ?></title>
<link rel="stylesheet" type="text/css" href="/Public/home/css/style.css">
<script type="text/javascript" src="/Public/home/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="/Public/home/js/common-ajax.js"></script>
<script type="text/javascript" src="/Public/home/js/jquery.SuperSlide.2.1.1.js"></script>
<!-- <script src="https://apis.google.com/js/platform.js" async defer></script> -->

<style>

    .menu { float:left;  position:absolute; left:20px;height:24px;}

    .menu li { float:left; width:165px; text-align:center; margin:0 10px;cursor:pointer;}

    .menu li a { display:block; width:80px; text-align:center; height:32px; line-height:32px; color:#fff; font-size:13px; text-decoration:none;}

    

    .cur{height:24px;  background:url(../img/list_tt_hov2.png) no-repeat; color:#fff; display:block;}

</style>
</head>
<body style=" background:#ececec;font-family:'微软雅黑';">
<div id="wrap">
    <!-- header -->
    <div id="header" style=" background:#fff !important;">
        <div class="header_in">
             <a href="/index.php" class="logo"><img src="/Public/home/images/logo.jpg" alt=""/></a>
             <p class="link_02">
                 <a href="<?php echo U('News/index');?>">お知らせ</a>
                 <a href="<?php echo U('Pay/index');?>">RCチャージ</a>
                 <a href="<?php echo U('Faq/index');?>">よくある質問</a>
                 <a href="<?php echo U('Help/index');?>">お問い合わせ</a>
             </p>
        </div>
    </div>
    <!-- //header -->

    
    <!-- container -->
    <?php if($_SESSION['isLog'] != 2){ echo "<script>alert('您尚未登录,请先登录!');location.href='/index.php/Login';</script>";}?>
    <div id="container">
            <!-- content -->
            <div id="content" style=" background:#fff;">
                 <p class="nav_box">
                     <a href="#" class="nav_01 act"><em>01</em>決済方法/金額選択</a>
                     <a href="#" class="nav_02"><em>02</em>購入確認</a>
                     <a href="#" class="nav_03"><em>03</em>支  払</a>
                     <a href="#" class="nav_04"><em>04</em>購入完了</a>
                 </p>
                 <div class="send_box">
                     <p class="tt_01">メRCチャージ</p>
                     <p>RCをチャージするには、決済方法、チャージ金額を選択し購入ボタンで確認画面へ進んでください。</p>
                     <table style=" width:510px; height:35px; margin:20px auto;">
                         <tr>
                             <td style=" font-size:14px; width:130px">账号，RC残高 :</td>
                             <td><span class="name_input" style=" width:240px !important;"><input type="text" value="<?php echo ($rc["rc"]); ?> RC" onfocus="javascript:if(this.value=='')this.value='';" disabled></span></td>
                             <td><a href="#" class="id_btn" style=" padding:0 1px !important;">パスワード変更</a></td>
                         </tr>
                     </table>        
                     <p class="tt_01" style=" border-bottom:none !important; border-top:#ececec 1px solid;">決済方法選択</p>
                     <form action="/index.php/Pay/dopay" method="post">
                     <input type="hidden" name="rc" value="<?php echo ($rc["rc"]); ?>">
                     <table class="card">
                         <tr>
                             <td><img src="/Public/home/images/img_24.jpg" alt=""/></td>
                             <td><img src="/Public/home/images/img_25.jpg" alt=""/></td>
                             <td><img src="/Public/home/images/img_26.jpg" alt=""/></td>
                             <td><img src="/Public/home/images/img_27.jpg" alt=""/></td>
                             <td><img src="/Public/home/images/img_28.jpg" alt=""/></td>
                         </tr>
                         <tr>
                             <td><p><label><input name="payment" type="radio" value="visa"     /></label></p></td>
                             <td><p><label><input name="payment" type="radio" value="webmoney"  /></label></p></td>
                             <td><p><label><input name="payment" type="radio" value="bitcash"  /></label></p></td>
                             <td><p><label><input name="payment" type="radio" value="netcash"  /></label></p></td>
                             <td><p><label><input name="payment" type="radio" value="paypal"  /></label></p></td>
                         </tr>
                     </table>
                     <p class="tt_01" style=" border-bottom:none !important; border-top:#ececec 1px solid;">決済方法選択</p>
                     <table class="card">
                         <tr>
                             <td><img src="/Public/home/images/img_29.jpg" alt=""/></td>
                             <td><img src="/Public/home/images/img_30.jpg" alt=""/></td>
                             <td><img src="/Public/home/images/img_31.jpg" alt=""/></td>
                             <td><img src="/Public/home/images/img_32.jpg" alt=""/></td>
                             <td><img src="/Public/home/images/img_33.jpg" alt=""/></td>
                         </tr>
                         <tr>
                             <td><p><label><input name="payamount" type="radio" value="500"  /></label></p></td>
                             <td><p><label><input name="payamount" type="radio" value="1000"  /></label></p></td>
                             <td><p><label><input name="payamount" type="radio" value="3000"  /></label></p></td>
                             <td><p><label><input name="payamount" type="radio" value="5000"  /></label></p></td>
                             <td><p><label><input name="payamount" type="radio" value="10000"  /></label></p></td>
                         </tr>
                     </table>
                     <p class="btn_04">
                          <!-- <a href="#" class="btn_01"></a>
                          <a href="#" class="btn_02">購  入</a> -->
                          <input type="submit" name="submit" class="btn_04" value="購  入" style="border:none;color: #fff;font-size: 16px;">
                     </p>
                     </form>
                 </div>
            </div>
            <!-- //content -->
    </div>
    <!-- //container -->


    <!--foot-link-->
  <div class="foot_link">
          <ul class="foot_link_box">
                <li>
                     <p>トップ</p>
                     <a href="<?php echo U('Reg/index');?>">新規無料会員登録</a>
                     <a href="#">パスワードを忘れた方</a>
                     <a href="#">お知らせ</a>
                     <a href="#">チャージ</a>
                     <a href="#">掲示板</a>
                     <a href="#">退会</a>
                </li>
                <li>
                     <p>ゲーム</p>
                     <a href="#">アクション</a>
                     <a href="#">RPG</a>
                     <a href="#">シュミレーション</a>
                     <a href="#">シューティング</a>
                     <a href="#">スポーツ</a>
                </li>
                <li>
                     <p>初めての方</p>
                     <a href="#">ゲームNSについて</a>
                     <a href="#">コインについて</a>
                     <a href="#">コイン購入</a>
                     <a href="#">OpenIDご利用</a>
                </li>
                <li>
                     <p>会社情報</p>
                     <a href="#">会社概要</a>
                     <a href="#">経営理念</a>
                     <a href="#">事業内容</a>
                     <a href="#">プライバシーポリシー</a>
                     <a href="#">特定商取引法の表記</a>
                     <a href="#">資金決済法に基づく表示</a>
                </li>
                <li>
                     <p>トップ</p>
                     <a href="#">新規無料会員登録</a>
                     <a href="#">パスワードを忘れた方</a>
                     <a href="#">お知らせ</a>
                     <a href="#">チャージ</a>
                     <a href="#">掲示板</a>
                     <a href="#">退会</a>
                </li>
                <li>
                     <p>サポート</p>
                     <a href="#">お問い合わせ</a>
                     <a href="<?php echo U('Faq/index');?>">FAQ</a>
                </li>
                <li>
                     <p>その他</p>
                </li>
          </ul>
         <a href="#" class="google_play"><img src="/Public/home/images/img_13.jpg" alt=""/></a>
    </div>
    <!--//foot-link-->
    <!-- footer -->
    <div id="footer">
        <div class="footer_in">
         <div style="margin:0 auto;width:auto;">
            <a href="#" class="logo_bot"><img src="/Public/home/images/logo_bot.jpg" alt=""/></a> <div class="foot_wz" style="width:500px;height:84px;line-height:84px;overflow:hidden;">人生を楽しくする楽しいゲームならゲームノール！BeiJing Gamenoll Technology Co.,Ltd.</div>
         </div>
        </div>
    </div>
    <!-- //footer -->
</div>
<script>
  //封装的方法
  $(".hd li").bind("click", function () {
    var index = $(this).index()
    $("#0").hide();
    $("#1").hide();
    $("#2").hide();
    $("#3").hide();
    $("#4").hide();
    $("#"+index).show();
  });
</script>

</body>
</html>