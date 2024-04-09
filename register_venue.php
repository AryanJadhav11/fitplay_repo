<?php
$server = 'localhost';
$user = 'root';
$db = 'turf';
$pass = '';

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['razorpay_payment_id']) && !empty($_POST['razorpay_payment_id'])) {
    $fullName = isset($_POST['full-name']) ? $_POST['full-name'] : '';
    $email = isset($_POST['your-email']) ? $_POST['your-email'] : '';
    $phoneNumber = isset($_POST['number']) ? $_POST['number'] : '';
    $venueName = isset($_POST['venue']) ? $_POST['venue'] : '';
    $locationLink = isset($_POST['map']) ? $_POST['map'] : '';


    // Moved the database insertion inside Razorpay payment handler
    $sql = "INSERT INTO pending_requests (fullName, email, phoneNumber, venueName, locationLink) 
            VALUES ('$fullName', '$email', '$phoneNumber', '$venueName', '$locationLink')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the confirmation page with the last inserted ID
        // header('Location: requests.php?id=' . $conn->insert_id);
        // exit;
        $to = "thefitplay@gmail.com";
        $subject = 'New Request for turf listing';
        $message = "Hey, fitplay, there's a new request for listing of turf. View it here: http://localhost/fitplay_repo/requests.php";
        $result = smtp_mailer($to, $subject, $message);

    } else {
        echo "Error: ";
    }

    $conn->close();
}
?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v6 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="nunito-font.css">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
	<!-- Main Style Css -->
    <link rel="stylesheet" href="style_owner.css"/>
</head>
<body class="form-v6">
	<div class="page-content">
		<div class="form-v6-content">
			<div class="form-left">
				<img src="https://img.freepik.com/free-photo/portrait-young-man-playing-football_23-2148867381.jpg?t=st=1710019327~exp=1710022927~hmac=bfab0c51917e8af705343c43c003d78ad7c6829d04ed1cc1e201e74c7c4d0aa9&w=360" alt="form" height="590px">
			</div>
			<form class="form-detail" id="regisform" method="post">
				<h2>Register Your Venue</h2>
				<div class="form-row">
					<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Your Name" required>
				</div>
				<div class="form-row">
					<input type="text" name="your-email" id="your-email" class="input-text" placeholder="Email Address" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-row">
					<input type="number" name="number" id="number" class="input-text" placeholder="Phone Number" required>
				</div>
				<div class="form-row">
					<input type="text" name="venue" id="venue" class="input-text" placeholder="Venue Name" required>
				</div>
				<div class="form-row">	
					<input type="text" name="map"  id="map"  placeholder="Location link of turf"  required>
				  </div>
                  <input type="hidden" id="razorpay_payment_id" name="razorpay_payment_id" value="">

				<div class="form-row-last">
					<input  id="payButton"  type="submit" style="background-color: #007aff;"class="register" value="Submit">
				</div>
			</form>
		</div>
	</div>

    <script>
         document.getElementById('payButton').addEventListener('click', function(e) {
            e.preventDefault();
            var options = {
                "key": "rzp_live_GTGlhqoi4rsmHV",
                "amount": "1" * 100,
                "currency": "INR",
                "name": "One Time Registration Fee",
                "description": "Let , set , go online",
                "image": "logo.png",
                "handler": function(response) {
    if (response.razorpay_payment_id) {
        // If payment is successful, set a hidden input field with payment ID
        document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
        // Then submit the form
        document.getElementById('regisform').submit();
    } else {
        // If payment fails, handle accordingly (e.g., show error message)
        alert('Payment failed. Please try again.');
    }
},
                "prefill": {
                    "name": document.getElementById('full-name').value,
                    "email": document.getElementById('your-email').value
                },
                "theme": {
                    "color": "#083271"
                }
            };
            var rzp = new Razorpay(options);
            rzp.open();
        });
        </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>