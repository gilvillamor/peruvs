<?php 

include'../connection/connect.php';

$get_id=$_GET['photoid'];

mysqli_query($con, "delete from photo where photoid = '$get_id' ")or die(mysqli_error());
header('location:index.php');
?>