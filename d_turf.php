<?php include('header.php') ;
$server = 'localhost';
$user = 'root';
$db = 'turf';
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
$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['razorpay_payment_id']) && !empty($_POST['razorpay_payment_id'])) {
    // Check if payment is successful
    $paymentSuccessful = true; // Replace this with your payment verification logic

    if ($paymentSuccessful) {
        // Retrieve the current user's ID from the session data
        $userId = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : 0;

        $turfname = isset($_POST['turfname']) ? $_POST['turfname'] : ''; 
        $date = isset($_POST['date']) ? $_POST['date'] : '';
        $startTime = isset($_POST['startTime']) ? $_POST['startTime'] : '';
        $endTime = isset($_POST['endTime']) ? $_POST['endTime'] : '';
        $userName = isset($_POST['userName']) ? $_POST['userName'] : '';
        $userEmail = isset($_POST['userEmail']) ? $_POST['userEmail'] : '';

        // Insert data into the booking table
        $insertSql = "INSERT INTO booking (userId, turfname, date, startTime, endTime, userEmail, userName) 
                      VALUES ('$userId', '$turfname', '$date', '$startTime', '$endTime', '$userEmail', '$userName')";

        if ($coni->query($insertSql) === TRUE) {
            // Data inserted successfully
            $response['success'] = true;
            $response['message'] = 'Booking successful.';

            // Send email notifications
            $to = 'aryanjadhav686@gmail.com'; // Change to your recipient email address
            $subject = 'New Booking';
            $message = "New booking by $userName on $date from $startTime to $endTime for turf $turfname.";
            $emailResult = smtp_mailer($to, $subject, $message);

            if ($emailResult === 'Sent') {
                $response['email_status'] = 'Email sent successfully.';
            } else {
                $response['email_status'] = 'Failed to send email.';
            }
        } else {
            // Failed to insert data
            $response['success'] = false;
            $response['error'] = mysqli_error($coni);
        }
    } else {
        // Payment failed
        $response['success'] = false;
        $response['error'] = 'Payment failed. Please try again.';
    }
}

$coni->close();

// Output JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<title></title>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap_detail.min.css" />
	<style>
        .booking-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }      
        .time-slot-button.selected-time-slot {
    background-color: grey;
    color: white;
}
.booking-cta {
    font-family: 'Roboto', sans-serif; /* Replace 'Roboto' with your preferred professional font */
    font-size: 24px; /* Adjust the font size as needed */
    line-height: 1.5; /* Adjust the line height for better readability */
    color: #333; /* Set the desired text color */
  }
    </style>
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style_detail.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
<?php 
    $start_time_12hr = date("h:i A", strtotime($row9['start']));
    $end_time_12hr = date("h:i A", strtotime($row9['end']));
    ?>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						
					</div>
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
						<form id="bookingForm" method="post">
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Turf Name</span>
											<input class="form-control" type="text" id="turfname" name="turfname"type="text" value="<?= ucfirst($row9['name']) ?>"  readonly>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Price</span>
											<input class="form-control" type="text"  id="price" name="price" value="<?= ucfirst($row9['price']) ?> " readonly>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Valid Time</span>
											<input class="form-control" id="validtime" name="validtime" placeholder="From=<?= $start_time_12hr; ?>   To=<?= $end_time_12hr; ?>" class="form-control" readonly>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Select Date </span>
											<input class="form-control" type="date" id="bookingDate" name="date" class="form-control" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Your Name</span>
											<input type="text" id="userName" class="form-control" placeholder="Enter Your Name" name="userName" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Email</span>
											<input type="email" id="userEmail" class="form-control" placeholder="Enter Your Email" name="userEmail" required>
										</div>
									</div>

                                    <input type="hidden" id="razorpay_payment_id" name="razorpay_payment_id" value="">

									
								</div>
								<div class="row">
								<input type="hidden" id="timeSlot" name="timeSlot" value="">
<div class="form-group" id="timeSlotButtons" style="margin:10px;">
	</div>
								<div class="form-btn">
									<button button  id="payButton" type="submit" value="Submit" class="btn btn-primary btn-block" style="width: 100%;">Proceed to Payment</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
    var startTime = "<?= date('H:i', strtotime($row9['start'])) ?>";
    var endTime = "<?= date('H:i', strtotime($row9['end'])) ?>";
    var selectedTimeSlot = "";

    function generateTimeSlots() {
        var timeSlotButtonsContainer = document.getElementById("timeSlotButtons");
        timeSlotButtonsContainer.innerHTML = "";

        var startDate = new Date("2024-03-07 " + startTime);
        var endDate = new Date("2024-03-07 " + endTime);
        var interval = 60;

        while (startDate < endDate) {
            var slotStartTime = startDate.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            startDate.setMinutes(startDate.getMinutes() + interval);
            var slotEndTime = startDate.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

            var button = document.createElement("button");
button.type = "button";
button.className = "btn btn-success mr-2 mb-2 time-slot-button"; // Add an additional class
button.style = "margin:10px;";
button.textContent = slotStartTime + " - " + slotEndTime;

button.addEventListener("click", function () {
    // Remove the selected class from all buttons
    var buttons = document.querySelectorAll('.time-slot-button');
    buttons.forEach(function (btn) {
        btn.classList.remove('selected-time-slot');
    });

    // Add the selected class to the clicked button
    this.classList.add("selected-time-slot");
    selectedTimeSlot = this.textContent;
    document.getElementById("timeSlot").value = selectedTimeSlot;
});

timeSlotButtonsContainer.appendChild(button);

        }
    }

    generateTimeSlots();



        document.getElementById("bookingDate").addEventListener("change", generateTimeSlots);

        document.getElementById('payButton').addEventListener('click', function(e) {
            e.preventDefault();

            var turfname = document.getElementById('turfname').value;
            var bookingDate = document.getElementById('bookingDate').value;
            var userName = document.getElementById('userName').value;
            var userEmail = document.getElementById('userEmail').value;

            var validStartTime = '<?= $row9['start'] ?>';
            var validEndTime = '<?= $row9['end'] ?>';

            var selectedTimeSlot = new Date(bookingDate + ' ' + selectedTimeSlot);
            var validStartTimeObj = new Date(bookingDate + ' ' + validStartTime);
            var validEndTimeObj = new Date(bookingDate + ' ' + validEndTime);

            if (selectedTimeSlot < validStartTimeObj || selectedTimeSlot > validEndTimeObj) {
                alert('Sorry, turf is only open from ' + validStartTime + ' to ' + validEndTime);
                return;
            }

            if (new Date(bookingDate) < new Date()) {
                alert('Please select a future date.');
                return;
            }

            if (!turfname || !bookingDate || !userName || !userEmail || !selectedTimeSlot) {
                alert('Please fill out all fields before proceeding to payment.');
                return;
            }

            var options = {
                "key": "rzp_live_GL8N1VxLpxd9SM",
                "amount": "1" * 100,
                "currency": "INR",
                "name": "<?= ucfirst($row9['name']) ?>",
                "description": "Booking for <?= ucfirst($row9['name']) ?>",
                "image": "logo.png",
                "handler": function(response) {
                    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;

                // Submit the form
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