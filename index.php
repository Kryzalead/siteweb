<?php require('fonctions/config.php');?>
<!DOCTYPE html>
<html lang="fr"> 
 
<head> 
    <?php include('includes/head.php');?>
	<style type="text/css" media="all">
	
	/* STYLE POSITION blockPush */
	#formContainer {position:fixed; top:50px; right:-352px; }
	
	#formContainer{width: 400px; height:150px; background:url('images/contact/contact.png') 0 0 no-repeat;}
	#formContainer:hover {cursor:pointer;}
	
	
	#formContact {margin-left: 32px; padding: 10px 20px; height : 200px; width : 350px;}
	#formContact img {border : none;}
	#formContact ul {list-style-type: none;}
	
	#backgroundPopup{
		display:none;
		position:fixed;
		_position:absolute;
		height:100%; width:100%;
		top:0; left:0;
		background:#000;
		z-index:9;}
	
	#formContact h1{margin-left: 50px}
	#formContact form{margin-left: 10px;color:#669900}
	#formContact ul{list-style-type:none;}
	#formContact label{}
	#formContact span{display: none}
	#formContact input{width: 380px:height: 20px;padding: 2px}
	#formContact textarea{width: 180px;height: 70px}
	
	</style>
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
		
		<div id="content"><!-- Debut content -->
			<section id="presentation">
				<div class="colonne" id="colonne_1">
					<h1>L'agence en quelques mots</h1>
						<p>
							<span class="color">Kryzalead</span> est une jeune agence web dynamique et structurée. Le sérieux et la motivation de cette équipe qualifiée permettent des réalisations à la fois <span class="souligne">esthétiques, fidèles, fiables et conformes aux stantards du web (W3C)</span>.
							<a href="agence.html">L'agence</a>
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
					<h1>Votre devis GRATUIT en ligne</h1>
						<p>
							Vous avez entre vos mains un projet internet (création de site web, refonte d'un site déjà existant,etc...) à l'état de cocon et souhaitez recevoir rapidement <strong>un devis entièrement gratuit et personnalisé ?</strong>
							<span class="retour"></span>Remplissez le formulaire en quelques clics afin que nous puissions vous le retourner par mail.
							<a href="devis/devis.php">Faites votre devis en ligne</a>
						</p>
				</div>		
				
				<div class="colonne" id="colonne_4">
					<h1>Nous contacter</h1>
						<div id="adresse">
							<ul>
								<li><span>Agence Kryzalead</span></li>
								<li>16220 Ecuras // 17000 La Rochelle</li>
								<li>Tél: 05&nbsp;45&nbsp;..&nbsp;..&nbsp;..</li>
								<li>Email:<a href="contact.php">contact@kryzalead.fr</a></li>
								<li>n'hésitez plus à nous contacter.</li>
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
					<div id="cadre_ombre"></div>
			</section>
		</div><!-- Fin content -->

		<section id="actu">
			<div id="c_actu">
				<div class="colonne_actu" id="equipe">
					<h1>L'équipe</h1>
						<ul>
							<li><img src="images/footer/avatar-jd.jpg" alt="Intégrateur web et webdesigner" title="Intégrateur web et webdesigner" /><span>Intégrateur web et webdesigner</span>Jean-Damien Demay<a href="cv/webmestre-jd.pdf" class="cv" target="_blank">Mon CV</a></li>
							<li><img src="images/footer/avatar-jo.jpg" alt="Développeur web" title="Développeur web" /><span>Développeur web</span>Jonathan Arana<a href="cv/webmestre-jo.pdf" class="cv" target="_blank">Mon CV</a></li>
							<li><img src="images/footer/avatar-kita.jpg" alt="Commerciale" title="Commerciale" /><span>Commerciale</span>Aurélie</li>
						</ul>
					</div>

				<div class="colonne_actu" id="blog">
					<h1>Actu Blog</h1>
						<ul>
							<li>01</li>
							<li>02</li>
							<li>03</li>
							<li>04</li>
							<li>05</li>
						</ul>
				</div>
					<!--<aside class="reseaux_sociaux">
						<a href="#" class="facebook"><img src="images/icon-facebook.png" alt="Retrouvez l'agence web Kryzalead sur Facebook" /><span>Facebook</span></a>
						<a href="#" class="twitter"><img src="images/icon-twitter.png" alt="Retrouvez l'agence web Kryzalead sur Twitter" /><span>Twitter</span></a>
					</aside>-->
		</section>
		
		
			
		

	<footer role="contentinfo">
		<div id="mentions">
			<p>
				<span class="color">Kryzalead</span> - 16220 Ecuras - 17000 La Rochelle - Agence web 
				<span style="padding-left:300px">&copy; 2011 - Kryzalead | <a href="mentions-legales.html">Mentions Légales</a> | <a href="plan.html">Plan du site</a> | <a href="w3c.html">Valide W3C</a> | <a href="#wrapper">Haut de page</a></span>
			</p> 
		</div>
	</footer>
	
	</div> <!-- FIN WRAPPER -->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<script src="scripts/slide.js" type="text/javascript"></script>	<script src="scripts/contact.js" type="text/javascript"></script> 
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
	<script language="javascript" type="text/javascript"> 
			jQuery(document).ready(function(){ 
				var blockStatus = 0; var blockStatusMaxVal = 1; var blockStatusMinusVal = -352; var blockStatusOpenDuration = 500; var blockStatusCloseDuration = 500;
					jQuery('#formContainer').click(function(){ 
						if(blockStatus == 0) { jQuery(this).animate({right:blockStatusMaxVal},blockStatusOpenDuration); blockStatus = 1; 
						} 
							else { jQuery(this).animate({right:blockStatusMinusVal},blockStatusCloseDuration); blockStatus = 0; } }); });
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