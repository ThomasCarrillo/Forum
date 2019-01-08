<?php
    require('elementsPHP/bdd.php');
    if(isset($_POST['submit'])){
        $title = htmlspecialchars($_POST["title"]);
        $message = ($_POST["message"]);
        

        if (!empty($_POST['title']) AND !empty($_POST['message'])) {
            $requser = $bdd->prepare("INSERT INTO post (title,message,userLogin) VALUES (?,?,?);");     
            $requser->execute(array($title,$message, $_SESSION['login'])); 
            $message = '<div class="alert alert-ok"><p>Votre message est enregistré !</p></div>';
        } else {         
            $erreur = '<div class="alert alert-err"><p><strong>Erreur !</strong> Veuillez saisir correctement votre message !</p></div>'; 
        }
    }

    


?>
<!doctype html>
<html lang="fr">
<?php include('elementsPHP/head.php');?>
<body>
    <?php include('elementsPHP/header.php');?>

    <div class="box">
        <form method="post" action="post.php">

            <!-- Titre du post -->
            <div class="flex">
                <input type="text" name="title" placeholder="Titre du post">
            </div>

            <!-- message du post -->
            <div class="flex">
                <textarea  name="message" namespace="message" rows="8" cols="45" placeholder="Votre message ici"></textarea>
            </div>

            <!-- Bouton envoyer -->
            <div class="flex">
                <input type="submit" name="submit">
            </div>

        </form>
        <?php if (isset($erreur)) {
                echo $erreur;
            }
            ?>
            <?php if (isset($message)) {
                echo $message;
            }
            ?>
    </div>
    

    <?php include('elementsPHP/footer.php');?>

</body>
</html>