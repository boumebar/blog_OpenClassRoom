<?php

$backgroundImage = 'home-bg.jpg';
$title = 'Blog high-tech';
$subheading = 'Pour tout les Geeks !!';


?>


<?php ob_start() ?>

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php foreach ($articles as $article) { ?>
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="article.php?id=<?= $article['id'] ?>">
                        <h2 class="post-title"><?= htmlspecialchars($article['titre']) ?></h2>
                        <h3 class="post-subtitle"><?= reduireChaineMot(htmlspecialchars($article['contenu']), 10) ?>...</h3>
                    </a>
                    <p class="post-meta">
                        Posté par <?= htmlspecialchars($article['auteur']) ?>
                        le <?= $article['date_creation'] ?>
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
            <?php } ?>
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Anciens Posts →</a></div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean() ?>

<?php require('layout.php') ?>