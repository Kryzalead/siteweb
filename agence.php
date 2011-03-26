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
	
	  <style type="text/css" media="all">
		#agence {margin:140px 0 40px}
		#agence h1 a {font:normal 2em 'oO';padding-bottom:10px;display:block;cursor:default;}
		#agence p {color:#777;text-align:justify;width:700px;}
	</style>
</head>
 
<body>
	<?php include('includes/message-ie.html');?>
	<!--[if lte IE 6]><style type="text/css">img, div { behavior: url(scripts/iepngfix.htc) }</style><![endif]--> 

	<div id="wrapper"> <!-- DEBUT WRAPPER -->		
		<header class="headerMenu" role="banner">
			<?php include('includes/header.php');?>
		</header>
		
		
		
		<div id="content"><!-- Debut content -->
		
			<section id="agence">
				<article>
					<h1 class="animer"><a>Qui sommes-nous?</a></h1>
						<p>
							Mise en place en 2011, <span class="color">Alternative-Webdesign</span> est une <strong>agence web</strong> réussitepondant présente à vos écoutes et donnant forme à vos projets afin qu'ils en soient une réussite.
						</p>
					</article>
					
					<article>
						<h2>Une agence dans l'ère d'internet</h2>
						<p>
							Alternative-Webdesign se compose d'une équipe dynamique, structurée, fidéle mais surtout passionnée.
							Grâce à un travail constant et régulier, nos réaliserons vos projets avec les toutes dernières avancées techniques dans le domaine du web. Nous utilisons les dernieres évolutions comme les blogs ainsi que les réseaux sociaux tel que Facebook et Twitter.
							Ces nouveaux réseaux bien adaptés à vos projets, vous permettrons de mieux vous faire connaître à travers internet.
						</p>
					</article>
					
					<article>
						<h2>Une agence basée clients</h2>
						<p>
							Nous proposons à nos clients des solutions techniques ainsi que des prestations afin que leur projet prenne vie avec des coûts financiers réduits.
						</p>
				</article>
			</section>

		</div><!-- Fin content -->

		<section class="actu">
			<?php include('includes/blog_actu.php');?>
		</section>
		
		<footer role="contentinfo">
			<?php include('includes/footer.php');?>
		</footer>
	
	</div> <!-- FIN WRAPPER -->
	
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
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