<?php 
$server = 'localhost';
$user = 'root';
$db = 'turf';
$pass = '';

$coni = mysqli_connect($server, $user, $pass, $db);




if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get booking information from the form
  $name = isset($_POST['turfname']) ? $_POST['turfname'] : ''; 
  $date = isset($_POST['date']) ? $_POST['date'] : '';
  $startTime = isset($_POST['startTime']) ? $_POST['startTime'] : '';
    $endTime = isset($_POST['endTime']) ? $_POST['endTime'] : '';
  $userName = isset($_POST['userName']) ? $_POST['userName'] : '';
  $userEmail = isset($_POST['userEmail']) ? $_POST['userEmail'] : '';

  $time = $startTime . " - " . $endTime;

  if (strtotime($date) < strtotime(date('Y-m-d'))) {
      echo "<script>alert('Please select a valid future date.')</script>";
      // Handle the error as needed
      // You might want to redirect or display an error message
      exit;
  }

  // Check if the chosen date and time slot is already booked for the specific turf
  $checkSql = "SELECT * FROM booking WHERE turfname = '$name' AND date = '$date' AND time = '$time'";
  $result = $coni->query($checkSql);
  if ($result && $result->num_rows > 0) {
    // Turf is already booked for the selected date and time
    echo"<script>alert('This slot is already booked')</script>";
    $response['success'] = false;
    $response['error'] = 'The selected turf is already booked on the specified date and time. Please choose a different date and time.';
} 
else {
            $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : 0;
            $insertSql = "INSERT INTO booking (userid, turfname, date, time, userName, userEmail) 
                            VALUES ('$user_id', '$name', '$date', '$time', '$userName', '$userEmail')";
                             if ($coni->query($insertSql) === TRUE) {
                              echo"Booking added";
                             }
        }
}
?>

<?php

//database connectivity testing//
$con = mysqli_connect("localhost", "root", "", "turf");
?>
<?php
session_start();

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

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Booked Turf</title>
      <!-- admin card -->
      <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/cards/card-1/assets/css/card-1.css">
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="vendor/css/sb-admin-2.css" rel="stylesheet">

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
   

       
        body {
	color: #566787;
	background: #f5f5f5;
	
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}

.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    



/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
/*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
.booking-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        } 

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #f8f9fa;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

       




  </style>
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <?php include('panel_bar.php'); ?>
         <!-- End of Sidebar -->
         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <!-- Topbar -->
               <div id="content">

<nav class="navbar navbar-expand-lg navbar-light " style="background:#d8ebfe;">
    <div class="container-fluid">

    <a href="index_home.php"> <button type="button" id="sidebarCollapse" class="btn btn-info">
            
            <span>Back to home</span>
        </button></a>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="turf.php">Turfs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gym.php">Gym</a>
                </li>
                <?php
if (isset($_SESSION['user_data'])) {
// If the user is logged in, display username and "View Profile"
$userName = $_SESSION['user_data']['username']; // Assuming username is at index 2
$userInitials = getInitials($userName); // Replace getInitials with your actual function


echo '<div style="display: flex; align-items: center;"><h6 style="color:white; font-weight:700;"></h6><div class="avatar" style="margin-left: 3px;"><a href="user_profile.php" style="color:white; text-decoration:none;">' . $userInitials . '</a></div></div>';

} else {
// If the user is not logged in, display login button
echo '<button type="button" class="btn btn-primary ms-1 ml-3"><a href="signup.php"  style="color:white; text-decoration:none;">Sign Up</a></button>';
echo '<span>    </span>';
echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>';
}
?>
            </ul>
        </div>
    </div>
</nav>
               <!-- End header -->
               <!-- Begin Page Content -->
              


                        <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Bookings</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addbooking" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add new booking</span></a>                      
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th>Sr.No</th>
                                    <th>Turf Name</th>                  
                                    <th>Booked Date</th>
                                    <th>Time</th>
                                    <th >User Name</th>
                                    <th >User Mail</th>
                                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php

if (isset($_GET['deleteid'])) {
  // Get the turf ID to be deleted
  $deleteid = $_GET['deleteid'];

  // Perform the DELETE query
  $deleteSql = "DELETE FROM `booking` WHERE `boid` = '$deleteid'";
  $deleteResult = mysqli_query($conn, $deleteSql);

  // Check if the DELETE query was successful
  if ($deleteResult === false) {
      die("Deletion failed: " . mysqli_error($conn));
  } else {
      
  }
}

$sql = "SELECT * FROM `booking` ORDER BY boid DESC";
$result = mysqli_query($conn, $sql);

if ($result === false) {
    die("Query failed: " . mysqli_error($conn));
}

$rowCount = mysqli_num_rows($result);

if ($rowCount > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $tid = $row['boid'];
        $tname = $row['turfname'];
        $tdate = $row['date'];
       $time=$row['time'];
        $usermail=$row['userEmail'];
        $username=$row['userName'];


        echo '<tr>
                <td scope="row">' . $tid . '</td>
                <td>' . $tname . '</td>
                <td>' . $tdate . '</td>
                <td>' . $time . '</td>
               
                <td>' . $usermail . '</td>
                <td>' . $username . '</td>
                <td>
                <a href="?deleteid=' . $tid . '" class="text text-dark" style="color:black;">
                        Release Turf
                    </a>
                </td>
                <td>
                   
            </tr>';
    }
} else {
    echo "<tr><td colspan='6'>No rows found.</td></tr>";
}
?>
                </tbody>
            </table>
        </div>
    </div>        
</div>




<div id="addbooking" class="modal fade">
<div class="modal-dialog">
        <div class="modal-content">
        <form id="bookingForm" method="post">
            <div class="form-group">
                <label for="turfname">Turf Name:</label>
                <input type="text" id="turfname" name="turfname"  class="form-control" >
            </div>
            <div class="form-group">
                <label for="turfname">Price:</label>
                <input type="text" id="price" name="price"  class="form-control" >
            </div>
            
            <div class="form-group">
                <label for="bookingDate">Select Date:</label>
                <input type="date" id="bookingDate" name="date" class="form-control" required>
            </div>
            <label for="bookingDate">Select Time:</label>
        <!-- ... (previous form elements) ... -->
        <div class="form-group">
    <label>Timing</label>
    <input type="time" name="startTime" class="form-control" placeholder="Enter starting time" style="width:220px;" required>
    <input type="time" name="endTime" class="form-control" placeholder="Enter ending time" style="width:220px;" required>
</div>

   
            <div class="form-group">
                <label for="userName">Customers  Name:</label>
                <input type="text" id="userName" class="form-control" placeholder="Enter Your Name" name="userName" required>
            </div>
            <div class="form-group">
                <label for="userEmail">Customers Email:</label>
                <input type="email" id="userEmail" class="form-control" placeholder="Enter Your Email" name="userEmail" required>
            </div>
            <input type="hidden" id="razorpay_payment_id" name="razorpay_payment_id" value="">
            <div class="pt-3">
            <button   type="submit" value="Submit" class="btn btn-primary btn-block " style="width: 100%;">Confirm Booking</button>
            </div>
        </form>
        </div>
    </div>
</div>

                




                        </body>
                        </html>

