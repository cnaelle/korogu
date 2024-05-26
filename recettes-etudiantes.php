<!DOCTYPE>
<html>
	<head>
		<title>Recettes étudiantes</title>
		<meta name="keywords" content="korogu, restauration, zelda, plats, recettes, etudiantes, prix"/>
		<meta charset="utf-8">
		<meta name="robots" content="index, follow">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>
		<br>
		<div>
			<form action="identification.php" id="connecter">
    			<input type="submit" value="Administrateur" class="btn btn-outline-secondary" />
    		</form>
		</div>
		<div class="logo">
			<img src="logo/logoco.png" alt="Logo korogu">
		</div>
		<div class="conteneur">
			<?php 
				include 'menu.php';
			?>
		</div>
		<h1>Découvrez nos recettes étudiantes !</h1>
		<div class="container ">
			<div class="row align-items-center">
				<div class="col-md text-center">
					<img src="legumes.png">
				</div>
				<div class="col-md text-center">
					<p>Chaque semaine, nous mettons à jour ce recueil de recettes avec des recettes spéciales étudiantes. L'objectif ? Vous faire découvrir des plats succulents et accessibles à tous : nos recettes sont simples à cuisiner et peu coûteuses. D'ailleurs, la plupart sont plutot rapides et pratiques à faire !</p>
					<h2>Partagez vos réalisations avec nous !</h2>
					<p>Chaque semaine aura lieu un concours sur Twitter et Instagram où vous serez invités à voter pour la meilleure recette étudiante parmi vos dernières réalisations. Bien sûr, korogu donnera aussi son avis en notant la rapidité, la simplicité et surtout la saveur de votre recette ! Par la suite, nous adapterons votre recette à notre manière et ajouterons votre nouveau plat à notre menu étudiant ! Nous vous informerons des prix à gagner en début de semaine et les votes auront lieu le week-end. Pour participer, suivez-nous sur nos réseaux sociaux tels que Twitter et Instagram. Nous posterons également le gagant ainsi que sa recette sur Facebook !</p>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-md">
					<h2>Recette 1 : </h2>
				</div>
				<div class="col-md">
					<a href="#top">Voir la recette</a>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-md">
					<h2>Recette 2 : </h2>
				</div>
				<div class="col-md">
					<a href="#top">Voir la recette</a>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-md">
					<h2>Recette 3 : </h2>
				</div>
				<div class="col-md">
					<a href="#top">Voir la recette</a>
				</div>
			</div>
		</div>
		<div id="scroll_to_top">
    		<a href="#top"><img src="flecheUp.png" alt="Retourner en haut" /></a>
		</div><br>
		<div id="contact">
				<h2>Suivez-nous </h2>
				<a href="#top" id="elmtsContact"><img src="contact/imgFb.png"></a>
				<a href="#top" id="elmtsContact"><img src="contact/imgInsta.png"></a>
				<a href="#top" id="elmtsContact"><img src="contact/imgTwitter.png"></a>
				<a href="#top" id="elmtsContact"><img src="contact/imgTel.png"></a>
				<a href="#top" id="elmtsContact"><img src="contact/imgEmail.png"></a>
		</div>
	</body>
</html>