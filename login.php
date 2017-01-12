<?php
session_start();
$erreurs = [];
$erreurs[] = "Identifiant ou mot de passe incorrect";
$fichier = file("clients.csv"); // Cherche et interprète le fichier .CSV
$total = count($fichier); // Compte combien il y a de colone

$csvdat = array(); // Définition du tableau à remplir

for($i = 0; $i < $total; $i++){
  $lin = $fichier[$i];
  list($varA, $varB, $varC, $varD, $varE) = split(';', $lin);
  $csvdat[] = array($varA, $varB, $varC, $varD, $varE); // Ajout d'élément au tableau
}

$id = array();
$mdp = array();
$nom = array();
$prenom = array();
$type = array();

for($o = 0; $o < $total; $o++)
  $prenom[] = $csvdat[$o][0];

 for($p = 0; $p < $total; $p++)
  $nom[] = $csvdat[$p][1];
								// Tableaux des differentes colone du fichier
for($k = 0; $k < $total; $k++)
  $id[] = $csvdat[$k][2];

for($l = 0; $l < $total; $l++)
  $mdp[] = $csvdat[$l][3];

for($q = 0; $q < $total; $q++)
  $type[] = $csvdat[$q][4];

// Verification des identifiant de l'utilisateur (optimisation possible avec des tab associatif)
for ($m=0; $m < sizeof($id); $m++) { 
			if (strcmp($id[$m] , "\"".$_POST['identifiant']."\"") == 0) { // Ligne de comparaison tab/POST
			 	for ($n=0; $n < sizeof($mdp); $n++) { 
					if (strcmp($mdp[$n] , "\"".$_POST['password']."\"") == 0) {
						if ($n == $m) {
							$_SESSION['ident'] = str_replace('"','', $prenom[$m]." ".$nom[$m]); // Creation du cookie identifiant
							$_SESSION['type'] = str_replace('"','', $type[$m]);
							header('Location: http://quentinp.dijon.codeur.online/nodexwood/pageCatalogue.php');
			 				exit;
						}
					}
				}
			}
		}

// Si le mot de pass ou l'id est incorect
$_SESSION['erreurs'] = $erreurs;
header("Location: Index.php");
exit;
?>

<!-- Differentes données visible sur login.php -->
<p><?php print_r($id); ?></p>
<p><?php print_r($mdp); ?></p>
<!-- ?php echo $csvdat[0][0];? -->
<p><?php print_r($_POST); ?></p>