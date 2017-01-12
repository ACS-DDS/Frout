<?php session_start(); ?>
<?php require 'classes/classeArticle.php'; ?>
<?php require 'classes/classeClients.php'; ?>
<?php require 'classes/mappeur.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Preselection</title>
</head>
<body>
	<main>
		<article>
				<h1><?php echo "Bonjour ".$_SESSION['ident']; ?></h1>
				<?php $catalogue = Mapper::getCatalogue(trim($_SESSION['type']));
				 for ($i=0; $i < count($catalogue); $i++)
					include 'objectCatalogue.php';
				?>
		</article>
		<article>
			<button type="submit" id="btnValidCatalogue">Valider la preselection</button>
		<article>
	</main>
	</body>
</html>
