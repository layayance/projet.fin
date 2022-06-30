<?php 
// connexion a la base de donnees

// base de donnee
define('HOST', 'localhost');

// nom d'utilisateur de la basse de donnee
define('USER', 'root');

// mot de passe de la basse donnees
define('PASSWD', '');

// nom de la basse de donnees
define('DBNAME', 'projet.fin');

/* 
 * PDO - PHP Data Object
 * C'est une classe PHP
 */
try {
    $db = new PDO('mysql:host='. HOST .';dbname='. DBNAME, USER, PASSWD, [
        // Gestion des erreurs SQL
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        // Gestion du jeu de caractères
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        // Choix du retour des résultats - Tableau associatif
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
}
catch(Exception $error) {
    // Attrape une exception (une erreur)
    echo 'Erreur lors de la connexion à la BDD. '. $error->getMessage();
}