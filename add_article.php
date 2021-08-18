<?php

session_start();
$_SESSION['nom'] = htmlspecialchars($_POST['auteur']);

require('models/ArticleManager.php');

$articleManager = new ArticleManager();

$articleManager->addArticles();

// Redirection du visiteur vers la page du minichat
header('Location: index.php');
