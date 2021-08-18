<?php

session_start();

require('models/CommentaireManager.php');

$commentaireManager = new CommentaireManager();

$commentaireManager->addCommentaires();

// Redirection du visiteur vers la page de l'article
header("Location: article.php?id=" . $_POST['id_billets'] . "");
