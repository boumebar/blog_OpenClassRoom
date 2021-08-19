<?php

session_start();

require('controllers/articleController.php');
require('controllers/commentaireController.php');
require('controllers/contactController.php');


try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listArticles') {
            listArticles();
        } elseif ($_GET['action'] == 'article') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                article();
            } else {
                throw new Exception('Aucun article ne correspond à votre recherche');
            }
        } elseif ($_GET['action'] == 'contact') {
            contact();
        } elseif ($_GET['action'] == 'articleForm') {
            articleForm();
        } elseif ($_GET['action'] == 'addArticle') {
            if (!empty($_POST['auteur']) && !empty($_POST['titre']) && !empty($_POST['contenu'])) {
                addArticle(htmlspecialchars($_POST['titre']), htmlspecialchars($_POST['auteur']), htmlspecialchars($_POST['contenu']));
            } else
                throw new Exception('Vous n\'avez pas renseigner tout les champs');
        } elseif ($_GET['action'] == 'addCommentaire') {
            if (isset($_POST['id_billets']) && !empty($_POST['auteur']) && !empty($_POST['commentaire'])) {
                addCommentaire(htmlspecialchars($_POST['id_billets']), htmlspecialchars($_POST['auteur']), htmlspecialchars($_POST['commentaire']));
            } else {
                throw new Exception('Tout les champs ne sont pas renseignés!');
            }
        } else {
            listArticles();
        }
    } else {
        listArticles();
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require('views/errorView.php');
}
