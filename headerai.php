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

$showerr = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $err = "";

    // Check if the keys are set before using them
    $form_username = isset($_POST["uname"]) ? $_POST["uname"] : "";
    $form_password = isset($_POST["password"]) ? $_POST["password"] : "";

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM `users` WHERE username=? AND password=?");
    $stmt->bind_param("ss", $form_username, $form_password);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    $num = $result->num_rows;

    if ($num) {
        $re = $result->fetch_assoc();
        $user_data = array(
            'user_id' => $re['id'],
            'firstname' => $re['firstname'],
            'lastname' => $re['lastname'],
            'username' => $re['username'],
            'email' => $re['email'],
        );
        $_SESSION['user_data'] = $user_data;

        // Redirect to turf.php after successful login
        header('Location:turf.php');
        exit();
    } else {
        $showerr = "Invalid Email / Password";
        $_SESSION['error'] = "Invalid Email / Password";
       
    }
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

  <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
        (function(){
          emailjs.init("NZwPsWRpzzWmVQjwb");
        })();
  </script> 






<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise AI Website Builder v0.01, https://ai.mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise AI v0.01, ai.mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="FitPlay is the ultimate online platform for booking turfs, exploring gyms, and purchasing sports equipment. Say goodbye to manual turf bookings and hello to convenience!">

  <title>FitPlay Turf &amp; Gym</title>
  <link rel="stylesheet" href="abtus/assets/web/abtus/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="abtus/assets/parallax/jarallax.css">
  <link rel="stylesheet" href="abtus/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="abtus/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="abtus/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="abtus/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="abtus/assets/socicon/css/styles.css">
  <link rel="stylesheet" href="abtus/assets/animatecss/animate.css">
  <link rel="stylesheet" href="abtus/assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap"></noscript>
  <link rel="preload" as="style" href="abtus/assets/mobirise/css/additional.css"><link rel="stylesheet" href="abtus/assets/mobirise/css/additional.css" type="text/css">
  
  <link rel="stylesheet" href="abtus/assets/index.css">

  <style>:root{ --background: #FFF8E6; --dominant-color: #FFB703; --primary-color: #219EBC; --secondary-color: #ED8D39; --success-color: #20AC6B; --danger-color: #AE1E2C; --warning-color: #CC9900; --info-color: #0AA3C2; --background-text: #000000; --dominant-text: #000000; --primary-text: #FFFFFF; --secondary-text: #000000; --success-text: #FFFFFF; --danger-text: #FFFFFF; --warning-text: #000000; --info-text: #FFFFFF;}</style>
</head>
<body>


<section class="menu menu2 cid-u7irD0fFHy" once="menu" id="menu-5-u7irD0fFHy">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://mobiri.se">
                        <img src="favicon_io/android-chrome-512x512.png" style="height: 4.3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap">
                    <a class="navbar-caption text-black display-4" href="https://mobiri.se">FitPlay</a>
                </span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-bs-toggle="collapse" data-target="#navbarSupportedContent"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="#">Turfs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="#" aria-expanded="false">Gyms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="#">Shop</a>
                    </li>
                    <li>
                        <?php
                        
                            echo '<li class="nav-item"><a class="nav-link link text-black display-4" href="mycart.php"><img src="proimg/cart_button.png" width="50px" height="40px"></a></li>';
                        
                        ?>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="dropdown pb-0" style="color: blue;">
                        <?php
                        if (isset($_SESSION['user_data'])) {
                            $userName = $_SESSION['user_data']['username'];
                            $userInitials = getInitials($userName);
                            echo '<a href="#" class="nav-link link text-black display-4 dropdown-toggle pt-2" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                            echo '<div class="avatar " style="width:50px;height:50px;">' . $userInitials . '</div>';
                            echo '</a>';
                            echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
                            echo '<a class="dropdown-item" href="profile1.php">View Profile</a>';
                            if ($_SESSION['user_data']['username'] == "sk") {
                                echo '<a class="dropdown-item" href="admin.php">Admin Panel</a>';
                            }
                            echo '</div>';
                        } else {
                            echo '<button type="button" class="btn btn-primary display-4" style="width: 145px;height: 65px;"><a href="signup.php" style="color:white;">Sign Up</a></button>';
                            echo '<span>  </span>';
                            echo '<button type="button" class="btn btn-primary display-4 btn btn-success " data-bs-toggle="modal" data-bs-target="#loginModal" style="width: 141px;height: 65px;">Log In</button>';
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
 <!-- Login Modal -->
 <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-1">Welcome Back to Fitplay.</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="jlo98"></button>
      </div>
      <div class="modal-body p-5 pt-0">
        <form  method="post">
        <div class="form-outline mb-4">
                  <input type="text" id="uname"  name="uname" class="form-control" required autocomplete="off" />
                  <label class="form-label" for="form3Example1">User Name</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control" required autocomplete="off"/>
                  <label class="form-label" for="form3Example1">Password</label>
                </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" fdprocessedid="99b3eo">Log In</button>
          <span>Dont have an account?</span> <a href="signup.php"> Sign up for free!</a>
        </form>
      </div>
    </div>
  </div>
 </div>

 <div class="modal fade" id="chloginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-1">Welcome Back to Fitplay.</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="jlo98"></button>
      </div>
      <div class="modal-body p-5 pt-0">
        <form  method="post">
        <div class="form-outline mb-4">
                  <input type="text" id="uname"  name="uname" class="form-control" required autocomplete="off" />
                  <label class="form-label" for="form3Example1">User Name</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control" required autocomplete="off"/>
                  <label class="form-label" for="form3Example1">Password</label>
                </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" fdprocessedid="99b3eo">Log In</button>
          <span>Dont have an account?</span> <a href="signup.php"> Sign up for free!</a>
        </form>
      </div>
    </div>
  </div>
 </div>
 <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <!-- Login Modal End -->

 <script src="abtus/assets/parallax/jarallax.js"></script>
  <script src="abtus/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="abtus/assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="abtus/assets/scrollgallery/scroll-gallery.js"></script>
  <script src="abtus/assets/masonry/masonry.pkgd.min.js"></script>
  <script src="abtus/assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="abtus/assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>

  <script src="abtus/assets/ytplayer/index.js"></script>
  <script src="abtus/assets/theme/js/script.js"></script>
  <script src="abtus/assets/formoid/formoid.min.js"></script>
  
  <script>

    (function(){
      var animationInput = document.createElement('input');
      animationInput.setAttribute('name', 'animation');
      animationInput.setAttribute('type', 'hidden');
      document.body.append(animationInput);
    })();

  </script>