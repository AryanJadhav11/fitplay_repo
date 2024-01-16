<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "jadhavaryan467@gmail.com";
$from = "your-email@example.com"; // Replace with your actual email address

// Set SMTP settings


$heads = "From: $from\r\n" .
         "Reply-To: $email\r\n" .
         "X-Mailer: PHP/" . phpversion();

if ($email != null) {
    mail($to, $subject, $message, $heads);
}
?>
