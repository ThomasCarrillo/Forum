<?php
    require('elementsPHP/bdd.php');
    if(isset($_POST['submit'])){
        $comment = ($_POST["comment"]);

        if (!empty($_POST['comment'])) {
            $requser = $bdd->prepare("INSERT INTO comment (id_post,comment,autor) VALUES (?,?,?);");     
            $requser->execute(array($_GET['post'],$comment, $_SESSION['login'])); 
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
        <form method="post" action="addComment.php?post=<?php echo $_GET['post']; ?>">

            <!-- message du post -->
            <div class="flex">
                <textarea  name="comment" namespace="comment" rows="8" cols="45" placeholder="Votre commentaire ici"></textarea>
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
            <?php if (isset($comment)) {
                echo $message;
            }
            ?>

            
    </div>

    <?php include('elementsPHP/footer.php');?>
</body>
</html>