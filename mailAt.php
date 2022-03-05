<?php
   $atilacakMail=$_GET["atilacakMail"];
   $icerik=$_GET["icerik"];
   $icerik=$icerik." http://hidroist1453.com/GorevTakip/ ";
   require("/home/fhtl794gr69e/public_html/PHPMailer.php");
   require("/home/fhtl794gr69e/public_html/SMTP.php");
   require("/home/fhtl794gr69e/public_html/PHPMailerAutoload.php");
   $mail = new PHPMailer();
   $mail->isSMTP();
   $mail->Host = 'localhost';
   $mail->SMTPAuth = false;
   $mail->SMTPAutoTLS = false; 
   $mail->Port = 25; 
   $mail->Username = 'hidroist@hidroist1453.com';
   $mail->Password = 'Hidroist1453';
   $mail->SetFrom($mail->Username, 'Hidroist');
   $mail->AddAddress($atilacakMail, '');
   $mail->CharSet = 'UTF-8';
   $mail->Subject = 'Hidroist Görev Takip';
   $mail->MsgHTML($icerik);
   if($mail->Send()) {
      echo 'Mail gönderildi!';
      @header("location:anasayfaOgretmen.php");
   } else {
      echo 'Mail gönderilirken bir hata oluştu: ' . $mail->ErrorInfo;
   }
?>