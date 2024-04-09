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

    // Execute the SQL delete query
    if ($conn->query($sql_delete) === TRUE) {
        // Order cancelled successfully, redirect the user back to the page where orders are listed
        header("Location: myorder.php");
        exit();
    } else {
        // If there's an error with the SQL delete query
        echo "Error cancelling order: " . $conn->error;
    }

    // Retrieve order details before deletion
    $sql_select = "SELECT * FROM buy_items WHERE item_ids = '$item_id'";
    $result = $conn->query($sql_select);
    
    if ($result->num_rows > 0) {
        // Fetch order details
        $row = $result->fetch_assoc();
        $user_id = $_SESSION['user_data']['user_id'];
        $username = $_SESSION['user_data']['username'];
        $item_name = $row['item_names'];
        $price = $row['prices'];
        $email = $_SESSION['user_data']['email'];

        // Write SQL to insert data into cancel_order table
        $sql_insert = "INSERT INTO cancel_order (user_id, username, item_name, price, email) VALUES ('$user_id', '$username', '$item_name', '$price', '$email')";
        
        // Execute the SQL insert query
        if ($conn->query($sql_insert) !== TRUE) {
            echo "Error inserting cancelled order data: " . $conn->error;
        }
    } else {
        echo "No order found with the provided item ID.";
    }
} else {
    // If item_id is not set in the URL
    echo "Item ID not provided.";
}

// Close connection
$conn->close();
?>
