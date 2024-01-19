<?php
session_start();

// Database connectivity testing
$con = mysqli_connect("localhost", "root", "", "fitplay_users");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['purchase'])) {
    // Ensure user information is available
    if (!isset($_SESSION['user_data']) || !is_array($_SESSION['user_data'])) {
        echo "<script>
            alert('User information not available or not in the expected format');
            window.location.href='mycart.php';
            </script>";
        exit;
    }

    // Data validation
    $user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : '';
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $phone_no = mysqli_real_escape_string($con, $_POST['phone_no']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $pay_mode = mysqli_real_escape_string($con, $_POST['pay_mode']);

    // Database connectivity order_manager
    $query1 = "INSERT INTO `order_manager`(`user_id`, `Full_Name`, `Phone_No`, `Address`, `Pay_Mod`) VALUES ('$user_id', '$fullname', '$phone_no', '$address', '$pay_mode')";

    if (mysqli_query($con, $query1)) {
        // Database connectivity order_his
        $order_manager_id = mysqli_insert_id($con);

        foreach ($_SESSION['user_data'] as $key => $values) {
            if (is_array($values)) {  // Ensure $values is an array
                $item_id = $values['item_id'];
                $item_name = $values['Item_Name'];
                $price = $values['Price'];
                $quantity = $values['Quantity'];

                $query2 = "INSERT INTO `order_his`(`user_id`, `order_manager_id`, `item_id`, `item_name`, `price`, `quantity`) VALUES ('$user_id', '$order_manager_id', '$item_id', '$item_name', '$price', '$quantity')";

                mysqli_query($con, $query2);
            }
        }

        unset($_SESSION['user_data']);
        echo "<script>
            alert('Order placed successfully');
            window.location.href='shop.php';
            </script>";
    } else {
        echo "<script>
            alert('SQL error: " . mysqli_error($con) . "');
            window.location.href='mycart.php';
            </script>";
    }

    // Close the database connection
}
?>
