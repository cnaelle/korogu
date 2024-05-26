<!DOCTYPE html>
<html>
	<head>
		<title>Avis</title>
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
			$noteServices=$_POST['service'];
			$noteRepas=$_POST['noteEtoile'];
			$recommande=$_POST['recommande'];
			$suggestions=$_POST['suggestions'];

			try{
				$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

				$conn->setAttribute(PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_USE_BUFFERED_QUERY);

				$sth = $conn->prepare("INSERT INTO satisfaction(services, repas, recommande, suggestions) VALUES(:services,:repas,:recommande,:suggestions)");

					$sth->bindValue( ':services', $noteServices);
					$sth->bindValue( ':repas', $noteRepas);
					$sth->bindValue( ':recommande', $recommande);
					$sth->bindValue( ':suggestions', $suggestions);

					$sth->execute();
				echo'<p>Nous vous remercions pour votre avis !</p>';

				$afficher="SELECT * FROM satisfaction ORDER BY idSatisf DESC LIMIT 10";
				$listeAvis=$conn->query($afficher)->fetchAll(PDO::FETCH_ASSOC);

				
				$Repas="SELECT AVG(repas) as moyR FROM `satisfaction`;";
				$moyRepas=$conn->query($Repas)->fetchAll(PDO::FETCH_ASSOC);

				$Services="SELECT COUNT(services) moyS FROM `satisfaction` WHERE services='Oui';";
				$moyServices=$conn->query($Services)->fetchAll(PDO::FETCH_ASSOC);

				$Recommande="SELECT recommande, COUNT(recommande) AS tot_recommande FROM `satisfaction` GROUP BY recommande ORDER BY tot_recommande DESC LIMIT 1;";
				$valRecom=$conn->query($Recommande)->fetchAll(PDO::FETCH_ASSOC);
			}

			catch(PDOException $e){

				echo "erreur:" . $e->getMessage();
			}

		?>

		<h2>Nos derniers avis</h2>
		<table>
			<thead>
				<tr><th>Avis n°</th><th>Satisfait de notre service</th><th>Qualite du repas</th><th>Recommander korogu ?</th><th>Suggestions</th></tr>
			</thead>
			<tbody>
				<?php foreach ($listeAvis as $avis): ?>
					<tr><td><?php echo($avis['idSatisf']); ?></td>
						<td><?php echo($avis['services']); ?></td>
						<td><?php echo($avis['repas']); ?></td>
						<td><?php echo($avis['recommande']); ?></td>
						<td><?php echo($avis['suggestions']); ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table><br>
		<h2>En moyenne</h2>
		<?php foreach ($moyRepas as $line): ?>
			<?php echo '<p>Nos clients nous ont donné une note de '.($line['moyR']). ' sur 5.</p>'; ?>
		<?php endforeach; ?>
		<?php foreach ($moyServices as $line): ?>
			<?php echo '<p>'.($line['moyS']). ' de nos clients ont été satisfaits de nos services.</p>'; ?>
		<?php endforeach; ?>
		<?php foreach ($valRecom as $line): ?>
			<?php echo '<p>La majorité de nos clients a voté pour  "'.($line['recommande']).'" pour ce qui est de recommander notre bar (à savoir '.($line['tot_recommande']). ' avis.</p>'; ?>
		<?php endforeach; ?>
		<center><p>Retourner à la <a href="accueil.php">page principale</a></p></center>
	</body>
</html>