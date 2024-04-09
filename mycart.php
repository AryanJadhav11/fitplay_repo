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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitPlay - Cart</title>
    <link rel="icon" type="image/png" href="favicon_io/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="tablestyle.css">
</head>
<body class="py-6" style="background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%);">
<div class="wrapper d-flex align-items-stretch" style="height:100%;">
    <nav id="sidebar" class="active" style="background-color:#1a85df;">
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
    </nav>

    <div id="content" class="p-4 p-md-5 pt-5 mt-5">
       
            <!-- Product Table Column -->
            <div class="row">
                <div class="col-md-8">
                <div class="border bg-light rounded p-4">
                <h2 class="heading-section">My Cart</h2><hr>
                    <!-- Product Table -->
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-dark">
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
                                        <td ><img src="upload/' . $img . '" alt="Product Image" style="width:80px; height:80px;"></td>
                                        <td class="pt-5" style="font-size: 20px;">' . $item_name . '</td>
                                        <td class="pt-5" style="font-size: 20px;">' . $price . '</td>
                                        <td class="pt-5" style="font-size: 20px;">' . $quantity . '</td>
                                        <td class="pt-5" style="font-size: 20px;">' . $total . '</td>
                                        <td class="pt-5" style="font-size: 20px;">
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
                </div>
                        </div>
                <!-- Checkout Section Column -->
                <div class="col-md-4">
                    <!-- Checkout Section -->
                    <div class="border bg-light rounded p-4">
                    <h2 class="heading-section">Checkout</h2><hr>
                        <!-- Grand Total -->
                        <h4 class="p-2" style="background-color: #343a40; border-radius: 5px; color: white;">Grand Total:</h4>
                        <br>
                        <h5 class="text-right" id="gtotal" name="gtotal_name" style="color: #343a40;"></h5>
                        <script>
                            document.getElementById("gtotal").innerHTML = '<?php echo $grandTotal; ?>.00 INR';
                        </script>

                        <!-- Checkout Button -->
                        <div class="pt-2">
                            <a href="shopcheckout.php">
                                <button type="button" class="btn btn-primary btn-block" style="width: 100%; color: white; background-color: #343a40; text-transform: uppercase; font-weight: bold;">Checkout</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </div>
</div>

<script src="sidebar_js/bootstrap.min.js"></script>
<script src="sidebar_js/popper.js"></script>
<script src="sidebar_js/jquery.min.js"></script>
<script src="sidebar_js/main.js"></script>
</body>
</html>
