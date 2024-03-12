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

// // Check if user is already logged in
// if (isset($_SESSION['user_data'])) {
//     header("Location: turf.php");
//     exit();
// }

$showalert = false;
$login = false;
$showerr = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $err = "";
    $username = $_POST["uname"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `users` WHERE username='$username' AND password='$password';";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num) {
        $re = mysqli_fetch_assoc($result);
        $user_data = array(
            'user_id' => $re['id'],
            'firstname' => $re['firstname'],
            'lastname' => $re['lastname'],
            'username' => $re['username'],
            'email' => $re['email'],
        );
        $_SESSION['user_data'] = $user_data;
        
         
        // Redirect to turf.php after successful login
        
    } else {
        $showerr = "Invalid Email / Password";
        $_SESSION['error'] = "Invalid Email / Password";
    }
}
// echo "User data in session:<br>";
// foreach ($_SESSION['user_data'] as $key => $value) {
//     echo "$key: $value<br>";
// }
// Your remaining code for the login page goes here
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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitPlay - Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            height: 100vh;
            overflow: hidden;
        }

        .custom-modal-width {
            max-width: 1000px;
        }

        .navbar .container-fluid,
        .navbar-expand-lg .navbar-collapse,
        .navbar-expand-lg .navbar-nav {
            flex-direction: column;
            align-items: flex-start;
            height: 100%;
        }

        a.nav-link {
            font-size: 30px;

        }
    </style>
</head>

<body>
  

    <div class="row h-100  ">
        <!-- Navigation bar-->
        <div class="col-md-4 p-4 " style="background-color: #424242;">
          <h1 class="fw-bold mb-0 fs-1">Fit<span style="color: rgb(147, 147, 147);">Play.</span></h1>


            <nav class="navbar navbar-expand-lg navbar-light h-100 d-flex align-items-center"
                style=" padding-top:170px ; padding-left:190px;">

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index_home.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                              </a>
                              <ul class="dropdown-menu dropdown-menu-lg-end" style="background-color: #424242;" aria-labelledby="navbarDropdown">
                                   <li><a class="nav-link" href="turf.php">Turf</a></li>
                                  <li><a class="nav-link" href="gym.php">Gym</a></li>
                                    <li><a class="nav-link" href="shop.php">Shop</a></li>
                                   <!-- Add more activity options as needed -->
                             </ul>
                         </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactu.php">Contact</a>
                        </li>

                        
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Join us</a>
                            
                        </li>
                        

                    </ul>
                </div>
            </nav>

        </div>

                <!-- profile content -->

        <div class="col-md-8" style="overflow: hidden;">
            <div class="modal-body p-5 pt-0">


                <div class="h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-12 col-xl-12">

                        <!-- avtas aahe  -->
                            <div class="mb-4">
                                    <?php
                                   if (isset($_SESSION['user_data'])) {
                                         $userName = $_SESSION['user_data']['username'];
                                          $userInitials = getInitials($userName);
                                        echo '<div class="avatar" style="width:50px;height:50px;font-size:35;">' . $userInitials . '</div>';
                                      }
                                     ?>
                            </div>

                            <h4 class="mb-2 " style="display: inline-block;" id="profile-name">               
                             <?php
                                  if (isset($_SESSION['user_data'])) {
                                    echo $_SESSION['user_data']['firstname'];
                               }
                             ?></h4>
                            <!-- edit button -->
                            
                            <!-- <button class="btn  btn-sm rounded-0 mb-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" type="button" data-toggle="tooltip" data-placement="top"
                                title="Edit"><i class="bi bi-pencil-square"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-pencil-square"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                    </svg></i></button> -->

                                    <!-- edit button pop up -->
                                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content rounded-4 shadow">
                                          <div class="modal-header p-5 pb-4 border-bottom-0">
                                            <h1 class="fw-bold mb-0 fs-2">Edit Username</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="xooqu"></button>
                                          </div>
                                    
                                          <div class="modal-body p-5 pt-0">
                                            <form class="">
                                              <div class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-3" id="floatingInput" fdprocessedid="t1u6ar" required>
                                                <label for="floatingInput">Username</label>
                                              </div>
                                              <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" fdprocessedid="j2nmr">Done</button>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- end pop up -->




                                    <!-- end edit button -->

                            <hr class="text-success">
                            
                            <div class="d-block text-cent mt-5 mb-2">

                                <div>
                                    <p class="mb-2 h5">First Name</p>
                                    <p class="text-muted mb-0" id="firstname-display">
                                        <?php
                                                if (isset($_SESSION['user_data'])) {
                                                  echo $_SESSION['user_data']['firstname'];
                                             }
                                              ?></p> 
                                </div>
                                <hr class="col-6">
                                
                                <div>
                                    <p class="mb-2 h5">Last Name</p>
                                    <p class="text-muted mb-0" id="lastname-display">
                                        <?php
                                             if (isset($_SESSION['user_data'])) {
                                               echo $_SESSION['user_data']['lastname'];
                                             }
                                         ?></p> 
                                </div>
                                <hr class="col-6">

                                <div>
                                    <p class="mb-2 h5">Username</p>
                                     
                                    <p class="text-muted mb-0" id="username-display">
                                        <?php
                                             if (isset($_SESSION['user_data'])) {
                                               echo $_SESSION['user_data']['username'];
                                             }
                                            ?></p> 
                                </div>
                                <hr class="col-6">


                                <div>
                                    <p class="mb-2 h5">Email</p>
                                    <p class="text-muted mb-0" id="email-display">
                                        <?php
                                             if (isset($_SESSION['user_data'])) {
                                               echo $_SESSION['user_data']['email'];
                                             }
                                         ?></p> 
                                </div>
                                <hr class="col-6">

                                    <!-- target===log out modal -->
                                    <a href="#" class="btn btn-lg" style="background-color: rgb(255, 36, 36);" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <span class="glyphicon glyphicon-log-out"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
                                            </svg></span> Log out </a>
                           
                               
                                <!-- log out modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        
                                        <div class="modal-body">
                                          Do you want to Log out?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Log Out</button>
                                          <button type="button" class="btn btn-primary">Cancel</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <!-- log out modal end -->



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div>
          </div>
        </div> -->
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>z