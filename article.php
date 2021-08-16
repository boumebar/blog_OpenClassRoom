<?php


require('models/Articles.php');
require('models/Commentaires.php');

if (isset($_GET['id'])) {
    $article = getArticleById(htmlspecialchars($_GET['id']));
    $donnees = getCommentairesByIdBillet(htmlspecialchars($_GET['id']));

    if (!$article) {
        header('Location:index.php');
    }
    require('views/articleView.php');
} else {
    header('Location:index.php');
}
