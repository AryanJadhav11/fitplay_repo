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
$showalert=false;
$login=false;
$showerr=false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{ 
	$err="";
	$username=$_POST["uname"];
	//$email=$_POST["nmail"];
	$password=$_POST["password"];
	
	
	
		$sql="Select * from `users` where username='$username' AND password='$password';";
		$result=mysqli_query($conn,$sql);
		$num=mysqli_num_rows($result);
		
		if($num)  
		{
			// SESSION_START();
			// $_SESSION['username']=$username;
			$showalert="Welcome Back";
			header("location: index.html");

		}
		else
		{
			$showerr="Account Doesnt Exits ,";
		}
		
	
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
    <title>FitPlay | Log In</title>
</head>


<body>

<?php 
	
	
	
	
	
	
 if($showerr)
	{
	echo '
	<div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
  <strong>Oops !</strong>'.$showerr.'  <a href="signup.php" class="alert-link">Create One</a>.
   
  </div>';
	}
  ?>



















<!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: #113cbc">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight" style="color:white;font-family: 'Courier New', Courier, monospace; font-weight: 600;">
          "Welcome Back to FitPlay<br />
            <span class="text-primary" style="color:white;font-family: 'Courier New', Courier, monospace; font-weight: 600;">Your Fitness Hub Awaits!"</span>
          </h1>
          <p style="color:white; font-weight:300; font-family: 'Courier New', Courier, monospace; font-weight: 500;">
          Hello again! We're thrilled to have you back on FitPlay, your dedicated space for fitness and well-being. Log in now to continue your fitness journey with ease. Whether it's booking a turf for a game or reserving your favorite spot in the gym, we've got you covered.
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form method="post">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                

              
                <div class="form-outline mb-4">
                  <input type="text" id="uname"  name="uname" class="form-control" required autocomplete="off" />
                  <label class="form-label" for="form3Example1">User Name</label>
                </div>

                
                

                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control" required autocomplete="off"/>
                  <label class="form-label" for="form3Example1">Password</label>
                </div>
                

                <!-- Submit button -->
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6" type="submit" value="Submit">Log In</button>
                  </div>

                <!--sign up -->
                
                <div class="row">
                    <small>New to FitPlay ? <a href="login.php">Sign Up</a></small>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
</body>