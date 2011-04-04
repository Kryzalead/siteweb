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

	<div id="wrapper"><!-- DEBUT WRAPPER -->
	
	    <header class="headerMenu" role="banner">
		<?php include('includes/header.php');?>
	    </header>
		
		<div id="content"><!-- DEBUT CONTENT -->

		    <section id="agence">
			<h1><a>Qui sommes-nous ?</a></h1>
			    <article>
				<p>
				  <span class="carreVert animer"></span><span class="couleurVerte gras">Kryzalead</span> est une agence web répondant présent à vos attentes en matière de projets Internet, pour que ces derniers soient synonymes de <strong>popularité, de notoriété et de réussite</strong>.
				</p>
				<div id="portraitAgence"></div>
				<p>
				    Tout juste née en 2011, de la passion jumelée de 2 associés, à la fois compétents et littéralement mordus de programmation <span class="txtLittle">(au point d’en oublier presque l’heure du repas, ce qui est peu dire !)</span><br/>
				    <span class="couleurVerte">Kryzalead</span> est une agence web <strong>dynamique, structurée,</strong> mais sachant tout de même garder un caractère « maison », avec une ambiance familiale, ce qui booste son efficacité et son aptitude à la communication.<br/>
				    Notre équipe répondra présente non via une <span class="txtBarre">bonne cafetière de café ou d'une bonne sieste</span> mais grâce à <strong>sa créativité, sa qualification et son enthousiasme à concevoir vos projets</strong>. 
				</p>
				    <div id="ombreBarre"></div>
			    </article>
		    
			    <article class="txtDeveloppement">
				<blockquote class="titre">L’informatique, c’est un bureau, une chaise et un peu de logique</blockquote><cite>François Pérusse</cite>
				    <p>
					Bon, ça tombe plutôt bien, on a les bureaux et les chaises...<span class="tabulation txtLittle">- Trêve de plaisanteries -</span><br/>
					Voici un petit schéma (avec couleurs et tout le toutim) résumant nos compétences en 5 principaux points <span class="txtLittle">(c'est tout de suite plus sympa avec un p'tit dessin)</span>
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
				    <div id="ombreGrandeBarre"></div>
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
			    <ul id="imgHover">
				<li><img src="images/icones/relationnel.png" alt="relation Kryzalead" /><span class="titre">Relationnel</span>Nous privilégions le dialogue, donnée capitale dans toute relation. Sans dialogue, rien ne serait possible <span class="txtLittle">(à moins de maitriser le langage des signes, mais imaginez un peu le tableau au téléphone !?)</span>. Dans le calme et la convivialité, nous avancerons côte à côte, et nous vous aiderons à réaliser votre projet tout en douceur, sans « couac » et sans soucis…</li>
				<li><img src="images/icones/innovation.png" alt="innovant Kryzalead"/><span class="titre">Innovant</span>Toutes nos créations sont 100% originales. Nous créons de A à Z tout ce qu’il faut pour votre projet, sans « repomper » des paquets entiers de fichiers venant d’autres projets pour être réadaptés, comme font bon nombre de nos concurrents (en Flag’, messieurs !), solution de facilité par excellence…</li>
				<li><img src="images/icones/fiable.png" alt="fiabilité Kryzalead"/><span class="titre">Fiabilité</span>Nous appliquons un protocole très strict en matière de contrôles à chaque étape de développement de votre projet, et ce dès le début de l’analyse technique. Nous vous livrons votre projet dans les délais, et certifié parfaitement opérationnel.<br/> De plus, nous restons en veille pour débusquer les éventuelles erreurs inattendues. Avec nous, vous pouvez dormir sur vos deux oreilles…</li>
				<li><img src="images/icones/budget.png" alt="budget Kryzalead"/><span class="titre">Budget</span>Nos tarifs sont parmi les plus bas du marché, en terme de rapport qualité/prix. Crise oblige, nous ne voulons en aucun cas que votre projet ne vous ruine. Aussi pensons-nous à vous pour vous offrir les meilleures prestations au meilleur prix.<br/><span class="txtLittle">C’est le p’tit cochon tirelire qui va être content.</span></li>
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
	
    <script type="text/javascript" src="<?php echo ROOT;?>scripts/formContact.js"></script>
    <script type="text/javascript">
	$(function(){
	    $('#imgHover li img').hover(function(){
		    $(this).stop().animate({width:85,height:85},400);
	      },function(){
		    $(this).stop().animate({width:70,height:70},400);
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