<?php

// Démarre la session 
session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <?php require_once 'layouts/header.php' ?>

    <form action="login_membre.php" method="post" class="w-25 mx-auto py-5">

        <!-- Affiche un message d'erreur si existant -->
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['error']; ?>
            </div>
        <?php unset($_SESSION['error']);
        endif; ?>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="mb-3">
            <label for="mdp" class="form-label">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" class="form-control">
        </div>

        <div class="form-check">
            <input type="checkbox" name="remember_me" id="remember_me" class="form-check-input">
            <label for="remember_me" class="form-check-label">Se souvenir de moi</label>
        </div>

        <button class="btn btn-primary mt-4">Se connecter</button>
    </form>

    <?php require_once 'layouts/footer.php' ?>
</body>

</html>
