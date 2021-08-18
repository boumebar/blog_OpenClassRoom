<?php


require('models/ArticleManager.php');
require('models/CommentaireManager.php');

if (isset($_GET['id'])) {

    $articleManager = new ArticleManager();
    $commentaireManager = new CommentaireManager();


    $article = $articleManager->getArticleById(htmlspecialchars($_GET['id']));
    $commentaires = $commentaireManager->getCommentairesByIdBillet(htmlspecialchars($_GET['id']));
    $nbrCommentaire = $commentaireManager->nbrCommentaires($_GET['id']);

    if (!$article) {
        header('Location:index.php');
    }
    require('views/articleView.php');
} else {
    header('Location:index.php');
}
