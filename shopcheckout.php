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
if(isset($_GET['user_id']))
{
   $blid=$_GET['user_id'];
   $sql9="SELECT * FROM `order_manager` WHERE user_id='$blid';";
   $res9=mysqli_query($coni,$sql9);
   $row9=mysqli_fetch_assoc($res9);

}
$response = array();
require_once 'vendor/razorpay/Razorpay.php';

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
    // Get Purchase information from the form
    $name = isset($_POST['fname']) ? $_POST['fname'] : ''; // Ensure $name is defined and not null
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
  
    // Check if the chosen date and time slot is already booked for the specific turf
    $checkSql = "SELECT * FROM Purchase WHERE turfname = '$name' AND date = '$date' AND time = '$time'";
    $result = $coni->query($checkSql);

    if ($result && $result->num_rows > 0) {
        // Turf is already booked for the selected date and time
        echo"<script>alert('This slot is already booked')</script>";
        $response['success'] = false;
        $response['error'] = 'The selected turf is already booked on the specified date and time. Please choose a different date and time.';
    } else {
        if (isset($_POST['razorpay_payment_id']) && !empty($_POST['razorpay_payment_id'])) {
            $razorpayPaymentId = $_POST['razorpay_payment_id'];
            $paymentSuccess = verifyPayment($razorpayPaymentId);

            if ($paymentSuccess) {
                // Insert Purchase into the database only if payment is successful
                $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : 0;
                $insertSql = "INSERT INTO `buy_items`(`user_ids`, `item_names`, `prices`, `quantitys`, `pay_stats`) 
                VALUES ('$user_id', '$item_name', '$price', '$quantity', 'PAID')";

                if ($coni->query($insertSql) === TRUE) {
                    // Send email notification only when the Purchase is successful
                    $to = 'yashnikam5635@gmail.com';
                    $subject = 'New Purchase';
                    $message = "New Purchase by $userName on $date on $time for turf $name.";
                    $result = smtp_mailer($to, $subject, $message);

                    $uto = $userEmail;
                    $usubject = 'Purchase Done Successfully';
                    $umessage = "Your Purchase by $userName on $date on $time for turf $name has been successfully done.";
                    $uresult = smtp_mailer($uto, $usubject, $umessage);

                    if ($result === 'Sent' && $uresult === 'Sent') {
                        // Email sent successfully
                        $response['email_status'] = 'Email sent successfully.';
                        // Purchase successful message
                        $response['success_message'] = 'Purchase successful!';
                    } else {
                        // Email sending failed
                        $response['email_status'] = 'Email sending failed. ' . $result;
                        // Purchase failed message
                        $response['error_message'] = 'Purchase failed. Please try again later.';
                    }
                    echo "<script>alert('Your Purchase has been done')</script>";
                    // Send success response
                    $response['success'] = true;
                } else {
                    // Send error response with details
                    $response['success'] = false;
                    $response['error'] = mysqli_error($coni);
                }
            } else {
                // Payment failed
                $response['success'] = false;
                echo "<script>alert('Payment not done')</script>";
                $response['error'] = 'Payment failed. Please try again.';
            }
        }
    }
}

// fetch user products
        	// Assuming you have a user ID stored in the session, adjust this according to your authentication mechanism
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
            $iid=$row['item_id'];
            $item_name = $row['item_name'];
            $price = $row['price'];
            $quantity = $row['quantity'];
            $total= $price*$quantity;
            $grandTotal = $grandTotal + $total;
        }}

$coni->close();

// Display the response
?>


<head>

    <title>FitPlay - Turf Purchase Platform</title>
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Razorpay checkout script -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <style>
        /* Style for the container */
        .Purchase-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }      
    </style>
</head>
<body>
    
    <!-- Purchase form container -->
    <div class="container Purchase-container">
        <!-- Purchase form -->
        <form id="purchaseForm" method="post">

            <div class="form-group">
                <label for="amount">Payable Amount:</label>
                <input type="text" id="amount" name="amount" value="<?php echo $grandTotal; ?>" class="form-control" readonly>
            </div>

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

            <div>
            <?php 
                 if ($rowCount > 0) {
                    mysqli_data_seek($result, 0); // Reset the result pointer to the beginning
                        while ($row = mysqli_fetch_assoc($result)) {
                            $iid = $row['item_id'];
                            $item_name = $row['item_name'];
                            $price = $row['price'];
                            $quantity = $row['quantity'];
                            echo '<input type="text" id="itemid" name="itemid[]" value="' . $iid . ' - ' . $item_name . ' - ' . $price . ' - ' . $quantity . '">' ;
                         }
                     }
             ?>
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
        "name": "<?php echo $grandTotal; ?>",
        "description": "Purchase for ",
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









