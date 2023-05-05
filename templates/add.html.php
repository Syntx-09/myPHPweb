<?php

include './inc/dbconn.php';

if (isset($_POST['edit'])) {
    $username = htmlspecialchars($_POST['username']);
}