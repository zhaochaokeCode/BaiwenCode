<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>三国志　ロード・オブ・バトル</title>
    <link rel="stylesheet" type="text/css" href="/Public/home/css/style.css" />
    <script src="/Public/home/js/jquery-1.7.1.min.js"></script>
    <script src="/Public/home/js/nav.js" type="text/javascript"></script>
    <script src="/Public/home/js/Validform_v5.3.2_min.js"></script>
  </head>
  
  <body class="san_subbody">
    <div class="san_menu">
  <ul id="nav_all">
      <li><a href="/index.php/exnews" class="sanM1"></a></li>
        <li><a href="/index.php/desc" class="sanM2"></a>
          <div class="abso">
              <ul class="sanSub1">
                    <li><a href="/index.php/desc/index/type/ゲーム紹介" class="sanSubM11"></a></li>
                    <li><a href="/index.php/desc/index/type/初心者ガイド" class="sanSubM12"></a></li>
                    <li><a href="/index.php/desc/index/type/ゲームガイド" class="sanSubM13"></a></li>
                </ul>
            </div>
        </li>
        <li><a href="sdfsdf" class="sanM3"></a></li>
        <li><a href="sdfsdf" class="sanM4"></a>
          <div class="abso">
                <ul class="sanSub2">
                    <li><a href="ddfsdfdsf" class="sanSubM21"></a></li>
                    <li><a href="/index.php/Question" class="sanSubM22"></a></li>
                    <li><a href="ddfsdfdsf" class="sanSubM23"></a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>
