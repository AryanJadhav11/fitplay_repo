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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="aos.css" rel="stylesheet">
  <link href="card_style.css" rel="stylesheet">
  <link rel="stylesheet" href="card_swipper.min.css" />
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
    .c-item{
      height:480px;

    }

    .c-img
    {
      height:100%;
      object-fit:cover;
      filter:brightness(0.6);
    }

    @media screen and(min-width:576px)
    {
      .icarousel-inner{
        display: flex;
      }

      .icarousel-item{
        display:block;
        margin-right:0;
        flex: 0 0 calc(100%/3);
      }

      .icarousel-inner{
        padding:1em;
      }

      .card{
        margin: 0 .5em;
      }
    }


    .img-wrapper{
      max-width:100%;
      height:17em;
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
          <li><a class="nav-link scrollto active" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          
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

  <div id="hero-carousel" class="carousel slide  carousel-fade" data-bs-ride="carousel" style="margin-bottom:10px;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">

    <div class="carousel-item active c-item">
      <img src="footc1.jpeg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4 ">
        <p class="mt-5 fs-3 text-uppercase">Book your turf online effortlessly and secure your playing field.</p>
        <h1 class="display-1 fw-bolder text-capitalize">Score Your Spot</h1>
        <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Book Now</button>
      </div>
    </div>

    <div class="carousel-item c-item">
      <img src="full-shot-couch-training-kids.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4 ">
        <p class="mt-5 fs-3 text-uppercase"> Experience the joy of hassle-free reservations for your soccer matches.</p>
        <h1 class="display-1 fw-bolder text-capitalize">Kick Off Convenience</h1>
        <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Explore Top Turfs</button>
      </div>
    </div>

    <div class="carousel-item c-item">
      <img src="full-shot-women-playing-football.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4 ">
        <p class="mt-5 fs-3 text-uppercase">Our online turf booking platform lets you schedule your games at your convenience.</p>
        <h1 class="display-1 fw-bolder text-capitalize">Game On Anytime</h1>
        <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Kick Now</button>
      </div>
    </div>


    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </button>
  <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>



  </div>
</div>





<!--card carousel to show turfs-->


<div class="container swiper">
      <div class="slide-container">
        <div class="card-wrapper swiper-wrapper">
          <div class="card swiper-slide">
            <div class="image-box">
              <!--<img src="images/showImg/fullDev.jpg" alt="" />-->
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile1.jpg" alt="" />-->
              <div class="name-job">
                <h3 class="name">David Cardlos</h3>
                <h4 class="job">Full Stack Developer</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <!--<img src="images/showImg/photographer.jpg" alt="" />-->
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile2.jpg" alt="" />-->
              <div class="name-job">
                <h3 class="name">Siliana Ramis</h3>
                <h4 class="job">Photographer</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <!--<img src="images/showImg/dataAna.jpg" alt="" />-->
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile3.jpg" alt="" />-->
              <div class="name-job">
                <h3 class="name">Richard Bond</h3>
                <h4 class="job">Data Analyst</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <!--<img src="images/showImg/appDev.jpg" alt="" />-->
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile4.jpg" alt="" />-->
              <div class="name-job">
                <h3 class="name">Priase</h3>
                <h4 class="job">App Developer</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <!--<img src="images/showImg/blogger.jpg" alt="" />-->
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile5.jpg" alt="" />-->
              <div class="name-job">
                <h3 class="name">James Laze</h3>
                <h4 class="job">Blogger</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
    </div>

    <script src="swiper-bundle.min.js"></script>
    <script src="card_script.js"></script>

<!--card carousel end-->




  




    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>