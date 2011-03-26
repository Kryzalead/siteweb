<?php
session_start();
$valid = true;  // variable permettant de savoir si le formulaire est valide
$formName = 'devis'; //nom du formulaire
// configuration des checkbox
$checkConfig = array('nom'=>'options','required'=>0,'msgErreur'=>'Veuillez cochez une case');
// tableau récupérant les valeur formatées des checkbox
$checkVal = array();
// tableau des expression régulière
$regex = array(
			'nom'=>"#^[a-zA-Z]{3,16}$#",
			'email'=>"#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",
            'phone'=>"#^0[1-68]([-. ]?[0-9]{2}){4}$#",
            'number'=>"#\d+(\.|,)?\d#Uis"
		);			

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
                ),
                'type'=>array(
                    'type'=>'radio','required'=>1,'msgErreur'=>array(
                        'empty'=>'Merci de renseigner le type de site que vous souhaitez'    
                    )
                ),
                'nbrePage'=>array(
                    'type'=>'select','required'=>1,'value'=>array(
                        1=>'Inférieur à 5 pages',
                        2=>'Entre 5 à 10 pages',
                        3=>'Plus de 10 pages',
                        4=>'Je ne sais pas'
                    ),'msgErreur'=>'Merci de renseigner le nombre de page que vous souhaitez'
                ),
                'optAdmin'=>array(
                    'type'=>'check','msg'=>'Espace administration','msgDefaut'=>''
                    
                ),
                'optContact'=>array(
                    'type'=>'check','msg'=>'Formulaire de contact','msgDefaut'=>''
                ),
                'optNewsletter'=>array(
                    'type'=>'check','msg'=>'Newsletter','msgDefaut'=>''
                ),
                'optGalerie'=>array(
                    'type'=>'check','msg'=>'Galerie','msgDefaut'=>''
                ),
                'optBoutique'=>array(
                    'type'=>'check','msg'=>'Boutique en ligne','msgDefaut'=>''
                ),
                'optForum'=>array(
                    'type'=>'check','msg'=>'Forum','msgDefaut'=>''
                ),
                'optStats'=>array(
                    'type'=>'check','msg'=>'Statistiques','msgDefaut'=>''
                ),
                'maintenance'=>array(
                    'type'=>'select','required'=>1,'value'=>array(
                        1=>'oui',
                        2=>'non',
                    ),'msgErreur'=>'Merci de renseigner si vous souhaitez la maintenance ou pas'
                ),
                'start'=>array(
                    'type'=>'select','required'=>0,'value'=>array(
                        1=>'Moins de 3 mois',
                        2=>'Entre 3 et 6 mois',
                        3=>'Plus de 6 mois'
                    ),'msgDefaut'=>'Je ne sais pas'
                ),
                'budget'=>array(
                    'type'=>'text','required'=>0,'regexValidation'=>'number','msgErreur'=>array(
                        'regex'=>'Ce champs doit être numérique'
                    )
                ),
                'design'=>array(
                    'type'=>'radio','required'=>0
                ),
                'logo'=>array(
                    'type'=>'radio','required'=>0
                ),
                'contenu'=>array(
                    'type'=>'radio','required'=>0
                ),
                'img'=>array(
                    'type'=>'radio','required'=>0
                ),
);

