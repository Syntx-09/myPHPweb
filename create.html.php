<?php
session_start();
include('./templates/header.html.php');
include('.__DIR__ . /.../create_article.php');
include('./access.php');


?>

<div class="col-md-9 mx-auto col-xl-8 py-md-3 pl-md-5 bd-content">


        <?php if (isset($errMsg)): ?>
        <?php foreach ($errMsg as $err => $value): ?>
    <div class="alert alert-danger" role="alert">
                <?= $value; ?>
    </div>
        <?php endforeach; endif; ?>


<form action="" method="POST">
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" value="<?= $title ?>" type="text" name="title" /><br>
    </div>
    <div class="form-group">
        <label for="article">Article</label>

        <textarea class="form-control" name="article" col="5" value="<?= $article ?>" ></textarea>
    </div>
    <button class="btn btn-primary" name="addArticle">Publish</button>
    
</form>


</div>

