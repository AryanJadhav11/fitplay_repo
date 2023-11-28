<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
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

    // Fetch user details from the form
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $username = $_POST["uname"];
    $email = $_POST["mail"];
    $password = $_POST["password"];

    // SQL query to insert data into the users table
    $sql = "INSERT INTO users (firstname, lastname, username, email, password)
            VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to a success page
        header("Location: success.html");
        exit();
    } else {
        // Handle errors
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
