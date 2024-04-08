<?php
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: signup.php");
    exit;
}
include('header.php');
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
$sql = "SELECT * FROM `booking` WHERE `user_id` = '$user_id'";
$result = mysqli_query($conme, $sql);

if ($result === false) {
    die("Query failed: " . mysqli_error($conme));
}

$rowCount = mysqli_num_rows($result);
?>
<?php 
// Database connection



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
    
        .table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 43px 132px;
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




  </style>


<body>
<div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Your <b>Bookings</b></h2>
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
$sql = "SELECT * FROM `booking` WHERE user_id='$user_id'";
$result = mysqli_query($conme, $sql);

if ($result === false) {
    die("Query failed: " . mysqli_error($conme));
}

$rowCount = mysqli_num_rows($result);

if ($rowCount > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $tid = $row['user_id'];
        $tname = $row['turfname'];
        $tdate = $row['date'];
       $times=$row['startTime'];
       $timee=$row['endTime'];
        $usermail=$row['userEmail'];
        $username=$row['userName'];
        $combinedTime = $times . ' to ' . $timee;


        echo '<tr>
                <td scope="row">' . $tid . '</td>
                <td>' . $tname . '</td>
                <td>' . $tdate . '</td>
                <td>' . $combinedTime . '</td>
               
                <td>' . $usermail . '</td>
                <td>' . $username . '</td>
                <td>
               
                    <a href="delbook.php?deleteid=' . $tid . '" class="btn btn-primary" > <span style="color:white;">Cancel Booking</span></a>                      

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

        </div>
    </div>
</body>

</html>