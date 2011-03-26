<?php
	session_start();
	require('../fonctions/config.php');
	$civilite = !empty($_SESSION['devis']['post']['civilite']) ? htmlspecialchars($_SESSION['devis']['post']['civilite']) : '';
	$statut = !empty($_SESSION['devis']['post']['statut']) ? htmlspecialchars($_SESSION['devis']['post']['statut']) : '';
	$nom = !empty($_SESSION['devis']['post']['nom']) ? htmlspecialchars($_SESSION['devis']['post']['nom']) : '';
	$prenom = !empty($_SESSION['devis']['post']['prenom']) ? htmlspecialchars($_SESSION['devis']['post']['prenom']) : '';
	$email = !empty($_SESSION['devis']['post']['email']) ? htmlspecialchars($_SESSION['devis']['post']['email']) : '';
	$tel = !empty($_SESSION['devis']['post']['tel']) ? htmlspecialchars($_SESSION['devis']['post']['tel']) : '';
	$desc = !empty($_SESSION['devis']['post']['desc']) ? htmlspecialchars($_SESSION['devis']['post']['desc']) : '';
	$type = !empty($_SESSION['devis']['post']['type']) ? htmlspecialchars($_SESSION['devis']['post']['type']) : '';
	$nbrePage = !empty($_SESSION['devis']['post']['nbrePage']) ? intval($_SESSION['devis']['post']['nbrePage']) : '';
	$optAdmin = !empty($_SESSION['devis']['post']['optAdmin']) ? htmlspecialchars($_SESSION['devis']['post']['optAdmin']) : '';
	$optContact = !empty($_SESSION['devis']['post']['optContact']) ? htmlspecialchars($_SESSION['devis']['post']['optContact']) : '';
	$optNewsletter = !empty($_SESSION['devis']['post']['optNewsletter']) ? htmlspecialchars($_SESSION['devis']['post']['optNewsletter']) : '';
	$optGalerie = !empty($_SESSION['devis']['post']['optGalerie']) ? htmlspecialchars($_SESSION['devis']['post']['optGalerie']) : '';
	$optBoutique = !empty($_SESSION['devis']['post']['optBoutique']) ? htmlspecialchars($_SESSION['devis']['post']['optBoutique']) : '';
	$optForum = !empty($_SESSION['devis']['post']['optForum']) ? htmlspecialchars($_SESSION['devis']['post']['optForum']) : '';
	$optStats = !empty($_SESSION['devis']['post']['optStats']) ? htmlspecialchars($_SESSION['devis']['post']['optStats']) : '';
	$maintenance = !empty($_SESSION['devis']['post']['maintenance']) ? htmlspecialchars($_SESSION['devis']['post']['maintenance']) : '';
	$start = !empty($_SESSION['devis']['post']['start']) ? intval($_SESSION['devis']['post']['start']) : '';
	$budget = !empty($_SESSION['devis']['post']['budget']) ? htmlspecialchars($_SESSION['devis']['post']['budget']) : '';
	$design = !empty($_SESSION['devis']['post']['design']) ? htmlspecialchars($_SESSION['devis']['post']['design']) : '';
	$logo = !empty($_SESSION['devis']['post']['logo']) ? htmlspecialchars($_SESSION['devis']['post']['logo']) : '';
	$contenu = !empty($_SESSION['devis']['post']['contenu']) ? htmlspecialchars($_SESSION['devis']['post']['contenu']) : '';
	$img = !empty($_SESSION['devis']['post']['img']) ? htmlspecialchars($_SESSION['devis']['post']['img']) : '';
