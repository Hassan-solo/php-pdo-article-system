<?php


require "Article.php";

$article = new Article();
$articles = $article->readAll();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- link icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <!-- link css  -->
    <link rel="stylesheet" href="css/style.css">
    <title>Courser students</title>
</head>

<body>

    <header>
        <h2>B-Pfe</h2>
        <nav>
            <a href="#home">Home</a>
            <a href="#article">Article</a>
            <a href="create.php" class="add_article">Add Article</a>
        </nav>

    </header>

    <main id="home">
        <section class="home_tasks">
            <div>
                <p>#1ranked in the market</p>
                <h2>Manage your <span>content</span> easily</h2>
                <h1>Article <span>Manager</span></h1>
                </h1>
            </div>
        </section>

        <section>
            <div class="image_tasks">
                <div class="content">
                    <h1>“</h1>
                    <p> A simple back office to manage your blog posts.
                        Create, edit, and delete articles</p>
                    <button>Add Article</button>
                </div>


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

                <div class="content">
                    <div class="content-position">
                        <h2> <i class="fa-solid fa-star"></i>4.6</h2>
                        <p>This application allows admins to manage blog content
                            using a secure PHP OOP architecture.</p>
                    </div>
                    <div class="woman_content">
                        <div>
                            <h3>Admin Panel</h3>
                            <p>PHP & MySQ</p>
                        </div>
                        <img src="images/woman.png" alt="woman">
                    </div>
                </div>
            </div>

        </section>


    </main>

    <div class="grid-container" id="article">

        <?php foreach ($articles as $art): ?>

            <div class="card">

                <img src="uploads/<?= htmlspecialchars($art['image']) ?>" alt="image">
                <div class="card-content">

                    <h3>📚<?= htmlspecialchars($art['title']) ?></h3>

                    <p>
                        <?= htmlspecialchars($art['content']) ?>
                    </p>

                    <div class="card-actions">

                        <a href="edit.php?id=<?= $art['id'] ?>" class="btn edit">Edit</a>

                        <a href="delete.php?id=<?= $art['id'] ?>"
                            class="btn delete"
                            onclick="return confirm('Are you sure?')">
                            <i class="fa-solid fa-trash"></i>
                        </a>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>




    </div>

</body>

</html>