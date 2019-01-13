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
                <h2>Inscription</h2>
            </div>

            <form method="post" action="dataProcessing/inscripProcess.php">
                <!-- login -->
                <div class="flex">
                    <img class="formIcon" src="ressources/icones/user.png" alt="login">
                    <input type="text" name="login" id="login" placeholder="login">
                </div>
                
                <!-- mot de passe -->
                <div class="flex">
                    <img class="formIcon" src="ressources/icones/lock.png" alt="mot de passe">
                    <input type="password" name="password" id="password" placeholder="password">
                </div>

                <!-- validation mot de passe -->
                <div class="flex">
                    <img class="formIcon" src="ressources/icones/lock.png" alt="validation mot de passe">
                    <input type="password" name="validPassword" id="validPassword" placeholder="valid password">
                </div>

                <!-- adresse mail -->
                <div class="flex">
                    <img class="formIcon" src="ressources/icones/mail.png" alt="adresse mail">
                    <input type="text" name="mail" id="mail" placeholder="mail">
                </div>
                
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
    </div>

    <?php include('elementsPHP/footer.php');?>

</body>
</html>