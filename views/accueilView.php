<?php $title = 'Blog high-tech' ?>

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
</div>





<?php ob_start() ?>
<?php
?>
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php foreach ($articles as $article) { ?>
                <!-- Post preview-->
<div class="post-preview">
    <a href="post.html">
        <h2 class="post-title"><?= htmlspecialchars($article['titre']) ?></h2>
        <h3 class="post-subtitle"><?= htmlspecialchars($article['contenu']) ?></h3>
    </a>
    <p class="post-meta">
        Posté par
        <a href="#!"><?= htmlspecialchars($article['auteur']) ?></a>
        le <?= htmlspecialchars($article['date_creation']) ?>September 24, 2021
    </p>
</div>
<!-- Divider-->
<hr class="my-4" />
<?php } ?>
<!-- Post preview-->
<div class="post-preview">
    <a href="post.html">
        <h2 class="post-title">I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.</h2>
    </a>
    <p class="post-meta">
        Posted by
        <a href="#!">Start Bootstrap</a>
        on September 18, 2021
    </p>
</div>
<!-- Divider-->
<hr class="my-4" />
<!-- Post preview-->
<div class="post-preview">
    <a href="post.html">
        <h2 class="post-title">Science has not yet mastered prophecy</h2>
        <h3 class="post-subtitle">We predict too much for the next year and yet far too little for the next ten.</h3>
    </a>
    <p class="post-meta">
        Posted by
        <a href="#!">Start Bootstrap</a>
        on August 24, 2021
    </p>
</div>
<!-- Divider-->
<hr class="my-4" />
<!-- Post preview-->
<div class="post-preview">
    <a href="post.html">
        <h2 class="post-title">Failure is not an option</h2>
        <h3 class="post-subtitle">Many say exploration is part of our destiny, but it’s actually our duty to future generations.</h3>
    </a>
    <p class="post-meta">
        Posted by
        <a href="#!">Start Bootstrap</a>
        on July 8, 2021
    </p>
</div>
<!-- Divider-->
<hr class="my-4" />
<!-- Pager-->
<div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Anciens Posts →</a></div>
</div>
</div>
</div>
<?php $content = ob_get_clean() ?>

<?php require('layout.php') ?>