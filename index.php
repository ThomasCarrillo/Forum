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
            $reqPost = $bdd->query("SELECT post_id,title,message,userLogin,DATE_FORMAT(date, '%d/%m/%Y à %Hh%imin%ss')AS date FROM post ORDER BY date DESC");
            
            while ($donnee = $reqPost->fetch())
            {?>
                <div class="postContainer">
                    <?php if(isset($_SESSION['admin']) && ($_SESSION['admin'] == true)) {echo  "<a href=\"eraseTopic.php?post_id=" . $donnee['post_id'] . "\">ADMIN POWA !!!</a>";}?>
                    <div class="postTitle"><?php echo htmlspecialchars($donnee['title'])?></div>
                    <hr class="maxWidthHr"/>
                    <div class="postIntro"><?php echo htmlspecialchars($donnee['userLogin']) . ", le " . $donnee['date']?></div>
                    <a class="comment" href="topic.php?post=<?php echo $donnee['post_id']; ?>"><i class="fa fa-comments"></i></a>
                </div>
            <?php
            }
        }?>
    </div>
    <?php include('elementsPHP/footer.php');?>

</body>
</html>