<?php include("header.php");?>
<?php

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

$showalert = false;
$login = false;
$showerr = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $err = "";
    $username = $_POST["uname"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `users` WHERE username='$username' AND password='$password';";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num) {
        $re = mysqli_fetch_assoc($result);
        // Include 'user_id' in the user data
        $user_data = array(
            'user_id' => $re['id'],
            'firstname' => $re['firstname'],
            'lastname' => $re['lastname'],
            'username' => $re['username'],
            'email' => $re['email'],
            
        );
        $_SESSION['user_data'] = $user_data;

        $googleFormData = $_POST;  // Assuming your Google Form uses the POST method

    // Adjust the following SQL query based on your "turf_req" table structure
    $insertQuery = "INSERT INTO turf_req (field1, field2, field3) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);

    // Bind parameters (adjust these based on your form fields)
    $stmt->bind_param("sss", $googleFormData['field1'], $googleFormData['field2'], $googleFormData['field3']);

    // Execute the query
    if ($stmt->execute()) {
        // Data inserted successfully
        echo "Data inserted into turf_req successfully.";
    } else {
        // Error inserting data
        echo "Error: " . $stmt->error;
    }

        // Output the contents of $_SESSION['user_data'] to the browser console
        


        header("location: turf.php");
    } else {
        $showerr = "Invalid Email / Password";
        $_SESSION['error'] = "Invalid Email / Password";
    }
}
if (isset($_SESSION['user_data'])) {
  $pri = $_SESSION['user_data'];
}

// Output the contents of $_SESSION['user_data'] or $pri to the browser console
// echo '<pre>';
// print_r($pri);
// echo '</pre>';

?>  
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeK4x3yeg2dkUnAv7THkhBOfltfu6y_qS0euJ3WC877kNThDA/viewform?embedded=true" width="640" height="1473" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>

</body>
</html>