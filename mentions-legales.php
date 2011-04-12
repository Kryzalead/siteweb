<?php
    session_start();
    $token = md5(uniqid(rand(), true));
    $_SESSION['contact']['token'] = $token;
    require('fonctions/config.php');
    ?>
    <!DOCTYPE html>
<html lang="fr"> 

<head>
    <title>Mentions Légales - Agence web Kryzalead</title>
    <?php include('includes/head.php');?>
</head>
 
<body>
	<?php include('includes/message-ie.html');?>
	
	<div id="wrapper"> <!-- DEBUT WRAPPER -->		
	    <header class="headerMenu" role="banner">
		<?php include('includes/header.php');?>
	    </header>
	    
	    <div id="content"><!-- Debut content -->

		<section id="mentions-legales">
		    <article>
			<h1><a>Mentions Légales</a></h1>
			    <ul>
				<li>Ce site internet est édité par <span class="couleurVerte gras">Kryzalead</span></li>
				<li>EURL au capital variable, SIRET : </li>
				<li>Siége social : .......... - ........, France</li>
				<li>Inscription au registre du commerce de ...... et à la chambre des Artiste :</li>
			    </ul>
				
			    <h2>Propriété Intellectulle</h2>
				<ul>
				    <li><span class="carreVert animer"></span>Toute représentation totale ou partielle de ce site ou de son contenu par quelle que personne que ce soit, sans l'autorisation expresse et écrite de l'agence <span class="gras couleurVerte">Kryzalead</span> est interdite et constituerait une contrefaçon sanctionnée par les articles L. 335-2 et suivants du Code de la propriété intellectuelle qui définit la contrefaçon comme un délit, et prévoit jusqu'à trois ans d'emprisonnement et 300 000 euros d'amende.</li>
				    <li><span class="carreBleu animer"></span>Conformément à la loi “Informatique et Libertés” du 6 janvier 1978, vous disposez d’un droit d’accès, de modification, de rectification et de suppression des données qui vous concernent. Vous pouvez exercer ce droit en envoyant un message à : <a href="<?php echo ROOT;?>contact/index.php" class="popinContact">contact@kryzalead.fr</a></li>
				    <li><span class="carreRose animer"></span>Tous droits appartiennent à Kryzalead et ils ne peuvent être reproduits, en partie ou entier, sans le consentement préalable de celle ci.</li>
				    <li><span class="carreOrange animer"></span>Les liens hypertexte présents sur ce site Internet et aiguillant les utilisateurs vers d’autres sites internet n’engagent pas la responsabilité de l'agence <span class="gras couleurVerte">Kryzalead</span> quant au contenu de ces sites.</li>
				</ul>
						    
			    <h2>Directeur de la publication</h2>
				<ul>
				    <li>Jean-Damien DEMAY</li>
				</ul>
				
			    <h2>Conception et réalisation</h2>
				<ul>
				    <li>SARL <span class="gras">Kryzalead</span></li>
				    <li>Ce site est developpé avec <a href="http://www.activestate.com/komodo-ide">Komodo EDIT 6.1</a> en HTML5</li>
				    <li>Intégrateur et Webdesigneur : <span>Jean-Damien DEMAY</span></li>
				    <li>Développeur PHP, Ajax, Jquey : <span>Jonathan ARANA</span></li>
				</ul>

			    <h2>L'hébergement du site</h2>			    
				<ul>
				    <li>Réalisé par la <a><span>société OVH</span></a></li>
				    <li>Siège social : <a><span>140, quai du Sartel - 59100 ROUBAIX</span></a></li>
				    <li>Tél. <a><span>0 899 701 761</span></a></li>
				    <li>Email : <a href="http://www.ovh.com/fr/support/support/" target="_blank">support@ovh.com</a></li>
				    <li>Site internet : <a href="https://www.ovh.com/fr/index.xml" target="_blank">www.ovh.com</a></li>
				</ul>
		    </article>
		    	    <div id="mentionsImg"></div>
		</section>
	    </div><!-- Fin content -->

	<section class="actu">
	    <?php include('includes/blog_actu.php');?>
	</section>
		
	<footer role="contentinfo">
	    <?php include('includes/footer.php');?>
	</footer>
	
	</div> <!-- FIN WRAPPER -->
	
	<script type="text/javascript" src="<?php echo ROOT;?>scripts/formContact.js"></script>
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
	</body>
</html>