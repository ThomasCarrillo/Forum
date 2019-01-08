<?php
    require('elementsPHP/bdd.php');


?>
<!doctype html>
<html lang="fr">
<?php include('elementsPHP/head.php');?>
<body>
    <?php include('elementsPHP/header.php');?>
    <div class="center">
        <div class="box">
            <h1>Bienvenue <?php if(isset($_SESSION['login'])) {echo $_SESSION['login'];}?> !</h1>
        </div>
    </div>
    
    <div class="postMain">
        <?php 
        if(isset($_SESSION['login'])) {
            $reqPost = $bdd->query("SELECT * FROM post ORDER BY date DESC");
            while ($donnee = $reqPost->fetch()){
                echo "<div class=\"postContainer\">";
                echo "<p class=\"postName\"> ". $donnee['userLogin'] . "</p>"; 
                echo "<p class=\"postDate\">  ". $donnee['date'] . "</p>"; 
                echo "<p class=\"postTitle\"> ". $donnee['title'] . "</p>"; 
                echo "<p class=\"postMessage\"> ". $donnee['message'] . "</p>"; 
                echo "</div>";
            }
        }
        ?>
    </div>
   


    <?php include('elementsPHP/footer.php');?>

</body>
</html>