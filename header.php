<?php session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="nav_header">
            <ul class="ul_header">
                <li class="li_header"><a href="accueil.php">Accueil </a></li>
                <?php if(!isset($_SESSION["nom"])) : ?>
                <li class="li_header"><a href="formulaire.php"></a>Inscription</li>
                <li class="li_header"><a href="connexion.php">Connexion</a></li>
                <?php else : ?>
                <li class="li_header"><a href="deconnexion.php">Deconnexion</a></li>
                <?php endif ;?>
            </ul>
        </nav>
    </header>
    


    