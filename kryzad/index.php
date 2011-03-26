<?php require('../fonctions/config.php'); ?>

<!DOCTYPE html>
<html lang="fr"> 
 
<head> 
    <?php include('../includes/head.php');?>
</head>
 
<body>
	<?php include('../includes/message-ie.html');?>
	<!--[if lte IE 6]><style type="text/css">img, div { behavior: url(scripts/iepngfix.htc) }</style><![endif]--> 

	<div id="wrapper"> <!-- DEBUT WRAPPER -->

		<header class="headerMenu" role="banner">
			<?php include('../includes/header.php');?>
		</header>
		
		<div id="content"><!-- Debut content -->
            <section id="formConnexion" style="margin-top: 100px">
                <form action="traitement.php" method="post">
                    <p>
                        <label for="connexionLogin">Login : </label>   
                        <input type="text" name="connexion[login]" id="connexionLogin" />
                    </p>
                    <p>
                        <label for="connexionMdp">Mot de passe : </label>   
                        <input type="password" name="connexion[mdp]" id="connexionMdp" />
                    </p>
                    <p>
                        <input type="submit" name="connexion[valid]" id="connexionValid" value="Se connecter" />                        
                    </p>
                </form>    
            </section>
        </div><!-- Fin content -->
        <footer role="contentinfo">
    		<?php include('../includes/footer.php');?>
    	</footer>
	
	</div> <!-- FIN WRAPPER -->
</body>
</html>