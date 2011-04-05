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
	    
	    <div id="content"><!-- Debut content -->
		<section id="packs"> <!-- Debut SECTION PACKS -->
		
			<p>
			    Chaque Pack Web répond à un besoin spécifique. Nos offres permettent des réalisations à la fois <span class="couleurVerte"><strong>Esthétiques, Fidèles et Fiables</strong></span> pour chaque type de projet web.
			</p>
			
			<nav role="navigation" class="slide">
			    <ul class="navigation"> 
				<li class="toggleSubMenu packLaunchWeb"><span>Launch Web</span> 
				    <ul class="subMenu openAtLoad">
					<ul class="descPack">
					    <li>
						Dans notre offre petit budget <span class="couleurVerte gras">'Launch web'</span> nous avons inclus :
					    </li>
					</ul>
					    <ul class="listePack">
						<li>- <a href="#">1 Cahier des charges</a></li>
						<li>- <a href="#">1 Création graphique</a></li>
						<li>-  <a href="#">3 Pages web (Accueil et Présentation, vos Produits ou Services, Contact et plan)</a></li>
						<li>- <a href="#">Installation du site sur le web</a></li>
						<li>- <a href="#">1 Nom de domaine</a></li>
						<li>- <a href="#"><b>Un an d'hébergement gratuit</b></a></li>
						<li>- <a href="#">+ de 10 comptes emails</a></li>
						<li>- <a href="#">Référencement naturel</a></li>
						<li>- <a href="#">Statistiques de fréquentation</a></li>
						<li>- <a href="#">Maintenance (Nous consulter)</a></li>
						<li>- <a href="#">Espace disque 100Go</a></li>
						<li>- <a href="#">Protection Antispam et Antivirus</a></li>
					    </ul>
					    <ul class="prixPack">
						<li>
						    03............
						</li>
					    </ul>
				    </ul> 
				</li> 

				<li class="toggleSubMenu packVitrine"><span>Vitrine</span> 
				    <ul class="subMenu"> 
					<li>Lorem ipsum dolor sit amet,............ consectetur adipiscing elit. Aliquam orci tortor, posuere a posuere et, euismod in lorem. Nulla facilisi. Curabitur sit amet ultricies purus. Sed auctor posuere mattis. In ac dolor felis, ut cursus dolor. Aenean molestie vehicula metus at lobortis. Aliquam erat volutpat. Vestibulum ligula nibh, faucibus sit amet ornare sed, varius ut nulla. Cras non feugiat neque. Cras lacinia dapibus mi id bibendum. Cras sapien leo, aliquet at viverra in, faucibus at eros.</li>
					<li>
					    02.............
					</li>
					<li>
					    03..............
					</li>
				    </ul> 
				</li>
				<li class="toggleSubMenu packCatalogue"><span>Catalogue</span> 
				    <ul class="subMenu openAtLoad"> 
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam orci tortor, posuere a posuere et, euismod in lorem. Nulla facilisi. Curabitur sit amet ultricies purus. Sed auctor posuere mattis. In ac dolor felis, ut cursus dolor. Aenean molestie vehicula metus at lobortis. Aliquam erat volutpat. Vestibulum ligula nibh, faucibus sit amet ornare sed, varius ut nulla. Cras non feugiat neque. Cras lacinia dapibus mi id bibendum. Cras sapien leo, aliquet at viverra in, faucibus at eros.</li>
					<li>
					    02.............
					</li>
					<li>
					    03..............
					</li>
				    </ul> 
				</li> 
				<li class="toggleSubMenu packEcommerce"><span>E-commerce</span> 
				    <ul class="subMenu"> 
					<li>Lorem ipsum dolor sit amet,............ consectetur adipiscing elit. Aliquam orci tortor, posuere a posuere et, euismod in lorem. Nulla facilisi. Curabitur sit amet ultricies purus. Sed auctor posuere mattis. In ac dolor felis, ut cursus dolor. Aenean molestie vehicula metus at lobortis. Aliquam erat volutpat. Vestibulum ligula nibh, faucibus sit amet ornare sed, varius ut nulla. Cras non feugiat neque. Cras lacinia dapibus mi id bibendum. Cras sapien leo, aliquet at viverra in, faucibus at eros.</li>
					<li>
					    02.............
					</li>
					<li>
					    03..............
					</li>
				    </ul> 
				</li>
				<li class="toggleSubMenu packMetiers"><span>Métiers</span> 
				    <ul class="subMenu openAtLoad"> 
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam orci tortor, posuere a posuere et, euismod in lorem. Nulla facilisi. Curabitur sit amet ultricies purus. Sed auctor posuere mattis. In ac dolor felis, ut cursus dolor. Aenean molestie vehicula metus at lobortis. Aliquam erat volutpat. Vestibulum ligula nibh, faucibus sit amet ornare sed, varius ut nulla. Cras non feugiat neque. Cras lacinia dapibus mi id bibendum. Cras sapien leo, aliquet at viverra in, faucibus at eros.</li>
				 	<li>
					    02.............
					</li>
					<li>
					    03..............
					</li>
				    </ul> 
				</li> 
				<li class="toggleSubMenu packSurMesure"><span>Sur mesure</span> 
				    <ul class="subMenu"> 
					<li>Lorem ipsum dolor sit amet,............ consectetur adipiscing elit. Aliquam orci tortor, posuere a posuere et, euismod in lorem. Nulla facilisi. Curabitur sit amet ultricies purus. Sed auctor posuere mattis. In ac dolor felis, ut cursus dolor. Aenean molestie vehicula metus at lobortis. Aliquam erat volutpat. Vestibulum ligula nibh, faucibus sit amet ornare sed, varius ut nulla. Cras non feugiat neque. Cras lacinia dapibus mi id bibendum. Cras sapien leo, aliquet at viverra in, faucibus at eros.</li>
				   	<li>
					    02.............
					</li>
					<li>
					    03..............
					</li>
				    </ul> 
				</li>
				<li class="toggleSubMenu packRefonte"><span>Refonte</span> 
				    <ul class="subMenu openAtLoad"> 
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam orci tortor, posuere a posuere et, euismod in lorem. Nulla facilisi. Curabitur sit amet ultricies purus. Sed auctor posuere mattis. In ac dolor felis, ut cursus dolor. Aenean molestie vehicula metus at lobortis. Aliquam erat volutpat. Vestibulum ligula nibh, faucibus sit amet ornare sed, varius ut nulla. Cras non feugiat neque. Cras lacinia dapibus mi id bibendum. Cras sapien leo, aliquet at viverra in, faucibus at eros.</li>
					<li>
					    02.............
					</li>
					<li>
					    03..............
					</li>
				    </ul> 
				</li> 
				<li class="toggleSubMenu backOffice"><span>Back-Office</span> 
				    <ul class="subMenu"> 
					<li>Lorem ipsum dolor sit amet,............ consectetur adipiscing elit. Aliquam orci tortor, posuere a posuere et, euismod in lorem. Nulla facilisi. Curabitur sit amet ultricies purus. Sed auctor posuere mattis. In ac dolor felis, ut cursus dolor. Aenean molestie vehicula metus at lobortis. Aliquam erat volutpat. Vestibulum ligula nibh, faucibus sit amet ornare sed, varius ut nulla. Cras non feugiat neque. Cras lacinia dapibus mi id bibendum. Cras sapien leo, aliquet at viverra in, faucibus at eros.</li>
				    	<li>
					    02.............
					</li>
					<li>
					    03..............
					</li>
				    </ul> 
				</li>
				<li class="toggleSubMenu packMaintenance"><span>Maintenance</span> 
				    <ul class="subMenu"> 
					<li>Lorem ipsum dolor sit amet,............ consectetur adipiscing elit. Aliquam orci tortor, posuere a posuere et, euismod in lorem. Nulla facilisi. Curabitur sit amet ultricies purus. Sed auctor posuere mattis. In ac dolor felis, ut cursus dolor. Aenean molestie vehicula metus at lobortis. Aliquam erat volutpat. Vestibulum ligula nibh, faucibus sit amet ornare sed, varius ut nulla. Cras non feugiat neque. Cras lacinia dapibus mi id bibendum. Cras sapien leo, aliquet at viverra in, faucibus at eros.</li>
				   	<li>
					    02.............
					</li>
					<li>
					    03..............
					</li>
				    </ul> 
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