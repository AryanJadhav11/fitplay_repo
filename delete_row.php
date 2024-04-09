<?php

$server = 'localhost';
$user = 'root';
$db = 'fitplay_users';
$pass = '';

$conie = mysqli_connect($server, $user, $pass, $db);

if (!$conie) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    
    // Sanitize input
    $id = mysqli_real_escape_string($conie, $id);

    $sql3 = "DELETE FROM product_cards WHERE Order_id = $id";

    if (mysqli_query($conie, $sql3)) {
        // Redirect back to mycart.php after deletion
        header("Location: admin_shop.php");
        exit;
    } else {
        echo "<script>
        alert('Failed to Delete the Product');
        window.location.href='mycart.php';
        </script>";
    }
}

mysqli_close($conie);
?>
