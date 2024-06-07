<?php 
include_once ("header.php");
?>


<form action="traitement_conn.php" method="post">

        <label for="email">Votre email</label>
        <input type="email" name="email" id="">

        <label for="password">Votre mot de passe</label>
        <input type="password" name="password" id="" pattern="[A-Za-z0-9$]{8,}">

        <input type="submit" value="connexion">
        <a href="forget.php"><input type="submit" value="mdp oublier"></a>

    </form>
</body>
</html>



<?php include('header.php');

?>


    <form action="traitement_conn.php" method="post">

        <label for="email">Votre email</label>
        <input type="email" name="email" id="">

        <label for="password">Votre mtpasse</label>
        <input type="password" name="password" id="" pattern="[A-Za-z0-9_$]{8,}">

    
        <input type="submit" value="connexion">

        <a href="forget.php"><input type="submit" value="mdp oublier"></a>
    </form>
    
    </body>

</html>