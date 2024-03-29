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

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Shop</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Contact</a></li>
          <button class="btn" style="background-color: rgb(13, 110, 253); margin-left: 30px;">Sign UP</button>
          <button class="btn" style="background-color: green; margin-left: 30px;">Log In</button>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->



  
  <!-- carosal start  -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h1><?= ucfirst($row9['name']) ?></h1>
        <p><?= ucfirst($row9['place']) ?></p>
        <p><?= ucfirst($row9['price']) ?></p>
      </div>

      <div class="row">
        <div class="col-lg-8">
        <?php $imgi=$row9['image']?>
          <img src="upload/<?=$imgi?>" class="img-fluid" >
        </div>
        <div class="col-lg-4">
          <div class="p-3"
            style="border-radius: 10px; background-color: rgb(227, 225, 225);  justify-content: center;">
            <button class="btn h-60 bg-success text-white"
              style="margin-bottom: 10px; width: 320px; border-radius: 100px; ">
              <a href="hello.php?id=<?= $row9['id'] ?>" class="btn btn-primary">Book Now</a>
            </button>

            <button class="btn w-50 bg-primary text-white"
              style="margin-left: 80px; margin-top: 10px; border-radius: 100px; ">
              <i class="fas fa-share-alt"></i> SHARE
            </button>
            <br>
            <br>
            <div class="border"
              style="border-radius: 10px; background-color: rgb(223, 219, 219); ">
              <h3>Timming</h3>
              <h4 style="padding-top: 10px; padding-left: 10px;"><b>From:</b><?= $start_time_12hr; ?></h4>
              <p style="padding-left: 10px;"><b>To:</b><?= $end_time_12hr; ?></p>
            </div>
            <br>
            <div class="border"
              style="border-radius: 10px; background-color: white; height: 200px; width: 320px;">
            <h3>Location</h3>
            <p><?= ucfirst($row9['place']) ?></p>
          <?= ucfirst($row9['loc']) ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="border"
              style="border-radius: 10px; margin-top: 20px; background-color: rgb(217, 217, 217); box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);">
              <div class="" style="margin-top: 10px; border-radius: 10px;margin-bottom: 10px;">
                <div class="align-items-center justify-content-center"">
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
                <p><?= ucfirst($row9['amenitiy']) ?></p>
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