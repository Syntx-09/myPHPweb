<?php
include('ti.php');
include_once(__DIR__ . '/../inc/var.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="templates/bootstrap/css/bootstrap.css" >
    <link rel="stylesheet" href="templates/bootstrap/icons/font/bootstrap-icons.css" > -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title><?php startblock('title') ?><?php endblock() ?></title>
</head>
<body >
    <nav class="navbar navbar-expand navbar-light bg-light">
        <a class="navbar-brand" href="">FarmDesk</a>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
      
    <?php if (isset($_uid)): ?>
      
          <li class="nav-item">
              <a class="nav-link" href="./inc/logout.php">Logout</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="./profile.html.php" >My Profile</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="./posts.html.php" >Posts</a>
          </li>
    
    <?php else:?>
      
          <li class="nav-item">
              <a class="nav-link" href="/reg.html.php">Register</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/login.html.php" >Login</a>
          </li>
    <?php endif; ?>
      
          </ul>
      </nav>
      <?php startblock('body') ?><?php endblock() ?>



    <script src="templates/bootstrap/js/bootstrap4-4.js" ></script>
    <script src="templates/bootstrap/js/jquery-3-6.js" ></script>
    <script src="templates/bootstrap/js/popper.js" ></script>

</body>
</html>

