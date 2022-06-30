<?php

// Démarre la session
session_start();

// Vérifie si la variable "id" contenu dans l'URL est existante et non vide
if (isset($_GET['id']) && !empty($_GET['id'])) {

    // Connexion à la BDD
    require_once 'includes/connexion.php';

    // Récupération du prénom et nom de l'auteur
    $query = $db->prepare('SELECT posts.*, users.firstname, users.lastname FROM posts INNER JOIN users ON users.id = posts.user_id WHERE posts.user_id = :id ORDER BY posts.created_at DESC');
    $query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $query->execute();

    // Si aucune données n'est retournée, on redirige l'utilisateur vers la page 404
    if($query->rowCount() === 0) {
        header('Location: error404.php');
    }

    // Stocke toutes les valeurs reçues par la requête SQL dans une variable
    $posts = $query->fetchAll();
}
else {
    $error = true;
}

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Réseau social</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php require_once 'layouts/header.php'; ?>

        <?php 
            // On vérifie que la variable $error n'existe pas
            if(!isset($error)):
        ?>
            <!-- Affichage des articles de l'auteur -->
            <div class="w-50 mx-auto my-5">
                <p class="h3 mb-5">
                    <!-- Sélectionne le nom et prénom de l'auteur en allant chercher directement les valeurs dans le tableau associatif ayant pour index zéro "0" -->
                    <strong>Actualité de fidelis <?php echo $posts[0]['prenom']; ?> <?php echo $posts[0]['nom']; ?></strong>
                </p>

                <?php
                    // Boucle sur tous les articles récupérés en BDD
                    foreach($posts as $post):

                        // Fournir la date de la BDD avec le format d'entrée en BDD
                        $created_at = DateTime::createFromFormat('Y-m-d H:i:s', $post['created']);
                        $updated_at = DateTime::createFromFormat('Y-m-d H:i:s', $post['updated']);
                ?>
                    <article class="mb-5">
                        <h2 class="display-4"><?php echo $post['title']; ?></h2>
                        <small class="text-secondary">Posté le <?php echo $created_at->format('d.m.Y'); ?> par <?php echo $post['prenom']; ?> <?php echo $post['prenom']; ?></small>
                        
                        <?php 
                            // Si la colonne "updated_at" est remplie, alors on affiche un texte
                            if($updated_at !== false):
                        ?>
                            <small class="d-block text-success">
                                <strong>Mis à jour le <?php echo $updated_at->format('d.m.Y'); ?></strong>
                            </small>
                        <?php 
                            // Fin de la condition "if()"
                            endif;
                        ?>

                        <p><?php echo $post['content']; ?></p>

                        <!-- <a href="commentaire.php">Lire la suite...</a> -->
                    </article>
                <?php
                    // Fermeture de la boucle "foreach()"
                    endforeach;
                ?>
            </div>


        <?php
            // Si elle existe, cela signifie que l'ID dans l'URL
            // n'est pas déclarée ou pas renseignée, donc on affiche une erreur
            else:
        ?>
            <div class="w-50 mx-auto py-5">
                <h2 class="display-5 text-danger mb-4">
                    <strong>Un problème est survenu au chargement de la page !</strong>
                </h2>
                <a href="index.php">Retour sur la page d'accueil</a>
            </div>
        <?php endif; ?>

        
        <?php require_once 'layouts/footer.php'; ?>
    </body>
</html>