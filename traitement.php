<?php
session_start();
require('fonctions/config.php');
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
        // préparation du mail
        $to = 'kryzalead@gmail.com';
        $subject = 'Demande info kryzalead';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        
        // En-têtes additionnels
        $headers .= 'From: "'.$nom.'" <"'.$email.'">' . "\r\n";
        $headers .= 'Reply-To: "'.$nom.'" <"'.$email.'">' . "\r\n";
        
        $contenu = '<html><head><body>';
        $contenu .='<p>'.$message.'</p>';
        $contenu .= '</body></head></html>';
        
        if(mail($to,$subject,$contenu,$headers)){
            $_SESSION['info'] = 'Votre mail a bien été envoyé';
            header('Location: contact.php');
        }
        else{
            // a voir si on rempli les champs par default
            //$_SESSION['post'] = $_POST;
            $_SESSION['erreur'] = 'Une erreur est survenue pendant l\'envoi du mail, veuillez nous en excusez';
            header('Location: contact.php');
        }
    }
    else{
        $_SESSION['erreur'] = $erreur;
        header('Location: contact.php');
    }
}    
?>