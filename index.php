<?php require('fonctions/config.php');?>
<!DOCTYPE html>
<html lang="fr"> 
 
<head> 
    <?php include('includes/head.php');?>
	<style type="text/css" media="all">
	/*contact form*/
#mask {
background-color:#000;
display:none;
height:100%;
left:0;
position:fixed;
top:0;
width:100%;
z-index:9000;
border: 1px solid red
}

#contact {
background-color:#fff;
display:none;
left:50%;
margin-left:-300px;
position:absolute;
top:90px;
width:600px;
z-index:9999;
border-radius:10px;
-moz-border-radius:10px;
-webkit-border-radius:10px;
padding:20px;
}

#close {
background:url(../images/close.png) no-repeat right;
cursor:pointer;
font-family:arial, sans-serif;
font-size:20px;
font-weight:700;
line-height:24px;
text-decoration:underline;
text-align:right;
padding:5px 30px 5px 5px;
}

#contact_header {
background:url(../images/envelope.png) no-repeat left;
font-family:arial, sans-serif;
font-size:30px;
font-weight:700;
line-height:50px;
padding:5px 5px 10px 60px;
}

/* form components */
input,textarea {
border:1px solid silver;
background-color:#fff;
color:#404040;
font-size:10px;
font-family:Verdana, Arial, sans-serif;
text-transform:uppercase;
border-radius:5px;
-moz-border-radius:5px;
-webkit-border-radius:5px;
margin:10px 0;
padding:10px;
}

input:hover[type=text],input:focus[type=text],textarea:hover,textarea:focus {
background-color:#E0E0E0;
border:1px solid #000;
}

input[type=text],textarea {
width:300px;
}

#submit {
border:none;
width:87px;
height:41px;
background-image:url(../images/submit.png);
}

#submit:hover {
cursor:pointer;
}

/* alert messages */
.success,.error {
color:#000;
display:none;
font-size:15px;
font-weight:700;
border-radius:4px;
-moz-border-radius:4px;
-webkit-border-radius:4px;
padding:5px 10px 5px 10px;
margin-bottom: 10px;
}

.success {
background-color:#9F6;
border:1px solid #0F0;
}

.error {
background-color:#F66;
border:1px solid red;
}
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
	<script type="text/javascript">
	$(function() {

	// load the modal window
	$('a.modal').click(function(){

		// scroll to top
		$('html, body').animate({scrollTop:0}, 'fast');

		// before showing the modal window, reset the form incase of previous use.
		$('.success, .error').hide();
		$('form#contactForm').show();

		// Reset all the default values in the form fields
		$('#name').val('Your name');
		$('#email').val('Your email address');
		$('#comment').val('Enter your comment or query...');

		//show the mask and contact divs
		$('#mask').show().animate({opacity: 0.7},500);
		$('div#contact').fadeIn();

		// stop the modal link from doing its default action
		return false;
	});

	// close the modal window is close div or mask div are clicked.
	$('div#close, div#mask').click(function() {
		$('div#contact, div#mask').stop().fadeOut('slow');

	});

	$('#contactForm input').focus(function() {
		$(this).val(' ');
	});

	// when the Submit button is clicked...
	$('input#submit').click(function() {
		//Inputed Strings
		var username = $('#name').val(),
			email = $('#email').val(),
			comment = $('#comment').val();

		//Error Count
		var error_count;

		//Regex Strings
		var username_regex = /^[a-z0-9_-]{3,16}$/,
			email_regex = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;

			//Test Username
			if(!username_regex.test(name)) {
				$('#contact_header').after('<p class=error>Invalid username entered!</p>');
				error_count += 1;
			}

			//Test Email
			if(!email_regex.test(email)) {
				$('#contact_header').after('<p class=error>Invalid email entered!</p>');
				error_count += 1;
			}

			//Blank Comment?
			if(comment == '') {
				$('#contact_header').after('<p class=error>No Comment was entered!</p>');
				error_count += 1;
			}

			//No Errors?
			if(error_count === 0) {
				$.ajax({
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
			}

			else {
                $('.error').show();
            }

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