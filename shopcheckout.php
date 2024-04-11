<?php session_start(); ?>
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
function smtp_mailer($to, $subject, $message) {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "jadhavaryan467@gmail.com";
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
    $insertOrderSql = "INSERT INTO `order_manager`(`user_id`, `Username`, `Full_Name`, `Phone_No`, `Address`, `Total`, `date`,`email`) 
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
        header("Location:");
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

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="all.css">
</head>

<body class="py-6" style="background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%);">
<div class="wrapper d-flex align-items-stretch" style="height:100%;" >
			<nav id="sidebar" class="active"style="background-color:#1a85df;" >
				<h1><a href="index.html" class="logo">F<span style="color:#005500;">P.</a></h1>
        <ul class="list-unstyled components mb-5" style="color:black;">
          <li class="active">
            <a href="#"><span class="fa fa-home"></span> Home</a>
          </li>
          <li>
              <a href="#"><span class="fa fa-user"></span> About</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sticky-note"></span> Blog</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cogs"></span> Services</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-paper-plane"></span> Contacts</a>
          </li>
          
        </ul>

    	</nav>

        <!-- Page Content  -->


    <!-- Purchase form container -->
    <style>
        /* CSS for card styling */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa; /* Set the background color */
        }

        .card-container {
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
            overflow: hidden; /* Prevent shadow from being cut off */
            background-color: #fff; /* Set the background color of the card */
            width: 80%; /* Set the width of the card */
            max-width: 600px; /* Adjust the maximum width of the card */
            padding: 20px;
        }

        /* CSS for image styling */
        .join-image {
            width: 100%;
            height: auto;
        }

        /* CSS for form styling */
        .purchase-form {
            padding: 20px;
        }
    </style>


    <style>
        /* CSS for card styling */
        .card-container {
            margin-top: 20px; /* Adjust margin as needed */
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
            overflow: hidden; /* Prevent shadow from being cut off */
        }

        /* CSS for image styling */
        .image-container {
            width: 300px; /* Set width to 300 pixels */
            height: 300px; /* Set height to 300 pixels */
            border-radius: 10px 0 0 10px; /* Rounded corners for left side */
            overflow: hidden; /* Prevent image from overflowing */
        }

        .join-image {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Maintain aspect ratio and cover entire container */
        }

        /* CSS for form styling */
        .form-container {
            padding: 20px;
            border-radius: 0 10px 10px 0; /* Rounded corners for right side */
        }
    </style>



    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

<!----------------------- Login Container -------------------------->

   <div class="row border rounded-5 p-3 bg-white shadow box-area">

<!--------------------------- Left Box ----------------------------->

<div class="col-md-8 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: ;">
           
            <img src="proimg/payill.jpg" class="img-fluid" >
       
           
       </div> 

<!-------------------- ------ Right Box ---------------------------->


   <div class="col-md-4 right-box">
      <div class="row align-items-center">
            <div class="header-text mb-4">
                 <h2 class="px-3">Hello!</h2>
                 <p class="px-3">We are happy to have you with us.</p>
            </div>
            <form id="purchaseForm" method="post" class="purchase-form">
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
                                        echo '<input type="hidden" id="itemid" name="itemid[]" value="' . $iid . ' - ' . $item_name . ' - ' . $price . ' - ' . $quantity . '">' ;
                                    }
                                }
                            ?>
                        </div>
                        <div class="pt-3">
                            <button id="payButton" type="button" class="btn btn-primary btn-block" style="width: 100%;">Proceed to Payment</button>
                        </div>
                   </form>
        
      </div>
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

</div>
</body>
</html>


