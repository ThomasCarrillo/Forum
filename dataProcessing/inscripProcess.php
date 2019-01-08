<?php
        require('../elementsPHP/bdd.php');
            
        $login = htmlspecialchars($_POST["login"]);
        $mail = htmlspecialchars($_POST["mail"]);
        $password = htmlspecialchars($_POST["password"]);
        $validPassword = htmlspecialchars($_POST["validPassword"]);
        
        if (!empty($_POST['login']) AND !empty($_POST['password']) AND ($password === $validPassword)) {
            $password = password_hash($password,CRYPT_BLOWFISH);
            $requser = $bdd->prepare("INSERT INTO user (login,mail,password) VALUES (?,?,?);");     
            $requser->execute(array($login,$mail,$password)); 
            header ('Location:../index.php');
        } else {
            header ('Location:../inscription.php');
        }
?>



