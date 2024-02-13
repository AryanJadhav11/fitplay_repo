<?php

$server='localhost';
$user='root';
$db='turf';
$pass='';

$coni=mysqli_connect($server,$user,$pass,$db);

if(!$coni)
{
 die(mysqli_error($coni));
}

if(isset($_GET['id']))
{
   $blid=$_GET['id'];
   $sql9="SELECT * FROM `grd` WHERE id='$blid';";
   $res9=mysqli_query($coni,$sql9);
   $row9=mysqli_fetch_assoc($res9);
  
}
$start_time_12hr = date("h:i A", strtotime($row9['start']));
$end_time_12hr = date("h:i A", strtotime($row9['end']));
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

<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitplay_users";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// // Check if user is already logged in
// if (isset($_SESSION['user_data'])) {
//     header("Location: turf.php");
//     exit();
// }

$showalert = false;
$login = false;
$showerr = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $err = "";
    $username = $_POST["uname"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `users` WHERE username='$username' AND password='$password';";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num) {
        $re = mysqli_fetch_assoc($result);
        $user_data = array(
            'user_id' => $re['id'],
            'firstname' => $re['firstname'],
            'lastname' => $re['lastname'],
            'username' => $re['username'],
            'email' => $re['email'],
        );
        $_SESSION['user_data'] = $user_data;
        
         
        // Redirect to turf.php after successful login
        
    } else {
        $showerr = "Invalid Email / Password";
        $_SESSION['error'] = "Invalid Email / Password";
    }
}
echo "User data in session:<br>";
foreach ($_SESSION['user_data'] as $key => $value) {
    echo "$key: $value<br>";
}
// Your remaining code for the login page goes here
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= ucfirst($row9['name']) ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="favicon_io/favicon-16x16.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- icon cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<style>
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
    </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="turf.php" style="text-decoration:none;"><img src="favicon_io/favicon-32x32.png" > Fit<span style="color: #050;">Play</span></a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="shop.php">Shop</a></li>
          <li class="dropdown">
                    <a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Gyms</a></li>
                       
                    </ul>
            </li>

          <li><a class="nav-link scrollto" href="contactu.php">Contact</a></li>

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
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-1">Welcome Back To Fitplay</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="jlo98"></button>
      </div>
      <div class="modal-body p-5 pt-0">
        <form  method="post">
        <div class="form-outline mb-4">
                  <input type="text" id="uname"  name="uname" class="form-control" required autocomplete="off" />
                  <label class="form-label" for="form3Example1">User Name</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control" required autocomplete="off"/>
                  <label class="form-label" for="form3Example1">Password</label>
                </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" fdprocessedid="99b3eo">Log In</button>
          <span>Dont have an account?</span> <a href="signup.php"> Sign up for free!</a>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="chloginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-1">Please Log In</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="jlo98"></button>
      </div>
      <div class="modal-body p-5 pt-0">
        <form  method="post">
        <div class="form-outline mb-4">
                  <input type="text" id="uname"  name="uname" class="form-control" required autocomplete="off" />
                  <label class="form-label" for="form3Example1">User Name</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control" required autocomplete="off"/>
                  <label class="form-label" for="form3Example1">Password</label>
                </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" fdprocessedid="99b3eo">Log In</button>
          <span>Dont have an account?</span> <a href="signup.php"> Sign up for free!</a>
        </form>
      </div>
    </div>
  </div>
</div>


  
  <!-- carosal start  -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h1><?= ucfirst($row9['name']) ?></h1>
        <h3><?= ucfirst($row9['place']) ?></h3>
        <h5>₹<?= ucfirst($row9['price']) ?></h5>
      </div>
