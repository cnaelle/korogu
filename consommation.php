<!DOCTYPE>
<html>
	<head>
		<title>Carte - korogu</title>
		<meta name="keywords" content="korogu, restauration, nourriture saine, zelda, plats, desserts, boissons, cocktails, acheter, réserver"/>
		<meta charset="utf-8">
		<meta name="robots" content="index, follow">
		<style>
			th, td{
				border: 1px solid;

			}
		</style>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
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
		<h1>Ce que nous vous proposons chez korogu..</h1>

				<table class="table">
				<h2 id="plats_sales">Nos plats salés</h2>
				<tr>
					<th>&nbsp;</th>
					<th>Nom</th>
					<th>Description</th>
					<th>Prix</th>
				</tr>
				<tr>
					<td><img src='imageproduits/ragoutviande.png' alt="Ragoût de viande"></td>
					<td>Ragoût de viande</td>
					<td>Lait, blé, beurre, viande</td>
					<td>6,50€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/ragoutpalourdes.png' alt="Ragoût de palourdes"></td>
					<td>Ragoût de palourdes</td>
					<td>Lait, blé, beurre, palourdes</td>
					<td>6,50€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/ragoutcitrouille.png' alt="Ragoût de citrouille"></td>
					<td>Ragoût de citrouille</td>
					<td>Lait, blé, beurre, citrouille</td>
					<td>6,00€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/risottosaumon.png' alt="Risotto au saumon"></td>
					<td>Risotto au saumon</td>
					<td>Riz, beurre, sel, saumon</td>
					<td>7,50€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/risottochampis.png' alt="Risotto aux champis"></td>
					<td>Risotto aux champis</td>
					<td>Riz, beurre, sel, champis</td>
					<td>7,00€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/risottocrabe.png' alt="Risotto au crabe"></td>
					<td>Risotto au crabe</td>
					<td>Riz, beurre, sel, crabe</td>
					<td>7,50€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/veloutechampis.png' alt="Velouté de champis"></td>
					<td>Velouté de champis</td>
					<td>Lait, sel, légumes, champis</td>
					<td>6,00€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/bouillonlegumes.png' alt="Bouillon de légumes (veggie)"></td>
					<td>Bouillon de légumes (veggie)</td>
					<td>Lait, sel, légumes</td>
					<td>6,00€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/velouteviande.png' alt="Velouté de viande"></td>
					<td>Velouté de viande</td>
					<td>Lait, sel, légumes, viande</td>
					<td>6,50€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/rizcurry.png' alt="Riz au curry"></td>
					<td>Riz au curry</td>
					<td>Riz, curry</td>
					<td>7,50€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/rizfritoeufs.png' alt="Riz frit aux œufs"></td>
					<td>Riz frit aux œufs</td>
					<td>Riz, œufs</td>
					<td>7,00€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/bouletteslegumes.png' alt="6x Boulettes aux légumes (veggie)"></td>
					<td>6x Boulettes aux légumes (veggie)</td>
					<td>Riz, légumes</td>
					<td>7,00€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/rizviande.png' alt="Riz a la viande"></td>
					<td>Riz a la viande</td>
					<td>Riz, viande</td>
					<td>7,50€</td>
				</tr></table><br>

				<table class="table">
				<h2 id="plats_sucres">Nos plats sucrés</h2>
				<tr>
					<th>&nbsp;</th>
					<th>Nom</th>
					<th>Description</th>
					<th>Prix</th>
				</tr>
				<tr>
					<td><img src='imageproduits/gateaufruits.png' alt="Gâteau aux fruits"></td>
					<td>Gâteau aux fruits</td>
					<td>Fruits, blé, sucre de canne, œufs, crème</td>
					<td>2,50€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/gateaucarotte.png' alt="Gâteau a la carotte"></td>
					<td>Gâteau a la carotte</td>
					<td>Carotte, blé, sucre de canne, œufs, beurre</td>
					<td>2,50€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/gateaunoix.png' alt="Gâteau aux noix"></td>
					<td>Gâteau aux noix</td>
					<td>Noix, blé, sucre de canne, œufs, beurre</td>
					<td>2,50€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/monstercake.png' alt="Monster cake"></td>
					<td>Monster cake</td>
					<td>Chocolat, framboise, blé, sucre de canne, œufs, beurre</td>
					<td>3,00€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/gateaucitrouille.png' alt="Gâteau a la citrouille"></td>
					<td>Gâteau a la citrouille</td>
					<td>Citrouille, blé, sucre de canne, œufs, beurre</td>
					<td>2,50€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/tarteoeufs.png' alt="Tarte aux œufs"></td>
					<td>Tarte aux œufs</td>
					<td>Œuf, blé, sucre de canne, beurre</td>
					<td>2,50€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/tartepommes.png' alt="Tarte aux pommes"></td>
					<td>Tarte aux pommes</td>
					<td>Pomme, blé, sucre de canne, beurre</td>
					<td>2,50€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/crepemiel.png' alt="Crêpe au miel"></td>
					<td>Crêpe au miel</td>
					<td>Miel, lait, œufs, blé, sucre de canne</td>
					<td>2,50€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/crepe.png' alt="Crêpe"></td>
					<td>Crêpe</td>
					<td>Lait, œufs, blé, sucre de canne</td>
					<td>2,00€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/crepebaies.png' alt="Crêpe aux baies"></td>
					<td>Crêpe aux baies</td>
					<td>Baies, lait, œufs, blé, sucre de canne</td>
					<td>2,50€</td>
				</tr></table><br>

				<table class="table">
					<h2 id="boissons">Nos elixirs (ou cocktails)</h2>
				<tr>
					<th>&nbsp;</th>
					<th>Nom</th>
					<th>Description</th>
					<th>Prix</th>
				</tr>
				<tr>
					<td><img src='imageproduits/fairytonic.png' alt="Fairy Tonic"></td>
					<td>Fairy Tonic</td>
					<td>Boisson gazeuse goût fraise</td>
					<td>2,00€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/spicyelixir.png' alt="Spicy Elixir"></td>
					<td>Spicy Elixir</td>
					<td>Rhum pimenté</td>
					<td>3,00€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/enduringelixir.png' alt="Enduring Elixir"></td>
					<td>Enduring Elixir</td>
					<td>Rhum aux herbes</td>
					<td>3,00€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/mightyelixir.png' alt="Mighty Elixir"></td>
					<td>Mighty Elixir</td>
					<td>Rhum exotique</td>
					<td>3,00€</td>
				</tr>
				<tr>
					<td><img src='imageproduits/chillyelixir.png' alt="Chilly Elixir"></td>
					<td>Chilly Elixir</td>
					<td>Rhum menthe</td>
					<td>3,00€</td>
				</tr></table><br>
		<div id="scroll_to_top">
    		<a href="#top"><img src="flecheUp.png" alt="Retourner en haut" /></a>
		</div>
	</body>
</html>
