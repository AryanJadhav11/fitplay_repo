<?php
session_start();

$server = 'localhost';
$user = 'root';
$db = 'fitplay_users';
$pass = '';

$conme = mysqli_connect($server, $user, $pass, $db);

if (!$conme) {
    die(mysqli_error($conme));
}

// Assuming you have a user ID stored in the session, adjust this according to your authentication mechanism
$user_id = isset($_SESSION['user_data']['user_id']) ? $_SESSION['user_data']['user_id'] : null;


// Fetch items from the order_his table for the specific user
$sql = "SELECT * FROM `order_his` WHERE `user_id` = '$user_id'";
$result = mysqli_query($conme, $sql);

if ($result === false) {
    die("Query failed: " . mysqli_error($conme));
}

$rowCount = mysqli_num_rows($result);
?>
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

function getInitials($name) {
    $nameParts = explode(" ", $name);
    $initials = '';

    foreach ($nameParts as $part) {
        $initials .= strtoupper(substr($part, 0, 1));
    }

    return $initials;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Bootstrap CSS -->
<link href="path/to/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
<script src="path/to/popper.min.js"></script>
<script src="path/to/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Explore Turfs</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <!--  <link rel="stylesheet" id="picostrap-styles-css" href="https://cdn.livecanvas.com/media/css/library/bundle.css" media="all"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css" media="all">
    <link href="favicon.png" rel="icon">
  <link href="apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">

  <!-- smaple -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



  <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
 </script>
 <script type="text/javascript">
   (function(){
      emailjs.init("NZwPsWRpzzWmVQjwb");
   })();
 </script> 

<style>
    .avatar {
        width: 30px;
        height: 30px;
        background-color: #007bff;
        color: #ffffff;
        font-size: 20px;
        font-weight: bold;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
    }
    .c-item{
      height:480px;

    }

    .c-img
    {
      height:100%;
      object-fit:cover;
      filter:brightness(0.6);
    }

    body{
      background:#f3f5f8;
      overflow-x:hidden;
    }

 

        .star-container {
            display: flex;
            align-items: center;
            margin-top: 15px; /* Adjust margin as needed */
        }

        .star-container i {
            margin-right: 2px; /* Adjust margin between stars as needed */
        }


    

    .card-container {
      background-color:#ffff;
      padding:20px;
      border-radius:20px;
             margin:40px;
            display: flex;
            gap: 20px; /* Adjust the margin between cards */
        }

        .card {
            width: 18rem;
        }

        .card-img-top{
          height :100%;
          width:100%;
        }

        .banner-container{
          background-color:#ffff;
          padding:10px;
          margin-bottom:60px;
          width:100%;
          height:100%;
          
        }

        .banner-containerw{
          background-color:#ffff;
          padding:10px;
          margin-bottom:6px;
          width:100%;
          height:40%;
          
        }




  </style>
</head>


  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="index.html">Fit<span style="color: green">Play.</span></a></h1>
        <nav id="navbar" class="navbar">
            <ul>
            
                <li><a class="nav-link scrollto" href="shop.php">Home</a></li>
                <li><a class="nav-link scrollto" href="shop.php">Shop</a></li>
                <li class="dropdown">
                    <a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Gyms</a></li>
                       
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="contactu.php">Contact</a></li>
                <li><a class="nav-link scrollto" href="registervenue.php">Register Your Venue</a></li>
                <li class="dropdown" style="color: blue;">
<?php
                if (isset($_SESSION['user_data'])) {
                  $userName = $_SESSION['user_data']['username'];
                  $userInitials = getInitials($userName);
              
                  echo '<a href="#"><span>';
                  echo '<div class="avatar">' . $userInitials . '</div>';
                  echo '<ul><li><a href="user_profile.php">View Profile</a></li>';
              
                  // Now you can directly access 'Rolee' without additional checks
                  if ($_SESSION['user_data']['username'] == "sk") {  
                      echo '<li><a href="admin.php">Admin Panel</a></li>';
                  }
                  echo '</ul>';
              } 
              else {
                  echo '<button type="button" class="btn btn-primary ms-1 ml-3"><a href="signup.php" style="color:white;">Sign Up</a></button>';
                  echo'<span>  </span>';
                  echo '<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>';
              }
?>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-1">Welcome Back to Fitplay.</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="jlo98"></button>
      </div>
      <div class="modal-body p-5 pt-0">
        <form  method="post">
        <div class="form-outline mb-4">
                  <input type="text" id="uname"  name="uname" class="form-control" required autocomplete="off" />
                  <label class="form-label" for="form3Example1">User Name</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control" required autocomplete="off"/>
                  <label class="form-label" for="form3Example1">Password</label>
                </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" fdprocessedid="99b3eo">Log In</button>
          <span>Dont have an account?</span> <a href="signup.php"> Sign up for free!</a>
        </form>
      </div>
    </div>
  </div>
</div>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                 <tr>
                                    
                                    <th>Product Name</th>
                                    <th>Price</th>                 
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove Item</th>
                                 </tr>
                              </thead>
                              
                              <tbody>
                              <?php
                              $grandTotal=0;
                        if ($rowCount > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                        
                                $id=$row['item_id'];
                                $item_name = $row['item_name'];
                                $price = $row['price'];
                                $quantity = $row['quantity'];
                                $total= $price*$quantity;
                                $grandTotal += $total;

                                echo '<tr>
                                    <td scope="row">' . $item_name . '</td>
                                    <td>' . $price . '</td>
                                    <td>' . $quantity . '</td>
                                    <td>' . $total . '</td>
                                    <td>
                    <a href="del_product.php?deleteid=' . $id . '" class="text text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 32">
                            <path d="M 13 3 L 13 4 L 4 4 L 4 6 L 6 6 L 6 28 L 26 28 L 26 6 L 28 6 L 28 4 L 19 4 L 19 3 L 13 3 z M 8 6 L 24 6 L 24 26 L 8 26 L 8 6 z M 11 9 L 11 23 L 13 23 L 13 9 L 11 9 z M 19 9 L 19 23 L 21 23 L 21 9 L 19 9 z"></path>
                        </svg>
                    </a>
                </td>
                                </tr>';
                            } 
                        } else {
                            echo "<tr><td colspan='3'>No items in the cart.</td></tr>";
                        }
                        ?>



                                 
                              </tbody>
                              
                           </table>
                          
            </div>

            <div class="col-lg-3">
        <div class="border bg-light rounded p-4">
            <h5>Grand Total: <br>
            <span id="gtotal_value"><?php echo $grandTotal; ?></span></h5>
            <form action="purchase.php" method="POST">
                <input type="hidden" name="gtotal" id="gtotal_input" value="<?php echo $grandTotal; ?>">

                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" name="fullname" class="form-control" id="fullname_id" placeholder="Full Name" required>
                </div>

                <div class="form-group">
                    <label for="phone_no">Phone No.</label>
                    <input type="tel" name="phone_no" class="form-control" id="phone_no_id" placeholder="Phone No." required>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address_id" placeholder="Address" required>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="pay_mode_id" value="COD" id="pay_mode_cod">
                    <label class="form-check-label" for="pay_mode_cod">
                        Cash On Delivery
                    </label>
                </div><br>

                <button class="btn btn-primary btn-block" value="Submit" type="submit" name="purchase" id="purchaseButton_id">Make Purchase</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('purchaseButton').addEventListener('click', function(e) {
            e.preventDefault();

            // Perform form validation
            var fullname = document.getElementById('fullname_id').value;
            var phone_no = document.getElementById('phone_no_id').value;
            var address = document.getElementById('address_id').value;

            if (!fullname_id || !phone_no_id || !address_id) {
                alert('Please fill out all fields before proceeding to payment.');
                return;
            }

            // If form is valid, proceed to Razorpay payment
          var options = {
          
          "key": "rzp_live_z6prMSW9WlOpcp",
          "amount": "1"*100, // amount in paise (since Razorpay accepts amount in smallest currency unit)
          "currency": "INR",
          "name": "Turf Booking",
          "description": "Booking for <?= ucfirst($row9['name']) ?>",
          "image": "your_logo.png", // replace with your logo
          "handler": function(response) {
              // Handle success callback
              console.log(response);
              // Submit the form after successful payment
              document.getElementById('bookingForm').submit();
          },
          "prefill": {
              "name": document.getElementById('userName').value,
              "email": document.getElementById('userEmail').value
          },
          "theme": {
              "color": "#F37254"
          }
  
      
  };
  var rzp = new Razorpay(options);
  rzp.open();

                        
        });
    
    //gtotal script
    var grandTotalValue = '<?php echo $grandTotal; ?>';
    document.getElementById("gtotal_input").value = grandTotalValue;
</script>
</body>

</html>
