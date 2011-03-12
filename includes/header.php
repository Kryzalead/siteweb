<div id="c_header">
	<h1 id="logo"><a href="<?php echo ROOT;?>index.php" title="Retour à l'accueil"><img src="<?php echo ROOT;?>images/logo-kryzalead.png" alt="Kryzalead agence web" width="400" /><span class="accroche">Agence web - Création de sites internet</span></a></h1>
		<nav role="navigation">
			<a href="<?php echo ROOT;?>index.php">Accueil</a>
			<a href="<?php echo ROOT;?>agence.html">L'agence</a>
			<a href="#">Réalisations</a>
			<a href="#">Les Packs</a>
			<a href="#">Devis gratuit</a>
	<!--	<a href="#">Le Blog</a>-->
			<a href="contact.html" id="contact" class="linkContact">Contact</a>
		</nav>
		
		<div id="formContainer">

			<div id="formContact">
				<h1>Un projet? Un commentaire?</h1>
					<form action="traitement.php" method="post">
						<fieldset>
							<legend>Vos coordonnées</legend>
								<ul>
									<li>
										<label for="nom">Nom</label>
										<br />
										<input id="nom" name="nom" type="text" placeholder="Votre nom" required autofocus />
									</li>
									<li>
										<label for="email">Email</label>
										<br />
										<input id="email" name="email" type="email" placeholder="example@domain.fr" required />
									</li>
								</ul>
						</fieldset>
							
						<fieldset>
							<legend>Votre message:</legend>
							<textarea name="message" id="message" placeholder="Tapez votre message"></textarea>
						</fieldset>

						<fieldset>
							<button type="submit" name="valid">Envoyer</button>
						</fieldset>
					</form>
				</div>	
		</div>
			<div id="backgroundPopup">&nbsp;</div>
</div>