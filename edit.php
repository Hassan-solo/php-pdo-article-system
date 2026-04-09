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
    <link rel="stylesheet" href="css/update.css">
</head>
<body>

   <header>
        <h2>B-Pfe</h2>
        <nav>
            <a href="#home">Home</a>
            <a href="#task">Article</a>
             <a href="create.php" class="add_article">Add Article</a>
        </nav>
       
    </header>

  
 
 <div class="os">
      <div>
       <div class="image">

                    <svg width="500" height="460" viewBox="0 0 776 870" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g filter="url(#filter0_d_0_1)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M403.512 814.896C477.674 795.71 482.504 682.893 540.508 631.643C586.467 591.036 667.838 604.303 700.934 552.108C734.339 499.427 721.134 428.837 708.062 367.399C695.638 309.008 658.733 262.983 628.549 211.903C591.717 149.575 577.983 59.6976 511.396 34.5895C445.262 9.65242 375.718 61.3118 312.196 92.6154C257.197 119.719 209.681 156.737 168.9 203.371C127.466 250.753 82.6575 300.622 75.0029 363.856C67.3958 426.697 104.823 483.152 127.926 541.853C152.177 603.468 167.127 670.076 213.676 716.195C265.795 767.832 333.326 833.053 403.512 814.896Z" fill="#F7F217" />
                        </g>
                        <rect y="52" width="775.47" height="572" fill="url(#pattern0_0_1)" />
                        <defs>
                            <filter id="filter0_d_0_1" x="46" y="-4.76837e-07" width="728" height="870" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="12" dy="12" />
                                <feGaussianBlur stdDeviation="20" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.968627 0 0 0 0 0.94902 0 0 0 0 0.0901961 0 0 0 0.11 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_0_1" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_0_1" result="shape" />
                            </filter>
                            <pattern id="pattern0_0_1" patternContentUnits="objectBoundingBox" width="1" height="1">

                        </defs>
                    </svg>
                    <img src="images/woman_1.png" alt="" class="man_picture">

                </div>

  </div>

<div>
     <h1>Edit Article</h1>

  <form method="POST">

    <input type="hidden" name="id" value="<?php echo $art['id']; ?>">

    <input type="text" name="title" value="<?php echo htmlspecialchars($art['title']); ?>" required>
    <br><br>

    <textarea name="content" required><?php echo htmlspecialchars($art['content']); ?></textarea>
    <br><br>

    <button type="submit">Update</button>

  </form>
</div>
 </div>

</body>
</html>