<?php
    session_start();
    require('../fonctions/config.php');
?>

<!DOCTYPE html>
<html lang="fr"> 
 
<head> 
    <?php include('../includes/head.php');?>
    <link rel="stylesheet" type="text/css" href="css/styleLogin.css">
</head>
 
<body>
	<?php include('../includes/message-ie.html');?>

	<div id="wrapper"> <!-- DEBUT WRAPPER -->

		<header class="headerMenu" role="banner">
		    <?php include('../includes/header.php');?>
		</header>
		
		<div id="content"><!-- Debut content -->
		    <section id="formConnexion">
			    <p>
				<span class="couleurVerte gras">Vous essayez d'acceder à un espace privé</span>, merci de remplir les champs suivant : <br/>
				Si vous vous êtes perdu, vous pouvez revenir à l'accueil en cliquant <a href="http://www.kryzalead.fr/index.php" title="revenir à l'accueil"><span class="couleurVerte gras">ICI</span></a>
			    </p>
			    
		    <div id="login">
			<div style="opacity: 0;" id="maskContainer"><div style="background-position: 0px 0pt;" id="logmask"></div></div>
	
			    <form name="loginform" id="loginform" action="traitement.php" method="post">
				<?php
				    if(!empty($_SESSION['connexion']['erreur']))
					echo $_SESSION['connexion']['erreur']
				?>
				<p>
				    <label for="connexionLogin">Identifiant : </label>   
				    <input type="text" name="connexion[login]" id="connexionLogin" />
				</p>
				<p>
				    <label for="connexionMdp">Mot de passe : </label>   
				    <input type="password" name="connexion[mdp]" id="connexionMdp" />
				</p>
				<p>
				    <input type="submit" name="connexion[valid]" id="connexionValid" value="Se connecter" />                        
				</p>
			    </form>
			</div>
		    </section>
		</div><!-- Fin content -->
		
	    <footer role="contentinfo">
		<?php include('../includes/footer.php');?>
	    </footer>
	    
	</div> <!-- FIN WRAPPER -->
	<?php
	    $_SESSION['connexion']['erreur'] = array();
	?>

    <script type="text/javascript" src="<?php echo ROOT;?>scripts/glow.js"></script>
    <script type="text/javascript" src="<?php echo ROOT;?>scripts/formContact.js"></script>
</body>
</html>