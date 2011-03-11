<div id="c_header">
	<h1 id="logo"><a href="<?php echo ROOT;?>index.php" title="Retour à l'accueil"><img src="<?php echo ROOT;?>images/logo-kryzalead.png" alt="Kryzalead agence web" width="400" /><span class="accroche">Agence web - Création de sites internet</span></a></h1>
		<nav role="navigation">
			<a href="<?php echo ROOT;?>index.php">Accueil</a>
			<a href="<?php echo ROOT;?>agence.html">L'agence</a>
			<a href="#">Réalisations</a>
			<a href="#">Les Packs</a>
			<a href="#">Devis gratuit</a>
	<!--	<a href="#">Le Blog</a>-->
			<a href="#" id="contact">Contact</a>
		</nav>
		
		<div id="formContainer">
				
			
			<div id="formContact">
					<form method="post" action="traitement.php">
						<p>Talk to me about anything. If you&rsquo;d like to work with me, or <br />
							  even if you just need a hug, I&rsquo;ll get back to you shortly.</p>
							  <p>
								<label for="name">Name</label>
								<span class="name-missing">Please enter your name</span><br />
								<input type="text" value="" id="name" name="name" />
							  </p>
							  <p>
								<label for="e-mail">E-mail</label>
								<span class="email-missing">Please enter a valid e-mail</span><br />
								<input type="text" value="" id="e-mail" name="email" />
							  </p>
							  <p>
								<label for="message">Message</label>
								<span class="message-missing">Say something!</span><br />
								<textarea cols="" rows="" id="message" name="message"></textarea>
							  </p>
							  <p>
								<input type="submit" name="valid" id="valid" value="envoyer"></input>	
							  </p>
					</form>
				</div>	
		</div>
</div>