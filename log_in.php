<?php


// Connection
$conn = new mysqli('localhost', 'root', '', 'fitplay_users');
if ($conn->connect_error) {
    die('Connection failure: ' . $conn->connect_error); // Fixed syntax error here
} 


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$firstname=$_POST["fname"];
	$lastname=$_POST["lname"];
    $username=$_POST["uname"];
	$email=$_POST["mail"];
	$password=$_POST["password"];
	
	$sql = "INSERT INTO `users` ( `firstname`, `lastname`, `username`, `email`, `password`) VALUES ('$firstname', '$lastname', ' $username', '$email', '$password' );";
  $result = mysqli_query($conn, $sql); 
	
	
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign_in.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>FitPlay | Sign Up</title>
</head>
<body>

    <!----------------------- Main Container -------------------------->

     <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

       <div class="row border rounded-5 p-3 bg-white shadow box-area">

    <!--------------------------- Left Box ----------------------------->

       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
           <div class="featured-image mb-3">
            <img src="foot1.png" class="img-fluid" style="width: 250px;">
           </div>
           <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">FitPlay.</p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Your Fitness Journey Companion</small>
       </div> 

    <!-------------------- ------ Right Box ---------------------------->
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <h2>Hello!</h2>
                     <p>We are happy to have you with us.</p>
                </div>
              <form method="post">
                  <div class="input-group mb-3">
                    <input type="text" id="fname" name="fname" class="form-control form-control-lg bg-light fs-6" placeholder="First Name">
                  </div>
                  <div class="input-group mb-3">
                  <input type="text" id="lname" name="lname" class="form-control form-control-lg bg-light fs-6" placeholder="Last Name">
                  </div>
                  <div class="input-group mb-3">
                  <input type="text" id="uname" name="uname" class="form-control form-control-lg bg-light fs-6" placeholder="Select Username">
                  </div>
                  <div class="input-group mb-3">
                  <input type="email" id="mail" name="mail" class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
                  </div>
                  <div class="input-group mb-1">
                  <input type="password" id="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                  </div>
                  <div class="input-group mb-5 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                  </div>
                  </div>
                  <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6" type="submit" value="Submit">Sign Up</button>
                  </div>
                   <div class="input-group mb-3">
                    <button class="btn btn-lg btn-light w-100 fs-6"><img src="google.png" style="width:20px" class="me-2"><small>Sign In with Google</small></button>
                   </div>
              </form>


                <div class="row">
                    <small>Already have an account? <a href="#">Log In</a></small>
                </div>
             
          </div>
       </div> 

      </div>
    </div>

</body>
</html>
