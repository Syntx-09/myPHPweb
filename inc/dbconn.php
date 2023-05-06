<?php

    $host = 'localhost';
    $user = 'paradox';
    $pwd = 'paradox';
    $dbname = 'myPHPweb';

    
   
    try { $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "DB connect OK";
    } catch (PDOException $e) {
        echo 'Connection failed: <br>' . $e->getMessage();
        }


        

    

