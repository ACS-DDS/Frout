<?php require 'classes/classeClients.php';
session_start();
require 'classes/classeArticle.php';
require 'classes/mappeur.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="favicon.png" />
	<title>NODEX | Catalogue</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body class="body_catalogue">
	<section>
		<article>
				<center><h1 class="titre_bonjour"><?php echo "Bonjour ". "<span>" .$_SESSION["client"]->getPrenom()." ".$_SESSION["client"]->getNom();?></span></h1></center>
				<?php $catalogue = Mapper::getCatalogue($_SESSION["client"]->getTypologie());
				 for ($i=0; $i < count($catalogue); $i++)
					include 'objectCatalogue.php';
				?>
		</article>
		</section>
<!-- 			<footer>
				<center><div class="informations_footer">
					<p>NODEX - 14, rue du Général de Gaule - Z.I. Le Pré vert - 39500 Moirans-en-Montagne<br>
					Tél: 03.80.45.78.66<br>
					Copyright © NODEX-Industry</p>
				</div></center>
			</footer> -->
	</body>
</html>
