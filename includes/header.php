<div id="c_header">
	<h1 id="logo"><a href="<?php echo ROOT;?>index.php" title="Retour à l'accueil"><img src="<?php echo ROOT;?>images/logo-kryzalead.png" alt="Kryzalead agence web" width="400" /><span class="accroche">Agence web - Création de sites internet</span></a></h1>
		<nav role="navigation">
			<a href="<?php echo ROOT;?>index.php">Accueil</a>
			<a href="<?php echo ROOT;?>agence.html">L'agence</a>
			<a href="#">Réalisations</a>
			<a href="#">Les Packs</a>
			<a href="#">Devis gratuit</a>
			<a href="#" class="popinContact">Contact</a>
	<!--	<a href="#">Le Blog</a>-->
		</nav>
	
	<!--contact form-->
	
<div id="contact">
	<div id="close">Fermer</div>

	<h2 id="contact_header">Un projet, un commentaire ?</h2>
		<p class="success">Merci, votre message a bien été envoyé</p>

  <form action="traitement.php" method="post" name="contactForm" id="contactForm">
	<p><label for="nom" id="l_nom">Votre nom : </label><span class="error">Invalid username entered!</span><br /><input name="nom" id="nom" type="text" size="30" required /></p>
	<p><label for="email" id="l_email">Votre email : </label><span class="error">Invalid email entered!</span><br /><input name="email" id="email" type="email" size="30" required /></p>
	<p><label for="message" id="l_message">Votre message : </label><span class="error">Invalid message entered!</span><br /><textarea name="message" id="message" rows="5" cols="40" required></textarea></p>
	<p><input type="submit" id="submit" name="submit" value="Envoyer" /></p>
 </form>
</div>
<!--end contact form-->

</div><div id="mask"></div>