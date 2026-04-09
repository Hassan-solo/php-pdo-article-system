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
    <link rel="stylesheet" href="css/create.css">
</head>

<body>


   <div>
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