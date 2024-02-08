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
$server = 'localhost';
$user = 'root';
$db = 'turf';
$pass = '';

$coni = mysqli_connect($server, $user, $pass, $db);

if (!$coni) {
    die(mysqli_error($coni));
}

// Function to get initials from a name
function getInitials($name) {
    $nameParts = explode(' ', $name);
    $initials = '';

    foreach ($nameParts as $part) {
        $initials .= strtoupper(substr($part, 0, 1));
    }

    return $initials;
}

// Process cancellation form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $turfname =  $_POST["turfname"];
    $reason =  $_POST["reason"];
    $name =  $_POST["name"];
    $mobileno =  $_POST["mobileno"];
    $mail =  $_POST["mail"];

    // Get user ID from session
    $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : 0;

    // Insert cancellation data into cancel table
    $insertSql = "INSERT INTO cancel (userid, turfname, reason, uname, mobileno, email) VALUES ('$user_id', '$turfname', '$reason', '$name', '$mobileno', '$mail')";

    if (mysqli_query($coni, $insertSql)) {
        // If cancellation data inserted successfully, proceed to delete booking
        if (isset($_GET['deleteid'])) {
            $id = $_GET['deleteid'];
            $sql9 = "SELECT * FROM `booking` WHERE boid='$id'";
                $res9 = mysqli_query($coni, $sql9);
                if ($res9 === false) {
                    // Handle the error
                    die(mysqli_error($coni));
                }
                $row9 = mysqli_fetch_assoc($res9);

                $userName = isset($row9['userName']) ? $row9['userName'] : '';
                $date = isset($row9['date']) ? $row9['date'] : '';
                $startTime = isset($row9['startTime']) ? $row9['startTime'] : '';
                $endTime = isset($row9['endTime']) ? $row9['endTime'] : '';
                $name = isset($row9['turfname']) ? $row9['turfname'] : '';

                
            $deleteSql = "DELETE FROM booking WHERE boid='$id'";
            if (mysqli_query($coni, $deleteSql)) {
                // Booking deleted successfully
                echo '<div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Done!</h4>
                        <p>Turf has been unlisted successfully</p>
                        <hr>
                        <a href="mybookings.php" class="btn btn-primary">Go back</a>
                      </div>';

                // Compose email message
                $uto = $mail;
                $usubject = 'Booking has been cancelled';
                $umessage = "Your booking by $userName on $date from $startTime to $endTime for turf $name has been cancelled, you will receive refund shortly.";
                $uresult = smtp_mailer($uto, $usubject, $umessage);
                
      
                if ($uresult === 'Sent') {
                    // Email sent successfully
                    $response['email_status'] = 'Email sent successfully.';
                    // Booking successful message
                    $response['success_message'] = 'Booking successful!';
                } else {
                    // Email sending failed
                    $response['email_status'] = 'Email sending failed. ' . $uresult;
                    // Booking failed message
                    $response['error_message'] = 'Booking failed. Please try again later.';
                }
            } else {
                // Error deleting booking
                echo "Error: " . mysqli_error($coni);
            }
        }
    } else {
        // Error inserting cancellation data
        echo "Error: " . mysqli_error($coni);
    }
}

?>
   <?php
if (isset($_GET['deleteid'])) {
    $boid = $_GET['deleteid'];
    $sql9 = "SELECT * FROM `booking` WHERE boid='$boid';";
    $res9 = mysqli_query($coni, $sql9);
    if ($res9 === false) {
        // Handle the error
        die(mysqli_error($coni));
    }
    $row9 = mysqli_fetch_assoc($res9);
}
?>  



   
<script>
   function getInitials($name) {
     $nameParts = explode(' ', $name);
     $initials = '';
     
     foreach ($nameParts as $part) {
         $initials .= strtoupper(substr($part, 0, 1));
     }
     
     return $initials;
   }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="path/to/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
<script src="path/to/popper.min.js"></script>
<script src="path/to/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cancel My Booking</title>
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
        <form id="bookingForm" method="post">
            <div class="form-group">
                <label for="turfname">Turf Name:</label>
                <input type="text" id="turfname" name="turfname" value="<?= isset($row9['turfname']) ? ($row9['turfname']) : '' ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="reason">Reason of cancellation</label>
                <textarea required class="form-control" name="reason" id="reason"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" class="form-control" value="<?= isset($row9['userName']) ? ($row9['userName']) : '' ?>" name="name" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="mobileno">Your mobile no</label>
                    <input type="number" id="mobileno" class="form-control" name="mobileno" required>
                </div>
            </div>
            <div class="form-group">
                <label for="mail">Your mail</label>
                <input type="text" id="mail" class="form-control"  name="mail" value="<?= isset($row9['userEmail']) ? ($row9['userEmail']) : '' ?>" readonly>
            </div>
            <button  type="submit" value="Submit" class="btn btn-primary btn-block">Proceed</button>
        </form>
    </div>

</body>
</html>
