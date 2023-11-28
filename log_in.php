<?php
$showalert="";
$showerr="";
// Check if the form is submitted manually
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['google_user_id'])) {
    // Assuming you have a database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fitplay_users";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Data is coming from manual form submission
    $firstname = isset($_POST["fname"]) ? $_POST["fname"] : "";
    $lastname = isset($_POST["lname"]) ? $_POST["lname"] : "";
    $username = isset($_POST["uname"]) ? $_POST["uname"] : "";
    $email = isset($_POST["mail"]) ? $_POST["mail"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    // Insert manual sign-up details into the database
    $sql = "INSERT INTO users (firstname, lastname, username, email, password) 
            VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        $showalert = "account created";
    } else {
        $showerr = "something went wrong";
    }

    $conn->close();
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
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="893098615674-71fcgd3hrv2tl93hhb7srfu2v4p8pbs9.apps.googleusercontent.com">
    <title>FitPlay | Sign Up</title>
</head>




<body>

<?php 
	
	
	
	
	if($showalert)
	{
	echo '
	<div class="alert alert-success" role="alert">
  Success ! <a href="user.php" class="alert-link">Now you can log in</a>.
</div>
	';
	}
	
	elseif($showerr)
	{
	echo '
	<div class="alert alert-success alert-dismissible fade show my-2" role="alert">
  <strong>success!</strong>'.$showerr.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
  </div>';
	}
	
	
	
	
	
	
	
  ?>

<script>
        function onSignIn(googleUser) {
            // Get user details
            var profile = googleUser.getBasicProfile();
            var userId = profile.getId();
            var userName = profile.getName();
            var userEmail = profile.getEmail();

            // Send user details to the server for database entry
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'process_google_signup.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            
            // Send the user details as form data
            var formData = 'userId=' + encodeURIComponent(userId) +
                           '&userName=' + encodeURIComponent(userName) +
                           '&userEmail=' + encodeURIComponent(userEmail);

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Handle the server's response, if needed
                    console.log(xhr.responseText);
                }
            };

            xhr.send(formData);
        }
    </script>


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
                <form method="post" >
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
                   <!-- <div class="input-group mb-3">
                    <button class="btn btn-lg btn-light w-100 fs-6"><img src="google.png" style="width:20px" class="me-2"><small>Sign In with Google</small></button>
                   </div> -->
                   <!-- Update the data-redirecturi attribute to match your login page URI -->
<div class="g-signin2" data-onsuccess="onSignIn" data-redirecturi="http://localhost/fitplay_repo/log_in.php"></div>


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
