<?php

// Démarre la session
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport">
        <title>Réseau social - Erreur 404</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <?php require_once 'layouts/header.php'; ?>

        <br> <br> <br> <br> <br> <br> <br> <br> <br>

        <div class="mx-auto w-50 pt-5">
            <h1 class="display-1">
                Erreur 404
            </h1>
            
            <p class="h5 mb-5"> Réponse du serveur signalant une page introuvable !</p>
            <a href="index.php">Retour sur la page d'accueil</a>
        </div>

        <?php require_once 'layouts/footer.php'; ?>
    </body>
</html>