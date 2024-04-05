


<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader



require 'PHPmailer/Exception.php';
require 'PHPmailer/PHPMailer.php';
require 'PHPmailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'omrandive1006@gmail.com';                     //SMTP username
    $mail->Password   = 'epngvczxwxgzwiez';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    //Recipients
    $mail->setFrom('omrandive1006@gmail.com', 'FitPlay Gyms');
    $mail->addAddress('omrandive1055@gmail.com', 'forge');     //Add a recipient


   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'this is to enquire about gym';
    $mail->Body = 'Sender Mail-  aksugfasgklashdgflkagskhlfgaljd';

    $mail->send();

    echo 'Message has been sent';
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>