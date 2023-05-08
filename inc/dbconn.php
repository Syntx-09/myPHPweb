<?php

    $host = 'localhost';
<<<<<<< HEAD
    $user = 'paradox';
    $pwd = 'paradox';
    $dbname = 'myPHPweb';
=======
    $user = 'yourUsername';//default is- 'root'
    $pwd = 'yourPassword';//default is null-''
    $dbname = 'personal';
>>>>>>> 1929f89e0a37f7a8ea39a7db37fffb8d323e9738

    
   
    try { $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
<<<<<<< HEAD
        // echo "DB connect OK";
=======
        //echo "DB connect OK";
>>>>>>> 1929f89e0a37f7a8ea39a7db37fffb8d323e9738
    } catch (PDOException $e) {
        echo 'Connection failed: <br>' . $e->getMessage();
        }


        

    