<div class="sanSubGohome"><a href="/index.php/index" title="サイトトップへ"></a></div>
<div class="san_cont">
      <div class="sanClist_top">
        <div class="sanClist_head">
          <div class="sanClist fl">
            <div class="sanListSubTi2">
                  <div class="sanGotoMain"><a href="/index.php/index">サイトトップ</a></div>
                  <div class="sanLiSuHere4"></div>
                </div>
            <div class="clear"></div>
            <div class="sanLiSubConTi">ゲームに関するお問い合わせ</div>
            <div class="sanOtoyiCon">
              <div class="sanOtoyiConTi">インストールができないなどの技術的な問題が発生したり、会員IDやお支払いに関するお問い合わせについては、本ページからご連絡ください。
                <br />「ゲームが起動しない」などのハードウェアに関連する問題が発生している場合には、できる限り詳細をお知らせください。
                <p>※ 返信は「メールアドレス」の項目に入力されたメールアドレスに対して行います。
                  <br />※ 内容によりましては調査が必要なためご返信にお時間がかかる場合もあります。
                  <br />※ ゲーム内容に関するご質問などについてはお答えすることはできませんので、あらかじめご了承ください。
                  <br />※ 土日祝日のお問い合わせへの返信対応は翌営業日以降となりますので、あらかじめご了承ください</p></div>
              <div class="sanOtoyihr"></div>
              <form action="/index.php/Question/add" method="post" enctype="multipart/form-data" class="myform">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="sanOtoyiCc">
                  <tr>
                    <td class="sanOtoyiCc_td1">メールアドレス:</td>
                    <td>
                      <label for="mailAdd"></label>
                      <input type="text" name="u_email" id="mailAdd" datatype="e" nullmsg="【メールアドレス】を入力してください。" errormsg="【メールアドレス】を入力してください。" value="<?php echo ($_SESSION['userinfo']['email']); ?>" />
                      <span>※必須</span> <div class="Validform_checktip"></div> </td>
                  </tr>
                  <tr>
                    <td class="sanOtoyiCc_td1">お問い合わせ分類:</td>
                    <td>
                      <label for="questionCategory"></label>
                      <select name="q_type" id="questionCategory" nullmsg="【お問い合わせ分類】を選択してください。" datatype="*">
                        <option value="" selected="selected">-- 選択してください --</option>
                        <option value="不正報告">不正報告</option>
                        <option value="有料ポイント購入">有料ポイント購入</option>
                        <option value="ご質問">ご質問</option>
                        <option value="ご意見">ご意見</option>
                        <option value="その他">その他</option></select>
                      <span>※必須</span><div class="Validform_checktip"></div></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td class="sanOtoyiCc_td1">ご使用キャラクター名:</td>
                    <td>
                      <label for="textcharacterfield2"></label>
                      <input type="text" name="r_name" id="character" nullmsg="【キャラクター名】を入力してください。" datatype="r2-6" errormsg="【キャラクター名】を入力してください。"/>
                      <span>※必須</span><div class="Validform_checktip"></div></td>
                  </tr>
                  <tr>
                    <td class="sanOtoyiCc_td1">サーバー名:</td>
                    <td>
                      <label for="serverName" nullmsg="【サーバー名】を選択してください。"></label>
                      <select name="s_id" id="serverName">
                      <?php if(is_array($servers)): foreach($servers as $key=>$server): ?><option value="<?php echo ($server["s_id"]); ?>"><?php echo ($server["s_name"]); ?></option><?php endforeach; endif; ?>
                      </select>
                      <span>※必須</span><div class="Validform_checktip"></div></td>
                  </tr>
                  <tr>
                    <td class="sanOtoyiCc_td1">発生日時:</td>
                    <td>
                      <label for="year"></label>
                      <input name="year" type="text" id="year" maxlength="4" datatype="n" errormsg="请填写数字"/>年
                      <input name="month" type="text" id="month" maxlength="2" datatype="n" errormsg="请填写数字"/>月
                      <input name="day" type="text" id="day" maxlength="2" datatype="n" errormsg="请填写数字"/>日
                      <input name="time" type="text" id="time" maxlength="2" datatype="n" errormsg="请填写数字"/>時
                      <div class="Validform_checktip"></div>
                      </td></tr>
                  <tr>
                    <td class="sanOtoyiCc_td1">ご使用のブラウザ:</td>
                    <td>
                      <label for="browser"></label>
                      <select name="u_browser" id="browser" title="選択してください">
                        <option value="" selected="selected">-- 選択してください --</option>
                        <option value="Internet Explorer 9">Internet Explorer 9</option>
                        <option value="Internet Explorer 10">Internet Explorer 10</option>
                        <option value="Internet Explorer 11">Internet Explorer 11</option>
                        <option value="Microsoft Edge">Microsoft Edge</option>
                        <option value="Firefox">Firefox</option>
                        <option value="Safari">Safari</option>
                        <option value="Google Chrome">Google Chrome</option>
                        <option value="その他">その他(お問い合せ内容に記入してください)</option>
                        <option value="わからない">わからない</option></select>
                    </td>
                  </tr>
                  <tr>
                    <td class="sanOtoyiCc_td1">ご使用のOS:</td>
                    <td>
                      <label for="systemOS"></label>
                      <select name="os" id="systemOS" title="選択してください">
                        <option value="" selected="selected">-- 選択してください --</option>
                        <option value="Microsoft Windows 7以前">Microsoft Windows 7以前</option>
                        <option value="Microsoft Windows 7">Microsoft Windows 7</option>
                        <option value="Microsoft Windows 8">Microsoft Windows 8</option>
                        <option value="Microsoft Windows 10">Microsoft Windows 10</option>
                        <option value="Mac OS X 10.4以前">Mac OS X 10.4以前</option>
                        <option value="Mac OS X 10.5以降">Mac OS X 10.5以降</option>
                        <option value="その他">その他(お問い合せ内容に記入してください)</option>
                        <option value="わからない">わからない</option></select>
                    </td>
                  </tr>
                  <tr>
                    <td class="sanOtoyiCc_td1">その他の場合:</td>
                    <td>
                      <label for="otherInfo"></label>
                      <input type="text" name="communication" id="otherInfo" /></td>
                  </tr>
                  <tr>
                    <td class="sanOtoyiCc_td1">お問い合せ内容:</td>
                    <td valign="top">
                      <label for="textarea"></label>
                      <textarea name="content" id="textarea" cols="45" rows="5" nullmsg="【お問い合せ内容】を入力してください。" datatype="content" errormsg="【お問い合せ内容】を入力してください。"></textarea>
                      <span>※必須</span><div class="Validform_checktip"></div></td>
                  </tr>
                  <tr>
                    <td class="sanOtoyiCc_td1">ファイル添付:</td>
                    <td>
                      <label for="fileField"></label>
                      <input type="file" name="q_img" id="fileField" title="ファイル添付" value="" onchange="getPhotoSize(this)"/>
                      <div id="imgsp"></div>
                    </td>
                  </tr>
                </table>
                <input type="submit" value="提交" /></form>
            </div>
          </div>

          <div class="sanGameStart fr">
            <a href="/index.php/Games/index?gid=<?php echo ($g_id); ?>" class="sanGStart"></a>
          </div>
          <div class="san_m_login fr">
        <?php if(!isset($_SESSION['userinfo'])): ?><form action="/index.php/exlogin/login" method="post">
                <input name="loginname" type="text" class="sanMlogInput sanMlogId" />
                <input name="password" type="password"  class="sanMlogInput sanMlogPw" />
                <input type="hidden" name="csrf" value="<?php echo ($csrf); ?>"/>
                <input name="submit" type="image" src="/Public/home/images//login_button.jpg" width="232" height="46" style="margin:2px 0 10px 0;" />
                <a href="sdfsdsdf" style="margin-left:12px;"><img src="/Public/home/images//id_forget.png" width="206" height="20" alt="ID・パスワードを忘れた方" /></a>
            </form>
            
        <?php else: ?>
            <b>欢迎您 <a href="/index.php/login/personal"><font color="red"><?php echo ($_SESSION['userinfo']['nicename']); ?></font></a> !!! </b>
             &nbsp;&nbsp;&nbsp;
            <a  href="/index.php/Exlogin/loginout"><button>退出</button></a>
            <br />
            最近登录: 
            <br />
            <?php if(is_array($last_login)): foreach($last_login as $key=>$login_server): echo ($login_server["server_info"]["s_name"]); ?>
                 服务器 &nbsp;&nbsp;&nbsp;<?php endforeach; endif; ?>

            <br />
            <a href="/index.php/login/personal"><font color="red">个人信息</font></a> &nbsp;&nbsp;&nbsp; <font color="red">* <?php echo ($_SESSION['userinfo']['rc']); ?> 平台币</font><?php endif; ?>
        </div>
 
        <div class="san_openid_log fr">
            <a href="/index.php/index/thirdLogin?type=yahoo"></a><!--yahoo-->
            <a href="/index.php/index/thirdLogin?type=google"></a><!--google-->
            <a href="/index.php/index/thirdLogin?type=Twitter"></a><!--twitter-->
            <a href="/index.php/index/'thirdLogin?type=Facebook"></a><!--facebook-->
        </div>
        <div class="sanC_4 fr">
            <a href="/index.php/reg" target="_blank"><img src="/Public/home/images/join_button.jpg" width="275" height="87" /></a>
            <a href="/index.php/pay" target="_blank"><img src="/Public/home/images/bill_button.jpg" width="275" height="87" /></a>
            <a href="sdfsdff" target="_blank"><img src="/Public/home/images/hajime_button.jpg" width="275" height="87" /></a>
        </div>
        <div class="clear"></div>
    </div>
    </div>
    <div class="sanC_bottom"></div>
