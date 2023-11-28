<?php
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$uname = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Connection
$conn = new mysqli('localhost', 'root', '', 'fitplay_users');
if ($conn->connect_error) {
    die('Connection failure: ' . $conn->connect_error); // Fixed syntax error here
} else {
    $stmt = $conn->prepare("INSERT INTO `users` (`firstname`, `lastname`, `username`, `email`, `password`) VALUES (?, ?, ?, ?, ?,);");

    // Bind the parameters to the placeholders in the query
    $stmt->bind_param('sssss', $fname, $lname, $uname, $email, $password);

    if ($stmt->execute()) {
        header("Location: index.html");
    } else {
        echo "Try again";
    }

    // Close the prepared statement
    $stmt->close();
    
    // Close the database connection
    $conn->close();
}
?>
