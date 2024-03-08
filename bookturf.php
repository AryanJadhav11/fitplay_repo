


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

// Database connection
$server = 'localhost';
$user = 'root';
$db = 'turf';
$pass = '';

$coni = mysqli_connect($server, $user, $pass, $db);

if (!$coni) {
    die(mysqli_error($coni));
}
if(isset($_GET['id']))
{
   $blid=$_GET['id'];
   $sql9="SELECT * FROM `grd` WHERE id='$blid';";
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
    // Get booking information from the form
    $name = isset($_POST['turfname']) ? $_POST['turfname'] : ''; 
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $time = isset($_POST['timeSlot']) ? $_POST['timeSlot'] : '';
    $userName = isset($_POST['userName']) ? $_POST['userName'] : '';
    $userEmail = isset($_POST['userEmail']) ? $_POST['userEmail'] : '';

    if (strtotime($date) < strtotime(date('Y-m-d'))) {
        echo "<script>alert('Please select a valid future date.')</script>";
        // Handle the error as needed
        // You might want to redirect or display an error message
        exit;
    }

    // Check if the chosen date and time slot is already booked for the specific turf
    $checkSql = "SELECT * FROM booking WHERE turfname = '$name' AND date = '$date' AND time = '$time'";
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
                // Insert booking into the database only if payment is successful
                $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : 0;
                $insertSql = "INSERT INTO booking (userid, turfname, date, time, userName, userEmail) 
                                VALUES ('$user_id', '$name', '$date', '$time', '$userName', '$userEmail')";

                if ($coni->query($insertSql) === TRUE) {
                    // Send email notification only when the booking is successful
                    $to = 'aryanjadhav686@gmail.com';
                    $subject = 'New Booking';
                    $message = "New booking by $userName on $date on $time for turf $name.";
                    $result = smtp_mailer($to, $subject, $message);

                    $uto = $userEmail;
                    $usubject = 'Booking Done Successfully';
                    $umessage = "Your booking by $userName on $date on $time for turf $name has been successfully done.";
                    $uresult = smtp_mailer($uto, $usubject, $umessage);

                    if ($result === 'Sent' && $uresult === 'Sent') {
                        // Email sent successfully
                        $response['email_status'] = 'Email sent successfully.';
                        // Booking successful message
                        $response['success_message'] = 'Booking successful!';
                    } else {
                        // Email sending failed
                        $response['email_status'] = 'Email sending failed. ' . $result;
                        // Booking failed message
                        $response['error_message'] = 'Booking failed. Please try again later.';
                    }
                    echo "<script>alert('Your booking has been done')</script>";
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
<body>
    

  <?php 
  $start_time_12hr = date("h:i A", strtotime($row9['start']));
  $end_time_12hr = date("h:i A", strtotime($row9['end']));
  ?>
    <!-- Booking form container -->
    <div class="container booking-container">
        <!-- Booking form -->
        <form id="bookingForm" method="post">
            <div class="form-group">
                <label for="turfname">Turf Name:</label>
                <input type="text" id="turfname" name="turfname" value="<?= ucfirst($row9['name']) ?> " class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="turfname">Price:</label>
                <input type="text" id="price" name="price" value="<?= ucfirst($row9['price']) ?> " class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="validtime">Valid Time:</label>
                <input type="text" id="validtime" name="validtime" placeholder="From=<?= $start_time_12hr; ?>   To=<?= $end_time_12hr; ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="bookingDate">Select Date:</label>
                <input type="date" id="bookingDate" name="date" class="form-control" required>
            </div>
            <label for="bookingDate">Select Time:</label>
        <!-- ... (previous form elements) ... -->
        <input type="hidden" id="timeSlot" name="timeSlot" value="">
<div class="form-group" id="timeSlotButtons" style="margin:10px;">
    </div>
   
            <div class="form-group">
                <label for="userName">Your Name:</label>
                <input type="text" id="userName" class="form-control" placeholder="Enter Your Name" name="userName" required>
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

    <script>
    // Get the start and end times from your backend or define them here
    var startTime = "<?= date('H:i', strtotime($row9['start'])) ?>";
    var endTime = "<?= date('H:i', strtotime($row9['end'])) ?>";

    // Function to generate time slots based on start and end times
    function generateTimeSlots() {
        var timeSlotButtonsContainer = document.getElementById("timeSlotButtons");

        // Clear existing buttons
        timeSlotButtonsContainer.innerHTML = "";

        // Convert start and end times to Date objects
        var startDate = new Date("2024-03-07 " + startTime);
        var endDate = new Date("2024-03-07 " + endTime);

        // Time interval (in minutes) for slots
        var interval = 60; // 60 minutes

        // Generate time slots and add buttons
        while (startDate < endDate) {
            var slotStartTime = startDate.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            startDate.setMinutes(startDate.getMinutes() + interval);
            var slotEndTime = startDate.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

            var button = document.createElement("button");
            button.type = "button";
            button.className = "btn btn-success mr-2 mb-2"; // Green color and adjusted margin
            button.value = slotStartTime + " - " + slotEndTime;
            button.style="margin:10px;";
            button.textContent = slotStartTime + " - " + slotEndTime;
            button.addEventListener("click", function () {
                document.getElementById("timeSlot").value = this.value;
            });

            timeSlotButtonsContainer.appendChild(button);
        }
    }

    // Call the function initially to populate time slots
    generateTimeSlots();

    // Attach the function to the date change event (you may need to adjust this based on your requirements)
    document.getElementById("bookingDate").addEventListener("change", generateTimeSlots);
</script>





<!-- Add the following script to handle the payment process -->
<script>

document.getElementById('payButton').addEventListener('click', function (e) {
    e.preventDefault();

    var turfname = document.getElementById('turfname').value;
    var bookingDate = document.getElementById('bookingDate').value;
    var time = document.getElementById('timeSlot').value;
    var userName = document.getElementById('userName').value;
    var userEmail = document.getElementById('userEmail').value;

    // Perform form validation (same code as before)

    // Combine date and time for better comparison
    var selectedStartTime = new Date(bookingDate + ' ' + time.split(' - ')[0]);
    var selectedEndTime = new Date(bookingDate + ' ' + time.split(' - ')[1]);

    // actual open time of turf
    var validStartTimeObj = new Date(bookingDate + ' ' + validStartTime);
    var validEndTimeObj = new Date(bookingDate + ' ' + validEndTime);

    // Check if the selected date is in the past
    

    if (!turfname || !bookingDate || !time || !userName || !userEmail) {
        alert('Please fill out all fields before proceeding to payment.');
        return;
    }

    // Create a new payment object
    var options = {
        "key": "rzp_live_GL8N1VxLpxd9SM",
        "amount": "1" * 100, // amount in paise (since Razorpay accepts amount in the smallest currency unit)
        "currency": "INR",
        "name": "<?= ucfirst($row9['name']) ?>",
        "description": "Booking for <?= ucfirst($row9['name']) ?>",
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
            "name": document.getElementById('userName').value,
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















