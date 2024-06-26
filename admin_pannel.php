<?php

//database connectivity testing//
$con = mysqli_connect("localhost", "root", "", "fitplay_users");
?>
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
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Turf Admin - Dashboard</title>
      <!-- admin card -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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

        :root {
  --blue: #5e72e4;
  --indigo: #5603ad;
  --purple: #8965e0;
  --pink: #f3a4b5;
  --red: #f5365c;
  --orange: #fb6340;
  --yellow: #ffd600;
  --green: #2dce89;
  --teal: #11cdef;
  --cyan: #2bffc6;
  --white: #fff;
  --gray: #8898aa;
  --gray-dark: #32325d;
  --light: #ced4da;
  --lighter: #e9ecef;
  --primary: #5e72e4;
  --secondary: #f7fafc;
  --success: #2dce89;
  --info: #11cdef;
  --warning: #fb6340;
  --danger: #f5365c;
  --light: #adb5bd;
  --dark: #212529;
  --default: #172b4d;
  --white: #fff;
  --neutral: #fff;
  --darker: black;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: Open Sans, sans-serif;
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

@-ms-viewport {
  width: device-width;
}

figcaption,
footer,
header,
main,
nav,
section {
  display: block;
}

body {
  font-family: Open Sans, sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  margin: 0;
  text-align: left;
  color: #525f7f;
  background-color: #f8f9fe;
}

[tabindex='-1']:focus {
  outline: 0 !important;
}

h2,
h5 {
  margin-top: 0;
  margin-bottom: .5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

dfn {
  font-style: italic;
}

strong {
  font-weight: bolder;
}

a {
  text-decoration: none;
  color: #5e72e4;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}

a:hover {
  text-decoration: none;
  color: #233dd2;
}

a:not([href]):not([tabindex]) {
  text-decoration: none;
  color: inherit;
}

a:not([href]):not([tabindex]):hover,
a:not([href]):not([tabindex]):focus {
  text-decoration: none;
  color: inherit;
}

a:not([href]):not([tabindex]):focus {
  outline: 0;
}

caption {
  padding-top: 1rem;
  padding-bottom: 1rem;
  caption-side: bottom;
  text-align: left;
  color: #8898aa;
}

button {
  border-radius: 0;
}

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

input,
button {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  margin: 0;
}

button,
input {
  overflow: visible;
}

button {
  text-transform: none;
}

button,
[type='reset'],
[type='submit'] {
  -webkit-appearance: button;
}

button::-moz-focus-inner,
[type='button']::-moz-focus-inner,
[type='reset']::-moz-focus-inner,
[type='submit']::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type='radio'],
input[type='checkbox'] {
  box-sizing: border-box;
  padding: 0;
}

input[type='date'],
input[type='time'],
input[type='datetime-local'],
input[type='month'] {
  -webkit-appearance: listbox;
}

legend {
  font-size: 1.5rem;
  line-height: inherit;
  display: block;
  width: 100%;
  max-width: 100%;
  margin-bottom: .5rem;
  padding: 0;
  white-space: normal;
  color: inherit;
}

[type='number']::-webkit-inner-spin-button,
[type='number']::-webkit-outer-spin-button {
  height: auto;
}

[type='search'] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type='search']::-webkit-search-cancel-button,
[type='search']::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

[hidden] {
  display: none !important;
}

h2,
h5,
.h2,
.h5 {
  font-family: inherit;
  font-weight: 600;
  line-height: 1.5;
  margin-bottom: .5rem;
  color: #32325d;
}

h2,
.h2 {
  font-size: 1.25rem;
}

h5,
.h5 {
  font-size: .8125rem;
}

.container-fluid {
  width: 100%;
  margin-right: auto;
  margin-left: auto;
  padding-right: 15px;
  padding-left: 15px;
}

.row {
  display: flex;
  margin-right: -15px;
  margin-left: -15px;
  flex-wrap: wrap;
}

.col,
.col-auto,
.col-lg-6,
.col-xl-3,
.col-xl-6 {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

.col {
  max-width: 100%;
  flex-basis: 0;
  flex-grow: 1;
}

.col-auto {
  width: auto;
  max-width: none;
  flex: 0 0 auto;
}

@media (min-width: 992px) {
  .col-lg-6 {
    max-width: 50%;
    flex: 0 0 50%;
  }
}

@media (min-width: 1200px) {
  .col-xl-3 {
    max-width: 25%;
    flex: 0 0 25%;
  }
  .col-xl-6 {
    max-width: 50%;
    flex: 0 0 50%;
  }
}

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  border: 1px solid rgba(0, 0, 0, .05);
  border-radius: .375rem;
  background-color: #fff;
  background-clip: border-box;
}

.card-body {
  padding: 1.5rem;
  flex: 1 1 auto;
}

.card-title {
  margin-bottom: 1.25rem;
}

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}

.bg-info {
  background-color: #11cdef !important;
}

a.bg-info:hover,
a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #0da5c0 !important;
}

