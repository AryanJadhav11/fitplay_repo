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
    $name = isset($_POST['turfname']) ? $_POST['turfname'] : ''; 
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $price=isset($_POST['price']) ? $_POST['price'] : '';
    $timeSlot = isset($_POST['timeSlot']) ? $_POST['timeSlot'] : '';
    $userName = isset($_POST['userName']) ? $_POST['userName'] : '';
    $userEmail = isset($_POST['userEmail']) ? $_POST['userEmail'] : '';

    $checkSql = "SELECT * FROM booking WHERE turfname = '$name' AND date = '$date' AND time = '$timeSlot'";
    $result = $coni->query($checkSql);

    if ($result && $result->num_rows > 0) {
        $response['success'] = false;
        $response['error'] = 'The selected turf is already booked on the specified date and time. Please choose a different date and time.';
    } else {
        $paymentSuccess = true;

        if ($paymentSuccess) {
            $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : 0;
            $insertSql = "INSERT INTO booking (userid, turfname, date, time, userName, userEmail) 
                            VALUES ('$user_id', '$name', '$date', '$timeSlot', '$userName', '$userEmail')";

if ($coni->query($insertSql) === TRUE) {
    // Generate a unique 5-digit entry ID
$entryId = mt_rand(10000, 99999);

$to = 'aryanjadhav686@gmail.com';
$subject = 'New Booking';
$message = "New booking by $userName on $date at $timeSlot for turf $name.\n\n";
$message .= "Booking Details:\n";
$message .= "Entry ID: $entryId\n";
$message .= "Turf Name: $name\n";
$message .= "Date: $date\n";
$message .= "Time Slot: $timeSlot\n";
$message .= "Total Amount Paid: $price\n";

$result = smtp_mailer($to, $subject, $message);

$uto = $userEmail;
$usubject = 'Booking Done Successfully';
$umessage = "Your booking by $userName on $date at $timeSlot for turf $name has been successfully done.\n\n";
$umessage .= "Booking Details:\n";
$umessage .= "Entry ID: $entryId\n";
$umessage .= "Turf Name: $name\n";
$umessage .= "Date: $date\n";
$umessage .= "Time Slot: $timeSlot\n";
$umessage .= "Total Amount Paid: $price\n";


    $uresult = smtp_mailer($uto, $usubject, $umessage);

    if ($result === 'Sent' && $uresult === 'Sent') {
        $response['email_status'] = 'Email sent successfully.';
        $response['success_message'] = 'Booking successful!';
    } else {
        $response['email_status'] = 'Email sending failed. ' . $result;
        $response['error_message'] = 'Booking failed. Please try again later.';
    }

    $response['success'] = true;
} else {
    $response['success'] = false;
    $response['error'] = mysqli_error($coni);
}

        } else {
            $response['success'] = false;
            $response['error'] = 'Payment failed. Please try again.';
        }
    }
}

$coni->close();
?>

<head>
    <title>FitPlay - Turf Booking Platform</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
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

    </style>
</head>
<body>
    <?php 
    $start_time_12hr = date("h:i A", strtotime($row9['start']));
    $end_time_12hr = date("h:i A", strtotime($row9['end']));
    ?>
    <div class="container booking-container">
        <form id="bookingForm" method="post">
            <div class="form-group">
                <label for="turfname">Turf Name:</label>
                <input type="text" id="turfname" name="turfname" value="<?= ucfirst($row9['name']) ?> " class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
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
            <div class="pt-3">
                <button  id="payButton" type="submit" value="Submit" class="btn btn-primary btn-block" style="width: 100%;">Proceed to Payment</button>
            </div>
        </form>
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
