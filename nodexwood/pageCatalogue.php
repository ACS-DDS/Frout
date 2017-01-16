<?php require_once 'classes/classeClients.php';
session_start();
require_once 'classes/classeArticle.php';
require_once 'classes/mappeur.php'; ?>

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
