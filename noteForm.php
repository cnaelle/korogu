<!DOCTYPE html>
<html>
	<head>
		<title>Résultats du quizz</title>
		<meta charset="utf-8">
		<meta name="robots" content="index, follow">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>
		<div class="logo">
			<img align=center src="logo/logoco.png"></div>
			<div>
			<?php
				$compteur=0;
				if($_POST['nombrenoix']==900){
					$compteur++;
				}
				if($_POST['foret']=="hyrule"){
					$compteur++;				
				}
				if(isset($_POST['action'])=="fleurjaune"){
					$compteur++;
				}
				if(isset($_POST['action'])=="glace"){
					$compteur++;
				}
				if(isset($_POST['action'])=="lueur"){
					$compteur++;
				}
				if(isset($_POST['action'])=="bouquet"){
					$compteur++;
				}
				if(isset($_POST["epreuves_korogu"])=="p"){
					$compteur++;
				}
				echo '<h2>Votre avez obtenu un score de ' .$compteur. ' sur 7.</h2>';
			?>
		</div>
		<p>Retourner au <a href="quizz.php">quizz</a></p>
	</body>
</html>