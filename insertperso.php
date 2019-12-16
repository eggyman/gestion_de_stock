<?php
$bdd= new PDO('mysql:host=127.0.0.1;dbname=ihm','root','');


$cin = $_POST['cin'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$pwd = $_POST['pwd'];
	$sql = $bdd->prepare("INSERT INTO personel VALUES(?,?,?,?,?)");    
	$sql->execute(array($cin, $nom, $prenom, $mail, $pwd));
  	header('Location: acc.php');



?>