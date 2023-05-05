<?php
session_start();
include(__DIR__. '/access.php');
include(__DIR__. '/inc/dbconn.php');
include_once(__DIR__. '/templates/header.html.php');

$sql = "SELECT * FROM articles WHERE uid = :uid";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':uid', $uid);
$uid=$_SESSION['uid'];
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($result) {
    foreach ($result as $row) {
        echo $row['title'] .'<br>';
    echo $result['title'];}
}

