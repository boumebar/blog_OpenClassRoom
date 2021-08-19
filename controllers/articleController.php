<?php

require_once('models/ArticleManager.php');
require_once('models/CommentaireManager.php');

function listArticles()
{

    $articleManager = new ArticleManager();
    $articles = $articleManager->getArticles();


    function reduireChaineMot($chaine, $nb_mots, $delim = '...')
    {

        $txt = "";
        $stringTab = explode(" ", $chaine);

        if (count($stringTab) > $nb_mots) {
            for ($i = 0; $i < $nb_mots; $i++) {
                $txt .= " " . $stringTab[$i];
            }
            $txt .= $delim;
        } else {
            $txt = $chaine;
        }

        return $txt;
    };

    require('views/articlesView.php');
}

function article()
{
    $articleManager = new ArticleManager();
    $commentairesManager = new CommentaireManager();


    $article = $articleManager->getArticleById($_GET['id']);
    $commentaires = $commentairesManager->getCommentairesByIdBillet($_GET['id']);
    $nbrCommentaire = $commentairesManager->nbrCommentaires($_GET['id']);

    if (!$article) {
        header('Location:index.php');
    }

    require('views/articleView.php');
}


function addArticle($titre, $auteur, $contenu)
{
    $articleManager = new ArticleManager();
    $article = $articleManager->addArticle($titre, $auteur, $contenu);


    header('Location: index.php');
}

function articleForm()
{
    require('views/postView.php');
}
