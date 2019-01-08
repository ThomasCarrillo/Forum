<?php
        require('../elementsPHP/bdd.php');
            
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
                    $_SESSION['message'] = $message;
                    header("Location: ../index.php");
                } else {
                    header("Location: ../connexion.php");
                    $erreur = '<div class="alert"><p><strong>Erreur !</strong> Mauvais login ou mot de passe !</p></div>';
                    $_SESSION['erreur'] = $erreur;
                }
            }
        }
?>