<?php

require_once('Bdd.php');


function getArticles()
{
    $bdd = connect();
    // Récupération des 10 derniers messages
    $req = $bdd->query('SELECT id,titre, auteur, contenu, date_creation FROM billets ORDER BY ID DESC LIMIT 0, 10');

    return $req->fetchAll();
}



function getArticleById($id)
{

    $bdd = connect();

    // Récupération du message avec le bon ID
    $req = $bdd->prepare('SELECT id,titre, auteur, contenu, date_creation FROM billets WHERE id=:id');

    $req->execute(['id' => $id]);
    $donnes = $req->fetch();

    return $donnes;
}


function addArticles()
{
    $bdd = connect();

    // Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO billets (titre, auteur,contenu,date_creation) VALUES(:titre,:auteur,:contenu,NOW())');
    $req->execute([
        'titre' => htmlspecialchars($_POST['titre']),
        'auteur' => htmlspecialchars($_POST['auteur']),
        'contenu' => htmlspecialchars($_POST['contenu']),
    ]);
}
