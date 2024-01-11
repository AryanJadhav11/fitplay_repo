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
  <link href="aos.css" rel="stylesheet">
  <link href="card_style.css" rel="stylesheet">
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
          margin-bottom:60px;
          width:100%;
          height:80%;
          
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

      <h1 class="logo"><a href="index.html">Fit<span style="color: green">Play.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          
          <li><a class="nav-link scrollto " href="#portfolio">Shop</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              
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
        echo '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
             
                  <div class="modal-content rounded-4 shadow" >
                      <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-1">Welcome Back to Fitplay.</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="jlo98"></button>
                      </div>
                      <div class="modal-body p-5 pt-0">
                        <form>
                          <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-3" id="floatingInput">
                            <label for="floatingInput">Email address</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" fdprocessedid="o9e74o">
                            <label for="floatingPassword">Password</label>
                          </div>
                          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" fdprocessedid="99b3eo">Log In</button>
                          <span>Dont have an account?</span> <a href=""> Sign up for free!</a>
                        </form>
                      </div>
                    </div>
             
        </div>
        </div>';
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


<div class="card-container">

        <div class="card" style="width: 18rem;">
            <img src="turf1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              
                <h5 class="card-title">Tiger Turf</h5>
              
                <p class="card-text">   <i class="fa-solid fa-thumbs-up" style="color: #4c77c2;"></i> Parking,Changing Room,Drinks,Washrooms</p>
                <a href="#" class="btn btn-primary">Book</a>
                <br>
                <div class="star-container">
                <i class="fa-solid fa-star" style="color: gold;"></i>
                <i class="fa-solid fa-star" style="color:gold ;"></i>
                <i class="fa-solid fa-star" style="color:gold;"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
  </div>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="turf2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Juna Budhwar Turf</h5>
                <p class="card-text"> <i class="fa-solid fa-thumbs-up" style="color: #4c77c2;"></i> Parking,Changing Room,Washrooms</p>
                <a href="#" class="btn btn-primary">Book</a>
                <div class="star-container">
                <i class="fa-solid fa-star" style="color: gold;"></i>
                <i class="fa-solid fa-star" style="color:gold ;"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
  </div>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="turf3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Tiki Taka</h5>
                <p class="card-text"> <i class="fa-solid fa-thumbs-up" style="color: #4c77c2;"></i> Parking,Changing Room,Drinks,Washrooms</p>
                <a href="#" class="btn btn-primary">Book</a>
                <div class="star-container">
                <i class="fa-solid fa-star" style="color: gold;"></i>
                <i class="fa-solid fa-star" style="color:gold ;"></i>
                <i class="fa-solid fa-star" style="color:gold ;"></i>
                <i class="fa-solid fa-star" style="color:gold ;"></i>
                <i class="fa-regular fa-star"></i>
                </div>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="turf4.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Fifa</h5>
                <p class="card-text"> <i class="fa-solid fa-thumbs-up" style="color: #4c77c2;"></i> Parking,Changing Room,Washrooms</p>
                <a href="#" class="btn btn-primary">Book</a>
                <div class="star-container">
                <i class="fa-solid fa-star" style="color: gold;"></i>
                <i class="fa-solid fa-star" style="color:gold ;"></i>
                <i class="fa-solid fa-star" style="color:gold ;"></i>
                <i class="fa-solid fa-star" style="color:gold ;"></i>
                <i class="fa-solid fa-star" style="color:gold ;"></i>
                </div>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="turf5.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Crazy Town</h5>
                <p class="card-text"> <i class="fa-solid fa-thumbs-up" style="color: #4c77c2;"></i> Parking,Changing Room,Washrooms</p>
                <a href="#" class="btn btn-primary">Book</a>
                <div class="star-container">
                <i class="fa-solid fa-star" style="color: gold;"></i>
                <i class="fa-solid fa-star" style="color:gold ;"></i>
                <i class="fa-solid fa-star" style="color:gold ;"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                </div>

            </div>
        </div>
    </div>
