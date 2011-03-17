<?php
session_start();
$token = md5(uniqid(rand(), true));
$_SESSION['contact']['token'] = $token;
require('../fonctions/config.php');
?>

<!DOCTYPE html>
<html lang="fr"> 
 
<head> 
    <?php include('../includes/head.php');?>
	
	<style type="text/css">
		#contactnojs								{width:650px;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;border:1px solid #ccc;padding:10px 20px;margin-bottom:20px;}
		#contactnojs img.img-form		{float:right;display:inline-block;margin-top:100px;}
		#contactnojs	h2						{font:normal 4.5em 'O_O';}

	</style>
		
</head>
 
<body>
	<?php include('../includes/message-ie.html');?>
	<!--[if lte IE 6]><style type="text/css">img, div { behavior: url(scripts/iepngfix.htc) }</style><![endif]--> 

	<div id="wrapper"> <!-- DEBUT WRAPPER -->
		
		<header role="banner">
			<?php include('../includes/header.php');?>
		</header>

		<div id="slogan">
			<h2><a>Votre projet est à l'état de cocon?<br/>
			Nous sommes là pour l'aider à s'envoler.</a></h2>
		</div>
		
		<div id="content"><!-- Debut content -->
            <?php
            if(!empty($_SESSION['contact']['info']))
                echo htmlspecialchars($_SESSION['contact']['info']);

            if(!empty($_SESSION['contact']['erreur'])){
                 echo '<ul>';
                 foreach($_SESSION['contact']['erreur'] as $erreur)
                    echo '<li>'.$erreur.'</li>';
                echo '</ul>';    
            }
            ?>
            <div id="contactnojs"><!--contact form-->
                <h2 id="contact_header">Un commentaire ?</h2>
                <img src="<?php echo ROOT;?>images/contact/cubes.png" alt="Kryzalead agence web - Suivez-nous - Contact" width="300" class="img-form"/>
                <p class="success">Merci, votre message a bien été envoyé!</p>
                <p class="error">Une erreur est survenue lors de l'envois du message</p>
				<form action="traitement.php" method="post" name="contactForm" id="contactForm">
					<p><label for="nom" id="l_nom">Votre nom : </label><span class="inputError">Nom d'utilisateur incorrect!</span><br /><input name="nom" id="nom" type="text" size="30" required /></p>
					<p><label for="email" id="l_email">Votre email : </label><span class="inputError">Email incorrect!</span><br /><input name="email" id="email" type="email" size="30" required /></p>
					<p><label for="message" id="l_message">Votre message : </label><span class="inputError">Message incorrect!</span><br /><textarea name="message" id="message" rows="5" cols="40" required></textarea></p>
					<p><input type="hidden" name="token" id="token" value="<?php echo $token;?>" /></p>
                    <p><input type="submit" id="valid" name="valid" value="Envoyer" /></p>
				</form>
            </div><!--end contact form-->
        </div><!-- Fin content -->

		<section class="actu">
			<?php include('../includes/actu.php');?>
		</section>
		
	<footer role="contentinfo">
		<?php include('../includes/footer.php');?>
	</footer>
	
	</div> <!-- FIN WRAPPER -->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
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
    <?php $_SESSION['contact']['erreur'] = $_SESSION['contact']['info'] = array();?>
    </body>
</html>