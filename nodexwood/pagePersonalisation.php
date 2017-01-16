<?php require_once 'classes/mappeur.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script src="http://quentinp.dijon.codeur.online/nodexwood/vivus/dist/vivus.js"></script>
 <?php $obj = Mapper::getProduit($_POST["ref"]);
  $varLong = $obj->getLongueur() / 10;
  $varLarg = $obj->getLargeur() / 10;?>

 	<svg width="<?php echo $varLong ?>" height="<?php echo $varLarg ?>" style="height: auto; border: 1px solid red; padding: 5%;"></svg>
</body>
</html>