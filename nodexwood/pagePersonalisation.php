<?php require_once 'classes/mappeur.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<?php $obj = Mapper::getProduit($_POST["ref"]);
	$varLong = $obj->getLongueur() /5;
	$varLarg = $obj->getLargeur() / 5;
	$varLongI = $obj->getLongueur();
	$varLargI = $obj->getLargeur();

	if ($varLarg == $varLong) {
		$varLarg = 500;
		$varLong = 500;
		$margLeft = "32%";
	}

	if ($varLarg != $varLong) {
		$varLarg = 500;
		$varLong = 750;
		$margLeft = "25%";
	}?>

	<style>
		.longueur {
		height: 20px; 
		width: auto;  
		position: absolute; 
		margin-top: -7%; 
		margin-left: <?php echo $margLeft ?>;
		transform: rotate(-90deg);
		transform-origin: left top 0;
	}
	</style>
</head>
<body class="body_catalogue">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/svg.js/2.3.6/svg.js"></script>
	<script src="svg.draw.js"></script>
	<script src="raphael.min.js"></script>

	<article class="global">
		<center><div class="largeur">
			<h2 style="font-family: 'Lato', sans-serif;"><?php echo "Largeur : ".$varLargI." mm"; ?></h2></div></center>
	 		<center><svg id="canvas_container" width="<?php echo $varLong ?>" height="<?php echo $varLarg ?>" style=" background-color: #d9b38c; "></svg></center>
	</article>
	<div class="longueur">
	 	<h2 style="font-family: 'Lato', sans-serif"><?php echo "Longueur : ".$varLongI." mm"; ?></h2>
	</div>
	<center><button class="bouton" type="submit" >Effacer</button></center>
	<center><button class="bouton" type="submit" >Valider</button></center>

	<script>
		$(document).ready(function () {
		var draw = new SVG('canvas_container').size(<?php echo $varLong ?>, <?php echo $varLarg ?>);
		draw.rect().draw()
	});
	</script>
</body>
</html>