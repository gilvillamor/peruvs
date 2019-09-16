<?php 

include'../connection/connect.php';

$get_id=$_GET['id'];

mysqli_query($con, "delete from members where id = '$get_id' ")or die(mysqli_error());
header('location:index.php');
?>