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
		
		section#etapes{margin-left:50px;}
		h1.processus{margin-top:20px;text-indent:-9999px;}
		ul.process{color:#777;list-style-type:none;height:470px;}
		ul.process span.txt{display:none;position:absolute;font-size:1em;padding:20px;margin:10px 0 0 80px;text-align:justify;width:420px;border:1px dashed #000;color:#555}
		ul.process strong{color:#636363;font-size:1.2em;margin-bottom:5px;display:block;}
		
		
		/* Anime Lignes */
		    ul.process li a{display:inline-block;vertical-align:top;width:344px;height:90px;background:url("images/etapes.png") 0 0 no-repeat transparent;}
		    ul.process li a:hover{background:url("images/etapes.png") -356px 0 no-repeat transparent;}
		    
		    ul.process li.premierContact a{background-position:0 0;}
		    ul.process li.premierContact a:hover{background-position:-356px 0;}
		    li:hover.premierContact span {display:inline-block;background-color:#E7FCBD}
		    
		    ul.process li.conception a{background-position:0 -90px;}
		    ul.process li.conception a:hover{background-position:-356px -90px}
		    li:hover.conception span {display:inline-block;background-color:#81A4C6}
		    
		    ul.process li.realisation a{background-position:0 -180px;}
		    ul.process li.realisation a:hover{background-position:-356px -180px}
		    li:hover.realisation span {display:inline-block;background-color:#E5A5D9}
		    
		    ul.process li.miseEnLigne a{background-position:0 -270px;}
		    ul.process li.miseEnLigne a:hover{background-position:-356px -270px}
		    li:hover.miseEnLigne span {display:inline-block;background-color:#F7CA8A}

		    ul.process li.maintenance a{background-position:0 -362px;height:140px;}
		    ul.process li.maintenance a:hover{background-position:-356px -362px}
		    li:hover.maintenance span {display:inline-block;background-color:#FCFBA6}
	</style>
</head>
 
<body>
	<?php include('includes/message-ie.html');?>

	<div id="wrapper"> <!-- DEBUT WRAPPER -->		
	    <header class="headerMenu" role="banner">
		<?php include('includes/header.php');?>
	    </header>
		
		<div id="content"><!-- Debut content -->
		
		    <section id="agence">
			<article>
			    <h1 class="animer"><a>Qui sommes-nous?</a></h1>
				<p>
				    Mise en place en 2011, <span class="color">Kryzalead</span> est une jeune <strong>agence web</strong> répondant présente à vos écoutes et donnant forme à vos projets afin qu'ils en soient une réussite.
				</p>
			</article>
				
			<article>
			    <h2>Une agence dans l'ère d'internet</h2>
				<p>
				    A la fois agence web et agence conseil, Kryzalead s'engage à vous accompagnez avant, pendant et après la conception de votre projet, nous faisons de votre accompagnement une priorité.</p>
				    
				<p style="padding:30px 10px;border:1px dashed #ED9912;"><span style="color:#690;font:bold 1.2em Arial">Esprit du texte a garder pour l'intégraliter du site -> Jeune drôle dynamique accrocheur ....</span><br/>
				    Née en 2011, de la passion jumelée de 2 associés, Alternative-Webdesign est une jeune agence web dynamique et structurée. Le sérieux et la motivation de cette équipe qualifiée permettent des réalisations à la fois esthétiques, fidèles,fiables et conformes aux stantards du web (W3C).
				    Parce que '<span class="souligne">votre reussite est la notre</span>', nous serons toujours là à vos cotés afin de vous conseillez et vous accompagnez tout au long de vos projets WEB.
				    Nos domaines de compétences s'etendent aussi bien sur l'identité visuelle, web design, que le développement de site e-commerce, site vitrine, site sur-mesure,etc...
				    Notre équipe répondra présente non via <s>une bonne cafetiere de café ou d'une bonne siéte</s> mais grace à sa créativité, sa qualification et son enthousiame a concevoir vos projets.</p>
				
			</article>
				
			<article>
			    <h2>Une agence basée clients</h2>
				<p>
				    Nous proposons à nos clients des solutions techniques ainsi que des prestations afin que leur projet prenne vie avec des <strong>coûts financiers réduits</strong>.
				</p>
			</article>
			
			<section id="etapes">
			   <h1 class="processus">Le processus : Comment se déroule les étapes?</h1>
				<ul class="process"> 
				    <li class="premierContact"><a href="#"></a><span class="txt"><strong>Nous étudions votre projet</strong> à vos côtés et nous ciblerons au mieux les éléments clés : votre activité, vos objectifs et vos contraintes.</span></li>
				    <li class="conception"><a href="#"></a><span class="txt"><strong>En se basant sur les informations recueillies</strong> dans la phase de découverte, nous trouvons des solutions adaptées, dans le respect de votre budget.</span></li>
				    <li class="realisation"><a href="#"></a><span class="txt"><strong>Abracadabra !</strong>Dans le respect du planning qui a été établi, nous donnons vie à votre projet. Vous gardez le contrôle lors des étapes de validation.</span></li>
				    <li class="miseEnLigne"><a href="#"></a><span class="txt"><strong>Notre collaboration ne s’interrompt pas là !</strong>Hébergement, SEO, analyse du trafic, maintenance... Nous vous accompagnons au fil de votre évolution.</span></li>
				    <li class="maintenance"><a href="#"></a><span class="txt"><strong>...........</strong>.................</span></li>
				</ul> 
			</section>
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