<?php include("header.php");?>
<?php include('floating_icon.php'); ?>
<?php

// Include Razorpay SDK
require_once 'vendor/razorpay/Razorpay.php';

// Initialize Razorpay with your API key and secret
$api_key = 'rzp_live_GL8N1VxLpxd9SM';
$api_secret = 'S2mFXcKOSKiXHMNTczJNcFyQ';


// Database connection
$server = 'localhost';
$user = 'root';
$db = 'fitplay_users';
$pass = '';
$coni = mysqli_connect($server, $user, $pass, $db);

if (!$coni) {
    die(mysqli_error($coni));
}

// Fetch user products
$user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : null;

// Fetch items from the order_his table for the specific user
$sql = "SELECT * FROM `order_his` WHERE `user_id` = '$user_id'";
$result = mysqli_query($coni, $sql);

if ($result === false) {
    die('Query failed: ' . mysqli_error($coni));
}

$rowCount = mysqli_num_rows($result);
$grandTotal = 0;

if ($rowCount > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $item_id = $row['item_id'];
        $item_name = $row['item_name'];
        $price = $row['price'];
        $quantity = $row['quantity'];
        $total = $price * $quantity;
        $grandTotal = $grandTotal + $total;
    }
}

?>
<?php
// include('smtp/PHPMailerAutoload.php');

// function smtp_mailer($to, $subject, $message) {
//     $mail = new PHPMailer();
//     $mail->IsSMTP();
//     $mail->SMTPAuth = true;
//     $mail->SMTPSecure = 'tls';
//     $mail->Host = "smtp.gmail.com";
//     $mail->Port = 587;
//     $mail->IsHTML(true);
//     $mail->CharSet = 'UTF-8';
//     $mail->Username = "jadhavaryan467@gmail.com";
//     $mail->Password = "oozzyqfwnpufjuqi";
//     $mail->SetFrom("jadhavaryan467@gmail.com");
//     $mail->Subject = $subject;
//     $mail->Body = $message;
//     $mail->AddAddress($to);
//     $mail->SMTPOptions = array('ssl' => array(
//         'verify_peer' => false,
//         'verify_peer_name' => false,
//         'allow_self_signed' => false
//     ));
//     if (!$mail->Send()) {
//         return $mail->ErrorInfo;
//     } else {
//         return 'Sent';
//     }
// }

// Database connection





// Function to verify Razorpay payment
function verifyPayment($paymentId) {
    $razorpayKeyId = 'rzp_live_GL8N1VxLpxd9SM';
    $razorpayKeySecret = 'S2mFXcKOSKiXHMNTczJNcFyQ';

    $razorpay = new Razorpay\Razorpay([
        'key_id'     => $razorpayKeyId,
        'key_secret' => $razorpayKeySecret,
    ]);

    try {
        $attributes = array(
            'razorpay_order_id' => $_POST['razorpay_order_id'],
            'razorpay_payment_id' => $paymentId,
            'razorpay_signature' => $_POST['razorpay_signature'],
        );

        $razorpay->utility->verifyPaymentSignature($attributes);
        return true; // Payment is successfully verified
    } catch (Exception $e) {
        // Handle verification failure
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get booking information from the form
    $fname = isset($_POST['fname']) ? $_POST['fname'] : ''; 
    $mail = isset($_POST['email']) ? $_POST['email'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    // $itemname = isset($_POST['itemid']) ? $_POST['itemid'] : array();

   

    // Check if the chosen date and time slot is already booked for the specific turf
  

        if (isset($_POST['razorpay_payment_id']) && !empty($_POST['razorpay_payment_id'])) {
            $razorpayPaymentId = $_POST['razorpay_payment_id'];
            $paymentSuccess = verifyPayment($razorpayPaymentId);

            if ($paymentSuccess) {
                // Insert booking into the database only if payment is successful
                $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : 0;
                $insertSql = "INSERT INTO `shopp`(`user_id`, `name`, `email`, `address` VALUES ('$user_id','$fname','$mail','$address')";
                echo "<script>alert('purchase done')</script>";

                if ($coni->query($insertSql) === TRUE){
                    
                }
                // if ($coni->query($insertSql) === TRUE) {
                //     // Send email notification only when the booking is successful
                //     $to = 'aryanjadhav686@gmail.com';
                //     $subject = 'New Booking';
                //     $message = "New booking by $userName on $date on $time for turf $name.";
                //     $result = smtp_mailer($to, $subject, $message);

                //     $uto = $userEmail;
                //     $usubject = 'Booking Done Successfully';
                //     $umessage = "Your booking by $userName on $date on $time for turf $name has been successfully done.";
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
                //     echo "<script>alert('purchase done')</script>";
                //     // Send success response
                //     $response['success'] = true;
                // } else {
                //     // Send error response with details
                //     $response['success'] = false;
                //     $response['error'] = mysqli_error($coni);
                // }
            } 
        }
}
    

$coni->close();
?>



<html>
<body class='py-8'>
    <!-- Purchase form container -->
    <div class="container Purchase-container">
        <!-- Purchase form -->
        <form id="purchaseForm" method="POST">
        <input type="hidden" id="razorpay_order_id" name="razorpay_order_id">
        <input type="hidden" id="razorpay_signature" name="razorpay_signature">
            
            <div class="form-group">
                <label for="amount">Payable Amount:</label>
                <input type="text" id="amount" name="amount" value="<?php echo $grandTotal; ?>" class="form-control" readonly>
            </div>

            <!-- Other form fields (name, address, email) -->

            <div class="form-group">
                <label for="fname">Your Name:</label>
                <input type="text" id="fname" name="fname" class="form-control" placeholder="Enter Your Name" required>
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
                <button id="payeButton" type="submit" value="Submit" class="btn btn-primary btn-block" style="width: 100%;">Proceed to Payment</button>
            </div>
        </form>
    </div>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>


    <script>
document.getElementById('payeButton').addEventListener('click', function (e) {
    e.preventDefault();

    var name = document.getElementById('fname').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;

    // Check if the selected date is in the past
    if (!name || !email || !address) {
        alert('Please fill out all fields before proceeding to payment.');
        return;
    }

    // Create a new payment object
    var options = {
        "key": "rzp_live_GL8N1VxLpxd9SM",
        "amount": 100, // amount in paise (since Razorpay accepts amount in the smallest currency unit)
        "currency": "INR",
        "name": "fitplay",
        "description": "order for product",
        "image": "logo.png", // replace with your logo
        "handler": function (response) {
            // Set the values of razorpay_order_id and razorpay_signature
            document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
            document.getElementById('razorpay_signature').value = response.razorpay_signature;

            // Submit the form after successful payment
            document.getElementById('purchaseForm').submit();
        },
        "prefill": {
            "name": document.getElementById('fname').value,
            "email": document.getElementById('email').value,
        },
        "theme": {
            "color": "#198754"
        }
    };

    var rzp = new Razorpay(options);
    rzp.open();
});
</script>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Great!</h4>	
				<p>Turf has been listed succssfully !</p>
				<a href="admin_turf.php"><button class="btn btn-success"><span>Go Back</span> <i class="material-icons">&#xE5C8;</i></button></a>
			</div>
		</div>
	</div>
</div>

</body>
</html>