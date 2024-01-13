<?php 

$server='localhost';
$user='root';
$db='turf';
$pass='';

$con=mysqli_connect($server,$user,$pass,$db);

if(!$con)
{
 die(mysqli_error($con));
}

?>



<?php
session_start();
$showsuc=false;
$showerrr=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stit = $_POST['name'];
    $cont = $_POST['details'];
    $pri=$_POST['price'];
    $owner=$_POST['owner'];
   // $cid=$_POST['cate_id'];


    // image upload 
    $filename=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    $size=$_FILES['image']['size'];
    $destination="upload/".$filename;
    if($size<=20000000)
    {
      move_uploaded_file($tmpname, $destination);
      $sqli = "INSERT INTO `grd`(`name`, `details`, `image`, `price`, `owner`) VALUES ('$stit', '$cont','$filename','$pri','$owner')";
       $res = mysqli_query($con, $sqli);
        if ($res) {
      $showsuc="U just published launched new turf";
       
    } else {
        $showerrr="Something went wrong,sorry buddy";
    }
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
      <title>Add Turf</title>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <!-- Custom styles for this template-->
      <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

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

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
               <div class="sidebar-brand-icon rotate-n-15"> <i class="fas fa-laugh-wink"></i> </div>
               <div class="sidebar-brand-text mx-3">FitPlay</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
               <a class="nav-link" href="blogs.php"> <span>Turfs</span></a>
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
                        <!-- Dropdown - User Information -->
                       
                     </li>
                  </ul>
               </nav>
               <!-- End header -->
               <!-- Begin Page Content -->
               <div class="container-fluid">
                  <!-- Page Heading -->
                  <h5 class="mb-2 text-gray-800">Turfs</h5>
                  <!-- DataTales Example -->
                  <div class="col-xl-6 col-lg-5">
                  <div class="card">
                  	<div class="card-header">
                  <form action=""method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label >Add a new turf</label>
    <input type="text" name="name"  class="form-control" id="cat_name_enter"  placeholder="Name of turf" style="width:220px;" required>
  </div>
  <div class="form-group">
    <label >Add a Owner Name</label>
    <input type="text" name="owner"  class="form-control" id="cat_name_enter"  placeholder="Name of Owner" style="width:220px;" required>
  </div>
  <div class="mb-3">
  <label >Add Details & Ammenities</label>
   <textarea required class="form-control" name="details" id="bl"></textarea>
   <script>
         CKEDITOR.replace( 'bl' );
      </script>
  </div>
  <div class="mb-3">
  <label >Add Turf Photo</label>
   <input type="file" name="image" class="form-control">

  </div>
  <div class="form-group">
    <label >Price</label>
    <input type="text" name="price"  class="form-control" id="cat_name_enter"  placeholder="Price of turf" style="width:220px;" required>
  </div>

  

  
 <input type="submit" name="subm" value="Submit">
   <a href="admin.php"class="btn btn-secondary">Back</a>

</form>
</div>
</div>
</div>
                  
                     
                   
                  </div>
               </div>
               <!-- /.container-fluid -->
            </div>
        </div>
    </div>
</body>
</html>
