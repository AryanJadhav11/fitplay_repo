<!-- Php for login modal and database -->
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

$showerr = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $err = "";

    // Check if the keys are set before using them
    $form_username = isset($_POST["uname"]) ? $_POST["uname"] : "";
    $form_password = isset($_POST["password"]) ? $_POST["password"] : "";

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM `users` WHERE username=? AND password=?");
    $stmt->bind_param("ss", $form_username, $form_password);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    $num = $result->num_rows;

    if ($num) {
        $re = $result->fetch_assoc();
        $user_data = array(
            'user_id' => $re['id'],
            'firstname' => $re['firstname'],
            'lastname' => $re['lastname'],
            'username' => $re['username'],
            'email' => $re['email'],
        );
        $_SESSION['user_data'] = $user_data;

        // Redirect to turf.php after successful login
        header('Location:index_home.php');
        exit();
    } else {
        $showerr = "Invalid Email / Password";
        $_SESSION['error'] = "Invalid Email / Password";
       
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



<?php
if (isset($_SESSION['user_data'])) {
    include('floating_icon.php');
}
?>
<?php

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

if (isset($_GET['Order_id'])) {
    $oid = $_GET['Order_id'];
    $sql9pp = "SELECT * FROM `product_cards` WHERE Order_id='$oid';";
    $res9pp = mysqli_query($conn, $sql9pp);

    // Check if the query was successful
    if (!$res9pp) {
        die(mysqli_error($conn));
    }

    // Check if there are results
    if (mysqli_num_rows($res9pp) > 0) {
        $row9pp = mysqli_fetch_assoc($res9pp);
    } else {
        // Handle the case where no results were found
        echo "No results found for Order_id: $oid";
    }
}

?>



<head>
    <title>FitPlay - Product_Detail</title>
	<link rel="icon" type="image/png" href="favicon_io/favicon.ico">
	
    <!-- cdn links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="all.css">
  </head>
  <body class="py-" style="background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
		<div class="wrapper d-flex align-items-stretch" style="height:100%;" >
			<nav id="sidebar" class="active"style="background-color:#1a85df;" style="height:100%;" >
				<h1><a href="index.html" class="logo">F<span style="color:#005500;">P.</a></h1>
        <ul class="list-unstyled components mb-5" style="color:black;">
          <li class="active">
            <a href="Home.php"><span class="fa fa-home"></span> Home</a>
          </li>
          <li>
              <a href="#"><span class="fa fa-user"></span> About</a>
          </li>
          <li>
            <a href="mycart.php"><span class="fa fa-shopping-cart"></span> Cart</a>
          </li>
          <li>
            <a href="gym.php"><span class="fa fa-child"></span> Gym</a>
          </li>
          <li>
            <a href="turf.php"><span class="fa fa-futbol-o"></span> Turfs</a>
          </li>
		  <li>
            <a href="contactu.php"><span class="fa fa-paper-plane"></span> Contacts</a>
          </li>
          
        </ul>

    	</nav>

        <!-- Page Content  -->


<?php
// Start the session if it's not started already

// Check if the Add_To_Cart button is clicked
// Check if the Add_To_Cart button is clicked
if (isset($_POST['Add_To_Cart'])) {
    // Retrieve user_id from the session
    $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : 0;
    // Get item details from the form using the correct names
    $item_name = isset($_POST['item_name']) ? $_POST['item_name'] : '';
    $price = isset($_POST['Price']) ? $_POST['Price'] : '';
    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
    $img = isset($_POST['img']) ? $_POST['img'] : ''; // New addition: Retrieve image path

    // Insert the item into the order_his table, including the image path
    $sql = "INSERT INTO `order_his` (`user_id`, `item_name`, `price`, `quantity`, `img`) 
            VALUES ('$user_id', '$item_name', '$price', '$quantity', '$img')";
            
    $result = mysqli_query($conn, $sql);

    // Check if the insertion was successful
    if ($result) {
        echo '<!-- Hidden alert modal -->
		<div id="alertModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
					<h4 class="text-center">
					<img src="proimg/like.gif" alt="Like" class="mr-2"> <!-- Assuming you want to display the like image -->
					<span id="alertMessage"></span> <!-- Your message goes here -->
				</h4>
					</div>
					<div class="modal-footer justify-content-center"> <!-- Centering the footer -->
						<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button> <!-- Adding the OK button -->
					</div>
				</div>
			</div>
		</div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>



    <!-- start -->
    <!--Important link from https://bootsnipp.com/snippets/XqvZr-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"><div class="pd-wrap">
		
	<form method="POST">
	<div class="container " style="margin-left:335px;">
	        <div class="heading-section">
	            <hr><h2>Product Details</h2><hr>
	        </div>
	        <div class="row">
	        	<div class="col-md-6">
				<div id="slider" class="owl-carousel product-slider">
    <?php
    $imgip = $row9pp['pic'];
    if (!empty($imgip) && file_exists("upload/$imgip")) {
        echo '<div class="item">';
        echo "<img src='upload/$imgip' alt='Product Image' width='350px' height='450px'>";
        echo '</div>';
    } else {
        echo '<div class="item">';
        echo "<img src='proimg/no-image.png' alt='Default Image' width='350px' height='450px'>";
        echo '</div>';
    }
    ?>

    <?php
    $imgip = $row9pp['pic1'];
    if (!empty($imgip) && file_exists("upload/$imgip")) {
        echo '<div class="item">';
        echo "<img src='upload/$imgip' alt='Product Image' width='350px' height='450px'>";
        echo '</div>';
    } else {
        echo '<div class="item">';
        echo "<img src='proimg/no-image.png' alt='Default Image' width='350px' height='450px'>";
        echo '</div>';
    }
    ?>

    <?php
    $imgip = $row9pp['pic2'];
    if (!empty($imgip) && file_exists("upload/$imgip")) {
        echo '<div class="item">';
        echo "<img src='upload/$imgip' alt='Product Image' width='350px' height='450px'>";
        echo '</div>';
    } else {
        echo '<div class="item">';
        echo "<img src='proimg/no-image.png' alt='Default Image' width='350px' height='450px'>";
        echo '</div>';
    }
    ?>
</div>

<div id="thumb" class="owl-carousel product-thumb pt-5">
    <?php
    $imgip = $row9pp['pic'];
    if (!empty($imgip) && file_exists("upload/$imgip")) {
        echo '<div class="item px-3">';
        echo "<img src='upload/$imgip' alt='Product Image' width='350px' height='450px'>";
        echo '</div>';
    } else {
        echo '<div class="item px-3">';
        echo "<img src='proimg/no-image.png' alt='Default Image' width='350px' height='450px'>";
        echo '</div>';
    }
    ?>

    <?php
    $imgip = $row9pp['pic1'];
    if (!empty($imgip) && file_exists("upload/$imgip")) {
        echo '<div class="item px-3">';
        echo "<img src='upload/$imgip' alt='Product Image' width='350px' height='450px'>";
        echo '</div>';
    } else {
        echo '<div class="item px-3">';
        echo "<img src='proimg/no-image.png' alt='Default Image' width='350px' height='450px'>";
        echo '</div>';
    }
    ?>

    <?php
    $imgip = $row9pp['pic2'];
    if (!empty($imgip) && file_exists("upload/$imgip")) {
        echo '<div class="item px-3">';
        echo "<img src='upload/$imgip' alt='Product Image' width='350px' height='450px'>";
        echo '</div>';
    } else {
        echo '<div class="item px-3">';
        echo "<img src='proimg/no-image.png' alt='Default Image' width='350px' height='450px'>";
        echo '</div>';
    }
    ?>
</div>


	        	</div>
	        	<div class="col-md-6">
	        		<div class="product-dtl">
        				<div class="product-info">
		        			<div class="product-name"><?= ucfirst($row9pp['item_name']) ?></div>
		        			<div class="reviews-counter">
								<div class="rate">
								    <input type="radio" id="star5" name="rate" value="5" checked />
								    <label for="star5" title="text">5 stars</label>
								    <input type="radio" id="star4" name="rate" value="4" checked />
								    <label for="star4" title="text">4 stars</label>
								    <input type="radio" id="star3" name="rate" value="3" checked />
								    <label for="star3" title="text">3 stars</label>
								    <input type="radio" id="star2" name="rate" value="2" />
								    <label for="star2" title="text">2 stars</label>
								    <input type="radio" id="star1" name="rate" value="1" />
								    <label for="star1" title="text">1 star</label>
								  </div>
								<span>3 Reviews</span>
							</div>
		        			<div class="product-price-discount"><span>₹ <?= ucfirst($row9pp['Price']) ?></span><span class="line-through">₹1999</span></div>
		        		</div>
	        			<p><?= $row9pp['about'] ?></p>

						<!-- <div class="row">
	        				<div class="col-md-6">
	        					<label for="size"><b>Size</b></label>
								<select id="size" name="size" class="form-control">
									<option>S</option>
									<option>M</option>
									<option>L</option>
									<option>XL</option>
								</select>
	        				</div> -->
				
						<!-- size and color -->
						<!-- <div class="row">
	        				<div class="col-md-6">
	        					<label for="size">Size</label>
								<select id="size" name="size" class="form-control">
									<option>S</option>
									<option>M</option>
									<option>L</option>
									<option>XL</option>
								</select>
	        				</div>
	        				<div class="col-md-6">
	        					<label for="color">Color</label>
								<select id="color" name="color" class="form-control">
									<option>Blue</option>
									<option>Green</option>
									<option>Red</option>
								</select>
	        				</div>
	        			</div> -->
						<!-- size and color -->
	        			
						<div class="product-count">
	        				<label for="size">Quantity</label>
	        				<form  class="display-flex">
							    <div class="qtyplus">+</div>
							    <input type="text" id="quantity" name="quantity" value="1" class="qty">
							    <div class="qtyminus">-</div>

								<input type="hidden" name="item_name" value="<?= $row9pp['item_name'] ?>">
                      		    <input type="hidden" name="Price" value="<?= $row9pp['Price'] ?>">
								  <input type="hidden" name="img" value="<?= $row9pp['pic'] ?>">
							</form>
	        				<?php
                  				  if(isset($_SESSION['user_data'])) {
                   				     echo '<button type="submit" name="Add_To_Cart" class="round-black-btn shop-button">Add to Cart</button>'; 
                  				      echo '<a type="button" class="round-black-btn shop-button" href="mycart.php" style="text-decoration:none;">View Cart</a>';
                  				  } else {
                  				      echo '<button type="button" class="round-black-btn" data-bs-toggle="modal" data-bs-target="#loginModal">Add to Cart</button>'; 
                   				     echo '<button type="button" class="round-black-btn" data-bs-toggle="modal" data-bs-target="#loginModal">View Cart</button>';
                  				  }
							?>

						</div>
	        		</div>
	        	</div>
	        </div>
		</form>

	        <div class="product-info-tabs">
		        <ul class="nav nav-tabs" id="myTab" role="tablist">
				  	<li class="nav-item">
				    	<a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
				  	</li>
				  	<li class="nav-item"><?php
                      $quep="SELECT id from review ORDER BY id" ;
                      $runp=mysqli_query($conn,$quep);
                      $review_row=mysqli_num_rows($runp);
                     

                      ?>
				    	<a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews <?php echo"($review_row)"; ?></a>
				  	</li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  	<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
					  A versatile Shop Experience the ease of online shopping like never before! Browse, select, and purchase your favorite items from the comfort of your home with our streamlined online shop  Discover the ultimate convenience of booking turfs online with our user-friendly platform. Whether you're organizing a sports event or casual game. 				  	</div>
				  	<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
				  		<div class="review-heading">REVIEWS</div>
				  		<p class="mb-20">There are no reviews yet.</p>
				  		<form class="review-form" method="post">
		        			<div class="form-group">
			        			<label>Your rating</label>
			        			<div class="reviews-counter">
									<div class="rate">
									    <input type="radio" id="star5" name="rate" value="5" />
									    <label for="star5" title="text">5 stars</label>
									    <input type="radio" id="star4" name="rate" value="4" />
									    <label for="star4" title="text">4 stars</label>
									    <input type="radio" id="star3" name="rate" value="3" />
									    <label for="star3" title="text">3 stars</label>
									    <input type="radio" id="star2" name="rate" value="2" />
									    <label for="star2" title="text">2 stars</label>
									    <input type="radio" id="star1" name="rate" value="1" />
									    <label for="star1" title="text">1 star</label>
									</div>
								</div>
							</div>
		        			<div class="form-group">
			        			<label>Your message</label>
			        			<textarea class="form-control" name="message"  id="message" rows="10"></textarea>
			        		</div>
			        		<div class="row">
				        		<div class="col-md-6">
				        			<div class="form-group">
					        			<input type="text" name="name" id="name"  class="form-control" placeholder="Name*">
					        		</div>
					        	</div>
				        		<div class="col-md-6">
				        			<div class="form-group">
					        			<input type="text" name="email" id="email" class="form-control" placeholder="Email Id*">
					        		</div>
					        	</div>
					        </div>
					        <button type="submit" id="subb" name="subb" class="round-black-btn">Submit Review</button>
			        	</form>
				  	</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['subb'])) {
    $uid = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : 0;
    // Retrieve form data
    $rating = $_POST["rate"];
    $message = $_POST["message"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Prepare and bind SQL statement
    $sqlREV = "INSERT INTO `review` (`id`, `username`, `content`, `email`) VALUES (?, ?, ?, ?)";

    // Prepare statement
    $stmt = $conn->prepare($sqlREV);

    // Bind parameters
    $stmt->bind_param( $uid, $name, $message, $email);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        echo "Review submitted successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>



  <style>
    .pd-wrap {
	padding: 40px 0;
	font-family: 'Poppins', sans-serif;
}
.heading-section {
	text-align: center;
	margin-bottom: 20px;
}
.sub-heading {
	font-family: 'Poppins', sans-serif;
    font-size: 12px;
    display: block;
    font-weight: 600;
    color: #2e9ca1;
    text-transform: uppercase;
    letter-spacing: 2px;
}
.heading-section h2 {
	font-size: 32px;
    font-weight: 500;
    padding-top: 10px;
    padding-bottom: 15px;
	font-family: 'Poppins', sans-serif;
}
.user-img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    position: relative;
	min-width: 80px;
	background-size: 100%;
}
.carousel-testimonial .item {
	padding: 30px 10px;
}
.quote {
	position: absolute;
    top: -23px;
    color: #2e9da1;
    font-size: 27px;
}
.name {
	margin-bottom: 0;
    line-height: 14px;
    font-size: 17px;
    font-weight: 500;
}
.position {
	color: #adadad;
	font-size: 14px;
}
.owl-nav button {
	position: absolute;
	top: 50%;
	transform: translate(0, -50%);
	outline: none;
	height: 25px;
}
.owl-nav button svg {
	width: 25px;
	height: 25px;
}
.owl-nav button.owl-prev {
	left: 25px;
}
.owl-nav button.owl-next {
	right: 25px;
}
.owl-nav button span {
	font-size: 45px;
}
.product-thumb .item img {
	height: 100px;
}
.product-name {
	font-size: 22px;
	font-weight: 500;
	line-height: 22px;
	margin-bottom: 4px;
}
.product-price-discount {
	font-size: 22px;
    font-weight: 400;
    padding: 10px 0;
    clear: both;
}
.product-price-discount span.line-through {
	text-decoration: line-through;
    margin-left: 10px;
    font-size: 14px;
    vertical-align: middle;
    color: #a5a5a5;
}
.display-flex {
	display: flex;
}
.align-center {
	align-items: center;
}
.product-info {
	width: 100%; 
}
.reviews-counter {
    font-size: 13px;
}
.reviews-counter span {
	vertical-align: -2px;
}
.rate {
    float: left;
    padding: 0 10px 0 0;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float: right;
    width: 15px;
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    font-size: 21px;
    color:#ccc;
	margin-bottom: 0;
	line-height: 21px;
}
.rate:not(:checked) > label:before {
    content: '\2605';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
.product-dtl p {
	font-size: 14px;
	line-height: 24px;
	color: #7a7a7a;
}
.product-dtl .form-control {
	font-size: 15px;
}
.product-dtl label {
	line-height: 16px;
	font-size: 15px;
}
.form-control:focus {
	outline: none;
	box-shadow: none;
}
.product-count {
	margin-top: 15px; 
}
.product-count .qtyminus,
.product-count .qtyplus {
	width: 60px;
    height: 30px;
    background: #212529;
    text-align: center;
    font-size: 19px;
    line-height: 36px;
    color: #fff;
    cursor: pointer;
}
.product-count .qtyminus {
	border-radius: 3px 0 0 3px; 
}
.product-count .qtyplus {
	border-radius: 0 3px 3px 0; 
}
.product-count .qty {
	width: 60px;
	text-align: center;
}
.round-black-btn {
	border-radius: 4px;
    background: #212529;
    color: #fff;
    padding: 7px 45px;
    display: inline-block;
    margin-top: 20px;
	margin-right: 10px;
    border: solid 2px #212529; 
    transition: all 0.5s ease-in-out 0s;
}
.round-black-btn:hover,
.round-black-btn:focus {
	background: transparent;
	color: #212529;
	text-decoration: none;
}

.product-info-tabs {
	margin-top: 25px; 
}
.product-info-tabs .nav-tabs {
	border-bottom: 2px solid #d8d8d8;
}
.product-info-tabs .nav-tabs .nav-item {
	margin-bottom: 0;
}
.product-info-tabs .nav-tabs .nav-link {
	border: none; 
	border-bottom: 2px solid transparent;
	color: #323232;
}
.product-info-tabs .nav-tabs .nav-item .nav-link:hover {
	border: none; 
}
.product-info-tabs .nav-tabs .nav-item.show .nav-link, 
.product-info-tabs .nav-tabs .nav-link.active, 
.product-info-tabs .nav-tabs .nav-link.active:hover {
	border: none; 
	border-bottom: 2px solid #d8d8d8;
	font-weight: bold;
}
.product-info-tabs .tab-content .tab-pane {
	padding: 30px 20px;
	font-size: 15px;
	line-height: 24px;
	color: #7a7a7a;
}
.review-form .form-group {
	clear: both;
}
.mb-20 {
	margin-bottom: 20px;
}

.review-form .rate {
	float: none;
	display: inline-block;
}
.review-heading {
	font-size: 24px;
    font-weight: 600;
    line-height: 24px;
    margin-bottom: 6px;
    text-transform: uppercase;
    color: #000;
}
.review-form .form-control {
	font-size: 14px;
}
.review-form input.form-control {
	height: 40px;
}
.review-form textarea.form-control {
	resize: none;
}
.review-form .round-black-btn {
	text-transform: uppercase;
	cursor: pointer;
}
  </style>

<script>
  $(document).ready(function() {
		    var slider = $("#slider");
		    var thumb = $("#thumb");
		    var slidesPerPage = 4; //globaly define number of elements per page
		    var syncedSecondary = true;
		    slider.owlCarousel({
		        items: 1,
		        slideSpeed: 2000,
		        nav: false,
		        autoplay: false, 
		        dots: false,
		        loop: true,
		        responsiveRefreshRate: 200
		    }).on('changed.owl.carousel', syncPosition);
		    thumb
		        .on('initialized.owl.carousel', function() {
		            thumb.find(".owl-item").eq(0).addClass("current");
		        })
		        .owlCarousel({
		            items: slidesPerPage,
		            dots: false,
		            nav: true,
		            item: 4,
		            smartSpeed: 200,
		            slideSpeed: 500,
		            slideBy: slidesPerPage, 
		        	navText: ['<svg width="18px" height="18px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="25px" height="25px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
		            responsiveRefreshRate: 100
		        }).on('changed.owl.carousel', syncPosition2);
		    function syncPosition(el) {
		        var count = el.item.count - 1;
		        var current = Math.round(el.item.index - (el.item.count / 2) - .5);
		        if (current < 0) {
		            current = count;
		        }
		        if (current > count) {
		            current = 0;
		        }
		        thumb
		            .find(".owl-item")
		            .removeClass("current")
		            .eq(current)
		            .addClass("current");
		        var onscreen = thumb.find('.owl-item.active').length - 1;
		        var start = thumb.find('.owl-item.active').first().index();
		        var end = thumb.find('.owl-item.active').last().index();
		        if (current > end) {
		            thumb.data('owl.carousel').to(current, 100, true);
		        }
		        if (current < start) {
		            thumb.data('owl.carousel').to(current - onscreen, 100, true);
		        }
		    }
		    function syncPosition2(el) {
		        if (syncedSecondary) {
		            var number = el.item.index;
		            slider.data('owl.carousel').to(number, 100, true);
		        }
		    }
		    thumb.on("click", ".owl-item", function(e) {
		        e.preventDefault();
		        var number = $(this).index();
		        slider.data('owl.carousel').to(number, 300, true);
		    });


            $(".qtyminus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1> 0)
                    { now--;}
                    $(".qty").val(now);
                }
            })            
            $(".qtyplus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    $(".qty").val(parseInt(now)+1);
                }
            });
		});
