<?php require 'classes/classeClients.php';
session_start();
require 'classes/classeArticle.php';
require 'classes/mappeur.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Preselection</title>
</head>
<body>
	<main>
		<article>
				<h1><?php echo "Bonjour ".$_SESSION["client"]->getPrenom()." ".$_SESSION["client"]->getNom(); ?></h1>
				<?php $catalogue = Mapper::getCatalogue($_SESSION["client"]->getTypologie());
				 for ($i=0; $i < count($catalogue); $i++)
					include 'objectCatalogue.php';
				?>
		</article>
	</main>
	</body>
</html>
