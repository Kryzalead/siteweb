<?php
    session_start();
    $erreur = array();
    require('../fonctions/config.php');
    require('../fonctions/bdd.php');
    
    $sql = "SELECT login,mdp FROM kz_users";
    $req = mysql_query($sql);
    $data = mysql_fetch_assoc($req);
    
    if(isset($_POST['connexion']['valid'])){
        if(!empty($_POST['connexion']['login']) || !empty($_POST['connexion']['mdp'])){
            if($_POST['connexion']['login'] == $data['login'] && sha1($_POST['connexion']['mdp']) == $data['mdp']){
                echo 'connexion ok';
                    header('Location: indexKryzalead_Admin.php');
            }
            else {
                $_SESSION['connexion']['erreur'] = 'Le couple login, mdp n\'est pas correct';
                header('Location: index.php');
            }
        }
        else {
            $_SESSION['connexion']['erreur'] = 'Le couple login, mdp n\'est pas correct';
            header('Location: index.php');
        }
    }
    else header('Location: '.ROOT.'page404.php');
    ?>