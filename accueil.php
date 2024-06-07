<?php
include_once("BDD/inc.php");


if(isset($_SESSION['nom'])) {
    // Afficher le message de bienvenue
    echo '<h1>Bienvenue '.$_SESSION['nom'].'</h1>';
} else {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header('location:connexion.php');
    exit;
}

?>

