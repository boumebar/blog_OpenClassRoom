<?php

$backgroundImage = 'about-bg.jpg';
$title = htmlspecialchars($article['titre']);
$subheading = 'Par <em>' . htmlspecialchars($article['auteur']) . '</em> le ' . htmlspecialchars($article['date_creation']);



ob_start();
?>


<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-9 col-xl-8">

                <p><?= htmlspecialchars($article['contenu']) ?></p>

            </div>
        </div>
    </div>
</article>


<div class="container">
    <div class="be-comment-block">
        <h1 class="comments-title"><?php echo 'Commentaires ' . ($nbrCommentaire > 0 ? "($nbrCommentaire)" : " ") ?></h1>
        <?php
        foreach ($commentaires as $commentaire) {

            $date = strtotime($commentaire['date_commentaire']);
        ?>
            <div class="be-comment">
                <div class="be-comment-content">

                    <span class="be-comment-name">
                        <a href="blog-detail-2.html"><?= htmlspecialchars($commentaire['auteur']) ?></a>
                    </span>
                    <span class="be-comment-time">
                        <i class="fa fa-clock-o"></i>
                        <?= date('M', $date) ?> <?= date('j', $date) ?>, <?= date('Y', $date) ?> à <?= date('H', $date) ?>:<?= date('i', $date) ?>
                    </span>

                    <p class="be-comment-text">
                        <?= htmlspecialchars($commentaire['commentaire']) ?>
                    </p>
                </div>
            </div>
        <?php } ?>

        <form class="form-block" action="add_commentaire.php" method="post">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <input class="form-input" name="auteur" type="text" placeholder="Nom">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <textarea name="commentaire" class="form-input" required="" placeholder="Votre commentaire"></textarea>
                    </div>
                </div>
                <input type="hidden" name="id_billets" value="<?= $_GET['id'] ?>">
                <button class="btn btn-primary pull-right" type="submit">envoyer</button>
            </div>
        </form>
    </div>
</div>


<?php

$content = ob_get_clean();

require('layout.php');
