<?php
	$server = 'localhost';
	$user = 'root';
	$db = 'fitplay_users';
	$pass = '';
	$coni = mysqli_connect($server, $user, $pass, $db);

	if (!$coni) {
		die(mysqli_error($coni));
	}

	// Assuming you have a user ID stored in the session, adjust this according to your authentication mechanism
	$user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : null;

	// Fetch items from the order_his table for the specific user
	$sql = "SELECT * FROM `order_his` WHERE `user_id` = '$user_id'";
	$result = mysqli_query($coni, $sql);

	if ($result === false) {
		die('Query failed: ' . mysqli_error($coni));
	}
	$rowCount = mysqli_num_rows($result);
?>


<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="mycart_css.scss">
  </head>
  <body>
    <style>
     
    </style>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<h1><a href="index.html" class="logo">FITPLAY</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#"><span class="fa fa-home"></span> Home</a>
          </li>
          <li>
              <a href="#"><span class="fa fa-user"></span> About</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sticky-note"></span> Blog</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cogs"></span> Services</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-paper-plane"></span> Contacts</a>
          </li>
        </ul>

        <div class="footer">
        	<p>
					 </p>
        </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

          
          </div>
        </nav>

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
                             <h2>MY <b>CARTS</b></h2>
                         </div>
                         <div class="col-sm-6">
                             <a href="#addturf" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>CHECKOUT</span></a>                      
                         </div>
                     </div>
                 </div>
                 <table class="table table-striped table-hover">
                     <thead>
                         <tr>
                          <th>id</th>
                          <th>Sr No.</th>
                          <th>Product Name</th>
                          <th>Price</th>                 
                          <th>Quantity</th>
                          <th>Total</th>
                          <th>Remove Item</th>
                         </tr>
                     </thead>
                     <tbody>
                      <?php
                      $grandTotal=0;
                      $sr=0;
                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $iid=$row['item_id'];
                        $item_name = $row['item_name'];
                        $price = $row['price'];
                        $quantity = $row['quantity'];
                        $total= $price*$quantity;
                        $grandTotal = $grandTotal + $total;
                        $sr++;

                        echo '<tr>
                        <td>' . $iid . '</td>
                            <td>' . $sr . '</td>
                            <td scope="row">' . $item_name . '</td>
                            <td>' . $price . '</td>
                            <td>' . $quantity . '</td>
                            <td>' . $total . '</td>
                            <td>
            <a href="del_product.php?deleteid=' . $iid . '" class="text text-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 32">
                    <path d="M 13 3 L 13 4 L 4 4 L 4 6 L 6 6 L 6 28 L 26 28 L 26 6 L 28 6 L 28 4 L 19 4 L 19 3 L 13 3 z M 8 6 L 24 6 L 24 26 L 8 26 L 8 6 z M 11 9 L 11 23 L 13 23 L 13 9 L 11 9 z M 19 9 L 19 23 L 21 23 L 21 9 L 19 9 z"></path>
                </svg>
            </a>
        </td>
                        </tr>';
                    } 
                } else {
                    echo "<tr><td colspan='3'>No items in the cart.</td></tr>";
                }
                ?>    
                      
                </tbody>  
                </table>
                  
             </div>
         </div>        
     </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>