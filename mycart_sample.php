

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
	<body style="background-color:grey;">

    <!-- sidebar start -->
     <!-- Sidebar -->
     <nav id="sidebar">
            <div class="sidebar-header">
                <h3>FitPlay</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Admin Panel</p>
                <li class="active">
                    <a href="admin_turf.php" style="text-decoration:none;">Manage Turfs</a>
                    
                </li>
                 
                <li class="active">
                    <a href="bookedturf.php" style="text-decoration:none;">Booking</a>
                </li>
                
                <li class="active">
                    <a href="add_product.php" style="text-decoration:none;">Add Product</a>
                    
                </li>
               
                

            
        </nav>
    <!-- sidebar end -->
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
					<h2 class="heading-section" style="color:lightgreen;">SHOOPING CART</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						    	<th>&nbsp;</th>
						    	<th>&nbsp;</th>
						    	<th>Product</th>
						      <th>Price</th>
						      <th>Quantity</th>
						      <th>total</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox" checked>
										  <span class="checkmark"></span>
										</label>
						    	</td>
						    	<td>
						    		<div class="img" style="background-image: url(images/product-1.png);"></div>
						    	</td>
						      <td>
						      	<div class="email">
						      		<span>Sneakers Shoes 2020 For Men </span>
						      		<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
						      	</div>
						      </td>
						      <td>$44.99</td>
						      <td class="quantity">
					        	<div class="input-group">
				             	<input type="text" name="quantity" class="quantity form-control input-number" value="2" min="1" max="100">
				          	</div>
				          </td>
				          <td>$89.98</td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>

						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
						    	</td>
						    	<td>
						    		<div class="img" style="background-image: url(images/product-2.png);"></div>
						    	</td>
						      <td>
						      	<div class="email">
						      		<span>Sneakers Shoes 2020 For Men </span>
						      		<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
						      	</div>
						      </td>
						      <td>$30.99</td>
						      <td class="quantity">
					        	<div class="input-group">
				             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
				          	</div>
				          </td>
				          <td>$30.99</td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>

						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
						    	</td>
						    	<td>
						    		<div class="img" style="background-image: url(images/product-3.png);"></div>
						    	</td>
						      <td>
						      	<div class="email">
						      		<span>Sneakers Shoes 2020 For Men </span>
						      		<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
						      	</div>
						      </td>
						      <td>$35.50</td>
						      <td class="quantity">
					        	<div class="input-group">
				             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
				          	</div>
				          </td>
				          <td>$35.50</td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>

						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
						    	</td>
						    	<td>
						    		<div class="img" style="background-image: url(images/product-4.png);"></div>
						    	</td>
						      <td>
						      	<div class="email">
						      		<span>Sneakers Shoes 2020 For Men </span>
						      		<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
						      	</div>
						      </td>
						      <td>$76.99</td>
						      <td class="quantity">
					        	<div class="input-group">
				             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
				          	</div>
				          </td>
				          <td>$76.99</td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>

						    <tr class="alert" role="alert">
						    	<td class="border-bottom-0">
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
						    	</td>
						    	<td class="border-bottom-0">
						    		<div class="img" style="background-image: url(images/product-1.png);"></div>
						    	</td>
						      <td class="border-bottom-0">
						      	<div class="email">
						      		<span>Sneakers Shoes 2020 For Men </span>
						      		<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
						      	</div>
						      </td>
						      <td class="border-bottom-0">$40.00</td>
						      <td class="quantity border-bottom-0">
					        	<div class="input-group">
				             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
				          	</div>
				          </td>
				          <td class="border-bottom-0">$40.00</td>
						      <td class="border-bottom-0">
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
<style>
    @import 'bootstrap/bootstrap';
@import 'bootstrap/variables';
@import 'bootstrap/mixins';

$font-primary: 'Poppins',Arial, sans-serif;
$primary: #99b19c;
body{
	font-family: $font-primary;
	font-size: 20px;
	line-height: 1.8;
	font-weight: normal;
	background: #f8f9fd;
	color: lighten($black,50%);
    background-color:black;
}
a {
	transition: .3s all ease;
	color: $primary;
	&:hover, &:focus {
		text-decoration: none !important;
		outline: none !important;
		box-shadow: none;
	}
}
h1, h2, h3, h4, h5,
.h1, .h2, .h3, .h4, .h5 {
	line-height: 1.5;
	font-weight: 400;
	font-family: $font-primary;
	color: black;
}

.bg-primary{
	background: $primary !important;
}

.ftco-section{
	padding: 7em 0;
}

.ftco-no-pt{
	padding-top: 0;
}
.ftco-no-pb{
	padding-bottom: 0;
}
//HEADING SECTION
.heading-section{
	font-size: 28px;
	color: $black;
}

