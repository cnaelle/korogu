<!DOCTYPE html>
<html>
	<head>
		<title>Identification</title>
		<meta charset="utf-8">
		<meta name="robots" content="index, follow">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>
		<div class="logo">
			<img align=center src="logo/logoco.png">
		</div>
		<?php
			include 'menu.php';
		?>
		<br>
		<div>
			<form action="connexion.php" method="post" id="formConnexion">
				<div>
					<label for="nomUtilisateur" class="form-check-label">Nom d'utilisateur :</label><br>
					<input type="text" name="nomUtilisateur" class="form-control w-25"><br><br>
				</div>
				<div>
					<label for="mdp" class="form-check-label">Mot de passe :</label><br>
					<input type="password" name="mdp" class="form-control w-25"><br><br>
				</div>
				<div>
					<input type='submit' id='connexion' value='Connexion' class="btn btn-outline-secondary">
				</div>
			</form>
		</div>
	</body>
</html>