<?php 
  session_start();

  require '../admin/connection/connect.php';
  require '../admin/functions.php';

  if(isset($_SESSION['username'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>PERUV</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">

	  
</head>
<body>

  <?php include 'header.php'; ?>

  <section>

    
    
<!--START Para container ht main button menu -->
<div class="container">
<div style="height:50px;"></div>
<div class="row">
<div class="well" style="width:80%; padding:auto; margin:auto">

<div class="options">
<a class="btn btn-primary" href="gallery/index.php">Gallery</a>
<a class="btn btn-primary" href="event/index.php">Events</a>
<a class="btn btn-primary" href="member/index.php">Members</a>
</div>

</div>
</div>
</div>
</div>
<!--END Para container ht main button menu -->

  </section>


	<script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

<?php


  } else {
    header("location:index.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($con);

?>