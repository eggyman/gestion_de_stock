<?php

$con = mysqli_connect('localhost','root','','ihm');
$mysqli= new mysqli('localhost','root','','ihm');
$bdd= new PDO('mysql:host=127.0.0.1;dbname=ihm','root','');

$a='';
$b='';
$c='';
$d='';

if(isset($_POST['save']))
{
	$ref=$_POST['ref'];
	$nom=$_POST['nom'];
	$prix=$_POST['prix'];
	$qte=$_POST['qte'];
	$sql = $bdd->prepare('UPDATE produit SET nom=?, prix=?, quantite=? where ref=?');    
	$sql->execute(array($nom, $prix, $qte, $ref));
	
header('Location: acc.php');
}
if(isset($_GET['del']))
{
	$id=$_GET['del'];
	$sql ="DELETE FROM produit where ref='".$id."'";
	mysqli_query($con,$sql);
	header('Location: acc.php');
}
if(isset($_GET['edit']))
{
	$id=$_GET['edit'];
	$res =mysqli_query($con,"SELECT * from produit where ref='".$id."' ");
	
		while($row = mysqli_fetch_assoc($res))
		{
		$a= $row['ref'];
		$b=$row['nom'];
		$c= $row['prix'];
		$d= $row['quantite'];
		
	}
}
?>