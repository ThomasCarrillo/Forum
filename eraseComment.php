<?php
    require('elementsPHP/bdd.php');

    if (isset($_GET['id'])) {
        $requser = $bdd->prepare("DELETE FROM comment where id = ?;");     
        $requser->execute(array($_GET['id'])); 
        $message = '<div class="alert alert-ok"><p>Votre message est enregistré !</p></div>';
        header ('Location:index.php');
    } else {         
        $erreur = '<div class="alert alert-err"><p><strong>Erreur !</strong> Veuillez saisir correctement votre message !</p></div>'; 
    }
?>
<!doctype html>
<html lang="fr">
<?php include('elementsPHP/head.php');?>
<body>
    <?php include('elementsPHP/header.php');?>
        <?php echo $_GET['id']?>
    <?php include('elementsPHP/footer.php');?>
</body>
</html>