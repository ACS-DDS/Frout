<?php require 'classes/mappeur.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <?php print_r($_POST);
 var_dump(Mapper::getProduit($_POST["ref"])); ?>
</body>
</html>