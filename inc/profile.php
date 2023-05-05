<?php
include './inc/dbconn.php';
 
 if (isset($_POST['editProfile'])) {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $phone = htmlspecialchars($_POST['phone']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $email = strtolower($_POST['email']);
    $id = $_SESSION['uid'];

    try {
        $sql = "UPDATE users SET phone = :phone, email = :email WHERE uid = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id', $id);
 
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount()) {
            // session_unset();
            // // session_write_close();
            // $_SESSION['phone'] = $result['phone'];
            // $_SESSION['email'] = $result['email'];

            echo "<script type='text/javascript'> alert('Update Success.') </script><br>";
        }
    } catch (PDOException $e) {
        echo "Error; " . $e->getMessage();
    }
}

