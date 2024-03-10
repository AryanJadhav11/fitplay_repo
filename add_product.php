<?php 

$server='localhost';
$user='root';
$db='fitplay_users';
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
    $itemname = $_POST['item_name'];
    $about = $_POST['about'];
    $price=$_POST['Price'];
    
   // $cid=$_POST['cate_id'];


    // image upload 
    $filename=$_FILES['pic']['name'];
    $tmpname=$_FILES['pic']['tmp_name'];
    $size=$_FILES['pic']['size'];
    $destination="upload/".$filename;
    if($size<=20000000)
    {
      move_uploaded_file($tmpname, $destination);
      $sqlipro = "INSERT INTO `product_cards`(`item_name`, `pic`, `about`, `Price`) VALUES ('$itemname', '$filename','$about','$price')";
       $respro = mysqli_query($con, $sqlipro);
        if ($respro) {
      $showsucpro="U just launched product";
       
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

<style>
    .wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
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
#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
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
    background: #6d7fcc;
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
<script>
$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        </script>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>



  </style>
    </style>

    

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                    <a href="admin_turf.php" style="text-decoration:none;">Manage Turf</a>
                    
                </li>
                <li class="active">
                    <a href="bookedturf.php" style="text-decoration:none;">Booking</a>
                </li>
                <li class="active">
                    <a href="requests.php" style="text-decoration:none;">Requests</a>
                </li>
                
                <li class="active">
                    <a href="admin.php" style="text-decoration:none;">Overview</a>
                    
                </li>
               
                

            
        </nav>
         <!-- End of Sidebar -->
         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <!-- Topbar -->
               <div id="content">

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background:#f8f9fa;">
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


echo '<div style="display: flex; align-items: center;"><h6 style="color:white; font-weight:700;">' . $userName . '</h6><div class="avatar" style="margin-left: 3px;"><a href="user_profile.php" style="color:white; text-decoration:none;">' . $userInitials . '</a></div></div>';

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
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
<!-- Main Content -->
<div id="content">
   <!-- Topbar -->
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
                  <h5 class="mb-2 text-gray-800">Products</h5>
                  <!-- DataTales Example -->
                  <div class="col-xl-6 col-lg-5">
                  <div class="card">
                  	<div class="card-header">
                  <form action=""method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label >Add product name</label>
    <input type="text" name="item_name"  class="form-control" id="cat_name_enter"  placeholder="Name of product" style="width:220px;" required>
  </div>
  <div class="form-group">
    <label >Add Price</label>
    <input type="text" name="Price"  class="form-control" id="cat_name_enter"  placeholder="Add price" style="width:220px;" required>
  </div>
  <div class="mb-3">
  <label >Add Product Description</label>
   <textarea required class="form-control" name="about" id="bl"></textarea>
   <script>
         CKEDITOR.replace( 'bl' );
      </script>
  </div>
  <div class="mb-3">
  <label >Add Product Photo</label>
   <input type="file" name="pic" class="form-control">

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
