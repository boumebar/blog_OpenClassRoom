<?php


class Manager
{
    public function connect()
    {
        // Connexion à la base de données
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=oc_blogex;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        return $bdd;
    }
}
