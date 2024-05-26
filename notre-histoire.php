<!DOCTYPE>
<html>
	<head>
		<title>Notre histoire - korogu</title>
		<meta name="keywords" content="korogu, restauration, histoire, zelda, plats, recettes"/>
		<meta charset="utf-8">
		<meta name="robots" content="index, follow">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<script language="javascript">
			function deplace(dx,dy){
				document.getElementById('noixK').style.top=parseInt(document.getElementById("noixK").style.top)+dy+'px';
				document.getElementById('noixK').style.left=parseInt(document.getElementById('noixK').style.left)+dx+'px';
			}

			function verifier(){
				if(parseInt(document.getElementById('noixK').style.top)<1090 && parseInt(document.getElementById('noixK').style.top)>1030 &&
					parseInt(document.getElementById('noixK').style.left)<475 && parseInt(document.getElementById('noixK').style.left)>415){
					alert("Bravo, maintenant le Korogu peut donner a Link sa noix !");
					document.getElementById('noixK').style.top=1060+'px';
					document.getElementById('noixK').style.left=445+'px';
					document.getElementById('up').disabled=true;
					document.getElementById('down').disabled=true;
					document.getElementById('left').disabled=true;
					document.getElementById('right').disabled=true;
					document.getElementById('testNoix').disabled=true;
				}
				else{
					alert("Tu veux un indice ? Place la noix dans la main droite du Korogu !");
					document.getElementById("noixK").style.top=1000+'px';
					document.getElementById("noixK").style.left=300+'px';
				}
			}
		</script>
	</head>
	<body>
		<br>
		<div>
			<form action="identification.php" id="connecter">
    			<input type="submit" value="Administrateur" class="btn btn-outline-secondary" />
    		</form>
		</div>
		<div class="logo">
		<img src="logo/logoco.png" alt="Logo korogu"></div>
		<div class="conteneur">
		<?php 
			include 'menu.php';
		?>
		</div>
		<h2>C'est quoi korogu ?</h2>
		<p>korogu est un bar qui a été concu pour regrouper les fans de Zelda qui ont toujours rêvé de goûter les délicieuses <a class="liensInt" href="consommation.php">recettes</a> que l'on retrouve dans le jeu. Nous les avons adapté avec d'excellents ingrédients locaux.</p>
		

		<div class="container ">
			<div class="row align-items-center">
				<div class="col-md text-center">
		<h2>Notre histoire</h2>
		<p>Il était une fois l'enfant du vent. Il était le meilleur ami du vent et lui parlait quand il se sentait seul. J' ai décidé d'ouvrir ce bar en souvenir de l'enfant du vent qui incarnait parfaitement les qualités et capacités d'un petit korogu.<br>
		Dans le jeu Zelda, les korogus sont de petites créatures joyeuses et sympathiques qui sont si légères qu'elles peuvent voler à l'aide d'une pousse d'arbre. On les appelle aussi les enfants de la forêt...<br> N'hésitez pas à me demander plus d'informations sur l'enfant du vent, je serai ravie de vous raconter toutes ses aventures ! </p>
				</div>
				<div class="col-md text-center">
					<img src="logo/logortRed.png" alt="Logo korogu transparent">
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-md"></div>
				<div class="col-md text-center">
					<input type="button" id="up" value="&uarr;" onClick="deplace(0,-5)" class="btn btn-outline-secondary">
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-md"></div>
				<div class="col-md text-center">
					<input type="button" id="left" value="&larr;" onClick="deplace(-5,0)" class="btn btn-outline-secondary">
					<input type="button" id="down" value="&darr;" onClick="deplace(0,5)" class="btn btn-outline-secondary">
					<input type="button" id="right" value="&rarr;" onClick="deplace(5,0)" class="btn btn-outline-secondary">
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-md"></div>
				<div class="col-md text-center">
					<br>
					<input type="button" id="testNoix" value="Donner la noix a Link" onClick="verifier()" class="btn btn-outline-secondary">
				</div>
			</div>
		</div>
		<div><img src="NoixKorogu.webp" id="noixK" style="position:absolute; height: 96px; width: 96px; top: 1000px; left: 300px"></div><br>
		<center><a href="quizz.php"><input type="button" value="Faire notre quizz sur les korogus" class="btn btn-outline-success"></a></center><br>
		<figcaption>A très vite ! (Retrouver <a class="liensInt" href="accueil.php">nos horaires</a>)</figcaption><br>
		<div id="contact">
				<h2>Nous contacter</h2>
				<a href="#top" id="elmtsContact"><img src="contact/imgFb.png"></a>
				<a href="#top" id="elmtsContact"><img src="contact/imgInsta.png"></a>
				<a href="#top" id="elmtsContact"><img src="contact/imgTwitter.png"></a>
				<a href="#top" id="elmtsContact"><img src="contact/imgTel.png"></a>
				<a href="#top" id="elmtsContact"><img src="contact/imgEmail.png"></a>
		</div>
		<div id="scroll_to_top">
    		<a href="#top"><img src="flecheUp.png" alt="Retourner en haut" /></a>
		</div><br>
	</body>
</html>