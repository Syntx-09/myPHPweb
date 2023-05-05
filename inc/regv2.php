<?php
require_once __DIR__. '/dbconn.php';
// include __DIR__ . '/reg.html.php';


$errMsg = [];

//This takes collects the data from the form
if (isset($_POST['register'])) {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = strtolower($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $verifyPass = htmlspecialchars($_POST['verifyPassword']);
    $track = htmlspecialchars($_POST['track']);

    $blankField = "field is empty";
//Validation check
    if (empty($fname)) {
        $errMsg['fname'] = "First name " . $blankField;
    }

    if (empty($lname)) {
        $errMsg['lname']  = "Last name " . $blankField;
    }

    if (empty($phone)) {
        $errMsg['phone']  = "Phone number " . $blankField;
    }

    if (empty($email)) {
        $errMsg['email']  = "Email " . $blankField;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errMsg['email'] = "Invalid Email";
    }

    if (empty($username)) {
        $errMsg['username']  = "Username " . $blankField;
    }

    if (empty($password)) {
        $errMsg['pass'] = "Password " . $blankField;
    } elseif (strlen($password) < 4) {
        $errMsg['pass'] = "<br><b>Password must be more than 4 characters</b>";
        }
    if ($verifyPass != $password) {
           $errMsg['pass'] = "Passwords do not match";
    }

    if (empty($track)) {
        $errMsg['track'] = "Select a track";
    }

    if (empty($errMsg)) {
        try {
            $sql = "SELECT * FROM users WHERE email = :email OR username = :username";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':username', $username);
            
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($stmt->rowCount() > 0) {
                if ($result['email']==$email) {
                   $errMsg['email'] = "Email aleady exist.";
                }
                if ($result['username']==$username) {
                    $errMsg['username'] =  "Username already taken. Try another.";
                }
            } else {
                $hashPass = password_hash($password, PASSWORD_BCRYPT);
                //Generating a UniqueID-Optional
                $bytes = random_bytes(1);
                $bytes2 = random_bytes(2);
                $uid = bin2hex($bytes.$bytes2);
                $hash_uid = password_hash($uid, PASSWORD_BCRYPT);

                $sql = "INSERT INTO users (fname, lname, phone, email, username, password, track, uid, hash_uid) VALUES (:fname, :lname, :phone, :email, :username, :password, :track, :uid, :hash_uid)";
                $insert = $pdo->prepare($sql);
                $insert->bindValue(':fname', $fname);
                $insert->bindValue(':lname', $lname);
                $insert->bindValue(':phone', $phone);
                $insert->bindValue(':email', $email);
                $insert->bindValue(':username', $username);
                $insert->bindValue(':password', $hashPass);
                $insert->bindValue(':track', $track);
                $insert->bindValue(':uid', $uid);
                $insert->bindValue(':hash_uid', $hash_uid);
                
                $insert->execute();

                if ($insert->rowCount()) {
                    echo "<script type='text/javascript'> alert('Registration Success. You can now login with your details.') </script><br>";
                    header('location: login.html.php') ;
                }

            }
        } catch (PDOException $e) {
            echo "Error: ". $e->getMessage();

        }
    } else {
        //include 'reg.html.php';
    }

} //else {
//     header('location: reg.html.php');
// }


//Login Autenticatin SC

// if (isset($_SESSION['user'])) {
//     header("location: home.html.php");
// }

