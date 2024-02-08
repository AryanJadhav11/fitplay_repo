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
    $ame=$_POST['amen'];
    $pri=$_POST['price'];
    $owner=$_POST['owner'];
    $pla=$_POST['place'];
    $li=$_POST['link'];
    $startt=$_POST['start'];
    $endt=$_POST['end'];

   // $cid=$_POST['cate_id'];


    // image upload 
    $filename=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    $size=$_FILES['image']['size'];
    $destination="upload/".$filename;
    if($size<=20000000)
    {
      move_uploaded_file($tmpname, $destination);
      $sqli = "INSERT INTO `grd`(`name`, `details`, `amenitiy`, `image`, `price`, `owner`, `place`, `loc`, `start`, `end`) VALUES ('$stit', '$cont','$ame','$filename','$pri','$owner','$pla','$li','$startt','$endt')";
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
         <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#252525;">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
               
               <b><h3 class="logo" style="font-family:Roboto Mono, sans-serif;">Fit<span style="color:grey ;font-family:Roboto Mono,sans-serif;">Play.</span></h3></b>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Utilities Collapse Menu -->
           <li class="nav-item">
    <a class="nav-link" href="admin_turf.php">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0,0,255.99599,255.99599" style="fill:#000000;">
            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <g transform="scale(10.66667,10.66667)">
                    <path d="M9.66602,2l-0.49023,2.52344c-0.82417,0.31082 -1.58099,0.74649 -2.24414,1.29102l-2.42383,-0.83594l-2.33594,4.04297l1.94141,1.6875c-0.07463,0.45823 -0.11328,0.88286 -0.11328,1.29102c0,0.40877 0.03981,0.83263 0.11328,1.29102v0.00195l-1.94141,1.6875l2.33594,4.04102l2.42188,-0.83398c0.66321,0.54482 1.42175,0.97807 2.24609,1.28906l0.49023,2.52344h4.66797l0.49024,-2.52344c0.82471,-0.31102 1.58068,-0.74599 2.24414,-1.29102l2.42383,0.83594l2.33398,-4.04102l-1.93945,-1.68945c0.07463,-0.45823 0.11328,-0.88286 0.11328,-1.29102c0,-0.40754 -0.03887,-0.83163 -0.11328,-1.28906v-0.00195l1.94141,-1.68945l-2.33594,-4.04102l-2.42188,0.83398c-0.66321,-0.54482 -1.42175,-0.97807 -2.24609,-1.28906l-0.49024,-2.52344zM11.31445,4h1.37109l0.38867,2l1.04297,0.39453c0.62866,0.23694 1.19348,0.56222 1.68359,0.96484l0.86328,0.70703l1.92188,-0.66016l0.68555,1.18555l-1.53516,1.33594l0.17578,1.09961v0.00195c0.06115,0.37494 0.08789,0.68947 0.08789,0.9707c0,0.28123 -0.02674,0.59572 -0.08789,0.9707l-0.17773,1.09961l1.53516,1.33594l-0.68555,1.1875l-1.91992,-0.66211l-0.86523,0.70898c-0.49011,0.40262 -1.05298,0.7279 -1.68164,0.96484h-0.00195l-1.04297,0.39453l-0.38867,2h-1.36914l-0.38867,-2l-1.04297,-0.39453c-0.62867,-0.23694 -1.19348,-0.56222 -1.68359,-0.96484l-0.86328,-0.70703l-1.92187,0.66016l-0.68555,-1.18555l1.53711,-1.33789l-0.17773,-1.0957v-0.00195c-0.06027,-0.37657 -0.08789,-0.69198 -0.08789,-0.97266c0,-0.28123 0.02674,-0.59572 0.08789,-0.9707l0.17773,-1.09961l-1.53711,-1.33594l0.68555,-1.1875l1.92188,0.66211l0.86328,-0.70898c0.49011,-0.40262 1.05493,-0.7279 1.68359,-0.96484l1.04297,-0.39453zM12,8c-2.19652,0 -4,1.80348 -4,4c0,2.19652 1.80348,4 4,4c2.19652,0 4,-1.80348 4,-4c0,-2.19652 -1.80348,-4 -4,-4zM12,10c1.11148,0 2,0.88852 2,2c0,1.11148 -0.88852,2 -2,2c-1.11148,0 -2,-0.88852 -2,-2c0,-1.11148 0.88852,-2 2,-2z"></path>
                </g>
            </g>
        </svg>
        <span>Manage Turfs</span>
    </a>
</li>

           <li class="nav-item">
               <a class="nav-link" href="add_turf.php"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA+ElEQVR4nN2VawqCQBSFxaigNfTaQ3967iiKtF1orUyMFtFjF18M3EBsnLmW/agDF2TU841nxjtB8PcCWsASiIGjVCRj4SfGXWAH3KnWDdgCnbrmfSBzGJd1BsZa85HMrK6uwFATi5nNu8qdcUnmLiVSLm1cu8W1oEYTKV9Ur7sLWHle1AKM5jbAvkFAZAMcLA8mBVNTPanimG1NUi0gVQBSLSD+dkSLBgFTGyBU/METBeBS2QSlcbmUVmRe1NpqLoAOcOJ9ZUC7EiCQofyNdXUBBk7zEiSvOfO+yrwU18bzNebe2huLBxSa3iKd9nlkmuvZR0fmz+gBB5XkfNZfrNIAAAAASUVORK5CYII="> <span>Add Turfs</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="add_product.php"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA+ElEQVR4nN2VawqCQBSFxaigNfTaQ3967iiKtF1orUyMFtFjF18M3EBsnLmW/agDF2TU841nxjtB8PcCWsASiIGjVCRj4SfGXWAH3KnWDdgCnbrmfSBzGJd1BsZa85HMrK6uwFATi5nNu8qdcUnmLiVSLm1cu8W1oEYTKV9Ur7sLWHle1AKM5jbAvkFAZAMcLA8mBVNTPanimG1NUi0gVQBSLSD+dkSLBgFTGyBU/METBeBS2QSlcbmUVmRe1NpqLoAOcOJ9ZUC7EiCQofyNdXUBBk7zEiSvOfO+yrwU18bzNebe2huLBxSa3iKd9nlkmuvZR0fmz+gBB5XkfNZfrNIAAAAASUVORK5CYII="> <span>Add Products</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="bookedturf.php"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA+ElEQVR4nN2VawqCQBSFxaigNfTaQ3967iiKtF1orUyMFtFjF18M3EBsnLmW/agDF2TU841nxjtB8PcCWsASiIGjVCRj4SfGXWAH3KnWDdgCnbrmfSBzGJd1BsZa85HMrK6uwFATi5nNu8qdcUnmLiVSLm1cu8W1oEYTKV9Ur7sLWHle1AKM5jbAvkFAZAMcLA8mBVNTPanimG1NUi0gVQBSLSD+dkSLBgFTGyBU/METBeBS2QSlcbmUVmRe1NpqLoAOcOJ9ZUC7EiCQofyNdXUBBk7zEiSvOfO+yrwU18bzNebe2huLBxSa3iKd9nlkmuvZR0fmz+gBB5XkfNZfrNIAAAAASUVORK5CYII="> <span>Booked Turf Record</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="Requests.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAvUlEQVR4nO2UMQrCQBBFV0E8jI0HSGOnhb138BDaCcGbeAqvYGmnQbS0D+ZJkikEd8PozhaCr1r4n//YJMS5P1qAGVAQT1Fv+QQn7Dj7BJWEvcgn0eALHm1E35MNgC1wBy5yHloKNryTWwpukk2ATM5XM8ErwEh6x08FlVKwk97SXADMpbMP9TSC4GcKHKQz7uh8L9DQJUBxg4bfFWjQvIMFUJLwZ1fGjgPT4NWElbOGlOM1ScddK1gnG0/JE938xWREqlSYAAAAAElFTkSuQmCC"> <span>Request</span></a>
            </li> 
            <li class="nav-item">
               <a class="nav-link" href="admin_pannel.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA70lEQVR4nN2SPQ4BURhFn0IiEgWik6joiUUYCjuwC3sQa5AohBVQSvRalXIoRKEiSHBkkk+M+HvPjPi59bn3vMx8Sv1FgAPnNN8h2LsEGyDhu8QJ0MV7BupegKIPgtEjQQAYC1i8C173IsBMeuVncFXAnoGg9vTzuOAosJLLSmvwSRef131RU15U12Dbwra0xqWUk9ICCD/gsnLiayClLZDy0OByaqbjcWCuMey8vAOETAUNGeg7p2tU1hiPATtgC2R8HRdBEFjyQpSBpKL5Dy6iviZACZgCE8Dyyt0qOoVTbK/cRwSWlG2g4JX77RwBQwiZRbeqJ6YAAAAASUVORK5CYII="><span>Users Cart</span></a>
            </li> 
            <li class="nav-item">
            <a class="nav-link" href="turf.php"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 30 30"
style="fill:#FFFFFF;">
    <path d="M 15 2 A 1 1 0 0 0 14.300781 2.2851562 L 3.3925781 11.207031 A 1 1 0 0 0 3.3554688 11.236328 L 3.3183594 11.267578 L 3.3183594 11.269531 A 1 1 0 0 0 3 12 A 1 1 0 0 0 4 13 L 5 13 L 5 24 C 5 25.105 5.895 26 7 26 L 23 26 C 24.105 26 25 25.105 25 24 L 25 13 L 26 13 A 1 1 0 0 0 27 12 A 1 1 0 0 0 26.681641 11.267578 L 26.666016 11.255859 A 1 1 0 0 0 26.597656 11.199219 L 25 9.8925781 L 25 6 C 25 5.448 24.552 5 24 5 L 23 5 C 22.448 5 22 5.448 22 6 L 22 7.4394531 L 15.677734 2.2675781 A 1 1 0 0 0 15 2 z M 18 15 L 22 15 L 22 23 L 18 23 L 18 15 z"></path>
</svg> <span>Home</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="turf.php"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 30 30"
style="fill:#FFFFFF;">
    <path d="M 15 2 A 1 1 0 0 0 14.300781 2.2851562 L 3.3925781 11.207031 A 1 1 0 0 0 3.3554688 11.236328 L 3.3183594 11.267578 L 3.3183594 11.269531 A 1 1 0 0 0 3 12 A 1 1 0 0 0 4 13 L 5 13 L 5 24 C 5 25.105 5.895 26 7 26 L 23 26 C 24.105 26 25 25.105 25 24 L 25 13 L 26 13 A 1 1 0 0 0 27 12 A 1 1 0 0 0 26.681641 11.267578 L 26.666016 11.255859 A 1 1 0 0 0 26.597656 11.199219 L 25 9.8925781 L 25 6 C 25 5.448 24.552 5 24 5 L 23 5 C 22.448 5 22 5.448 22 6 L 22 7.4394531 L 15.677734 2.2675781 A 1 1 0 0 0 15 2 z M 18 15 L 22 15 L 22 23 L 18 23 L 18 15 z"></path>
</svg> <span>Shop</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Tables -->
            
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Tables -->
            
			 
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            
         </ul>
         <!-- End of Sidebar -->
         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <!-- Topbar -->
               <nav class="navbar navbar-expand   topbar mb-4 static-top shadow" style="background-color:#252525;">
                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"> <i class="fa fa-bars"></i> </button>
                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto" >
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

            
            echo '<div style="display: flex; align-items: center;"><h6 style="color:white; font-weight:700;">Hello, ' . $userName . '</h6><div class="avatar" style="margin-left: 3px;"><a href="user_profile.php" style="color:white; text-decoration:none;">' . $userInitials . '</a></div></div>';
            
          } else {
            // If the user is not logged in, display login button
            echo '<button type="button" class="btn btn-primary ms-1 ml-3"><a href="signup.php"  style="color:white; text-decoration:none;">Sign Up</a></button>';
            echo '<span>    </span>';
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
  <label >Add Details</label>
   <textarea required class="form-control" name="details" id="bl"></textarea>
   <script>
         CKEDITOR.replace( 'bl' );
      </script>
  </div>
  <div class="mb-3">
  <label >Add Amenities</label>
   <input type="text" name="amen" class="form-control">
  </div>
  <div class="mb-3">
  <label >Add Turf Photo</label>
   <input type="file" name="image" class="form-control">
  </div>
  <div class="form-group">
    <label >Location</label>
    <input type="text" name="place"  class="form-control" id="cat_name_enter"  placeholder="Location of turf" style="width:220px;" required>
  </div>
  <div class="form-group">
    <label >Your Turf Location Map</label>
    <input type="text" name="link"  class="form-control" id="cat_name_enter"  placeholder="Map of turf" style="width:220px;" required>
  </div>
  <div class="form-group">
    <label >Timing</label>
    <input type="time" name="start"  class="form-control" id="cat_name_enter"  placeholder="Enter starting time" style="width:220px;" required>
    <input type="time" name="end"  class="form-control" id="cat_name_enter"  placeholder="Enter ending time" style="width:220px;" required>

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
