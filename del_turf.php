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
   $sql3="delete from grd where id='$id';";
   $result=mysqli_query($coni,$sql3);
   if($result)
   {
     header("Location:admin_turf.php");

   }
   else
   {
      die(mysqli_error($coni));
   }
}
   


?>