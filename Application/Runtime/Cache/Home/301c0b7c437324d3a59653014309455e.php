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
    <div id="container_home">
            <!-- content -->
            <div id="content_list">
                <div class="cont_list_left">
                    <p class="cont_list_tt">よくある質問<a href="#" style=" float:right; margin-right:20px; color:#fff;">トップ >> お知らせ</a></p>   
                    <div class="cont_list_bot">
                    <?php if(is_array($faq)): foreach($faq as $key=>$faq): ?><table class="ask">
                              <tr>
                                  <td style=" width:38px; height:38px;"><img src="/Public/home/img/ask.jpg" width="25" height="25"  alt=""/></td>
                                  <td class="ask_tt"><?php echo ($faq["title"]); ?></td>
                              </tr>
                              <tr>
                                  <td style=" vertical-align:top"><img src="/Public/home/img/answer.jpg" width="25" height="25"  alt=""/></td>
                                  <td class="answer_tt"><?php echo ($faq["content"]); ?></td>
                              </tr>
                        </table><?php endforeach; endif; ?>
                    <div style="float:right;margin-right:20px;"><?php echo ($page); ?></div>
                    </div>
                </div>
                <div class="cont_list_right">
                     <div class="con_right">
                      <?php if($_SESSION['isLog'] == 2 || !empty($_SESSION['userinfo']['loginname'])){ ?>
                      <div class="user_box_02">
                          <p class="user_box_tt"><em><?php echo ($_SESSION['userinfo']['loginname']); ?></em><span>様</span><a href="<?php echo U('Index/logout',"'id'=$id");?>">ログアウト</a></p>
                          <p style=" width:320px !important; margin:5px auto 0 auto; height:20px; text-align:center;">
                                 <select class="user_box_choice">
                                      <option value="1">ブラウザプロ野球..</option>
                                      <option value="2">ブラウザプロ野球..</option>
                                      <option value="3">ブラウザプロ野球..</option>
                                      <option value="4">ブラウザプロ野球..</option>
                                 </select>
                                 <select class="user_box_choice" style="color:#999;">
                                      <option value="1">服务器</option>
                                      <option value="2">服务器</option>
                                      <option value="3">服务器</option>
                                      <option value="4">服务器</option>
                                 </select>
                          </p>
                          <p style=" width:150px; height:25px; margin:5px auto 10px auto;"><a class="user_box_btn" href="#">ゲームへ</a></p>
                          <p style=" width:180px; height:19px; margin:5px auto 5px auto; display:block; padding:0 10px; background:#875921; text-align:center; line-height:19px; border-radius:18px; color:#fff;">RC残高:<span><?php echo ($rc); ?></span></p>
                          <p class="link_11"><a href="/index.php/Reg">無料会員登録</a>|<a href="<?php echo U('Pay/index');?>">RCチャージ</a></p>
                      </div>
                      <?php }else{?> 
                      <div class="uesr_box">
                          <form action="/index.php/Index/dologin" method="post">
                          <table class="dl_01">
                               <tr>
                                    <td><input type="text" name="loginname" value="ID" onfocus="javascript:if(this.value=='ID')this.value='';" class="dl_input"></td>
                                    <td rowspan="2"><input type="submit" name="sub" class="dl_btn" value="ログイン<"></td>
                               </tr>
                               <tr>
                                    <td><input type="password" name="password" value="PASSWORD" onfocus="javascript:if(this.value=='PASSWORD')this.value='';" class="dl_input"></td>
                               </tr>
                          </table>
                          </form>
                          <p class="link_09"><a href="/index.php/Reg">無料会員登録</a>|<a href="#">RCチャージ</a></p>
                      </div>
                      <?php }?>
                          <!-- <p style=" margin-top:5px;">Open ID ご利用な方</p>
                          <p class="link_10">
                               <a href="#" class="weblink_01"></a>
                               <a href="#" class="weblink_02"></a>
                               <a href="#" class="weblink_03"></a>
                               <a href="#" class="weblink_04"></a>
                               <a href="#" class="weblink_05"></a>
                               <a href="#" class="weblink_06"></a>
                          </p> -->
                          <div id="slideBox" class="slideBox3">
                                <div class="hd">
                                    <ul><li></li><li></li><li></li><li></li></ul>
                                </div>
                                <div class="bd">
                                    <ul>
                                      <?php if(is_array($sideplaypic)): foreach($sideplaypic as $key=>$sideplaypic): ?><li><a href="#" target="_blank"><img src="/Public/<?php echo ($sideplaypic["image"]); ?>" /></a></li><?php endforeach; endif; ?>
                                        <!-- <li><a href="#" target="_blank"><img src="/Public/home/img/img_10.png" /></a></li>
                                        <li><a href="#" target="_blank"><img src="/Public/home/img/img_10.png" /></a></li>
                                        <li><a href="#" target="_blank"><img src="/Public/home/img/img_10.png" /></a></li>
                                        <li><a href="#" target="_blank"><img src="/Public/home/img/img_10.png" /></a></li> -->
                                    </ul>
                                </div>
                            </div>
                    <script type="text/javascript">
                    jQuery(".slideBox3").slide({mainCell:".bd ul",autoPlay:true});
                    </script>
                     </div>
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