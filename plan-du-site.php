<?php
    session_start();
    $token = md5(uniqid(rand(), true));
    $_SESSION['contact']['token'] = $token;
    require('fonctions/config.php');
    ?>
    <!DOCTYPE html>
<html lang="fr"> 

<head>
    <title>Plan du site - Agence web Kryzalead</title>
    <?php include('includes/head.php');?>
</head>
 
<body>
	<?php include('includes/message-ie.html');?>
	
	<div id="wrapper"> <!-- DEBUT WRAPPER -->		
	    <header class="headerMenu" role="banner">
		<?php include('includes/header.php');?>
	    </header>
	    
	    <div id="content"><!-- Debut content -->

		<section id="planDuSite">
		    <article>
			<h1><a>Pan du site</a></h1>
			    <ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="agence.php">L'agence</a></li>
				<li><a href="packs.php">Les Packs</a></li>
				<li><a href="devis/index.php">Devis gratuit</a></li>
				<li><a href="contact/index.php">Contact</li>
				<li><a href="mentions-legales.php">Mentions-Légales</a></li>
				<li><a href="plan-du-site.php">Plan du site</a></li>
				<li><a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.kryzalead.fr%2Findex.php;verbose=1">Valide W3C</a></li>
			    </ul>
		</section>
		  <div id="planDuSiteImg"></div>
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