<?php include('header.php'); ?>
<?php
	$server = 'localhost';
	$user = 'root';
	$db = 'fitplay_users';
	$pass = '';
	$coni = mysqli_connect($server, $user, $pass, $db);

	if (!$coni) {
		die(mysqli_error($coni));
	}

	// Assuming you have a user ID stored in the session, adjust this according to your authentication mechanism
	$user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : null;

	// Fetch items from the order_his table for the specific user
	$sql = "SELECT * FROM `order_his` WHERE `user_id` = '$user_id'";
	$result = mysqli_query($coni, $sql);

	if ($result === false) {
		die('Query failed: ' . mysqli_error($coni));
	}
	$rowCount = mysqli_num_rows($result);
?>

<head>
    <title>FitPlay - Product Booking Platform</title>
 </head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                 <tr>
                                    <th>id</th>
                                    <th>Sr No.</th>
                                    <th>Product Name</th>
                                    <th>Price</th>                 
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove Item</th>
                                 </tr>
                              </thead>
                              
                              <tbody>
                              <?php
                              $grandTotal=0;
                              $sr=0;
                        if ($rowCount > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $iid=$row['item_id'];
                                $item_name = $row['item_name'];
                                $price = $row['price'];
                                $quantity = $row['quantity'];
                                $total= $price*$quantity;
                                $grandTotal = $grandTotal + $total;
                                $sr++;

                                echo '<tr>
                                <td>' . $iid . '</td>
                                    <td>' . $sr . '</td>
                                    <td scope="row">' . $item_name . '</td>
                                    <td>' . $price . '</td>
                                    <td>' . $quantity . '</td>
                                    <td>' . $total . '</td>
                                    <td>
                    <a href="del_product.php?deleteid=' . $iid . '" class="text text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 32">
                            <path d="M 13 3 L 13 4 L 4 4 L 4 6 L 6 6 L 6 28 L 26 28 L 26 6 L 28 6 L 28 4 L 19 4 L 19 3 L 13 3 z M 8 6 L 24 6 L 24 26 L 8 26 L 8 6 z M 11 9 L 11 23 L 13 23 L 13 9 L 11 9 z M 19 9 L 19 23 L 21 23 L 21 9 L 19 9 z"></path>
                        </svg>
                    </a>
                </td>
                                </tr>';
                            } 
                        } else {
                            echo "<tr><td colspan='3'>No items in the cart.</td></tr>";
                        }
                        ?>



                                 
                              </tbody>
                              
                           </table>
                          
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    
                    <h4>Grand Total:</h4><br>
                    <h5 class="text-right" id="gtotal" name="gtotal_name"></h5>
                    <script>
                      document.getElementById("gtotal").innerHTML = '<?php echo $grandTotal; ?>.00';
                    </script>
                    
                    <?php 
                        //if(isset($_SESSION['user_data']) && count($_SESSION['user_data'])>0){
                    ?>
                    <!-- <form  action="purchase.php" method="POST">
                       <input type="hidden" name="gtotal" value="<?php echo $iid; ?>">

                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="fullname"  class="form-control" placeholder="Full Name" required>
                        </div>

                        <div class="form-group">
                            <label>Phone No.</label>
                            <input type="number" name="phone_no" class="form-control" placeholder="Phone No." required>
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address"  class="form-control" placeholder="Address" required>
                        </div>

                        <div class="form-group">
                            <label>Payable Amount</label>
                            <lable class="text-right" id="gtotal"><br><b><h6><?php echo $grandTotal; ?> INR</h6></b></lable>
                        </div><br>

                        
                        <button class="btn btn-primary btn-block" name="purchase">Checkout</button>
                    </form>   -->

                            <!-- Booking form container -->
    <div class="container booking-container">
        <!-- Booking form -->
        <form id="purchaseForm" method="post">

            <div class="form-group">
                <label for="amount">Payable Amount:</label>
                <input type="text" id="amount" name="amount" value="<?php echo $grandTotal; ?> " class="form-control" readonly>
            </div>

            <div class="form-group">
                <label for="fname">Your Name:</label>
                <input type="text" id="fname" name="fname" class="form-control"  required>
            </div>

            <div class="form-group">
                <label for="address">Your Address:</label>
                <input type="address" id="address" class="form-control" placeholder="Enter Your Address" name="address" required>
            </div>

            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" class="form-control" placeholder="Enter Your Email" name="email" required>
            </div>

            <input type="hidden" name="payableAmount" value="<?php echo $grandTotal; ?>">
        
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
            <div class="pt-3">
            <button  id="payButton" type="submit" class="btn btn-primary btn-block " style="width: 100%;">Proceed to Payment</button>
            
            </div>
        </form>
    </div>

      
                </div>

            </div>

        </div>
    </div>
<!-- _______________________________________________________________________________________________________________________________________ -->



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



if (!$coni) {
    die(mysqli_error($coni));
}




if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){
    // Get booking information from the form
    $name = isset($_POST['fname']) ? $_POST['fname'] : ''; // Ensure $name is defined and not null
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    

    if ($result && $result->num_rows > 0) {
        // Turf is already booked for the selected date and time
        $response['success'] = false;
    } else {
        // Payment success handling (simulated)
        $paymentSuccess = true; // Change this to your actual payment verification logic

        if ($paymentSuccess) {
            // Insert booking into the database only if payment is successful
            $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : 0;
            $insertSql = "INSERT INTO `buy_his` (`user_ids`, `item_ids`, `item_names`, `prices`, `quantitys`, `dates`, `pay_stats`)
            VALUES ('$user_id', '$iid', '$item_name', '$price', '$quantity', 'PAID')";

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
        <!-- <form id="purchaseForm" method="post">

            <div class="form-group">
                <label for="amount">Payable Amount:</label>
                <input type="text" id="amount" name="amount" value="<?php echo $grandTotal; ?> " class="form-control" readonly>
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
        </form> -->
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
        "amount": $grandTotal * 100, // amount in paise (since Razorpay accepts amount in the smallest currency unit)
        "currency": "INR",
        "name": "<?= ucfirst($row9['name']) ?>",
        "description": "Checkout for <?= ucfirst($row9['name']) ?>",
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