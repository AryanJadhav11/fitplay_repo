<?php
session_start();

// Database connectivity
$con = mysqli_connect("localhost", "root", "", "fitplay_users");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['purchase'])) {
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

        // Insert order items into the buy_items table
        foreach ($_SESSION['user_data'] as $key => $values) {
            if (is_array($values)) {
                $item_id = $values['item_id'];
                $item_name = mysqli_real_escape_string($con, $values['item_name']);
                $price = $values['price'];
                $quantity = $values['quantity'];

                // Database connectivity to insert buy_items
                $query2 = "INSERT INTO `buy_items`(`user_ids`, `item_names`, `prices`, `quantitys`, `pay_stats`) 
                           VALUES ('$user_id', '$item_name', '$price', '$quantity', '$pay_stats')";

                mysqli_query($con, $query2);
            }
        }

        // Razorpay Integration
        $razorpay_options = [
            "key" => "rzp_live_z6prMSW9WlOpcp",
            "amount" => $gtotal * 100, // Amount in smallest currency unit (e.g., paise in INR)
            "currency" => "INR",
            "name" => "FitPlay Shop",
            "description" => "Buying Product",
            "image" => "favicon_io/favicon.ico",
            "handler" => "function(response) {
                // Handle success callback
                console.log(response);
                // Execute insertion queries after successful payment
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        // Redirect user or show confirmation message after successful insertion
                        window.location.href = 'mycart.php';
                    }
                };
                xhttp.open('POST', 'this_page.php', true);
                xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhttp.send('insert_order_manager=1&insert_buy_items=1&user_id=$user_id');
            }",
            "prefill" => [
                "name" => $fullname,
                "email" => "customer@example.com",
                "contact" => $phone_no
            ],
            "theme" => [
                "color" => "#198754"
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




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bubbly Button</title>
<style>
    body {
        font-size: 16px;
        font-family: 'Helvetica', 'Arial', sans-serif;
        text-align: center;
        background-color: #f8faff;
    }

    .bubbly-button {
        font-family: 'Helvetica', 'Arial', sans-serif;
        display: inline-block;
        font-size: 1em;
        padding: 1em 2em;
        margin-top: 100px;
        margin-bottom: 60px;
        -webkit-appearance: none;
        appearance: none;
        background-color: #ff0081;
        color: #fff;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        position: relative;
        transition: transform ease-in 0.1s, box-shadow ease-in 0.25s;
        box-shadow: 0 2px 25px rgba(255, 0, 130, 0.5);
    }

    .bubbly-button:focus {
        outline: 0;
    }

    .bubbly-button:active {
        transform: scale(0.9);
        background-color: #e60073;
        box-shadow: 0 2px 25px rgba(255, 0, 130, 0.2);
    }

    .bubbly-button.animate:before,
    .bubbly-button.animate:after {
        display: block;
    }

    @keyframes topBubbles {
        0% {
            background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%, 40% 90%, 55% 90%, 70% 90%;
        }
        50% {
            background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%, 50% 50%, 65% 20%, 90% 30%;
        }
        100% {
            background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%, 50% 40%, 65% 10%, 90% 20%;
            background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
        }
    }

    @keyframes bottomBubbles {
        0% {
            background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%, 70% -10%, 70% 0%;
        }
        50% {
            background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%, 105% 0%;
        }
        100% {
            background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%, 110% 10%;
            background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
        }
    }
</style>
</head>
<body>
    <button class="bubbly-button" style="
    margin-top: 300px;" onclick="red()" >Continue Shopping</button>
    <script>
        var animateButton = function(e) {
            e.preventDefault;
            //reset animation
            e.target.classList.remove('animate');
            e.target.classList.add('animate');
            setTimeout(function() {
                e.target.classList.remove('animate');
            }, 700);
        };

        var bubblyButtons = document.getElementsByClassName("bubbly-button");

        for (var i = 0; i < bubblyButtons.length; i++) {
            bubblyButtons[i].addEventListener('click', animateButton, false);
        }
        function red(){
            window.location.href='shop.php';
        }
    </script>
</body>
</html>
