
<?php
include 'templates/header.html';



?>


<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <a class="navbar-brand" href="">FarmDesk</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>

<?php if (isset($_SESSION)): ?>

    <li class="nav-item">
        <a class="nav-link" href="/logout.php">Logout</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./profile.html.php" >My Profile</a>
    </li>
    
<?php else:?>

    <li class="nav-item">
        <a class="nav-link" href="./reg.html.php">Register</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./login.html.php" >Login</a>
    </li>
<?php endif; ?>

    </ul>
</nav>

