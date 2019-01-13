<?php
    require('elementsPHP/bdd.php');
?>
<!doctype html>
<html lang="fr">
<?php include('elementsPHP/head.php');?>
<body>
    <?php include('elementsPHP/header.php');?>
   
    <div class="center">
        <div class="connect">
            <div class="topTitle">
                <h2>Accès Administrateur</h2>
            </div>

            <form method="post" action="admin.php">
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