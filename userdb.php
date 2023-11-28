

<?php

$showalert=false;
$showerr=false;
$showcharerr=false;
// Connection
include 'dbconnectuser.php';


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$firstname=$_POST["fname"];
	$lastname=$_POST["lname"];
    $username=$_POST["uname"];
	$email=$_POST["mail"];
	$password=$_POST["password"];
	
	$sql = "INSERT INTO `users` ( `firstname`, `lastname`, `username`, `email`, `password`) VALUES ('$firstname', '$lastname', ' $username', '$email', '$password' );";
  $result = mysqli_query($conn, $sql); 
	if($result)
  {
    $showalert=true;
  }
  {
    $showerr="something went wrong";
  }
	
}
?>
