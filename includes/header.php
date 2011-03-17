<div id="c_header">
	<h1 id="logo"><a href="<?php echo ROOT;?>index.php" title="Retour à l'accueil"><img src="<?php echo ROOT;?>images/logo-kryzalead.png" alt="Kryzalead agence web" title="Retour Accueil - Agence web Kryzalead" width="450" /><span class="accroche">Agence web - Création de sites internet</span></a></h1>
		<nav role="navigation">
			<a href="<?php echo ROOT;?>index.php">Accueil</a>
			<a href="<?php echo ROOT;?>agence.html">L'agence</a>
			<a href="#">Réalisations</a>
			<a href="#">Les Packs</a>
			<a href="#">Devis gratuit</a>
			<a href="<?php echo ROOT;?>contact/" class="popinContact">Contact</a>
	<!--	<a href="#">Le Blog</a>-->
		</nav>
		<img src="<?php echo ROOT;?>images/suivez-nous.png" alt="Kryzalead agence web - Suivez-nous - Contact" width="300" class="suivez-nous"/>
</div>

<div id="contact"><!--contact form-->
	<div id="close"><a>Fermer</a></div>

	<h2 id="contact_header">Un projet ? un commentaire ?</h2>
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
