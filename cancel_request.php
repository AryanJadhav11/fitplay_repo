<?php

$server = 'localhost';
$user = 'root';
$db = 'turf';
$pass = '';

$coni = mysqli_connect($server, $user, $pass, $db);

if (!$coni) {
    die(mysqli_error($coni));
}
include('smtp/PHPMailerAutoload.php');

function smtp_mailer($to, $subject, $message) {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "jadhavaryan467@gmail.com";
    $mail->Password = "oozzyqfwnpufjuqi";
    $mail->SetFrom("jadhavaryan467@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AddAddress($to);
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    if (!$mail->Send()) {
        return $mail->ErrorInfo;
    } else {
        return 'Sent';
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    // Retrieve the request ID
    $id = $_POST['id'];

    // Retrieve the specific request from the database
    $sql = "SELECT * FROM pending_requests WHERE id = $id";
    $result = mysqli_query($coni, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $requestData = mysqli_fetch_assoc($result);

        // Insert data into turf_owner table
        
        $sqlDelete = "DELETE FROM pending_requests WHERE id = $id";
       
        
        $quepro = mysqli_query($coni, $sqlDelete);

        if ($quepro) {
            // Send approval email to the owner
            $to = $requestData['email'];
            $subject = 'Sorry ! Your Request has been Rejected';
            $message = "Hey, {$requestData['fullName']}, your request for the registration of {$requestData['venueName']} has been Rejected. For Refund please contact thefitplay@gmail.com";
            $result = smtp_mailer($to, $subject, $message);
        
            if ($quepro) {
                // Redirect back to the confirmation page
                header('Location: requests.php');
                exit;
            } else {
                echo "Error deleting request from the database.";
            }
        } else {
            echo "Error inserting data into turf_owner table: " . mysqli_error($coni);
        }
    } else {
        echo "Invalid request ID or request not found.";
    }
}

mysqli_close($coni);
?>

