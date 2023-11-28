<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$uname=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

//connection 
$conn=new mysqli('localhost','root','','fitplay_users');
if($conn->connect_error)
{
    die('connection failer')
}
else{
    $stmt=$conn->prepare("insert into users(firstname, lastname, username, email, password)
    values(?,?,?,?,?)");
    //bind the paramters to the placeholders in the query
    $stmt->bind_param('sssss',$fname,$lname,$uname,$email,$password);
    if ($stmt->execute()) {
        header("Location:index.html");
    }
    else
    {
        echo("try again");
    }

}
?>