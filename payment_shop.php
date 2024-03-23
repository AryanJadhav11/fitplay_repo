<?php
require_once 'vendor/razorpay/Razorpay.php';

// Database connection
$server = 'localhost';
$user = 'root';
$db = 'fitplay_users';
$pass = '';

$coni = mysqli_connect($server, $user, $pass, $db);

if (!$coni) {
    die(mysqli_error($coni));
}

$response = array();

// Function to verify Razorpay payment
function verifyPayment($paymentId, $orderId, $razorpaySignature) {
    $razorpayKeyId = 'rzp_live_GTGlhqoi4rsmHV';
    $razorpayKeySecret = 'eRyMDEiBIZN6kERp9lGt9Yhg';

    $api = new Razorpay\Api\Api($razorpayKeyId, $razorpayKeySecret);

    $attributes = array(
        'razorpay_order_id' => $orderId,
        'razorpay_payment_id' => $paymentId,
        'razorpay_signature' => $razorpaySignature
    );

    try {
        $api->utility->verifyPaymentSignature($attributes);
        return true; // Payment is successfully verified
    } catch (Exception $e) {
        // Handle verification failure
        return false;
    }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname'];
    $address = $_POST['address'];
    $userEmail = $_POST['email'];
    $gtotal = $_POST['amount'];
    $razorpayPaymentId = $_POST['razorpay_payment_id'];
    $razorpayOrderId = $_POST['razorpay_order_id'];
    $razorpaySignature = $_POST['razorpay_signature'];

    // Verify Razorpay payment
    $paymentSuccess = verifyPayment($razorpayPaymentId, $razorpayOrderId, $razorpaySignature);

    if ($paymentSuccess) {
        // Insert booking into the database only if payment is successful
        $insertSql = "INSERT INTO `order_manager`(`user_id`, `Username`, `Order_id`, `Full_Name`, `Phone_No`, `Address`, `Total`, `date`) VALUES ('$user_id','asda','1211','$name','1232','$address','$gtotal', current_timestamp())";
        
        if (mysqli_query($coni, $insertSql)) {
            // Display a success message to the user
            echo "<script>alert('Payment successful!');</script>";
        } else {
            // Display an error message to the user
            echo "<script>alert('Error: " . mysqli_error($coni) . "')</script>";
        }
    } else {
        // Payment failed
        echo "<script>alert('Payment not done')</script>";
    }
}

$coni->close();
?>
<html>
    <body>
        <!-- Your HTML code for the form -->
<form id="purchaseForm" method="post">
    <!-- Your form fields for customer information -->
    <input type="text" id="fname" name="fname" placeholder="Enter Your Name" required>
    <input type="text" id="address" name="address" placeholder="Enter Your Address" required>
    <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
    <input type="hidden" id="amount" name="amount" value="<?php echo $grandTotal; ?>">
    <input type="hidden" id="razorpay_payment_id" name="razorpay_payment_id" value="">
    <input type="hidden" id="razorpay_order_id" name="razorpay_order_id" value="">
    <input type="hidden" id="razorpay_signature" name="razorpay_signature" value="">
    <!-- Your submit button -->
    <button type="submit">Proceed to Payment</button>
</form>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>


<script>
document.getElementById('payButton').addEventListener('click', function (e) {
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
    "key": "rzp_live_GTGlhqoi4rsmHV",
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

</body>
</html>