<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  if($_POST)
  {
  	  
    $adi_soyadi = $_POST['adi_soyadi'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $mesaj = $_POST['mesaj'];

    //DB::insert("INSERT INTO iletisim(adi_soyadi,telefon,email,mesaj) VALUES(?,?,?,?) ",array(
      //   $adi_soyadi,
        // $telefon,
        // $email,
       //  $mesaj
    //));
    
    $mail_icerik = "Merhaba yönetici sitenizden yeni bir iletişim formu gönderildi.Bilgileri aşağıdadır.<br>";
    $mail_icerik  .="Adı Soyadı: $adi_soyadi<br>";
    $mail_icerik .="Telefon Numarası: $telefon<br>";
    $mail_icerik .="Email Adresi: $email<br>";
    $mail_icerik .="Mesajı: $mesaj<br>";


    require 'phpmg/phpmailer/PHPMailer-master/src/Exception.php';
    require 'phpmg/phpmailer/PHPMailer-master/src/PHPMailer.php';
    require 'phpmg/phpmailer/PHPMailer-master/src/SMTP.php';
    
    $mail = new PHPMailer(true);

try {
    
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'hbcoinstr@gmail.com';
    $mail->Password   = 'gboytbdsjdiwhguz';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom("dberk3531@gmail.com","iletişim formu");
    $mail->addAddress('hbcoinstr@gmail.com', 'HBCoinsTR Ekibi');
    //Content
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Sitenizden iletişim formu gönderildi.';
    $mail->Body    = $mail_icerik;
    $mail->AltBody = $mail_icerik;

    $mail->send();
    
  } 
  catch (Exception $e) {
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   die();
  }


   header("Location:iletisim.php?success=1");


  }


?>