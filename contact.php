<?php
$erreur = array();
$regexMail = "#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#";

if(isset($_POST['valid'])){
    
    //traitement champ nom
    if(!empty($_POST['nom']) && strlen(trim($_POST['nom'])) > 0){
        $nom = htmlspecialchars($_POST['nom']);
    }
    else $erreur[] = 'Vous souhaitez rester anonyme, allez ne prennez pas peur !';
    
    //traitement champ email
    if(!empty($_POST['email']) && strlen(trim($_POST['email'])) > 0){
        if(preg_match($regexMail,$_POST['email']))
            $email = htmlspecialchars($_POST['email']);
        else $erreur[] = 'Vous êtes sur de votre email?';    
    }
    else $erreur[] = 'Pas d\'email? Mais on fait comment pour vous joindre';

    //traitement message
    if(!empty($_POST['message']) && strlen(trim($_POST['message'])) > 0){
		$message = stripslashes(htmlspecialchars($_POST['message']));
	}
	else $erreur[] = 'Vous inquiétez pas, il y a assez de place pour le message';
    
    if(empty($erreur)){
        echo 'mail ok';
    }
    else print_r($erreur);
}
?>