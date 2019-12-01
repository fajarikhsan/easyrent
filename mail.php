<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';
    $mail = new PHPMailer(true);                  
    $mail->SMTPDebug = 0;                                
    $mail->isSMTP();                            
    $mail->Host = 'mail.fajarikhsan.xyz';  
    $mail->SMTPAuth = true;  
    //ganti dengan email dan password yang akan di gunakan sebagai email pengirim                  
    $mail->Username = 'easyrent@fajarikhsan.xyz';       
    $mail->Password = 'easyrent';                       
    $mail->SMTPSecure = 'ssl';                           
    $mail->Port = 465;                                  
    //ganti dengan email dan nama kamu
    $mail->setFrom('support@easyrent.com', 'EasyRent');

    $mail->addAddress($_POST['email'], $_POST['nama']);     
    $mail->isHTML(true);                                 
    $mail->Subject = "Aktivasi pendaftaran Member";
    $mail->Body    = "Selamat, anda berhasil membuat akun. Untuk mengaktifkan akun anda silahkan klik link dibawah ini.<br> <a href='http://localhost/easyrentv2/aktivasi.php?t=".$token."'>http://localhost/easyrentv2/aktivasi.php?t=".$token."</a>  ";
    $mail->send();
?>