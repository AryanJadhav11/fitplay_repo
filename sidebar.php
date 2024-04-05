<?php session_start(); ?>
<?php include('floating_icon.php'); ?>

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



<html lang="en">
  <head>
  <title>FitPlay - Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="all.css">
  </head>
  <body>
		<div class="wrapper d-flex align-items-stretch" >
			<nav id="sidebar" class="active"style="background-color:#1a85df;" >
				<h1><a href="index.html" class="logo">F<span style="color:#005500;">P.</a></h1>
        <ul class="list-unstyled components mb-5" style="color:black;">
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

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

<body class="py-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1 class="py-2 pb-0">MY CART</h1>
            </div>
            <div class="col-lg-9">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <style>
    table {
    
        float: left;
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    th, td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ddd;
    }
    td{
        height: 121px;
        }
    th {
        background-color: #54AAF2;
        font-weight: bold;
        color:#252525;
    }
    tr {
        font-size:20px ;
        text-transform: uppercase;
        font-weight: bold;
        background-color: #F8F9FA;

        
        
    }
    img {
        max-width: 100px;
        height: auto;
        border-radius: 8px;
    }

    svg:hover{
        box-shadow:0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }
</style>

<table>
    <thead style="color:black;">
        <tr>
            <th>Image</th>
            <th>Product Name</th>
            <th>Price</th>                 
            <th>Quantity</th>
            <th>Total</th>
            <th>Remove Item</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $grandTotal = 0;
        $sr = 0;
        if ($rowCount > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $img = $row['img'];                        
                $iid = $row['item_id'];
                $item_name = $row['item_name'];
                $price = $row['price'];
                $quantity = $row['quantity'];
                $total = $price * $quantity;
                $grandTotal = $grandTotal + $total;
                $sr++;

                echo '<tr>
                        <td><img src="upload/'. $img .'" alt="Product Image"></td>
                        <td>' . $item_name . '</td>
                        <td>' . $price . '</td>
                        <td>' . $quantity . '</td>
                        <td>' . $total . '</td>
                        <td>
                            <a href="del_product.php?deleteid=' . $iid . '" class="text text-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32 32" color="red">
                                    <path d="M 13 3 L 13 4 L 4 4 L 4 6 L 6 6 L 6 28 L 26 28 L 26 6 L 28 6 L 28 4 L 19 4 L 19 3 L 13 3 z M 8 6 L 24 6 L 24 26 L 8 26 L 8 6 z M 11 9 L 11 23 L 13 23 L 13 9 L 11 9 z M 19 9 L 19 23 L 21 23 L 21 9 L 19 9 z"></path>
                                </svg>
                            </a>
                        </td>
                    </tr>';
            } 
        } else {
            echo "<tr><td colspan='6'>No items in the cart.</td></tr>";
        }
        ?>    
    </tbody>  
</table>
                          
            </div>

            <div class="col-lg-3 mt-5">
                <div class="border bg-light rounded p-4">

                    <h4 class="p-2"style="background-color: #54AAF2; border-radius: 5px; color:#252525;">Grand Total:</h4><br>
       
                    <h5 class="text-right" id="gtotal" name="gtotal_name" style="color:#252525;"></h5>
                    <script>
                      document.getElementById("gtotal").innerHTML = '<?php echo $grandTotal; ?>.00 INR';
                    </script>
                    <style>
                    .btn:hover{ 
                    box-shadow:0 8px 10px 0 rgba(0,0,0,0.24),0 13px 45px 0 rgba(0,0,0,0.19);
                    font-family: monospace;
                    }
                    </style>
            <div class="pt-2">
                 <a href="payment_shop.php"><button type="" class="btn btn-primary btn-block " style="width: 100%; color: #000000; background-color: #54AAF2; text-transform: uppercase;font-weight: bold;">Checkout</button></a>
            </div>
                    
                    </div>     
                </div>
            </div>
        </div>
    </div>






       
       </div>
		</div>

    <script src="sidebar_js/bootstrap.min.js"></script>
    <script src="sidebar_js/popper.js"></script>
    <script src="sidebar_js/jquery.min.js"></script>
    <script src="sidebar_js/main.js"></script>
  </body>
</html>