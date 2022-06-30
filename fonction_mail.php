<?php 
session_start();

include_once 'mails.php';

$s = "FIDELS VOUS SOUHAÏTER LA BIENVENUE !";
$m = "Bonjours unset($_SESSION['user']);"

sendmail($s,$m,'y.fane@etape-design.fr');