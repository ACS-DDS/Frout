<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Identification</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
	<main>
		<center><img class="logo" src="http://quentinp.dijon.codeur.online/nodexwood/img/logocolor.svg"></center>
			<form action="login.php" method="post">
				<p class="login">Bienvenue, veuillez vous <span>connecter</span></p>
					<center><div>
						<input type="text" id="identifiant" name="identifiant" placeholder="Identifiant" />
						<input type="password" id="password" name="password" placeholder="Mot de passe" />
					</div></center>
				<div>
	        		<center><button class="bouton" type="submit" id="btnIdentification">Valider</button></center>
	    		</div>
			</form>
<?php if(isset($_SESSION["erreur"])){ ?>
	<p class="erreur_identifiants"> <?php echo $_SESSION["erreur"]; ?> </p>
 <?php } 
	unset($_SESSION['erreur']);
 ?>
	</main>
	<footer>
		<center><div class="informations_footer">
			<p>NODEX - 14, rue du Général de Gaule - Z.I. Le Pré vert - 39500 Moirans-en-Montagne<br>
			Tél: 03.80.45.78.66<br>
			Copyright © NODEX-Industry</p>
		</div></center>
	</footer>
</body>
</html>