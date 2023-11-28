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


