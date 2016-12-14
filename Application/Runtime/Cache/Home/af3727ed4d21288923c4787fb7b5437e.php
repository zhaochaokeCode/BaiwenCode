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
<link rel="stylesheet" type="text/css" href="/gamenoll.com/Public/home/css/style.css">
<script type="text/javascript" src="/gamenoll.com/Public/home/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="/gamenoll.com/Public/home/js/common-ajax.js"></script>
<script type="text/javascript" src="/gamenoll.com/Public/home/js/jquery.SuperSlide.2.1.1.js"></script>
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
             <a href="/gamenoll.com/index.php" class="logo"><img src="/gamenoll.com/Public/home/images/logo.jpg" alt=""/></a>
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
    <div id="container" style=" margin-top:25px !important;">
            <!-- content -->
            <?php if(!empty($_SESSION['userinfo']['loginname'])){ echo "<script>alert('您已登录,请先退出!');location.href='/gamenoll.com/index.php/Index'</script>";}else{ ?>
            <div id="content">
                    <div class="hydl_box">
                         <p class="tt_box">找回密码</p>
                         <div style=" width:976px; height:270px; overflow:hidden; display:block;">
                         <!-- <div class="hydl_left">
                               <p class="tt_12">Open　IDご利用な方</p>
                              <p class="link_10" style=" width:340px; height:40px; margin:80px auto 0 auto;">
                                   <a href="#" class="weblink_01"></a>
                                   <a href="#" class="weblink_02"></a>
                                   <a href="#" class="weblink_03"></a>
                                   <a href="#" class="weblink_04"></a>
                                   <a href="#" class="weblink_05"></a>
                                   <a href="#" class="weblink_06"></a>
                              </p>
                              <p style=" color:#0033FF; font-size:14px; float:right; margin:55px 20px 0 0; text-decoration:underline;">OpenIDについて</p>
                         </div> -->
                         <form action="/gamenoll.com/index.php/Login/forgetPass" method="post">
                         <div class="hydl_right" style="margin:0 auto; float:none;">
                               <p class="tt_12">找回密码</p>
                               <table>
                                   <tr>
                                      <td>登录名</td>
                                      <td><input type="text" name="loginname" id="loginname" style=" width:165px; height:30px; line-height:30px; color:#cdd1d9; border:#cdd1d9 1px solid;"></td>
                                      <td>&nbsp;<span class="loginname" style="color:red;font-size:12px;"></span></td>
                                   </tr>
                                   <tr>
                                      <td>邮&nbsp;&nbsp; 箱</td>
                                      <td><input type="email" name="email" id="email" style=" width:165px; height:30px; line-height:30px; color:#cdd1d9; border:#cdd1d9 1px solid;"></td>
                                      <td>&nbsp;<span class="email" style="color:red;font-size:12px;"></span></td>
                                   </tr>
                                   <!-- <tr>
                                      <td>新密码</td>
                                      <td><input type="password" name="password" id="password" onfocus="javascript:if(this.value=='PASSWORD')this.value='';" style=" width:165px; height:30px; line-height:30px; color:#cdd1d9; border:#cdd1d9 1px solid;"></td>
                                      <td>&nbsp;<span class="password" style="color:red;font-size:12px;"></span></td>
                                   </tr> -->
                                   
                                   
                               </table>
                                <ul class="btn_08" style=" margin-top:-55px;margin-left:-70px; !important;">
                                        <input type="submit" name="submit" class="btn_04" id="reg" style="border:none;color: #fff;font-size: 16px;" value="登録する">
                                </ul>
                         </div>
                         </div>
                         </form>
                         <p class="wz" style=" color:#666; margin-bottom:10px;">GAMENOLLへようこそ！</p>
                         <p class="wz" style=" color:#666; margin-bottom:10px;">GAMENOLLのIDとパスワードを入力してください。 </p>
                         <p class="wz" style=" color:#666; margin-bottom:10px;">GAMENOLLの全てのサービスを利用するためには、ログインが必要です。</p>
                    </div>
            </div>
            <?php } ?>
            <!-- //content -->
    </div>
    <!-- //container -->
</div>
<!-- 用户登录验证码JS验证 start-->
<script>
$(function(){
  //登录名
  $('#loginname').blur(function(){
    var loginname=$('#loginname').val();
    if(loginname==''){
      $('.loginname').html('请输入登录名!');
      $('.loginname').css({'color':'red','fontSize':'12px'});
      return false;
    }else{
      $('.loginname').html('登录名已输入!');
      $('.loginname').css({'color':'green','fontSize':'12px'});
    }

  })

  //邮箱
  $('#email').blur(function(){
    var email=$('#email').val();
    if(email==''){
      $('.email').html('请输入邮箱!');
      $('.email').css({'color':'red','fontSize':'12px'});
      return false;
    }else{
      $('.email').html('邮箱已输入!');
      $('.email').css({'color':'green','fontSize':'12px'});
    }

  })

  //密码
  $('input[type=password]').blur(function(){
    if($(this).is('#password')){
      if($(this).val()==''){ 
        $('.password').html('请输入密码');
        $('.password').css({'color':'red','fontSize':'12px'});
      }else{
        $('.password').html('密码已输入');
        $('.password').css({'color':'green','fontSize':'12px'});
      }
    }

  })

  $('#reg').click(function(){
    var loginname=$('#loginname').val();
    var email=$('#email').val();
    var password=$('#password').val();

    if(loginname==''){$('.loginname').html('请输入用户名'); return false;}
    if(email==''){$('.email').html('请输入邮箱'); return false;}
    if(password==''){$('.password').html('请输入用户密码'); return false; }
  })

})
</script>
<!-- 用户登录JS验证 end-->  


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
         <a href="#" class="google_play"><img src="/gamenoll.com/Public/home/images/img_13.jpg" alt=""/></a>
    </div>
    <!--//foot-link-->
    <!-- footer -->
    <div id="footer">
        <div class="footer_in">
         <div style="margin:0 auto;width:auto;">
            <a href="#" class="logo_bot"><img src="/gamenoll.com/Public/home/images/logo_bot.jpg" alt=""/></a> <div class="foot_wz" style="width:500px;height:84px;line-height:84px;overflow:hidden;">人生を楽しくする楽しいゲームならゲームノール！BeiJing Gamenoll Technology Co.,Ltd.</div>
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