<?php

/*
 * Déconnexion
 */

// Démarre la session
session_start();

// Détruit la session utilisateur
unset($_SESSION['user']);

// Retour sur la page d'accueil
header('Location: index.php');
