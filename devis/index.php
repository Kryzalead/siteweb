<?php
session_start();
require('../fonctions/config.php');
$civilite = !empty($_SESSION['post']['civilite']) ? htmlspecialchars($_SESSION['post']['civilite']) : '';
$statut = !empty($_SESSION['post']['statut']) ? htmlspecialchars($_SESSION['post']['statut']) : '';
$nom = !empty($_SESSION['post']['nom']) ? htmlspecialchars($_SESSION['post']['nom']) : '';
$prenom = !empty($_SESSION['post']['prenom']) ? htmlspecialchars($_SESSION['post']['prenom']) : '';
$email = !empty($_SESSION['post']['email']) ? htmlspecialchars($_SESSION['post']['email']) : '';
$tel = !empty($_SESSION['post']['tel']) ? htmlspecialchars($_SESSION['post']['tel']) : '';
$desc = !empty($_SESSION['post']['desc']) ? htmlspecialchars($_SESSION['post']['desc']) : '';
$contact = !empty($_SESSION['post']['contact']) ? htmlspecialchars($_SESSION['post']['contact']) : '';
$type = !empty($_SESSION['post']['type']) ? htmlspecialchars($_SESSION['post']['type']) : '';
$nbrePage = !empty($_SESSION['post']['nbrePage']) ? intval($_SESSION['post']['nbrePage']) : '';
$optAdmin = !empty($_SESSION['post']['optAdmin']) ? htmlspecialchars($_SESSION['post']['optAdmin']) : '';
$optReserve = !empty($_SESSION['post']['optReserve']) ? htmlspecialchars($_SESSION['post']['optReserve']) : '';
$optContact = !empty($_SESSION['post']['optContact']) ? htmlspecialchars($_SESSION['post']['optContact']) : '';
$optNewsletter = !empty($_SESSION['post']['optNewsletter']) ? htmlspecialchars($_SESSION['post']['optNewsletter']) : '';
$optGalerie = !empty($_SESSION['post']['optGalerie']) ? htmlspecialchars($_SESSION['post']['optGalerie']) : '';
$optBoutique = !empty($_SESSION['post']['optBoutique']) ? htmlspecialchars($_SESSION['post']['optBoutique']) : '';
$optForum = !empty($_SESSION['post']['optForum']) ? htmlspecialchars($_SESSION['post']['optForum']) : '';
$optStats = !empty($_SESSION['post']['optStats']) ? htmlspecialchars($_SESSION['post']['optStats']) : '';
$maintenance = !empty($_SESSION['post']['maintenance']) ? htmlspecialchars($_SESSION['post']['maintenance']) : '';
$start = !empty($_SESSION['post']['start']) ? intval($_SESSION['post']['start']) : '';
$budget = !empty($_SESSION['post']['budget']) ? htmlspecialchars($_SESSION['post']['budget']) : '';
$design = !empty($_SESSION['post']['design']) ? htmlspecialchars($_SESSION['post']['design']) : '';
$logo = !empty($_SESSION['post']['logo']) ? htmlspecialchars($_SESSION['post']['logo']) : '';
$flash = !empty($_SESSION['post']['flash']) ? htmlspecialchars($_SESSION['post']['flash']) : '';
$contenu = !empty($_SESSION['post']['contenu']) ? htmlspecialchars($_SESSION['post']['contenu']) : '';
$img = !empty($_SESSION['post']['img']) ? htmlspecialchars($_SESSION['post']['img']) : '';
?>

<!DOCTYPE html>
<html lang="fr"> 
 
