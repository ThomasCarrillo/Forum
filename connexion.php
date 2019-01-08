<?php
        require('elementsPHP/bdd.php');
        
        if(isset($_POST['submit'])){
            $login = htmlspecialchars($_POST["login"]);
            $password = htmlspecialchars($_POST["password"]);
            
            $reqmdp = $bdd->prepare("SELECT * FROM user WHERE login = ?"); //on prepare la requete SQL
            $reqmdp->execute(array($login)); //on associe a la requete SQL la valeur de login
            $mdpload = $reqmdp->fetch(); //mdpload recupere tout les resultat du fetch
            $mdphash = $mdpload['password']; //mdphash vaut le mdp hashé

            if (!empty($_POST['login']) AND !empty($_POST['password'])) { //empty = 1 si il y a rien 
                $requser = $bdd->prepare("SELECT * FROM user WHERE login = ?");//preaparation de la requete     
                $requser->execute(array($login)); //ajout dans la requete du login
                $userexist = $requser->rowCount(); //compte le nombre de fois que l'user existe
                if ($userexist == 1) { //si il existe exactement 1 user 
                    if (password_verify($_POST['password'], $mdphash) == true) { //si le mot de passe entré correspond a celui de l'user dans la bdd
                        
                        $usersinfo = $requser->fetch(); //on recupere les infos et on les passe en variable de session
                        $_SESSION['id'] = $usersinfo['id'];
                        $_SESSION['login'] = $usersinfo['login'];
                        $_SESSION['mail'] = $usersinfo['mail'];
                        $_SESSION['password'] = $usersinfo['password'];
                        $message = '<div class="alert alert-ok"><p>Vous êtes connecté</p></div>';
                    } else {
                        $erreur = '<div class="alert alert-err"><p><strong>Erreur !</strong> Mauvais login ou mot de passe !</p></div>'; 
                    }
                } else {
                    $erreur = '<div class="alert alert-err"><p><strong>Erreur !</strong> Login inconnu !</p></div>'; 
                }
            }
        }
?>
<!doctype html>
<html lang="fr">
<?php include('elementsPHP/head.php');?>
<body>
    <?php include('elementsPHP/header.php');?>

    <div class="center">
        <div class="connect">
            <div class="topTitle">
                <h2>Connexion</h2>
            </div>

            <form method="post" action="connexion.php">
                <div class="flex">
                    <img class="formIcon" src="ressources/icones/user.png" alt="Logos du site">
                    <input type="text" name="login" id="login" placeholder="login">
                </div>
                
                <div class="flex">
                    <img class="formIcon" src="ressources/icones/lock.png" alt="Logos du site">
                    <input type="password" name="password" id="password" placeholder="password">
                </div>
                
                <div class="flex">
                    <input type="submit" name="submit" value="Se connecter">

                </div>
            </form> 
            <?php if (isset($erreur)) {
                echo $erreur;

            } ?>
            <?php if (isset($message)) {
                echo $message;
            }
            ?>
        </div>
    </div>


    <?php include('elementsPHP/footer.php');?>

</body>
</html>