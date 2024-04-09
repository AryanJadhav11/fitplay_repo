<?function getInitials($name) {
  $nameParts = explode(' ', $name);
  $initials = '';
  
  foreach ($nameParts as $part) {
      $initials .= strtoupper(substr($part, 0, 1));
  }
  
  return $initials;
}

?>


<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Turf Admin - Dashboard</title>

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="vendor/css/sb-admin-2.css" rel="stylesheet">
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

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

</style>
    
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <div class="wrapper">
        <!-- Sidebar  -->
       
<?php include('panel_bar.php'); ?>
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light " style="background:#d8ebfe;">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        
                        <span>Collapse Sidebar</span>
                    </button>
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

    <?php
    $server = 'localhost';
    $user = 'root';
    $db = 'turf';
    $pass = '';

    $conn = new mysqli($server, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve pending requests from the database
    $sql = "SELECT * FROM pending_requests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '
        <div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Requests</b></h2>
                    </div>
                   
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
      
                <tr>
                    <th>ID</th>
                    <th>Venue Name</th>
                    <th>Turf Owner Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Location Link</th>
                    <th>Approve</th>
                    <th>Reject</th>
                </tr>
                </thead>'
                

                ;

        while ($row = $result->fetch_assoc()) {
            echo "
           
            <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['venueName']}</td>
                    <td>{$row['fullName']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phoneNumber']}</td>
                    <td>{$row['locationLink']}</td>
                    <td>
                        <form action='approve_request.php' method='post'>
                            <input type='hidden' name='id' value='{$row['id']}'>
                            <input type='submit' name='approve' value='Approve Request'>
                        </form>
                    </td>
                    <td>
                    <form action='cancel_request.php' method='post'>
                        <input type='hidden' name='id' value='{$row['id']}'>
                        <input type='submit' name='cancel' value='Reject Request'>
                    </form>
                </td>
                </tr>
                ";
        }

        echo '</table>';
    } else {
        echo "No pending requests.";
    }

    $conn->close();
    ?>




</body>
</html>