<!--card carousel end-->

<div class="banner-container">
  <img src="Screenshot 2023-12-03 224356.png" style="width:100%; ">
  </div>


  <!--card carousel to show turfs-->


<div class="card-container">

<div class="card" style="width: 18rem;">
    <img src="turf1.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      
        <h5 class="card-title">Tiger Turf</h5>
      
        <p class="card-text">   <i class="fa-solid fa-thumbs-up" style="color: #4c77c2;"></i> Parking,Changing Room,Drinks,Washrooms</p>
        <a href="#" class="btn btn-primary">Book</a>
        <br>
        <div class="star-container">
        <i class="fa-solid fa-star" style="color: gold;"></i>
        <i class="fa-solid fa-star" style="color:gold ;"></i>
        <i class="fa-solid fa-star" style="color:gold;"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
</div>
    </div>
</div>

<div class="card" style="width: 18rem;">
    <img src="turf2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Juna Budhwar Turf</h5>
        <p class="card-text"> <i class="fa-solid fa-thumbs-up" style="color: #4c77c2;"></i> Parking,Changing Room,Washrooms</p>
        <a href="#" class="btn btn-primary">Book</a>
        <div class="star-container">
        <i class="fa-solid fa-star" style="color: gold;"></i>
        <i class="fa-solid fa-star" style="color:gold ;"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
</div>
    </div>
</div>

<div class="card" style="width: 18rem;">
    <img src="turf3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Tiki Taka</h5>
        <p class="card-text"> <i class="fa-solid fa-thumbs-up" style="color: #4c77c2;"></i> Parking,Changing Room,Drinks,Washrooms</p>
        <a href="#" class="btn btn-primary">Book</a>
        <div class="star-container">
        <i class="fa-solid fa-star" style="color: gold;"></i>
        <i class="fa-solid fa-star" style="color:gold ;"></i>
        <i class="fa-solid fa-star" style="color:gold ;"></i>
        <i class="fa-solid fa-star" style="color:gold ;"></i>
        <i class="fa-regular fa-star"></i>
        </div>
    </div>
</div>

<div class="card" style="width: 18rem;">
    <img src="turf4.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Fifa</h5>
        <p class="card-text"> <i class="fa-solid fa-thumbs-up" style="color: #4c77c2;"></i> Parking,Changing Room,Washrooms</p>
        <a href="#" class="btn btn-primary">Book</a>
        <div class="star-container">
        <i class="fa-solid fa-star" style="color: gold;"></i>
        <i class="fa-solid fa-star" style="color:gold ;"></i>
        <i class="fa-solid fa-star" style="color:gold ;"></i>
        <i class="fa-solid fa-star" style="color:gold ;"></i>
        <i class="fa-solid fa-star" style="color:gold ;"></i>
        </div>
    </div>
</div>

<div class="card" style="width: 18rem;">
    <img src="turf5.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Crazy Town</h5>
        <p class="card-text"> <i class="fa-solid fa-thumbs-up" style="color: #4c77c2;"></i> Parking,Changing Room,Washrooms</p>
        <a href="#" class="btn btn-primary">Book</a>
        <div class="star-container">
        <i class="fa-solid fa-star" style="color: gold;"></i>
        <i class="fa-solid fa-star" style="color:gold ;"></i>
        <i class="fa-solid fa-star" style="color:gold ;"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        </div>

    </div>
</div>
</div>
<!--card carousel end-->

<div class="banner-containerw">
  <img src="Screenshot 2023-12-03 231331.png" style="width:100%; height:240px;">
  </div>


  




    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <footer id="footer">

    

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>FitPlay.<span>.</span></h3>
            <p>
             Kolhapur <br>
             Maharastra<br>
             <br><br>
              <strong>Phone:</strong> +91 9284008321<br>
              <strong>Email:</strong> thefitplay@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
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

</body>

</html>