<?php include('header.php'); ?>
<?php
	$server = 'localhost';
	$user = 'root';
	$db = 'fitplay_users';
	$pass = '';
	$conme = mysqli_connect($server, $user, $pass, $db);

	if (!$conme) {
		die(mysqli_error($conme));
	}

	// Assuming you have a user ID stored in the session, adjust this according to your authentication mechanism
	$user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : null;

	// Fetch items from the order_his table for the specific user
	$sql = "SELECT * FROM `order_his` WHERE `user_id` = '$user_id'";
	$result = mysqli_query($conme, $sql);

	if ($result === false) {
		die('Query failed: ' . mysqli_error($conme));
	}
	$rowCount = mysqli_num_rows($result);
?>

<head>
    <title>FitPlay - Product Booking Platform</title>
 </head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                 <tr>
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

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    
                    <h4>Grand Total:</h4><br>
                    <h5 class="text-right" id="gtotal" name="gtotal_name"></h5><br>
                    <script>
                      document.getElementById("gtotal").innerHTML = '<?php echo $grandTotal; ?>.00';
                    </script>
                    
                    <?php 
                        if(isset($_SESSION['user_data']) && count($_SESSION['user_data'])>0){
                    ?>
                    <form  action="purchase.php" method="POST">
                       <input type="hidden" name="gtotal" value="<?php echo $grandTotal; ?>">

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
                    </form>                            
                                        
                   <?php } ?>
                </div>

            </div>

        </div>
    </div>

</body>

</html>