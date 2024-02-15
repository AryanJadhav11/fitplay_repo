
<?php include("header.php");?>
<?php

$server = 'localhost';
$user = 'root';
$db = 'fitplay_users';
$pass = '';

$conmeme = mysqli_connect($server, $user, $pass, $db);

if (!$conmeme) {
    die(mysqli_error($conmeme));
}

// Assuming you have a user ID stored in the session, adjust this according to your authentication mechanism
$user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : null;


// Fetch items from the order_his table for the specific user
$sql = "SELECT * FROM `order_his` WHERE `user_id` = '$user_id'";
$result = mysqli_query($conmeme, $sql);

if ($result === false) {
    die("Query failed: " . mysqli_error($conmeme));
}

$rowCount = mysqli_num_rows($result);
?>
<?php
if(isset($_GET['item_id']))
{
   $blid=$_GET['item_id'];
   $sql9="SELECT * FROM `order_his` WHERE item_id='$blid';";
   $res9=mysqli_query($conmeme,$sql9);
   $row9=mysqli_fetch_assoc($res9);
  
}
?>
<?php 
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitplay_users";

$conmen = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conmen->connect_error) {
    die("Connection failed: " . $conmen->connect_error);
}
?>
<?php


// Database connectivity testing
$conme = mysqli_connect("localhost", "root", "", "fitplay_users");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure user information is available
    if (!isset($_SESSION['user_data']) || !is_array($_SESSION['user_data'])) {
        echo "<script>
            alert('User information not available or not in the expected format');
            window.location.href='mycart.php';
            </script>";
        exit;
    }

    // Data validation
    $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : '';
    $fullname = mysqli_real_escape_string($conme, $_POST['fullname']);
    $phone_no = mysqli_real_escape_string($conme, $_POST['phone_no']);
    $address = mysqli_real_escape_string($conme, $_POST['address']);
    $gtotal = mysqli_real_escape_string($conme, $_POST['gtotal']);
    $pay_mode = mysqli_real_escape_string($conme, $_POST['pay_mode']);

    // Database connectivity order_manager
    $query1 = "INSERT INTO `order_manager`(`user_id`, `Full_Name`, `Phone_No`, `Address`, `Total`, `Pay_Mod`)
    VALUES ('$user_id', '$fullname', '$phone_no', '$address', '$gtotal', '$pay_mode')";

    if (mysqli_query($conme, $query1)) {
        $order_manager_id = mysqli_insert_id($conme);

        foreach ($_SESSION['user_data'] as $key => $values) {
            if (is_array($values)) {
                $item_id = $values['item_id'];
                $item_name = $values['item_name'];
                $price = $values['price'];
                $quantity = $values['quantity'];

                // Database connectivity order_his
                $query2 = "INSERT INTO `order_his`(`user_id`, `order_manager_id`, `item_id`, `item_name`, `price`, `quantity`) 
                           VALUES ('$user_id', '$order_manager_id', '$item_id', '$item_name', '$price', '$quantity')";

                mysqli_query($conme, $query2);
            }
        }

        // Unset the session after successful purchase
      
        
        echo "<script>
            alert('Order placed successfully');
            window.location.href='mycart.php';
            </script>";
    } else {
        echo "<script>
            alert('SQL error: " . mysqli_error($conme) . "');
            window.location.href='mycart.php';
            </script>";
    }

    // Close the database connection
    mysqli_close($conme);
}
?>
<head>
<title>FitPlay - MyCart</title>
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
                        if ($rowCount > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                                
                                $id=$row['item_id'];
                                $item_name = $row['item_name'];
                                $price = $row['price'];
                                $quantity = $row['quantity'];
                                $total= $price*$quantity;
                                $grandTotal += $total;

                                echo '<tr>
                                    <td scope="row">' . $item_name . '</td>
                                    <td>' . $price . '</td>
                                    <td>' . $quantity . '</td>
                                    <td>' . $total . '</td>
                                    <td>
                                     <a href="del_product.php?deleteid=' . $id . '" class="text text-light">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 32">
                                       <path d="M 13 3 L 13 4 L 4 4 L 4 6 L 6 6 L 6 28 L 26 28 L 26 6 L 28 6 L 28 4 L 19 4 L 19 3 L 13 3 z M 8 6 L 24 6 L 24 26 L 8 26 L 8 6 z M 11 9 L 11 23 L 13 23 L 13 9 L 11 9 z M 19 9 L 19 23 L 21 23 L 21 9 L 19 9 z"></path>
                                       </svg>
                                    </a>
                                     </td>
                                 </tr>';
                               } 
                             } else {
                                echo "<tr><td colspan='5'>No items in the cart.</td></tr>";
                              }
                         ?>   

                  </tbody>                              
            </table>                        
     </div>


            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    
                    <h4>Grand Total:</h4><br>
                    <h5 class="text-right" id="gtotal"></h5><br>
                    <script>
                      document.getElementById("gtotal").innerHTML = '<?php echo $grandTotal; ?>';
                    </script>
                    
                    <?php 
                        if(isset($_SESSION['user_data']) && count($_SESSION['user_data'])>0){
                    ?>
                    <form action="purchase.php" method="POST">

                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="fullname" class="form-control"placeholder="Full Name" required>
                        </div>

                        <div class="form-group">
                            <label>Phone No.</label>
                            <input type="number" name="phone_no" class="form-control"placeholder="Phone No." required>
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control"placeholder="Address" required>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Cash On Delivery
                            </label>
                        </div><br>

                        <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
                    </form>
                    <?php } ?><?php
                    if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    
    // Sanitize input
    $id = mysqli_real_escape_string($conmeme, $id);

    $sql3 = "DELETE FROM order_his WHERE item_id = $id";

    if (mysqli_query($conmeme, $sql3)) {
        // Redirect back to mycart.php after deletion
        header("Location: mycart.php");
        exit;
    } else {
        echo '<div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Error!</h4>
                <p>Failed to delete the product.</p>
                <hr>
                <script>
                window.location.href="mycart.php";
                </script>
              </div>';
    }
}?>
                </div>

            </div>

        </div>
    </div> 



