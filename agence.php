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

		section#agence 		{margin:20px 0;display:inline-block;vertical-align:top;width:600px;}	 
		section#agence h1 a 		{font:normal 5em 'O_O';padding-bottom:10px;cursor:default;}
		section#agence article p	{color:#666666;text-align:justify;}
		
		#portraitAgence{background:url('images/sprite.png') 0 -54px no-repeat;width:600px;height:235px;margin:20px 0 10px;}
	
		section#etapes{margin-top:20px;}
		h1.processus{position:absolute;background:url("images/etapes.jpg") 0 8px no-repeat;width:80px;height:490px;color:#fff;cursor:default;}
		ul.process{font-size:0.9em;color:#777;list-style-type:none;}
		ul.process li span.txt{background:url("images/fleche.jpg") 10px 40px no-repeat;position:absolute;padding:30px 0 0 60px;text-align:justify;color:#555;cursor:default;width:500px;}
		ul.process li strong{color:#636363;font-size:1.1em;margin-bottom:5px;display:block;}
	    
	    /*  Anime Lignes   */
		ul.process li a{display:inline-block;vertical-align:top;width:344px;height:90px;background:url("images/etapes.jpg") 0 0 no-repeat;}
		ul.process li a:hover{background:url("images/etapes.jpg") -356px 0 no-repeat;}
		
		ul.process li.premierContact a{background-position:0 0;}
		ul.process li.premierContact a:hover{background-position:-301px 0;}
		
		ul.process li.conception a{background-position:0 -90px;}
		ul.process li.conception a:hover{background-position:-301px -90px;}
		
		ul.process li.realisation a{background-position:0 -180px;}
		ul.process li.realisation a:hover{background-position:-301px -180px;}
		
		ul.process li.miseEnLigne a{background-position:0 -270px;}
		ul.process li.miseEnLigne a:hover{background-position:-301px -270px;}

		ul.process li.maintenance a{background-position:0 -362px;height:120px;}
		ul.process li.maintenance a:hover{background-position:-301px -362px;}
		
		#ombreBarre{width:500px; height:14px;background:url('images/sprite.jpg') -280px 0 no-repeat;margin-top:30px;}
		#ombrePetiteBarre{width:300px; height:14px;background:url('images/sprite.jpg') 0 -27px no-repeat;}
		
		a.carreVert{background:#690;height:15px;width:15px;display:inline-block;margin-right:5px;} a:hover.carreVert{background:#AFE542;}
		
		article.txtDeveloppement{width:800px;}
		article.txtDeveloppement blockquote{font:normal 1.8em 'oO';margin-top:30px;}
		article.txtDeveloppement p{width:550px;}
		
		section#pointsForts			{margin:10px 0 20px;}
		section#pointsForts h1		{font:normal 2em 'oO';margin:10px 0 20px;border-bottom:1px solid #777;width:900px;}
		section#pointsForts ul		{list-style-type:none;}
		section#pointsForts li			{width:225px;height:200px;border-left:1px solid #777;display:inline-block;}
		section#pointsForts li.budget 	{border-right:1px solid #777;}
		section#pointsForts li img		{position:absolute;}
		section#pointsForts span.titre	{font:bold 1.3em 'oO';color:#690;text-align:center;display:block;}

	</style>
</head>
 
<body>
	<?php include('includes/message-ie.html');?>

	<div id="wrapper"><!-- DEBUT WRAPPER -->
	
	    <header class="headerMenu" role="banner">
		<?php include('includes/header.php');?>
	    </header>
		
		<div id="content"><!-- DEBUT CONTENT -->
		
		    <section id="agence">
			<h1><a>Qui sommes-nous ?</a></h1>
			    <article>
				<p>
				   <a class="carreVert animer"></a><span class="couleurVerte gras">Kryzalead</span> est une agence web répondant présent à vos attentes en matière de projets Internet, pour que ces derniers soient synonymes de <strong>popularité, de notoriété et de réussite</strong>.
				</p>
				<div id="portraitAgence"></div>
				<p>
				    Tout juste née en 2011, de la passion jumelée de 2 associés, à la fois compétents et littéralement mordus de programmation <span class="txtLittle">(au point d’en oublier presque l’heure du repas, ce qui est peu dire !)</span><br/>
				    <span class="couleurVerte">Kryzalead</span> est une agence web <strong>dynamique, structurée,</strong> mais sachant tout de même garder un caractère « maison », avec une ambiance familiale, ce qui booste son efficacité et son aptitude à la communication.<br/>
				    Notre équipe répondra présente non via une <span class="txtBarre">bonne cafetière de café ou d'une bonne sieste</span> mais grâce à  <strong>sa créativité, sa qualification et son enthousiasme à concevoir vos projets</strong>. 
				</p>
				    <div id="ombreBarre"></div>
			    </article>
		    
			    <article class="txtDeveloppement">
				<blockquote class="titre">L’informatique, c’est un bureau, une chaise et un peu de logique</blockquote><cite>François Pérusse</cite>
				    <p>
					Bon, ça tombe plutôt bien, on a les bureaux et les chaises...<br/>
					Trêve de plaisanteries.<br/> Ci-dessous un schéma astucieux et fidéle, d'où naîtra une entente sûre entre vous et nous. Assez simplifier, ce schéma se divise en 5 parties permettant une efficacité à toute épreuve.
				    </p>
			    </article>
			
			<section id="etapes">
			   <h1 class="processus">Les étapes</h1>
				<ul class="process"> 
				    <li class="premierContact"><a></a><span class="txt"><strong>A votre écoute</strong>Nous sommes à l’écoute de votre projet, et vous aidons au mieux de vos intérêts pour garantir à ce dernier un potentiel de réussite optimal.</span></li>
				    <li class="conception"><a></a><span class="txt"><strong>Collecte d’informations</strong>Toujours dans l’optique de mieux vous servir, nous rassemblons le maximum d’informations sur lesquelles nous nous appuierons par la suite, offrant un impact maximum à votre projet, tout en vous permettant de bénéficier du meilleur rapport qualité/prix possible.</span></li>
				    <li class="realisation"><a></a><span class="txt"><strong>Au boulot, les z’amis…</strong>Une fois le cahier des charges signé, et le planning mis en place, vous gardez un contrôle total lors de chacune des étapes de validation.</span></li>
				    <li class="miseEnLigne"><a></a><span class="txt"><strong>Maintenant… et après !</strong>Toujours dans l’optique de vous proposer plus de services, nous offrons diverses possibilités, telles que l’hébergement de votre site, S.E.O., l’analyse du trafic de votre site (statistiques visiteurs), maintenance, … Nous vous accompagnons à chaque étape de votre évolution, sereinement, tout en douceur et en souplesse.</span></li>
				    <li class="maintenance"><a></a><span class="txt"><strong>Toujours au top !</strong>Grâce à nous, votre projet reste en permanence opérationnel. Nous nous chargeons de son bon fonctionnement, de sa fiabilité et – avec vos suggestions – nous le faisons évoluer en toute sécurité.</span></li>
				</ul>
				<div id="ombreBarre"></div>
			</section>
		    </section>

		    <aside class="iconesProgs">
			<h1>Nos Joujoux favoris</h1>
			    <p>Voici, en apéritif, un petit plateau-surprise de quelques-unes de nos capacités. <span class="txtLittle">(notre développeur PHP ayant grignoté toutes nos cacahuètes, le goinfre !!)</span></p>
				<ul class="icones">
				    <li class="photoshtopIcone"><a></a></li>
				    <li class="illustratorIcone"><a></a></li>
				    <li class="flashIcone"><a></a></li>
				    <li class="komodoIcone"><a></a></li>
				    <li class="wordpressIcone"><a></a></li>
				    <li class="w3cIcone"><a></a></li>
				    <li class="ajaxIcone"><a></a></li>
				    <li class="jqueryIcone"><a></a></li>
				    <li class="phpIcone"><a></a></li>
				    <li class="prestashopIcone"><a></a></li>
				</ul>
			    <div id="ombrePetiteBarre"></div>
		    </aside>
		    
		     <section id="pointsForts">
			<h1>Pourquoi nous faire confiance ?</h1>
			    <ul>
				<li><img src="images/icones/relationnel.png" width="60" alt="relation"/><span class="titre">Relationnel</span></li>
				<li><img src="images/icones/innovation.png" width="60" height="60" alt="innovant"/><span class="titre">Innovant</span></li>
				<li><img src="images/icones/fiable.png" width="60" height="60" alt="Fiabilité"/><span class="titre">Fiabilité</span></li>
				<li><img src="images/icones/budget.png" width="60" height="60" alt="Budget"/><span class="titre">Budget</span></li>
			    </ul>
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
    <script>
	$(function(){
	    $('img').hover(function(){
		    $(this).animate({width: 80,height: 80},800);
	      },function(){
		    $(this).animate({width: 60,height: 60},800);
	    });
      })
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