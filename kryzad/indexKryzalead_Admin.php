<!DOCTYPE html>
<html lang="fr"> 
 
    <head>
        <title>Administration - Agence web Kryzalead</title>
            <?php include('../includes/head.php');?>
            <link rel="stylesheet" media="all" href="css/style.css" /> 
    </head>
     
    <body onload="slideMenu.build('sm',300,10,10,0)">
        <?php include('../includes/message-ie.html');?>
            
        <div id="wrapper"> <!-- DEBUT WRAPPER -->
            
                <header class="menuAdmin" role="banner">
				<div class='gradient' id='v-gradient'>
				    <h1>Bienvenue sur l'administration du site internet <span class="gras bleu">Kryzalead</span></h1>
				</div>
				
				<nav role="navigation">
					  <ul id="sm" class="sm">
						    <li><img src="images/menu/accueil.png" alt="" /><span class="titreMenu">Accueil</span>Gérez le contenu de votre site internet rapidement et simplement.</li>
						    <li><img src="images/menu/pages.png" alt="" /><span class="titreMenu">Gestion des Packs</span>Gérez le contenu de votre site internet rapidement et simplement.</li>
						    <li><img src="images/menu/portfolio.png" alt="" /><span class="titreMenu">Gestion du Portfolio</span>Gérez le contenu de votre site internet rapidement et simplement.</li>
						    <li><img src="images/menu/visiteurs.png" alt="" /><span class="titreMenu">Gestion des visiteurs</span>Gérez le contenu de votre site internet rapidement et simplement.</li>
						    <li><img src="images/menu/outils.png" alt="" /><span class="titreMenu">Outils</span>Gérez le contenu de votre site internet rapidement et simplement.</li>
						    <li><img src="images/menu/retour.png" alt="" /><span class="titreMenu">Visiualisation</span>Gérez le contenu de votre site internet rapidement et simplement.</li>
						    <li><img src="images/menu/optionsSup.png" alt="" /><span class="titreMenu">Outils supplémenaires</span>Gérez le contenu de votre site internet rapidement et simplement.</li>
						    <li><img src="images/menu/contact.png" alt="" /><span class="titreMenu">Gestion des Packs</span>Gérez le contenu de votre site internet rapidement et simplement.</li>
						    <li><img src="images/menu/quitter.png" alt="" /><span class="titreMenu">Quitter</span>Gérez le contenu de votre site internet rapidement et simplement.</li>
						    <li></li>
						    <li></li>
						    <li></li>
					  </ul>
				</nav>
                </header>
                
                <div id="content"><!-- Debut content -->
				<section id="repereMenu">
					  <p>Accueil<span class="decal">Accueil de l'administration</span></p>
				</section>
		
				<section id="evenements">
				    <h1>Derniers événements</h1>
						    <div id="cadreEvenements">
								
						    </div>
				</section>
				
				
				<section id="actualites">
					  <h1>Actualités</h1>
						    <div id="cadreActualites">
								
								
						    </div>
				</section>
			  
			  
				<section id="visiteurs">
					<h1>Statistiques visiteurs</h1>
						    <div id="cadreVisiteurs">
						
						    </div>
				</section>
                </div> <!-- FIN CONTENT -->
		    
		    <footer role="contentinfo">
				<?php include('includes/footer.php');?>
		    </footer>
	  
        </div> <!-- FIN WRAPPER -->
            
            <script type="text/javascript" src="scripts/slidemenu.js"></script>
	  </body>
</html>