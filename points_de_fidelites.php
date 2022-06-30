<?php
session_start();


// connexion a la base de donnee
require_once 'include/connexion.php';

// Récupération du nombre de points
$sql = mysql_query("SELECT points FROM 'Fidelis_points' WHERE id='$id'");
$result = mysql_fetch_array($sql) or die(mysql_error());
$points = $result[0];
echo "avant chgmt, l'id $id avait $points points<br/>";

// Calcul des points
$pointfin = $points + "Fidelis_points";
echo "normalement après l'update il devrait avoir $pointfin points<br/>";
// Operation
mysql_query("UPDATE membres SET points='". $pointfin ."' WHERE id='$id'") or die ('Erreur : '.mysql_error());

// Rappel le nombre de points
echo'<br/>Vous avez '. $pointfin .' points';
?>