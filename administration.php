<?php
	session_start ();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Administration</title>
		<meta charset="utf-8">
		<meta name="robots" content="index, follow">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<style>
			th, td{
				border: 1px solid;
			}
		</style>
	</head>
	<body>
		<div class="logo">
			<img align=center src="logo/logoco.png">
		</div>
		<?php
			$servername='localhost';
			$dbname='korogu';
			$username='root';
			$password='';
			try{
				$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

				$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

				$afficher="SELECT * FROM satisfaction ORDER BY idSatisf";

				$listeAvis=$conn->query($afficher)->fetchAll(PDO::FETCH_ASSOC);
			}
			catch(PDOException $e){

				echo "erreur:" . $e->getMessage();
			}
			echo 'Vous êtes connecté en tant que <span>'.$_SESSION['nomUtilisateur'].'</span>';
		?>

		<h2>Ensemble des avis</h2>
		<table>
			<thead>
				<tr><th>Avis n°</th><th>Satisfait de notre service</th><th>Qualite du repas</th><th>Recommander korogu ?</th><th>Suggestions</th><th>Supprimer</th></tr>
			</thead>
			<tbody>
				<?php foreach ($listeAvis as $avis): ?>
					<tr><td><?php echo($avis['idSatisf']); ?></td>
						<td><?php echo($avis['services']); ?></td>
						<td><?php echo($avis['repas']); ?></td>
						<td><?php echo($avis['recommande']); ?></td>
						<td><?php echo($avis['suggestions']); ?></td>
						<td><a href="delAvis.php?id=<?= $avis['idSatisf']; ?>">Supprimer</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<br>
		<center><a href="logout.php">Déconnexion</a></center>
	</body>
</html>