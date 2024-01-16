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
?>

<?php
// session_start();

// Database connection
$server = 'localhost';
$user = 'root';
$db = 'mg';
$pass = '';

$conie = mysqli_connect($server, $user, $pass, $db);

if (!$conie) {
    die(mysqli_error($conie));
}

// Check if the Add_To_Cart button is clicked
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

    $result = mysqli_query($conie, $sql);

    // Check if the query was successful
   if($result==null)
   {
    echo 'something went wrong';
   }
   else
   {
    // header("Location: product_detail.php");
    echo '<script> ';
   }
}
?>