//si le formulaire est posté    
if(!empty($_POST[$formName]['valid'])){
    // on détruit la valeur du submit
    unset($_POST[$formName]['valid']);
    
    //Traitement des champs, dont la valeur POST est automatiquement crée(type text et textarea)
    foreach($_POST[$formName] as $key=>$value){
        //validation du champs
        $flag = true;
        // si il s'agit d'un champs de type text ou textarea
        if($fields[$key]['type'] == 'text'){
            
            // si le champs est requis
            if($fields[$key]['required'] == 1){
                // on vérifie que le champs n'est pas vide
                if($value == '' || strlen(trim($value)) == 0){
                    // on assigne le message d'erreur au champs
                    $erreur[$key] = $fields[$key]['msgErreur']['empty'];
                    // on passe le flag à false pour dire que le champs est incorrect
                    $flag = false;
                }
            }
            else{
                // si le champs n'est pas rempli de vide ou d'espace
                if($value != '' && strlen(trim($value)) == 0){
                    // on assigne le message au champs
                    $erreur[$key] = $fields[$key]['msgErreur']['empty'];
                    // on passe le flag à false pour dire que le champs est incorrect
                    $flag = false;
                }	
            }
            
            // si le champs est correct, et qu'il y a une vérication regex à faire
            if($flag && !empty($value) && !empty($fields[$key]['regexValidation'])){
                // si la regex n'est pas bonne
                if(!preg_match($regex[$fields[$key]['regexValidation']],$value)){
                    // on assigne le message au champs
                    $erreur[$key] = $fields[$key]['msgErreur']['regex'];
                    // on passe le flag à false pour dire que le champs est incorrect
                    $flag = false;
                }
            }
            
            // si le champs est correct
            // on crée la variable avec le nom du champs, et on lui assigne sa valeur
            // sinon, on précise que le formulaire n'est pas valide
            // enfin on détruit les champs dans le tableau $fields pour simplifier les traitement des autres champs
            if($flag)
                $$key = htmlspecialchars($value);
            else
                $valid = false;
            unset($fields[$key]);
        }
	}
    
    // variable pour compter le nombre de checkbox coché en cas de champs requis
    $checked = 0;
    
    //Vérification des autres champs (radio,checkbox)
    foreach($fields as $key => $val){
        // type radio
        if($val['type'] == 'radio'){
            // si le champs est requis
            if($val['required'] == 1){
                // si il n'est pas vide
                if(empty($_POST[$formName][$key])){
                    $erreur[$key] = $val['msgErreur']['empty'];
            		// on passe la validation du formulaire à false
                    $valid = false;
                }
                else $$key = htmlspecialchars($_POST[$formName][$key]); 
            }
            else{
                if(!empty($_POST[$formName][$key]))
                    $$key = htmlspecialchars($_POST[$formName][$key]);
                else $$key = '';    
            }
        }
        //type checkbox
        elseif($val['type'] == 'check'){
            // si le champs est requis connus pas $checkConfig
            if($checkConfig['required'] == 1){
                // si il n'est pas vide
                if(!empty($_POST[$formName][$key])){
                    // on stocke le message dans $checVal
                    $checkVal[]= $fields[$key]['msg'];
                    // on incrémente $checked
                    $checked++;
                }
            }
            else{
                if(!empty($_POST[$formName][$key])){
                    $checkVal[]= $fields[$key]['msg'];
                }
                else $$key = $fields[$key]['msgDefaut'];
            }
        }
        //type select
        elseif($fields[$key]['type'] == 'select'){
            // si le champs est requis
            if($fields[$key]['required'] == 1){
                // si il n'est pas vide
                if($_POST[$formName][$key] == 0){
                    $erreur[$key] = $fields[$key]['msgErreur'];
                    //on passe la validation du formulaire à false
                    $valid = false;
                }
                else $$key = $fields[$key]['value'][intval($_POST[$formName][$key])];
            }
            else{
                if($_POST[$formName][$key] != 0){
                    $$key = $fields[$key]['value'][intval($_POST[$formName][$key])];
                }
                else $$key = $fields[$key]['msgDefaut'];
            }
        }
        else{}
    }
    
    if($checkConfig['required'] == 1 && $checked == 0){
        $erreur[$checkConfig['nom']] = $checkConfig['msgErreur'];
        $valid = false;    
    }
        
    if($valid){
        echo 'form ok';
    }
    else{
        $_SESSION[$formName]['post'] = $_POST[$formName];
        $_SESSION[$formName]['erreur'] = $erreur;
        header('Location: index.php');
    }
}
else header('Location: index.php');
?>