<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<title></title>
<link rel="stylesheet" type="text/css" href="/gamenoll.com/Public/home/css/style.css">
<script src="/gamenoll.com/Public/admin/js/jquery.js"></script> 
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
                 <form action="/gamenoll.com/index.php/Reg/reginfo" method="post">
                 <input type="hidden" name="email" value="<?php echo ($email); ?>">
                 <div class="send_box">
                     <p class="tt_01">登録メールアドレス</p>
                     <table class="name_box">
                           <tr>
                               <td class="name_act"><em class="name_01">メールアドレス</em></td>
                               <td><span class="name_input"><input type="email" name="email" value="<?php echo ($email); ?>" disabled></span></td>
                           </tr>
                     </table>
                     <p class="tt_06">基本情報の入力ー入力いただく情報の中でパススワード以外の情報は会員登録後に変更することはできません。ご注意ください。</p>
                      <table class="xx_list">
                          <tr>
                               <td class="list_left">アカウント</td>
                               <td><input type="text" name="loginname" id="loginname" style=" padding:5px 10px;width:163px; height:21px; border:#cdd1d9 1px solid; float:left;"><a href="#" class="id_btn">ID重複チェック</a>&nbsp;<span class="loginname" style="color:red;font-size:12px;"></span></td>
                          </tr>
                          <tr>
                               <td></td>
                               <td>＊半角英数4～12文字以内で入力してください。</td>
                          </tr>
                          <tr>
                               <td class="list_left">パスワード</td>
                               <td><input type="password" name="password" id="password" style=" padding:5px 10px;width:290px; height:21px; border:#cdd1d9 1px solid; float:left;">&nbsp;<span class="password" style="color:red;font-size:12px;"></span></td>
                          </tr>
                          <tr>
                               <td></td>
                               <td>＊半角英数字8～16文字以内で入力してください。</td>
                          </tr>
                          <tr>
                               <td class="list_left">パスワード確認</td>
                               <td><input type="password" name="repwd" id="repwd" style=" padding:5px 10px;width:290px; height:21px; border:#cdd1d9 1px solid; float:left;">&nbsp;<span class="repwd" style="color:red;font-size:12px;"></span></td>
                          </tr>
                          <tr>
                               <td></td>
                               <td>*ご確認の為再度パスワードを入力してください。  </td>
                          </tr>
                          <tr>
                               <td class="list_left">ニックネーム</td>
                               <td><input type="text" name="nicename" id="nicename" style=" padding:5px 10px;width:290px; height:21px; border:#cdd1d9 1px solid; float:left;">&nbsp;<span class="nicename" style="color:red;font-size:12px;"></span></td>
                          </tr>
                          <tr>
                               <td></td>
                               <td>*半角英数字4～20文字以内で入力してください。または全角2～10文字以内で入力してください。</td>
                          </tr>
                          <!-- <tr>
                               <td class="list_left">お名前</td>
                               <td><em class="name_mr">&nbsp;&nbsp;&nbsp;&nbsp;姓</em><input type="text" name="surname" id="surname" class="name_sr">&nbsp;<span class="surname" style="color:red;font-size:12px;"></span><em class="name_mr">&nbsp;&nbsp;&nbsp;名</em><input type="text" name="name" id="name" class="name_sr">&nbsp;<span class="name" style="color:red;font-size:12px;"></span></td>
                          </tr>
                          <tr>
                               <td></td>
                               <td>*全角1～20文字以内で入力してください。</td>
                          </tr>
                          <tr>
                               <td class="list_left">姓名（ひらがな）</td>
                               <td><em class="name_mr">せい</em><input type="text" name="sur_name" id="sur_name" class="name_sr">&nbsp;<span class="sur_name" style="color:red;font-size:12px;"></span><em class="name_mr">めい</em><input type="text" name="pname" id="pname" class="name_sr">&nbsp;<span class="pname" style="color:red;font-size:12px;"></span></td>
                          </tr>
                          <tr>
                               <td></td>
                               <td>*全角のひらがな1～20文字以内で入力してください。</td>
                          </tr> -->
                          <tr>
                               <td class="list_left">性別</td>
                               <td>
                                  <label><input type="radio" name="sex" id="sex" value="0" />男</label> 
                                  <label><input type="radio" name="sex" id="sex" value="1" />女</label> 
                                  <label><input type="radio" name="sex" id="sex" value="2" checked />未回答</label> 
                                </td>
                          </tr>
                          <tr>
                               <td class="list_left">生年月日</td>
                               <td>
                                  <em class="name_mr">西暦</em>
                                  <p>
                                    <select id="sel_year" name="birth_year" class="xlk" style=" text-align:center"></select><em class="name_mr">年</em>
                                    <select id="sel_month" name="birth_mon" class="xlk" style=" text-align:center"></select><em class="name_mr">月</em>
                                    <select id="sel_day" name="birth_day" class="xlk" style=" text-align:center"></select><em class="name_mr">日</em>
                                    &nbsp;<span class="year" style="color:red;font-size:12px;"></span>
                                    &nbsp;<span class="years" style="color:red;font-size:12px;"></span>
                                  </p>
                               </td>
                          </tr>
                     </table>
                   <div class="ty">
                     <p class="tt_01" style=" border:none !important; font-size:16px;">GAMENOLL利用規約</p>
                         <p class="inp_box"><textarea>【パリ中西啓介、賀有勇】フランスで起きた同時多発テロの追悼集会が開かれていたパリ中心部の共和国広場で１５日夜（日本時間１６日未明）、「声が聞こえた」という通報があり、治安当局が直ちに集会を中止させた。パリでは１９日までテロを警戒してデモや集会が禁じられているが、広場には約１０００人が集まっており、避難する際に転倒するなど一時、混乱した。実際に何が起きたのかはまだ不明だという。
