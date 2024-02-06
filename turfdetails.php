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
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BizLand Bootstrap Template - Index</title>
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

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script> 
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js'></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a
            href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Fit<span style="color: rgb(14, 198, 14);">.play</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <br>
  <br>

  <!-- carosal start  -->

 

  <div class="container">
    <div class="row">
      <div class="col-lg-8">
      <h2><?= ucfirst($row9['name']) ?></h2>
        <p><?= ucfirst($row9['place']) ?></p>
        <p><?= ucfirst($row9['price']) ?></p>

      </div>
      <div class="col-lg-4">
        <br>
        <button class="btn w-100 h-50 bg-success text-white">
        <a href="bookturf.php?id=<?= $row9['id'] ?>" class="btn btn-primary">Book Now</a>
        </button>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel"
          style="border: 1px solid black; border-radius: 15px; overflow: hidden;">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
            <?php $imgi=$row9['image']?>
					

          <img src="upload/<?=$imgi?>" >
            </div>
            <!-- <div class="carousel-item" data-bs-interval="2000">
              <img
                src="https://playo.gumlet.io/TIENTO/tientosports7.jpeg?w=700&format=webp&q=30&overlay=https://playo-website.gumlet.io/playo-website-v2/logos-icons/playo-logo.png&overlay_width_pct=0.2&overlay_height_pct=1&overlay_position=bottomright"
                class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img
                src="https://playo.gumlet.io/TIENTO/tientosports9.jpeg?w=700&format=webp&q=30&overlay=https://playo-website.gumlet.io/playo-website-v2/logos-icons/playo-logo.png&overlay_width_pct=0.2&overlay_height_pct=1&overlay_position=bottomright"
                class="d-block w-100" alt="...">
            </div> -->
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="d-flex">
          <button class="btn w-100 h-50 bg-success text-white">
            <i class="fas fa-share-alt"></i> SHARE
          </button>
         
        </div>
        <br>
        <div class=" border border-secondary p-3" style="border-radius: 10px;">
          <h4><b>Timing</b></h4>
          <p><b>From:</b> <?= $start_time_12hr; ?></p>
          <p><b>To:</b> <?= $end_time_12hr; ?></p>
        </div>
        <br>
        <div class=" border border-secondary p-3" style="border-radius: 10px;">
          <h3>Location</h3>
          <p><?= ucfirst($row9['place']) ?></p>
          <?= ucfirst($row9['loc']) ?>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 border border-secondary" style="border-radius: 10px; height: 100px;">
        <h4 class="pt-3"><b>Sports Available</b></h4>
        <div>
          <button class="btn btn-outline-danger">
            <i class="fas fa-futbol" style="size: 50px;"></i>
            Football
          </button>
          <button class="btn btn-outline-danger">
            <i class="fas fa-baseball-ball"></i> Cricket
          </button>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-8 border border-secondary" style="border-radius: 10px; height: 100px;">
        <h4 class="pt-3" style="font-size: x-large;"><b>Amenities</b></h4>
        <div>
        <p><?= ucfirst($row9['amenitiy']) ?></p>
        </div>
      </div>
    </div>
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
          
          <li><i class="bx bx-chevron-right"></i> <a href="privacy_policy.html">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Book Turfs</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Explore Gym</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Shop Products</a></li>
          
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
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>
</footer><!-- End Footer -->
  

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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