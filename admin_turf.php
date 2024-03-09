

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

$showsuc=false;
$showerrr=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stit = $_POST['name'];
    $cont = $_POST['details'];
    $ame1=$_POST['amen1'];
    $ame2=$_POST['amen2'];
    $ame3=$_POST['amen3'];
    $ame4=$_POST['amen4'];
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
      $sqli = "INSERT INTO `grd`(`name`, `details`, `image`, `price`, `owner`, `place`, `loc`, `start`, `end`, `amenitiy1`, `amenitiy2` , `amenitiy3` , `amenitiy4`) VALUES ('$stit', '$cont','$filename','$pri','$owner','$pla','$li','$startt','$endt','$ame1','$ame2','$ame3','$ame4')";
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

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
               <div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Turfs</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addturf" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add new turf</span></a>                      
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Turf Id</th>
                        <th>Turf Name</th>
                        <th>Owner</th>
                        <th>Launch Date</th>
                        <th>Address</th>
                        <th>Del</th>
                        <th>Edit</th>
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
                                $pl = $row['place'];

                                echo '<tr>
                                        <td scope="row">' . $tid . '</td>
                                        <td>' . $tname . '</td>
                                        <td>' . $towner . '</td>
                                        <td>' . $pubdate . '</td>
                                        <td>' . $pl . '</td>
                                        <td>
                                            <a href="#" class="delete" data-toggle="modal" data-target="#deleteConfirmation" data-turfid="' . $tid . '">
                                                <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="edit_turf.php?editid=' . $tid . '" class="edit" data-toggle="modal">
                                                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
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

<!--Add turf modal-->
<!-- Add New Turf Modal HTML -->
<div id="addTurf" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
        <form action="turf_add.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header">                        
                    <h4 class="modal-title">Add a New Turf</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Add a new turf</label>
                        <input type="text" name="name" class="form-control" placeholder="Name of turf" style="width:220px;" required>
                    </div>
                    <div class="form-group">
                        <label>Add an Owner Name</label>
                        <input type="text" name="owner" class="form-control" placeholder="Name of Owner" style="width:220px;" required>
                    </div>
                    <div class="mb-3">
                        <label>Add Details</label>
                        <textarea required class="form-control" name="details" id="bl"></textarea>
                        <script>
                            CKEDITOR.replace('bl');
                        </script>
                    </div>
                    <div class="container">
                        <div class="mb-6">
                            <label>Add Amenities</label>
                            <input type="text" name="amen1" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Add Amenities</label>
                            <input type="text" name="amen2" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Add Amenities</label>
                            <input type="text" name="amen3" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Add Amenities</label>
                            <input type="text" name="amen4" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Add Turf Photo</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" name="place" class="form-control" placeholder="Location of turf" style="width:220px;" required>
                    </div>
                    <div class="form-group">
                        <label>Your Turf Location Map</label>
                        <input type="text" name="link" class="form-control" placeholder="Map of turf" style="width:220px;" required>
                    </div>
                    <div class="form-group">
                        <label>Timing</label>
                        <input type="time" name="start" class="form-control" placeholder="Enter starting time" style="width:220px;" required>
                        <input type="time" name="end" class="form-control" placeholder="Enter ending time" style="width:220px;" required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control" placeholder="Price of turf" style="width:220px;" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add Turf">
                </div>
            </form>
        </div>
    </div>
</div>




<!-- Delete Modal HTML -->
<div id="deleteConfirmation" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="del_turf.php" method="GET">
                <div class="modal-header">                        
                    <h4 class="modal-title">Confirm Deletion</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this turf?</p>
                    <input type="hidden" name="deleteid" id="deleteTurfId">
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.delete').click(function(){
            var turfId = $(this).data('turfid');
            $('#deleteTurfId').val(turfId);
        });
    });
</script>


   


</div>
               <!-- /.container-fluid -->
            
         


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
      </footer>
   </body>













</html>
