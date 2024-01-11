<?php
function getInitials($name) {
    $nameParts = explode(' ', $name);
    $initials = '';
    
    foreach ($nameParts as $part) {
        $initials .= strtoupper(substr($part, 0, 1));
    }
    
    return $initials;
}

session_start();
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

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
  <script type="text/javascript">
    (function(){
      emailjs.init("NZwPsWRpzzWmVQjwb");
    })();
  </script>
  
  <!-- Add the avatar styles -->
  <style>
    .avatar {
        width: 50px;
        height: 50px;
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
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">Fit<span style="color: rgb(166, 166, 166);">Play.</span></a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
          <li><a class="nav-link scrollto " href="index.php#portfolio">Shop</a></li>
          <li><a class="nav-link scrollto" href="index.php#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Turfs</a></li>
              <li><a href="#">Gyms</a></li>
              <li><a href="#">Visit Our Shop</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

  <section style="background-color: #113cbc;">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <!-- Display the avatar -->
              <div class="d-flex justify-content-center align-items-center mb-3" style="height: 70px;">
              <?php
              if (isset($_SESSION['user_data'])) {
                  $userName = $_SESSION['user_data']['0'];
                  $userInitials = getInitials($userName);
                  echo '<div class="avatar">' . $userInitials . '</div>';
              }
              ?>
              </div>

              <h5 class="my-3">
                <?php
                if (isset($_SESSION['user_data'])) {
                  echo $_SESSION['user_data']['0'];
                }
                ?>
              </h5>

              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary">Be a Turf Owner</button>
                <?php
                if($_SESSION==true)
                {

                   echo '<button type="button" class="btn btn-outline-primary ms-1"><a href="logout.php">Log Out</a></button>';

                }
                
            ?>
              </div>
            </div>
          </div>
        </div>





        <div class="col-lg-8">
  <div class="card mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">First Name</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0">
            <?php
            if (isset($_SESSION['user_data'])) {
              echo $_SESSION['user_data']['0'];
            }
            ?>
          </p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Last Name</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0">
            <?php
            if (isset($_SESSION['user_data'])) {
              echo $_SESSION['user_data']['1'];
            }
            ?>
          </p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">User Name</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0">
            <?php
            if (isset($_SESSION['user_data'])) {
              echo $_SESSION['user_data']['2'];
            }
            ?>
          </p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Email ID</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0">
            <?php
            if (isset($_SESSION['user_data'])) {
              echo $_SESSION['user_data']['3'];
            }
            ?>
          </p>
        </div>
      </div>
      <hr>
    </div>
  </div>
</div>
</section>
</body>
</html>