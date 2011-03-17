<?php
$trigger = true;
$regexMail = "#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#";

if(isset($_POST['valid'])){
    //traitement champ nom
    if(!empty($_POST['nom']) && strlen(trim($_POST['nom'])) > 0){
        $nom = htmlspecialchars(strip_tags($_POST['nom']));
    }
    else $trigger = false;
    
    //traitement champ email
    if(!empty($_POST['email']) && strlen(trim($_POST['email'])) > 0){
        if(preg_match($regexMail,$_POST['email']))
            $email = htmlspecialchars(strip_tags($_POST['email']));
        else $trigger = false;    
    }
    else $trigger = false;

    //traitement message
    if(!empty($_POST['message']) && strlen(trim($_POST['message'])) > 0){
		$message = htmlspecialchars(strip_tags($_POST['message']));
	}
	else $trigger = false;
   
    if($trigger){
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
            echo 'ok';
        }
        else{
            return 'error';
        }
    }
    else{
        return 'error';
    }
}
else return 'error';   


?>