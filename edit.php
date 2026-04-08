<?php

require_once "Article.php";

$article = new Article();

// get id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $art = $article->getById($id);
}

// update
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $created_at = date("Y-m-d H:i:s");

    $article->Update($id, $title, $content, $created_at);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
</head>
<body>

<h1>Edit Article</h1>

<form method="POST">

    <input type="hidden" name="id" value="<?php echo $art['id']; ?>">

    <input type="text" name="title" value="<?php echo htmlspecialchars($art['title']); ?>" required>
    <br><br>

    <textarea name="content" required><?php echo htmlspecialchars($art['content']); ?></textarea>
    <br><br>

    <button type="submit">Update</button>

</form>

</body>
</html>