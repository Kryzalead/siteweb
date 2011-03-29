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
	
	    
	   section#etapes{margin:100px 0;}
	    h1.processus{position:absolute;background:url("images/etapes.jpg") 0 8px no-repeat;width:80px;height:490px;color:#fff;cursor:default;}
	    ul.process{color:#777;list-style-type:none;}
	    ul.process span.txt{display:inline-block;background:url("images/fleche.jpg") 0 0 no-repeat;position:absolute;font-size:1em;padding-left:80px;margin:40px 0 0 30px;text-align:justify;width:350px;height:100px;color:#555;cursor:default;}
	    ul.process strong{color:#636363;font-size:1.2em;margin-bottom:5px;display:block;}
	    
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
		
	    
		
		/*a.carreVert{background:#690;height:15px;width:15px;display:inline-block;margin-right:5px;} a:hover.carreVert{background:#AFE542;}
		a.carreBleu{background:#17B7B7;height:15px;width:15px;display:inline-block;margin-right:5px;} a:hover.carreBleu{background:#7BFCFC;}*/
    
		section#agence 		{margin:30px 0;border:1px solid #2C34CC;display:inline-block;vertical-align:top;}
		section#agence h1 a 		{font:normal 2em 'oO';padding-bottom:10px;cursor:default;}
		section#agence p 		{color:#777;text-align:justify;}
    
		section#agence .textAgence h1	{font:normal 2em 'oO';padding-bottom:10px;color:#777;}
		section#agence .textAgence p	{width:500px;}
		    
		aside.iconesProgs			{margin-top:30px;border:1px solid red;width:310px;height:100px;display:inline-block;vertical-align:top;float:right;}
		aside.iconesProgs h1		{font:normal 2em 'oO';padding-bottom:10px;}
		aside.iconesProgs ul			{list-style-type:none;}

		ul.icones						{width:290px;height:400px;border:1px solid red;}
		ul.icones li a					{float:left;width:75px;height:75px;background:url("images/iconesProg/icones.jpg") 0 0 no-repeat;margin-top:5px}
		ul.icones li a:hover				{background:url("images/iconesProg/icones.jpg") 0 0 no-repeat;}

		ul.icones li.photoshtopIcone a		{background-position:-158px -80px;margin-right:15px}
		ul.icones li.photoshtopIcone a:hover	{background-position:-158px 0;}
		
		ul.icones li.illustratorIcone a		{background-position:-80px -80px;margin-right:15px}
		ul.icones li.illustratorIcone a:hover	{background-position:-80px 0;}

	        ul.icones li.flashIcone a			{background-position:0 -80px;margin-right:15px}
		ul.icones li.flashIcone a:hover		{background-position:0 0;}
		
		ul.icones li.komodoIcone a			{background-position:-235px -80px;margin-right:15px}
		ul.icones li.komodoIcone a:hover	{background-position:-235px 0;}
		
		ul.icones li.wordpressIcone a		{background-position:-410px -77px;}
		ul.icones li.wordpressIcone a:hover	{background-position:-410px 4px;}
		
		ul.icones li.w3cIcone a			{background-position:-305px -85px;width:100px;}
		ul.icones li.w3cIcone a:hover		{background-position:-305px -5px;}
		
		ul.icones li.jqueryIcone a			{background-position:-550px -85px;width:140px;}
		ul.icones li.jqueryIcone a:hover		{background-position:-550px -6px;}
		
		ul.icones li.phpIcone a			{background-position:-475px -85px;}
		ul.icones li.phpIcone a:hover		{background-position:-475px -6px;}
		
		ul.icones li.ajaxIcone a			{background-position:-780px -85px;width:120px;}
		ul.icones li.ajaxIcone a:hover		{background-position:-780px -4px;}
		
		ul.icones li.prestashopIcone a		{background-position:-700px -80px;}
		ul.icones li.prestashopIcone a:hover	{background-position:-700px 0;}
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
			<h1><a>Qui sommes-nous?</a></h1>
			<article class="textAgence">
			    <p>
				Tout juste née 2011, <span class="color">Kryzalead</span> est une jeune <strong>agence web</strong> (donc félicitation aux heureux parents) répondant présent à vos attentes en matière de projets Internet, pour que ces derniers soient synonymes de popularité, de notoriété et de réussite.
			    </p>
			</article>
			
			<article class="textAgence">
			    <h1>Notre boulot oui et? ah oui alors en quelques mots...</h1>
			     <p>
			       	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu ligula sed diam imperdiet interdum ultrices nec leo. Nam porta dignissim mi ac feugiat. Aliquam auctor erat magna, venenatis porttitor dolor. Etiam mollis pellentesque suscipit. Duis congue ullamcorper lorem non volutpat. Cras sapien leo, adipiscing tempus congue nec, fringilla sit amet diam. Vestibulum in scelerisque tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
			     </p>
			</article>
			
			<section id="etapes">
			   <h1 class="processus">Les étapes</h1>
				<ul class="process"> 
				    <li class="premierContact"><a></a><span class="txt"><strong>Nous étudions votre projet</strong> à vos côtés et nous ciblerons au mieux les éléments clés : votre activité, vos objectifs et vos contraintes.</span></li>
				    <li class="conception"><a></a><span class="txt"><strong>En se basant sur les informations recueillies</strong> dans la phase de découverte, nous trouvons des solutions adaptées, dans le respect de votre budget.</span></li>
				    <li class="realisation"><a></a><span class="txt"><strong>Abracadabra !</strong>Dans le respect du planning qui a été établi, nous donnons vie à votre projet. Vous gardez le contrôle lors des étapes de validation.</span></li>
				    <li class="miseEnLigne"><a></a><span class="txt"><strong>Notre collaboration ne s’interrompt pas là !</strong>Hébergement, SEO, analyse du trafic, maintenance... Nous vous accompagnons au fil de votre évolution.</span></li>
				    <li class="maintenance"><a></a><span class="txt"><strong>...........</strong>.................</span></li>
				</ul> 
			</section>
		    </section>
		    
		    <aside class="iconesProgs">
			    <h1>Savoir-faire</h1>
				<p>Nous sommes experts qualifiés dans ces technologies, logiciels et outils :</p>
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
		    </aside>
		    
		
				
				
				
				
				
			<!--	
			<article>
			    <h2>Une agence dans l'ère du temps... et du Web !</h2>
				<p>
				    <a class="carreVert animer"></a>A la fois Pôle d’ingénierie informatique à la pointe de la technologie et centre de conseils techniques, Kryzalead s'engage à vous accompagnez avant, pendant et même après la conception de votre projet. Nous faisons de votre accompagnement comme du succès de vos projets une priorité absolue.<br/>
				    Née en 2011, de la passion jumelée de 2 associés, à la fois très compétents et littéralement mordus de programmation (au point d’en oublier presque quotidiennement l’heure du repas, ce qui est peu dire !), <strong>Kryzalead</strong> est une agence web <strong style="color:#690">dynamique, structurée, mais sachant tout de même garder un caractère « maison » similaire à une Start-up, avec une ambiance familiale, ce qui booste son efficacité et son aptitude à la communication d’une façon non négligeable.</strong><br/>
				    Le sérieux et la motivation de cette équipe qualifiée permettent des réalisations à la fois <span class="souligne">esthétiques, fidèles, fiables</span> et – chose naturellement logique - <span class="souligne">conformes aux standards</span> actuellement en vigueur sur la « toile », en particulier le fameux standard de normalisation W3C auquel tout site Internet doit se conformer pour pouvoir prétendre être recensé par n’importe quel moteur de recherche, Google en tête (pour ne citer que celui-ci).	
				</p>
			</article>
				
			<article>
			    <h2>Votre réussite est la nôtre !</h2>
				<p>
				   <a class="carreBleu animer"></a>Nous serons toujours présents à vos cotés afin de vous guider, vous conseiller, vous orienter au mieux de vos intérêts et vous accompagnez tout au long de vos projets Web, du début… à la fin. Nos domaines de compétences, très vastes, s'étendent aussi bien sur l'identité visuelle du web design (apparence du site) que le développement de sites de e-business (ou e-commerce), en passant par des sites vitrines, sites sur-mesure, sites touristiques, sites art, 6 sites, sites lance-miss… euh…. Non, celui-ci n’est pas dans la liste, milles excuses. Bref, vous l’aurez compris, ce ne sont pas les possibilités qui viennent à manquer quant à nos domaines de compétences.
				   Nous ne répondrons nullement « Présent ! » uniquement avec une bonne tasse de café (Capuccino ou expresso ? combien de sucres ?) ou encore derrière une bonne assiette richement garnie (à moins que ce ne soit l’addition qui soit effectivement garnie, mais c’est une toute autre histoire…), mais bien – fort simplement – grâce au fait d’être à l’écoute de vos attentes, des idées que vous souhaitez mettre en place, grâce également à notre niveau de technicité sans cesse à la pointe des dernières avancées en la matière et – cerise sur le gâteau – surtout grâce à notre enthousiasme à concevoir et donc donner naissance à votre projet (quel joli bébé : 3.9 Kilo… octets!)
				</p>
			</article>
			
			<article>
			    <h2>Une agence basée clients</h2>
				<p>
				    Nous proposons à nos clients des solutions techniques, mais aussi divers types de prestations pour que chaque projet, d’une part, prenne vie, mais également, question pécuniaire oblige, bien évidemment offrir aussi un coût financier le plus bas possible et le plus compétitif du marché. Notre entreprise est certes à vocation commerciale, mais elle n’en reste pas moins humaine pour autant.
				</p>
			</article>-->
			

		
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