　広場では市民らが自主的に集まり、追悼のろうそくや花などを並べていた。夜には１０００人以上の参加者が集まっていた。通報を受けた武装警察官が退避を呼びかけると、参加者は一斉に現場から逃げようとして混乱。転倒する人も相次いだ。
【パリ中西啓介、賀有勇】フランスで起きた同時多発テロの追悼集会が開かれていたパリ中心部の共和国広場で１５日夜（日本時間１６日未明）、「銃声が聞こえた」という通報があり、治安当局が直ちに集会を中止させた。パリでは１９日までテロを警戒してデモや集会が禁じられているが、広場には約１０００人が集まっており、避難する際に転倒するなど一時、混乱した。実際に何が起きたのかはまだ不明だという。
声が聞こえた」という通報があり、治安当局が直ちに集会を中止させた。パリでは１９日までテロを警戒してデモや集会が禁じられているが、広場</textarea></p>
                     <p class="check_box" style=" border:none !important"><input type="checkbox" name="agree1" id="agree1" onclick="agree();" value="1" /><em>利用規約同意する</em>&nbsp;<span class="agree1" style="color:red;font-size:12px;">*必选项,否则无法进行下一步!</span></p>
                     <p class="wz">インフォメーションメール設定ーGAME11からのインフォメーションメールを受信する場合には、以下のチェックボックスにチェックを入れてください。</p>

                     <p class="check_box"><input type="radio" name="receive" value="1" checked/><em>受信する</em> &nbsp;<input type="radio" name="receive" value="2" /><em>受信しない</em></p>
                     <p style=" line-height:28px;">＊インフォメーションメールは、GAME11からのお知らせやサービス中またサービス予定のゲームに関するお知らせなどの情報が掲載されます。</p>
                     <p style=" line-height:28px;"> ＊インフォメーションメールの受信設定は会員登録、マイページにて設定することも可能です。</p>

                     <p class="tt_01" style="font-size:16px;"></p>
                     <ul class="yzm_box">
                         <li>
                         <p href="#" class="yzm" id="captcha-container">
                         <img src="/gamenoll.com/index.php/Reg/code" alt=""/ >
                         </p>
                         <p id="captcha"><img src="/gamenoll.com/Public/home/images/img_21.jpg" alt=""/ ><!-- 別の画像を表示 --></p></li>
                         <li><input type="text" name="code" id="code" style=" padding:5px 10px;width:141px; height:21px; border:#cdd1d9 1px solid; float:left;">&nbsp;<span class="code" style="color:red;font-size:12px;"></span></li>
                         <li>＊表示されている文字を半角文字で入力してください。</li>
                     </ul>
                     </div>
                     <p style=" margin-top:15px !important;">
                          <a href="#" class="btn_01"></a>
                          <input type="submit" name="submit" id="reg" class="btn_04" disabled="disabled" style="border:none;color: #fff;font-size: 16px;margin-left:300px;" value="登録情報確認へ">
                    </p>

                     <!-- <p class="btn_04" style=" margin-top:15px !important;">
                          <a href="#" class="btn_01"></a>
                          <a href="#" class="btn_02">登録情報確認へ</a>

                     </p> -->
                 </div>
                 </form>
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
<script src="/gamenoll.com/Public/home/js/birthday.js"></script> 
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
<script> 
  // 验证码生成  
  var captcha_img = $('#captcha-container').find('img');
  var captcha = $('#captcha').find('img');
  var verifyimg = captcha_img.attr("src");  
  captcha.attr('title', '点击刷新');  
  captcha.click(function(){
      if( verifyimg.indexOf('?')>0){  
          captcha_img.attr("src", verifyimg+'&random='+Math.random());  
      }else{  
          captcha_img.attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());  
      }  
  });
