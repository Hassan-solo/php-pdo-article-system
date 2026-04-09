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

    $imageName = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];

    $path = "uploads/" . $imageName;

    move_uploaded_file($tmpName, $path);

    $article->Update($id, $title, $content, $created_at, $imageName);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit</title>
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

        <form method="POST"  enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $art['id']; ?>">

            <input type="text" name="title" value="<?php echo htmlspecialchars($art['title']); ?>" required>
            <br><br>

            <textarea name="content" required><?php echo htmlspecialchars($art['content']); ?></textarea>
            <br><br>

            <input type="file" name="image">
            <br><br>

            <button type="submit">Update</button>

        </form>
    </div>

</body>

</html>