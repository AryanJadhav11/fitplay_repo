<?php
session_start();

$server = 'localhost';
$user = 'root';
$db = 'turf';
$pass = '';

$conme = mysqli_connect($server, $user, $pass, $db);

if (!$conme) {
    die(mysqli_error($conme));
}

// Assuming you have a user ID stored in the session, adjust this according to your authentication mechanism
$user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : null;

// Check if user is not logged in
// if ($user_id === null) {
//     // Handle the case where the user is not logged in, redirect or display a message
//     // For example, you can redirect to the login page:
//     header("Location: login.php");
//     exit;
// }

// Fetch items from the order_his table for the specific user
$sql = "SELECT * FROM `booking` WHERE `userid` = '$user_id'";
$result = mysqli_query($conme, $sql);

if ($result === false) {
    die("Query failed: " . mysqli_error($conme));
}

$rowCount = mysqli_num_rows($result);
?>
<?php 
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "turf";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getInitials($name) {
    $nameParts = explode(" ", $name);
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

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
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="index.html">Fit<span style="color: green">Play.</span></a></h1>
        <nav id="navbar" class="navbar">
            <ul>
                
                <li class="dropdown">
                    <a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Gyms</a></li>
                        <li><a href="turf.php">Turf</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="contactu.php">Contact</a></li>
                <li>
                <?php 

                $count=0;
                if(isset($_SESSION['user_data']))
      {
        $count=count($_SESSION['user_data']);
      }
                
                ?>
               
                </li>

                <li class="dropdown" style="color: blue;">
<?php
                if (isset($_SESSION['user_data'])) {
                  $userName = $_SESSION['user_data']['username'];
                  $userInitials = getInitials($userName);
              
                  echo '<a href="#"><span>';
                  echo '<div class="avatar">' . $userInitials . '</div>';
                  echo '<ul><li><a href="user_profile.php">View Profile</a></li>';
              
                  // Now you can directly access 'Rolee' without additional checks
                  if ($_SESSION['user_data']['username'] == "sk") {  // Assuming 'Rolee' is at index 4
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
            </ul>
        </nav>
    </div>
</header>


<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Bookings</h1>
            </div>
            <div class="col-lg-9">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                 <tr>
                                    <th>Turf Name</th>                                                    
                                    <th>Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Booking Name</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              
                              <tbody>
                              <?php
                        if ($rowCount > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $boid=$row['boid'];
                                $turfname = $row['turfname'];
                                $datet = $row['date'];
                                $startTimet = $row['startTime'];
                                $qendtimet = $row['endTime'];
                                $bookingname=$row['userName'];
                               

                                echo '<tr>
                                    <td scope="row">' . $turfname . '</td>
        
                                    <td>' . $datet. '</td>
                                    <td>' . $startTimet . '</td>
                                    <td>' . $qendtimet . '</td>
                                    <td>' . $bookingname . '</td>
                                    <td>
                                    <button type="button" class="btn btn-primary ms-1 ml-3">        
                    <a href="delbook.php?deleteid=' . $boid . '" class="text text-light">
                        Cancel
                    
                    </a>
                    </button>
                </td>
                                </tr>';
                            } 
                        } else {
                            echo "<tr><td colspan='3'>You have not booked a turf yet.</td></tr>";
                        }
                        ?>



                                 
                              </tbody>
                              
                           </table>
                          
            </div>

            

            </div>

        </div>
    </div>
</body>

</html>