<?php
session_start();

// Database connectivity
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
    $gtotal = mysqli_real_escape_string($con, $_POST['gtotal']);
    $pay_stats = 'PAID'; // Note: Fixed the missing semicolon

    // Database connectivity to insert order_manager
    $query1 = "INSERT INTO `order_manager`(`user_id`, `Full_Name`, `Phone_No`, `Address`, `Total`)
    VALUES ('$user_id', '$fullname', '$phone_no', '$address', '$gtotal')";

    if (mysqli_query($con, $query1)) {
        $order_manager_id = mysqli_insert_id($con);

        // Insert order items into the order_his table
        foreach ($_SESSION['user_data'] as $key => $values) {
            if (is_array($values)) {
                $item_id = $values['item_id'];
                $item_name = $values['item_name'];
                $price = $values['price'];
                $quantity = $values['quantity'];

                // Database connectivity to insert order_his
                $query2 = "INSERT INTO `buy_items`(`user_ids`, `order_manager_id`, `item_ids`, `item_names`, `prices`, `quantitys`,`pay_stats`) 
                           VALUES ('$user_id', '$order_manager_id', '$item_id', '$item_name', '$price', '$quantity', '$pay_stats')";

                mysqli_query($con, $query2);
            }
        }

        // Initialize Razorpay payment options
        $razorpay_options = [
            "key" => "rzp_live_z6prMSW9WlOpcp", // Replace with your Razorpay API key
            "amount" => $gtotal * 100, // Amount in smallest currency unit (e.g., paise in INR)
            "currency" => "INR",
            "name" => "FitPlay - Turf Booking Platform",
            "description" => "Order Payment",
            "image" => "favicon.png", // Replace with your logo URL
            "prefill" => [
                "name" => $fullname,
                "email" => "customer@example.com", // Replace with the customer's email
                "contact" => $phone_no
            ],
            "theme" => [
                "color" => "#198754" // Customize the theme color
            ]
        ];

        // Convert the Razorpay options array to JSON format
        $razorpay_options_json = json_encode($razorpay_options);
?>

<!-- Include Razorpay checkout script -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<!-- Initialize Razorpay payment -->
<script>
    var options = <?php echo $razorpay_options_json; ?>;
    var rzp = new Razorpay(options);
    rzp.on('payment.success', function(response) {
        // Handle successful payment response
        console.log(response);
        // Redirect the user to a confirmation page or perform other actions
        window.location.href = 'payment_success.php';
    });
    rzp.open();
</script>

<?php
    } else {
        // Handle SQL error
        echo "<script>
            alert('SQL error: " . mysqli_error($con) . "');
            window.location.href='mycart.php';
            </script>";
    }

    // Close the database connection
    mysqli_close($con);
}
?>
