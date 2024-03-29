<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/OAuth.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/POP3.php';
require 'PHPMailer-master/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'user@example.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
// function sendmail($email,$name,$subject, $body){
// 	try {
// 		$mail = new PHPMailer(false);
// 		//Server settings
// 		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
// 		$mail->isSMTP();                                            //Send using SMTP
// 		$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
// 		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
// 		$mail->Username   = 'longnguyen22100@gmail.com';                     //SMTP username
// 		$mail->Password   = 'j2teamnnl.teachable.com';                               //SMTP password
// 		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
// 		$mail->Port       = 587;
// 		$mail->SMTPSecure = 'tls';
// 		$mail -> charSet = "UTF-8";                                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	
// 		//Recipients
// 		$mail->setFrom('longnguyen22100@gmail.com', 'ABC');
// 		$mail->addAddress('$email', '$name');
	
// 		//Attachments
// 		$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
// 		$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
	
// 		//Content
// 		$mail->isHTML(true);                                  //Set email format to HTML
// 		$mail->Subject = $subject;
// 		$mail->Body    = $body;
	
// 	} catch (Exception $e) {
// 		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// 	}
// }
