<?php

require_once('Manager.php');


class ArticleManager extends Manager
{
    public function getArticles()
    {
        $bdd = $this->connect();
        // Récupération des 10 derniers messages
        $req = $bdd->query('SELECT id,titre, auteur, contenu, date_creation FROM billets ORDER BY ID DESC LIMIT 0, 10');

        return $req->fetchAll();
    }



    public function getArticleById($id)
    {


        $bdd = $this->connect();

        // Récupération du message avec le bon ID
        $req = $bdd->prepare('SELECT id,titre, auteur, contenu, date_creation FROM billets WHERE id=:id');

        $req->execute(['id' => $id]);
        $donnes = $req->fetch();

        return $donnes;
    }


    public function addArticle($titre, $auteur, $contenu)
    {
        $bdd = $this->connect();

        // Insertion du message à l'aide d'une requête préparée
        $req = $bdd->prepare('INSERT INTO billets (titre, auteur,contenu,date_creation) VALUES(:titre,:auteur,:contenu,NOW())');
        $req->execute([
            'titre' => $titre,
            'auteur' => $auteur,
            'contenu' => $contenu,
        ]);
    }
}