=======




        <div class="border bg-light rounded p-4">
            <h5>Grand Total: <br>
            <span id="gtotal_value"><?php echo $grandTotal; ?></span></h5>
            <form  id="makepurchase" method="POST">
                <input type="hidden" name="gtotal" id="gtotal_input" value="<?php echo $grandTotal; ?>">

                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" name="fullname" class="form-control" id="fullname_id" placeholder="Full Name" required>
                </div>

                <div class="form-group">
                    <label for="phone_no">Phone No.</label>
                    <input type="tel" name="phone_no" class="form-control" id="phone_no_id" placeholder="Phone No." required>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address_id" placeholder="Address" required>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="pay_mode_id" value="COD" id="pay_mode_cod">
                    <label class="form-check-label" for="pay_mode_cod">
                        Cash On Delivery
                    </label>
                </div><br>

                <button class="btn btn-primary btn-block" value="Submit" type="submit"  id="purchaseButton">Make Purchase</button>
            </form>
        </div>
    </div>

    <script>
    document.getElementById('purchaseButton').addEventListener('click', function(e) {
        e.preventDefault();

        // Perform form validation
        var fullname = document.getElementById('fullname_id').value;
        var phone_no = document.getElementById('phone_no_id').value;
        var address = document.getElementById('address_id').value;

        if (!fullname || !phone_no || !address) {
            alert('Please fill out all fields before proceeding to payment.');
            return;
        }

        // If form is valid, proceed to Razorpay payment
        var options = {
            "key": "rzp_live_z6prMSW9WlOpcp",
            "amount": "<?= $grandTotal ?>" * 100, // amount in paise (since Razorpay accepts amount in smallest currency unit)
            "currency": "INR",
            "name": "<?= ucfirst($row9['item_name']) ?>",
            "description": "Checkout for <?= ucfirst($row9['item_name']) ?>",
            "image": "your_logo.png", // replace with your logo
            "handler": function(response) {
                // Handle success callback
                console.log(response);
                // Submit the form after successful payment
                document.getElementById('makepurchase').submit();
            },
            "prefill": {
                "name": document.getElementById('fullname_id').value,
                "phone": document.getElementById('phone_no_id').value
            },
            "theme": {
                "color": "#F37254"
            }
        };

        var rzp = new Razorpay(options);
        rzp.open();
    });
</script>
>>>>>>> 223af3a965ecceb8be05a3cbb7526252b621ee61
</body>


</html>
