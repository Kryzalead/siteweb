<!DOCTYPE html> 
<html lang="fr"> 
 
<head> 
    <meta charset="utf-8"> 
    <meta name="author" content="Kryzalead" /> 
    <title>Kryzalead | Agence web, création de site web</title> 
    <meta name="DC.title" content="Kryzalead | Agence web, création de site web" /> 
    <meta name="description" content="Agence web spécialisée dans la conception de sites conformes aux standards W3C et formations HTML, XHTML, CSS, Accessibilité en Charente." /> 
    <meta name="keywords"  content="creation de sites web, creation de sites internet, webdesign, site web, agence web, webagency, prestations internet, réalisation de sites, charente, 16, la rochelle, 17, standard, standards, w3c, accessibilité, sites accessibles, CSS, CSS3, HTML, HTML5, XHTML, PHP" /> 
    <meta name="geo.placename" content="Charente, France, La roche" />	
	<meta name="google-site-verification" content="" /> 
	<meta name="viewport" content="width=device-width" /> 
 
    
	  <link rel="stylesheet" media="all" href="css/styles.css" /> 
	  <link rel="stylesheet" media="all" href="css/styles_slide.css" /> 
 
    <!--[if IE]><link rel="stylesheet" href="styles-ie.css" /><script src="scripts/html5-ie.js"></script><![endif]--> 
	<!--[if lte IE 8]><script type="text/javascript" src="scripts/roundies.js"></script><![endif]-->

</head>
 
