<?php
    session_start();
    $token = md5(uniqid(rand(), true));
    $_SESSION['contact']['token'] = $token;
    require('fonctions/config.php');
    ?>
<!DOCTYPE html>
<html lang="fr"> 

<head>
    <title>Agence web spécialisée dans la création de sites conformes aux standards W3C - Les packs offres Kryzalead</title> 
    <?php include('includes/head.php');?>
</head>
 
<body>
	<?php include('includes/message-ie.html');?>
	
	<div id="wrapper"> <!-- DEBUT WRAPPER -->		
	    <header class="headerMenu" role="banner">
		<?php include('includes/header.php');?>
	    </header>
	    
	    <div id="content"><!-- Début content -->
		<section id="packs"> <!-- Début SECTION PACKS -->
			<p>
			    Chaque Pack Web répond à un besoin spécifique. Nos offres permettent des réalisations à la fois <span class="couleurVerte"><strong>Esthétiques, Fidèles et Fiables</strong></span> pour chaque type de projet web.
			</p>
			 <h1 id="imgNosPacks"></h1>
			     
			<nav role="navigation" class="slide">
			    <ul class="navigation">
				
				<li class="toggleSubMenu packLaunchWeb"><a>Launch Web</a> 
				    <ul class="subMenu"> <!-- mettre le openAtLoad ICI-->
					<li class="colonnesPack">
					    <div>
						   <h1>Pack Launch-Web</h1>
						   <p><span class="souligne">Spécialement conçu pour les petits budgets</span>, ce pack vous permettra de bénéficier d’une solide base pour votre site Internet. Sobre, simple et efficace, il vous offre l’essentiel, sans fioritures ou autres gadgets « bling-bling », et vous ouvre une porte dans l’univers du web. Idéal pour les petites structures et les particuliers.<br/> On dit merci qui ? ;-)</p>
					    </div>
					</li>
					<li class="colonnesPack">
					    <div class="listePack">
						<ul>
						    <li>1 Cahier des charges</li>
						    <li>1 Création graphique</li>
						    <li>3 Pages web : (Accueil et Présentation, vos Produits ou Services, Contact et plan)</li>
						    <li>Installation du site sur le web</li>
						    <li>1 Nom de domaine</li>
						    <li><strong>Un an d'hébergement GRATUIT</strong></li>
						    <li>+ de 10 comptes emails</li>
						    <li>Référencement naturel</li>
						    <li>Statistiques de fréquentation</li>
						    <li>Maintenance (Nous consulter)</li>
						    <li>Espace disque 100Go</li>
						</ul>
					    </div>
					</li>
					<li class="colonnesPack">
					   <div class="imgPackLauchWeb"></div>
					</li>
				    </ul> 
				</li>
				
				
				<li class="toggleSubMenu packVitrine"><a>Vitrine</a> 
				    <ul class="subMenu"> 
					<li class="colonnesPack">
					    <div>
						   <h1>Pack Vitrine</h1>
						   <p>
							Version standard d’un site Internet.<br/>
							" Dans la catégorie Web, je voudrais..... euh!!! "<br/>
							Il y en a 4, pour être exacts, à savoir :<br/>
							- 1 page (site très simple)<br/>
							- 3 pages (site un peu plus étoffé)<br/>
							- 5 pages (site encore un peu plus complet)<br/>
							- Et enfin 10 pages (la plus forte option de cette catégorie, recommandée pour les petites entreprises)<br/>
							Conformément à notre politique « maison », nous vous offrons le meilleur de nous-mêmes <span class="couleurVerte gras">au plus bas prix possible.</span><br/>
						   </p>
					    </div>
					</li>
					<li class="colonnesPack">
					    <div class="listePack">
						<ul>
						    <li>1 Cahier des charges</li>
						    <li>1 Création graphique</li>
						    <li>1 Page web</li>
						    <li>Installation du site sur le web</li>
						    <li>1 Nom de domaine</li>
						    <li>+ de 10 comptes emails</li>
						    <li>Référencement naturel</li>
						    <li>Statistiques de fréquentation</li>
						    <li>Maintenance (Nous consulter)</li>
						    <li><strong>Un an d'hébergement gratuit</strong></li>
						    <li>Espace disque 100Go</li>
						    <li>Protection Antispam et Antivirus</li>
						</ul>
					    </div>
					</li>
					<li class="colonnesPack">
					    <div class="imgPackVitrine">
						<ul class="prixVitrine ">
						    <li>Pack Vitrine 1 page : <span class="prix">189 €</span></li>
						    <li>Pack Vitrine 3 pages : <span class="prix">390 €</span></li>
						    <li>Pack Vitrine 5 pages : <span class="prix">590 €</span></li>
						    <li>Pack Vitrine 10 pages : <span class="prix">1190 €</span></li>
						</ul>
					    </div>
					</li>
				    </ul> 
				</li>
				
				<li class="toggleSubMenu packCatalogue"><a>Catalogue</a> 
				    <ul class="subMenu"> 
					<li class="colonnesPack">
					    <div>
						   <h1>Pack Catalogue</h1>
						   <p>Solution parfaite pour les entreprises à vocation commerciale, proposant des produits aussi divers que variés. Techniquement, cette option est un peu plus « lourde » que les précédentes, mais offre également bien plus de possibilités. Si vous voulez mettre le catalogue de vos produits en ligne, n’hésitez surtout pas : cette option est faite pour vous !</p>
					    </div>
					</li>
					<li class="colonnesPack">
					    <div class="listePack">
						<ul>
						    <li>1 Cahier des charges</li>
						    <li>1 Création graphique</li>
						    <li>Installation du site sur le web</li>
						    <li><strong>Un an d'hébergement gratuit</strong></li>
						    <li>1 Nom de domaine</li>
						    <li>+ de 10 comptes emails</li>
						    <li>Référencement naturel</li>
						    <li>Back-Office (gestion)</li>
						    <li>Statistiques de fréquentation</li>
						    <li>Maintenance technique offerte les 3 premiers mois</li>
						    <li>Espace disque 100Go</li>
						    <li>Protection Antispam et Antivirus</li>
						</ul>
					    </div>
					</li>
					<li class="colonnesPack">
					    <div class="imgPackCatalogue"></div>
					</li>
				    </ul>
				</li>
				
				<li class="toggleSubMenu packEcommerce"><a>E-commerce</a> 
				    <ul class="subMenu openAtLoad"> 
					<li class="colonnesPack">
					    <div>
						   <h1>Pack E-commerce</h1>
						   <p>On grimpe un petit peu dans la complexité technique. Si vous désirez faire du « E-commerce »(aussi appelé « E-business », anglicisme oblige), soit du commerce sur la toile, voici l’idéal pour vous. Nous mettons en place tout le nécessaire en place (Présentation, catalogues, systèmes SSL de transactions financières par carte bleue ou compte Paypal) afin que votre entreprise puisse bénéficier d’une clientèle bien plus vaste grâce à l’internationalisation d’Internet. Votre seule et unique tâche derrière sera de compter les petits billets verts qui vont arriver (dans un sens, ça occupe)… et nous dire un petit « merci », même si ce n’est que facultatif (toutefois, ça fait toujours plaisir :D ).</p>
					    </div>
					</li>
					<li class="colonnesPack">
					    <div class="listePack">
						<ul>
						   <li>1 Cahier des charges</li>
						    <li>1 Création graphique</li>
						    <li>Gestion boutique : stocks, produits,...)</li>
						    <li>Gestion clients et commandes</li>
						    <li>Comptes clients (historique et suivi commandes)</li>
						    <li>Module de paiement bancaire sécurisé</li>
						    <li>Installation du site sur le web</li>
						    <li><strong>Deux ans d'hébergement gratuit</strong></li>
						    <li>1 Nom de domaine</li>
						    <li>+ de 10 comptes emails</li>
						    <li>Référencement naturel</li>
						    <li>Back-Office / Espace client (boutique)</li>
						    <li>Statistiques de fréquentation</li>
						    <li>Maintenance technique offerte les 3 premiers mois</li>
						    <li>Espace disque 100Go</li>
						    <li>Protection Antispam et Antivirus</li>
						</ul>
					    </div>
					</li>
					<li class="colonnesPack">
					    <div class="imgPackEcommerce"></div>
					</li>
				    </ul> 
				</li>
				
				<li class="toggleSubMenu packSurMesure"><a>Sur mesure</a> 
				    <ul class="subMenu"> 
					<li class="colonnesPack">
					    <div>
						   <h1>Pack Sur-mesure</h1>
						   <p>Vous ne trouvez pas l’option qui vous convient dans notre liste ? Bon, pas de soucis, on a ce qu’il vous faut. Comme les plus grands couturiers mondiaux (Armani, Dior, Lacroix, etc…), nous vous offrons… du sur mesure. Non non, vous ne rêvez pas. Si votre projet est dans la catégorie « poids lourds », ou si vous souhaitez opter pour un compromis entre deux options, aucun problème, nous nous adaptons aux nécessités de votre projet. En somme, nous vous offrons le beurre, l’argent du beurre et le sourire de la crémière (voire plus si affinités avec la crémière, hé hé hé…).</p>
					    </div>
					</li>
					<li class="colonnesPack">
					    <div class="listePack">
						<ul>
						   <li>Inspiration graphique</li>
						    <li>Cahier des charges</li>
						    <li>Etude et analyse de votre projet</li>
						    <li>Modifications illimitées</li>
						    <li>Conseil en communication</li>
						    <li>Hébergement adapté à vos besoins</li>
						    <li>Réalisation d'un design original</li>
						    <li>Dépôt, transfert de noms de domaine</li>
						    <li>Outils spécifiques à vos besoins</li>
						    <li>Gestion des comptes mails</li>
						    <li>Maintenance / nous consulter</li>
						</ul>
					    </div>
					</li>
					<li class="colonnesPack">
					    <div class="imgPackEcommerce"></div>
					</li>
				    </ul> 
				</li>
				
				<li class="toggleSubMenu packMetiers"><a>Métiers</a> 
				    <ul class="subMenu"> 
					<li class="colonnesPack">
					    <div>
						   <h1>Pack Métiers</h1>
						   <p>Léger, rapide, d’une maintenance aisée, professionnel, ce type de sites est absolument parfait pour les auto-entrepreneurs, start-up,  et éventuellement aussi les associations désireuses de se doter d’outils de communication à la fois simples et efficaces. Comme pour chacune de nos catégories proposées, nous sommes prêts à nous plier en 4 (même si ça peut faire mal à cause d’éventuelles courbatures !) pour faire de votre rêve… une réalité.</p>
					    </div>
					</li>
					<li class="colonnesPack">
					    <div class="listePack">
						<ul>
						   <li>1 Cahier des charges</li>
						    <li>1 Création graphique</li>
						    <li>Gestion boutique : stocks, produits,...)</li>
						    <li>Gestion clients et commandes</li>
						    <li>Comptes clients (historique et suivi commandes)</li>
						    <li>Module de paiement bancaire sécurisé</li>
						    <li>Installation du site sur le web</li>
						    <li><strong>Un an d'hébergement gratuit</strong></li>
						    <li>1 Nom de domaine</li>
						    <li>+ de 10 comptes emails</li>
						    <li>Référencement naturel</li>
						    <li>Back-Office / Espace client (boutique)</li>
						    <li>Statistiques de fréquentation</li>
						    <li>Maintenance technique offerte les 3 premiers mois</li>
						    <li>Espace disque 100Go</li>
						    <li>Protection Antispam et Antivirus</li>
						</ul>
					    </div>
					</li>
					<li class="colonnesPack">
					    <div class="imgPackEcommerce"></div>
					</li>
				    </ul> 
				</li>
				
				<li class="toggleSubMenu packRefonte"><a>Refonte</a> 
				    <ul class="subMenu"> 
					<li class="colonnesPack">
					    <div>
						   <h1>Pack Refonte</h1>
						   <p>Votre site web tombe en ruine ? Les poutrelles et la toiture menacent de s’écrouler ? Il y a du salpêtre sur les murs ? Pas de panique, nous sommes là (un peu à la manière des GhostBusters). Selon vos souhaits, nous pouvons tout à fait remettre intégralement à neuf votre site web, et l’optimiser au regard des dernières avancées technologiques (notamment l’arrivée de la dernière version de langage en date, à savoir Html-5). Nous pouvons aussi bien, avec votre consentement naturellement, le faire évoluer (ajout de pages, changements de texte, ajout de sécurités, etc…). C’est vous qui voyez » comme dirait R. Laspalès…</p>
					    </div>
					</li>
					<li class="colonnesPack">
					    <div class="listePack">
						<ul>
						   <li>1 Cahier des charges</li>
						    <li>1 Création graphique</li>
						    <li>Gestion boutique : stocks, produits,...)</li>
						    <li>Gestion clients et commandes</li>
						    <li>Comptes clients (historique et suivi commandes)</li>
						    <li>Module de paiement bancaire sécurisé</li>
						    <li>Installation du site sur le web</li>
						    <li><strong>Un an d'hébergement gratuit</strong></li>
						    <li>1 Nom de domaine</li>
						    <li>+ de 10 comptes emails</li>
						    <li>Référencement naturel</li>
						    <li>Back-Office / Espace client (boutique)</li>
						    <li>Statistiques de fréquentation</li>
						    <li>Maintenance technique offerte les 3 premiers mois</li>
						    <li>Espace disque 100Go</li>
						    <li>Protection Antispam et Antivirus</li>
						</ul>
					    </div>
					</li>
					<li class="colonnesPack">
					    <div class="imgPackEcommerce"></div>
					</li>
				    </ul>
				</li>
				
				<li class="toggleSubMenu backOffice"><a>Back-Office</a> 
				    <ul class="subMenu"> 
					<li class="colonnesPack">
					    <div>
						   <h1>Pack Back-Office</h1>
						   <p>Qui dit site web, dit naturellement serveur, et qui dit serveur, dit hébergement. Grâce à nous, il vous est possible directement de mettre en ligne votre projet sur nos serveurs dédiés mis en place tout spécialement à cette intention, et pour un prix vraiment modique. Chose logique, nous assurons en permanence la maintenance de nos propres serveurs, évitant ainsi tout risque de panne, même inopiné.
							Par ailleurs, pour ceux qui veulent avoir une idée précise du trafic sur leur site Internet, nous proposons une large gamme d’options de gestion, comme la mise en place d’une étude de fréquentation concernant les utilisateurs, vous renseigner sur les provenances géographiques, le volume de fréquentation, ainsi qu’un certain nombre d’autres renseignements (mais pas le numéro de téléphone et/ou les mensurations de la voisine d’en face, désolés !).
	    					   </p>
					    </div>
					</li>
					<li class="colonnesPack">
					    <div class="listePack">
						<ul>
						   <li>1 Cahier des charges</li>
						    <li>1 Création graphique</li>
						    <li>Gestion boutique : stocks, produits,...)</li>
						    <li>Gestion clients et commandes</li>
						    <li>Comptes clients (historique et suivi commandes)</li>
						    <li>Module de paiement bancaire sécurisé</li>
						    <li>Installation du site sur le web</li>
						    <li><strong>Un an d'hébergement gratuit</strong></li>
						    <li>1 Nom de domaine</li>
						    <li>+ de 10 comptes emails</li>
						    <li>Référencement naturel</li>
						    <li>Back-Office / Espace client (boutique)</li>
						    <li>Statistiques de fréquentation</li>
						    <li>Maintenance technique offerte les 3 premiers mois</li>
						    <li>Espace disque 100Go</li>
						    <li>Protection Antispam et Antivirus</li>
						</ul>
					    </div>
					</li>
					<li class="colonnesPack">
					    <div class="imgPackEcommerce"></div>
					</li>
				    </ul> 
				</li>
				
				<li class="toggleSubMenu packMaintenance"><a>Maintenance</a> 
				    <ul class="subMenu"> 
					<li class="colonnesPack">
					    <div>
						   <h1>Pack Maintenance</h1>
						   <p>Si vous rencontrez un pépin avec votre site web, si ce dernier est en rideau, nous sommes là, avec notre caisse à outils. Vous connaissez les « BugBusters » (chasseurs de bugs) ? Eh bien c’est nous.
							La maintenance de sites Internet, du fait de notre qualification en tant que développeurs informatiques, n’a absolument aucun secret. Si le serveur boude ou tombe malade (fichus virus informatiques !?), nous lui ferons une petite piqûre de rappel, et chanterons une « berceuse » numérique pour qu’il soit de nouveau sur pieds, tout sourire. On prend soin de votre projet de A à Z…  </p>
					    </div>
					</li>
					<li class="colonnesPack">
					    <div class="listePack">
						<ul>
						   <li>1 Cahier des charges</li>
						    <li>1 Création graphique</li>
						    <li>Gestion boutique : stocks, produits,...)</li>
						    <li>Gestion clients et commandes</li>
						    <li>Comptes clients (historique et suivi commandes)</li>
						    <li>Module de paiement bancaire sécurisé</li>
						    <li>Installation du site sur le web</li>
						    <li><strong>Un an d'hébergement gratuit</strong></li>
						    <li>1 Nom de domaine</li>
						    <li>+ de 10 comptes emails</li>
						    <li>Référencement naturel</li>
						    <li>Back-Office / Espace client (boutique)</li>
						    <li>Statistiques de fréquentation</li>
						    <li>Maintenance technique offerte les 3 premiers mois</li>
						    <li>Espace disque 100Go</li>
						    <li>Protection Antispam et Antivirus</li>
						</ul>
					    </div>
					</li>
					<li class="colonnesPack">
					    <div class="imgPackEcommerce"></div>
					</li>
				    </ul> 
			</nav>
		</section> <!-- FIN SECTION PACKS -->

	    </div><!-- Fin content -->

	<section class="actu">
	    <?php include('includes/blog_actu.php');?>
	</section>
		
	<footer role="contentinfo">
	    <?php include('includes/footer.php');?>
	</footer>
	
	</div> <!-- FIN WRAPPER -->
		
	 <script src="<?php echo ROOT;?>scripts/accordeon.js" type="text/javascript"></script>
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