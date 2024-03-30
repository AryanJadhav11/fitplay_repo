<?php include('header.php'); ?>
<?php include('floating_icon.php'); ?>
<?php

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
    // Get Purchase information from the form
    $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : '';
    $name = isset($_POST['fname']) ? $_POST['fname'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $userEmail = isset($_POST['email']) ? $_POST['email'] : '';
    $gtotal = isset($_POST['amount']) ? $_POST['amount'] : '';

    // Check if Razorpay payment ID is set
    if (isset($_POST['razorpay_payment_id']) && !empty($_POST['razorpay_payment_id'])) {
        $razorpayPaymentId = $_POST['razorpay_payment_id'];
        $paymentSuccess = verifyPayment($razorpayPaymentId);

        if ($paymentSuccess) {
            // Insert booking into the database only if payment is successful
            $insertSql = "INSERT INTO `order_manager`(`user_id`, `Username`, `Order_id`, `Full_Name`, `Phone_No`, `Address`, `Total`, `date`) VALUES ('$user_id','asda','1211','$name','1232','$address','$gtotal', current_timestamp())";
            if (mysqli_query($coni, $insertSql)) {
                // Display a success message to the user
                echo "<script>alert('Payment successful!');</script>";
            } else {
                // Display an error message to the user
                echo "<script>alert('Error: " . mysqli_error($coni) . "')</script>";
        } else {
            // Payment failed
            echo "<script>alert('Payment not done')</script>";
        }
    }
}
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

$coni->close();
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
<body class="py-6">
    
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
            <input type="hidden" id="razorpay_payment_id" name="razorpay_payment_id" value="">
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









