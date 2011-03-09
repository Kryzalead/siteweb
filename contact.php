<?php
session_start();
require('fonctions/config.php');?>
?>
<!DOCTYPE html>
<html lang="fr"> 
 
<head> 
    <?php include('includes/head.php');?>
</head>
 
<body>
	<?php include('includes/message-ie.html');?>
	<!--[if lte IE 6]><style type="text/css">img, div { behavior: url(scripts/iepngfix.htc) }</style><![endif]--> 

	<div id="wrapper"> <!-- DEBUT WRAPPER -->

		<header role="banner">
			<?php include('includes/header.php');?>
		</header>

		<div id="slogan">
			<h2><a>Votre projet est à l'état de cocon?<br/>Nous sommes là pour l'aider à s'envoler.</a></h2>
		</div>
		
        
        <div class="colonne_actu" id="contact">
				<h1>Un projet? Un commentaire?</h1>
                 <?php
                    if(!empty($_SESSION['erreur'])){
                        echo '<div id="error">Le formulaire comprend les erreurs suivantes : <br />';
                        echo '<ul>';
                        foreach($_SESSION['erreur'] as $erreur){
                            echo '<li>- '.$erreur.'</li>';
                        }
                        echo '</ul></div>'."\n";
                        $_SESSION['erreur'] = array();
                    }
                    if(!empty($_SESSION['info']))
                        echo '<div id="info-mail">'.$_SESSION['info'].'</div>'."\n";
                    ?>
					<form action="traitement.php" id="contact" method="post">
						<fieldset>
							<legend>Vos coordonnées</legend>
								<ol>
									<li>
										<label for="nom">Nom</label>
											<input id="nom" name="nom" type="text" placeholder="Votre nom" required autofocus />
									</li>
									<li>
										<label for="email">Email</label>
											<input id="email" name="email" type="email" placeholder="example@domain.fr" required />
									</li>
								</ol>
						</fieldset>
							
						<fieldset>
							<legend>Votre message:</legend>
								<textarea name="message" id="message" placeholder="Tapez votre message"></textarea>
						</fieldset>

						<fieldset>
							<button type="submit" name="valid">Envoyer</button>
						</fieldset>
					</form>
			</div>

	<!--<aside class="reseaux_sociaux">
				<a href="#" class="facebook"><img src="images/icon-facebook.png" alt="Retrouvez l'agence web Kryzalead sur Facebook" /><span>Facebook</span></a>
				<a href="#" class="twitter"><img src="images/icon-twitter.png" alt="Retrouvez l'agence web Kryzalead sur Twitter" /><span>Twitter</span></a>
		</aside>-->
	</section>
	
	
	<footer role="contentinfo">
		<div id="mentions">
			<p>
				&copy; 2011 Kryzalead &middot; <a href="mentions-legales.html">Mentions Légales</a> &middot; <a href="plan.html">Plan du site</a> &middot; <a href="w3c.html">Valide W3C</a> &middot; <a href="#bandeau">Haut de page</a>
			</p> 
		</div>
	</footer>
	
	</div> <!-- FIN WRAPPER -->
	<!--<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-21805318-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
	</script>-->
    <?php
    $_SESSION['info'] = $_SESSION['erreur'] = array();
    ?>
	</body>
</html>