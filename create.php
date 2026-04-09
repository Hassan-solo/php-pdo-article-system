<?php

require_once "Article.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST['add'])) {

        $title = $_POST['title'];
        $content = $_POST['content'];

        $article = new Article();
        $article->createArticle($title, $content);

        header("Location: index.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/update.css">
</head>

<body>



    <header>
        <h2>B-Pfe</h2>
        <nav>
            <a href="index.php">Home</a>
            <a href="#task">Article</a>
            <a href="create.php" class="add_article">Add Article</a>
        </nav>

    </header>



    <div class="os">
        <form method="POST" action="">

            <input type="text" name="title" placeholder="Title" required>
            <br><br>

            <textarea name="content" placeholder="Content" required></textarea>
            <br><br>

            <button type="submit" name="add">Add Article</button>
        </form>

    </div>

</body>

</html>