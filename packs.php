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
						   <p>On grimpe un petit peu dans la complexité technique. Si vous désirez faire du « E-commerce »(aussi appelé « E-business », anglicisme oblige), soit du commerce sur la toile, voici l’idéal pour vous. Nous mettons en place tout le nécessaire en place (Présentation, catalogues, systèmes SSL de transactions financières par carte bleue ou compte Paypal) afin que votre entreprise puisse bénéficier d’une clientèle bien plus vaste grâce à l’internationalisation d’Internet. Votre seule et unique tâche derrière sera de compter les petits billets verts qui vont arriver (dans un sens, ça occupe)… et nous dire un petit « merci », même si ce n’est que facultatif (toutefois, ça fait toujours plaisir :D ).</p>
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