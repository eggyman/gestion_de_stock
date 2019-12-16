<?php

$con = mysqli_connect('localhost','root','','ihm');
$bdd= new PDO('mysql:host=127.0.0.1;dbname=ihm','root','');


$refe = $_POST['ref'];
$nom = $_POST['nom'];
$prix = $_POST['prix'];
$qte = $_POST['qte'];

	$sql = $bdd->prepare("INSERT INTO produit VALUES(?,?,?,?)");    
	$sql->execute(array($refe, $nom, $prix, $qte));
  	header('Location: ajout.php');



?>