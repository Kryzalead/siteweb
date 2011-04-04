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
	
	<div id="wrapper"> <!-- DEBUT WRAPPER -->		
	    <header class="headerMenu" role="banner">
		<?php include('includes/header.php');?>
	    </header>
	    
	<div id="content"><!-- Debut content -->
		<section id="presentation">
		    <h1><a>Votre projet est à l'état de cocon?<br/>Nous sommes là pour l'aider à s'envoler.</a></h1>
		    
		    <article>
			<h2><span class="carreVert animer"></span>L'agence en quelques mots</h2>
			    <p>
				<span class="color">Kryzalead</span> est une jeune agence web, dynamique, structurée et un brin « déjantée » (dans le bon sens du terme, puisqu’également très créatifs), dans l’ère du temps. Le sérieux et la motivation de cette équipe hautement qualifiée permettent des réalisations à la fois esthétiques, fidèles, fiables et conformes aux standards du web (W3C) destiné aux professionnels, particuliers et associations.
				<a href="<?php echo ROOT;?>agence.php">L'agence<span class="fleche"></span></a>
			    </p>
			</article>
			
			<article>
			    <h2><span class="carreBleu animer"></span>Les offres du moment</h2>
				<p>A ne pas louper : Patience, ça va venir… </p>
				    <?php	// include('fonctions/newsOffres.php');?>
			</article>
			
			<article>
			    <h2><span class="carreRose animer"></span>Votre devis GRATUIT</h2>
				<p>
				    <!--Vous avez entre vos mains un projet internet (création de site web, refonte d'un site déjà existant,etc...) à l'état de cocon et souhaitez recevoir rapidement <strong>un devis entièrement gratuit et personnalisé ?</strong><br/>
				    Remplissez le formulaire en quelques clics afin que nous puissions vous le retourner par mail.-->
				    Vous avez entre vos mains un projet internet (création de site web? refonte d'un site déjà existant? embryon de projet? Même un p’tit dessin griffonné à la va-vite à l'état de cocon et souhaitez recevoir rapidement un <strong>devis entièrement gratuit et personnalisé ?</strong><br/>
    					Remplissez le formulaire en quelques clics afin que nous puissions vous fournir un devis dans les délais les plus courts possibles.
				    <a href="<?php echo ROOT;?>devis/index.php">Faites votre devis en ligne<span class="fleche"></span></a>
				</p>
			</article>		
			
			<article>
			    <h2><span class="carreOrange animer"></span>Projet(s) en cours</h2>
				<?php
				    $handle = fopen('includes/works.txt','r');
				    $content = fread($handle,999);
					fclose($handle);
					echo $content;
				    ?>
			</article>
		</section>

		<section class="slideshow">
		    <div id="slide" class="nivoSlider">
			    <a href="#link1"><img src="<?php echo ROOT;?>images/slider/pack-launch-web.jpg" alt="Pack 'Launch Web'" title="Pack 'Launch Web'"></a>
			    <a href="#link2"><img src="<?php echo ROOT;?>images/slider/pack-vitrine-1page.jpg" alt="Pack 'Vitrine 1 page'" title="Pack 'Vitrine 1 page'"></a>
			    <a href="#link3"><img src="<?php echo ROOT;?>images/slider/pack-vitrine-3pages.jpg" alt="Pack 'Vitrine 3 pages'" title="Pack 'Vitrine 3 pages'"></a>
			    <a href="#link4"><img src="<?php echo ROOT;?>images/slider/pack-vitrine-5pages.jpg" alt="Pack 'Vitrine 5 pages'" title="Pack 'Vitrine 5 pages'"></a>
			    <a href="#link5"><img src="<?php echo ROOT;?>images/slider/pack-vitrine-10pages.jpg" alt="Pack 'Vitrine 10 pages'" title="Pack 'Vitrine 10 pages'"></a>
			    <a href="#link6"><img src="<?php echo ROOT;?>images/slider/pack-catalogue.jpg" alt="Pack 'Catalogue'" title="Pack 'Catalogue'"></a>
			    <a href="#link7"><img src="<?php echo ROOT;?>images/slider/pack-e-commerce.jpg" alt="Pack 'E-Commerce'" title="Pack 'E-Commerce'"></a>
			    <a href="#link7"><img src="<?php echo ROOT;?>images/slider/pack-custom.jpg" alt="Pack 'Custom'" title="Pack 'Custom'"></a>
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
	<script type="text/javascript" src="<?php echo ROOT;?>scripts/zoombox.js"></script>
	<script type="text/javascript">
		//<![CDATA[
		$(function(){
			$('a.zoombox').zoombox();
		});
		//]]>
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