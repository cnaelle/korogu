<!DOCTYPE>
<html>
	<head>
		<title>korogu</title>
		<meta name="keywords" content="korogu, restauration, nourriture saine, zelda, plats, suede, acheter, réserver"/>
		<meta name="description" content="Retrouvez de délicieux plats et recettes inspirés de ceux du jeu Zelda BOTW."/>
		<meta charset="utf-8">
		<meta name="robots" content="index, follow">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<script language="javascript">
			function changerImage(){
				if (document.getElementById("noteEtoile").value==1){
					document.getElementById("imageEtoile").src="etoile/1Etoile.png";
				}
				if (document.getElementById("noteEtoile").value==2){
					document.getElementById("imageEtoile").src="etoile/2Etoile.png";
				}
				if (document.getElementById("noteEtoile").value==3){
					document.getElementById("imageEtoile").src="etoile/3Etoile.png";
				}
				if (document.getElementById("noteEtoile").value==4){
					document.getElementById("imageEtoile").src="etoile/4Etoile.png";
				}
				if (document.getElementById("noteEtoile").value==5){
					document.getElementById("imageEtoile").src="etoile/5Etoile.png";
				}
				document.getElementById("validEtoile").disabled=true;
			}
		</script>
		<script type="application/ld+json">
			{	
				"@context": "http://koroguhome/accueil.php",
  				"@type": "LocalBusiness",
				"address": {
					"@type": "PostalAdress",
					"addressLocality": "Laxå, Suède",
					"postalCode":"69530",
					"streetAddress": "58.942280, 14, 503792, 695 30"
				},
				"telephone":"+46 000 000 000"
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
		<img align=center src="logo/logoco.png" alt="Logo korogu"></div>
		<?php 
			include 'menu.php';
		?>
		<h1>Bienvenue à korogu ! Ici vous retrouverez de délicieux <a class="liensInt" href="consommation.php">plats</a> venant tout droit d’Hyrule. La légende raconte qu’au moment où vous franchirez le pas de la porte, vous serez transportés dans un autre univers. L’environnement qui vous entourera vous rendra mélancolique à propos d’un endroit que vous n’avez jamais connu… Venez faire le plein d’énergie et d’inspiration à <a class="liensInt" href="notre-histoire.php">korogu</a>.</h1> <br><hr>
		<div class="container ">
			<div class="row align-items-center">
				<div class="col-md" id="backOpen">
					<img src="open.png" id="open">
				</div>
				<div id="horaires" class="col-md text-center"><h2>Nos horaires</h2>
					<ul><li>Le lundi de <span>11h à 22h</span> </li>
					<li>Le mardi de <span>11h à 22h</span> </li>
					<li>Le mercredi de <span>11h à 22h</span> </li>
					<li>Le jeudi de <span>11h à 22h</span> </li>
					<li>Le vendredi de <span>11h à 22h</span> </li>
					<li>Le samedi de <span>18h à 23h</span> </li>
					<li>Le dimanche de <span>18h à 23h</span> </li></ul>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-md">
					<h2>Etes-vous deja venu chez nous ? Donnez-nous votre avis !</h2>
					<div>
						<form action="formsatisfaction.php" method="post">
							<div class="form-group">
								<div class="form-check">
									<label for="service" name="service" class="form-check-label"><strong>Nos services vous ont-ils satisfaits ?</strong></label><br>
									<input type="radio" id="servOui" value="Oui" name="service" class="form-check-input">
									<label for="servOui">Oui</label>
								</div>
								<div class="form-check">
									<input type="radio" id="servNon"  value="Non" name="service" class="form-check-input">
									<label for="servNon">Non</label><br><br>
								</div>
							</div>
							<div class="form-outline w-50">
								<label for="repas" name="repas" class="form-check-label"><strong>Noter la qualité du repas :</strong></label>
								<div>
									<img src="etoile/1Etoile.png" id="imageEtoile" alt="Avis étoiles" style="padding-bottom:10px;"></div>
								<div>
									<input type="number" class="form-control" id="noteEtoile" name="noteEtoile" min="0" max="5">
									<input type="button" class="btn btn-outline-secondary" value="Valider votre selection" onClick="changerImage()" id="validEtoile">
								</div><br>
							</div>
							<div class="form-outline w-50">
								<label for="recommande" name="recommande" class="form-check-label"><strong>Recommanderiez-vous korogu à vos proches ?</strong></label>
								<select id="foret" class="form-control" name="recommande">
									<option value="Oui">Oui</option>
									<option value="Probablement">Probablement</option>
									<option value="Probablement pas">Probablement pas</option>
									<option value="Non">Non</option>
								</select><br>
							</div>
							<div>
								<label for="suggestions" class="form-check-label"><strong>Auriez-vous des suggestions a nous faire ?</strong></label><br>
								<textarea id="suggestions" name="suggestions" class="form-control w-50"></textarea><br><br>
							</div>
							<div class="text-center">
								<input type="submit" value="Envoyer" class="btn btn-outline-success">
							</div>
						</form>
					</div>
				</div>
					<div class="col-md text-center" id="imgSatisf">
						<img src="appreciation.png">
					</div>
			</div>
				<div class="row align-items-center">
					<div class="col-md">
				<div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d514.5884908746593!2d14.502518336003792!3d58.942256587030535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465b879f5422ccb3%3A0xc3c28d051056b2e9!2skorogu!5e0!3m2!1sfr!2sfr!4v1675355587453!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
					</div>
					<div class="col-md">
						<div id="horaires" class="col-md text-center"><h2>Où nous trouver ?</h2>
						<ul><li><span>Adresse :</span> 58.942280, 14, 503792, 695 30 Laxå, Suède</li>
						<li><span>Téléphone :</span> +46 000 000 000</li>
						<li><span>Comment y accèder ? </span>Notre restaurant se trouve au beau milieu d'une forêt, garez-vous sur la route Nyborgsvagen et vous trouverez les indications nécessaires. Vous n'aurez qu'à suivre nos panneaux pour accèder à notre restaurant. Cependant le drive se trouve sur le côté de la drive et est plus simple d'accès.</li></ul>
						</div>
					</div>
				</div>
			</div><br>
				<div id="scroll_to_top">
    				<a href="#top"><img src="flecheUp.png" alt="Retourner en haut" /></a>
				</div><br>
			<div id="contact">
				<h2>Nous contacter</h2>
				<a href="#top" id="elmtsContact"><img src="contact/imgFb.png"></a>
				<a href="#top" id="elmtsContact"><img src="contact/imgInsta.png"></a>
				<a href="#top" id="elmtsContact"><img src="contact/imgTwitter.png"></a>
				<a href="#top" id="elmtsContact"><img src="contact/imgTel.png"></a>
				<a href="#top" id="elmtsContact"><img src="contact/imgEmail.png"></a>
			</div>
	</body>
</html>