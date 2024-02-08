<?php
session_start();
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
    $name = isset($_POST['turfname']) ? $_POST['turfname'] : ''; // Ensure $name is defined and not null
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $startTime = isset($_POST['startTime']) ? $_POST['startTime'] : '';
    $endTime = isset($_POST['endTime']) ? $_POST['endTime'] : '';
    $userName = isset($_POST['userName']) ? $_POST['userName'] : '';
    $userEmail = isset($_POST['userEmail']) ? $_POST['userEmail'] : '';

    // Check if the chosen date and time slot is already booked for the specific turf
    $checkSql = "SELECT * FROM booking WHERE turfname = '$name' AND date = '$date' AND ((startTime <= '$startTime' AND endTime > '$startTime') OR (startTime < '$endTime' AND endTime >= '$endTime'))";
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
            $insertSql = "INSERT INTO booking (userid, turfname, date, startTime, endTime, userName, userEmail) VALUES ('$user_id', '$name', '$date', '$startTime', '$endTime', '$userName', '$userEmail')";

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

<?php
   

function getInitials($name) {
  $nameParts = explode(' ', $name);
  $initials = '';
  
  foreach ($nameParts as $part) {
      $initials .= strtoupper(substr($part, 0, 1));
  }
  
  return $initials;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="path/to/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
<script src="path/to/popper.min.js"></script>
<script src="path/to/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Explore Turfs</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <!--  <link rel="stylesheet" id="picostrap-styles-css" href="https://cdn.livecanvas.com/media/css/library/bundle.css" media="all"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css" media="all">
    <link href="favicon.png" rel="icon">
  <link href="apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">

  <!-- smaple -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



  <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
 </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turf Booking Platform</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
        .avatar {
        width: 30px;
        height: 30px;
        background-color: #007bff;
        color: #ffffff;
        font-size: 20px;
        font-weight: bold;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
    }
    .c-item{
      height:480px;

    }

    .c-img
    {
      height:100%;
      object-fit:cover;
      filter:brightness(0.6);
    }

    body{
      background:#f3f5f8;
      overflow-x:hidden;
    }

 

        .star-container {
            display: flex;
            align-items: center;
            margin-top: 15px; /* Adjust margin as needed */
        }

        .star-container i {
            margin-right: 2px; /* Adjust margin between stars as needed */
        }


    

    .card-container {
      background-color:#ffff;
      padding:20px;
      border-radius:20px;
             margin:40px;
            display: flex;
            gap: 20px; /* Adjust the margin between cards */
        }

        .card {
            width: 18rem;
        }

        .card-img-top{
          height :100%;
          width:100%;
        }

        .banner-container{
          background-color:#ffff;
          padding:10px;
          margin-bottom:60px;
          width:100%;
          height:100%;
          
        }

        .banner-containerw{
          background-color:#ffff;
          padding:10px;
          margin-bottom:6px;
          width:100%;
          height:40%;
          
        }
    </style>
</head>
<body>
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="index.html">Fit<span style="color: green">Play.</span></a></h1>
        <nav id="navbar" class="navbar">
            <ul>
            
                <li><a class="nav-link scrollto" href="shop.php">Shop</a></li>
                <li class="dropdown">
                    <a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Gyms</a></li>
                       
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="contactu.php">Contact</a></li>
                <li><a class="nav-link scrollto" href="registervenue.php">Register Your Venue</a></li>
                <li class="dropdown" style="color: blue;">
<?php
                if (isset($_SESSION['user_data'])) {
                  $userName = $_SESSION['user_data']['username'];
                  $userInitials = getInitials($userName);
              
                  echo '<a href="#"><span>';
                  echo '<div class="avatar">' . $userInitials . '</div>';
                  echo '<ul><li><a href="user_profile.php">View Profile</a></li>';
              
                  // Now you can directly access 'Rolee' without additional checks
                  if ($_SESSION['user_data']['username'] == "sk") {  
                      echo '<li><a href="admin.php">Admin Panel</a></li>';
                  }
                  echo '</ul>';
              } 
              else {
                  echo '<button type="button" class="btn btn-primary ms-1 ml-3"><a href="signup.php" style="color:white;">Sign Up</a></button>';
                  echo'<span>  </span>';
                  echo '<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>';
              }
?>
                </li>
            </ul>
        </nav>
    </div>
</header>

   
  
    <!-- Booking form container -->
    <div class="container booking-container">
        <!-- Booking form -->
        <form id="bookingForm" method="post">
            <div class="form-group">
                <label for="turfname">Turf Name:</label>
                <input type="text" id="turfname" name="turfname" value="<?= ucfirst($row9['name']) ?> <?= ucfirst($row9['price']) ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="bookingDate">Select Date:</label>
                <input type="date" id="bookingDate" name="date" class="form-control" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="startTime">Start Time:</label>
                    <input type="time" id="startTime" class="form-control" placeholder="Start Time" name="startTime" required>
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
            <button  id="payButton" type="submit" value="Submit" class="btn btn-primary btn-block">Proceed to Payment</button>
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

        if (!turfname || !bookingDate || !startTime || !endTime || !userName || !userEmail) {
            alert('Please fill out all fields before proceeding to payment.');
            return;
        }

        // If form is valid, proceed to Razorpay payment
        var options = {
          
                "key": "rzp_live_z6prMSW9WlOpcp",
                "amount": "1"*100, // amount in paise (since Razorpay accepts amount in smallest currency unit)
                "currency": "INR",
                "name": "Turf Booking",
                "description": "Booking for <?= ucfirst($row9['name']) ?>",
                "image": "your_logo.png", // replace with your logo
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
                    "color": "#F37254"
                }
        
            
        };
        var rzp = new Razorpay(options);
        rzp.open();
    });
</script>

    
</body>
</html>









