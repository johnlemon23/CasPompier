<?php
	include("config.inc.php");
	try 
	{
		$db = new PDO("mysql:host=$host;dbname=$base",$login,$motdepasse);
		// On va créer un objet de type manager pour gérer les pilotes avec la BDD
	} 
	catch (PDOException $e) 
	{
		echo "Erreur : ".$e->getMessage();
		die();
	}

?>