</script>

<script>
 //必须选择同意协议才能点击按钮
  function agree(){
    if(document.getElementById('agree1').checked){
      document.getElementById('reg').disabled=false;
    }else{
      document.getElementById('reg').disabled='disabled'; 
    } 
  }   
</script>

<!-- 注册表单JS验证 start-->
<script>
$(function(){
  //登录名
  $('#loginname').blur(function(){
    var loginname=$('#loginname').val();
    var reg=/^[a-z]{1}([a-z0-9]|[._]){3,12}$/;
    if(loginname==''){
      $('.loginname').html('请输入登录名!');
      $('.loginname').css({'color':'red','fontSize':'12px'});
      return false;
    }

    if(!reg.test(loginname)){
      $('.loginname').html('登录名不合法!');
      $('.loginname').css({'color':'red','fontSize':'12px'});
      return false;
    }

    if(loginname.length<4 ||loginname.length>12){
      $('.loginname').html('登录名长度必须在4-12位之间!');
      $('.loginname').css({'color':'red','fontSize':'11.5px'});
      return false;
    }

    $.post('/gamenoll.com/index.php/Reg/checkloginname',{'loginname':loginname},function(data){
      if(data==true){
          $('.loginname').html('该用户名已注册');
          $('.loginname').css({'color':'red','fontSize':'12px'});
      }else{
        $('.loginname').html('恭喜，此用户名可以使用。');
        $('.loginname').css({'color':'green','fontSize':'12px'});
      }
     })
    })

  //密码
  $('input[type=password]').blur(function(){
    if($(this).is('#password')){
      if($(this).val()==''){ 
        $('.password').html('请输入密码');
        $('.password').css({'color':'red','fontSize':'12px'});
      }else{
        if($(this).val().length<8 || $(this).val().length>=16){
          $('.password').html('密码长度必须在8-16位之间!');
          $('.password').css({'color':'red','fontSize':'11.5px'});
        }else{
          $('.password').html('密码正确');
          $('.password').css({'color':'green','fontSize':'12px'});
        }
      }
    }

    if($(this).is('#repwd')){
      if($(this).val()==''){ 
        $('.repwd').html('请输入确认密码');
        $('.repwd').css({'color':'red','fontSize':'12px'});
      }else{
        if($(this).val().length<8 || $(this).val().length>=16){
          $('.repwd').html('密码长度必须在8-16位之间');
          $('.repwd').css({'color':'red','fontSize':'12px'});
        }else{
          if($('#password').val()!=$('#repwd').val()){
            $('.repwd').html('两次密码不一致');
            $('.repwd').css({'color':'red','fontSize':'12px'});
          }else{
            $('.repwd').html('密码正确');
            $('.repwd').css({'color':'green','fontSize':'12px'});
          }
        } 
      }  
    }
  })

  //昵称
  $('#nicename').blur(function(){
    var nicename=$('#nicename').val();
    if(nicename==''){
      $('.nicename').html('请输入昵称!');
      $('.surname').css({'color':'red','fontSize':'12px'});
      return false;
    }

    if(nicename.length<2 ||nicename.length>=10){
      $('.nicename').html('昵称长度必须在2-10位之间');
      $('.nicename').css({'color':'red','fontSize':'12px'});
      return false;
    }else{
      $('.nicename').html('昵称正确');
      $('.nicename').css({'color':'green','fontSize':'12px'});
    }
  })

  //姓名
  $('#surname').blur(function(){
    var surname=$('#surname').val();
    if(surname==''){
      $('.surname').html('请输入姓氏!');
      $('.surname').css({'color':'red','fontSize':'12px'});
      return false;
    }

    if(surname.length<1 ||surname.length>=20){
      $('.surname').html('姓氏长度必须在1-20位之间');
      $('.surname').css({'color':'red','fontSize':'12px'});
      return false;
    }else{
      $('.surname').html('姓氏正确');
      $('.surname').css({'color':'green','fontSize':'12px'});
    }
  })
  $('#name').blur(function(){
    var name=$('#name').val();
    if(name==''){
      $('.name').html('请输入名字!');
      $('.name').css({'color':'red','fontSize':'12px'});
      return false;
    }

    if(name.length<1 ||name.length>=20){
      $('.name').html('名字长度必须在1-20位之间');
      $('.name').css({'color':'red','fontSize':'12px'});
      return false;
    }else{
      $('.name').html('名字正确');
      $('.name').css({'color':'green','fontSize':'12px'});
    }
  })

  //平假名
  $('#sur_name').blur(function(){
    var sur_name=$('#sur_name').val();
    if(sur_name==''){
      $('.sur_name').html('请输入姓氏!');
      $('.sur_name').css({'color':'red','fontSize':'12px'});
      return false;
    }

    if(sur_name.length<1 ||sur_name.length>=20){
      $('.sur_name').html('姓氏长度必须在1-20位之间');
      $('.sur_name').css({'color':'red','fontSize':'12px'});
      return false;
    }else{
      $('.sur_name').html('姓氏正确');
      $('.sur_name').css({'color':'green','fontSize':'12px'});
    }
  })
  $('#pname').blur(function(){
    var pname=$('#pname').val();
    if(pname==''){
      $('.pname').html('请输入名字!');
      return false;
    }

    if(pname.length<1 ||pname.length>=20){
      $('.pname').html('名字长度必须在1-20位之间');
      $('.pname').css({'color':'red','fontSize':'12px'});
      return false;
    }else{
      $('.pname').html('名字正确');
      $('.pname').css({'color':'green','fontSize':'12px'});
    }
  })

  //验证码
  $('#code').blur(function(){
    var code=$('#code').val();
    if(code==''){
      $('.code').html('请输入验证码!');
      $('.code').css({'color':'red','fontSize':'12px'});
      return false;
    }

    $.post('/gamenoll.com/index.php/Reg/jscode',{'code':code},function(data){
      if(data==1){
          $('.code').html('验证码错误');
          $('.code').css({'color':'red','fontSize':'12px'});
      }else{
        $('.code').html('验证码正确');
        $('.code').css({'color':'green','fontSize':'12px'});
      }
     })
  })


  //年
  $('#sel_year').blur(function(){
    var year=$('#sel_year').val();
    if(year!='0'){
      $('.year').html('年份已选');
      $('.year').css({'color':'green','fontSize':'12px'});
    }
  })
  //月
  $('#sel_month').blur(function(){
    var mon=$('#sel_month').val();
    if(mon!='0'){
      $('.year').html('月份已选');
      $('.year').css({'color':'green','fontSize':'12px'});
    }
  })
  //日
  $('#sel_day').blur(function(){
    var day=$('#sel_day').val();
    if(day!='0'){
      $('.year').html('日期已选');
      $('.year').css({'color':'green','fontSize':'12px'});
    }
  })

  // 协议
  // $('#tj').click(function(){
  //   $.post('/gamenoll.com/index.php/Reg/reginfo',{'agree1':agree1},function(data){
  //     alert(data);
  //     if(data==1){
  //         $('.agree1').html('已同意此协议!');
  //         $('.agree1').css({'color':'green','fontSize':'12px'});
  //     }else{
  //       $('.agree1').html('请选择同意此协议!');
  //       $('.agree1').css({'color':'red','fontSize':'12px'});
  //     }
  //    })
  // })


  $('#reg').click(function(){
    var loginname=$('#loginname').val();
    var password=$('#password').val();
    var repwd=$('#repwd').val();
    var surname=$('#surname').val();
    var name=$('#name').val();
    var sur_name=$('#sur_name').val();
    var pname=$('#pname').val();
    var agree=$('#agree').val();
    var sex=$('#sex').val();
    var agree=$('#agree1').val();
    var code=$('#code').val();
    var year=$('#sel_year').val();
    var mon=$('#sel_month').val();
    var day=$('#sel_day').val();

    if(loginname==''){$('.loginname').html('请输入用户名'); return false;}
    if(password==''){$('.password').html('请输入用户密码'); return false; }
    if(repwd==''){$('.repwd').html('请输入确认密码'); return false; }
    if(surname==''){$('.surname').html('请输入姓氏'); return false; }
    if(name==''){$('.name').html('请输入名字'); return false; }
    if(sur_name==''){$('.sur_name').html('请输入平假名姓氏'); return false; }
    if(pname==''){$('.pname').html('请输入平假名名字'); return false; }
    if(code==''){$('.code').html('请输入验证码'); return false; }
    if(agree==''){$('.agree1').html('请同意此协议'); return false; }
    if(sex==''){$('.sex').html('请选择性别'); return false; }
    if(year=='0'){$('.years').html('请完善出生日期'); return false; }
    if(mon=='0'){$('.years').html('请完善出生日期'); return false; }
    if(day=='0'){$('.years').html('请完善出生日期'); return false; }

    $.post('/gamenoll.com/index.php/Reg/reginfo',{'loginname':loginname,'password':password,'surname':surname,'name':name,'sur_name':sur_name,'pname':pname,'sex':sex,},function(data){
      if(data==1){
        // alert('注册成功');
        window.location.href='/gamenoll.com/index.php/Reg/infoverify';
        return false;
      }else if(data==2){
        // alert('注册失败');
        return false;
      }
    })
  })

})

</script>

<!-- 注册表单JS验证 end-->
</body>
</html>