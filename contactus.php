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


<!doctype html>
<html lang="en">

<head>
  <!-- Bootstrap CSS -->
<link href="path/to/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
<script src="path/to/popper.min.js"></script>
<script src="path/to/bootstrap.min.js"></script>

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

  <!-- smaple -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



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
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="index.php">Shop</a></li>
                <li class="dropdown">
                    <a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Gyms</a></li>
                       
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li class="dropdown" style="color: blue;">
<?php
                if (isset($_SESSION['user_data'])) {
                  $userName = $_SESSION['user_data']['username'];
                  $userInitials = getInitials($userName);
              
                  echo '<a href="#"><span>';
                  echo '<div class="avatar">' . $userInitials . '</div>';
                  echo '<ul><li><a href="user_profile.php">View Profile</a></li>';
              
                  // Now you can directly access 'Rolee' without additional checks
                  if ($_SESSION['user_data'][2] == "sk") {  // Assuming 'Rolee' is at index 4
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
        </nav>
    </div>
</header>
</body>
</html>