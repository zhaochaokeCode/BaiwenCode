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
                 <a href="<?php echo U('Exnews/index');?>">お知らせ</a>
                 <a href="<?php echo U('Pay/index');?>">RCチャージ</a>
                 <a href="<?php echo U('Faq/index');?>">よくある質問</a>
                 <a href="<?php echo U('Question/index');?>">お問い合わせ</a>
             </p>
        </div>
    </div>
    <!-- //header -->

    
    <!-- container -->
    <div id="container" style=" margin-top:25px !important;">
            <!-- content -->
            <div id="content">
                    <div class="hydl_box">
                         <p class="tt_box">404</p>
                         <table style=" width:690px; margin:0 auto;">
                               <tr>
                                   <td rowspan="2"><img src="/Public/home/img/404.jpg" width="149" height="148" alt=""/></td>
                                   <td style=" font-size:30px;">エラー。ページが見つかりませんでした。</td>
                               </tr>
                               <tr>
                                   <td style=" color:#f00; font-size:14px;">アクセスしようとしたページは、移動したか削除されたようです。</td>
                               </tr>
                         </table>
                         <p class="btn_04" style=" margin-top:20px !important">
                              <a href="#" class="btn_01"></a>
                              <a href="" class="btn_02">GAMENOLLトップへ</a>
                         </p>
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