</div>
</body>
  <script type="text/javascript">
  $(function() {
      $(".myform").Validform({
        tiptype: 3,
        showAllError: false,
        datatype:{
          "content":/^[\w\W]{1,500}$/,
        },
      });

    })

  var Phone = true;
   function getPhotoSize(obj){
        photoExt=obj.value.substr(obj.value.lastIndexOf(".")).toLowerCase();//获得文件后缀名\

        if(photoExt != '.jpg' && photoExt != '.jpeg' && photoExt != '.png' && photoExt != '.gif'){
           $("#imgsp").text("请上传后缀名为.jpg或.jpeg或.png或.gif的图片");
            //alert("请上传后缀名为jpg的照片!");
            return Phone = false; 
          
        }else{
           $("#imgsp").text("");
           return Phone = true;
        }
        var fileSize = 0;
        var isIE = /msie/i.test(navigator.userAgent) && !window.opera;            
        if (isIE && !obj.files) {          
             var filePath = obj.value;            
             var fileSystem = new ActiveXObject("Scripting.FileSystemObject");   
             var file = fileSystem.GetFile (filePath);               
             fileSize = file.Size;         
        }else {  
             fileSize = obj.files[0].size;     
        } 
        fileSize=Math.round(fileSize/1024*100)/100; //单位为KB
        if(fileSize>=500){
            $("#imgsp").text("照片最大尺寸为500KB，请重新上传!");
            return Phone = false;
         }else{
            $("#imgsp").text("");
            return Phone = true;
         }
    }

    $(".myform").submit(function(){
      if(!Phone){
          return false;
      }
    });
    </script>

</html>