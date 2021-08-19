<?php

require_once('Manager.php');


class CommentaireManager extends Manager
{


    public function getCommentaires()
    {
        $bdd = $this->connect();
        // Récupération des 10 derniers messages
        $req = $bdd->query('SELECT id,titre, auteur, contenu, date_creation FROM billets ORDER BY ID DESC LIMIT 0, 10');

        return $req;
    }


    public function getCommentairesByIdBillet($idArticle)
    {

        $bdd = $this->connect();
        // Récupération des commentaires  avec le bon ID du billets
        $reponse = $bdd->prepare('SELECT id,id_billets, auteur, commentaire, date_commentaire FROM commentaires WHERE id_billets=:id_billets ORDER BY date_commentaire DESC');

        $reponse->execute(['id_billets' => $idArticle]);

        $donnees = $reponse->fetchAll();

        return $donnees;
    }

    public function nbrCommentaires($idArticle)
    {
        $bdd = $this->connect();
        // Récupération nombre de commentaires
        $reponse = $bdd->prepare('SELECT COUNT(*) FROM commentaires WHERE id_billets = :idArticle');

        $reponse->execute(['idArticle' => $idArticle]);

        $nbr = $reponse->fetch();

        return $nbr[0];
    }


    public function addCommentaire($id_billets, $auteur, $commentaire)
    {
        $bdd = $this->connect();

        // Insertion du message à l'aide d'une requête préparée
        $req = $bdd->prepare('INSERT INTO commentaires (id_billets, auteur,commentaire,date_commentaire) VALUES(:id_billets,:auteur,:commentaire,NOW())');
        $req->execute([
            'id_billets' => $id_billets,
            'auteur' => $auteur,
            'commentaire' => $commentaire,
        ]);
    }
}
