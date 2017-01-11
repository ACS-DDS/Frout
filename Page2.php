<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<h1><?php echo "Bonjour ".$_SESSION['ident']; ?></h1>
</body>
</html>
<?php session_destroy(); ?>