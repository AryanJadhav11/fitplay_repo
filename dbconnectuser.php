<?php
$server='localhost';
$user='root';
$db='fitplay_users';
$pass='';

$coni=mysqli_connect($server,$user,$pass,$db);

if(!$coni)
{
 die(mysqli_error($coni));
}

?>