<head> 
    <?php include('../includes/head.php');?>
    <style type="text/css" media="all">
		section#form_devis {clear:both;}
		section#form_devis h2 a {font:normal 2em 'oO';padding:40px 0px 15px;display:block;}
		section#form_devis p {color:#777;text-align:justify;width:700px;}
			 
		.descInput{display: block;width: 250px;float: left}
        .inputRadio input{margin-left: 30px;margin-top:5px;}
        .infobulle{margin-left: 60px;float: left;width: 200px;margin-top: 10px;position: relative}
        .infobulle label span{width: 200px;position: absolute;padding: 5px;display: none;top:20px;left:40px;background:#eee;border:1px solid #999;padding:3px;font-size:0.9em;z-index: 10}
        input[type="text"],select,textarea{width: 250px}
		input[type="radio"]{margin-right: 5px;}
        input[type="checkbox"]{margin-right: 5px}
        
        input,textarea{border-color:#7C7C7C #CECECE #CECECE #7C7C7C;border-right:1px solid #CECECE;border-style:solid;border-width:1px;padding: 2px;-moz-border-radius: 5px;}
        select{border-color:#7C7C7C #CECECE #CECECE #7C7C7C;border-right:1px solid #CECECE;border-style:solid;border-width:1px;padding: 2px;}
        input:hover,textarea:hover{background-color: #eee}
        
        #floatLeft{float: left;margin-left: 30px;}
        #floatLeft input{margin-top: 5px;margin-left: 30px}
        #descType{width: 400px;height: 70px;border: 1px dashed #690;margin: 0 0 30px 280px;padding: 5px}
        #descType p{margin: 0}
        
        .clear{clear: both}
        
        /* Style de la liste des étapes*/
        #steps {list-style:none; width:100%; overflow:hidden; margin:0px; padding:0px;}
        #steps li {font-size:24px; float:left; padding:10px; color:#b0b1b3;}
        #steps li span {font-size:11px; display:block;}
        #steps li.current { color:#000;}
        
        /* Style des boutons précédent et suivant*/
        .prev, .next {padding:5px 10px; color:#690; text-decoration:underline;font:bold 1.5em 'oO'}
        .prev:hover, .next:hover {text-decoration:underline;color:#670;letter-spacing:1px;}
        .prev {float:left;}
        .next {float:right;}
		
		/* Style FORM */
		#formDevis {color:#777}
		#formDevis legend {font-size:1.3em;padding:20px 0;text-decoration:underline;color:#690}
    </style>
</head>
 
<body>
	<?php include('../includes/message-ie.html');?>
	<!--[if lte IE 6]><style type="text/css">img, div { behavior: url(scripts/iepngfix.htc) }</style><![endif]--> 

	<div id="wrapper"> <!-- DEBUT WRAPPER -->

		<header role="banner">
			<?php include('../includes/header.php');?>
		</header>
		
		<div id="content"><!-- Debut content -->
		
		<section id="form_devis">
			<h2 class="animer"><a>Faites gratuitement votre devis en ligne</a></h2>
			<p>
				Obtenez le meilleur prix avec <strong>Kryzalead</strong>, remplissez le formulaire ci-dessous, et recevez votre devis en 24h. Le devis est gratuit, et sans obligation. Vérifiez bien votre adresse e-mail, afin de s’assurer qu’elle soit correcte. Si elle ne l’est pas, nous ne pourrons pas vous contacter.
			</p>

            <div id="formDevis">
				<form method="post" action="traitement.php" id="formSteps">
                <fieldset>
                    <legend>Vos coordonnées</legend>
                        <p>
                            <span class="descInput">Votre civilité* :</span>
                            <label for="mlle" id="l_mlle">Mlle</label><input type="radio" name="civilite" value="Mlle" id="mlle" <?php if($civilite == 'Mlle') echo 'checked="checked"';?>/>
                            <label for="mme" id="l_mme">Mme</label><input type="radio" name="civilite" value="Mme" id="mme" <?php if($civilite == 'Mme') echo 'checked="checked"';?>/>
                            <label for="mr" id="l_mr">Mr</label><input type="radio" name="civilite" value="Mr" id="mr" <?php if($civilite == 'Mr') echo 'checked="checked"';?>/>
                        </p>
                        <p>
                            <span class="descInput">Votre statut* :</span> 
                            <label for="particulier" id="l_particulier">Particulier</label><input type="radio" name="statut" value="Particulier" id="particulier" <?php if($statut == 'Particulier') echo 'checked="checked"';?>/>
                            <label for="professionnel" id="l_professionnel">Professionnel</label><input type="radio" name="statut" value="Professionnel" id="professionnel" <?php if($statut == 'Professionnel') echo 'checked="checked"';?>/>
                        </p>
                        <p>
                            <label for="nom" id="l_nom" class="descInput">Votre nom* :</label>
                            <input type="text" name="nom" id="nom" value="<?php echo $nom;?>"/>
                        </p>
                        <p>
                            <label for="prenom" id="l_prenom" class="descInput">Votre prénom* :</label>
                            <input type="text" name="prenom" id="prenom" value="<?php echo $prenom;?>"/>
                        </p>
                        <p>
                            <span class="descInput">Vous souhaitez être contacté par* :</span>
                            <label for="contactMail" id="l_contactMail">E-mail</label><input type="radio" name="contact" value="email" id="contactMail" class="contact" <?php if($contact == 'email') echo 'checked="checked"';?>/>
                            <label for="contactTel" id="l_contactTel">Téléphone</label><input type="radio" name="contact" value="tel" id="contactTel" class="contact" <?php if($contact == 'tel') echo 'checked="checked"';?>/>
                            <label for="contactBoth" id="l_contactBoth">Les deux</label><input type="radio" name="contact" value="both" id="contactBoth" class="contact"<?php if($contact == 'both') echo 'checked="checked"';?>/>
                        </p>
                        <p>
                            <label for="email" id="l_email" class="descInput">Votre e-mail* :</label>
                            <input type="text" name="email" id="email" value="<?php echo $email;?>" />
                        </p>
                        <p>
                            <label for="tel" id="l_tel" class="descInput">Votre téléphone :</label>
                            <input type="text" name="tel" id="tel" value="<?php echo $tel;?>" disabled="disabled" />
                        </p>
                        <p>
                            <label for="desc" id="l_desc" class="descInput">Description de votre activité :</label>
                            <textarea id="desc" name="desc" cols="25" rows="5"><?php echo $desc;?></textarea>
                        </p>
                </fieldset>
                <fieldset>
                    <legend>Votre site</legend>
                        <p class="inputRadio">
                            <div id="floatLeft">
                                <span class="descInput">Type de votre site* :</span><br />
                                <input class="typeSite" type="radio" name="type" value="typePro" id="typePro" <?php if($type == 'typePro') echo 'checked="checked"';?>/>
                                <span id="desctypePro">Pour un site dynamique avec une interface d'administration, pour gérer facilement votre site</span>
                                <label for="typePro" id="l_typePro">Site Professionnel : </label><br />
                                
                                <input class="typeSite" type="radio" name="type" value="typeVitrine" id="typeVitrine" <?php if($type == 'typeVitrine') echo 'checked="checked"';?>/>
                                <span id="desctypeVitrine">Pour présenter votre entreprise, son activité, ses produits et services afin de renforcer son image ou de la developper</span>
                                <label for="typeVitrine" id="l_typeVitrine">Site Vitrine : </label><br />
                                
                                <input class="typeSite" type="radio" name="type" value="typeCommerce" id="typeCommerce" <?php if($type == 'typeCommerce') echo 'checked="checked"';?>/>
                                <span id="desctypeCommerce">Pour un site de de catalogue d'achat, commandes, livraisons, paiements via votre site</span>
                                <label for="typeCommerce" id="l_typeCommerce">Site e-commerce : </label><br />
                            </div>
                            <div id="descType">
                                <p>
                                    Choisissez un type de site pour avoir des informations
                                </p>
                            </div>
                        </p>
                        <div class="clear"></div>
                        <p>
                            <label for="nbrePage" id="l_nbrePage" class="descInput">Nombre de page* :</label>
                            <select name="nbrePage" id="nbrePage">
                                <option value="0">- - Choisir - -</option>
                                <option value="1" <?php if($nbrePage == '1') echo 'selected="selected"';?>>Inférieur à 5 pages</option>
                                <option value="2" <?php if($nbrePage == '2') echo 'selected="selected"';?>>Entre 5 à 10 pages</option>
                                <option value="3" <?php if($nbrePage == '3') echo 'selected="selected"';?>>Plus de 10 pages</option>
                            </select>
                        </p>
                        <p>
                            Options principales souhaitées :<br />
                            <div class="infobulle">
                                <input type="checkbox" name="optAdmin" id="optAdmin" <?php if($optAdmin == 'on') echo 'checked="checked"';?>/><label for="optAdmin" id="optAdmin">Site administrable<span>Modifier vous mêmes vos pages</span></label>   
                            </div>
                            <div class="infobulle">    
                                <input type="checkbox" name="optReserve" id="optReserve" <?php if($optReserve == 'on') echo 'checked="checked"';?>/><label for="optReserve" id="optReserve">Espace réservé<span>Protéger certaines pages par identification</span></label>
                            </div>
                            <div class="infobulle">  
                                <input type="checkbox" name="optContact" id="optContact" <?php if($optContact == 'on') echo 'checked="checked"';?>/><label for="optContact" id="optContact">Formulaire de contact<span>Pour que vos visiteurs puissent vous contacter</span></label>
                            </div>    
                            <div class="infobulle">      
                                <input type="checkbox" name="optNewsletter" id="optNewsletter" <?php if($optNewsletter == 'on') echo 'checked="checked"';?>/><label for="optNewsletter" id="optNewsletter">Newsletter<span>Pour prévenir vos visiteurs des nouveautés de votre site</span></label>
                            </div>
                            <div class="clear"></div>
                            <div class="infobulle">      
                                <input type="checkbox" name="optGalerie" id="optGalerie" <?php if($optGalerie == 'on') echo 'checked="checked"';?>/><label for="optGalerie" id="optgalerie">Galerie photo/produits<span>Pour présenter vos produits en ligne</span></label>
                            </div>    
                            <div class="infobulle">      
                                <input type="checkbox" name="optBoutique" id="optBoutique" <?php if($optBoutique == 'on') echo 'checked="checked"';?>/><label for="optBoutique" id="optBoutique">Boutique en ligne<span>Pour vendre vos produits en ligne</span></label>
                            </div>    
                            <div class="infobulle">      
                                <input type="checkbox" name="optForum" id="optForum" <?php if($optForum == 'on') echo 'checked="checked"';?>/><label for="optForum" id="optForum">Forum de discussions<span>Pour discuter avec vos visiteurs</span></label>
                            </div>    
                            <div class="infobulle">      
                                <input type="checkbox" name="optStats" id="optStats" <?php if($optStats == 'on') echo 'checked="checked"';?>/><label for="optStats" id="optStats">Statistiques<span>Pour connaitre les statistiques de votre site</span></label>
                            </div>
                            <div class="clear"></div>    
                        </p>
                        <p>
                            <label for="maintenance" id="l_maintenance" class="descInput">Désirez vous nous confiez <br />la maintenance de votre site* :</label>
                            <select name="maintenance" id="maintenance">
                                <option value="">- - Choisir - -</option>
                                <option value="oui" <?php if($maintenance == 'oui') echo 'selected="selected"';?>>Oui</option>
                                <option value="non" <?php if($maintenance == 'non') echo 'selected="selected"';?>>Non</option>
                            </select>
                        </p>
                        <br />
                        <p>
                            <label for="start" id="l_start" class="descInput">Démarrage de votre site :</label>
                            <select name="start" id="start">
                                <option value="0">- - Choisir --</option>
                                <option value="1" <?php if($start == '1') echo 'selected="selected"';?>>Moins de 3 mois</option>
                                <option value="2" <?php if($start == '2') echo 'selected="selected"';?>>Entre 3 et 6 mois</option>
                                <option value="3" <?php if($start == '3') echo 'selected="selected"';?>>Plus de 6 mois</option>
                            </select>
                        </p>
                        <p>
                            <label for="budget" id="l_budget" class="descInput">Votre budget :</label>
                            <input type="text" name="budget" id="budget" value="<?php echo $budget;?>"/>
                        </p>
                </fieldset>
                <fieldset>
                    <legend>Son contenu</legend>
                    <p>
                        Cette partie concerne des informations supplémentaires sur votre site<br />
                        Dans le cas, des fichiers fournis, ceux ci vont seront demandés lors de notre entretien
                    </p>
                    <p class="inputRadio">
                        Design :<br />
                        <input type="radio" name="design" value="non" id="noDesign" <?php if($design == 'non') echo 'checked="checked"';?> /><label for="noDesign" id="l_noDesign">Je n'ai pas de design</label><br />
                        <input type="radio" name="design" value="oui" id="design" <?php if($design == 'oui') echo 'checked="checked"';?>><label for="design" id="l_design">Je vous fournirais le design </label>(Un fichier Photoshop PSD ou fireworks PNG vous sera demandé)<br />
                    </p>
                    <p class="inputRadio">
                        Logo :<br />
                        <input type="radio" name="logo" value="non" id="noLogo" <?php if($logo == 'non') echo 'checked="checked"';?> /><label for="noLogo" id="l_noLogo">Je n'ai pas besoin de logo</label><br />
                        <input type="radio" name="logo" value="oui" id="logo" <?php if($logo == 'oui') echo 'checked="checked"';?> /><label for="logo" id="l_logo" >Je vous fournirais le logo </label><br />
                        <input type="radio" name="logo" value="need" id="needLogo" <?php if($logo == 'need') echo 'checked="checked"';?> /><label for="needLogo" id="l_needLogo">J'ai besoin d'un logo</label><br />
                    </p>
                    <p class="inputRadio">
                        Animation flash :<br />
                        <input type="radio" name="flash" value="non" id="noFlash" <?php if($flash == 'non') echo 'checked="checked"';?> /><label for="noFlash" id="l_noFlash">Je n'ai pas besoin d'animation en flash</label><br />
                        <input type="radio" name="flash" value="oui" id="flash" <?php if($flash == 'oui') echo 'checked="checked"';?> /><label for="flash" id="l_flash">J'ai besoin de quelques éléments en flash</label><br />
                    </p>
                    <p class="inputRadio">
                        Contenu :<br />
                        <input type="radio" name="contenu" value="non" id="noContenu" <?php if($contenu == 'non') echo 'checked="checked"';?> /><label for="noContenu" id="l_noContenu">J'ai besoin d'aide pour la création de contenu</label><br />
                        <input type="radio" name="contenu" value="oui" id="contenu" <?php if($contenu == 'oui') echo 'checked="checked"';?> /><label for="contenu" id="l_contenu">Je fournis le contenu de mon site</label><br />
                    </p>
                    <p class="inputRadio">
                        Images :<br />
                        <input type="radio" name="img" value="non" id="noImage" <?php if($img == 'non') echo 'checked="checked"';?> /><label for="noImage" id="l_noImage">Je n'ai pas besoin d'images</label><br />
                        <input type="radio" name="img" value="oui" id="image" <?php if($img == 'oui') echo 'checked="checked"';?> /><label for="image" id="l_image">Je vous fournirais les images</label><br />
                        <input type="radio" name="img" value="need" id="needImage" <?php if($img == 'need') echo 'checked="checked"';?> /><label for="needImage" id="l_needImage">Je vous confie la tâche de trouver des images pour mon site</label><br />
                        <input type="submit" name="valid" id="valid" value="Envoyer" />
                    </p>
                </fieldset> 
            </form>
            </div>
        </div><!-- Fin content -->
	</section>
		
		<section class="actu">
			<?php include('../includes/actu.php');?>
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
                
                // liaison entre les bouton radio et les input pour la partie contact
                $('.contact').click(function(){
                    id = $(this).attr('id');
                    if(id == 'contactMail'){
                        $('#tel').val('').attr('disabled','disabled');
                    }
                    else if(id == 'contactTel'){
                        $('#tel').removeAttr('disabled');
                    }
                    else if(id == 'contactBoth'){
                        $('#tel').removeAttr('disabled');
                    }
                    else alert('erreur');
                });
                
                
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
	$_SESSION['post'] = array();
	?>
    </body>
</html>