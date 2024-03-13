
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>

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
    $insertSql = "INSERT INTO `shopp` (`user_id`, `fname`, `email`, `address`) VALUES ('$user_id', '$fname', '$email', '$address')";


    if ($insertSql) {
        // Insertion successful
        echo "done";
    } else {
        // Insertion failed
        echo "error";
    }
}

$coni->close();
?>

<!-- Simple form -->
<div class="container">
    <form method="post" actio>
        <label for="fname">Your Name:</label>
        <input type="text" id="fname" name="fname" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="address">Your Address:</label>
        <input type="text" id="address" name="address" required>

        <button type="submit" value="Submit">Submit</button>
    </form>
</div>

</body>
</html>
