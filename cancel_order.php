<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitplay_users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if item_id is set in the URL
if(isset($_GET['item_ids'])) {
    // Retrieve item_id from the URL
    $item_id = $_GET['item_ids'];

    // Write SQL to delete the order
    $sql_delete = "DELETE FROM buy_items WHERE item_ids = '$item_id'";

    // Retrieve order details before deletion
    $sql_select = "SELECT * FROM buy_items WHERE item_ids = '$item_id'";
    $result = $conn->query($sql_select);
    
    if ($result === FALSE) {
        // If there's an error with the SQL select query
        echo "Error selecting order: " . $conn->error;
        exit();
    }

    if ($result->num_rows > 0) {
        // Fetch order details
        $row = $result->fetch_assoc();
        $user_id = $_SESSION['user_data']['user_id'];
        $username = $_SESSION['user_data']['username'];
        $item_name = $row['item_names'];
        $item_id = $row['item_ids'];
        $price = $row['prices'];
        $email = $_SESSION['user_data']['email'];

        // Write SQL to insert data into cancel_order table
        $sql_insert = "INSERT INTO cancel_order (user_id, username, item_name, price, email, item_id) VALUES ('$user_id', '$username', '$item_name', '$price', '$email','$item_id')";
        
        // Execute the SQL delete query
        if ($conn->query($sql_delete) === TRUE && $conn->query($sql_insert) === TRUE) {
            // Order cancelled successfully, redirect the user back to the page where orders are listed
            header("Location: myorder.php");
            exit();
        } else {
            // If there's an error with the SQL insert query
            echo "Error inserting cancelled order: " . $conn->error;
            exit();
        }
    } else {
        // If no order found with the provided item ID
        echo "No order found with item ID: " . $item_id;
        exit();
    }
} else {
    // If item_id is not set in the URL
    echo "Item ID not provided in URL.";
    exit();
}

// Close connection
$conn->close();
?>
