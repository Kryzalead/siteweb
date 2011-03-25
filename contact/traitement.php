<?php
session_start();
$valid = true;
$fields = 	array(	'nom'=>array('type'=>'text','required'=>1,'regexValidation'=>'nom','msgErreur'=>array('empty'=>'Vous n\'avez pas entré de Nom.','regex'=>'Veuillez entrer un nom valide')),
					'email'=>array('type'=>'text','required'=>1,'regexValidation'=>'email','msgErreur'=>array('empty'=>'Vous n\'avez pas entré d\'email.','regex'=>'Etes vous sûr de votre email?')),
					'message'=>array('type'=>'text','required'=>1,'msgErreur'=>array('empty'=>'Vous n\'avez pas entré de message.'))
			);
$regex = array(
			'nom'=>"#^[a-zA-Z]{3,16}$#",
			'email'=>"#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#"
		);			

if(!empty($_POST['contactnojs']['valid'])){
    
	unset($_POST['contactnojs']['valid']);
	
	
	if(!empty($_POST['contactnojs']['token'])){
		if($_SESSION['contactnojs']['token'] != $_POST['contactnojs']['token']){
            $_SESSION['contactnojs']['token'] = array();
			header('Location: index.php');
		}
	}
	else {
		$_SESSION['contactnojs']['token'] = array();
		header('Location: index.php');
	}
	
	foreach($_POST['contactnojs'] as $key=>$value){
		$flag = true;
		if($fields[$key]['type'] == 'text'){
			if($fields[$key]['required'] == 1){
				if($value == '' || strlen(trim($value)) == 0){
					$erreur[$key] = $fields[$key]['msgErreur']['empty'];
					$flag = false;
				}
			}
			else{
				if($value == '' && strlen(trim($value)) == 0){
					$erreur[$key] = $fields[$key]['msgErreur']['empty'];
					$flag = false;
				}	
			}
			
			if($flag && !empty($fields[$key]['regexValidation'])){
				if(!preg_match($regex[$fields[$key]['regexValidation']],$value)){
					$erreur[$key] = $fields[$key]['msgErreur']['regex'];
					$flag = false;
				}	
			}
		}
		
		if($flag)
			$$key = htmlspecialchars($value);
		else{
			$_SESSION['contactnojs']['erreur'] = $erreur;
			$valid = false;	
			header('Location: index.php');
		}
	}
   
    if($valid){
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
            $_SESSION['contactnojs']['info'] = 'Merci de votre mail.';
            header('Location: index.php');
        }
        else{
           $_SESSION['contactnojs']['erreur']['send'] = 'Une erreur est survenue lors de l\'envoi du mail';
           header('Location: index.php');
        }
    }
    else{
        $_SESSION['contactnojs']['erreur'] = $erreur;
        header('Location: index.php');
    }
}
else header('Location: ../index.php');   
?>