<?php
require_once __DIR__. '/dbconn.php';


if (isset($_POST['addArticle'])) {
    $title = htmlspecialchars($_POST['title']);
    $article = htmlspecialchars($_POST['article']);
    $uid = $_SESSION['uid'];

    if (empty($title)) {
        $errMsg['title'] = "What is the title of your content";
    }
    if (empty($article) || strlen($article) < 20) {
        $errMsg['article'] = "Article must exceed 20 characters.";
    }

    if (empty($errMsg)) {
        try {
            $sql = "SELECT * FROM articles WHERE title = :title";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':title', $title);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($stmt->rowCount() > 0) {
                if ($result['title'] == $title) {
                    $errMsg['title'] = "Title aleady in use";
                }
            } else {
                $sql = "INSERT INTO articles (title, article, uid) VALUES (:title, :article, :uid)";
                $insert = $pdo->prepare($sql);
                $insert->bindValue(':title', $title);
                $insert->bindValue(':article', $article);
                $insert->bindValue(':uid', $uid);

                $insert->execute();
                if ($insert->rowCount()) {
                    echo "<script type='text/javascript'> alert('Article Added.') </script><br>";
                    header('location: create.html.php') ;
                }

            }
        }catch (PDOException $e) {
            echo "Error; " . $e->getMessage();
            }
    }

}
