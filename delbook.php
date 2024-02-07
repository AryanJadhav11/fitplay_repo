<?php


$server='localhost';
$user='root';
$db='turf';
$pass='';

$coni=mysqli_connect($server,$user,$pass,$db);

if(!$coni)
{
 die(mysqli_error($coni));
}



if(isset($_GET['deleteid']))
{
   $id=$_GET['deleteid'];
   $sql3="delete from booking where boid='$id';";
   $result=mysqli_query($coni,$sql3);
   if($result)
   {
      echo '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Done!</h4>
  <p>Turf has been unlisted successfully</p>
  <hr>
 
   <a href="admin.php" class="btn btn-primary" >
                            Go back
                           </a>
  
</div>';

   }
   else
   {
      die(mysqli_error($coni));
   }
}
   


?>