<body> 
	<!--[if lte IE 7]>
      <link rel="stylesheet" href="css/styles-ie.css" />
      <div class="alert-ie">
			<p>
				<strong>Attention ! </strong> Votre navigateur (Internet Explorer 6 ou 7) présente de sérieuses lacunes en terme de sécurité et de performances, dues à son obsolescence.<br>
				En conséquence, ce site sera consultable mais de manière moins optimale qu'avec un navigateur récent comme (<a href="http://www.browserforthebetter.com/download.html">Internet Explorer 8+</a>, <a href="http://www.mozilla-europe.org/fr/firefox/">Firefox</a>, <a href="http://www.google.com/chrome?hl=fr">Chrome</a>, <a href="http://www.apple.com/fr/safari/download/">Safari</a>,...)
			</p>
      </div>
    <![endif]--> 
	
	<!--[if lte IE 6]> <style type="text/css">img, div { behavior: url(scripts/iepngfix.htc) }	</style> 
	<![endif]--> 

		<section class="banniere ombre animer">
			<div id="bandeau">
				<h1><a>Agence web - Création site web en Charente | Charente-Maritime et France</a></h1>
				<aside class="reseaux_sociaux">
					<a href="#" class="twitter"><img src="images/icon-twitter.png" alt="Retrouvez l'agence web Kryzalead sur Twitter" /><span>Twitter</span></a>
					<a href="#" class="facebook"><img src="images/icon-facebook.png" alt="Retrouvez l'agence web Kryzalead sur Facebook" /><span>Facebook</span></a>
				</aside>
			</div>
		</section>
		
		<div id="content"><!-- Debut content -->
			<section class="menu">
				<header role="banner">
					<h1><a href="index.html" title="Retour à l'accueil"><img src="images/logo-kryzalead.png" alt="Kryzalead agence web" width="350" /></a></h1>
						<nav class="navigation">
							<ul>
								<li><a href="#">Accueil</a></li>
								<li><a href="agence.html">L'agence</a></li>
								<li><a href="#">Réalisations</a></li>
								<li><a href="#">Les Packs</a></li>
								<li><a href="#">Devis gratuit</a></li>
								<li><a href="#">Contact</a></li>
						<!--	<li><a href="#">Le Blog</a></li>-->
							</ul>
						</nav>
					</header>
			</section>

			
		<section id="presentation">
			<div class="colonne" id="colonne_1">
				<h1>L'agence en quelques mots</h1>
					<p>
						<span class="color">Kryzalead</span> est une jeune agence web dynamique et structurée. Le sérieux et la motivation de cette équipe qualifiée permettent des réalisations à la fois <u>esthétiques, fidèles, fiables et conformes aux stantards du web (W3C)</u>.
						<q>Votre projet est à l'état de cocon? nous sommes là pour l'aider à s'envoler</q>
						<a href="agence.html">L'agence >></a>
					</p>
			</div>
			
			<div class="colonne" id="colonne_2">
				<h1>Projet(s) en cours</h1>
				<p>
					<?php
					$handle = fopen('includes/works.txt','r');
					$content = fread($handle,300);
					fclose($handle);
					echo $content;
					?>			
				</p>
			</div>		
			
			<div class="colonne" id="colonne_3">
				<h1>Votre devis GRATUIT</h1>
					<p>
						En cours
					</p>
			</div>		
			
			<div class="colonne" id="colonne_4">
				<h1>Nous contacter</h1>
					<div id="adresse">
						<ul>
							<li><span>Agence Kryzalead</span></li>
							<li>16220 Ecuras // 17000 La Rochelle</li>
							<li>Tél: 05 45 .. .. ..</li>
							<li>Email: <a href="#">Contact@Kryzalead.fr</a></li>
							<li><span class="">n'hésitez plus à nous contacter.</span></li>
						</ul>
				</div>
			</div>
		</section>

		<section class="slideshow">
			<div id="slide" class="nivoSlider">
				<a href="#link1"><img src="images/kryzalead.jpg" alt="Logo-kryzalead" title="Logo-kryzalead"/></a>
				<a href="#link1"><img src="images/footer/avatar-jd.jpg" alt="Logo-kryzalead" title="Logo-kryzalead"/></a>
				<a href="#link1"><img src="images/kryzalead.jpg" alt="Logo-kryzalead" title="Logo-kryzalead"/></a>
		</div>
			<div id="cadre_ombre">	</div>
		</section>

			
	</div><!-- Fin content -->

	<footer>

			<section  id="equipe">
				<h1>L'équipe</h1>
					<ul>
						<li><img src="images/footer/avatar-jd.jpg" alt="Intégrateur web et webdesigner" title="Intégrateur web et webdesigner" /><span>Intégrateur web et webdesigner</span>Jean-Damien Demay<a href="cv/webmestre-jd.pdf" class="cv" target="_blank">Mon CV</a></li>
						<li><img src="images/footer/avatar-jo.jpg" alt="Développeur web" title="Développeur web" /><span>Développeur web</span>Jonathan Arana<a href="cv/webmestre-jo.pdf" class="cv" target="_blank">Mon CV</a></li>
						<li><img src="images/footer/avatar-kita.jpg" alt="Commerciale" title="Commerciale" /><span>Commerciale</span>Aurélie</li>
			</section>
			
			<section id="blog">
				<h1>Actu Blog</h1>
					<ul>
						<li>01</li>
						<li>02</li>
						<li>03</li>
						<li>04</li>
						<li>05</li>
					</ul>
			</section>

		
		<div id="mentions">
			<p>
				&copy; 2011 Kryzalead &middot; <a href="mentions-legales.html">Mentions Légales</a> &middot; <a href="plan.html">Plan du site</a> &middot; <a href="w3c.html">Valide W3C</a> &middot; <a href="#bandeau">Haut de page</a>
			</p> 
		</div>
	</footer>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	 <script src="scripts/slide.js" type="text/javascript"></script>
    <script type="text/javascript">
		$(window).load(function() {
			setTimeout(function(){
				$('#slide').nivoSlider({
				effect:'random',
                animSpeed:1500,
                pauseTime:6000,
                startSlide:1,
                directionNav:true,
                controlNav:true,
                keyboardNav:false,
                pauseOnHover:true
				});
			}, 5000);
		});
    </script>

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