<?php
session_start();
$token = md5(uniqid(rand(), true));
$_SESSION['contact']['token'] = $token;
require('fonctions/config.php');
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
		<header class="headerMenu" role="banner">
			<?php include('includes/header.php');?>
		</header>
		
		<div id="content"><!-- Debut content -->
		
			<section id="mentions-legales">
				<h2 class="animer"><a>Mentions Légales</a></h2>
						
					<div>
						<p>
							Ce site web est la propriété de la société Kryzalead.fr	<br/>
							Elle en assure la réalisation et l'édition. Son contenu peut être modifié ou mis à jour sans préavis.	<br/>
							Conformément à la Loi pour la confiance dans l'économie numérique (loi 2004-575 du 21/06/2004), <br/>
							voici les informations légales relatives à l'éditeur et à l'hébergeur du site:
						</p>
						
						<ul>
							<li>Dénomination sociale : <a href="#">Kryzalead</a></li>
							<li>Adresse :<a href="#">16220 Ecuras ainsi que 17000 La Rochelle</a></li>
							<li>Email : <a href="<?php echo ROOT;?>contact/index.php" class="popinContact">contact@kryzalead.fr</a></li>
							<li>Siret : <a href="#">A venir</a></li>
						</ul>
						
						<p>L'hébergement du site est réalisé par la société OVH</p>
						
						<ul>
							<li>Siège social : <a href="#">140, quai du Sartel - 59100 ROUBAIX</a></li>
							<li>Tel : <a href="#">0 899 701 761</a></li>
							<li>Email : <a href="#">support@ovh.com</a></li>
							<li>Site internet : <a href="https://www.ovh.com/fr/index.xml" target="_blank">www.ovh.com</a></li>
						</ul>
					</div>
				</section>

		</div><!-- Fin content -->

		<section class="actu">
			<?php include('includes/actu.php');?>
		</section>
		
	<footer role="contentinfo">
		<?php include('includes/footer.php');?>
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
	</body>
</html>