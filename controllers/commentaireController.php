<?php
require_once('models/CommentaireManager.php');


function addCommentaire($id_billets, $auteur, $commentaire)
{
    $commentaireManager = new CommentaireManager();

    $commentaireManager->addCommentaire($id_billets, $auteur, $commentaire);

    // Redirection du visiteur vers la page de l'article
    header("Location: index.php?action=article&id=" . $id_billets . "");
}