//COVER BG
.img{
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center center;
}
.table-wrap{
	@include media-breakpoint-down(xl){
		overflow-x: scroll;
	}
}
.table{
	min-width: 1000px !important;
	width: 100%;
	background: $white;
	-webkit-box-shadow: 0px 5px 12px -12px rgba(0,0,0,0.29);
	-moz-box-shadow: 0px 5px 12px -12px rgba(0,0,0,0.29);
	box-shadow: 0px 5px 12px -12px rgba(0,0,0,0.29);
	// border-collapse:separate;
 //  border-spacing: 0 10px;
	thead{
		&.thead-primary{
			background: $primary;
		}
		th{
			border: 10px;
			padding: 30px;
			font-size: 20px;
			font-weight: bold;
			color: black;
            background-color:white;
		}
		tr{
		}
	}
	tbody{
		tr{
			margin-bottom: 10px;
		}
		th,td{
			border: none;
			padding:30px;
			font-size: 14px;
			background: $white;
			border-bottom: 4px solid #f8f9fd;
			vertical-align: middle;
		}
		td{
			&.quantity{
				width: 10%;
			}
			.img{
				width: 100px;
				height: 80px;
			}
			.email{
				span{
					display: block;
					&:last-child(){
						font-size: 12px;
						color: rgba(0,0,0,.3);
					}
				}
			}
			.close{
				span{
					font-size: 12px;
					color: $danger;
				}
			}
		}
	}
}


.checkbox-wrap {
  display: block;
  position: relative;
  cursor: pointer;
  font-size: 16px;
  font-weight: 500;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.checkbox-wrap input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
}


/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "\f0c8";
  font-family: "FontAwesome";
  position: absolute;
  color:rgba(0,0,0,.2);
  font-size: 20px;
  margin-top: -14px;
  @include transition(.3s);
}

/* Show the checkmark when checked */
.checkbox-wrap{
	input:checked ~ .checkmark:after {
	  display: block;
	  content: "\f14a";
	  font-family: "FontAwesome";
	  color: rgba(0,0,0,.2);
	}
}

/* Style the checkmark/indicator */

.checkbox-primary{
  color: $primary;
  input:checked ~ .checkmark:after {
	  color: $primary;
	}
}

</style>


	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  <!-- checkout start -->
  <div class="container">
  <div class="border bg-light rounded p-4">
                    
                    <h4>Grand Total:</h4><br>
                    <h5 class="text-right" id="gtotal" name="gtotal_name"></h5>
                    <script>
                      document.getElementById("gtotal").innerHTML = '<?php echo $grandTotal; ?>.00 INR';
                    </script>
                    
                    <?php 
                        //if(isset($_SESSION['user_data']) && count($_SESSION['user_data'])>0){
                    ?>
                    <!-- <form  action="purchase.php" method="POST">
                       <input type="hidden" name="gtotal" value="<?php echo $iid; ?>">

                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="fullname"  class="form-control" placeholder="Full Name" required>
                        </div>

                        <div class="form-group">
                            <label>Phone No.</label>
                            <input type="number" name="phone_no" class="form-control" placeholder="Phone No." required>
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address"  class="form-control" placeholder="Address" required>
                        </div>

                        <div class="form-group">
                            <label>Payable Amount</label>
                            <lable class="text-right" id="gtotal"><br><b><h6><?php echo $grandTotal; ?> INR</h6></b></lable>
                        </div><br>

                        
                        <button class="btn btn-primary btn-block" name="purchase">Checkout</button>
                    </form>   -->

                            <!-- Booking form container -->
    <div class="container booking-container">
        <!-- Booking form -->
        <!-- <form id="purchaseForm" method="post">

            <div class="form-group">
                <label for="amount">Payable Amount:</label>
                <input type="text" id="amount" name="amount" value="<?php echo $grandTotal; ?> " class="form-control" readonly>
            </div>

            <div class="form-group">
                <label for="fname">Your Name:</label>
                <input type="text" id="fname" name="fname" class="form-control"  required>
            </div>

            <div class="form-group">
                <label for="address">Your Address:</label>
                <input type="address" id="address" class="form-control" placeholder="Enter Your Address" name="address" required>
            </div>

            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" class="form-control" placeholder="Enter Your Email" name="email" required>
            </div>

            <input type="hidden" name="payableAmount" value="<?php echo $grandTotal; ?>">
        
        <?php 
        if ($rowCount > 0) {
            mysqli_data_seek($result, 0); // Reset the result pointer to the beginning
            while ($row = mysqli_fetch_assoc($result)) {
                $iid = $row['item_id'];
                $item_name = $row['item_name'];
                $price = $row['price'];
                $quantity = $row['quantity'];
                echo '<input type="text" id="itemid" name="itemid[]" value="' . $iid . ' - ' . $item_name . ' - ' . $price . ' - ' . $quantity . '">' ;
            }
        }
        ?></form> -->

            <div class="pt-2">
                 <a href="shopcheckout.php"><button type="" class="btn btn-primary btn-block " style="width: 100%;">Checkout</button></a>
            </div>
                    
                    </div>     
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- checkout end -->
	</body>
</html>

