<?php

$server = 'localhost';
$user = 'root';
$db = '';
$pass = '';

$conie = mysqli_connect($server, $user, $pass, $db);

if (!$conie) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    
    // Sanitize input
    $id = mysqli_real_escape_string($conie, $id);

    $sql3 = "DELETE FROM order_his WHERE item_id = $id";

    if (mysqli_query($conie, $sql3)) {
        // Redirect back to mycart.php after deletion
        header("Location: mycart.php");
        exit;
    } else {
        echo '<div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Error!</h4>
                <p>Failed to delete the product.</p>
                <hr>
                <a href="mycart.php" class="btn btn-primary">Go back</a>
              </div>';
    }
}

mysqli_close($conie);
?>
