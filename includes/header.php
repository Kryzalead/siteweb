<div id="c_header">
	<h1 id="logo"><a href="<?php echo ROOT;?>index.php" title="Retour à l'accueil"><img src="<?php echo ROOT;?>images/logo-kryzalead.png" alt="Kryzalead agence web" width="400" /><span class="accroche">Agence web - Création de sites internet</span></a></h1>
		<nav role="navigation">
			<a href="<?php echo ROOT;?>index.php">Accueil</a>
			<a href="<?php echo ROOT;?>agence.html">L'agence</a>
			<a href="#">Réalisations</a>
			<a href="#">Les Packs</a>
			<a href="#">Devis gratuit</a>
			<a href="#" class="modal">Contact</a>
	<!--	<a href="#">Le Blog</a>-->
		</nav>
		<!--contact form-->

<div id="contact">
	<div id="close">Close</div>

	<div id="contact_header">Contact</div>
	<p class="success">Thanks! Your message has been sent.</p>

  <form action="send.php" method="post" name="contactForm" id="contactForm">
  <p><input name="name" id="name" type="text" size="30" value="Your Name" /></p>
  <p><input name="email" id="email" type="text" size="30" value="Your Email Address" /></p>
  <p><textarea name="comment" id="comment" rows="5" cols="40">Enter your comment or query...</textarea></p>
  <p><input type="submit" id="submit" name="submit" value="Send" /></p>
 </form>
</div>



<!--end contact form-->

</div><div id="mask"></div>