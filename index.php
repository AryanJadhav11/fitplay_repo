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
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>FITPLAY</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
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
    html,body{
      overflow-x:hidden;
    }
    .pro
    {
      width:4px;
    }

  </style>

</head>

<body>

  <!-- ======= Top Bar ======= -->
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

      <h1 class="logo"><a href="index.html">Fit<span style="color: #113cbc;">Play.</span></a></h1>
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
    session_start();
    if (isset($_SESSION['user_data'])) {
        // If the user is logged in, display username and "View Profile"
        $userName = $_SESSION['user_data'][2]; // Assuming username is at index 2
        $userInitials = getInitials($userName); // Replace getInitials with your actual function

        echo '<a href="#"><span>';
        echo '<div class="avatar">' . $userInitials . '</div>';
        echo '<ul><li class="pro"><a href="user_profile.php">Profile</a></li></ul>';
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
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>FitPlay</span></h1>
      <h2>Where Fitness Meets Convenience: Turf and Gym Booking Made Easy on FitPlay</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Explore Turfs</a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADb0lEQVR4nO2YX2iNYRzHP5sdKZJxJi78aRhZxO2UG+1CCltsjVoU+RO1tJLQ3MmNi10scbGluNuQ3IhFSpkLHQkX8p+wjYuFdtiOnvq9eno97/P+Pcc5db71q23vu9/zfM77/H7f33mhrLLKKstDU4D5wExKTJXAZuAC8AaYAHISP4AHwEmgLkLuacBOoBd4CowAP4FXwG3gKLA0CYgtwBNt47b4DfQBCwPkTckmPwXIOwlcBhZHAVAL9QQEcMdXoNGSexkwFCHvd2B7GIipwM2IEE78AvYacq8GhmPknQQ6g4KcjwmhL7o1QYiclrfZD6ItIQgVd4DpCUPkJMaARba6eJHQQveAGXmCyEmoxmJUe56exJc8QOSkS9aaQAYSSH43IEQWOAAclJ+jrnfE5NZjBYJQHW2btnZzDJhbbpB5MSGeaSPLKguEOg6tct9KoCYmzFs3yJqYIGqEUVriA6HGEaV64DPwOCZMVkaov6qPATEuJqp0xeOeCWkmSitco0kmBkzWDZKOATKq5XnuAbFbrqvB8qPhnqgwH9xHq0IedVSnnSt5zhmu7ZFraop9b8kTBUY1mH/UG+OpqDFeaRbQL5t4pxV2rRSmX55MSJjjJpCNMeuk0dXO0Z7E6xC5MiFgVIc06r7PIsoDTsg3RBXH5G9O4Z0BlkvxLwA6ZKwP+8FkAsBcx6J12sbckfWYOuMY2kvghgUm7bGG2uNafNThA5GWL0ZD2kKtEUE2yP+fCgnTSUD1WCAyHgv1RwC5JlN3GJiL0mUDqUJa6bgGUeOCcOK0XN8EPIwA06/BdFlg5gTdvAmm3gdiWGYmXbsi1IwO0yn+477nLAlo0ANCTbnIp6Vqa7b83mSAGZFO1uYBqr5GODD7XK+dVBxOAqTPAqHXjX6eDxlA/FrqgAazQ+ugqn4SUUorZi8IJx6JIaqj+S1ESzXBrAdakoLQYfaL4XlB5GSyVW8QlRqAbtcx0WGaLDCVFEDVluJ3npYu94Z15/aCqS0ESIsPhMk0mwxPxgumiwKpymWAtrrRj1K3oWYcGPUyb9Rros2nVM1ckjf0tuLXTbPBowE4MEWhdEDTrJDWrB+lqxSRBmOYZuAhsBDqjWCa7Uma3f80zaJVSkyzLoRpFr2qQ5pm0crPNEtGVRbTLDmlDKZZVlllUXj9ARBuyo+sXOcOAAAAAElFTkSuQmCC" style="margin-bottom: 8px;">
              <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
              <h4 class="title"><a href="">Welcome to FitPlay!</a></h4>
              <p class="description">Embark on your fitness journey with FitPlay, your ultimate destination for convenient turf and gym bookings. Whether you're a solo enthusiast or part of a team, we've got the perfect space for your workouts and activities. Join us in redefining the way you experience fitness.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAAsTAAALEwEAmpwYAAAChklEQVR4nO2YTYhOYRTHfyPGjGIWzDSJwotCqVlqZmjKZlKaMGFDlHzszCghmmFjMVZMMWnKwsbHxsdm5CMrYmMzxIbSyFhgSKFBp85Tp7d73Xs09963vP86dZ/3Of/3/N/nfZ5zznOhiv8Ya4FB4EqCXQQ2R/C36FwSX2K0e8VtB34Bvx3WZ/gnndxJYKtH4AslTgBPE2xcfb8DdUA98EM/G0/Bn1Df5x6Bk0qSlUjCNrMSK9TCWOaScMqsYmpE/W0WjUAPUAK6jf8qtTCWuST0Gf8pEdgMjOr8vUoQ2AE8AvaUiQtboHCBw/osp3rMzJ0HaipB4ErgQ1laCOJCvit8D642Iq04wVLgK/AWmFXkIZmv+9GKC2hQceQlMCTagZh5ScgngAfADaDLzC03AXeliDWgvhIzNZ5ElKOPwDpgGnA3Yn6/cqcDn52lTuyxR2CbKUHWjgKdZvzM7M1PKl6wA/jpECc/qBUnFgIHgNNqB7XOHjFfPBvYbcZyYDB7scfw40xiLGAKUb6pu8vSTOGoCsxjBeupIIEbzHgRcFyf3wBXgZ2aNwsTOBM4AxzW8fWINPIKaMlLYH9CaZoHHAKuAe+Nr+TJZVmLmwO81oDvUvjL6h4zIkeyFjhkgu1z8C4YnhSATLDGXEVHYrqaOHQYgVIqM8Ed03UscXI7jcD1Genjmwa4/A/cQeVKAzGXjBDuIzedvFrT8dwiQ1wybws86DJ/r+v1hhcl3Ye9Tt5t0/PlVgI3aVNa8xefGdrghtU7m5e4kkk3w9psNmkXvhc4B9zXyhHEjalPLpDb20tHOz9aRCMrV9CHMYK+6KuSIb3UyykuDK16V5G7x0ZgsbPCVEHW+APHk2QHr4Q3fQAAAABJRU5ErkJggg==" style="margin-bottom: 8px;">
              <!-- <div class="icon"><i class="bx bx-file"></i></div> -->
              <h4 class="title"><a href=""> Why Choose FitPlay?</a></h4>
              <p class="description"> Effortlessly reserve turf and gym spaces with just a few clicks. Enjoy the freedom to plan your sessions at your convenience.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAiCAYAAAA6RwvCAAAACXBIWXMAAAsTAAALEwEAmpwYAAACVklEQVR4nO2WTUgVURTHf4Ja0spdUSAtKtxI1CJchJsWUetIqlURURmkfUAJQggVLgqKkoo+oEJqG+3TKFoUfSwehtgmzCjThZjaookD/4HTMB/vvXnpo/rDWcy55575zb3nnjsQr1VAN/ACGAd+AJ+AZ8BpoInitAQYAgLlsLklqQ/4AtwEOoF9wDHgDvAVmAcuAg0ZedYL4igwAIymBd8HJp09BmpS4uuBI8AU8BLYCmxJsIMCadYKf46Mt/p3bQI6gBlNsqX0qgPOxHz9WmBEc7IsBIkbO+GTngW+A09jQJo1YUPM6qzRKuYBuRsmWw7MAieBaykgGxO2Klz+NLsBDGaBnAK+AcuANqC9RJA6naxitigV5IkKNklZIKbrlQCxrzmeE6RDMaNl2IUwifWEvSkvaQJ+qqcsTYhpF4g1sLKVtSKmXcA08FonJarDAnml3lKK9YZJrG3fJlvrgLeCiaq/EjXSrbZtHTNLtjUrI75aYKwSIFYDc2rb5Wh/DojfQNAFZneHte1StBqYUMJz7g7plG+3890qBqRBhTOSUIxJEAWdKEu4x41tls//LmS2+FDbNTCptm0dM0612o5wJYJKg9h17gPGdfdY7exU0+pPKcxLwA5Zj3yHnG+gXJBggaxokPdAo7Pn+lPzPos74J63ydfifL15QQqRuCFtmdcfrZGg2kAmgPPOPgJvIj6Le+Se78l31fkG84LMRi6paV0J3mdxH9zzsHzvnG/sr9mawn8QqrRGgmrprME/C9K6SCCXiVEX8AB4uEB2BVgRB7Jo+gVuzG8aNJmGSwAAAABJRU5ErkJggg==" style="margin-bottom: 8px;">
              <!-- <div class="icon"><i class="bx bx-tachometer"></i></div> -->
              <h4 class="title"><a href="">Your Fitness, Your Schedule</a></h4>
              <p class="description">At FitPlay, we understand that life is busy. That's why we offer flexible scheduling to fit your lifestyle. Choose from various membership options, plan your sessions at your convenience, and enjoy the freedom to make fitness a seamless part of your routine. Join FitPlay and take control of your fitness journey.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABGklEQVR4nL3XP0vCQRjA8S+GgSQ0OuSik4MN4drgC4iIIErIljaH3oZDYINLLyDCwaU30NIiIhL0Z6jJtSGoxiRDuOA47gmLe54vPOvvw/3g7nc/+H81YCbMDoqdC+gdkNFCV4A3Ad5FsWMBvddc7byBAO+h2LqAPmivtivA+5poDniNoI/aqz0SVttAuZsI+gQsaaIV4CsCH6JcJ4J+AAduG/mzmQpdBl5+OZvD2UoFN/6A9kjY9YLo/PxeSwmXgHIwlxG4hUHPATrU3lY/b8BHP4ENDGoF8ClGXXnoBMhboNng9rGNUXUP7WNY26HvQNESHjv4xBItuC/UyGLP+jWBqbvMm3YBnFmjGeAWWLWGa9r/RFLVlE/7BoxFkaXY1liWAAAAAElFTkSuQmCC" style="margin-bottom: 8px;">
              <!-- <div class="icon"><i class="bx bx-world"></i></div> -->
              <h4 class="title"><a href="">Beyond the Ordinary</a></h4>
              <p class="description">Experience fitness like never before with FitPlay's exclusive events and promotions. From workshops with fitness experts to member-only discounts, we go beyond the ordinary. Stay updated on exciting opportunities that enhance your fitness journey. Join FitPlay and unlock a world of extraordinary experiences</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3>Find Out More <span>About Us</span></h3>
          <p>Elevate Your Fitness Experience with FitPlay</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="gym1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>At FitPlay, we believe that fitness is not just a routine; it's a lifestyle. Our platform is more than a booking service—it's a community where enthusiasts, athletes, and wellness seekers come together to elevate their fitness journey.</h3>
            
            <ul>
              <li>
                <i class="bx "><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABB0lEQVR4nO3Wr0uDQQDH4Qe0GQXDwCAGiyhiMihYbIKI/8KqTRDMgqIGo6DVtGIwmExisxhsJpsKBhHBH5ODDYZs495xt7fsCx8uPnBcOAaL2waOsKiPq+IX9ca50g90Gh8NtFktNzqCh39o6Do3fNoGDW3nfkz1Nn1iLBc6jtcO8FkudBg3HdDQbC54twua7VEt46cLfIuTlo6x19ImKkXRUTx1QWN7w1QR+DAB2mw/Fh3Ce0I4XHvUJhKioUdMxsDzieHQeVnwVVlwtSx4rSz4MgaeywDXYuBKYvQZMyJ3nxDeikXD1hPCB0XgsJ2W32SvfWOhKBy2hAu8FAS/cIfVXtDBpNwfOCxgRXijKlAAAAAASUVORK5CYII="></i>
                <div>
                  <h5>Convenience: </h5>
                  <p>Booking turf and gym spaces has never been this easy. With FitPlay, you have the flexibility to schedule your sessions at your convenience.</p>
                </div>
              </li>
              <li>
                <i class="bx "><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAACFklEQVR4nLWXS0hWQRiGn5KS7LIw0xZSaWJtUgghwk0EUVS0U3QpQZeFSYtcRdEuIYIWLtpVuBJs0aKLuPH/NxFdFpJRICISUkEEpUapycA7cDicy8yc/he+xcz/zftw5pv5zvnBT9uAbuAMsElxFugCtlIh1QKfgH+Krwo7/qic/6YWoAcoRyBpUVbu/qLQAWDVARgPs6Y/FFoNLAdAbSzLw1ttBaA2jIeXdgGlANBMbFySl5M2Am8DoO+AzcB0bP41sMEF3BoAXQE6gPMpv7e4gHcAvz3Bd4DdwPeUQ7bdbbPhcYLBYkZda4DRlN/HXKEk1HgWaABeJBifAM5l7MYbV+i+FIMh3cuRyNxDlWY+pxR7XMD1wN8Ug0c6uaamX4CdwHAO1HjVuT71rQyjZ3pLNQGdDi31pivU6lqG2SugMeHOxsN4eKsxx/SXwzUzHkH6ENBMbLyngA4A48APD6DJfa61hVStXjvgAL2i3C1FoUd0HSZldkNt8TNwWzEHLACDypnUmmNFwGORp5lQc7FqV1g1K8fmPw2Ftibc0VV91M1q/FMvgAfAWizXjA+FgO871PSedmElo9N5qR5YyoGu6eTezcj5A+z1AV93eNon2ua8q2bar7MOAhcicVEnN2p4HDgcm/sGXI6tNWelkI5GvkymIt9RLzVn6nySCumSIH2RuV7NXa0U1OqU/qxZVQGnfV3WAVcxjeISl1EPAAAAAElFTkSuQmCC"></i>
                <div>
                  <h5>Quality:</h5>
                  <p>We partner with top-notch turf and gym facilities to ensure that you have access to the best spaces equipped with the latest amenities.</p>
                </div>
              </li>
              
            </ul>
            <p>
              Join Us on Your Fitness Journey:
              Whether you're a seasoned athlete or just starting your fitness adventure, FitPlay invites you to join our community. Together, let's redefine what it means to lead an active and fulfilling life. Elevate your fitness experience with FitPlay—where passion meets purpose.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

     

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Turfs Registered</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Gyms Registered</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <h3>Check our <span>Services</span></h3>
          <p>
            Welcome to our fitness hub! Discover the perfect balance of play and workout with our online turf and gym booking platform. Seamlessly reserve your turf for sports showdowns, connect directly with gym managers via WhatsApp, and explore vibrant gym spaces through virtual tours.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACkklEQVR4nO1XTUscQRB9YCQH71F/QYwsaCCyYoQdcjX/wVz3vidPIkogp5xz8ewhOcToHxAhBwn4Azzm4EdyiBsIiE4oeA1Fp2eme2d2ZnfTD4qd6a7qqjdbXd0FRERERIwb0gkRTByRcUU68UTSMZH/j4iNHsflNwsJgEv+ltHp5fgqRcQ47+UE4ROgj25S4GtgIrZTVxCusecAjgHcAvgF4AjAcoFN4uErmEiS8+X0uEtnAcBvR17L2NOAdVw6wUQuC1IlydH5xDUOAMxSDjj2MWAdl06tRK64xpwam1fr1kokKZFahsh8AZFaUit0s0vwK47UmqPYqbVCm6Fv9tDyK4G1+Cwbuu/Y7H212VuKeIivtKoDsQs/SKn9wtIrcghgydO2O+wDsau++jDRoq+hHoiCRwD2AHwvcVeyRdbaBTBV4LvSqvWuQgK2vK3zQLymzmtUB1krZSWr7UD8SZ21Comsc83rqonkpdaOR4qcOAI69bDbrutANJtdNuaPgqBs5One8ANVvtnLlN8iIo2U30EOxLJEuk12iAaPPYiIThaSujrEjsNBW3V/e7Q/dwR5zjnRAW3agb7SKquWdmBuvqtsb+8A3GeU5jXO3VF31eMa3wmtWrYUNTsdS2cawDfavqfODICvFHkG51LqTns2Vh3HOfJPhcyaaFt/uwsv1FV8i3YXKuh9td6+InfBMbEB13Bd6TVMPL6lfiA8A/AHwAOAVxzbVD2I6U1kDNR5oI3YjgwOGegHvi+q4N9QDCmZA3Vl7DNGCH0G9YTvZ1Y66TSTOVDXkBsZpBmVxOwV8Nn38G0MvgFGInXBtLwbAF6q2+ygeo1h11HXd0roNYYp9to3lG2rrwjVi4iIiIATfwFd3wgBvqlLngAAAABJRU5ErkJggg==">
              <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
              <h4><a href="">Book Turfs as per your pace</a></h4>
              <p>Unleash your love for sports with our seamless online turf booking system. Choose your preferred time slots, view real-time availability, and secure your turf without the hassle. Whether it's a soccer match with friends or a cricket showdown, we've got your playing field ready.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB5UlEQVR4nO2ZMUvDQBiGn4K0FhXq0KA/TtwqbRcXcRDB0V/RIoKbDg62arf+g1roVDc3cWjRwaVy8AWO0KS9JHh3JQ8E2qaB98ldLvfdQUFBgS8EQB+YAx2gIr/X5PsHMAGaQMlm0F3gAfgFBhI8RH0eAwvteBKZbaAXOde2JaECDSNh3jSZRuTcYoXM1JZIMyaoLnNhIPNpS+Q0JmRama4tkT0JnJdMDYvUgVGCjBqRDuW/ZzH/6YuIdTZKJsihm3VwhKwyMxwii0wPx0jzzEyAAxwhkJekacs0IlMbZ1rhOkXLOMGyu3+VomWskhS0ZSBTd1UieqeDFTLPPkisc803nkiE1GOuvcUjCWJGs1egimcSeomsSttjYIsUqIuOgBNgx5JEZqrSjGGA0ZrDnlMSirsUY7hzEoqfHIdLq2/kF4OpgrMSpvOelqsSGMxIw7rgPOEcvspMXJIIpIgx7WZNV7pTdI5z6Wvhg6wb6SFV4e9V4RMyWxLSS5luTEjvZMrAY0xI756Z8ibI7MsicUWW8rN2M7WlYIUbWZLMS0Zt8ljhSwKYykQ3M8NDFWZWeNdCrCOTNAMYatvM/047EiZJZrxkSj+QLeh7qbetURKZqXSzrrZnV5FNlrkIOvG+KCgoYCV/JCsAeXhkfUQAAAAASUVORK5CYII=">
              <!-- <div class="icon"><i class="bx bx-file"></i></div> -->
              <h4><a href="">Gym Reservations at Your Fingertips</a></h4>
              <p>Elevate your fitness journey with our gym booking feature. Browse through a curated list of fitness centers, check out their facilities, and reserve your workout spot with just a few clicks. Your path to a healthier lifestyle starts here.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADkklEQVR4nO2aWUhUURjHf6mZ7UVIPbQXBQlBEGUUPZT10Eu0ZxZFUFBEFLRvFNH61EYEvlkRBdEO0UJ7tEdF0KKSZVSkbRZt6sSB/5XDNM6Mc9VzBf/wwcw95/z9Ps+533YGGtGIQCMJGAQsA3YAhyQ7gWlAawKOZsBS4D0QiiIlQDYBRVfgmaXsc2A3sBCYCkyWkZc0XgGc0PMmBASdgAIp+BjIijF/TdgOXQDaEgAckUI3gTZxzDc70AOYB7zT2pM4Rl+gEvgOdE5gfTfgo4yJtZN1ilVSItcHx0px7MchTkmJ8T44MsRRiEM8kRL9fHC0FMdfxSAneColzFlPFCmWB0ujAe9IshzGX312ggcyZKAPjh7iKMIhDkuJST44RovjOg6xTkps8cGxWhwmwXSGCVLirA+Oq7Xgwn1jlpQoTTD56wj8Ecc4HOKOlJib4HrjpTaI4ygOUSQlevrgGCqOazjEWSkx0wfH3CDkWvOlxCtgRQLr1wPF4sjBIdKA21LEVIg1gXEOn7X2MtAUx2gN/FL52raGtUxIxVUqAcFFKTWnBmuWa00eAUKOdbziOSK9gddaYxLGfGAEAUCK1UXJixEc+1jlrS1vgeYEAIMtpaIZfF9zTgPtwgLrbAKCUAxDpmg8X5Whhxl6boxsEIacqsYpmC7lB40NoQEYUqDx7hHGNmnsAI7R3zIkvZo5vzQe6aXuApQDZS6DY6bSFM8Q41oXqdXTCmihz2Ua7xWBI8tnSeALw5R+l8fowIdLdhSXvIR6QiowHbhbQ+XDG9c2ruj5HzmCOo0nHVQExbr/iFdGWtz3wsbM8dpoxZlagen+LQa+1JIB9h2K15CbWM2cUr1rvjuQJps9X8sG2LLL+luHosw75+cOpZWVOtSlmGiP7la8FmwkuWW9O5lqVsR1H7m3HowIySWby1PUQy6MMneP8rFKff+kdyk91gVOqJ6kxOofm/vIh9XMq7CCqpd8GvmhO8v/munb6tEIT4otY0wAzY3yz9yqeSYvO27N+w0ssA256cAQI1+BMZYew60Y48mZCF4sQ3WQd9yqUOrIkJCyBPNjg6SwDGIfsFm7FQnttd40NKpS6lAA5AYwgPgx1nLVgcAoq4NZCRzTs+QYdywvtcb8MCEwMDFls5Ute85gu15wL6M2TYy1VtZxN8rRc4p0KfoijqN4MKx8DizMTpiU5hHwDfgJvFFFaSJ9Ff4BRw5ElqN712oAAAAASUVORK5CYII=">
              <!-- <div class="icon"><i class="bx bx-tachometer"></i></div> -->
              <h4><a href="">Direct Communication with Gym Managers</a></h4>
              <p>Break down communication barriers! Connect with gym managers directly via WhatsApp to address queries, discuss special requirements, or simply get insider insights about the gym. Personalized interactions for a more enriching fitness experience.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADwklEQVR4nO2Ya4hPaRzHP4NheYGZ3U3u5ZLsrrKh5LatklqXZJdc1u6YUC5JuRXviBn2hTYi3u2+WCkvkEwuu+SaS267KxNr949ZCeNODP310/fo53Hc5tacnG+dOs/3/M7z/J5zftcHUqRIkSJFihSJQUNgGfA/UAYUi0scioFscBmXOJRJ+T5AP90bV+vIqaJcmZS3TfSvjo30BrYD5cBjoBSYA+TGyA4CDkruPrAfGBwj1wBYCGSk4HVgJdD0LaZVVNlNfCWlosUuuEnXBrIjgSd69hC4pfunwKhAdp2bp9zd28brS6ahNlNWHc6+XgtscH9gslOwmbhGwFXxpuRHkl8j7rwzoR5O8enivgYeifuRGsC3wBSgo+M6a0H7+k3EDRd3E2gcmFCermgjyyX7b+Afm8SXUINooi85ENipBX92zxeJ2wp8A5wCHgCngamBwtsl+1uwxjzxV2pyIz0Dp1sd2Otq8SdkIhkXdbJy7AhHYj6EoVC8+WSNoY2czRb/RwsecmYUmUtWX9ZQD/jJOX+08QPOlzymib9HLaG5i0jmP4aZGlcEYbmF22C3IICEvlAs/kx1+MEMoJfGFgYPA8eUkCLkugi1OMb0ujjZvo5vJ26qxuZD+W6tM+It0iG/srwxW1HwrbAXxgAXNdEu96xEXEabHA9sc8pZnomwQ9xZ4AeF6YzLD/6PXhO/Dxjt/lKF+3P5Lof9B4x7U7VgNr7RKWZf/0v3vD3wd0yGNYdeEMzVEvgzRvYc0CGmArgbyFXob3kMAI47mS0K5S/hY5UTJnBDUcMcNER9ZeYilRGznJmEMBP4XkFhlZKbzysebYH5qhAsfH/xGjnTqcD55UngE//wd5d1vV3XVXSVrlnp/tzMJrg6pzXJQVtVD1n5K3s1mETyMFm677bBHQ0sgiQNedLdfOaF4yRxI/muQGWPBhYNkoZC6f4HSi5R69iK5KC1qmPTfSwKXbtcJv6Muo/PpWtWVUSOd5pTruIseI8Dg9pEDjBROkYJ8ZXsbs3+ZlcCmNCIOrKhHOkSfeysukh/QPEKClzRaNdfqqV8i1tb6KRGzNd4mffp5RvpMOByUMwdBZYCw3yNU434VHMXqWj1a19Ww1Wp05Nc9d2/ArdjqtlS/eIVaqiGqp/vpE4yT4cO0cFDGz3rIYVn6t1NmisbXLbmL9Ih7uysUrBqdgiwRLnnfszCVb3uqdxYIuXfqYmqKhqoX/kOmKtDhxKZhFWml1SIVugqF3deMiV6Z67m6K45U6RIkSJFihQfPJ4BqaBXSZhqtzAAAAAASUVORK5CYII=">
              <!-- <div class="icon"><i class="bx bx-world"></i></div> -->
              <h4><a href="">Virtual Gym Tours </a></h4>
              <p>See before you sweat! Explore our extensive collection of gym overview images to get a sneak peek into the facilities offered. From state-of-the-art equipment to vibrant workout spaces, make informed decisions about your fitness destination.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACuElEQVR4nO2YO2gVQRSGP98YDaKdWitqLIVUFj4KFZ+gNmrsxRCjhWChdrEzTTofELUNdhYWonVIYa4iUVES1EYIxAdJiFk58G+YjHvZNXfXOxv3h8PdPXfmzH7MOTOzC9l1ABgDItmofHmp6PhzGnUGcQcrS/w5xcHr3Ycev3wgJ4DPCdPrmz9Q3hYrrZ0963ESlAUiJJAI+JQEEpUQJKpAKG4mGp3BwlOlAqGaERZHjVQKTVFJ7Q81+4EqkGpG+E9r5M5iAPkCrNZ7Q6lBehT7VtlBtin2VmC2rCDPvfgvygrS4cU/HzLIO2AQeAoMAP1An2qixYvfIn+f2g2o36DiNBXkCbCextQKPG42SAS8BdoWCLEFeB1CakWyCX3g+xsdAsZDqZHIsVnVwNIUgCXAVeBXDmNGRYDElvgZ09GxHMeKigKxWdmUArIxZXMcBrpUd2tkbfIN/yuQGtlUS+g7BVxISc1lwEW1LRSk14u5A7ivX1e9CRB7ya59DsyRIkAOK9ZK4DowKf+k7s2P2rn9bCayaBVwSted6vsRWJEnyLQ2t/Y6uRznf7vaTTs+S5k02Wr3QH2uqU+coqfzBBkCbgMzKe1m1G5I91bEWXRD7cedDbhbvkd5gizU/PpJ0hmtdFYXexz/TsV4HwKIpVmsm8B2D2K3asxAznn/tSrG95BArIjjhzrrnMW+ym+LBXVAJkJKLdv4Hjr+u8CIru+p2H3FqfUmBJBL3sN1AD+d/585y7avK2rTHwJILWH53QV8AF4C6+pAWJ9XinEyBJBIxw5fG4DN1FeX+o7kvSE2YlM6dmTVfm2otpId9f8cCwCmM2WXX66ZmPa+m83TwQBgItVMt1aktTK7vuzURNaXuKbITrF2AEwDtZqwl7OgZUVrB0A7O9mx4wfwTR8o7MBoq9O8wo71G760jI/Tl19LAAAAAElFTkSuQmCC">
              <!-- <div class="icon"><i class="bx bx-slideshow"></i></div> -->
              <h4><a href="">Flexible Booking Options</a></h4>
              <p>Life can be unpredictable, but your fitness routine doesn't have to be. Enjoy the flexibility of booking and managing your turf and gym sessions at your convenience. Reschedule, cancel, or book on the go - we've got you covered.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACaklEQVR4nO2Zv2sUQRSAPw0iVtHgryOnlQQtEoOKiKlECzVICIgogoF0tmrrP6BBEFEJWGkRRAKGYATtrEIQETFISBcF8UxiUlmY8+TBWxjC/di5vNm9AT94ze682fftzcztzsJ/NswMMI0h/cA3oFInVoB3wBCwyei6Sd9mfG0gsT6eGskEFVmo0WYPcA1Y1nbDrShyTmVE4myDtoN68c+tKOKDDKk5LeAoEYsId7SAW0Qu0q8FTMYu0g6s6ZLcFrOI8F6LOELkIiNaxI3YRS5oEROxi7TrPJE/yM0xiwgftJBeIhe55/mMtj4SNtLHKwuRgRYQmbMQ6QDKOYvcxoiPOYqUgf1WIvdzFHmDIcljfaM4DfQBS3VE5NxJ4EzKPq9YiuwE/qa4qEigS/ViFZFFZxnvS9HfL2AbxnxKeeFj2v4wUHLyl513m15HtF48IgAPUg4F9653O/ndnhIV4HgIkYseE9S9+y7yK/1M2YfFa3ZVdqWcJ7VkejwkKsBNAjLruXSWdEgdAr575P0B9oYUeegpksiUPHNeEphLTYg0EwOhRXZ7zpNm4gewhQz4ElhkhIx4HFikJyuRywElZsiQQkCR62RMsi9sGb+BHVmLjBpLlIG75MBVLeAJkVMI/WCXJfM6JLYTOaP6q8hjS9ScV5G3RE6bswzL162DwFYi5QSwargMT+cpc8pQZA0o5iXyzPnWWNBCpvTYWI2cMWdzupgyJzjJK2ync2yfsxlXjSU9X6ySI0M1F1brFLVimBOccS1gSouReK3HXhjmBKerxoabDJ8DhjlkgcyP5zpkJOSuNiqomRz+AUVayH5AaLVrAAAAAElFTkSuQmCC">
              <!-- <div class="icon"><i class="bx bx-arch"></i></div> -->
              <h4><a href="">Quality Gear for Peak Performance</a></h4>
              <p>Elevate your fitness game with our curated collection of top-notch gym and sports equipment. From cutting-edge workout gear to high-performance sports equipment, we've got everything you need to reach your peak potential.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="sankya1.jpg" class="testimonial-img" alt="">
                <h3>Sanskar</h3>
                <h4>GC Player</h4>
                <p>
                
                  "Absolutely love this platform! The turf booking process is a breeze, and the direct contact with gym managers on WhatsApp adds a personal touch. The virtual gym tours helped me choose the perfect fitness spot. Plus, the shop has fantastic gear—I got my hands on top-quality equipment at an unbeatable price. Five stars all the way!"
                 
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="parth.jpg" class="testimonial-img" alt="">
                <h3>Parth Chavan</h3>
                <h4>GC & Zonal player</h4>
                <p>
                 
                  "Such a game-changer for my fitness routine! Booking my favorite turf is quick and easy. Having direct communication with gym managers makes everything smoother. The gym equipment shop is a gem—I found exactly what I needed, and the personalized recommendations were spot on. Great experience, highly recommend!"
                  
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="anuj.jpg" class="testimonial-img" alt="">
                <h3>Anuj Samang</h3>
                <h4>GC Player</h4>
                <p>
                  
                  "I'm impressed with the convenience this platform offers. Turf booking is seamless, and being able to chat with gym managers on WhatsApp is a fantastic feature. The virtual gym tours gave me a real feel for each facility. As for the equipment shop, it's a one-stop destination for quality gear. The exclusive discounts are the icing on the cake. Thumbs up!"
                 
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="adya.jpg" class="testimonial-img" alt="">
                <h3>Aditya Deshmukh</h3>
                <h4>State Levek Player</h4>
                <p>
                 
                  "Exceptional service all around! Booking a turf for my soccer matches has never been easier. The direct communication with gym managers provides a level of personalization you don't find everywhere. I recently purchased gym equipment from their shop, and the quality surpassed my expectations. The convenience of online shopping and the exclusive discounts make this platform my go-to for all things fitness. Highly recommended!"
                  
                </p>
              </div>
            </div><!-- End testimonial item -->

            <!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Equipment</h2>
          <h3>Check out Our <span>Items From Shop</span></h3>
          <p>Elevate Your Game, Sculpt Your Strength: Your Premier Destination for Football and Gym Equipment.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Our Equipment</li>
              
              
              
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="football1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Adidas Soccer Ball</h4>
             
              <a href="portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="stud1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Nike Football Studs ( CR7 edition )</h4>
              <p>Web</p>
              <a href="portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="jersey1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Ronaldo Juventus Jersey</h4>
              
              <a href="portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="neymarjersey.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Neymar PSG Jersey</h4>
              
              <a href="portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="stocking1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Nike Stockings</h4>
              
              <a href="portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="kneepad1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Knee Pads</h4>
             
              <a href="portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="supporter.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Supporter For Men</h4>
              <p>Card</p>
              <a href="portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="dumbell1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Dumbells</h4>
             
              <a href="portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="ezbar1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Ez Bars</h4>
            
              <a href="portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <h3>Our Hardworking <span>Team</span></h3>
          <p>At the heart of our fitness community is a dedicated team passionate about making your experience exceptional. Get to know the faces behind the scenes, committed to bringing you top-notch service and support.</p> 
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

      <div class="container" data-aos="fade-up">

        <!--  -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
          <p>Shape Our Excellence: Your Voice Matters in Building a Better Fitness Experience!</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">

              <!-- <li>
                <div data-bs-toggle="collapse" cla  ss="collapsed question" href="#faq1">How do I book a turf for a specific time slot? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    To book a turf, simply navigate to the "Turf Booking" section on our platform. Select your preferred date and time slot, and follow the easy steps to confirm your booking.
                  </p>
                </div>
              </li> -->

              <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-6867c4a8-9721-42a9-bdec-82d31c9f7970" data-elfsight-app-lazy></div>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">How do I book a turf for a specific time slot? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    To book a turf, simply navigate to the "Turf Booking" section on our platform. Select your preferred date and time slot, and follow the easy steps to confirm your booking.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">What types of gym equipment are available in your store? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Our store offers a diverse range of gym equipment, including weights, resistance bands, yoga mats, and more. Explore our collection for a comprehensive selection of premium fitness essentials.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Is there a return policy for purchased gym equipment? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Yes, we have a return policy in place. If you are unsatisfied with your purchased gym equipment, please refer to our return policy page for details on how to initiate a return or exchange.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Are there any exclusive discounts available for frequent users of the platform? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Absolutely! We value your loyalty. Keep an eye on our platform for exclusive promotions and discounts, specially curated for our frequent users. Save on your favorite services and equipment as a token of our appreciation.
                  </p>
                </div>
              </li>

              <!-- <li>
                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </p>
                </div>
              </li>

            </ul> -->
          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>Our dedicated team is here to ensure you have a seamless experience with our platform. Whether you have questions about turf bookings, gym facilities, equipment purchases, or simply want to share your thoughts, we're ready to assist.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjklEQVR4nO2ZPWtUQRSGH79WiGTjRxCN1mrELnYSMa0grkrExmZbQRAS01pItFBBCWIaC0sDQtqsBvwFSWEwNsomFmJUNOrGwrgycAKX4OWemTt35iJ54cDC3nf2PDtz5uvChv5/HQZGgOfAa+CHhPncAK4DhyixjgMvgLYyDGgfJdI2YAz4YwGxFsbzANgaG2IXMO0A8K/e2RmzJ2yGUla8BCoxQMY8QqzF/RiF7VITmprpCwnic0itj0YoiCMFQrQlgqwzI8pkFoALQKdEDZhXeodDgDSUELtTpusFhX8qBMgbRSKmJ9I0qPDPhwBZViRihlKaqgr/cgiQVk6QLoW/FQLkvSIRU9hpuqisscI1rRzjprDXaw+wqNx7Fa57FtPvoNREVXpCA9EG7hSPAWeUyeSJ0yFAdgC/CoRoAR0E0rMCQZ4SUOcLBDkb+lDVLABiUdoOqqECQK4RQWZK/eoR4pus+lF01yPIbSKqB/jpAeI7sI/IuukB5AYlUCfwIQfER6m3UuhqDpArlEgVYM4B4lWIdWMT8DYjkVOJ5/st77rMswMJ/4kMf1Nysla/8h9NXkA/sQB5nPBtAWYVHpOTtR6JedTCsxf4rEhoCei2aHdUfCYn6zH/SczHLL2XFSCXLNvsFd8XYLuNsSbGGfxv8ycd25xx2R1PiMlsDF20P2WILeVYwYekDZObSlU5pa0CB3HXOc9njR7gN7CifSlUlx81N+55NZ6AeOjxLUDd+8MZ6pCFcs7TObyu/ZMPyJBa8Xg26JXwoS7JbVVyTdWwbUFF0IRmIppVXHnGVi1raTjquugEViVrsb4lX5qZpuwaT9s+mV3luxxniljRBDYnQU6WICnXMLlviLLpLxkELOMXeJGeAAAAAElFTkSuQmCC">
              <!-- <i class="bx bx-map"></i> -->
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACJklEQVR4nO3YTahNURQH8N/zma/kq4SIIhkoMpGSlDKiMDBAmZgayszA4E0NMXsiyQwlBlKKkpSUrzARwivk2/O2jvat43reO/e+c9493fa//vcO9t5r/ddeZ62z7iUhISEhoUMIXUJdE8hAtwSyFf01ENIuB3G0USeLcbsGokKL/IgdjSDWx++pOFMDcaEg72F51D4n+/iJQ7kudgA/aiA0DMPswqdFvWvwLN+1+jAlLm7E6xoIDk1svvS9+BzX/tp4B0vipkW4VQPxIfINNkdtk3Gsaf2fA2+bDpysQRA3sCBqWoibQ+wplMKsbr53KIjjmJR75F/9Z9+wRk7HbpZhA16OYQBfsT/67sHBEZrQiAbvYmk0OA/XxiCIJ1gdfU7HuQJnChl+hy3R8AT0VhjERcyKvlbgfsFzhR0MxLrJ0pxhD76UPGr0Yly0vw3vWzjfssOzTS+j5yUE0R9nvgzjcSQG1oqNthw/wMo/bpmLq6MIIqvBZTlbV9q007aAD9ieu8V26uZUriuuHWV2S32ud+NTgXPfYjttYF8J9SaUwAuYGUVlbfPpMHtf5CbubHI4UZIGoSQ+wqoocDYuD7HnOuZXNMsJFf3Q6Ynt+ldu1JgY1zZVMF0LJXMwts9G3ezErlxwhyv6n0CoiJdyb+gMM3C+Qn9ChXyMdZEPK/YldAl1WkAKRMqIjj8+IdWIzt90SBnR+dsNKSO6ICMJCQkJCcYavwFpBILbyX7yRgAAAABJRU5ErkJggg==">
              <!-- <i class="bx bx-envelope"></i> -->
              <h3>Email Us</h3>
              <p>thefitplay@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACDklEQVR4nO3ZO2sUURiH8Z8x3iIW4iXgrbLwC0RTKAhaBFEQYiERtIqgnZ1fQBDR1lpQUwQvhaIIYiVqsNA0ARWDnaKi8YYRJCMDE1iWbNw5k5k9G/aBt5tinj1nznnf/9Khw6JnC4Yxipf4jnc4i2Uipwv7cQczSBrUE2wUIUtwFG/nefmkribQKyL6MZZDIKmpdMutabXASpzH30CJJKv76G6VRB9eFRRIaupSKyROYXoBJZLsYBioSqAHVxdYIKmpx1VI9Bb4oJMma6psie14XbJEgmdlSuzBlwokprCrLIm9+FGBxD1sLUviAH6XLPAVJ5XIIP6ULHGj7PbkYIDE+6zPutnEsx9wRMnsC9hO6dm/qa7vetrg2VGsL1tiN37mlEhXYEWDVv4EnuMXXuCQCtgRcMRea2WjNxfpUr/JKXE5+9WjoSeg7TgnQq4sBonTAdspOvpyzhMjsX0Ts+PpRA6JB1guQi7mkEjvgVUipD9HUPAR20SaO43lWI0hkTKU85S6JUK6MZlTJMkGq6gYDJCYTQGXiohHgSJpHRdRtD8Ta7KRh+ECEkk2o0TBaEGRcZEwXlDksEj4VkDiuoiYDJT4hA0i4kygSOmRTcit/jAgPIuStdkt3YzE59j+oKxnXTZf/E/kmDZgNW7PI3FXG9GFC3O0LWkyvlkbMpBltNPZwLWz1S/UoYNq+AdAr5fqdIQXUAAAAABJRU5ErkJggg==">
              <h3>Call Us</h3>
              <p>+91 9284008321</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15287.28174189154!2d74.20619275!3d16.6858667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1700995442641!5m2!1sen!2sin"  frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email_id" id="email_id" placeholder="Your Email" required>
                </div>
              </div>
              <br>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="message" id="message" required></textarea>
              </div>
              <br>
              <div class="text-center"><button type="submit" onclick="SendMail()" style="background-color: cornflowerblue;">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <script type="text/javascript">
      function SendMail() {
    
        var params ={
        
        from_name: document.getElementById("name").value,
        email_id : document.getElementById("email_id").value,
        message : document.getElementById("message").value
        }
        
        emailjs.send("service_hd43k3q", "template_v6j5ky6", params).then(function (res) {
        alert ("Success!" + res.status);
        })
        }
       </script>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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
        Copyright <strong><span>FitPlay</span></strong>. All Rights Reserved
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
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="purecounter_vanilla.js"></script>
  <script src="aos.js"></script>
  <script src="bootstrap.bundle.min.js"></script>
  <script src="glightbox.min.js"></script>
  <script src="isotope.pkgd.min.js"></script>
  <script src="swiper-bundle.min.js"></script>
  <script src="noframework.waypoints.js"></script>
  <script src="validate.js"></script>
 
  <!-- Template Main JS File -->
  <script src="main.js"></script>

</body>

</html>