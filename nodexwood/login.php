<?php

session_start();
require "classes/classeClients.php";
require "classes/classeArticle.php";
$erreur = [];


$fichier = fopen("clients.csv", "r");

while($tab=fgetcsv($fichier, 0 ,';')){

	if($tab[2]==$_POST["identifiant"] && $tab[3]==$_POST["password"]){
		$_SESSION["client"] = new Client ($tab);
		header("Location:pageCatalogue.php");
		exit;
	}
	else {
		$erreur = "Identifiants ou mot de passe incorrects";
	}
}

$_SESSION["erreur"] = $erreur;

header("Location:Index.php");
exit;


?>



