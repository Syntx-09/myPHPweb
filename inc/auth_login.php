<?php
include(__DIR__. '/dbconn.php');






if (isset($_POST['login'])) {
    // $email = filter_var(strtolower(($_POST['email'])), FILTER_VALIDATE_EMAIL);
    $loginId = htmlspecialchars(strtolower($_POST['loginId']));
    $password = htmlspecialchars($_POST['password']);
    $rememberMe = htmlspecialchars($_POST['rememberMe']);
    
    

    if (empty($loginId)) {
        $errMsg['login'] = "Please enter your username or email";
    } elseif (empty($password)) {
        $errMsg['login'] = "Please enter your password";
    } else {
        try {
            $sql = "SELECT * FROM users WHERE email = :loginId OR username = :loginId";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':loginId', $loginId);
            // $stmt->bindValue(':loginId', $username);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($stmt->rowCount() > 0) {
                if (password_verify($password, $result['password'])) {
                    session_start();

                    $_SESSION['user'] = $result['username'];
                    $_SESSION['email'] = $result['email'];
                    $_SESSION['phone'] = $result['phone'];
                    $_SESSION['name'] = $result['fname'] . " " . $result['lname'];
                    $_SESSION['track'] = $result['track'];
                    // $_SESSION['id'] = $logUID;
                    $_SESSION['uid'] = $result['uid'];

    
                    header("location: home.html.php");
                    echo $_COOKIE['loginId'];
                } else {
                    $errMsg['login'] = "Invalid login details";
                    //include "login.html.php"; Prints the login form twice after failed validation
                }
            } else {
                $errMsg['login'] = "Invalid login details";
                // include "login.html.php"; Prints the login form twice after failed validation
            }
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        


    }
}//else{
//     include(__DIR__. '/../login.html.php');
// }

// header('location: ../login.html.php');