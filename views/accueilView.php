<?php

$backgroundImage = 'home-bg.jpg';
$title = 'Blog high-tech';
$subheading = 'Pour tout les Geeks !!';
?>

<!-- <form action="add_article.php" method="post">
    <p>
        <label for="auteur">Auteur</label> : <input type="text" name="auteur" id="auteur" /><br />
        <label for="titre">Titre</label> : <input type="text" name="titre" id="titre" /><br />
        <label for="contenu">Message</label> : <textarea cols="20" rows="7" type="text" name="contenu" id="contenu"></textarea></br>

        <input type="submit" value="Envoyer" />
    </p>
</form>
<div>
    <h2>Derniers aticles du blog :</h2>
</div>-->





<?php ob_start() ?>

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php foreach ($articles as $article) { ?>
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="article.php?id=<?= $article['id'] ?>">
                        <h2 class="post-title"><?= htmlspecialchars($article['titre']) ?></h2>
                        <h3 class="post-subtitle"><?= htmlspecialchars($article['contenu']) ?></h3>
                    </a>
                    <p class="post-meta">
                        Posté par<?= htmlspecialchars($article['auteur']) ?>
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