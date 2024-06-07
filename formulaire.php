<?php include("header.php") ;
?>


<form action="traitement.php" method="post">
        <label for="nom">Inserer votre Nom:</label>
        <input type="text" name="nom" id="" pattern="[/^[A-Za-z0-9\x{00c0}-\x{00ff}]{5,20}$/u]">

        <label for="prenom">Inserer votre Prenom:</label>
        <input type="text" name="prenom" id="" pattern="[/^[A-Za-z0-9\x{00c0}-\x{00ff}]{5,50}$/u]">

        <label for="adresse">Inserer votre Adresse:</label>
        <input type="text" name="adresse" id="" pattern="[/^[A-Za-z0-9\x{00c0}-\x{00ff} ]{5,50}$/u]">

        <label for="date">Inserer votre date:</label>
        <input type="date" name="date" id="">


        <label for="email">Inserer votre email:</label>
        <input type="email" name="email" id="">
                                                                  
                                                            
        <label for="password">Inserer votre mot de passe :</label>
        <input type="password" name="password" id=""pattern="[A-Za-z0-9_$]{8,}">
        <input type="submit" value="envoyer">
    </form>

</body>
</html>