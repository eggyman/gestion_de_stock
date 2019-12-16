<?php

$bdd= new PDO('mysql:host=127.0.0.1;dbname=ihm','root','');


$a=$_POST['mail'];
$b=$_POST['pwd'];

 
 

$req = $bdd->prepare('SELECT cin FROM personel WHERE mail=? AND pwd=?');
$req->execute(array($a,$b));
 
$resultat = $req->fetch();
 
if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
 
    echo 'Vous êtes connecté !';
}

?>