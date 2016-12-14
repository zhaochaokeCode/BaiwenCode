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
    <div id="container">
            <!-- content -->
            <div id="content"  style=" background:#fff;">
                 <p class="nav_box nav_box_02">
                     <a href="#" class="nav_01"><em>01</em>決済方法/金額選択</a>
                     <a href="#" class="nav_02 act"><em>02</em>購入確認</a>
                     <a href="#" class="nav_03"><em>03</em>支  払</a>
                     <a href="#" class="nav_04"><em>04</em>購入完了</a>
                 </p>
                 <div class="send_box">
                     <p class="tt_01">メRCチャージ</p>
                     <p style=" color:#8c8c8c;">下記の内容にお間違いがないかよく確認したらから「購入」ボタンをクリックしてください。</p>
                     <table style=" width:510px; height:35px; margin:20px auto;">
                         <tr>
                             <td style=" font-size:14px; width:130px">账号，RC残高 :</td>
                             <td><span class="name_input" style=" width:240px !important;"><input type="text" value="<?php echo ($payinfo["rc"]); ?> RC" onfocus="javascript:if(this.value=='')this.value='';"></span></td>
                             <td><a href="#" class="id_btn" style=" padding:0 1px !important;">パスワード変更</a></td>
                         </tr>
                     </table>        
                     <p class="tt_01"></p>
                     <form action="/index.php/Pay/pay2" method="post">
                     <table style=" width:510px; height:35px; margin:20px auto;">
                         <tr>
                             <td style=" font-size:14px; width:130px">決済方法</td>
                             <td><span class="name_input" style=" width:240px !important;"><input type="text" value="<?php echo ($payinfo["payment"]); ?>" onfocus="javascript:if(this.value=='')this.value='';"></span></td>
                         </tr>
                         <tr>
                             <td style=" font-size:14px; width:130px">選択金額</td>
                             <td><span class="name_input" style=" width:240px !important;"><input type="text" value="<?php echo ($payinfo["payamount"]); ?> RC" onfocus="javascript:if(this.value=='')this.value='';"></span></td>
                         </tr>
                     </table>
                     <ul style=" width:760px; margin:0 auto; color:#666;">    
                         <li style=" height:18px; line-height:18px; text-indent:2em;">[購入] をクリックすると外部の決済専用ページに移動します。（この段階では、まだRCの購入は完了しません。）</li>
                         <li style=" height:18px; line-height:18px;text-indent:2em;">決済専用ページからの操作にて購入が確定いたしましたら、購入の取り消し、払い戻し等は一切行えませんのでご了承ください。
                         </li>
                         <li style=" height:18px; line-height:18px;text-indent:2em;">有効期限は、このたびご購入いただくRCに対しての表示となります。</li>
                         <li style=" height:18px; line-height:18px;text-indent:2em;">上記の内容でよろしければ[購入]ボタンをクリックしてください。</li>
                         <li style=" height:18px; line-height:18px;text-indent:2em;">お支払い方法、ご購入額などを訂正する場合は[戻る]ボタンを、RC購入を取消す場合は[キャンセル]ボタンをクリックしてください。</li>
                     </ul>
                     <table class="double_btn">
                         <tr>
                             <td>
                                 <p class="btn_04">
                                      <!-- <a href="#" class="btn_01"></a>
                                      <a href="#" class="btn_02">購  入</a> -->
                                      <input type="submit" name="submit" class="btn_04" value="購  入" style="border:none;color: #fff;font-size: 16px;">
                                 </p>
                             </td>
                             <td>
                                 <p class="btn_04">
                                      <a href="#" class="btn_01"></a>
                                      <a href="#" onClick="javascript :history.back(-1);" class="btn_02">戻  る</a>
                                 </p>
                             </td>
                         </tr>
                     </table>
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