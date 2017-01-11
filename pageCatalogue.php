<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<h1><?php echo "Bonjour ".$_SESSION['ident']; ?></h1>
		<h1><?php echo "Type de client ".$_SESSION['type']; ?></h1>
		<article>
			<div>
				<img src="#" style="height: 200px; width: 200px;">
			</div>
			<div>
				<select name="longueur">
					<option>test</option>
					<option>test</option>
				</select>
				<select name="largeur">
					<option>test</option>
					<option>test</option>
				</select>
				<select name="epaisseur">
					<option>test</option>
					<option>test</option>
					<option>test</option>
				</select>
				<input type="checkbox" name="valid">
			</div>
		</article>
</body>
</html>
