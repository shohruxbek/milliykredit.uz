<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // �������� ��������� ����� �������

$mail->isSMTP();                                      // ��������� ��� ���������� SMTP
$mail->Host = 'server1.ahost.uz';  // ������� SMTP ������
$mail->SMTPAuth = true;                               // ��������� �������� ����������� SMTP
$mail->Username = 'admin@milliykredit.uz';                 // ����� ��������� �����
$mail->Password = '$P~OI^g*mR*g';                           // ������ 
$mail->SMTPSecure = 'ssl';                            // ��������� ����� ����������� ���������� TLS ��� SSL � ����� ������ SSL
$mail->Port = 465;                                    // ���� ��� SSL - 465, TLS 587.

$mail_body = '
    <b>Message Num :</b> 769<br />
    <b>Message Date :</b> 2013-04-08 09:03:21<br />
    <b>Name :</b> John Doe<br />
    <b>Phone :</b> 123456789<br />
    <b>E-mail :</b> abcdf@somedomain.com<br />
    <b>Message :</b> Here is the message info<br />
';

//$recipients = array("milliykredituz@gmail.com","hukmdor2018@gmail.com");
/*foreach(milliykredituz@gmail.com as $mail_add) {
    $mail->AddAddress($mail_add);
}*/

    $mail->addAddress('milliykredituz@gmail.com');

$mail->setFrom("salom from");
 $mail->Subject="salom subekt";
$mail->IsHTML(true);
$mail->Body = $mail_body;
if(!$mail->Send()) {
    echo $mail->ErrorInfo;
} else { 
        echo "Mail sent...";
}