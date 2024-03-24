


  <!-- script for fixed navbar -->
  <?php
include('smtp/PHPMailerAutoload.php');
include('header.php');
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
$db = 'turf';
$pass = '';

$coni = mysqli_connect($server, $user, $pass, $db);

if (!$coni) {
    die(mysqli_error($coni));
}


$response = array();
require_once 'vendor/razorpay/Razorpay.php';

// Function to verify Razorpay payment
function verifyPayment($paymentId) {
    $razorpayKeyId = 'rzp_live_GTGlhqoi4rsmHV';
    $razorpayKeySecret = 'eRyMDEiBIZN6kERp9lGt9Yhg';

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
    $name = isset($_POST['fname']) ? $_POST['fname'] : ''; 
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $userEmail = isset($_POST['userEmail']) ? $_POST['userEmail'] : '';
    $pricess = isset($_POST['price']) ? $_POST['price'] : '';


    // Check if the chosen date and time slot is already booked for the specific turf

        if (isset($_POST['razorpay_payment_id']) && !empty($_POST['razorpay_payment_id'])) {
            $razorpayPaymentId = $_POST['razorpay_payment_id'];
            $paymentSuccess = verifyPayment($razorpayPaymentId);

            if ($paymentSuccess) {
                // Insert booking into the database only if payment is successful
                $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : 0;
                $insertSql = "INSERT INTO `tes`(`price`, `name`, `address`, `email`) VALUES ('$pricess','$name','$address','$userEmail')";

                if ($coni->query($insertSql) === TRUE) {
                    // Send email notification only when the booking is successful
                    $to = 'yashnikam5635@gmail.com';
                    $subject = 'New Purchase';
                    $message = "New Purchase by $name for $address.";
                    $result = smtp_mailer($to, $subject, $message);

                    $uto = $userEmail;
                    $usubject = 'Purchase Done Successfully';
                    $umessage = "Your Purchase by $name for turf $address has been successfully done.";
                    $uresult = smtp_mailer($uto, $usubject, $umessage);

                    if ($result === 'Sent' && $uresult === 'Sent') {
                        // Email sent successfully
                        $response['email_status'] = 'Email sent successfully.';
                        // Booking successful message
                        $response['success_message'] = 'Purchase successful!';
                    } else {
                        // Email sending failed
                        $response['email_status'] = 'Email sending failed. ' . $result;
                        // Booking failed message
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



$coni->close();
?>

<head>

    <title>FitPlay - Turf Booking Platform</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
<body class="pt-9">
    

    <!-- Booking form container -->
    <div class="container booking-container">
        <!-- Booking form -->
        <form id="bookingForm" method="post"> 

           <div class="form-group">
                <label for="fname">Price:</label>
                <input type="text" id="price" name="price" value=" " class="form-control" >
            </div>
            <div class="form-group">
                <label for="fname">Your Name:</label>
                <input type="text" id="fname" name="fname" value="" class="form-control" >
            </div>

   
            <div class="form-group">
                <label for="address">Your Address:</Address>:</label>
                <input type="text" id="address" class="form-control" placeholder="Enter Your Address" name="address" required>
            </div>
            <div class="form-group">
                <label for="userEmail">Your Email:</label>
                <input type="email" id="userEmail" class="form-control" placeholder="Enter Your Email" name="userEmail" required>
            </div>
            <input type="hidden" id="razorpay_payment_id" name="razorpay_payment_id" value="">
            <div class="pt-3">
            <button  id="payButton" type="submit" value="Submit" class="btn btn-primary btn-block " style="width: 100%;">Proceed to Payment</button>
            </div>
        </form>
    </div>

<!-- Add the following script to handle the payment process -->
<script>

document.getElementById('payButton').addEventListener('click', function (e) {
    e.preventDefault();

    var fname = document.getElementById('fname').value;
    var address = document.getElementById('address').value;
    var userEmail = document.getElementById('userEmail').value;

    // Perform form validation (same code as before)


    if (!fname || !address || !userEmail) {
        alert('Please fill out all fields before proceeding to payment.');
        return;
    }

    // Create a new payment object
    var options = {
        "key": "rzp_live_GTGlhqoi4rsmHV",
        "amount": "1" * 100, // amount in paise (since Razorpay accepts amount in the smallest currency unit)
        "currency": "INR",
        "name": "yash",
        "description": "Booking for ",
        "image": "logo.png", // replace with your logo
        "handler": function (response) {
            // Handle success callback
            console.log(response);
            // Submit the form after successful payment
            var razorpayPaymentId = response.razorpay_payment_id;
            document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
            document.getElementById('bookingForm').submit();
        },
        "prefill": {
            "name": document.getElementById('address').value,
            "email": document.getElementById('userEmail').value,

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















