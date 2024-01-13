<?php 

$server='localhost';
$user='root';
$db='turf';
$pass='';

$coni=mysqli_connect($server,$user,$pass,$db);

if(!$coni)
{
 die(mysqli_error($coni));
}

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
$showalert=false;
$login=false;
$showerr=false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{ 
	$err="";
	$username=$_POST["uname"];
	//$email=$_POST["nmail"];
	$password=$_POST["password"];

    
	
	
	
		$sql="Select * from `users` where username='$username' AND password='$password';";
		$result=mysqli_query($conn,$sql);
		$num=mysqli_num_rows($result);
		
		if($num)  
		{
           
			$re=mysqli_fetch_assoc($result); // fetch user details 
            $user_data=array($re['firstname'],$re['lastname'],$re['username'],$re['email']); // store username and email of logged in user in an array
            $_SESSION['user_data']=$user_data; // set session for that user 
			header("location: turf.php");

		}
		else
		{
			$showerr="Invalid Email / Password";
            $_SESSION['error']="Invalid Email / Password";
            
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


<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Turf Admin - Dashboard</title>
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

       




  </style>
    </style>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
               <div class="sidebar-brand-icon rotate-n-15"> <i class="fa fa-laugh-wink"></i> </div>
               <b><h3 class="logo" style="font-family:Roboto Mono, sans-serif;">Fit<span style="color:grey ;font-family:Roboto Mono,sans-serif;">Play.</span></h3></b>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
               <a class="nav-link" href="Requests.php"> <span>Request</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Tables -->
            
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Tables -->
            
			 <li class="nav-item">
               <a class="nav-link" href="turf.php"> <span>Home</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
               <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
         </ul>
         <!-- End of Sidebar -->
         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <!-- Topbar -->
               <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"> <i class="fa fa-bars"></i> </button>
                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">
                     <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                     <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-search fa-fw"></i> </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow +animated--grow-in" aria-labelledby="searchDropdown">
                           
                        </div>
                     </li>
                     <!-- Nav Item - User Information -->
                     <li class="nav-item dropdown no-arrow">
          <?php
          if (isset($_SESSION['user_data'])) {
            // If the user is logged in, display username and "View Profile"
            $userName = $_SESSION['user_data'][2]; // Assuming username is at index 2
            $userInitials = getInitials($userName); // Replace getInitials with your actual function

            echo '<a href="#"><span>';
            echo '<div class="avatar"><a href="user_profile.php" style="color:white; text-decoration:none;">' . $userInitials . '</a></div>';
            
          } else {
            // If the user is not logged in, display login button
            echo '<button type="button" class="btn btn-outline-primary ms-1 ml-3"><a href="signup.php">Sign Up</a></button>';
            echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>';
          }
          ?>
        </li>
                        </span><!-- <img class="img-profile rounded-circle" src="vendor/img/undraw_profile.svg"> -->
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                           <a class="dropdown-item" href="#"> <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile </a>
                           <a class="dropdown-item" href="#"> <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings </a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" 
                              href="logout.php"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout </a>
                        </div>
                     </li>
                  </ul>
               </nav>
               <!-- End header -->
               <!-- Begin Page Content -->
               <div class="container-fluid">
                  <!-- Page Heading -->
                  <h5 class="mb-2 text-gray-800">Your Turfs</h5>
                  <!-- DataTales Example -->
                  <div class="card shadow">
                     <div class="card-header py-3 d-flex justify-content-between">
                        <div>
                           <a href="add_turf.php">
                              <h6 class="font-weight-bold text-primary mt-2">Add New</h6>
                           </a>
                        </div>
                        
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                 <tr>
                                    <th>Sr.No</th>
                                    <th>Turf Name</th>                  
                                    <th>Owner</th>
                                    <th>Launch Date</th>
                                    <th colspan="2">Action</th>
                                 </tr>
                              </thead>
                              
                              <tbody>
                              <?php
$sql = "SELECT * FROM `grd` ORDER BY grd.id DESC";
$result = mysqli_query($coni, $sql);

if ($result === false) {
    die("Query failed: " . mysqli_error($coni));
}

$rowCount = mysqli_num_rows($result);

if ($rowCount > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $tid = $row['id'];
        $tname = $row['name'];
        $towner = $row['owner'];
        $pubdate = $row['pubdate'];

        echo '<tr>
                <td scope="row">' . $tid . '</td>
                <td>' . $tname . '</td>
                <td>' . $towner . '</td>
                <td>' . $pubdate . '</td>
                <td>
                    <a href="del_turf.php?deleteid=' . $tid . '" class="text text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 32">
                            <path d="M 13 3 L 13 4 L 4 4 L 4 6 L 6 6 L 6 28 L 26 28 L 26 6 L 28 6 L 28 4 L 19 4 L 19 3 L 13 3 z M 8 6 L 24 6 L 24 26 L 8 26 L 8 6 z M 11 9 L 11 23 L 13 23 L 13 9 L 11 9 z M 19 9 L 19 23 L 21 23 L 21 9 L 19 9 z"></path>
                        </svg>
                    </a>
                </td>
                <td>
                    <a href="edit_turf.php?editid=' . $tid . '" class="text text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 64 64">
                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M45.17,15.426L21.936,41.787c0,0,4.628,2.745,5.777,6.191c5.234-6.383,25.851-29.872,25.851-29.872  c4.117-4.404-5.745-14.362-11.362-8.426c-5.617,6.128-26.011,29.745-26.011,29.745l-3.415,15.83L20.149,52   c0,0-1.197-3.878-7.372-5.17"></path>
                        </svg>
                    </a>
                </td>
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
               <!-- /.container-fluid -->
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
               <div class="container my-auto">
                  <div class="copyright text-center my-auto"> <span>Copyright &copy; FitPlay</span> </div>
               </div>
            </footer>
            <!-- End of Footer -->
         </div>
         <!-- End of Content Wrapper -->
      </div>
      <!-- End of Page Wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top"> <i class="fas fa-angle-up"></i> </a>
      <!-- Bootstrap core JavaScript-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="vendor/js/sb-admin-2.min.js"></script>
      <!-- Page level plugins -->
      <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
      <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
      <script>
         CKEDITOR.replace( 'bl' );
      </script>
   </body>
</html>