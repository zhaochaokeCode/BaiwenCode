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
    <div id="container_home">
            <!-- content -->
            <?php if(empty($_SESSION['userinfo']['loginname'])){ echo "<script>alert('您尚未登录,请先登录!');location.href='/index.php/Login/Index'</script>";}else{ ?>
            <div id="user_center">
                    <ul class="user_tt">
                       <li><a href="#" class="user_tt_01">パスワード変更</a></li>
                       <li class="act"><a href="#" class="user_tt_02">RC購買履歴照会</a></li>
                    </ul>
                    <div class="user_list_bot">
                        <div class="slideTxtBox2">
                            <div class="hd">
                                <ul id="menu" class="menu">
                                  <!-- <li><a class="cur" href="/index.php/Login/personal?aa=1">すべて</a></li>
                                  <li><a class="cur" href="/index.php/Login/personal?aa=2">RC購買履歴</a></li>
                                  <li><a class="cur" href="/index.php/Login/personal?aa=3">RC使用履歴</a></li>
                                  <li><a class="cur" href="/index.php/Login/personal?aa=4">ゲーム利用状況</a></li>
                                  <li><a class="cur" href="/index.php/Login/personal?aa=5">退   会</a></li> -->
                                  <li>すべて</li><li>RC購買履歴</li><li>RC使用履歴</li><li>ゲーム利用状況</li><li>退   会</li>
                                </ul>
                            </div>
                            <div class="bd">
                                <ul>
                   					  <p class="tt_01">登録メールアドレス</p>
                                     <table class="name_box">
                                           <tr>
                                               <td class="name_act"><em class="name_01">メールアドレス</em></td>
                                               <td><span class="name_input"><input type="email" name="email" value="<?php echo ($_SESSION['userinfo']['email']); ?>" onfocus="javascript:if(this.value=='kimura2988@g-mail.com')this.value='';" disabled></span></td>
                                               <td></td>
                                           </tr>
                                     </table>
                    				 <p class="tt_06">基本情報の入力</p>
                                     <table class="name_box">
                                           <tr>
                                               <td class="name_act"><em class="name_01">アカウント</em></td>
                                               <td><span class="name_input"><input type="email" value="<?php echo ($_SESSION['userinfo']['email']); ?>" onfocus="javascript:if(this.value=='kimura2988@g-mail.com')this.value='';" disabled></span></td>
                                               <td></td>
                                           </tr>
                                           <tr>
                                               <td class="name_act"><em class="name_01">パスワード</em></td>
                                               <td><span class="name_input"><input type="password" name="password" value="kimura2988@g-mail.com" onfocus="javascript:if(this.value=='kimura2988@g-mail.com')this.value='';" disabled></span></td>
                                               <td><a href="#pass" class="id_btn" style=" padding:0 1px !important;">パスワード変更</a></td>
                                           </tr>
                                     </table>
                    				 <p class="tt_06" id="pass">パスワード変更</p>
                                  <form action="/index.php/Login/modpass" method="post" >
                                     <table class="xx_list">
                                              <tr>
                                                   <td class="list_nn">現在パスワード入力</td>
                                                   <td><input type="password" name="oldpassword" style=" padding:5px 10px;width:290px; height:21px; border:#cdd1d9 1px solid; float:left;"></td>
                                                   <td></td>
                                              </tr>
                                              <tr>
                                                   <td class="list_nn">新しいパスワード入力</td>
                                                   <td><input type="password" name="password" style=" padding:5px 10px;width:290px; height:21px; border:#cdd1d9 1px solid; float:left;"></td>
                                                   <td></td>
                                              </tr>
                                              <tr>
                                                   <td class="list_nn">パスワード確認入力</td>
                                                   <td><input type="password" name="repwd" style=" padding:5px 10px;width:290px; height:21px; border:#cdd1d9 1px solid; float:left;"></td>
                                                   <td style="width:80px; color:#fff;"></td>
                                              </tr>
                                              <tr>
                                                   <td class="list_nn"></td>
                                                   <td><p style=" width:322px; margin:0 auto;"><a href="#" ><input type="submit" name="submit" class="id_btn" value="确定" style=" padding:0 44px !important;margin:0 10px; float:left;"></a>
                                                   <a href="#" ><input type="reset" class="id_btn" value="取消" style=" padding:0 44px !important;margin:0 10px; float:left;"></a></p></td>
                                                   <td></td>
                                              </tr>
                                              <tr>
                                                   <td class="list_nn">ニックネーム</td>
                                                   <td><input type="text" name="nicename" value="<?php echo ($_SESSION['userinfo']['nicename']); ?>" onfocus="javascript:if(this.value=='もも太郎')this.value='';" style=" padding:5px 10px; background:#eee;width:290px; height:21px; border:#cdd1d9 1px solid; float:left;" disabled></td>
                                                   <td></td>
                                              </tr>
                                              <tr>
                                                   <td class="list_nn">お名前</td>
                                                   <td><input type="text" name="" value="<?php echo ($_SESSION['userinfo']['surname']); echo ($_SESSION['userinfo']['name']); ?>" onfocus="javascript:if(this.value=='木村键志')this.value='';" style=" padding:5px 10px; background:#eee;width:290px; height:21px; border:#cdd1d9 1px solid; float:left;" disabled></td>
                                                   <td></td>
                                              </tr>
                                              <tr>
                                                   <td class="list_nn">フリガナ</td>
                                                   <td><input type="text" name="" value="かきあい" onfocus="javascript:if(this.value=='かきあい')this.value='';" style=" padding:5px 10px; background:#eee;width:290px; height:21px; border:#cdd1d9 1px solid; float:left;" disabled></td>
                                                   <td></td>
                                              </tr>
                                              <tr>
                                                   <td class="list_nn">性別</td>
                                                   <td><input type="text" value="<?php echo ($Think['session']['userinfo']['sex'] == 0 ? '男' :'女'); ?>" onfocus="javascript:if(this.value=='男')this.value='';" style=" padding:5px 10px; background:#eee;width:290px; height:21px; border:#cdd1d9 1px solid; float:left;" disabled></td>
                                                   <td></td>
                                              </tr>
                                              <tr>
                                                   <td class="list_nn">生年月日</td>
                                                   <td><input type="text" value="<?php echo ($_SESSION['userinfo']['birth_year']); ?>年<?php echo ($_SESSION['userinfo']['birth_mon']); ?>月<?php echo ($_SESSION['userinfo']['birth_day']); ?>日" onfocus="javascript:if(this.value=='1988年12月26日')this.value='';" style=" padding:5px 10px; background:#eee;width:290px; height:21px; border:#cdd1d9 1px solid; float:left;" disabled></td>
                                                   <td></td>
                                              </tr>
                                      </table>
                                      </form>
                    				 <!-- <p class="tt_06">パスワード変更</p> -->
                                    <!-- <form action="/index.php/Login/toemail" method="post" >
                                     <table class="xx_list">
                                              <tr>
                                                   <td class="list_nn">受信設定</td>
                                                   <td><input type="text" name="title" value="GMAENOLLインフォメーションメールを受信しない" onfocus="javascript:if(this.value=='GMAENOLLインフォメーションメールを受信しない')this.value='';" style=" padding:5px 10px; background:#eee;width:290px; height:21px; border:#cdd1d9 1px solid; float:left;"></td>
                                                   <td></td>
                                              </tr>
                                              <tr>
                                                   <td class="list_nn">メールマガジン設定</td>
                                                   <td>
                                                      <label><input name="sure" type="radio" value="0" />希望する</label> 
                                                      <label><input name="sure" type="radio" value="1" />希望しない</label> 
                                                   </td>
                                                   <td></td>
                                              </tr>
                                              <tr>
                                                   <td class="list_nn"></td>
                                                   <td><p style=" width:322px; margin:0 auto;"><a href="#" ><input type="submit" name="submit" class="id_btn" value="确定" style=" padding:0 44px !important;margin:0 10px; float:left;"></a>
                                                   <a href="#" ><input type="reset" class="id_btn" value="取消" style=" padding:0 44px !important;margin:0 10px; float:left;"></a></p></td>
                                                   <td></td>
                                              </tr>
                                     </table>
                                     </form> -->
                                </ul>
                                <ul>
                                      <table style=" width:500px; height:30px; margin:0 auto; line-height:30px;">
                                         <tr>
                                         <td>
                                         <form action="/index.php/Login/buySearch" method="post">
                                            <p>
                                              <select id="sel_year" name="birth_year" class="xlk" style=" text-align:center"></select><em class="name_mr">年</em>
                                              <select id="sel_month" name="birth_mon" class="xlk" style=" text-align:center"></select><em class="name_mr">月</em>
                                            </p>
                                            
                                         </td>
                                         <!-- <td><select class="xlk" style=" text-align:center">
                                              <option value="1">1988</option>
                                              <option value="2">1987</option>
                                              <option value="3">1986</option>
                                              <option value="4">1985</option>
                                         </select>
                                         </td>
                                         <td><span>年</span></td>
                                         <td><select class="xlk" style=" text-align:center">
                                              <option value="1">12</option>
                                              <option value="2">11</option>
                                              <option value="3">10</option>
                                              <option value="4">9</option>
                                         </select></td>
                                         <td><span>月</span></td> -->
                                         <td><input type="submit" name="submit" id="buy" value="RC購入履歴検索" class="id_btn"></td>
                                         <td><a href="#" class="id_btn">RC使用記録検索</a></td>
                                         </tr>
                                         </form>
                                      </table>
                                      <script src="/Public/home/js/birthday.js"></script> 
                                      <script> 
                                        //出生年月
                                        $(function () {
                                          $.ms_DatePicker({
                                                    YearSelector: ".sel_year",
                                                    MonthSelector: ".sel_month",
                                                    DaySelector: ".sel_day"
                                            });
                                          $.ms_DatePicker();
                                        }); 
                                      </script>
                                  <table style=" margin:15px 0 0 150px;">
                                          <tr>
                                              <td>現在保有RC:</td>
                                              <td><input type="text" value="<?php echo ($rc); ?> RC" onfocus="javascript:if(this.value=='1000000 RC')this.value='';" style=" padding:5px 10px; background:#eee;width:290px; height:21px; border:#cdd1d9 1px solid; float:left;" disabled></td>
                                          </tr>
                                      </table>
                                  <table class="gmll" cellspacing="0" cellpadding="0">
                                          <tr>
                                              <td>日  付</td>
                                              <td>決済方法</td>
                                          </tr>
                                          <?php if(is_array($record)): foreach($record as $key=>$record): ?><tr  style="margin-bottom:300px;">
                                                <td><?php echo ($record["createtime"]); ?></td>
                                                <td><?php echo ($record["payment"]); ?></td>
                                            </tr><?php endforeach; endif; ?>

                                          <!-- <?php if(is_array($searchbuy)): foreach($searchbuy as $key=>$searchbuy): ?><tr >
                                                <td><?php echo ($searchbuy["createtime"]); ?></td>
                                                <td><?php echo ($searchbuy["payment"]); ?></td>
                                            </tr><?php endforeach; endif; ?> -->
                                  </table>
                                  <li style="float:right;margin-right:110px;" class="page"><?php echo ($page); ?></li>
                                </ul>
                                <ul>
                                      <table style=" margin:15px 0 0 150px;">
                                          <tr>
                                              <td>現在保有RC:</td>
                                              <td><input type="text" value="<?php echo ($rc); ?> RC" onfocus="javascript:if(this.value=='1000000 RC')this.value='';" style=" padding:5px 10px; background:#eee;width:290px; height:21px; border:#cdd1d9 1px solid; float:left;" disabled></td>
                                          </tr>
                                      </table>
                                      <table class="gmll" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td>日  付</td>
                                                <td>ゲーム名</td>
                                            </tr>
                                      </table>
                                </ul>
                                <ul>
                    				 <p class="tt_06" style=" border-top:none !important;">現在利用登録済みのゲーム一覧</p>
                                     <ul class="game_box">
                                          <li><img src="/Public/home/images/img_19.png"alt=""/>Bahumut Online</li>
                                          <li><img src="/Public/home/images/img_20.png"alt=""/>暴走亚瑟王</li>
                                          <li><img src="/Public/home/images/img_22.jpg"alt=""/>ゆるドラシル</li>
                                     </ul>
                    				 <p class="tt_06" style=" border-top:none !important;">利用登録されていないゲーム一覧</p>
                                </ul>
                                <ul>
                    				 <p class="tt_06" style=" border-top:none !important;">基本情報の入力</p>
                                    <form action="/index.php/Login/quit" method="post">
                                     <table class="xx_list">
                                              <tr>
                                                   <td class="list_nn">アカウント</td>
                                                   <td><input type="text" name="loginname" value="<?php echo ($_SESSION['userinfo']['loginname']); ?>" onfocus="javascript:if(this.value=='kimura2988')this.value='';" style=" padding:5px 10px; background:#eee;width:290px; height:21px; border:#cdd1d9 1px solid; float:left;" disabled></td>
                                              </tr>
                                              <tr>
                                                   <td class="list_nn">パスワード</td>
                                                   <td><input type="password" name="password" value="" onfocus="javascript:if(this.value=='kimura2988')this.value='';" style=" padding:5px 10px;width:290px; height:21px; border:#cdd1d9 1px solid; float:left;"></td>
                                              </tr>
                                              <tr>
                                                   <td class="list_nn">カテゴリ</td>
                                                       <td>
                                                           <select class="xlk" style=" text-align:center; margin-right:10px;">
                                                              <option value="1">1988</option>
                                                              <option value="2">1987</option>
                                                              <option value="3">1986</option>
                                                              <option value="4">1985</option>
                                                         </select>
                                                         <select class="xlk" style=" text-align:center">
                                                              <option value="1">1988</option>
                                                              <option value="2">1987</option>
                                                              <option value="3">1986</option>
                                                              <option value="4">1985</option>
                                                         </select>
                                                      </td>
                                              </tr>
                                              <tr>
                                                   <td class="list_nn">ご意見がありましたら、入力してください</td>
                                                   <td><textarea name="content" style=" width:310px; height:173px;"></textarea></td>
                                              </tr>
                                              <tr>
                                                   <td class="list_nn">同  意</td>
                                                   <td><input type="submit" name="submit" value="退  会" class="id_btn" style=" margin-left:0 !important;"></td>
                                              </tr>
                                              <tr>
                                                   <td class="list_nn">注意事項</td>
                                                   <td>
                                                       <p style=" height:18px; line-height:18px;">退会処理が完了致しますと、全てのコンテンツのプレイが行えなくなります。</p>
                                                       <p style=" height:18px; line-height:18px;">退会処理を行って頂きました同一のアカウント名でのご利用は行えません。</p>
                                                       <p style=" height:18px; line-height:18px;">残っておりますルークポイント（RC)の返金対応などは承っておりません。</p>
                                                   </td>
                                              </tr>
                                      </table>
                                   </form>  
                                </ul>
                            </div>
                        </div>
                        <script type="text/javascript">jQuery(".slideTxtBox2").slide();</script>
                    </div>
            </div>
            <?php } ?>
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