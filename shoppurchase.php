<?php include("header.php");?>
<?php include('floating_icon.php'); ?>
<?php

// Include Razorpay SDK
require_once 'vendor/razorpay/Razorpay.php';

use Razorpay\Api\Api;

// Initialize Razorpay with your API key and secret
$api_key = 'rzp_live_GL8N1VxLpxd9SM';
$api_secret = 'S2mFXcKOSKiXHMNTczJNcFyQ';
$api = new Api($api_key, $api_secret);

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

// Handle Razorpay payment response
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['razorpay_payment_id'])) {
    // Fetch the payment details from the Razorpay response
    $payment_id = $_POST['razorpay_payment_id'];
    $amount = $_POST['amount'];
    
    try {
        // Verify the payment
        $api->utility->verifyPaymentSignature($_POST);

        // Insert data into the buy_items table
        mysqli_data_seek($result, 0); // Reset the result pointer to the beginning
        while ($row = mysqli_fetch_assoc($result)) {
            $item_id = $row['item_id'];
            $item_name = $row['item_name'];
            $price = $row['price'];
            $quantity = $row['quantity'];
            
            // Insert into the database
            $sql = "INSERT INTO `buy_items` (`user_ids`, `item_ids`, `item_names`, `prices`, `quantitys`, `dates`, `pay_stats`) 
                    VALUES ('$user_id', '$item_id', '$item_name', '$price', '$quantity', NOW(), 'PAID')";
            mysqli_query($coni, $sql);
        }

        // Payment successful, show alert
        echo '<script>alert("Payment successful!");</script>';
    } catch (Exception $e) {
        // Handle payment verification failure
        echo "Payment failed: " . $e->getMessage();
    }
}
?>

<html>
<body class='py-8'>
    <!-- Purchase form container -->
    <div class="container Purchase-container">
        <!-- Purchase form -->
        <form id="purchaseForm" method="post">
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

            <input type="hidden" id="razorpay_payment_id" name="razorpay_payment_id" value="">
            
            <?php
            if ($rowCount > 0) {
                mysqli_data_seek($result, 0); // Reset the result pointer to the beginning
                while ($row = mysqli_fetch_assoc($result)) {
                    $iid = $row['item_id'];
                    $item_name = $row['item_name'];
                    $price = $row['price'];
                    $quantity = $row['quantity'];
                    echo '<input type="text" name="itemid[]" value="' . $iid . ' - ' . $item_name . ' - ' . $price . ' - ' . $quantity . '">';
                }
            }
            ?>
            <div class="pt-3">
                <button id="payButton" type="button" class="btn btn-primary btn-block" style="width: 100%;">Proceed to Payment</button>
            </div>
        </form>
    </div>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        document.getElementById('payButton').addEventListener('click', function(e) {
            e.preventDefault();

            // Perform form validation
            var fname = document.getElementById('fname').value;
            var address = document.getElementById('address').value;
            var email = document.getElementById('email').value;

            if (!fname || !address || !email) {
                alert('Please fill out all fields before proceeding to payment.');
                return;
            }

            // If form is valid, proceed to Razorpay payment
            var options = {
                "key": "<?php echo $api_key; ?>",
                "amount": "<?php echo $grandTotal * 100; ?>", // amount in paise
                "currency": "INR",
                "name": "Your Company Name",
                "description": "Purchase for <?php echo $grandTotal; ?>",
                "image": "logo.png", // replace with your logo
                "handler": function(response) {
                    // Handle success callback
                    console.log(response);
                    // Submit the form after successful payment
                    var razorpayPaymentId = response.razorpay_payment_id;
                    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                    document.getElementById('purchaseForm').submit();
                },
                "prefill": {
                    "name": fname,
                    "email": email
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
