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
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | FitPlay</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <!--  <link rel="stylesheet" id="picostrap-styles-css" href="https://cdn.livecanvas.com/media/css/library/bundle.css" media="all"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css" media="all">

</head>

<style>
   .avatar {
       width: 30px;
       height: 30px;
       background-color: blue;
       color: #ffffff;
       font-size: 20px;
       font-weight: bold;
       border-radius: 50%;
       display: flex;
       align-items: center;
       justify-content: center;
       margin-bottom: 0px;
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

       .star-container {
           display: flex;
           align-items: center;
           margin-top: 15px; /* Adjust margin as needed */
       }

       .star-container i {
           margin-right: 2px; /* Adjust margin between stars as needed */
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
<style>
    /* Navbar Styles */
.navbar {
  background-color: #144ecc; /* Change the background color */
  padding: 10px 0;
}

.navbar-brand {
  color: black; /* Change the text color */
  font-size: 1.5rem;
  font-weight: bold;
}

.navbar-brand img {
  margin-right: 5px;
}

.navbar-brand:hover {
  color: black; /* Change the hover text color */
}

.navbar ul {
  list-style-type: none;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  margin: 0;
  padding: 0;
}

.navbar li {
  margin-left: 20px;
}

.navbar a {
  color: black; /* Change the text color */
  text-decoration: none;
  font-size: 1rem;
}

.navbar a:hover {
  color: blue; /* Change the hover text color */
}

/* Dropdown Styles */
.dropdown ul {
  display: none;
  position: absolute;
  background-color: #fff; /* Change the background color */
  padding: 10px;
  border-radius: 5px;
  z-index: 1;
}

.dropdown:hover ul {
  display: block;
}

.dropdown ul li {
  margin: 5px 0;
}

.dropdown ul li a {
  color: black; /* Change the text color */
  text-decoration: none;
}

.dropdown ul li a:hover {
  color: blue; /* Change the hover text color */
}

/* Responsive Styles */
@media screen and (max-width: 768px) {
  .navbar ul {
    justify-content: center;
  }

  .navbar li {
    margin: 0 10px;
  }
}
</style>


<body>


<nav class="navbar bg-body-tertiary" style="padding: 20px;">
  <div class="container-fluid">
  <h1 class="logo" ><a href="index_home.php"><img src="favicon_io/favicon-32x32.png" ></span></a></h1>

    <ul style="font-size: 1.2rem;">
      <li><a class="nav-link scrollto" href="index_home.php"><b>Home</b></a></li>
      <li class="dropdown">
        <a href="#"><span><b>Services</b></span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="turf.php" ><b>Turfs</b></a></li>
          <li><a href="gym.php"><b>Gyms</b></a></li>
          <li><a href="shopnew.php"><b>Shop</b></a></li>
        </ul>
      </li>
      <li><a class="nav-link scrollto" href="contactu.php"><b>Contact</b></a></li>
      <li><a class="nav-link scrollto" href="register_venue.php"><b>Register Your Venue</b></a></li>
      <!-- cart -->
      <li>
        <?php
        if (isset($_SESSION['user_data'])) {
          echo '<ul><li><a class="nav-link scrollto" href="sidebar.php"><img src="proimg/cart_button.png" width="30px" height="30px"></a></li>';
          echo '</ul>';
        } 
        ?>                         
      </li>
      <li class="dropdown pb-0" style="color: blue;">
        <?php
        if (isset($_SESSION['user_data'])) {
          $userName = $_SESSION['user_data']['username'];
          $userInitials = getInitials($userName);
          echo '<a href="#"><span>';
          echo '<div class="avatar">' . $userInitials . '</div>';
          echo '<ul><li><a href="profile1.php">View Profile</a></li>';
          if ($_SESSION['user_data']['username'] == "sk") {  
            echo '<li><a href="admin.php">Admin Panel</a></li>';
          }
          echo '</ul>';
        } 
        else {
          echo '<button type="button" class="btn btn-primary ms-1 ml-3"><a href="signup.php" style="color:white;">Sign Up</a></button>';
          echo'<span>  </span>';
          echo '<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>';
        }
        ?>
      </li>
      <li><p></p></li>
      <li><p></p></li>
    </ul>
  </div>
</nav>


                  </div>

                  





    <section class="overflow-hidden">
        <div class="container-fluid position-relative px-0">
            <div class="row g-0">
                <div class="col-xl-7 col-lg-6 pe-lg-5 g-0">
                    <div class="d-flex h-100 pe-xl-4" lc-helper="video-bg">
                        <video class="w-100" autoplay="" preload="" muted="" loop="" playsinline="" style="object-fit: cover; object-position: 50% 50%;" poster="https://library.livecanvas.com/sections/wp-content/uploads/sites/18/2022/03/woman.png">
                            <!-- adjust object-position to tweak cropping on mobile -->
                            <source src="home_play_vid.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 text-center text-lg-start px-3 px-lg-0 py-xl-4 py-xxl-5 mt-lg-3 mx-auto mx-lg-0 py-4 py-lg-0">
                    <div class="lc-block mb-3">
                        <div editable="rich">
                            <h2 class="text-muted fw-light">Your One Stop</h2>

                        </div>

                    </div>
                    <div class="lc-block">
                        <img class="img-fluid" src="favicon_io/fitplay_bgr.png" width="158px">
                    </div>
                    <div class="lc-block mb-5">
                        <div editable="rich">
                            <h1 class="display-1 fw-bold">FITPLAY<br>Beyond<br>Limits</h1>

                        </div>
                    </div>
                    <div class="lc-block mb-5">
                        <div class="d-inline-flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="2em" height="2em" viewBox="0 0 24 24" style="" lc-helper="svg-icon" fill="currentColor" class="text-primary">
                                    <path d="M11.5 9C11.5 7.62 12.62 6.5 14 6.5C15.1 6.5 16.03 7.21 16.37 8.19C16.45 8.45 16.5 8.72 16.5 9C16.5 10.38 15.38 11.5 14 11.5C12.91 11.5 12 10.81 11.64 9.84C11.55 9.58 11.5 9.29 11.5 9M5 9C5 13.5 10.08 19.66 11 20.81L10 22C10 22 3 14.25 3 9C3 5.83 5.11 3.15 8 2.29C6.16 3.94 5 6.33 5 9M14 2C17.86 2 21 5.13 21 9C21 14.25 14 22 14 22C14 22 7 14.25 7 9C7 5.13 10.14 2 14 2M14 4C11.24 4 9 6.24 9 9C9 10 9 12 14 18.71C19 12 19 10 19 9C19 6.24 16.76 4 14 4Z"></path>
                                </svg>
                            </div>

                            <div class="ms-3 align-self-center" editable="rich">
                                <p class="lead">Bsiet,Warna coloney<br>Kolhapur.</p>
                            </div>
                        </div>
                    </div>

                    <div class="lc-block d-grid gap-3 d-md-block mb-5 mb-lg-8">
                        <a href="turf.php"><button class="btn btn-primary btn-lg me-md-3" type="button">Explore Turfs</button></a>
                        <a href="turf.php"> <button class="btn btn-outline-primary btn-lg" type="button">Explore Gyms</button></a>
                    </div><!-- /lc-block -->

                    <div class="lc-block py-4 d-flex align-items-center">
                        <div class="lc-block d-flex">
                            <img class="img-fluid rounded-circle shadow border" src="https://i.pravatar.cc/128?img=6" width="64" height="64">
                            <img class="img-fluid rounded-circle shadow border ms-n4" src="https://i.pravatar.cc/128?img=14" width="64" height="64">
                            <img class="img-fluid rounded-circle shadow border ms-n4" src="https://i.pravatar.cc/128?img=67" width="64" height="64">
                        </div>
                        <div class="lc-block ms-3">
                            <div editable="rich">
                                <p class=""><strong>30+</strong>User</p>

                            </div>
                        </div>
                    </div><!-- /lc-block -->
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light mt-4">
        <div class="container py-6">
            <div class="row mb-4">
                <div class="lc-block text-center">
                    <div editable="rich">
                        <h2 class="fw-bold display-4">Brands and partners</h2>
                    </div>
                </div>
                <div class="lc-block text-center">
                    <div editable="rich">
                        <p class="lead">Sponsoring and Empowering this events</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    
        
                        <div class="lc-block">
                            <div id="carouselLogos" class="carousel slide pt-5 pb-4" data-bs-ride="carousel">
        
                                <div class="carousel-inner px-5">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-6 col-lg-2 align-self-center">
                                                <img class="d-block w-100 px-3 mb-3" src="https://cdn.livecanvas.com/media/logos/11.png" alt="">
                                            </div>
                                            <div class="col-6 col-lg-2  align-self-center">
                                                <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/2.png" alt="">
                                            </div>
                                            <div class="col-6 col-lg-2  align-self-center">
                                                <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/3.png" alt="">
                                            </div>
                                            <div class="col-6 col-lg-2  align-self-center">
                                                <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/12.png" alt="">
                                            </div>
                                            <div class="col-6 col-lg-2  align-self-center">
                                                <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/5.png" alt="">
                                            </div>
                                            <div class="col-6 col-lg-2  align-self-center">
                                                <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/6.png" alt="">
                                            </div>
                                        </div>
        
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-6 col-lg-2 align-self-center">
                                                <img class="d-block w-100 px-3 mb-3" src="https://cdn.livecanvas.com/media/logos/11.png" alt="">
                                            </div>
                                            <div class="col-6 col-lg-2  align-self-center">
                                                <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/2.png" alt="">
                                            </div>
                                            <div class="col-6 col-lg-2  align-self-center">
                                                <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/3.png" alt="">
                                            </div>
                                            <div class="col-6 col-lg-2  align-self-center">
                                                <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/12.png" alt="">
                                            </div>
                                            <div class="col-6 col-lg-2  align-self-center">
                                                <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/5.png" alt="">
                                            </div>
                                            <div class="col-6 col-lg-2  align-self-center">
                                                <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/6.png" alt="">
                                            </div>
                                        </div>
        
                                    </div>
        
                                </div>
                <div class="col my-5 text-center">
                    
                    <!-- /lc-block -->
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-6 mt-4 mb-4" >
            <div class="row row-cols-1 g-3 row-cols-lg-3">
                <div class="col">
                    <div class="lc-block card flex-column border-primary h-100">
                        <div class="lc-block card-body ">
                            <div class="d-lg-flex text-center text-lg-start">
                                <div>
                                                                       <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFeklEQVR4nO2b204bRxzGuWkvqr5Ee9sn4GQHYw6G9RFsMGCCOZgCtmPMA0RVH6GFJCINDUpRRSA2EKICJTROm6RRm9CArbTqY0QVrapM9V8TA/Wu7F3PMjb+Pum7Ydazs99vZ+a/a1NTA0EQBEEQBEEQBEEQBEEQBEEQBEEQBEEQVGkK/RJ6L/x65qPY77GPK8mjL0c/IYseh1ZT1pR5Hoirh1ffj6TjX0TTM0fRzAyrFIcPYqxnZ4BJSRezJ9ys5/t++W+ix6XJ6Zkjyp4Y5IBEM/HPhQ9Mh3sIRsJ1xgRF9Lj0gYl/dhrIn8IHpNGR9LQ8K/4PhGZLOD3NKu56MvE/ckAimfgb0QPS6snfruTDODa1VSCQNwCSEQ8CQDLiwweQjPjAASQjPmQASWBTF3ZHTaLKEj+towAiPvhotQIJ/TrJfN/1Mc+mT7sf9DL/3mX26f6VqgMydTDNhp+FWP8PQ6xvb1CzA4+H5fGeATL0dOxI7eK02c26tnpZODN94YFE0jNsIBVk9qSn5Nwcax4WejH1Vw6Ifc3zlg+QrJ1rXSz8avrCAokcxln3lp9bXmTvlv/fHBCeHb+ze9N7YYH4Hwa45+VY87w9BUThrSkHB5+FLhyQ8RdhQ7JyJD3McCCeBz7ugUwdxOS127XhVT0vtQVSQUO+rPI/HBQHxLnhKVhhue/7mD2pfBJ70s01jKEnY/IGWPwy0MWCT8e4jsGzqXwjONa7mH+3cFXl2/brBxJIDRc1yL69yyqh8AESycSZf1f/uk1BUR88xkKQlc5BpW8xnx99PmE8EDrOSCB+Dpuof3eADxCVMpeCrgogQ0/GuK3T1BeAlABj6lVM055RcE9Z97CpEp+PqnqGBFJB1XAVf+BQRFux1wQgCiG4NrqVA0965E1ULXRqs68pQ6E+AUTHnTjxMqoa+OCPIwUfDAcfj6i2T+xHMUO0Ahn5eVxldrhZ+DBWEAi9hVV7Php5Pg4gmqurn5SrK/emr+hXJ/Q+TbnaGi1vIHVzDaz2y3y3fdtRVPVCxyl9nvot5vNKtt5pV+yz4bpZbretOBTbydRGx9CxSu3Ut95xGZlVWQNpXbIp9znbyDpXnQWBdK5Se6Nie+tScdcFIImTEGx37aqBWxfbCgJpXmxVb79rBxA9d2P9NZPqLGn5RnkGkVuW2uVjlNrqr5t0w6jqJUtKuFjzbfW7vHa2QVebZbEVQPQC6VhxqN7pelw3R/tPdsPHDOFcbdXqcCnVFZasxEkITQvWkmFcumUtGUbF7CG0iaotETxCkO65WNOtZuEwskCUl1AqMgwHYpq3sEsL1gJuZvUqg2y4kX2I42XrnTbVQNRuiBYOy9RpN95QftismzPJWRTKizLVDaRU01LDMwyJNvpVJ7PcbpXLV7Xz1l8zyxVaR4kbuJKbFloMyepcgLQvS9wDkY5dzKsTI9y+3HkeQPiVlkas21IZASHTtfEHYjoBYppv4tq5ed4ib8QXFYiUcDLumd20nACxLdu5PIBRH/KTsMEwJOFAspUf7VM8lnvKjRjkgNC7+Hcv5ApXVfm2fN0il330FtbwIBJlAuTYdM1U9lMGerKjzDtW7Ge/D1H70qWcbSsTILwMIAnxEAAkIT54AEmIDxtAVrCHnPsdZcOmLn5aSwAiPngJQMSHLVU7EOdG9z+iB6TVnfecyj9mmG2Q20SPT6td971/54D4tgdSogekx+ab+d8imr+yCB+XHvfs9D/KAZncm/ywZ6dvX+3HyeXqjlWHDECeKbNZGKX+quS8TZl7d/z7xCAHJPePO+uhD/oeDZoCqaC5kuzd7nWQRY9DqylryjwPBARBEARBEARBEARBEARBEARBEARBEARBUE2Z6z9BK8pOA/5ycAAAAABJRU5ErkJggg==">

                                </div>
                                <div class="lc-block ps-md-4">
                                    <div editable="rich">
                                        <h3 class="h5 fw-bold">Turfs</h3>
                                        <p class="rfs-6">Discover the ultimate convenience of booking turfs online with our user-friendly platform. Whether you're organizing a sports event or casual game</p>
                                        <p><a href="turf.php">Check out turfs</a><br></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- /col -->
                <div class="col">
                    <div class="lc-block card flex-column border-primary h-100">
                        <div class="lc-block card-body ">
                            <div class="d-lg-flex text-center text-lg-start">
                                <div>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD1klEQVR4nO2aPWgUQRTHF/xCAn6gYmWhdjYWAfGjENFAzMwlNmlVYmctWIlB8KsUW9FOQdBSCKJHcvPODw4S4t28y4mNCH5UYhFTqCsranZGs9nb280kc/8fTHX35r19//nP3s5tEAAAAAAAAAAAAAAA4AmSOMTg3HoAQWh5LSgIQu5FgCDkvvEQhNw3G4KQ+wZDEHLfVAhC7hsJQch98yAIuW/YshbkxAu9xfUFSI+GUPp739hUT/ZjE6UPuL4I6dkQ1Zl9mQUpKT7t+gKkZ0NU9KnMggjFV11fgPRvXMksiFT80FBX8eCiMVYBqXN5Gieq+qQV8yBtrn8nI27EJxucqO/Ju2Df4waIDxqLmrgeZGH4frhKkp77O5nSP4arb9fnXbDvcf0TrW1mjJ6Leps23/xEqrXbmEjpd0UU3A1xUunPhksqM7vS5oslbhw1BeHxogr2PU4S1+IxA4qPBO0iiEcMVZW+XVTBvsdJxffiMdHjRNAugnjUvBnpC0UV7HucJH3Z2v4vBu0iSN8xBeGRogr2PU6SPmv18lbafPOTKH5sJK80jxdVsO9xQvGgJchY2nwL3ohEZWZvUQX7Hicq3Gvdj1+mzTc/ieLX8UmGxl/tKKpg3+NK482d5j2EW2nzxRLrT6ZDpjcXVbDvcbLc3Go55GPafLHEsad04rC3VltTVMG+x/U/aq0z4/Rc2nyxxBAkL0GG6/W1lkNmg3YRij/EJ4n+PfRlxS65Q+zzLMXv0+aLJdZT8UlKFb2/qIJ9jxuwTnwl8WTQ6YOhJD5XVMG+xwnS57McQxmUKo0zxiTEjcWOjaMbv11wmh8DPscdLpdXC6U5y6mHwVB5cpMk/dWaaHSh75eeTW8XSj+xC5akn0afdWucVHzJcsfssdqbjUEWJPFNuwCh+G60J0avs/Q/b22I3qKQiq8J0l/+LfaPkL8+ux59N4rxPa5vbKqnVG0esk95fwtyI8hK9DAoSH9bqBAMbqsHUS/TPmAnuQSNp/x60JEYEIRzX4wQhJaXwyEIuRcBgpD7xkMQct9sCELuGwxByH1TIQi5byQEIffNgyDkvmEQZBk0SUIQ942R3SJIxwk7ZKnrhCCLAEHgkBBbVgJwCBwSwiEJwCFwSAiHJACHwCEhHJIAHAKHhHBIAnAIHBLCIQnAIXBICIckAIfAISEckgAcAoeEcEgCcAgcEsIhCcAhcEgIhyQAh3TrC2sr5b2slTKCnIAgBEGcr2YJh2DLSgu2LMKW5Xx7kdiysltypYwgJ7BlUZcvBNcXID0bEITciwBByGNBAAAAgOD//ATlgkqlAiZJlgAAAABJRU5ErkJggg==">
                                </div>
                                <div class="lc-block ps-md-4">
                                    <div editable="rich">
                                        <h3 class="h5 fw-bold">A versatile Shop</h3>
                                        <p class="rfs-6">Experience the ease of online shopping like never before! Browse, select, and purchase your favorite items from the comfort of your home with our streamlined online shop</p>
                                        <p><a href="shop.php">Check out Shop</a><br></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- /col -->
                <div class="col">
                    <div class="lc-block card flex-column border-primary h-100">
                        <div class="lc-block card-body">
                            <div class="d-lg-flex text-center text-lg-start">
                                <div>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE0ElEQVR4nO2cTYgcRRTHK35/i4pKYDXuvDfrukgQFRFE9uLHSnamXk94b1YNCYLs1aPHePTqzSB4UBAEQURURBDxIhpERFBEFI1RRFT8TIyJO1Jxdt3NbNzu6e551d3vD39YmKWr6v/r6n5d0zXOmUymGgu83IvEB9Hze+Fv7f40WdvQ86Po+W8kGQy9AiSPu/37z9DuXKOECw9egsQvrgOx0Z5fnWO+XLufjVDb803g5fPTwlgzH2oT36bd31oLifcgyR9bw1ibKUfBy8Pa/a6dcGHhXPDyRGoQo35mivl87XHUQpgkU+D5nRwwVmfL+zMdntYeT6WFxPNI/F1uGEODlx+Q+vdoj6uK2obEjwDJ8aJg/DdT5AR4fsxK45S6vtu9GIhfKBzEyGzhl6/d9cBl5Z5XFddMrzcLnj8uG8Y6fzbdWdqpPe4o1Sa+H4h/nyCM1Zv9UezKQ9rjj0bz8/NnheWOiYOgER+YYz7HNVmtJLkKid+MAMbgX/PB63q9Ha6Javv+neDlW30IssHg5ft2V+5yTRIQL4Pnv7TDx9PZy4mwkhzKb1dnzTFfhF6eVw+cUvulFvOlro6apv4Mev4ogpAH2WYLf9pK5EZXJ0GXu+jlZ/VwaTyDl9+AWFzlxXzmsKRd0Q4Vi/GBW5aXz3ZVFDJfCcRvRBDioNDZQvz2bJJsd1VSq7t0K3r5Ujs8LA/KN62e3OGqU9LKMe3QsHQocnxYGsepHfv2nQfET2sHhZMG4+W5nXfvudDFJOgwIvGH2uGgHpRP2tS/wcUgpP4iEv+kHQpqQyH5Fb3sju1FtaZ7JbyMEVawJ0pilugK8Px6BAEMYjR4eWu6s3T1RGBAIjcDyRfag8bIDV6+xkRuLxdGV/ailyPag8WKGEj+DC9rlFLSIvFT2gPEihq8PLt9cfGCQmCA718DXt7VHhRW3EDyQbvXa+WC0aL+feDlR+3BYE0MxL+AFxqHhZW0VBqYbHtYttx7YR4UkkGaPSzp916YsZAM/mcPC3rpWEkrkz/ZwmOEl84IkLDGP3ITsupqUPiNfZNMgeTwJkDk8MZ/4ifDRhm7PEmxUMLmo5DtKZeu0ftHwruGs+Sr8ES+dimz+8WgyAzWJkBX9q7mHR4vUtRbBgRLOBlTB29ApKlA+JWwb3DLdpNkKtTqdWs/PiApwli/jla39l1eaXcIG95+dB3Chrc/8Q5l/Rxr1r4BaR6QdFVMLIHgmIGNW4WlPX7qwLZ0BhibHd9VBMi4VZjLq7IbrDKQIANCBqTUMzD2GYIF98/lVdUGjJH3bywIRTaY9/OyZUAyBlK2DEjGQMqWAckYSNkyIBkDKVsGJGMgZcuA5AwEreytVp2PkffP5VXZDcYOZCsZEDIg2c5CW34fRHXJCl/ahO8Jxj2+q8gl6+R3IV5ei/6SVXQgWPP2DcgpMiAZhQ1vP7oOYcPbL71D2q9yor1KOl4VBmNWMbG37/Kq8EAabmdARB2CASH94A0I6YdtQEg/YANC+qEaENIP0oCQfngGhPQDMyARhIQGRD8YNCD6YWAEtqUT0odgQEg/eANC+mEbENIP2ICQfqgGhPSDjAbIyV/5j2AgWAtv8tuKWRV+DzAcSH8wUnHzIUh4ITcQk8lkMplMJpPLrn8Amao9WSRmGXEAAAAASUVORK5CYII=">
                                </div>
                                <div class="lc-block ps-md-4">
                                    <div editable="rich">
                                        <h3 class="h5 fw-bold">Gym</h3>
                                        <p class="rfs-6">"Elevate your fitness journey with our online gym booking platform. Easily schedule workouts, reserve equipment, and embark on a tailored fitness experience from anywhere</p>
                                        <p><a href="gym.html">Check out Gyms</a><br></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /col -->
            </div>
        </div>
    </section>
    <section style="background-color: black;color: white;">
        <div class="container py-6" style="background-color: black;color: white;">
            <div class="row align-items-center py-2">
                <div class="col-xl-4 mb-5 text-center text-xl-start">
    
                    <div class="lc-block mb-3">
                        <div editable="rich">
                            <h2 class="fw-bold display-6">Our Clients say...</h2>
                        </div>
                    </div>
                    <div class="lc-block mb-4">
                        <div editable="rich">
                            <p class="fw-light rfs-10">Customers are Awesome. Check what our clients are saying about us.</p>
                        </div>
                    </div>
    
                    
    
                </div>
    
                <div class="col-xl-8 position-relative">
    
                    <img src="https://livecanvas.com/media/svg/fffuel/svg-shape-11.svg" width="256" height="256" srcset="" sizes="" alt="Made by fffuel.com" class="d-none d-xl-block position-absolute top-100 start-0 translate-middle mt-n5 wp-image-2412" loading="lazy">
    
    
                    <div id="carouselTestimonialCards" class="carousel slide py-xl-4" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
    
                                <div class="row row-cols-1 row-cols-lg-2 g-4">
                                    <div class="col">
                                        <div class="card p-3">
                                            <div class="card-body">
                                                <div class="lc-block mb-4">
                                                    <div editable="rich">
                                                        <p><em class="rfs-8 text-muted"> "Absolutely loved using this platform! Booking a turf was seamless, and the turf quality was top-notch. Highly recommend it to all sports enthusiasts!".&nbsp;</em></p>
                                                    </div>
                                                </div>
                                                <div class="lc-block d-inline-flex">
                                                    <div class="lc-block me-3" style="min-width:72px">
                                                        <img class="img-fluid rounded-circle " src="data:image/jpeg;base64,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" width="72" height="72">
                                                    </div>
                                                    <div class="lc-block">
                                                        <div editable="rich">
    
                                                            <p class="h5">Rajesh Kumar</p>
    
                                                            <p class="text-muted">Football Coach&nbsp;</p>
    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card p-3">
                                            <div class="card-body">
                                                <div class="lc-block mb-4">
                                                    <div editable="rich">
                                                        <p><em class="rfs-8 text-muted">"Great experience with this platform! The booking process was straightforward, and the turf facilities were excellent. Will definitely use it again!"&nbsp;</em></p>
                                                    </div>
                                                </div>
                                                <div class="lc-block d-inline-flex">
                                                    <div class="lc-block me-3" style="min-width:72px">
                                                        <img class="img-fluid rounded-circle " src="data:image/jpeg;base64,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" width="72" height="72">
                                                    </div>
                                                    <div class="lc-block">
                                                        <div editable="rich">
    
                                                            <p class="h5">Rajesh Singh</p>
    
                                                            <p class="text-muted">Former Player</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
    
                            <div class="carousel-item">
    
                                <div class="row row-cols-1 row-cols-lg-2 g-4">
                                    <div class="col">
                                        <div class="card p-3">
                                            <div class="card-body">
                                                <div class="lc-block mb-4">
                                                    <div editable="rich">
                                                        <p><em class="rfs-8 text-muted"> "I'm impressed with the ease of booking and the variety of turfs available. The platform made organizing our sports event hassle-free. Kudos to the team!"&nbsp;</em></p>
                                                    </div>
                                                </div>
                                                <div class="lc-block d-inline-flex">
                                                    <div class="lc-block me-3" style="min-width:72px">
                                                        <img class="img-fluid rounded-circle " src="https://th.bing.com/th/id/OIP.XIHKbawz2fk_9bU9wqDJuwHaLH?w=178&h=267&c=7&r=0&o=5&pid=1.7" width="72" height="72">
                                                    </div>
                                                    <div class="lc-block">
                                                        <div editable="rich">
    
                                                            <p class="h5">Anand Sharma</p>
    
                                                            <p class="text-muted">Fitness Coach&nbsp;</p>
    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card p-3">
                                            <div class="card-body">
                                                <div class="lc-block mb-4">
                                                    <div editable="rich">
                                                        <p><em class="rfs-8 text-muted"> "This platform exceeded my expectations! The turfs were well-maintained, and the customer support was prompt and helpful. 5 stars from me!"&nbsp;</em></p>
                                                    </div>
                                                </div>
                                                <div class="lc-block d-inline-flex">
                                                    <div class="lc-block me-3" style="min-width:72px">
                                                        <img class="img-fluid rounded-circle " src="https://th.bing.com/th/id/OIP.yDQyTEnJkgdzBG3QH09veAHaNK?w=178&h=317&c=7&r=0&o=5&pid=1.7" width="72" height="72">
                                                    </div>
                                                    <div class="lc-block">
                                                        <div editable="rich">
    
                                                            <p class="h5">Neha Pate</p>
    
                                                            <p class="text-muted">Cricket Player</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
    
                            <div class="carousel-item">
    
                                <div class="row row-cols-1 row-cols-lg-2 g-4">
                                    <div class="col">
                                        <div class="card p-3">
                                            <div class="card-body">
                                                <div class="lc-block mb-4">
                                                    <div editable="rich">
                                                        <p><em class="rfs-8 text-muted"> "Highly satisfied with the turf booking experience. The platform is user-friendly, and the turfs were perfect for our game. Will be a repeat customer for sure!"&nbsp;</em></p>
                                                    </div>
                                                </div>
                                                <div class="lc-block d-inline-flex">
                                                    <div class="lc-block me-3" style="min-width:72px">
                                                        <img class="img-fluid rounded-circle " src="https://th.bing.com/th/id/OIP.CpLL71_J5oqfVYYSHr_KnQHaHO?w=178&h=173&c=7&r=0&o=5&pid=1.7" width="72" height="72">
                                                    </div>
                                                    <div class="lc-block">
                                                        <div editable="rich">
    
                                                            <p class="h5">Viraj Khanna</p>
    
                                                            <p class="text-muted">Football Player</p>
    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
    
                            </div>
                        </div>
    
    
    
                        <div class="w-100 px-3 text-center mt-4">
                            <a class="carousel-control-prev position-relative d-inline me-4" href="#carouselTestimonialCards" data-bs-slide="prev">
                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.354 1.726a.5.5 0 0 1 0 .708L5.707 8l5.727 5.726a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                                </svg>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next position-relative d-inline" href="#carouselTestimonialCards" data-bs-slide="next">
                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.726 1.726a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.726 2.354a.5.5 0 0 1 0-.708z"></path>
                                </svg>
                                <span class="visually-hidden">Next</span>
                            </a>
    
    
    
    
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        
    </section>
    <section class="overflow-hidden">
        
    </section>
    <section>
        
        <div class="container-fluid mt-8 mb-6" >
            <div class="row row-cols-1 row-cols-md-3 gap-3 row-cols-xxl-5 justify-content-center">
                <div class="col">
                    <div class="lc-block card border-0 flex-column h-100">
                        <div class="lc-block card-body">
                            <div class="d-lg-flex text-center text-lg-start">
                                <div>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAALsUlEQVR4nO1dfaxcRRXfltJW2+7MvoIVQ5SAGhUEsdXEj8RQ+4eKgl81JsRUo6m0b2f2lVporPaBKGqMIkpISrSVSuQPCBRFUDR+FNIoYGmNVn1KGmrbt+fcR1sKFIpt1/zOvW3f3r37cT/mvbv79iQ3affde86ZM3fOnDkz53cLhT71qU8JqFTmy5WhvdpyLc6lLP23VOYP5l6e5Q9NpLzYBEFxlTulpKE9fXkpKanxT159eSmp3wGcrw7I+v6pJi829bpBdL8D6qnfAVPMILrbRkA/CuJ+B+guDntjUxrlkizEdI/Li01plCsZ+kBfXkqa6CGne1xebOp1g+h+B9RTvwOmmEH0VBgB89d48wYqY29WZW+xNvQZZehLytA3lOEfKsubleUt2tLvtKG/REzmh0//n45pSwdOXpLHN/xvbekJbfi32vC92vImZekWbfnLqkyfRb5f2+rFZ6+kVxcKtWku2ueUOlVw/qD3GmW8y0q2erW2dLOy/JAytEtZfi5trJ3VpSy/qCz9XVn6uTL0fW3IdGUHiLFt9WPa8re0od8rS89OtnF1Jhcdw+gpWf50yR54bSEP1PgWJd8h0112BVuVdyvDQ/PL3psm1PC+S+FrfL+b8q0y4quf9N0S/1Qb+l7J0lpl6XPaeB8pGXq3st5CZfhSNVQ9H9ecq0dfpVYcKmH+OKXTGm8efptjqwtO3ifPWG8heIAXeII3ZEAWZIpsMWbKtvjzzXchz4nRF6wenYNJUlv+dVxllaV9cEfa0O2qTGu0qV6JibcwXJtZyAsN12ZKMFCpftTXkW5Xlv6gDO2PPzr4b8ryqgEzVkytV3HVoQFl6Gva0DMdCn8+8P1fxykGPF/ocpo3uHe+tvxhRGfSNrSxsxfvWW342xiZCcTWppUMrdCWx9pHD/yQLrOV4Tdcm1HodRquzUBb0WZt+FewQZvOGEMEGBXqRhJ6DOFYc39HR5Wh+5WhT8I1FaY4LVg9OkdVeClsoi293GLivr/taCgtP6Bk8RL9to9qw+vmmv1nT1jruoxgG13mr4itol/ex1rODcrQL6J8mbJ0bcGMzJrQ1nQzLds9Wxm6LmodhNV95DO64l0RMWz+OGDGzp3wBvQIwXbK0tawXZEGabhZGfpl6MbfOH3rzcisoqELSmV6j6yeDQ0qQ9cry7cpQ3cpSw/gBdCWtmvDT/kBwel8T8S6YvzfxvxnaDt4BLzuCnhfry2tRMgJ2dDBaUhsRmZJPqreq9zZcJ82XB1/0zzLb0gtfGntjHmD/EZM2PCN2vDGIL7eow0dT7X4yfIydBw6QTfo6Ptx+gR0RxvSmgF8Qp5lb8NN2jKHYvpL44mpTRswY29Rhr8gjbD0hDJ8ZNKNa9NdfhsQmNCP0Ta0seOQMiDYMsSXGzvA8H2hyeLRdi4Iw9dfA9ADnS7WeuIy9IwELIaMuLB2E7LlR+uf5/saO8ByJULQY+Hsny7TJdryd7Shf6ZvDCF3v0vckqWfIRUs+RpLy+R8frm6pFgeeycWPpIqGKqeLxPbikMlhMwndcK/8Zv8DffgXustlGfL1SU+L+wB0FrIEFm+K9wVPZ/EHCWW/iE2sdWLx9sKttOWHo94ptLYAb5hI5jzc8rwN2XlhwkxtnLI+9PjyvAdfjKsemVxFb0+V2GtGZkFnaCbnwzkzYHOzyd4qbZjZMBmTfc8ynRJoxLDtemp3Yihg8rSg9ryV1Eloiqj58X1l/mi2jS0AW3RhtdL1tbSobTuC7aOFBeeBzpgdhRbhlioSa82Y9xLNFybrir0Niy0gu3So/FsFuH/W84DrYfbMUk1W64UB71FUyUZVxz0FomtpO2x9xIa/X+zeUBCMMPrOs2LK8sv+BMq34RNkF7IG81FfqfiXSE+XRZ1/EJHtoDNxHahUDzS/7eYBzDcsFJEZKIM70zg90iW44Z+JPmRMn28ZEcvytskXLKjF0G3wLUg5n8Eusdtr7K8A7aCzWC7jv1/i3mgbshA0WBC2pHB6nO/dKrhh7E8908k8Dpl+fOSmzL8PtmSREhp6AKEmDhGEoScp7KK+Dd+O2uIz8E9cm/wHHjIGwye/mhGGHqnyDS8039T063KxRaG18uL1cqlt/L/SR6Shhoe8jeo49fU6h7YlG+1EGv3Mkc/FF4PdDJsxi08cHTDPwCVdtOeu/tYSlRY39L/t5sHYlJDI+SwEw5m4fCTbFy/mJ83mo/4OmEnkG7O4mBWIv+faui06YCoe4qrDg2UhkYvRLrg9NFEWUHeFqQLHlSGtwXJsH8hxexHZNHp6CDyeMpPk0gycJvwEF7gyTcp660WWUhRDI1e2OzgQNoOSOT/T1Lg18c/fG8CBVI1oNv5p3qJUw2fjBrQ1fzhxsMnSjry/5kxyLmBHPPP4gVOPQ/k2UDOOyADF56aSZ4N5Jp/FkFM6mGUZwM55Z+B+86EUW4N5Jh/Jv4/i6GUVwM574As/H8WzPJqINf8M/H/WQynvBrIKf/M/H8GDHNpIMf8M/X/aYdUHg3kvAOy9P9pmebRQK75Z+r/0w6rPBrIKf/M/X9KxrkzkGP+Tvx/mqGVNwM57wAX/j8N87wZyDV/J/4/zfDKm4Gc8nfm/1MIyJWBHPN36v+TDrE8Gch5B7j0/0mF5MlArvk79f9Jh1meDOSUv3P/n1BQbgzkmP+E+P8kQy0vBnLeARPh/5MIy4uBXPOfEP/ftH4AaCmG79DGuwpgSUkakJQmkz/aijaj7Q1HLJ34/1bzwKmLTgTVgpukVrjHOkD5bdrUpjp0zHmZVgABWYt7KUs34oy+stX34wx/YXntzNx0wPLamQJzBt1ER7oxSRud+v/kdWQtMeOelrIfwz9Rlm7wQZC8qwDujTosGEWKLsbh7KAWV1m+tbGD8dvpOt26go1BbxF4gndQWH6DuA+RTU9neJTenf9vXk9MJ4IKF+cQlUrqs+hEi0490WkNVzo9BI7s4QZdnPr/duuB4dr00mD1rYDnEtRbvwq9KYJU91z0cgA0uxltQxvFBo2F7e79f4t5IHroDddmom6qaPhTPvgf3xPAEMcuftPuLxLdDN8DXaGz1Hw1gbKJOP/v3v9nKnzZ7tkCZQPcaFRgWrpWIBEsbUD9lY+xI2X/BxuMZfhJIBmiOA+XjwsaUTQozwreEPB67gZvvwCErhWZZW+xQNIs2z3b2UvogiKGHzuTZUJgR4YfOXfVnleE7ztn+b5XNqCSAHTKlV4heJ+J8f/jy/Xr0Mu55qIoewEAY+siFDrRCioYWD4h/30MHeOkeLvupaDDEw7ToA3/KaTEdVnLUCGgIyz02uqFWjLHb6ZfzF03KrdlLSOJEkeAwZaljFKl+q7QG/3nds+E8XmAGZSpTpbeG4YfEFTJSYH0DZezGjqMcv+sZOiV+18XnlRbDnW/xLZu0s4Sbj6AMjgcDj8nDaIZiLERcTMWZhvnXrPvrPQSatPi1CxH5uYzwCsKfP6mqEUgwP0Kk0lACm+BlLUhLfqiDmPZGR7qWJc4tblR/Cqj5wUfo2gMhWV00dpCHqhY9r6oLb8UucAx9D/B7DTeZUkgIFVoD6Ip8qzfAVs67aymtLR2BnSFztC9yaLtJbS5kCcqWu8dyvJfW6w0Zb0AbH4sosaD7rWijrf8UkAsqMpBjcVcoFt9fB8e2YZ3CjhVLglpXfm6RutGBIY87n89g24R6IAhfnvkirRDw3baUVjEQZbItPwDH2qmI7gagovrClQwgXQXTAaBHG7XsFoIAm1EcEiRkjC8HimDMFqjAD8hRQ0DY1EIyP1QWOw/Q8sCHhsCbNORBKnn/8Dw3QnVjwwp8vASQbT+GITO1wXs6Y3y0dGeASLElyfK3mK4HB/6LE94QsAD4h2CppUwWOg6ki8flQFTI/BnW2SvNS4EZJILXwDB3jXCW8guV5eM/yLT1Kbh2gwg2OIDQOPg7G+VHL2lrYK63sbAAQr6Vv8Z2bocBi/AFwtibzdMon3qU2Gq0P8B6rtOMOi6P9wAAAAASUVORK5CYII=">
                                </div>
                                <div class="lc-block ps-4">
                                    <div editable="rich">
                                        <h3 class="fw-bold h1">20+ <br>Listed Turfs</h3>
                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /col -->
                <div class="col">
                    <div class="lc-block card border-0 flex-column h-100">
                        <div class="lc-block card-body">
                            <div class="d-lg-flex text-center text-lg-start">
                                <div>
                                    <img src="data:image/png;base64,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">
                                </div>
                                <div class="lc-block ps-4">
                                    <div editable="rich">
                                        <h3 class="fw-bold h1">50+ <br>Transactions done</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /col -->
                <div class="col">
                    <div class="lc-block card border-0 flex-column h-100">
                        <div class="lc-block card-body">
                            <div class="d-lg-flex text-center text-lg-start">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="text-primary" width="5em" height="5em" viewBox="0 0 24 24" style="" lc-helper="svg-icon" fill="currentColor">
                                        <path d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z"></path>
                                    </svg>
                                </div>
                                <div class="lc-block ps-4">
                                    <div editable="rich">
                                        <h3 class="fw-bold h1">30+ <br>Users</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /col -->
                <div class="col">
                    <div class="lc-block card border-0 flex-column h-100">
                        <div class="lc-block card-body">
                            <div class="d-lg-flex text-center text-lg-start">
                                <div>
                                   <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAACHElEQVR4nO1YPWsUYRDeCCHivpPlRNIpIYVNGiE/ICiCpVVaSXUo3szGNJZpbVOmEtLFXxAICf4AwcbGQoIpgiCKZXDndeQ9syGYXLzd9+Jd9p4HHg5uYHbm2flikwQAAAAAAKAGWm3LnPhNEm/90rHu9/IXbFV8Efs30y/sZjIMpJ3iAbEeVAo4CCD+dS+fwVbVX4gh5eL+/8ucbYrEvyJWXznYwI4u93IdbLV8iv5y4tdDbJeae7pi88T6vl6Qf5jlNtvLf7DF+CbWDzdyu3cJqdsEieYkehQT4EX9X3sOnK2GI8f6MlmzawNJ/fqq3Sbxe3FB/bv/o+bA+dwNsUcl73JdcqzfBhTQhf0fPwfOE1x/UK5PokQAxhkk+tOJfj8h62fH+qlL0Y9O9F1JEn1L4ncCHfvtcKSUPO7rjX6f60TboRW6LXjM6bx4lHaKh4GObTETWyhJz+1utmJzgS2xO9kza5VM2jYZIYC3QXLUn3sGEEBQAYYWEMwAwxAUbAHDGpR4EbpHi/gNYj0MvyeHzF//NfYOoCERAtQFjcDbQwUIWsAwAwRD0LAFBGvQcAfIeB9CW91vjNVtDRCA9Wv61Gbcqt0i1i9925oigMt1qYzJcfG4X1tjBKBTSVS1QQBBBRhaoC5oBHofM0AwBG1Q1XOlW4AggB/fCkgiY4YAdUEj8PYxAwRD0LAFBGvQhnIHAAAAAACQNBm/AYoDmb49X4zKAAAAAElFTkSuQmCC" width="92px" height="92px">                                
                                </div>
                                <div class="lc-block ps-4">
                                    <div editable="rich">
                                        <h3 class="fw-bold h1">20+ <br>Products</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /col -->
            </div>
        </div>
    </section>
    <section class="position-relative overflow-hidden">
        <div class="d-none d-lg-block position-absolute top-0 end-0 w-50 ps-5" style="">
            <img class="h-100" src="https://img.freepik.com/free-photo/football-player-pointing-lateral_1368-1819.jpg?t=st=1709934777~exp=1709938377~hmac=c06fb6e581c615b04e3c401c5cd77cc121f4465c3dd7e9fab061e536d597e46e&w=740&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080" srcset="https://img.freepik.com/free-photo/football-player-pointing-lateral_1368-1819.jpg?t=st=1709934777~exp=1709938377~hmac=c06fb6e581c615b04e3c401c5cd77cc121f4465c3dd7e9fab061e536d597e46e&w=740&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080 1080w, https://img.freepik.com/free-photo/football-player-pointing-lateral_1368-1819.jpg?t=st=1709934777~exp=1709938377~hmac=c06fb6e581c615b04e3c401c5cd77cc121f4465c3dd7e9fab061e536d597e46e&w=740&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=150 150w, https://img.freepik.com/free-photo/football-player-pointing-lateral_1368-1819.jpg?t=st=1709934777~exp=1709938377~hmac=c06fb6e581c615b04e3c401c5cd77cc121f4465c3dd7e9fab061e536d597e46e&w=740&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MjR8fG1lZGljYWx8ZW58MHwxfHx8MTY0NjAwNzc1MQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1638202993928-7267aad84c31??crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MjR8fG1lZGljYWx8ZW58MHwxfHx8MTY0NjAwNzc1MQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1638202993928-7267aad84c31??crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MjR8fG1lZGljYWx8ZW58MHwxfHx8MTY0NjAwNzc1MQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="" alt="Photo by Alexandr Podvalny" lc-helper="image">
        </div>
        <div class="container position-relative pt-6">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-start">
                    <div class="card bg-white border-0"></div>
                    <div class="lc-block mb-3">
                        <div editable="rich">
    
                            <h5 class="fw-bold">Turfs & Gyms </h5>
                        </div>
                    </div>
                    <div class="lc-block mb-4">
                        <div editable="rich">
    
                            <h1 class="display-2 fw-bold">One More Time One More Game<br></h1>
                        </div>
                    </div><!-- /lc-block -->
                    <div class="lc-block" style="">
                       
                    </div><!-- /lc-block -->
                </div><!-- /col -->
                <div class="col-lg-6 ms-lg-n4 ms-xxl-n5">
                    <div class="lc-block card card-body bg-primary text-white shadow p-5">
    
                        <div class="lc-block mb-4">
                            <div editable="rich">
    
                                <h2>Plan a game now !</h2>
                            </div>
                        </div>
                        <div class="lc-block mb-4">
                            <div editable="rich">
    
                                <p class="lead">Dive into the excitement of planning your next game with precision and passion. From strategic moves to flawless execution, our guide empowers you to meticulously curate every aspect of the game. Craft engaging challenges, map out thrilling twists, and orchestrate a memorable experience for participants. </p>
                            </div>
                        </div><!-- /lc-block -->
                        <div class="lc-block">
                            <a class="btn btn-light btn-lg" href="turf.php" role="button" lc-helper="button">Head to turf</a>
    
                        </div>
                    </div>
                </div><!-- /col -->
            </div>
            <div class="row align-items-end mt-lg-n5">
                <div class="col-lg-5 col-xl-6">
                    <div class="lc-block">
                        <img class="img-fluid rounded" src="https://img.freepik.com/free-photo/muscular-build-man-making-effort-while-weightlifting-cross-training-gym_637285-2488.jpg?t=st=1709933914~exp=1709937514~hmac=3598533ca824f85d592c53dbe4a67193b1d467ff9b8dac6c72d3c4919a91fdc5&w=1060">
                    </div><!-- /lc-block -->
                </div><!-- /col -->
                <div class="col-lg-7 col-xl-6 ms-lg-n6">
                    <div class="lc-block card card-body border-0 bg-white rounded shadow my-5">
                        <div class="row align-items-center text-center g-3">
                            <div class="lc-block col-lg-2 text-lg-start">
                               
    
                            </div><!-- /lc-block -->
                            <div class="lc-block col-lg-6">
                                <div editable="rich">
                                    <p>Embark on a transformative fitness journey as you step into our gym haven. Immerse yourself in a world of dynamic workouts, state-of-the-art equipment, and expert guidance. Elevate your well-being, sculpt your strength</p>
                                </div>
                            </div><!-- /lc-block -->
                            <div class="lc-block col-lg-4 text-lg-end">
    
                                <a class="btn btn-primary btn-lg" href="gym.php" role="button" lc-helper="button">Lift Now</a>
    
                            </div><!-- /lc-block -->
                        </div>
                    </div>
                </div><!-- /col -->
            </div>
        </div>
    </section>

   
    <section class="bg-light mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="lc-block mb-4">
                        <div class="ratio ratio-4x3 min-vh-50 m-4" lc-helper="gmap-embed">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d973481.0914490608!2d73.48309592063669!3d17.61884860089008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d18.5246164!2d73.8629674!4m5!1s0x3bc101b42288ef73%3A0xa3a0f0995523d6f1!2sbsiet%20kolhapur!3m2!1d16.7138951!2d74.2383921!5e0!3m2!1sen!2sin!4v1709933237359!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        </div>
                    </div><!-- /lc-block -->
                </div><!-- /col -->
                <div class="col-md-6 px-5">
                    <div class="lc-block mb-4">
                        <div editable="rich">
                            <h2 class="display-6 fw-bolder">Our Office<p></p>
                                <p></p>
                            </h2>
                        </div>
                    </div>
                    <div class="lc-block mb-4">
                        <div editable="rich">
                            <p class="lead">BSIET, warna coloney , Kolhapur</p>
                            <p class="lead">+91 7028643356</p>
                            <p class="lead">thefitplay@gmail.com</p>

                        </div>
                    </div>
                    <div class="lc-block mb-4">
                        <div editable="rich">
                            <p>"Energize Your Life, Play Your Way to Health!"</p>
                        </div>
                        <a href="contactu.php"><button class="btn btn-primary btn-lg me-md-3" type="button">Contact Us</button></a>

                    </div><!-- /lc-block -->
                </div><!-- /col -->
            </div>
        </div>
    </section>
    
   

    <p class="m-4 small text-center text-muted"> Developed By Team FitPlay</a>
    </p>
<!-- moodel start -->
<div class="mobile-modal">
<div class="mobile-modal-content">
    <h2>Website is Under Construction</h2>
    <img src="52530.jpg" alt="Mobile Image" style="max-width: 100%; height: 50%;margin:10px;">
    <p>Sorry, this website is under construction and be available on mobile devices soon...</p>
</div>
</div>
  
  <style>
     /* Media query for mobile devices */
     .mobile-modal{
        display:none;
     }
  @media only screen and (max-width: 600px) {
    /* Styling for the modal */
    .mobile-modal {
      display: block;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9999;
      text-align: center;
    }

    .mobile-modal-content {
      background-color: #fff;
      max-width: 80%;
      margin: 10% auto;
      padding: 20px;
      border-radius: 8px;
    }
    .ok-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
}
  </style>
  <script>
    function openModal() {
    document.querySelector('.mobile-modal').style.display = 'block';
    // Disable background interaction
    document.body.style.pointerEvents = 'none';
  }
  </script>
  <!-- modal end -->



    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script defer src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js" onload="const lightbox = GLightbox({});"></script>
    <!-- lazily load the gLightbox CSS file -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

</body>

</html>
