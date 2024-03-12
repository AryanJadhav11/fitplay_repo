<?php
if(isset($_POST['submit'])){
  $name = $_POST['userFirstName'];
  $email = $_POST['userMail'];
  // Other form data...

  // Include PHPMailer autoloader
  require 'path/to/PHPMailerAutoload.php';

  // Create a new PHPMailer instance
  $mail = new PHPMailer;

  // Enable SMTP
  $mail->isSMTP();

  // SMTP authentication
  $mail->SMTPAuth = true;

  // SMTP server details
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  $mail->Username = 'aryanjadhav686@gmail.com'; // Your Gmail address
  $mail->Password = 'oozzyqfwnpufjuqi'; // Your Gmail password

  // Set From and To addresses
  $mail->setFrom('your_email@gmail.com', 'Your Name'); // Sender's email and name
  $mail->addAddress($email, $name); // Recipient's email and name

  // Email subject and body
  $mail->Subject = 'Subject of your email';
  $mail->Body    = 'Body of your email';

  // Set email format to HTML
  $mail->isHTML(true);

  // Send email
  if(!$mail->send()) {
    echo 'Error: ' . $mail->ErrorInfo;
  } else {
    echo 'Mail sent successfully!';
  }
} else {
  echo 'Error: Form not submitted';
}
?>
