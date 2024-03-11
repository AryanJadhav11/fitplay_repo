<?php include('header.php'); ?>
<?php include('floating_icon.php'); ?>
<?php
include('smtp/PHPMailerAutoload.php');

// Function to send email using SMTP
function smtp_mailer($to, $subject, $message) {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "jadhavaryan467@gmail.com"; // Your Gmail username
    $mail->Password = "oozzyqfwnpufjuqi"; // Your Gmail password
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
    $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : '';
    $name = isset($_POST['fname']) ? $_POST['fname'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $userEmail = isset($_POST['email']) ? $_POST['email'] : '';
    $gtotal = isset($_POST['amount']) ? $_POST['amount'] : '';


    if (isset($_POST['razorpay_payment_id']) && !empty($_POST['razorpay_payment_id'])) {
        $razorpayPaymentId = $_POST['razorpay_payment_id'];
        $paymentSuccess = verifyPayment($razorpayPaymentId);

        if ($paymentSuccess) {
            // Insert Purchase into the database only if payment is successful
            $insertSql = "INSERT INTO `order_manager`(`user_id`, `Full_Name`, `Phone_No`, `Address`, `Total`)
            VALUES ('$user_id', '$name', '$address', '$gtotal')";

            if ($coni->query($insertSql) === TRUE) {
                // Send email notification only when the Purchase is successful
                $to = 'yashnikam5635@gmail.com';
                $subject = 'New Purchase';
                $message = "New Purchase by $user_id customer name $name address $address email $userEmail.";
                $result = smtp_mailer($to, $subject, $message);

                $uto = $userEmail;
                $usubject = 'Purchase Done Successfully';
                $umessage = "Your Purchase by $user_id by name $name has been successfully done.";
                $uresult = smtp_mailer($uto, $usubject, $umessage);

                if ($result === 'Sent' && $uresult === 'Sent') {
                    // Email sent successfully
                    echo "<script>alert('Your Purchase has been done')</script>";
                } else {
                    // Email sending failed
                    echo "<script>alert('Email sending failed.')</script>";
                }
            } else {
                // Insertion failed
                echo "<script>alert('Failed to insert Purchase data into database.')</script>";
            }
        } else {
            // Payment failed
            echo "<script>alert('Payment not done')</script>";
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
<!-- Iterate through the submitted item details and display -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $itemIds = isset($_POST['itemid']) ? $_POST['itemid'] : array();

            foreach ($itemIds as $itemId) {
                // Split the value of each item id to get individual values
                list($iid, $item_name, $price, $quantity) = explode(' - ', $itemId);

                // Display the item details
                $dis =  "<input type='text' value='$iid - $item_name - $price - $quantity'><br>";
            }
        }
        ?>
<input type='text' value='<? echo $dis;?>'><br>
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
        "key": "rzp_live_GL8N1VxLpxd9SM",
        "amount": "1" * 100, // amount in paise (since Razorpay accepts amount in the smallest currency unit)
        "currency": "INR",
        "name": "<?php echo $grandTotal; ?>",
        "description": "Purchase for ",
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
            "name": document.getElementById('fname').value,
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