.bg-warning {
  background-color: #fb6340 !important;
}

a.bg-warning:hover,
a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #fa3a0e !important;
}

.bg-danger {
  background-color: #f5365c !important;
}

a.bg-danger:hover,
a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #ec0c38 !important;
}

.bg-default {
  background-color: #172b4d !important;
}

a.bg-default:hover,
a.bg-default:focus,
button.bg-default:hover,
button.bg-default:focus {
  background-color: #0b1526 !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.align-items-center {
  align-items: center !important;
}

@media (min-width: 1200px) {
  .justify-content-xl-between {
    justify-content: space-between !important;
  }
}

.shadow {
  box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15) !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.mr-2 {
  margin-right: .5rem !important;
}

.mt-3 {
  margin-top: 1rem !important;
}

.mb-4 {
  margin-bottom: 1.5rem !important;
}

.mb-5 {
  margin-bottom: 3rem !important;
}

.pt-5 {
  padding-top: 3rem !important;
}

.pb-8 {
  padding-bottom: 8rem !important;
}

.m-auto {
  margin: auto !important;
}

@media (min-width: 768px) {
  .pt-md-8 {
    padding-top: 8rem !important;
  }
}

@media (min-width: 1200px) {
  .mb-xl-0 {
    margin-bottom: 0 !important;
  }
}

.text-nowrap {
  white-space: nowrap !important;
}

.text-center {
  text-align: center !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.font-weight-bold {
  font-weight: 600 !important;
}

.text-white {
  color: #fff !important;
}

.text-success {
  color: #2dce89 !important;
}

a.text-success:hover,
a.text-success:focus {
  color: #24a46d !important;
}

.text-warning {
  color: #fb6340 !important;
}

a.text-warning:hover,
a.text-warning:focus {
  color: #fa3a0e !important;
}

.text-danger {
  color: #f5365c !important;
}

a.text-danger:hover,
a.text-danger:focus {
  color: #ec0c38 !important;
}

.text-white {
  color: #fff !important;
}

a.text-white:hover,
a.text-white:focus {
  color: #e6e6e6 !important;
}

.text-muted {
  color: #8898aa !important;
}

@media print {
  *,
  *::before,
  *::after {
    box-shadow: none !important;
    text-shadow: none !important;
  }
  a:not(.btn) {
    text-decoration: underline;
  }
  p,
  h2 {
    orphans: 3;
    widows: 3;
  }
  h2 {
    page-break-after: avoid;
  }
  @ page {
    size: a3;
  }
  body {
    min-width: 992px !important;
  }
}

figcaption,
main {
  display: block;
}

main {
  overflow: hidden;
}

.bg-yellow {
  background-color: #ffd600 !important;
}

a.bg-yellow:hover,
a.bg-yellow:focus,
button.bg-yellow:hover,
button.bg-yellow:focus {
  background-color: #ccab00 !important;
}

.bg-gradient-primary {
  background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
}

.bg-gradient-primary {
  background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
}

@keyframes floating-lg {
  0% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(15px);
  }
  100% {
    transform: translateY(0px);
  }
}

@keyframes floating {
  0% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(10px);
  }
  100% {
    transform: translateY(0px);
  }
}

@keyframes floating-sm {
  0% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(5px);
  }
  100% {
    transform: translateY(0px);
  }
}

[class*='shadow'] {
  transition: all .15s ease;
}

.text-sm {
  font-size: .875rem !important;
}

.text-white {
  color: #fff !important;
}

a.text-white:hover,
a.text-white:focus {
  color: #e6e6e6 !important;
}

[class*='btn-outline-'] {
  border-width: 1px;
}

.card-stats .card-body {
  padding: 1rem 1.5rem;
}

.main-content {
  position: relative;
}

@media (min-width: 768px) {
  .main-content .container-fluid {
    padding-right: 39px !important;
    padding-left: 39px !important;
  }
}

.footer {
  padding: 2.5rem 0;
  background: #f7fafc;
}

.footer .copyright {
  font-size: .875rem;
}

.header {
  position: relative;
}

.icon {
  width: 3rem;
  height: 3rem;
}

.icon i {
  font-size: 2.25rem;
}

.icon-shape {
  display: inline-flex;
  padding: 12px;
  text-align: center;
  border-radius: 50%;
  align-items: center;
  justify-content: center;
}

.icon-shape i {
  font-size: 1.25rem;
}

@media (min-width: 768px) {
  @ keyframes show-navbar-dropdown {
    0% {
      transition: visibility .25s, opacity .25s, transform .25s;
      transform: translate(0, 10px) perspective(200px) rotateX(-2deg);
      opacity: 0;
    }
    100% {
      transform: translate(0, 0);
      opacity: 1;
    }
  }
  @keyframes hide-navbar-dropdown {
    from {
      opacity: 1;
    }
    to {
      transform: translate(0, 10px);
      opacity: 0;
    }
  }
}

