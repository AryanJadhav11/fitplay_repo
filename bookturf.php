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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get booking information from the form
    $name = isset($_POST['turfname']) ? $_POST['turfname'] : ''; 
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $startTime = isset($_POST['startTime']) ? $_POST['startTime'] : '';
    $endTime = isset($_POST['endTime']) ? $_POST['endTime'] : '';
    $userName = isset($_POST['userName']) ? $_POST['userName'] : '';
    $userEmail = isset($_POST['userEmail']) ? $_POST['userEmail'] : '';

    // Check if the chosen date and time slot is already booked for the specific turf
    $checkSql = "SELECT * FROM booking WHERE turfname = '$name' AND date = '$date' AND 
                ((startTime <= '$startTime' AND endTime >= '$startTime') OR (startTime <= '$endTime' AND endTime >= '$endTime'))";
    $result = $coni->query($checkSql);

    if ($result && $result->num_rows > 0) {
        // Turf is already booked for the selected date and time
        $response['success'] = false;
        $response['error'] = 'The selected turf is already booked on the specified date and time. Please choose a different date and time.';
    } else {
        // Payment success handling (simulated)
        $paymentSuccess = true; // Change this to your actual payment verification logic

        if ($paymentSuccess) {
            // Insert booking into the database only if payment is successful
            $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : 0;
            $insertSql = "INSERT INTO booking (userid, turfname, date, startTime, endTime, userName, userEmail) 
                            VALUES ('$user_id', '$name', '$date', '$startTime', '$endTime', '$userName', '$userEmail')";

            if ($coni->query($insertSql) === TRUE) {
                // Send email notification only when the booking is successful
                $to = 'aryanjadhav686@gmail.com';
                $subject = 'New Booking';
                $message = "New booking by $userName on $date from $startTime to $endTime for turf $name.";
                $result = smtp_mailer($to, $subject, $message);

                $uto = $userEmail;
                $usubject = 'Booking Done Successfully';
                $umessage = "Your booking by $userName on $date from $startTime to $endTime for turf $name has been successfully done.";
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
                <input type="text" id="price" name="turfname" value="<?= ucfirst($row9['price']) ?> " class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="validtime">Valid Time:</label>
                <input type="text" id="validtime" name="validtime" placeholder="From=<?= $start_time_12hr; ?>   To=<?= $end_time_12hr; ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="bookingDate">Select Date:</label>
                <input type="date" id="bookingDate" name="date" class="form-control" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="startTime">Start Time:</label>
                    <input type="time" id="startTime" class="form-control" placeholder="Start Time" name="startTime" required >
                </div>
                <div class="form-group col-md-6">
                    <label for="endTime">End Time:</label>
                    <input type="time" id="endTime" class="form-control" placeholder="End Time" name="endTime" required>
                </div>
            </div>
            <div class="form-group">
                <label for="userName">Your Name:</label>
                <input type="text" id="userName" class="form-control" placeholder="Enter Your Name" name="userName" required>
            </div>
            <div class="form-group">
                <label for="userEmail">Your Email:</label>
                <input type="email" id="userEmail" class="form-control" placeholder="Enter Your Email" name="userEmail" required>
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
    var turfname = document.getElementById('turfname').value;
    var bookingDate = document.getElementById('bookingDate').value;
    var startTime = document.getElementById('startTime').value;
    var endTime = document.getElementById('endTime').value;
    var userName = document.getElementById('userName').value;
    var userEmail = document.getElementById('userEmail').value;  

    var validStartTime = '<?= $row9['start'] ?>';
    var validEndTime = '<?= $row9['end'] ?>';

    // Combine date and time for better comparison
    var selectedStartTime = new Date(bookingDate + ' ' + startTime);
    var selectedEndTime = new Date(bookingDate + ' ' + endTime);

    // actual open time of turf 
    var validStartTimeObj = new Date(bookingDate + ' ' + validStartTime);
    var validEndTimeObj = new Date(bookingDate + ' ' + validEndTime);

    // Check if the selected start time is within the valid range
    if (selectedStartTime < validStartTimeObj || selectedStartTime > validEndTimeObj) {
        alert('Sorry, turf is only open from ' + validStartTime + ' to ' + validEndTime);
        return;
    }

    // Check if the selected end time is within the valid range
    if (selectedEndTime < validStartTimeObj || selectedEndTime > validEndTimeObj) {
        alert('Sorry, turf is only open from ' + validStartTime + ' to ' + validEndTime);
        return;
    }

    if (new Date(bookingDate) < new Date()) {
        alert('Please select a future date.');
        return;
    }

    if (!turfname || !bookingDate || !startTime || !endTime || !userName || !userEmail) {
        alert('Please fill out all fields before proceeding to payment.');
        return;
    }

    // If form is valid, proceed to Razorpay payment
    var options = {
        "key": "rzp_live_z6prMSW9WlOpcp",
        "amount": "1" * 100, // amount in paise (since Razorpay accepts amount in the smallest currency unit)
        "currency": "INR",
        "name": "<?= ucfirst($row9['name']) ?>",
        "description": "Booking for <?= ucfirst($row9['name']) ?>",
        "image": "logo.png", // replace with your logo
        "handler": function(response) {
            // Handle success callback
            console.log(response);
            // Submit the form after successful payment
            document.getElementById('bookingForm').submit();
        },
        "prefill": {
            "name": document.getElementById('userName').value,
            "email": document.getElementById('userEmail').value
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









