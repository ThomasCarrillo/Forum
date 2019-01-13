<?php
    require('elementsPHP/bdd.php');

    if (!empty($_POST['password'])) { //empty = 1 si il y a rien 
        $reqmdp = $bdd->prepare("SELECT * FROM mdp_admin"); //on prepare la requete SQL
        $reqmdp->execute(); //on associe a la requete SQL la valeur de login
        $mdpload = $reqmdp->fetch(); //mdpload recupere tout les resultat du fetch
        $mdphash = $mdpload['password']; //mdphash vaut le mdp hashé
        if (password_verify($_POST['password'], $mdphash) == true) { //si le mot de passe entré correspond a celui de l'user dans la bdd
            $_SESSION['admin'] = true;
            ('Location:index.php');
        } else {
            $erreur = '<div class="alert alert-err"><p><strong>Erreur !</strong> Mauvais mot de passe !</p></div>'; 
        }
    }
?>
<!doctype html>
<html lang="fr">
<?php include('elementsPHP/head.php');?>
<body>
    <?php include('elementsPHP/header.php');?>
    

    <?php include('elementsPHP/footer.php');?>
</body>
</html>