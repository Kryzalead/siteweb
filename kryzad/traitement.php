<?php
session_start();
$erreur = array();
include('../fonctions/config.php');
include('../fonctions/bdd.php');
$sql = "SELECT login,pass FROM kz_users";
$req = mysql_query($sql);
$data = mysql_fetch_assoc($req);
if(isset($_POST['valid'])){
    if(empty($_POST['login']))
        $erreur[] = 'Merci de rentrer un login';
    elseif($_POST['login'] != $data['login'])
        $erreur[] = 'Le login n\'est pas valide';
    else $login = htmlspecialchars($_POST['login']);
    if(empty($_POST['pass']))
        $erreur[] = 'Merci de rentrer votre mot de passe';
    else if(sha1($_POST['pass']) != $data['pass'])
        $erreur[] = 'Le mot de passe n\'est pas valide';
    else $pass = htmlspecialchars($_POST['pass']);
    if(empty($erreur)){
        $_SESSION['admin']['login'] = sha1($login);
        $_SESSION['admin']['pass'] = sha1($pass);
        header('Location: indexAdmin.php');
    }
    else{
        $_SESSION['formConnect']['erreur'] = $erreur;
        header('Location: index.php');
    }    
}
else header('Location: '.ROOT.'page404.php');
?>