@keyframes show-navbar-collapse {
  0% {
    transform: scale(.95);
    transform-origin: 100% 0;
    opacity: 0;
  }
  100% {
    transform: scale(1);
    opacity: 1;
  }
}

@keyframes hide-navbar-collapse {
  from {
    transform: scale(1);
    transform-origin: 100% 0;
    opacity: 1;
  }
  to {
    transform: scale(.95);
    opacity: 0;
  }
}

p {
  font-size: 1rem;
  font-weight: 300;
  line-height: 1.7;
}

}

       




  </style>
  <style>
    .wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #133474;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #133474;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

.navbar {
    padding: 15px 10px;
    background: #d8ebfe;
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
#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;

}

#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #133474;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
</style>
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
   </head>
   
   <body>
   <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <nav id="sidebar">
            <div class="sidebar-header">
                <h3>FitPlay</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Admin Panel</p>
                <li class="active">
                    <a href="admin_turf.php" style="text-decoration:none;" class="fa fa-cubes">Manage Turfs</a>
                </li>
                <li class="active">
                    <a href="bookedturf.php" style="text-decoration:none;" class="fa fa-calendar">   Booking</a>
                </li>
                <li class="active">
                    <a href="requests.php" style="text-decoration:none;" class="fa fa-file">      Requests</a>
                </li>
                
                <li class="active">
                    <a href="add_product.php" style="text-decoration:none;" class="fa fa-plus">      Add Product</a>
                </li>
                <li class="active">
                    <a href="admin_shop.php" style="text-decoration:none;" class="fa fa-cubes">     Manage Products</a>
                </li>
                <li class="active">
                    <a href="admin_pannel.php" style="text-decoration:none;" class="fa fa-cubes">     Shop Orders</a>
                </li>
               
                

            
        </nav>
         <!-- End of Sidebar -->
         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <!-- Topbar -->
               <div id="content">

<nav class="navbar navbar-expand-lg navbar-light " style="background:#d8ebfe;">
    <div class="container-fluid">

    <a href="home.php"> <button type="button" id="sidebarCollapse" class="btn btn-info">
            
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

<!-- THIS IS ADMIN PANEL DONE BY YASH AND ABOVE IS SIDE BAR DONE BY ARYAN -->
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered" >
                    <thead>
                        <tr>                      
                            <th scope="col">User Id</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Phone No.</th>
                            <th scope="col">Address</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Date</th>
                            <th scope="col">Buy Orders</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM `order_manager`";
                        $user_result = mysqli_query($con, $query);
                        while ($user_fetch = mysqli_fetch_assoc($user_result)) {
                          
                            //fetch from database table Row//
                            echo "
                                <tr>
                                 <th>$user_fetch[user_id]</th>
                                 <td>$user_fetch[Full_Name]</td>
                                 <td>$user_fetch[Phone_No]</td>
                                 <td>$user_fetch[Address]</td>
                                 <td>$user_fetch[Total]</td>
                                 <td>$user_fetch[date]</td>
                                 <td>
                                 
                                 <table class='table'>
                                 <thead>
                                   <tr> 
                                     <th scope='col'>Item_ID</th>
                                     <th scope='col'>Item_Name</th>
                                     <th scope='col'>Price</th>
                                     <th scope='col'>Quantity</th>
                                     <th scope='col'>DateTime</th>
                                     <th scope='col'>Payment Status</th>
                                   </tr>
                                 </thead>
                                 <tbody>                                
                                 ";
                          
                                    //Inner table connectivity//
                                    $order_query = "SELECT * FROM `buy_items` WHERE `user_ids`=$user_fetch[user_id]";
                                    $order_result = mysqli_query($con, $order_query);
                                    while ($order_fetch = mysqli_fetch_assoc($order_result)) {
                                        echo "
                                        <tr>
                                            <th>$order_fetch[item_ids]</th>
                                            <th>$order_fetch[item_names]</th>
                                            <td>$order_fetch[prices]</td>
                                            <td>$order_fetch[quantitys]</td>
                                            <td>$order_fetch[dates]</td>
                                            <td>$order_fetch[pay_stats]</td>

                                        </tr>
                                        ";
                                    }
                                    //inner table close//

                                echo "

                                    </tbody>
                                    </table>
                                    </td>
                                </tr>";

                            }
                          
                        //main table close//
                        ?>
                        

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <style>
        /* Custom CSS for the table */
        .table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #858585;
            color: #fff;
        }

        .table tbody tr:nth-of-type(even) {
            background-color: #f2f2f2;
        }

        .table tbody tr:hover {
            background-color: #e0e0e0;
        }

        .inner-table {
            border-collapse: collapse;
            width: 100%;
        }

        .inner-table th, .inner-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .inner-table th {
            background-color: #007bff;
            color: #fff;
        }

        .inner-table tbody tr:nth-of-type(even) {
            background-color: #f8f9fa;
        }

        .inner-table tbody tr:hover {
            background-color: #e2e6ea;
        }
    </style>
</body>

</html>
