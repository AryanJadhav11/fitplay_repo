<?php include('header.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FitPlay-Gym</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Protest+Revolution&family=Russo+One&family=Vina+Sans&display=swap"
    rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Protest+Revolution&family=Vina+Sans&display=swap"
    rel="stylesheet">
  <style>
    .gymimgs {
      height: 75vh;
    }

    #itm {
      height: 75vh;
      width: 100%;
    }

    .gymform {
      height: 75vh;
      /* background-color: rgb(199, 199, 199); */
    }

    .gymmap {
      height: 35vh;
      background-color: rgb(199, 199, 199);
    }
  </style>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">Fit<span style="color: rgb(0, 0, 255)">Play.</span></a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Shop</a></li>
          <li class="dropdown">
            <a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Gyms</a></li>

            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contactu.php">Contact</a></li>
          <li class="dropdown" style="color: blue;">

            <a href="#"><span>
                <div class="avatar"></div>
                <ul>
                  <li><a href="user_profile.php">View Profile</a></li>
                </ul>


          </li>
        </ul>
        <button type="button" class="btn btn-primary ms-1 ml-3"><a href="signup.php" style="color:white;">Sign
            Up</a></button>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#loginModal">Log
          In</button>
      </nav>
    </div>
  </header>
  <!-- End Header -->
  <main id="main">
    <div class="row mt-2">
      <div class="col-md-8 gymimgs">
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active" id="itm">
              <img src="./assets/img/muscletree-image-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" id="itm">
              <img src="./assets/img/muscle_tree_image_2.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-md-4 gymform">
        <p style="color: black;">description:</p>
        <ul style="color: black;">
          <li>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. N
          </li>
          <li>
            Aenean euismod bibendum lacus, sed ornare tellus ultric
          </li>
          <li>
            1000 * 1000 sq. ft.
          </li>
          <li>
            equipped with latest equipment
          </li>

        </ul>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Join Us?
        </button>



        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

            <div class="modal-content rounded-4 shadow">
              <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-1" style="color: black;">Contact Us!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                  fdprocessedid="jlo98">
                </button>
              </div>
              <div class="modal-body p-5 pt-0">
                <form onsubmit="sendEmail(); reset(); return false;">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control rounded-3" id="email">
                    <label for="floatingInput">Email address</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" id="name" placeholder="enter name">
                    <label for="floatingPassword">Name</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="tel" class="form-control rounded-3" id="phone_no">
                    <label for="floatingInput">Phone Number</label>
                  </div>

                  <div class="form-floating mb-3">
                    <label for="">When Are you going to start?</label>
                    <input type="date" id="start" name="desc"></input>
                  </div>
                  <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" fdprocessedid="99b3eo">Log
                    In</button>

                </form>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
    <div class="col-md-4 gymmap">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3821.3165706793757!2d74.235734!3d16.711049000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc101f4e17a7db7%3A0xb4a12b2cf743e8bc!2sMUSCLE%20TREE%20GYM!5e0!3m2!1sen!2sus!4v1707418024386!5m2!1sen!2sus"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


  </main>
  <!-- <div class="gyminfo">
        <h2>
            Description
        </h2>
    </div> -->
  <!-- End main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

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
      <div class="credits"> -->
  <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div> </footer>-->
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>


  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script>
    function sendEmail() {
      Email.send({
        Host: "smtp.gmail.com",
        Username: "thefitplay@gmail.com",
        Password: "yasharyanomamit",
        To: 'omrandive1006@gmail.com',
        From: document.getElementById('email').value,
        Subject: "enquiry",
        Body: "And this is the body"
      }).then(
        message => alert(message)
      );
    }
  </script>
</body>

</html>