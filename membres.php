<?php
	include ("include/entete.inc.php");
	echo generationEntete("Bienvenue sur PhotoForYou en tant que ".$_SESSION['Type'], "Bonjour ".$_SESSION['NomUtilisateur']);
	include ("include/piedDePage.inc.php");
?>