<?php
// fichier de création des tables
mysql_connect('localhost','root','root');
mysql_selectdb('kryzalead');

// on supprime la table si elle existe
$sql = "DROP TABLE IF EXISTS kz_users";
mysql_query($sql);

// on crée la nouvelle table
$sql = "CREATE TABLE  kryzalead.kz_users (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
            login VARCHAR( 255 ) NOT NULL ,
            mdp VARCHAR( 255 ) NOT NULL
        ) ENGINE = MYISAM ";
        
if(mysql_query($sql))
    echo 'table crée';
    
$sql = "INSERT INTO kz_users (login,mdp) VALUES('admin','".sha1('test')."')";
if(mysql_query($sql))
    echo 'good';
?>