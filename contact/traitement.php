<?php
session_start();
$erreur = array();
$regexMail = "#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#";

if(isset($_POST['valid'])){
    
	if(!empty($_POST['token'])){
		if($_SESSION['contact']['token'] != $_POST['token'])
            header('Location: ../index.php');
	}
	else  header('Location: ../index.php');
	
	//traitement champ nom
    if(!empty($_POST['nom']) && strlen(trim($_POST['nom'])) > 0){
        $nom = htmlspecialchars(strip_tags($_POST['nom']));
    }
    else $erreur[] = 'Vous souhaitez restez anonyme?N\'ayez pas peur.';
    
    //traitement champ email
    if(!empty($_POST['email']) && strlen(trim($_POST['email'])) > 0){
        if(preg_match($regexMail,$_POST['email']))
            $email = htmlspecialchars(strip_tags($_POST['email']));
        else $erreur[] = 'Vous êtes sûr de votre email.';    
    }
    else $erreur[] = 'Pas d\'email, on vous contacte comment?';

    //traitement message
    if(!empty($_POST['message']) && strlen(trim($_POST['message'])) > 0){
		$message = htmlspecialchars(strip_tags($_POST['message']));
	}
	else $erreur[] = 'Vous inquiétez pas, il y a assez de place!';
   
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
            $_SESSION['contact']['info'] = 'Merci de votre mail.';
            header('Location: index.php');
        }
        else{
           $_SESSION['contact']['erreur'] = array('Une erreur est survenue lors de l\'envoi du mail');
           header('Location: index.php');
        }
    }
    else{
        $_SESSION['contact']['erreur'] = $erreur;
        header('Location: index.php');
    }
}
else header('Location: ../index.php');   


?>