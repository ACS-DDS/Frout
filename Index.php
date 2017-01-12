<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Identification</title>
</head>
<body>

	<header>
		<h1>Nodex</h1>
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
<?php if(isset($_SESSION["erreur"])){ ?>
	<p> <?php echo $_SESSION["erreur"]; ?> </p>
 <?php } 
	unset($_SESSION['erreur']);
 ?>
	</main>
</body>
</html>