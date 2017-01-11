<?php if (isset($_SESSION['ident'])) {
	session_destroy();
} ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Identification</title>
</head>
<body>
	<header>
		<h1>NoDexWood</h1>
	</header>
	<main>
		<form action="login.php" method="post">
			<div>
				<input type="text" id="identifiant" name="identifiant" placeholder="Identifiant" />
				<input type="password" id="password" name="password" placeholder="Mot de passe" />
			</div>	
			<div>
        <button type="submit" id="btnIdentification">Valider</button>
    	</div>
		</form>
	</main>
	<?php if (isset($_SESSION['erreurs'])): ?>
		<?php foreach ($_SESSION['erreurs'] as $erreur): ?>
		<p><?php echo $erreur; ?></p>
		<?php endforeach; unset($_SESSION['erreurs']); ?>
	<?php endif; ?>
</body>
</html>