<?php
header('Content-Type: text/html; charset=utf-8');
$phone = $_POST["phone"];
$phone = $phone;
$regex = '/^\+{0,1}[0-9\-]{7,11}$/';
if(preg_match($regex,$phone)){
    require ("../PHPMailer/PHPMailerAutoload.php");
    $mail = new PHPMailer;
//    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sales2@seltex.ru';                 // SMTP username
    $mail->Password = '1qwerty12345';
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
    $mail->setFrom('sales2@seltex.ru', 'SELTEX.RU');
    $mail->addAddress('sales@seltex.ru');               // Name is optional
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Заказ обратного звонка с сайта';
    $mail->Body    = 'Перезвонить на номер: '.$phone;
    $mail->AltBody = 'Перезвонить на номер: '.$phone;

    if(!$mail->send()) {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
} else echo false;
?>
