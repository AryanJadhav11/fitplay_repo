<?php
session_start();

// Database connectivity testing
$con = mysqli_connect("localhost", "root", "", "fitplay_users");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['shoppurchase'])) {

    // Data validation
    $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : '';
    $gtotal = isset($_POST['payableAmount']) ? mysqli_real_escape_string($con, $_POST['payableAmount']) : '';

    // Ensure the 'gtotal' value is received
    if (empty($gtotal)) {
        // Handle the case when 'gtotal' is not received
        echo "Payable amount is missing.";
        exit; // Stop further execution
    }

    // Perform further processing with the received data

    // Close the database connection
    mysqli_close($con);
}
?>
