<?php

session_start();

//database connectivity testing//
$con = mysqli_connect("localhost", "root","", "testing");

if (mysqli_connect_error()) {
    echo "<script>
    alert('Cannot connect to the database');
    window.location.href='mycart.php';
    </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['purchase'])) {

        //database connectivity order_manager//
        $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mod`) VALUES ('$_POST[fullname]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
        if(mysqli_query($con,$query1))
        {
            //database connectivity user_orders//
            $Order_id=mysqli_insert_id($con);
            $query2 ="INSERT INTO `user_orders`(`Order_id`, `item_name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt)
            {
                //database connectivity//
                mysqli_stmt_bind_param($stmt,"isii",$Order_id,$Item_Name,$Price,$Quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $Item_Name=$values['Item_Name'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);               
                }
                unset($_SESSION['cart']);
                echo "<script>
                alert('order placed');
                window.location.href='mycart.php';
                </script>";
            }

            
            else
            {
                echo "<script>
                alert('sql query prepare error error');
                window.location.href='mycart.php';
                </script>";
            }
        }
        else
        {
            echo "<script>
            alert('sql error');
            window.location.href='mycart.php';
            </script>";
        }
    }
}

