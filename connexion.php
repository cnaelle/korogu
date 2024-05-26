<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		<meta charset="utf-8">
		<meta name="robots" content="index, follow">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>
<?php
	$id="admin";
	$bonmdp="korogu";

	if(isset($_POST['nomUtilisateur']) && isset($_POST['mdp'])){
		if($id==$_POST['nomUtilisateur'] && $bonmdp==$_POST['mdp']){
			session_start();
			$_SESSION['nomUtilisateur']=$_POST['nomUtilisateur'];
			$_SESSION['mdp']=$_POST['mdp'];
			$_SESSION['statut']="Administrateur";

			header('Location: administration.php');
		}
		else{
			echo "Administrateur non reconnu";
			header('Location: identification.php');
		}
	}
	else{
		echo "Les variables du formulaire ne sont pas declarees.";
	}
?>
	</body>
</html>