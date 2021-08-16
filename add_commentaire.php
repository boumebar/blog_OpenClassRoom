<?php

session_start();

require('models/Commentaires.php');

addCommentaires();

// Redirection du visiteur vers la page de l'article
header("Location: commentaires.php?id=" . $_POST['id_billets'] . "");
