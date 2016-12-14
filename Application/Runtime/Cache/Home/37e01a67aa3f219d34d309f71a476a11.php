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
                     <p class="tt_01">認証メール送信完了</p>
                     <p class="tt_02">「xxx@xxx.com」宛に登録用の認証メールを送信いたしました。</p>
                     <table class="name_box">
                           <tr>
                               <td class="name_act"><em class="name_01">件  名</em></td>
                               <td><span class="name_input"><input type="search" value="<?php echo ($title); ?>" onfocus="javascript:if(this.value=='GAMENOLL会員登録用認証メール送付のお知らせ')this.value='';" disabled></span></td>
                           </tr>
                           <tr>
                               <td class="name_act"><em class="name_01">送信者名</em></td>
                               <td><span class="name_input"><input type="search" value="GAMENOLL運営チーム" onfocus="javascript:if(this.value=='GAMENOLL運営チーム')this.value='';" disabled></span></td>
                           </tr>
                     </table>
                     <p class="tt_05">登録メールの受信に関する注意事項</p>
                     <p class="tt_04">1.登録認証メールは届くまでに多少お時間がかかる場合がございます。</p>
                     <p class="tt_04">2.登録認証メールは「迷惑メールフォルダ」に入ってしまうことがあります。受信トレイで確認できない場合は、そちらもご確認ください。</p>
                     <p class="tt_04">3.  メールに記載された登録URLの有効期限は24時間です。有効期限が切れた場合は再度メールアドレスの入力を行ってください。</p>
                     <form action="/gamenoll.com/index.php/Reg/emailinfo" method="post">
                     <p class="btn_03">
                          <a href="#" class="btn_01"></a>
                          <a href="#" class="btn_02">閉じる</a>
                          <input type="submit" name="submit" class="btn_04" style="border:none;color: #fff;font-size: 16px;" value="閉じる">
                     </p>
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