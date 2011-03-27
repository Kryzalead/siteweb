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
		
		h1.processus{background-image:url("images/etapes.jpg");height:37px;margin:30px 0;text-indent:-9999px;width:250px}
		
		ul.process{color:#777;list-style:none;margin:0;height:320px;}
		ul.process strong{color:#56616A;font-size:14px}
		ul.process span.txt{display:block;font-size:1em;padding-left:12px;padding-right:40px;padding-top:20px;text-align:left;width:168px}
		
		ul.process li{float:left}
		ul.process li a{display:inline-block;vertical-align:top;width:228px;height:177px;background:url("images/etapes-de-creation.jpg") 0 0 no-repeat transparent;}
		ul.process li a:hover{background:url("images/etapes-de-creation.jpg") no-repeat 0 -177px transparent;height:177;width:228px;}
		
		ul.process li a.recherche{background-position:-228px 0;}
		ul.process li a:hover.recherche{background-position:-228px -177px}
		
		ul.process li a.creation{background-position:-457px 0;}
		ul.process li a:hover.creation{background-position:-457px -177px}
		
		ul.process li a.evolution{background-position:-687px 0;}
		ul.process li a:hover.evolution{background-position:-687px -177px}		
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
				    A la fois agence web et agence conseil, Kryzalead s'engage à vous accompagnez avant, pendant et après la conception de votre projet, nous faisons de votre accompagnement une priorité.
				    
				    Kryzalead se compose d'une équipe dynamique, structurée, fidéle, experte mais surtout passionnée.
				    Grâce à un travail constant et régulier, nos réaliserons vos projets avec les toutes dernières avancées techniques dans le domaine du web.
				    Aussi bien dans la mise en place de web strategy et la création ou refonte d'identité visuelle.
	    
				</p>
			</article>
				
			<article>
			    <h2>Une agence basée clients</h2>
				<p>
				    Nous proposons à nos clients des solutions techniques ainsi que des prestations afin que leur projet prenne vie avec des <strong>coûts financiers réduits</strong>.
				</p>
			</article>
			
			<aside>
			    <h1 class="processus">Le processus : Comment faisons-nous des sites internet ?</h1> 
				<ul class="process"> 
				    <li><a href="#" class="decouverte"></a><span class="txt"><strong>Grâce à de nombreuses questions</strong>, nous cernons votre projet et nous nous imprégnons au mieux des éléments clés : votre activité, vos objectifs et vos contraintes.</span></li> 
				    <li><a href="#" class="recherche"></a><span class="txt"><strong>En se basant sur les informations recueillies</strong> dans la phase de découverte, nous trouvons des solutions adaptées, dans le respect de votre budget.</span></li> 
				    <li><a href="#" class="creation"></a><span class="txt"><strong>Que la magie opère !</strong> Dans le respect du planning qui a été établi, nous donnons vie à votre projet. Vous gardez le contrôle lors des étapes de validation.</span></li> 
				    <li><a href="#" class="evolution"></a><span class="txt"><strong>Notre collaboration ne s’interrompt pas là !</strong> Formation, hébergement, SEO, analyse du trafic, maintenance... Nous vous accompagnons au fil de votre évolution.</span></li>
				</ul> 
			</aside>
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