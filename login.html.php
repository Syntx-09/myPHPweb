<?php
include __DIR__. '/inc/auth_login.php';
include __DIR__. '/templates/header.html.php';
// session_start();

if (isset($_SESSION['user'])) {
    header('location: index.php');
}

// if (!empty($_COOKIE)) {
//     $prevId = $_COOKIE['loginId'];
//     $rememberMe_box = $_COOKIE['rememberlogin'];
// }


?>

<?php startblock('title'); echo "Login"; endblock() ?>

<?php startblock('body') ?>

<?php if (isset($errMsg)): ?>
<?php foreach ($errMsg as $err => $value): ?>
<div class="alert alert-danger" role="alert">
        <?= $value; ?>
</div>
<?php endforeach; endif; ?>

<div class="container mx-auto col-6 shadow rounded m-3">
<div class="">
<h2 class="text-center"> Login Field</h2>
<div class="col-8 mx-auto p-3 m-1">

 <form method="POST" action="" class="">
        <div class="form-group">
            <label for="email">Email or Username:</label>
            <input type="text" name="loginId" value="" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" />
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="rememberMe"  value="<?//= $rememberMe_box ?>" />
            <label for="remember" class="form-check-label">Remember Me</label>
        </div>
        <div>
            <button class="btn btn-primary" type="submit" name="login">Login</button>
   
        </div>
        
        <a href="passwordreset.php" class="">Forget Password</a>

    </form>

</div>

</div>
</div>
<?php endblock() ?>



