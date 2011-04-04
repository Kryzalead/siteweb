<?php
session_start();
$token = md5(uniqid(rand(), true));
$_SESSION['contactnojs']['token'] = $token;
require('../fonctions/config.php');
?>

<!DOCTYPE html>
<html lang="fr"> 
 
<head> 
    <?php include('../includes/head.php');?>
</head>
 
<body>
	<?php include('../includes/message-ie.html');?>

	<div id="wrapper"> <!-- DEBUT WRAPPER -->
	    
	    <header class="headerMenu" role="banner">
		<?php include('../includes/header.php');?>
	    </header>

	    <div id="slogan">
		<h2><a>Votre projet est à l'état de cocon?<br/>Nous sommes là pour l'aider à s'envoler.</a></h2>
	    </div>
	    
	    <div id="content"><!-- Debut content -->
		<div id="contactNoJs"><!--contact form-->
		    <?php
			if(!empty($_SESSION['contactnojs']['info']))
			    echo '<p class="success">'.htmlspecialchars($_SESSION['contactnojs']['info']).'</p>';
			if(!empty($_SESSION['contactnojs']['erreur']['send']))
			    echo '<p class="error">'.htmlspecialchars($_SESSION['contactnojs']['erreur']['send']).'</p>';
		    ?>
		    <h2 id="contact_header"><span id="symboleAt"></span>Un commentaire ?</h2>
			<div id="bonhommeContact"></div>
			<form action="traitement.php" method="post" id="contactForm">
			     <p><label for="contactNoJsNom" >Votre nom : </label>
				<?php
				    if(!empty($_SESSION['contactnojs']['erreur']['nom']))
					echo '<span class="inputError">'.$_SESSION['contactnojs']['erreur']['nom'].'</span>';
				?>	
			    <br /><input name="contactnojs[nom]" id="contactNoJsNom" type="text" size="30" required /></p>
			    <p><label for="contactNoJsEmail" >Votre email : </label>
				<?php
				    if(!empty($_SESSION['contactnojs']['erreur']['email']))
					echo '<span class="inputError">'.$_SESSION['contactnojs']['erreur']['email'].'</span>';
				?>
			    <br /><input name="contactnojs[email]" id="contactNoJsEmail" type="email" size="30" required /></p>
			    <p><label for="contactNoJs[message]" >Votre message : </label>
				<?php
				    if(!empty($_SESSION['contactnojs']['erreur']['message']))
					echo '<span class="inputError">'.$_SESSION['contactnojs']['erreur']['message'].'</span>';
				?>
			    <br /><textarea name="contactnojs[message]"  id="contactNoJsMessage" rows="5" cols="40" required></textarea></p>
			    <p><input type="hidden" name="contactnosjs[token]"  value="<?php echo $token;?>" /></p>
			    <p><input type="submit" id="contactNoJsValid" name="contactnojs[valid]" value="Envoyer" /></p>
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
    <?php $_SESSION['contactnojs']['erreur'] = $_SESSION['contactnojs']['info'] = array();?>
    </body>
</html>