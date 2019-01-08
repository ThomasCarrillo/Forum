<?php 
	if ((isset($_GET['action'])) && ($_GET['action'] == 'logout'))
	{
		$_SESSION = array();
		session_destroy();
		session_start();
	}
?>

<header id="haut">
	<div class="titleZone">
		<a href="index.php"><img class="mainLogo" src="ressources/icones/logo2.png" alt="Logos du site"></a>
	</div>
	<div class="navZone">
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<?php if(isset($_SESSION['login'])) {echo "<li><a href=\"post.php\">Poster</a></li>";}?>
			<li><a href="connexion.php">Connexion</a></li>
			<?php if(isset($_SESSION['login'])) {echo "<li><a href=\"index.php?action=logout\" title=\"Déconnexion\">Deconnexion</a></li>";}?>
			<?php if(!isset($_SESSION['login'])) {echo "<li><a href=\"inscription.php\">Inscription</a></li>";}?>
		
		</ul>
	</div>

	<a class="topper" href="#haut"><img class="topIcon" src="ressources/icones/top.png" alt="toTheTop"></a>
   
</header>