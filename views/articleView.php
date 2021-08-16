<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>TP blog OC</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <h1>je suis un TP de blog</h1>

    <a href="index.php">Retour à la liste des articles</a>

    <?php

    // Affichage le message (toutes les données sont protégées par htmlspecialchars)

    echo
    "<div class=\"news\" style=\"margin-top:90px\"> 
            <h3>" . htmlspecialchars($article['titre']) . ' par  <em>' . htmlspecialchars($article['auteur']) . "</em></h3>
            <p> " . htmlspecialchars($article['contenu']) . "</p>
           
        </div>
        <h2>Commentaires</h2>";



    // Affichage les commentaires (toutes les données sont protégées par htmlspecialchars)

    foreach ($donnees as $commentaire) {

        $date = strtotime($commentaire['date_commentaire']);
        $date_formated = date('d/m/Y', $date);
        $heure = date('H', $date);
        $min = date('i', $date);
        $seconde = date('s', $date);

        echo
        "
        <div class=\"commentaires\"> 
            <p><strong>" . htmlspecialchars($commentaire['auteur']) . '</strong> le  <em>' . $date_formated . "</em> à " . $heure . "h" . $min . "min" . $seconde . "s</p>
            <p> " . htmlspecialchars($commentaire['commentaire']) . "</p>
        </div>";
    }


    if (!empty($article)) {

    ?>
        <form action="commentaire_post.php" method="post">
            <p>
                <label for="auteur">Pseudo</label> : <input type="text" name="auteur" id="auteur" value="<?= $_SESSION['nom'] ?>" /><br />
                <label for="commentaire">Commentaire</label> : <input type="text" name="commentaire" id="commentaire" /><br />
                <input type="hidden" name="id_billets" value="<?= $_GET['id'] ?>">
                <input type="submit" value="Envoyer" />
            </p>
        </form>
    <?php
    }
    ?>
</body>

</html>