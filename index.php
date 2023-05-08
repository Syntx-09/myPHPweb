<?php
include __DIR__. '/access.php';
include(__DIR__. '/templates/header.html.php');

?>

<?php startblock('title'); echo $_SESSION['user']; endblock(); ?>

  <?php  startblock('body') ?>
  <div class="container row-sm">
      <h2> Welcome <?= $_SESSION['user'] ?> </h2>

      <p>Feel free... Keep making moves<br> It ain't right to remain without a purpose.</p>

      <a href="create.html.php" class="btn btn-dark"> Post an article </a>

      
      <footer>This app is brought to u by Paradox@SyntX</footer>
      

        
  </div>


<?php endblock(); ?>
  


