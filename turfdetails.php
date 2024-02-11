<?php
session_start();
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






function getInitials($name) {
  $nameParts = explode(' ', $name);
  $initials = '';
  
  foreach ($nameParts as $part) {
      $initials .= strtoupper(substr($part, 0, 1));
  }

  return $initials;}
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
  <link href="assets/img/favicon.png" rel="icon">
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

      <h1 class="logo"><a href="turf.php">Fit<span style="color: rgb(14, 198, 14);">.play</span></a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="shop.php">Shop</a></li>
          <li class="dropdown">
                    <a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Gyms</a></li>
                       
                    </ul>
                </li>
          <li><a class="nav-link scrollto " href="contactu.php">Contact</a></li>
          <li class="dropdown" style="color: blue;">
<?php
                if (isset($_SESSION['user_data'])) {
                  $userName = $_SESSION['user_data']['username'];
                  $userInitials = getInitials($userName);
              
                  echo '<a href="#"><span>';
                  echo '<div class="avatar">' . $userInitials . '</div>';
                  echo '<ul><li><a href="user_profile.php">View Profile</a></li>';
              
                  // Now you can directly access 'Rolee' without additional checks
                  if ($_SESSION['user_data']['user_id'] == "24") {  // Assuming 'Rolee' is at index 4
                      echo '<li><a href="admin.php">Admin Panel</a></li>';
                  }
              
                  echo '</ul>';
              } else {
                  echo '<button type="button" class="btn btn-primary ms-1 ml-3"><a href="signup.php" style="color:white;">Sign Up</a></button>';
                  echo'<span>  </span>';
                  echo '<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>';
                  
              }
?>
                </li>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->



  
  <!-- carosal start  -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h2 style="font-family:'Protest Strike', sans-serif;";><b><?= ucfirst($row9['name']) ?></b></h2>
        <h3><b><?= ucfirst($row9['place']) ?></b><h3>
        <h5><b>₹<?= ucfirst($row9['price']) ?></b></h5>
      </div>

      <div class="row">
        <div class="col-lg-8">
          <div class="border">
          <?php $imgi=$row9['image']?>
          <img src="upload/<?=$imgi?>" style="height:500px; width:850px ;border-radius:30px;">
          </div>
        
        </div>
        <div class="col-lg-4">
          <div class="p-3"
            style="border-radius: 10px; background-color: rgb(223, 219, 219); justify-content:center">
            <a href="bookturf.php?id=<?= $row9['id'] ?>">
            <button class="btn h-60 bg-success text-white"
              style="margin-bottom: 10px; width: 320px; border-radius: 100px; ">
              Book Now
            </button>
            </a>

           
            <br>
            <br>
            <div class="border"
              style="border-radius: 10px; background-color: rgb(223, 219, 219); ">
              <h3 style="text-size:40px">Timming</h3>
              <h6 style="padding-top: 10px; padding-left: 10px;">From:<?= $start_time_12hr; ?></h6>
              <h6><p style="padding-left: 10px; padding-top:10px">To:<?= $end_time_12hr; ?></p></h6>
            </div>
            <br>
            <h3><b>Location</b></h3 style="margin-right:200px">
            <p><?= ucfirst($row9['place']) ?></p>
            <div class="border" style="margin-right:100px; ">
           <?= ucfirst($row9['loc']) ?> 
             
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
                <h4 style="padding: 10px; padding-bottom: 0px;"><b>SOME STUFF OF FOOTBAL</b></h4>
                <p style="padding: 10px;">My Favorite Game (Football) ! Football is my favorite game because it is quite
                  challenging and
                  interesting game. I began to play football while I was 6 years old. Since then it has become my
                  passion.
                  It is also called “king sport” and is the most famous sport in the entire world.</p>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-8 border"
            style="border-radius: 10px; background-color:rgb(217, 217, 217); margin: 20p;box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);">
            <div class="border" style="background-color: white; border-radius: 10px; margin: 10px;">
              <h4 class="p-2" style="font-size: x-large;"><b>Amenities</b></h4>
              <div class="p-2">
                <div>
                  <div>
                   <h6 style=""><b><?= ucfirst($row9['amenitiy']) ?></b></h6> 
                  </div>
                <p></p><?= ucfirst($row9['loc']) ?>
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
            <h3>FitPlay.<span>.</span></h3>
            <p>
             Kolhapur <br>
             Maharastra<br>
              <strong>Phone:</strong> +91 9284008321<br>
              <strong>Email:</strong> thefitplay@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacy_policy.html">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="turf.php">Book Turfs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Explore Gym</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="shop.php">Shop Products</a></li>
              
            </ul>
          </div>



          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Welcome to the heart of our vibrant community! Follow us on our social networks to stay connected with the latest in fitness trends, exciting events, exclusive promotions, and inspiring stories from our community members.</p>
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
        &copy; Copyright <strong><span>FitPlay</span></strong>. All Rights Reserved
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