</script>
 <!-- end -->
	</div>


<!-- css for alert message  -->
<script>
	// Function to display custom alert message
function showAlert(message) {
    // Set the alert message
    document.getElementById("alertMessage").innerHTML = message;
    // Show the alert modal
    $("#alertModal").modal("show");
}

// Example usage:
// Call showAlert function with your message
showAlert("Item added to cart successfully!");
</script>
<!-- moodel start -->
<div class="mobile-modal">
  <div class="mobile-modal-content">
    <h2>Website is Under Construction</h2>
    <img src="52530.jpg" alt="Mobile Image" style="max-width: 100%; height: 50%;margin:10px;">
    <p>Sorry, this website is under construction and be available on mobile devices soon...</p>
  </div>
  <style>
  /* This will apply by default, hiding the modal on larger screens */
  .mobile-modal {
    display: none;
  }

  /* This media query targets screens with a max-width of 600px */
  @media only screen and (max-width: 600px) {
    .mobile-modal {
      display: block; /* Show the modal on small screens */
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9999;
      text-align: center;
    }

    .mobile-modal-content {
      background-color: #fff;
      margin: 10% auto;
      padding: 20px;
      border-radius: 8px;
      max-width: 80%;
    }
  }
</style>
<script>
    $(document).ready(function() {
		    var slider = $("#slider");
		    var thumb = $("#thumb");
		    var slidesPerPage = 4; //globaly define number of elements per page
		    var syncedSecondary = true;
		    slider.owlCarousel({
		        items: 1,
		        slideSpeed: 2000,
		        nav: false,
		        autoplay: false, 
		        dots: false,
		        loop: true,
		        responsiveRefreshRate: 200
		    }).on('changed.owl.carousel', syncPosition);
		    thumb
		        .on('initialized.owl.carousel', function() {
		            thumb.find(".owl-item").eq(0).addClass("current");
		        })
		        .owlCarousel({
		            items: slidesPerPage,
		            dots: false,
		            nav: true,
		            item: 4,
		            smartSpeed: 200,
		            slideSpeed: 500,
		            slideBy: slidesPerPage, 
		        	navText: ['<svg width="18px" height="18px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="25px" height="25px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
		            responsiveRefreshRate: 100
		        }).on('changed.owl.carousel', syncPosition2);
		    function syncPosition(el) {
		        var count = el.item.count - 1;
		        var current = Math.round(el.item.index - (el.item.count / 2) - .5);
		        if (current < 0) {
		            current = count;
		        }
		        if (current > count) {
		            current = 0;
		        }
		        thumb
		            .find(".owl-item")
		            .removeClass("current")
		            .eq(current)
		            .addClass("current");
		        var onscreen = thumb.find('.owl-item.active').length - 1;
		        var start = thumb.find('.owl-item.active').first().index();
		        var end = thumb.find('.owl-item.active').last().index();
		        if (current > end) {
		            thumb.data('owl.carousel').to(current, 100, true);
		        }
		        if (current < start) {
		            thumb.data('owl.carousel').to(current - onscreen, 100, true);
		        }
		    }
		    function syncPosition2(el) {
		        if (syncedSecondary) {
		            var number = el.item.index;
		            slider.data('owl.carousel').to(number, 100, true);
		        }
		    }
		    thumb.on("click", ".owl-item", function(e) {
		        e.preventDefault();
		        var number = $(this).index();
		        slider.data('owl.carousel').to(number, 300, true);
		    });


            $(".qtyminus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1> 0)
                    { now--;}
                    $(".qty").val(now);
                }
            })            
            $(".qtyplus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    $(".qty").val(parseInt(now)+1);
                }
            });
		});
</script>
</body>
</html>
  <!-- modal end -->