<?php include("header.php");?>

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

<!DOCTYPE html>
<html lang="en">


<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-1">Welcome Back to Fitplay.</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="jlo98"></button>
      </div>
      <div class="modal-body p-5 pt-0">
        <form  method="post">
        <div class="form-outline mb-4">
                  <input type="text" id="uname"  name="uname" class="form-control" required autocomplete="off" />
                  <label class="form-label" for="form3Example1">User Name</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control" required autocomplete="off"/>
                  <label class="form-label" for="form3Example1">Password</label>
                </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" fdprocessedid="99b3eo">Log In</button>
          <span>Dont have an account?</span> <a href="signup.php"> Sign up for free!</a>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="loginModalo" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login Required</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Your login form goes here -->
                <form id="loginForm" method="POST" action="login.php">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php

if (isset($_POST['Add_To_Cart'])) {
    // Retrieve user_id from the session
    $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : 0;
    // Get item details from the form using the correct names
    $item_name = isset($_POST['item_name']) ? $_POST['item_name'] : '';
    $price = isset($_POST['Price']) ? $_POST['Price'] : '';
    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';

    // Insert the item into the order_his table
    $sql = "INSERT INTO `order_his` (`user_id`, `item_name`, `price`, `quantity`) 
            VALUES ('$user_id', '$item_name', '$price', '$quantity')";

    $result = mysqli_query($conn, $sql);
}
    ?>

    <!-- ... (your scripts) ... -->
    
    <form  method="POST">
    <div class="super_container">
   
    <div class="single_product">
        <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
            <div class="row">
                
                <div class="col-lg-4 order-lg-2 order-1">
                    <div class="image_selected image-fluid"><?php $imgip = $row9pp['pic'] ?>
                <img src="upload/<?= $imgip ?>"></div>
                </div>
                <div class="col-lg-6 order-3">
                    <div class="product_description">
                       
                        <div class="product_name"><h2><?= ucfirst($row9pp['item_name']) ?></h2></div>
                        <div class="product-rating"><span class="badge badge-success"><i class="fa fa-star"></i> 4.5 Star</span> <span class="rating-review">35 Ratings & 45 Reviews</span></div>
                        <div> <span class="product_price">₹ <?= ucfirst($row9pp['Price']) ?></span>  </div>
                        <hr class="singleline">
                        <div> <br> <span class="product_info">Warranty: 6 months warranty<span><br> <span class="product_info">2 Days easy return policy<span><br>  <span class="product_info">In Stock: 25 units sold this week<span> </div>
                        <p><?= $row9pp['about'] ?></p>
                        <hr class="singleline">
                        <div class="order_info d-flex flex-row">
                            <form action="#">
                        </div>
                        <div class="row">
                            <div class="col-xs-6" style="margin-left: 13px;">
                                <div class="product_quantity"> <span>QTY: </span> <input id="quantity" name="quantity" type="text" pattern="[0-9]*" value="1">
                                    <div class="quantity_buttons">
                                        <div  id="quantity" name="quantity" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
                                        <div  id="quantity" name="quantity" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6"> 
                            <input type="hidden" name="item_name" value="<?= $row9pp['item_name'] ?>">
                    <input type="hidden" name="Price" value="<?= $row9pp['Price'] ?>">
                    <?php
                    if(isset($_SESSION['user_data'])) {
                        echo '<button type="submit" name="Add_To_Cart" class="btn btn-primary shop-button">Add to Cart</button>'; 
                        echo '<button type="button" class="btn btn-success shop-button">Buy Now</button>';
                        echo '<button class="btn btn-primary shop-button"><a href="mycart.php" style="color:white;text-decoration:none;">View Cart</a></button>';
                    } else {
                        echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModalo">Add to Cart</button>'; 
                        echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModalo">Buy Now</button>';
                        echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModalo">View Cart</button>';
                    }

?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           
            </div>
        </div>
    </div>
</div>
</form>






</body>
</html>