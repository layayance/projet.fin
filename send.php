<?php
include_once('fonctions.php');

$s = "Activation de votre compte";
$m = "Bonjour  <br>";

sendmail($s,$m, test@fidelis.fr);