<?php
session_start();
$erreur = array();

$regexMail = "#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#";
$regexPhone = "#^0[1-68]([-. ]?[0-9]{2}){4}$#";

if(!empty($_POST['valid'])){
    
    // traitement civilité
    if(!empty($_POST['civilite'])){
        $civilite = htmlspecialchars($_POST['civilite']);
    }
    else $erreur[] = 'Merci de remplir votre civilite';
    
    // traitement statut
    if(!empty($_POST['statut'])){
        $statut = htmlspecialchars($_POST['statut']);
    }
    else $erreur[] = 'Merci de remplir votre statut';
    
    // traitement nom
    if(!empty($_POST['nom']) && strlen(trim($_POST['nom'])) > 0){
        $nom = htmlspecialchars($_POST['nom']);
    }
    else $erreur[] = 'Merci de remplir votre nom';
    
    // traitement prénom
    if(!empty($_POST['prenom']) && strlen(trim($_POST['prenom'])) > 0){
        $prenom = htmlspecialchars($_POST['prenom']);
    }
    else $erreur[] = 'Merci de remplir votre prénom';
    
    //traitement email
    if(!empty($_POST['email']) && strlen(trim($_POST['email'])) > 0){
        if(preg_match($regexMail,$_POST['email']))
            $email = htmlspecialchars($_POST['email']);
        else $erreur[] = 'Merci de mettre un email valide';    
    }
    else $erreur[] = 'Merci de remplir votre email';
    
    // traitement téléphone
    if(!empty($_POST['tel']) && strlen(trim($_POST['tel'])) > 0){
        if(preg_match($regexPhone,$_POST['tel']))
            $tel = htmlspecialchars($_POST['tel']);
        else $erreur[] = 'Merci de mettre un numéro de téléphone valide';    
    }
    else $tel = '';
    
    // traitement description activité
    if(!empty($_POST['desc']) && strlen(trim($_POST['desc'])) > 0){
        $desc = htmlspecialchars($_POST['desc']);
    }
    else $desc = '';
    
    // traitement contact
    if(!empty($_POST['contact'])){
        $contact = htmlspecialchars($_POST['contact']);
    }
    else $erreur[] = 'Merci de choisir votre préférence de contact';
    
    //traitement type du site
    if(!empty($_POST['type'])){
        $type = htmlspecialchars($_POST['type']);
    }
    else $erreur[] = 'Merci de renseigner le type de site que vous souhaitez';
    
    //traitement nombre de page
    if($_POST['nbrePage'] > 0){
        switch($_POST['nbrePage']){
            case '1':
                $nbrePage = 'Inférieur à 5 pages';
                break;
            case '2':
                $nbrePage = 'Entre 5 à 10 pages';
                break;
            case '3':
                $nbrePage = 'Plus de 10 pages';
                break;
            default:
                break;
        }
    }
    else $erreur[] = 'Merci de renseigner le nombre de page que vous souhaitez';

    // traitement des options choisies
    $options = array();
    if(!empty($_POST['optAdmin']))
        $options[] = 'Espace administration';
    if(!empty($_POST['optReserve']))
        $options[] = 'Espace réservé';
    if(!empty($_POST['optContact']))
        $options[] = 'Formulaire de contact';
    if(!empty($_POST['optNewsletter']))
        $options[] = 'Newsletter';
    if(!empty($_POST['optGalerie']))
        $options[] = 'Galerie';
    if(!empty($_POST['optBoutique']))
        $options[] = 'Boutique en ligne';
    if(!empty($_POST['optForum']))
        $options[] = 'Forum';
    if(!empty($_POST['optStats']))
        $options[] = 'Statistiques';
    
    // traitement demande de maintenance
    if($_POST['maintenance'] != '')
        $maintenance = htmlspecialchars($_POST['maintenance']);
    else $erreur[] = 'Merci de préciser si vous souhaitez nous confier ou non la maintenance de votre site';
    
    // traitement du multilangue
    if($_POST['lang'] != '')
        $lang = htmlspecialchars($_POST['lang']);
    else $lang = 'Pas de multilingue';
    
    // traitement des traduction
    if($_POST['trad'] != '')
        $trad = htmlspecialchars($_POST['trad']);
    else $trad = 'Pas de fichier de traduction';
    
    //traitement du démarage du site
    if($_POST['start'] > 0){
        switch($_POST['start']){
            case '1':
                $start = 'Moins de 3 mois';
                break;
            case '2':
                $start = 'Entre 3 et 6 mois';
                break;
            case '3':
                $start = 'Plus de 6 mois';
                break;
            default:
                break;
        }
    }
    else $start = 'Pas de limite de temps';
    
    // traitement du budget
    if(!empty($_POST['budget']) && strlen(trim($_POST['nom'])) > 0){
        if(is_numeric($_POST['budget']))
            $budget = htmlspecialchars($_POST['budget']);
        else $erreur[] = 'Le budget ne doit contenir que des chiffres';    
    }
    else $budget = 'Pas de budget précis';
    
    // traitement du design
    if(!empty($_POST['design'])){
        $design = htmlspecialchars($_POST['design']);
    }
    else $design = 'Pas de choix';
    
    // traitement du logo
    if(!empty($_POST['logo'])){
        $logo = htmlspecialchars($_POST['logo']);
    }
    else $logo = 'Pas de choix';
    
    // traitement du flash
    if(!empty($_POST['flash'])){
        $flash = htmlspecialchars($_POST['flash']);
    }
    else $flash = 'Pas de choix';
    
    // traitement du contenu
    if(!empty($_POST['contenu'])){
        $contenu = htmlspecialchars($_POST['contenu']);
    }
    else $contenu = 'Pas de choix';
    
    // traitement des images
    if(!empty($_POST['img'])){
        $img = htmlspecialchars($_POST['img']);
    }
    else $img = 'Pas de choix';
    
    if(empty($erreur)){
        echo 'good';
    }
    else{
        $_SESSION['post'] = $_POST;
        $_SESSION['erreur'] = $erreur;
        header('Location: devis.php');
    }
}
else header('Location: devis.php');
?>