<style>
  @media (max-width: 768px) {
  img {
    max-width: 100%;
    height: auto;
  }
}
@media (max-width: 576px) {
  img {
    max-width: 100%;
    height: auto;
  }
}
</style>
      <div class="row">
        <div class="col-lg-8">
          <div>
           <?php $imgi=$row9['image']?>
            <img src="upload/<?=$imgi?>" style="height:500px; width:700px ;border-radius:30px;">
          </div>
        </div> 
        <div class="col-lg-4">
          <div class="p-3"
            style="border-radius: 10px; background-color: rgb(217, 217, 217); box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);">
            <div class="text-center">
           <?php 
          if (isset($_SESSION['user_data'])) {
            echo '<a href="bookturf.php?id=' . $row9['id'] . '"><button class="btn h-60 bg-success text-white" style="margin-bottom: 10px; width: 320px; border-radius: 100px;"> BOOK NOW </button></a>';
        } else {
            echo '<button class="btn h-60 bg-success text-white" style="margin-bottom: 10px; width: 320px; border-radius: 100px;" data-bs-toggle="modal" data-bs-target="#chloginModal">Book Now</button>';
        }
        

            ?>
            </div>
            

            
            <br>
            <br>
            <div class="border"
              style="border-radius: 10px; background-color: white; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);">
              <h4 style="padding-top: 10px; padding-left: 10px;"><b>Timing</b></h4>
              <p style="padding-left: 10px;"><b>From:<?= $start_time_12hr; ?></b></p>
              <p style="padding-left: 10px;"><b>To:<?= $end_time_12hr; ?></b></p>
            </div>
            <br>
            <div class="border"
              style="border-radius: 10px; background-color: white; height: 200px; width: 320px; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);">
             <div class="text-center">
             <?= ucfirst($row9['loc']) ?>
             <h1>hello sample aahe he aasude </h1>
             </div>
            </div>
          </div>
        </div>
</div>
        <div class="row">
          <div class="col-lg-8">
            <div class="border"
              style="border-radius: 10px; margin-top: 20px; background-color: rgb(217, 217, 217); box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);">
              <div class="" style="margin-top: 10px; border-radius: 10px;margin-bottom: 10px;">
                <div class="align-items-center justify-content-center">
                  <button class=" btn btn-danger mt-3"
                  style="margin-left: 60px; margin-bottom: 10px; border-radius: 50px; width: 150px; height: 50px;">
                  <i class="fas fa-futbol" style="size: 50px;"></i>
                  Football
                  </button>
                  <button class="btn btn-danger mt-3"
                    style="margin-left: 60px; margin-bottom:10px; border-radius: 50px; width: 150px; height: 50px;">
                    <i class="fas fa-baseball-ball"></i> Cricket
                  </button>
                  <button class="btn btn-danger mt-3"
                    style="margin-left: 60px; margin-bottom:10px; border-radius: 50px; width: 150px; height: 50px;">
                    <i class="fas fa-baseball-ball"></i> Tennis
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="border"
              style="background-color:rgb(217, 217, 217) ;border-radius: 10px; margin: 30px; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);">
              <div class="border" style="background-color: white; border-radius: 10px; margin: 20px;">
                <h4 style="padding: 10px; padding-bottom: 0px;"><b>Description</b></h4>
                <p style="padding: 10px;"><?= ucfirst($row9['details']) ?></p>
              </div>
            </div>
          </div>
        </div>


    <div class="row">
    <div class="col-lg-8 border" style="border-radius: 10px; background-color:rgb(217, 217, 217); margin: 20px; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);">
        <div class="border" style="background-color: white; border-radius: 10px; margin: 10px;">
            <h4 class="p-2" style="font-size: x-large;"><b>Amenities</b></h4>
            <div class="p-2">
                <?php

                // Define the amenities array with all possible amenities
                $amenities = array(
                  $row9['amenitiy1'],
                  $row9['amenitiy2'],
                  $row9['amenitiy3'],
                  $row9['amenitiy4']
              );

                if (empty($amenity)){
                  echo '<div style="background-color: red; padding: 5px; display: inline-block; border-radius: 50%;"><i class="fa fa-close" style="color: white;"></i></div>';
                        echo '<span style="margin-left: 5px; margin-right: 10px;">No Amenity</span>';

                }                              

                // Loop through each amenity
                else { foreach ($amenities as $amenity) {
                    // Check if the amenity is present
                    if (!empty($amenity)) {
                        // Output the check icon and the amenity
                        echo '<div style="background-color: rgb(12, 208, 12); padding: 5px; display: inline-block; border-radius: 50%;"><i class="fas fa-check" style="color: white;"></i></div>';
                        echo '<span style="margin-left: 5px; margin-right: 10px;">' . ucfirst($amenity) . '</span>';
                    } 
                }}
                ?>
            </div>
        </div>
    </div>
</div>


       












    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  </div>


  
  </div>
  <br>
  <br>
  <br>
  <!-- carosal end -->

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BizLand<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>