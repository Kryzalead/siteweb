<?php
session_start();
$valid = true;
$formName = 'devis';

//définition des champs
$fields = array('civilite'=>array(
                    'type'=>'radio','required'=>1,'msgErreur'=>array(
                        'empty'=>'Merci de choisir votre civilité'
                    )
                ),
                'statut'=>array(
                    'type'=>'radio','required'=>1,'msgErreur'=>array(
                        'empty'=>'Merci de choisir votre statut'
                    )
                ),
                'nom'=>array(
                    'type'=>'text','required'=>1,'regexValidation'=>'nom','msgErreur'=>array(
                        'empty'=>'Vous n\'avez pas entré de Nom.','regex'=>'Veuillez entrer un nom valide'
                    )
                ),
                'prenom'=>array(
                    'type'=>'text','required'=>1,'msgErreur'=>array(
                        'empty'=>'Vous n\'avez pas entré de Prénom'
                    )
                ),
                'contact'=>array(
                    'type'=>'radio','required'=>1,'msgErreur'=>array(
                        'empty'=>'Merci de choisir votre préférence de contact'
                    )
                ),
                'email'=>array(
                    'type'=>'text','required'=>1,'regexValidation'=>'email','msgErreur'=>array(
                        'empty'=>'Vous n\'avez pas entré d\'email','regex'=>'Veuillez entrer un email valide'
                    )
                ),
                'tel'=>array(
                    'type'=>'text','required'=>0,'regexValidation'=>'phone','msgErreur'=>array(
                        'empty'=>'Vous n\'avez pas entré de téléphone','regex'=>'Veuillez entrer un téléphone valide'
                    )
                ),
                'desc'=>array(
                    'type'=>'text','required'=>0,'msgErreur'=>array(
                        'empty'=>'Vous n\'avez pas entré de téléphone'
                    )
                )
);
if(!empty($_POST[$formName]['valid'])){
    
    unset($_POST[$formName]['valid']);
    
    foreach($_POST[$formName] as $key=>$value){
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
		else
			$valid = false;
            
        unset($fields[$key]);
	}
    
    foreach($fields as $key => $val){
        if($val['required'] == 1){
            if(empty($_POST[$formName][$key])){
                $erreur[$key] = $val['msgErreur']['empty'];
				$flag = false;
            }
        }
    }
}
print_r($erreur);
?>