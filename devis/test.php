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
        // préparation du mail
        $to = 'contact@alternative-webdesign.fr';
        $subject = 'Demande Alternative Webdesign';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        // En-têtes additionnels
        $headers .= 'From: "'.$nom.'" <"'.$email.'">' . "\r\n";
        $headers .= 'Reply-To: "'.$nom.'" <"'.$email.'">' . "\r\n";
        
        $mail = '<html><head><style type="text/css">';
        $mail .= 'table{border-collapse: collapse;}';
        $mail .= 'tr,td{border: 1px solid black;text-align: center}';
        $mail .= 'td.oui{color: green}';
        $mail .= 'td.non{color: red}';
        $mail .='</style>';
        $mail .='<body>';
        $mail .='Civilité : '.$civilite.' '.$nom.' '.$prenom;
        $mail .='<br />Statut : '.$statut;
        $mail .='<br />e-mail : '.$email;
        $mail .='<br />Téléphone : '.$tel;
        $mail .='<br />Description de son activité : '.$desc;
        
        $mail.='<br /><hr />';
        $mail .='<br />Je souhaiterai un site '.$type.' comprenant '.$nbrePage;
        $mail .='<br />Je souhaiterai comme options : ';
        if(!empty($checkVal)){
            $mail .='<table><thead><tr>';
            $mail .='<th>Administration</th>';
            $mail .='<th>Espace Réservé</th>';
            $mail .='<th>Form contact</th>';
            $mail .='<th>Newsletter</th>';
            $mail .='<th>Galerie</th>';
            $mail .='<th>Boutique</th>';
            $mail .='<th>Forum</th>';
            $mail .='<th>Statistiques</th>';
            $mail .='</thead><tbody><tr>';
            $mail .= in_array('optAdmin',$checkVal) ? '<td class="oui">oui</td>' : '<td class="non">non</td>';
            $mail .= in_array('optReserve',$checkVal) ? '<td class="oui">oui</td>' : '<td class="non">non</td>';
            $mail .= in_array('optContact',$checkVal) ? '<td class="oui">oui</td>' : '<td class="non">non</td>';
            $mail .= in_array('optNewsletter',$checkVal) ? '<td class="oui">oui</td>' : '<td class="non">non</td>';
            $mail .= in_array('optGalerie',$checkVal) ? '<td class="oui">oui</td>' : '<td class="non">non</td>';
            $mail .= in_array('optBoutique',$checkVal) ? '<td class="oui">oui</td>' : '<td class="non">non</td>';
            $mail .= in_array('optForum',$checkVal) ? '<td class="oui">oui</td>' : '<td class="non">non</td>';
            $mail .= in_array('optStats',$checkVal) ? '<td class="oui">oui</td>' : '<td class="non">non</td>';
            $mail .='</tr></tbody></table>';
        }
        else
            $mail .= 'Aucun choix';
            
        $mail .= '<br />Maintenance du site : '.$maintenance;
        $mail .= '<br />Départ du site : '.$start;
        $mail .= '<br />Mon budget : '.$budget.' euros.';
        
        $mail .= '<br /><hr />';
        $mail .= '<br />Le design : '.$design;
        $mail .= '<br />Le logo : '.$logo;
        $mail .= '<br />Le contenu : '.$contenu;
        $mail .= '<br />Les images : '.$img;
        
        $mail .='</body></html>';
        
        if(mail($to,$subject,$mail,$headers)){
			$_SESSION[$formName]['info'] = 'Votre devis a bien été envoyé';
			header('Location: index.php');
		}
		else{
			$_SESSION[$formName]['post'] = $_POST[$formName];
			$_SESSION[$formName]['erreur']['send'] = 'Une erreur est survenue pendant l\'envoi du mail, veuillez nous en excusez';
			header('Location: index.php');
        }
    }
    else{
        $_SESSION[$formName]['post'] = $_POST[$formName];
        $_SESSION[$formName]['erreur'] = $erreur;
        header('Location: index.php');
    }
}
else header('Location: index.php');
?>