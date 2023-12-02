<?php
    session_start();

function getInitials($name) {
  $nameParts = explode(' ', $name);
  $initials = '';
  
  foreach ($nameParts as $part) {
      $initials .= strtoupper(substr($part, 0, 1));
  }
  
  return $initials;
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <!--  <link rel="stylesheet" id="picostrap-styles-css" href="https://cdn.livecanvas.com/media/css/library/bundle.css" media="all"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css" media="all">
    <link href="favicon.png" rel="icon">
  <link href="apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="aos.css" rel="stylesheet">
  <link href="bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap-icons.css" rel="stylesheet">
  <link href="boxicons.min.css" rel="stylesheet">
  <link href="glightbox.min.css" rel="stylesheet">
  <link href="swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">


  <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
 </script>
 <script type="text/javascript">
   (function(){
      emailjs.init("NZwPsWRpzzWmVQjwb");
   })();
 </script> 

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


<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">thefitplay@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91 9284008321</span></i>
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

      <h1 class="logo"><a href="index.html">Fit<span style="color: rgb(166, 166, 166);">Play.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          
          <li><a class="nav-link scrollto " href="#portfolio">Shop</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <li><a href="turf.php">Turfs</a></li>
              <li><a href="#">Gyms</a></li>
              <li><a href="#">Visit Our Shop</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="dropdown" style="color: blue;">
    <?php
    if (isset($_SESSION['user_data'])) {
        // If the user is logged in, display username and "View Profile"
        $userName = $_SESSION['user_data'][2]; // Assuming username is at index 2
        $userInitials = getInitials($userName); // Replace getInitials with your actual function

        echo '<a href="#"><span>';
        echo '<div class="avatar">' . $userInitials . '</div>';
        echo '<ul><li><a href="user_profile.php">View Profile</a></li></ul>';
    } else {
        // If the user is not logged in, display login button
        echo '<button type="button" class="btn btn-outline-primary ms-1"><a href="signup.php">Sign Up</a></button>';
        echo '<button type="button" class="btn btn-outline-primary ms-1"><a href="login.php">Log In</a></button>';
    }
    ?>
</li>

        </ul>
        
      </nav><!-- .navbar -->

    </div>
  </header>

  <div class="container-fluid px-4 py-5 my-5 text-center">
    <div class="lc-block mb-4">
        <div editable="rich">
            <h2 class="display-2 fw-bold">Book Your <span class="text-primary">Turf Online !</span></h2>
        </div>
    </div>
    <div class="lc-block col-lg-6 mx-auto mb-5">
        <div editable="rich">
            <p class="lead">Book turfs effortlessly online with FitPlay for your sports events, training sessions, or friendly matches.</p>
        </div>
    </div>

    <div class="lc-block d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search for turfs" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    
    <div class="lc-block d-grid gap-2 d-sm-flex justify-content-sm-center">
        <img class="img-fluid" src="16143655_5700179-removebg-preview.png" width="" height="783" srcset="" sizes="" alt="Illustration of a person going up with a ladder">
    </div>
</div>




    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>