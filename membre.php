<?php
// demarre la session 
session_start();

// connexion a la base de donnee
require_once 'include/connexion.php';

// Vérifie que le formulaire soit bien rempli
if (isset($_POST['email'], $_POST['mdp']) && !empty($_POST['email']) && !empty($_POST['mdp'])) {

    // Nettoyage des données
    $_POST = array_map('strip_tags', $_POST);

    // Vérifier que l'adresse e-mail existe
    $query = $db->prepare('SELECT id, prenom, nom, mdp, email, role FROM users WHERE email = :email');
    $query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $query->execute();

    // Récupérer les données
    $user = $query->fetch();

    // Si l'utilisateur n'existe pas, on retourne un message d'erreur
    if (!$user) {
        $_SESSION['error'] = 'Vos identifiants sont invalides';
        header('Location: login.php');
    }
    else {
        // Ici, l'utilisateur est "connu"
        // Vérification du mot de passe
        // Si les mots de passe ne correpondes pas, on retourne un message d'erreur
        if (!password_verify($_POST['mdp'], $user['mdp'])) {
            $_SESSION['error'] = 'Vos identifiants sont invalides';
            header('Location: login.php');
        }
        else {
            // Le mot de passe est valide
            // Création de la session utilisateur
            $_SESSION['user'] = [
                'id' => $user['id'],
                'prenom' => $user['prenom'],
                'nom' => $user['nom'],
                'email' => $user['email'],
                'role' => $user['role']
            ];

            // Est-ce que l'utilisateur à cocher la case "Se souvenir de moi"
            if (isset($_POST['remember_me']) && !empty($_POST['remember_me'])) {

                // Création d'une variable contenant des infos importantes
                $cookie = [
                    'ip' => $_SERVER['REMOTE_ADDR'],
                    'email' => $user['email']
                ];

            }
    
            // Message de bienvenue et redirection
            $_SESSION['success'] = "Welcome back {$user['prenom']} !";
            header('Location: index.php');
        }
    }

    // 5. Créer la fonctionnalitée "Se souvenir de moi". Si le visiteur choisi cette option sur le formulaire, 
    //    trouver un moyen de le reconnaitre à chaque visite de celui-cisur le site (COOKIE)
}
else {
    $_SESSION['error'] = 'Tous les champs sont obligatoires !';
    header('Location: login.php');
}
