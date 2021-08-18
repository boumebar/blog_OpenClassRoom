<?php

session_start();

require('models/ArticleManager.php');


$articleManager = new ArticleManager();
$articles = $articleManager->getArticles();


// fonction reduire texte long pour apercu 

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


require('views/accueilView.php');