?>

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
		
		<section id="form_devis">
			<h2 class="animer"><a>Faites gratuitement votre devis en ligne</a></h2>
			<p>
				Obtenez le meilleur prix avec <strong>Kryzalead</strong>, remplissez le formulaire ci-dessous, et recevez votre devis en 24h. Le devis est gratuit, et sans obligation. Vérifiez bien votre adresse e-mail, afin de s’assurer qu’elle soit correcte. Si elle ne l’est pas, nous ne pourrons pas vous contacter.
			</p>
				<form method="post" action="test.php" id="formSteps">
                <fieldset>
                    <legend>Vos coordonnées</legend>
                        <p>
                            <span class="descInput">Votre civilité<span class="asterisk">*</span>:</span>
                            <label for="mlle" id="l_mlle">Mlle</label><input type="radio" name="devis[civilite]" value="Mlle" id="mlle" <?php if($civilite == 'Mlle') echo 'checked="checked"';?>/>
                            <label for="mme" id="l_mme">Mme</label><input type="radio" name="devis[civilite]" value="Mme" id="mme" <?php if($civilite == 'Mme') echo 'checked="checked"';?>/>
                            <label for="mr" id="l_mr">Mr</label><input type="radio" name="devis[civilite]" value="Mr" id="mr" <?php if($civilite == 'Mr') echo 'checked="checked"';?>/>
							<?php
							if(!empty($_SESSION['devis']['erreur']['civilite']))
								echo '<span class="devisMsgErreur">'.$_SESSION['devis']['erreur']['civilite'].'</span>';
							?>
						</p>
                        <p>
                            <span class="descInput">Votre statut<span class="asterisk">*</span>:</span> 
                            <label for="particulier" id="l_particulier">Particulier</label><input type="radio" name="devis[statut]" value="Particulier" id="particulier" <?php if($statut == 'Particulier') echo 'checked="checked"';?>/>
                            <label for="professionnel" id="l_professionnel">Professionnel</label><input type="radio" name="devis[statut]" value="Professionnel" id="professionnel" <?php if($statut == 'Professionnel') echo 'checked="checked"';?>/>
							<?php
							if(!empty($_SESSION['devis']['erreur']['statut']))
								echo '<span class="devisMsgErreur">'.$_SESSION['devis']['erreur']['statut'].'</span>';
							?>
						</p>
                        <p>
                            <label for="nom" id="l_nom" class="descInput">Votre nom<span class="asterisk">*</span>:</label>
							<input type="text" name="devis[nom]" id="devisNom" value="<?php echo $nom;?>"/>
							<?php
							if(!empty($_SESSION['devis']['erreur']['nom']))
								echo '<span class="devisMsgErreur">'.$_SESSION['devis']['erreur']['nom'].'</span>';
							?>
						</p>
                        <p>
                            <label for="prenom" id="l_prenom" class="descInput">Votre prénom<span class="asterisk">*</span>:</label>
                            <input type="text" name="devis[prenom]" id="devisPrenom" value="<?php echo $prenom;?>"/>
							<?php
							if(!empty($_SESSION['devis']['erreur']['prenom']))
								echo '<span class="devisMsgErreur">'.$_SESSION['devis']['erreur']['prenom'].'</span>';
							?>
                        </p>
                        <p>
                            <label for="email" id="l_email" class="descInput">Votre e-mail<span class="asterisk">*</span>:</label>
							<input type="text" name="devis[email]" id="devisEmail" value="<?php echo $email;?>" />
							<?php
							if(!empty($_SESSION['devis']['erreur']['email']))
								echo '<span class="devisMsgErreur">'.$_SESSION['devis']['erreur']['email'].'</span>';
							?>
						</p>
                        <p>
                            <label for="tel" id="l_tel" class="descInput">Votre téléphone :</label>
                            <input type="text" name="devis[tel]" id="tel" value="<?php echo $tel;?>" />
							<?php
							if(!empty($_SESSION['devis']['erreur']['tel']))
								echo '<span class="devisMsgErreur">'.$_SESSION['devis']['erreur']['tel'].'</span>';
							?>
                        </p>
                        <p>
                            <label for="desc" id="l_desc" class="descInput">Description de votre activité :</label>
                            <textarea id="desc" name="devis[desc]" cols="25" rows="5"><?php echo $desc;?></textarea>
							<?php
							if(!empty($_SESSION['devis']['erreur']['desc']))
								echo '<span class="devisMsgErreur">'.$_SESSION['devis']['erreur']['desc'].'</span>';
							?>
                        </p>
						<p>
							<span class="asterisk">*</span>: <span class="little">Les champs doivent être remplis</span>
						</p>
                </fieldset>
                <fieldset>
                    <legend>Votre site</legend>
                        <p class="inputRadio">
                            <div id="floatLeft">
                                <span class="descInput">Type de votre site<span class="asterisk">*</span>:</span><br />
								

								<input class="typeSite" type="radio" name="devis[type]" value="typeVitrine" id="typeVitrine" <?php if($type == 'typeVitrine') echo 'checked="checked"';?>/>
                                <span id="desctypeVitrine">Pour présenter votre entreprise, son activité, ses produits et services afin de renforcer son image ou de la developper</span>
                                <label for="typeVitrine" id="l_typeVitrine">Site Vitrine : </label><br />
								
                                <input class="typeSite" type="radio" name="devis[type]" value="typePro" id="typePro" <?php if($type == 'typePro') echo 'checked="checked"';?>/>
                                <span id="desctypePro">Pour un site dynamique avec une interface d'administration, pour gérer facilement votre site</span>
                                <label for="typePro" id="l_typePro">Site Professionnel : </label><br />
								
                                <input class="typeSite" type="radio" name="devis[type]" value="typeCommerce" id="typeCommerce" <?php if($type == 'typeCommerce') echo 'checked="checked"';?>/>
                                <span id="desctypeCommerce">Pour un site de de catalogue d'achat, commandes, livraisons, paiements via votre site</span>
                                <label for="typeCommerce" id="l_typeCommerce">Site E-commerce : </label><br />
                            </div>
                            <div id="descType">
                                <p>
                                    Choisissez un type de site pour avoir des informations
                                </p>
                            </div>
							<?php
							if(!empty($_SESSION['devis']['erreur']['type']))
								echo '<span class="devisMsgErreur">'.$_SESSION['devis']['erreur']['type'].'</span>';
							?>
                        </p>
                        <div class="clear"></div>
                        <p>
                            <label for="nbrePage" id="l_nbrePage" class="descInput">Nombre de page<span class="asterisk">*</span>:</label>
                            <select name="devis[nbrePage]" id="nbrePage">
                                <option value="0">- - Choisir - -</option>
                                <option value="1" <?php if($nbrePage == '1') echo 'selected="selected"';?>>Inférieur à 5 pages</option>
                                <option value="2" <?php if($nbrePage == '2') echo 'selected="selected"';?>>Entre 5 à 10 pages</option>
                                <option value="3" <?php if($nbrePage == '3') echo 'selected="selected"';?>>Plus de 10 pages</option>
                                <option value="4" <?php if($nbrePage == '4') echo 'selected="selected"';?>>Je ne sais pas</option>
                            </select>
							<?php
							if(!empty($_SESSION['devis']['erreur']['nbrePage']))
								echo '<span class="devisMsgErreur">'.$_SESSION['devis']['erreur']['nbrePage'].'</span>';
							?>
                        </p>
                        <p>
                            Options principales souhaitées :<br />
                            <div class="infobulle">
                                <input type="checkbox" name="devis[optAdmin]" id="optAdmin" <?php if($optAdmin == 'on') echo 'checked="checked"';?>/><label for="optAdmin" id="optAdmin">Site administrable<span>Modifier vous mêmes vos pages via une administration</span></label>   
                            </div>
                            <div class="infobulle">  
                                <input type="checkbox" name="devis[optContact]" id="optContact" <?php if($optContact == 'on') echo 'checked="checked"';?>/><label for="optContact" id="optContact">Formulaire de contact<span>Permettez à vos visiteurs de vous contacter</span></label>
                            </div>    
                            <div class="infobulle">      
                                <input type="checkbox" name="devis[optNewsletter]" id="optNewsletter" <?php if($optNewsletter == 'on') echo 'checked="checked"';?>/><label for="optNewsletter" id="optNewsletter">Newsletter<span>Prévenez vos visiteurs des dernières nouveautés de votre site</span></label>
                            </div>
                            <div class="infobulle">      
                                <input type="checkbox" name="devis[optGalerie]" id="optGalerie" <?php if($optGalerie == 'on') echo 'checked="checked"';?>/><label for="optGalerie" id="optgalerie">Galerie photo/produits<span>Présentez vos produits en ligne</span></label>
                            </div>    
                            <div class="infobulle">      
                                <input type="checkbox" name="devis[optBoutique]" id="optBoutique" <?php if($optBoutique == 'on') echo 'checked="checked"';?>/><label for="optBoutique" id="optBoutique">Boutique en ligne<span>Vendez vos produits en ligne</span></label>
                            </div>    
                            <div class="infobulle">      
                                <input type="checkbox" name="devis[optForum]" id="optForum" <?php if($optForum == 'on') echo 'checked="checked"';?>/><label for="optForum" id="optForum">Forum de discussions<span>Discutez avec vos visiteurs</span></label>
                            </div>    
                            <div class="infobulle">      
                                <input type="checkbox" name="devis[optStats]" id="optStats" <?php if($optStats == 'on') echo 'checked="checked"';?>/><label for="optStats" id="optStats">Statistiques<span>Connaître les statistiques de votre site (nombre de visites)</span></label>
                            </div>
                            <div class="clear"></div>
                        </p>
                        <p style="margin-top:20px;">
                            <label for="maintenance" id="l_maintenance" class="descInput">Désirez vous nous confier<br />la maintenance de votre site<span class="asterisk">*</span>:</label>
                            <select name="devis[maintenance]" id="maintenance">
                                <option value="0">- - Choisir - -</option>
                                <option value="1" <?php if($maintenance == 'oui') echo 'selected="selected"';?>>Oui</option>
                                <option value="2" <?php if($maintenance == 'non') echo 'selected="selected"';?>>Non</option>
                            </select>
							<?php
							if(!empty($_SESSION['devis']['erreur']['maintenance']))
								echo '<span class="devisMsgErreur">'.$_SESSION['devis']['erreur']['maintenance'].'</span>';
							?>
                        </p>
                        <p style="margin-top:20px;">
                            <label for="start" id="l_start" class="descInput">Démarrage de votre site :</label>
                            <select name="devis[start]" id="start">
                                <option value="0">- - Choisir --</option>
                                <option value="1" <?php if($start == '1') echo 'selected="selected"';?>>Moins de 3 mois</option>
                                <option value="2" <?php if($start == '2') echo 'selected="selected"';?>>Entre 3 et 6 mois</option>
                                <option value="3" <?php if($start == '3') echo 'selected="selected"';?>>Plus de 6 mois</option>
                            </select>
                        </p>
                        <p>
                            <label for="budget" id="l_budget" class="descInput">Votre budget :</label>
                            <input type="text" name="devis[budget]" id="budget" value="<?php echo $budget;?>"/> euros
							<?php
							if(!empty($_SESSION['devis']['erreur']['budget']))
								echo '<span class="devisMsgErreur">'.$_SESSION['devis']['erreur']['budget'].'</span>';
							?>
                        </p>
                </fieldset>
                <fieldset>
                    <legend>Son contenu</legend>
                    <p>
                       	Informations complémentaires pour votre futur site internet.
                    </p>
                    <p class="inputRadio">
                        Design :<br />
						<input type="radio" name="devis[design]" value="non" id="noDesign" <?php if($design == 'non') echo 'checked="checked"';?> /><label for="noDesign" id="l_noDesign">Je vous confie la création du design</label><br />
						<input type="radio" name="devis[design]" value="oui" id="design" <?php if($design == 'oui') echo 'checked="checked"';?>><label for="design" id="l_design">Je vous fournirai le design </label><span class="legend">*</span><br />
					</p>
                    <p class="inputRadio">
                        Logo :<br />
						<input type="radio" name="devis[logo]" value="need" id="needLogo" <?php if($logo == 'need') echo 'checked="checked"';?> /><label for="needLogo" id="l_needLogo">Je vous confie la création du logo</label><br />
                        <input type="radio" name="devis[logo]" value="oui" id="logo" <?php if($logo == 'oui') echo 'checked="checked"';?> /><label for="logo" id="l_logo" >Je vous fournirai le logo </label><span class="legend">*</span><br />
						<input type="radio" name="devis[logo]" value="non" id="noLogo" <?php if($logo == 'non') echo 'checked="checked"';?> /><label for="noLogo" id="l_noLogo">Je n'ai pas besoin de logo</label><br />
                    </p>
                    <p class="inputRadio">
                        Contenu (textes) :<br />
                        <input type="radio" name="devis[contenu]" value="non" id="noContenu" <?php if($contenu == 'non') echo 'checked="checked"';?> /><label for="noContenu" id="l_noContenu">Je vous confie la création du contenu</label><br />                       
					   <input type="radio" name="devis[contenu]" value="oui" id="contenu" <?php if($contenu == 'oui') echo 'checked="checked"';?> /><label for="contenu" id="l_contenu">Je fournai le contenu du site </label><span class="legend">*</span><br />
                    </p>
                    <p class="inputRadio">
                        Images :<br />
						<input type="radio" name="devis[img]" value="need" id="needImage" <?php if($img == 'need') echo 'checked="checked"';?> /><label for="needImage" id="l_needImage">Je vous confie la création des images</label><br />
                        <input type="radio" name="devis[img]" value="oui" id="image" <?php if($img == 'oui') echo 'checked="checked"';?> /><label for="image" id="l_image">Je vous fournirai les images</label><span class="legend">*</span><br />
						<input type="radio" name="devis[img]" value="non" id="noImage" <?php if($img == 'non') echo 'checked="checked"';?> /><label for="noImage" id="l_noImage">Je n'ai pas besoin d'images</label><br />
					  <p style="padding-top:20px;">
							<span class="legend">*</span> : <span class="little">Le(s) fichier(s) Photoshop .PSD, Fireworks .PNG, Illustrator .AI, texte(s) .TXT .RTF .DOC sera(ont) demandé(s) lors de notre entretien.</span>
						</p>
						<input type="submit" name="devis[valid]" id="valid" value="Envoyer" />
                    </p>
                </fieldset> 
            </form>
        </div><!-- Fin content -->
	</section>
	<section class="actu">
		<?php include('../includes/blog_actu.php');?>
	</section>
	<footer role="contentinfo">
		<?php include('../includes/footer.php');?>
	</footer>
	
	</div> <!-- FIN WRAPPER -->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo ROOT;?>scripts/formContact.js"></script>
    <script type="text/javascript" src="<?php echo ROOT;?>scripts/formSteps.js"></script>
    <script type="text/javascript">
            $(function(){
                
                // appel au plugin formSteps
                $('#formSteps').formSteps();
                
				$('#desctypePro').hide();
				$('#desctypeVitrine').hide();
				$('#desctypeCommerce').hide();
				// Effet pour le choix du type de site
                $('.typeSite').click(function(){
                    var idType = $(this).attr('id');
                    $('#descType p').empty();
                    $('#descType p').append($('#desc'+idType).text());
                });
                
                // Effet pour les hover sur les checkbox
                $('.infobulle label').hover(function(){
                    $(this).children('span').show();
                },
                function(){
                    $(this).children('span').hide();
                });
            })
        </script>
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
	<?php
	$_SESSION['devis']['post'] = $_SESSION['devis']['erreur'] = array();
	?>
    </body>
</html>