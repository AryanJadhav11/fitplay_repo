<?php
// Database connection
$server = 'localhost';
$user = 'root';
$db = 'fitplay_users';
$pass = '';
$coni = mysqli_connect($server, $user, $pass, $db);

if (!$coni) {
    die(mysqli_error($coni));
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : null;

    // Insert data into the 'shopp' table
    $insertSql = "INSERT INTO `shopp` (`fname`, `email`, `address`) VALUES ('$fname', '$email', '$address')";

    if ($coni->query($insertSql) === TRUE) {
        // Insertion successful
        echo "<script>alert('Data added to shopp table successfully.')</script>";
    } else {
        // Insertion failed
        echo "<script>alert('Error adding data to shopp table: " . mysqli_error($coni) . "')</script>";
    }
}

$coni->close();
?>