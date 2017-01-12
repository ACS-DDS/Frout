<?php session_start(); ?>
<?php require 'classes/classeArticle.php'; ?>
<?php require 'classes/classeClients.php'; ?>
<?php require 'classes/mappeur.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<h1><?php echo "Bonjour ".$_SESSION['ident']; ?></h1>
		<h1><?php echo "Type de client ".$_SESSION['type']; ?></h1>
		<?php $catalogue = Mapper::getCatalogue(trim($_SESSION['type']));
		// var_dump(Article::);
		// var_dump($catalogue); 
		for ($i=0; $i < sizeof($catalogue); $i++)
			include 'objectCatalogue.php';
		?>

</body>
</html>
