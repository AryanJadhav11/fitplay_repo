<?php
$server = 'localhost';
$user = 'root';
$db = 'mg';
$pass = '';

$conie = mysqli_connect($server, $user, $pass, $db);

if (!$conie) {
    die(mysqli_error($conie));
}

if (isset($_GET['Order_id'])) {
    $oid = $_GET['Order_id'];
    $sql9pp = "SELECT * FROM `user_orders` WHERE Order_id='$oid';";
    $res9pp = mysqli_query($conie, $sql9pp);

    // Check if the query was successful
    if (!$res9pp) {
        die(mysqli_error($conie));
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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="view Productport">

  <title>FitPlay-Shopping-Site</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/pro/favicon.png" rel="icon">
  <link href="assets/img/pro/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <?php $imgip = $row9pp['pic'] ?>
                <img src="upload/<?= $imgip ?>">
            </div>
            <div class="col-lg-6">
                <form  method="POST">
                    <h2><?= ucfirst($row9pp['item_name']) ?></h2>

                    <p><?= $row9pp['about'] ?></p>
                    <p class="font-weight-bold"><?= ucfirst($row9pp['Price']) ?></p>
                    <div class="mb-3">
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" class="form-control" value="1" min="1">
                    </div>
                    <!-- Add hidden input fields for Item_name and Price -->
                    <input type="hidden" name="item_name" value="<?= $row9pp['item_name'] ?>">
                    <input type="hidden" name="Price" value="<?= $row9pp['Price'] ?>">
                    <button type="submit" name="Add_To_Cart" class="btn btn-info" >Add To Cart</button>
                    <button   class="btn btn-info" ><a href="mycart.php">View Cart</a></button>

                </form>
            </div>
        </div>
    </div>
</section>
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

    $result = mysqli_query($conie, $sql);
}
    ?>

    <!-- ... (your scripts) ... -->

</body>

</html>
