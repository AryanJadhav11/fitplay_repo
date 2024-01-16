<?php


$server='localhost';
$user='root';
$db='mg';
$pass='';

$conie=mysqli_connect($server,$user,$pass,$db);

if(!$conie)
{
 die(mysqli_error($conie));
}



if(isset($_GET['deleteid']))
{
   $id=$_GET['deleteid'];
   $sql3="delete from order_his where item_id='$id';";
   $result=mysqli_query($conie,$sql3);
   if($result)
   {
      echo '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Done!</h4>
  <p>Product has been removed </p>
  <hr>
 
   <a href="mycart.php" class="btn btn-primary" >
                            Go back
                           </a>
  
</div>';

   }
   else
   {
      die(mysqli_error($conie));
   }
}
   


?>