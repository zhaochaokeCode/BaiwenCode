<?php
    /**
     * 邮件发送函数
     */
    function sendMail($to, $title, $content) {
     
        Vendor('PHPMailer.PHPMailerAutoload');
        $mail = new PHPMailer(); //实例化
        $mail->IsSMTP(); // 启用SMTP
        $mail->Host='smtp.126.com'; //smtp服务器的名称（这里以QQ邮箱为例）
        $mail->SMTPAuth = true; //启用smtp认证
        $mail->Username = 'gamenoll@126.com'; //你的邮箱名
        $mail->Password = 'gamenoll123'; //邮箱密码
        $mail->From = 'gamenoll@126.com'; //发件人地址（也就是你的邮箱地址）
        $mail->FromName = 'GAMENOLL'; //发件人姓名
        $mail->AddAddress($to,"尊敬的客户");
        $mail->WordWrap = 50; //设置每行字符长度
        $mail->IsHTML(TRUE); // 是否HTML格式邮件
        $mail->CharSet='utf-8'; //设置邮件编码
        $mail->Subject =$title; //主题
        $mail->Body = $content; //内容
        $mail->AltBody = "这是一个纯文本的身体在非营利的HTML电子邮件客户端"; //正文不支持HTML的备用显示

        if($mail->Send()){
            return true;
        }else{
            // echo  $mail->ErrorInfo;
            return false;
        }
        exit();
    }

    function yahoo(){
        Vendor('YConnect.YConnectClient');
        $yahoo = new YConnectClient();
        return $yahoo;
    }

    