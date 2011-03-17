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
		<div id="mask"></div>
		
		<header role="banner">
			<?php include('includes/header.php');?>
		</header>

		<div id="slogan">
			<h2><a>Votre projet est à l'état de cocon?<span class="retour"></span>
			Nous sommes là pour l'aider à s'envoler.</a></h2>
		</div>
		
		<div id="content"><!-- Debut content -->
		
			<section class="presentation">
				<article>
					<h1>L'agence en quelques mots</h1>
						<p>
							<span class="color">Kryzalead</span> est une jeune agence web dynamique et structurée. Le sérieux et la motivation de cette équipe qualifiée permettent des réalisations à la fois <span class="souligne">esthétiques, fidèles, fiables et conformes aux stantards du web (W3C)</span>.
							<a href="<?php echo ROOT;?>agence.html">L'agence</a>
						</p>
				</article>
				
				<article>
					<h1>Projet(s) en cours</h1>
						<p>
							<?php
								$handle = fopen('includes/works.txt','r');
								$content = fread($handle,300);
								fclose($handle);
								echo $content;
							?>			
						</p>
				</article>		
				
				<article>
					<h1>Votre devis GRATUIT en ligne</h1>
						<p>
							Vous avez entre vos mains un projet internet (création de site web, refonte d'un site déjà existant,etc...) à l'état de cocon et souhaitez recevoir rapidement <strong>un devis entièrement gratuit et personnalisé ?</strong>
							<span class="retour"></span>Remplissez le formulaire en quelques clics afin que nous puissions vous le retourner par mail.
							<a href="<?php echo ROOT;?>devis/devis.php">Faites votre devis en ligne</a>
						</p>
				</article>		
				
				<article>
					<h1>Nous contacter</h1>
						<div id="adresse">
							<ul>
								<li><span>Agence Kryzalead</span></li>
								<li>16220 Ecuras // 17000 La Rochelle</li>
								<li>Tél: 05&nbsp;45&nbsp;..&nbsp;..&nbsp;..</li>
								<li>Email:<a href="<?php echo ROOT;?>contact/index.php" class="popinContact">contact@kryzalead.fr</a></li>
								<li>n'hésitez plus à nous contacter.</li>
							</ul>
						</div>
				</article>
			</section>

			<section class="slideshow">
				<div id="slide" class="nivoSlider">
					<a href="#link1"><img src="<?php echo ROOT;?>images/slider/pack-launch-web.jpg" alt="Pack 'Launch Web'" title="Pack 'Launch Web'" /></a>
					<a href="#link2"><img src="<?php echo ROOT;?>images/slider/pack-vitrine-1page.jpg" alt="Pack 'Vitrine 1 page'" title="Pack 'Vitrine 1 page'" /></a>
					<a href="#link3"><img src="<?php echo ROOT;?>images/slider/pack-vitrine-3pages.jpg" alt="Pack 'Vitrine 3 pages'" title="Pack 'Vitrine 3 pages'" /></a>
					<a href="#link4"><img src="<?php echo ROOT;?>images/slider/pack-vitrine-5pages.jpg" alt="Pack 'Vitrine 5 pages'" title="Pack 'Vitrine 5 pages'" /></a>
					<a href="#link5"><img src="<?php echo ROOT;?>images/slider/pack-vitrine-10pages.jpg" alt="Pack 'Vitrine 10 pages'" title="Pack 'Vitrine 10 pages'" /></a>
					<a href="#link6"><img src="<?php echo ROOT;?>images/slider/pack-catalogue.jpg" alt="Pack 'Catalogue'" title="Pack 'Catalogue'" /></a>
					<a href="#link7"><img src="<?php echo ROOT;?>images/slider/pack-e-commerce.jpg" alt="Pack 'E-Commerce'" title="Pack 'E-Commerce'" /></a>
					<a href="#link7"><img src="<?php echo ROOT;?>images/slider/pack-custom.jpg" alt="Pack 'Custom'" title="Pack 'Custom'" /></a>
				</div>
					<div id="cadre_ombre"></div>
			</section>
		</div><!-- Fin content -->

		<section class="actu">
			<?php include('includes/actu.php');?>
		</section>
		
	<footer role="contentinfo">
		<?php include('includes/footer.php');?>
	</footer>
	
	</div> <!-- FIN WRAPPER -->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo ROOT;?>scripts/slide.js" type="text/javascript"></script>
    <script type="text/javascript">
		$(window).load(function() {
			setTimeout(function(){
				$('#slide').nivoSlider({
				effect:'random',
                animSpeed:1500,
                pauseTime:6000,
                startSlide:0,
                directionNav:true,
                controlNav:true,
                keyboardNav:false,
                pauseOnHover:true
				});
			}, 5000);
		});	
    </script>
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