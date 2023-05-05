<?php

session_start();
if (empty($_SESSION)) {
    header('Location: login.html.php');
    exit();
}
$uid = $_SESSION['uid'];


