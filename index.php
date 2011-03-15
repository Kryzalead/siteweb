<?php require('fonctions/config.php');?>
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
			<h2><a>Votre projet est à l'état de cocon?<span class="retour"></span>
			Nous sommes là pour l'aider à s'envoler.</a></h2>
		</div>
		
		<div id="content"><!-- Debut content -->
		
			<section class="presentation">
				<article>
					<h1>L'agence en quelques mots</h1>
						<p>
							<span class="color">Kryzalead</span> est une jeune agence web dynamique et structurée. Le sérieux et la motivation de cette équipe qualifiée permettent des réalisations à la fois <span class="souligne">esthétiques, fidèles, fiables et conformes aux stantards du web (W3C)</span>.
							<a href="agence.html">L'agence</a>
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
							<a href="devis/devis.php">Faites votre devis en ligne</a>
						</p>
				</article>		
				
				<article>
					<h1>Nous contacter</h1>
						<div id="adresse">
							<ul>
								<li><span>Agence Kryzalead</span></li>
								<li>16220 Ecuras // 17000 La Rochelle</li>
								<li>Tél: 05&nbsp;45&nbsp;..&nbsp;..&nbsp;..</li>
								<li>Email:<a href="contact.php" class="email">contact@kryzalead.fr</a></li>
								<li>n'hésitez plus à nous contacter.</li>
							</ul>
						</div>
				</article>
			</section>

			<section class="slideshow">
				<div id="slide" class="nivoSlider">
					<a href="#link1"><img src="images/slider/pack-launch-web.jpg" alt="Pack 'Launch Web'" title="Pack 'Launch Web'" /></a>
					<a href="#link2"><img src="images/kryzalead.jpg" alt="Logo-kryzalead" title="Logo-kryzalead" /></a>
					<a href="#link2"><img src="images/kryzalead.jpg" alt="Logo-kryzalead" title="Logo-kryzalead" /></a>
				</div>
					<div id="cadre_ombre"></div>
			</section>
		</div><!-- Fin content -->

		<section class="actu">
			<div id="c_actu">
				<article>
					<h1>L'équipe</h1>
						<ul>
							<li><img src="images/footer/avatar-jd.jpg" alt="Intégrateur web et webdesigner" title="Intégrateur web et webdesigner" /><span>Intégrateur web et webdesigner</span>Jean-Damien Demay<a href="cv/webmestre-jd.pdf" class="cv" target="_blank">Mon CV</a></li>
							<li><img src="images/footer/avatar-jo.jpg" alt="Développeur web" title="Développeur web" /><span>Développeur web</span>Jonathan Arana<a href="cv/webmestre-jo.pdf" class="cv" target="_blank">Mon CV</a></li>
							<li><img src="images/footer/avatar-kita.jpg" alt="Commerciale" title="Commerciale" /><span>Commerciale</span>Aurélie</li>
						</ul>
				</article>

				<article>
					<h1>Actu Blog</h1>
						<ul>
							<li>01</li>
							<li>02</li>
							<li>03</li>
							<li>04</li>
							<li>05</li>
						</ul>
				</article>
					<!--<aside class="reseaux_sociaux">
						<a href="#" class="facebook"><img src="images/icon-facebook.png" alt="Retrouvez l'agence web Kryzalead sur Facebook" /><span>Facebook</span></a>
						<a href="#" class="twitter"><img src="images/icon-twitter.png" alt="Retrouvez l'agence web Kryzalead sur Twitter" /><span>Twitter</span></a>
					</aside>-->
			</div>
		</section>
		
	<footer role="contentinfo">
		<div id="mentions">
			<p>
				<span class="color_green">Kryzalead</span> - 16220 Ecuras - 17000 La Rochelle - Agence web 
				<span style="padding-left:300px">&copy; 2011 - Kryzalead | <a href="mentions-legales.html">Mentions Légales</a> | <a href="plan.html">Plan du site</a> | <a href="w3c.html">Valide W3C</a> | <a href="#wrapper">Haut de page</a></span>
			</p> 
		</div>
	</footer>
	
	</div> <!-- FIN WRAPPER -->
	
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
	
	<script type="text/javascript">
		$(function() {

		// si clique sur le lien contact
		$('a.popinContact').click(function(){

			// scroll to top (à voir l'utilité)
			$('html, body').animate({scrollTop:0}, 'fast');

			// on fait apparaitre le form
			$('form#contactForm').show();

			// on fait apparaitre le mask avec l'effet puis la div contact
			$('#mask').show().animate({opacity: 0.7},500);
			$('div#contact').fadeIn('slow');

			// on bloque l'action du lien
			return false;
			});

			// fermeture de la div contact et du mask
			$('div#close, div#mask').click(function() {
				$('div#contact, div#mask').stop().fadeOut('slow');

			});
			
			// soumission du formulaire
			$('#contactForm').submit(function() {
				
				//on récupère les valeurs des champs
				var nom = $('#nom').val(),
					email = $('#email').val(),
					message = $('#message').val();

				// variable pour gérer les erreurs
				var trigger = true;

				// Expression régulière
				var nom_regex = /^[a-zA-Z0-9_-]{3,16}$/,
					email_regex = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;

					//Test champs Nom
					if(!nom_regex.test(nom)) {
						$('#l_nom').next('.error').show();
						trigger = false;
					}
					else $('#l_nom').next('.error').hide();

					//Test champs Email
					if(!email_regex.test(email)) {
						$('#l_email').next('.error').show();
						trigger = false;
					}
					else $('#l_email').next('.error').hide();
					
					// test champs Message
					if(message == '') {
						$('#l_message').next('.error').show();
						trigger = false;
					}
					else $('#l_message').next('.error').hide();
					
					// si pas d'erreur
					if(trigger) {
						/*$.ajax({
							type: "post",
							url: "send.php",
							data: "name=" + name + "&email=" + email + "&comment=" + comment,
							error: function() {
								$('.error').hide();
								$('#sendError').slideDown('slow');
							},
							success: function () {
								$('.error').hide();
								$('.success').slideDown('slow');
								$('form#contactForm').fadeOut('slow');
							}
						});
						*/
						alert('c\'est bon');
					}
				
				// on bloque l'action du submit, pour éviter de renvoyer la page.
				return false;
			});

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