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

// Check if the payment ID is received from Razorpay
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['razorpay_payment_id']) && !empty($_POST['razorpay_payment_id'])) {
    // Get Purchase information from the form
    $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : '';
    $name = isset($_POST['fname']) ? $_POST['fname'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $userEmail = isset($_POST['email']) ? $_POST['email'] : '';
    $gtotal = isset($_POST['amount']) ? $_POST['amount'] : '';

    // Save purchase information to database
    $insertOrderSql = "INSERT INTO `order_manager`(`user_id`, `Username`, `Full_Name`, `Phone_No`, `Address`, `Total`, `date`) 
    VALUES ('$user_id', '$userEmail', '$name', '457424537', '$address', '$gtotal', NOW())";

    if ($coni->query($insertOrderSql) === TRUE) {
        // Purchase information successfully inserted into the database
        
        // Additional insertion into buy_items table
        foreach ($_POST['itemid'] as $item) {
            $item_details = explode(' - ', $item);
            $item_id = $item_details[0];
            $item_name = $item_details[1];
            $price = $item_details[2];
            $quantity = $item_details[3];

            $insertBuyItemSql = "INSERT INTO `buy_items`(`user_ids`, `item_ids`, `item_names`, `prices`, `quantitys`, `dates`, `pay_stats`) 
            VALUES ('$user_id', '$item_id', '$item_name', '$price', '$quantity', NOW(), 'Paid')";

            if ($coni->query($insertBuyItemSql) !== TRUE) {
                // Error occurred while inserting buy_items information
                echo "Error: " . $insertBuyItemSql . "<br>" . $coni->error;
            }
        }

        // Redirect to thank you page
        header("Location: thank_you.php");
        exit;
    } else {
        // Error occurred while inserting purchase information
        echo "Error: " . $insertOrderSql . "<br>" . $coni->error;
    }
}

// Close the database connection after all operations are done
$coni->close();
?>

<!DOCTYPE html>
<html lang="en">

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
                <button id="payButton" type="button" class="btn btn-primary btn-block" style="width: 100%;">Proceed to Payment</button>
            </div>
        </form>
    </div>

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

        var options = {
            "key": "rzp_live_GTGlhqoi4rsmHV",
            "amount": <?php echo $grandTotal * 100; ?>, // amount in paise (since Razorpay accepts amount in the smallest currency unit)
            "currency": "INR",
            "name": "fitplay",
            "description": "order for product",
            "image": "logo.png", // replace with your logo
            "handler": function (response) {
                // Fill the hidden field with payment ID
                document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;

                // Submit the form
                document.getElementById('purchaseForm').submit();
            },
            "prefill": {
                "name": name,
                "email": email,
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
