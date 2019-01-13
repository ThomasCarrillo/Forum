<?php
    require('elementsPHP/bdd.php');
?>

<!doctype html>
<html lang="fr">
<?php include('elementsPHP/head.php');?>
<body>
    <?php include('elementsPHP/header.php');?>
    <?php
      // récupération du post
        $req = $bdd->prepare('SELECT post_id,title,message,userLogin,DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\')AS date FROM post where post_id = ?');
        $req->execute(array($_GET['post']));
        $donnee = $req->fetch();
    ?> 
    <div class="postMain">   
        <div class="postContainer">
            <div class="postTitle"><?php echo htmlspecialchars($donnee['title'])?></div>
            <hr class="maxWidthHr"/>
            <div class="postIntro"><?php echo htmlspecialchars($donnee['userLogin']) . ", le " . $donnee['date']?></div>
            <div class="postMessage"><?php echo nl2br(htmlspecialchars($donnee['message']))?></div>
        </div>
        <div class="flex">
            <h2>Commentaire</h2>
        </div>

        <div class="flex topTitle">
            <hr class="maxWidthHr">
        </div>

    <?php
    // récupération des commentaires
        $req->closeCursor();
        $req = $bdd->prepare('SELECT id,id_post,comment,autor,DATE_FORMAT(date_comment, \'%d/%m/%Y à %Hh%imin%ss\')AS date_comment FROM comment where id_post = ?');
        $req->execute(array($_GET['post']));

        while ($donnee = $req->fetch())
        {?>
        <div class="commentContainer">
            <?php if(isset($_SESSION['admin']) && ($_SESSION['admin'] == true)) {echo  "<a>ADMIN POWA !!!</a>";}?>
            <div class="postIntro"><?php echo htmlspecialchars($donnee['autor']) . ", le " . $donnee['date_comment']?></div>
            <div class="postMessage"><?php echo nl2br(htmlspecialchars($donnee['comment']))?></div>
        </div>
        <?php } ?>
    </div>



    <div class="flex">
        <a class="addComment" href="addComment.php?post=<?php echo $_GET['post']; ?>"><i class="fa fa-plus-circle"></i></a>
    </div>

    <?php include('elementsPHP/footer.php');?>
</body>
</html>
