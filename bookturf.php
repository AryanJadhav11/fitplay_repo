<?php
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

// Database connection
$server = 'localhost';
$user = 'root';
$db = 'turf';
$pass = '';

$coni = mysqli_connect($server, $user, $pass, $db);

if (!$coni) {
    die(mysqli_error($coni));
}
if(isset($_GET['id']))
{
   $blid=$_GET['id'];
   $sql9="SELECT * FROM `grd` WHERE id='$blid';";
   $res9=mysqli_query($coni,$sql9);
   $row9=mysqli_fetch_assoc($res9);
  
}
$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get booking information from the form
    $name = isset($_POST['turfname']) ? $_POST['turfname'] : ''; // Ensure $name is defined and not null
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $startTime = isset($_POST['startTime']) ? $_POST['startTime'] : '';
    $endTime = isset($_POST['endTime']) ? $_POST['endTime'] : '';
    $userName = isset($_POST['userName']) ? $_POST['userName'] : '';
    $userEmail = isset($_POST['userEmail']) ? $_POST['userEmail'] : '';

    // Check if the chosen date and time slot is already booked for the specific turf
    $checkSql = "SELECT * FROM booking WHERE turfname = '$name' AND date = '$date' AND ((startTime <= '$startTime' AND endTime > '$startTime') OR (startTime < '$endTime' AND endTime >= '$endTime'))";
    $result = $coni->query($checkSql);

    if ($result && $result->num_rows > 0) {
        // Turf is already booked for the selected date and time
        $response['success'] = false;
        $response['error'] = 'The selected turf is already booked on the specified date and time. Please choose a different date and time.';
    } else {
        // Insert booking into the database
        $insertSql = "INSERT INTO booking (turfname, date, startTime, endTime, userName, userEmail) VALUES ('$name', '$date', '$startTime', '$endTime', '$userName', '$userEmail')";

        if ($coni->query($insertSql) === TRUE) {
            // Send email notification only when the booking is successful
            $to = 'aryanjadhav686@gmail.com';
            $subject = 'New Booking';
            $message = "New booking by $userName on $date from $startTime to $endTime for turf $name.";
            $result = smtp_mailer($to, $subject, $message);

            if ($result === 'Sent') {
                // Email sent successfully
                $response['email_status'] = 'Email sent successfully.';
            } else {
                // Email sending failed
                $response['email_status'] = 'Email sending failed. ' . $result;
            }

            // Send success response
            $response['success'] = true;
        } else {
            // Send error response with details
            $response['success'] = false;
            $response['error'] = mysqli_error($coni);
        }
    }
}

$coni->close();

// Display the response
echo json_encode($response);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turf Booking Platform</title>
</head>
<body>
    <h1>Welcome to the Turf Booking Platform</h1>
    
    <!-- Booking form -->
    <form id="bookingForm"  method="POST">
        <input type="text" id="turfname" name="turfname" value="<?= ucfirst($row9['name']) ?>" >
        <label for="bookingDate">Select Date:</label>
        <input type="date" id="bookingDate" name="date" required>

        <label for="startTime">Start Time:</label>
        <input type="time" id="startTime" name="startTime" required>

        <label for="endTime">End Time:</label>
        <input type="time" id="endTime" name="endTime" required>

        <label for="userName">Your Name:</label>
        <input type="text" id="userName" name="userName" required>

        <label for="userEmail">Your Email:</label>
        <input type="email" id="userEmail" name="userEmail" required>

        <button type="submit" >Book Now</button>
    </form>
    <script>
        // Make the input boxes readonly using JavaScript
      
        document.getElementById('turfname').readOnly = true;
    </script>
</body>
</html>

</html>
