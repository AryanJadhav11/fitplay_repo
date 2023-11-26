<?php

// Replace 'thefitplay@example.com' with your real receiving email address
$receiving_email_address = 'thefitplay@example.com';

// Check if the necessary fields are set
if (isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {

    // Create email headers
    $headers = "From: {$_POST['name']} <{$_POST['email']}>\r\nReply-To: {$_POST['email']}";

    // Compose the email message
    $message = "Name: {$_POST['name']}\n";
    $message .= "Email: {$_POST['email']}\n";
    $message .= "Subject: {$_POST['subject']}\n\n";
    $message .= "Message:\n{$_POST['message']}";

    // Send the email
    $success = mail($receiving_email_address, $_POST['subject'], $message, $headers);

    if ($success) {
        echo 'Email sent successfully!';
    } else {
        echo 'Error sending email. Please try again later.';
    }

} else {
    echo 'Incomplete form data. Please fill in all required fields.';
}
?>
