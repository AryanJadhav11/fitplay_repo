<?php include('header.php') ?>


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
    $mail->address = "jadhavaryan467@gmail.com";
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
$db = 'fitplay_users';
$pass = '';

$coni = mysqli_connect($server, $user, $pass, $db);

if (!$coni) {
    die(mysqli_error($coni));
}

// Retrive Data from mycart to display order details
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sub'])) {

    // Data validation
    $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : '';
    $gtotal = isset($_POST['payableAmount']) ? mysqli_real_escape_string($coni, $_POST['payableAmount']) : '';
   // $itemid = isset($_POST['itemid']) ? mysqli_real_escape_string($coni, $_POST['itemid']) : '';


    // Ensure the 'gtotal' value is received
    if (empty($gtotal)) {
        // Handle the case when 'gtotal' is not received
        echo "Payable amount is missing.";
        exit; // Stop further execution
    }
}


if(isset($_GET['user_id']))
{
   $blid=$_GET['user_id'];
   $sql9="SELECT * FROM `order_manager` WHERE user_id='$blid';";
   $res9=mysqli_query($coni,$sql9);
   $row9=mysqli_fetch_assoc($res9);

}
$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get booking information from the form
    $name = isset($_POST['fname']) ? $_POST['fname'] : ''; // Ensure $name is defined and not null
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    // Check if the chosen date and time slot is already booked for the specific turf
 //   $checkSql = "SELECT * FROM booking WHERE fname = '$name' AND date = '$date' AND ((startTime <= '$startTime' AND endTime > '$startTime') OR (startTime < '$endTime' AND endTime >= '$endTime'))";
 //   $result = $coni->query($checkSql);

    if ($result && $result->num_rows > 0) {
        // Turf is already booked for the selected date and time
        $response['success'] = false;
        $response['error'] = 'The selected turf is already booked on the specified date and time. Please choose a different date and time.';
    } else {
        // Payment success handling (simulated)
        $paymentSuccess = true; // Change this to your actual payment verification logic

        if ($paymentSuccess) {
            // Insert booking into the database only if payment is successful
            $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : 0;
            $insertSql = "INSERT INTO booking (userid, fname, date, startTime, endTime, address, email) VALUES ('$user_id', '$name', '$address', '$email')";

            

            // if ($coni->query($insertSql) === TRUE) {
            //     // Send email notification only when the booking is successful
            //     $to = 'aryanjadhav686@gmail.com';
            //     $subject = 'New Booking';
            //     $message = "New booking by $address on $date from $startTime to $endTime for turf $name.";
            //     $result = smtp_mailer($to, $subject, $message);

            //     $uto = $email;
            //     $usubject = 'Booking Done Successfully';
            //     $umessage = "Your booking by $address on $date from $startTime to $endTime for turf $name has been successfully done.";
            //     $uresult = smtp_mailer($uto, $usubject, $umessage);

            //     if ($result === 'Sent' && $uresult === 'Sent') {
            //         // Email sent successfully
            //         $response['email_status'] = 'Email sent successfully.';
            //         // Booking successful message
            //         $response['success_message'] = 'Booking successful!';
            //     } else {
            //         // Email sending failed
            //         $response['email_status'] = 'Email sending failed. ' . $result;
            //         // Booking failed message
            //         $response['error_message'] = 'Booking failed. Please try again later.';
            //     }

            //     // Send success response
            //     $response['success'] = true;
            // } else {
            //     // Send error response with details
            //     $response['success'] = false;
            //     $response['error'] = mysqli_error($coni);
            // }
        } else {
            // Payment failed
            $response['success'] = false;
            $response['error'] = 'Payment failed. Please try again.';
        }
    }
}

$coni->close();

// Display the response
?>


<head>

    <title>FitPlay - Turf Booking Platform</title>
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Razorpay checkout script -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <style>
        /* Style for the container */
        .booking-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }      
    </style>
</head>
<body>
    
    <!-- Booking form container -->
    <div class="container booking-container">
        <!-- Booking form -->
        <form id="purchaseForm" method="post">

            <div class="form-group">
                <label for="amount">Payable Amount:</label>
                <input type="text" id="amount" name="amount" value="<?=$gtotal?> " class="form-control" readonly>
            </div>

            <div class="form-group">
                <label for="fname">Your Name:</label>
                <input type="text" id="fname" name="fname" class="form-control" value="<?=$itemid?>" required>
            </div>

            <div class="form-group">
                <label for="address">Your Address:</label>
                <input type="address" id="address" class="form-control" placeholder="Enter Your Address" name="address" required>
            </div>

            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" class="form-control" placeholder="Enter Your Email" name="email" required>
            </div>
            <div class="pt-3">
            <button  id="payButton" type="submit" value="Submit" class="btn btn-primary btn-block " style="width: 100%;">Proceed to Payment</button>
            </div>
        </form>
    </div>

    <script>
document.getElementById('payButton').addEventListener('click', function(e) {
    e.preventDefault();

    // Perform form validation
    var fname = document.getElementById('fname').value;
    var address = document.getElementById('address').value;
    var email = document.getElementById('email').value;  


    if (!fname  || !address || !email) {
        alert('Please fill out all fields before proceeding to payment.');
        return;
    }

    // If form is valid, proceed to Razorpay payment
    var options = {
        "key": "rzp_live_z6prMSW9WlOpcp",
        "amount": "1" * 100, // amount in paise (since Razorpay accepts amount in the smallest currency unit)
        "currency": "INR",
        "name": "<?= ucfirst($row9['name']) ?>",
        "description": "Booking for <?= ucfirst($row9['name']) ?>",
        "image": "logo.png", // replace with your logo
        "handler": function(response) {
            // Handle success callback
            console.log(response);
            // Submit the form after successful payment
            document.getElementById('purchaseForm').submit();
        },
        "prefill": {
            "name": document.getElementById('address').value,
            "email": document.getElementById('email').value
        },
        "theme": {
            "color": "#198754"
        }
    };
    var rzp = new Razorpay(options);
    rzp.open();
});
</script>


    
</body>
</html>









