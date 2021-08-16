<?php

require_once('Bdd.php');

function getCommentaires()
{
    $bdd = connect();
    // Récupération des 10 derniers messages
    $req = $bdd->query('SELECT id,titre, auteur, contenu, date_creation FROM billets ORDER BY ID DESC LIMIT 0, 10');

    return $req;
}


function getCommentairesByIdBillet($id)
{

    $bdd = connect();
    // Récupération des commentaires  avec le bon ID du billets
    $reponse = $bdd->prepare('SELECT id,id_billets, auteur, commentaire, date_commentaire FROM commentaires WHERE id_billets=:id_billets ORDER BY date_commentaire DESC');

    $reponse->execute(['id_billets' => $id]);

    $donnees = $reponse->fetchAll();

    return $donnees;
}

function addCommentaires()
{
    $bdd = connect();

    // Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO commentaires (id_billets, auteur,commentaire,date_commentaire) VALUES(:id_billets,:auteur,:commentaire,NOW())');
    $req->execute([
        'id_billets' => htmlspecialchars($_POST['id_billets']),
        'auteur' => htmlspecialchars($_POST['auteur']),
        'commentaire' => htmlspecialchars($_POST['commentaire']),
    ]);
}
