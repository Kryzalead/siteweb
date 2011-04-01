<div id="mask"></div>
<div class="c_header">
	<h1><a href="<?php echo ROOT;?>index.php" title="Retour à l'accueil" class="logo"><span class="accroche">Agence web - Création de sites internet</span></a></h1>
		<nav role="navigation">
			<a href="<?php echo ROOT;?>index.php">Accueil</a>
			<a href="<?php echo ROOT;?>agence.php">L'agence</a>
			<!--<a href="#">Réalisations</a>-->
			<a href="#">Les Packs</a>
			<a href="<?php echo ROOT;?>devis/index.php">Devis gratuit</a>
			<a href="<?php echo ROOT;?>contact/index.php" class="popinContact">Contact</a>
		</nav>
			<div id="suivezNous"></div>
</div>
<div id="contact"><!--contact form-->
	<div id="close"><a>Fermer</a></div>
	<h2><span id="imgSymbole"></span>Un commentaire ?</h2>
		<div id="img-form"></div>
			<p class="success">Merci, votre message a bien été envoyé!</p>
			<p class="error">Une erreur est survenue lors de l'envois du message</p>
			<form action="traitement.php" method="post" name="contactForm" id="contactForm">
				<p><label for="nom" id="l_nom">Votre nom : </label><span class="inputError">Nom d'utilisateur incorrect!</span><br /><input name="nom" id="nom" type="text" size="30" required /></p>
				<p><label for="email" id="l_email">Votre email : </label><span class="inputError">Email incorrect!</span><br /><input name="email" id="email" type="email" size="30" required /></p>
				<p><label for="message" id="l_message">Votre message : </label><span class="inputError">Message incorrect!</span><br /><textarea name="message" id="message" rows="5" cols="40" required></textarea></p>
				<p><input type="hidden" name="token" id="token" value="<?php echo $token;?>" /></p>
				<p><input type="submit" id="contactValid" name="valid" value="Envoyer" /></p>
			</form>
</div><!--end contact form-->
