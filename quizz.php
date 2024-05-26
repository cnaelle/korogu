<!DOCTYPE>
<html>
	<head>
		<title>Quizz - korogu</title>
		<meta name="keywords" content="korogu, restauration, zelda, plats, noix, questions"/>
		<meta charset="utf-8">
		<meta name="robots" content="index, follow">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="style.css">
		<script language="javascript">
			function validation(){
				var val=confirm('Souhaitez-vous vraiment enregistrer votre score sous le pseudo de '+document.getElementById('pseudo').value+' ?');
				if (val==false){
					document.getElementById('pseudo').value='';
				}
				else{
					document.getElementById('boutonvalider').disabled=true;
					document.getElementById('pseudo').disabled=true;
				}
			}

			function ajouter(objet) {
			document.getElementById('text').value+=objet.value;
			document.getElementById('text').value+='';
			objet.disabled=true;
			if(document.getElementById('text').value==' la foret des korogus'){
				document.getElementById('text').value='La Forêt des Korogus'
				alert('Bonne réponse !');
				}
			}

			function raz(){
				document.getElementById('text').value="";
				document.getElementById('btn1').disabled=false;
				document.getElementById('btn2').disabled=false;
				document.getElementById('btn3').disabled=false;
				document.getElementById('btn4').disabled=false;
				document.getElementById('btn5').disabled=false;
				document.getElementById('btn6').disabled=false;
			}

			function calculScore(){
				var compteur=0;
				if(document.getElementById('nombrenoix').value==900){
					compteur++;
				}
				if(document.getElementById('foret').selectedIndex==1){
					compteur++;				
				}
				if(document.getElementById('fleurjaune').checked){
					compteur++;
				}
				if(document.getElementById('glace').checked){
					compteur++;
				}
				if(document.getElementById('lueur').checked){
					compteur++;
				}
				if(document.getElementById('bouquet').checked){
					compteur++;
				}
				if(document.getElementById('p').checked && !document.getElementById('n').checked){
					compteur++;
				}
				alert('Votre avez obtenu un score de '+compteur+' sur 7');
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
		<img src="logo/logoco.png"></div>
		<div class="conteneur">
		<?php 
			include 'menu.php';
		?>
		</div>
		<h1>Prêt pour notre quizz sur les korogus ?</h1>
		<div class="container ">
			<div class="row align-items-end">
				<div class="col-md">
					<form action="noteForm.php" method="post">
					<div class="form-outline w-25">
						<label for="pseudo">Pseudo :</label>
						<input type='text' id="pseudo" class="form-control">
						<input type='button' id='boutonvalider' value='Valider' onClick='validation()' class="btn btn-outline-secondary">
					</div>
				<br>
				<fieldset>
					<legend>Notre quizz</legend>
						<div class="form-outline w-50">
							<label for="nombrenoix"><strong>Dans Zelda BOTW, combien de noix Link doit-il trouver ?</strong></label>
							<input type="number" class="form-control" id="nombrenoix" name="nombrenoix">
						</div>
							<br>
						<div class="form-outline w-50">
							<label for="foret"><strong>Quelle est la plus grande forêt dans Zelda BOTW ?</strong></label>
							<select id="foret" name="foret" class="form-control">
								<option value="geant">Forêt du Géant</option>
								<option value="hyrule">Grande Forêt d'Hyrule</option>
								<option value="firone">Forêt de Firone</option>
								<option value="dalte">Forêt de Dalite</option>
							</select>
						</div>
				</div>
					<div class="col-md text-center">
						<img src="imgQuizz.png">
					</div>
			</div>
				<div class="row">
					<div class="col-md">
						<br>
						<div class="form-group">
							<label for="action"><strong>Link peut trouver des noix :</strong></label></div>
						<div class="form-check">
							<input type="checkbox" id="octofourre" name="action" class="form-check-input"> 
							<label for="octofourre" class="form-check-label">en tuant un octofourré</label></div>
						<div class="form-check">
							<input type="checkbox" id="fleurjaune" name="action" class="form-check-input">
							<label for="fleurjaune" class="form-check-label">en marchant sur une fleur jaune jusqu'à ce qu'elle devienne blanche</label></div>
						<div class="form-check">
							<input type="checkbox" id="glace" name="action" class="form-check-input">
							<label for="glace" class="form-check-label">en faisant fondre un bloc de glace</label></div>
						<div class="form-check">
							<input type="checkbox" id="korogu" name="action" class="form-check-input">
							<label for="korogu" class="form-check-label">en frappant un korogu</label></div>
						<div class="form-check">
							<input type="checkbox" id="lueur" name="action" class="form-check-input">
							<label for="lueur" class="form-check-label">en examinant une lueur brillante bougeant dans l'herbe</label></div>
						<div class="form-check">
							<input type="checkbox" id="bouquet" name="action" class="form-check-input">
							<label for="bouquet" class="form-check-label">en marchant sur 5 bouquets de fleurs roses</label></div>
						<br>
						<div class="form-group">
							<label for="epreuves_korogu"><strong>Comment s'appelle le korogu qui donne la mission "Les épreuves korogus"?</strong></label></div>
						<div class="form-check">
							<input type="radio" id="p" value="papistus" name="epreuves_korogu" class="form-check-input">
							<label for="p">Papistus</label></div>
						<div class="form-check">
							<input type="radio" id="n" value="noia" name="epreuves_korogu" class="form-check-input">
							<label for="n">Noïa</label>
						</div>
						<div class="form-group">
							<p><strong>Vous avez une petite histoire à nous raconter ?</strong></p>
							<textarea name="histoire" placeholder="Dites-nous tout !" class="form-control w-50"></textarea>
						</div>
							<br>
							<button type="submit" onClick='calculScore()' class="btn btn-outline-success">Envoyer</button>
							<br>
							<br>
					</div>
					<div class="col-md text-center">
							<div class="form-outline w-50" id="bonus">
								<br>
								<label for="foretk"><strong>Question bonus : Dans quelle forêt trouve-t-on les korogus ?</strong> (Indice : 4 mots)</label>
								<input type="button" id="btn1" class="btn btn-secondary btn-lg" onClick='ajouter(this)' value=' foret'>
								<input type="button" id="btn2" class="btn btn-secondary btn-lg" onClick='ajouter(this)' value=' korogus'>
								<input type="button" id="btn3" class="btn btn-secondary btn-lg" onClick='ajouter(this)' value=' des'>
								<input type="button" id="btn4" class="btn btn-secondary btn-lg" onClick='ajouter(this)' value=' mojo'>
								<input type="button" id="btn5" class="btn btn-secondary btn-lg" onClick='ajouter(this)' value=' la'>
								<input type="button" id="btn6" class="btn btn-secondary btn-lg" onClick='ajouter(this)' value=' arbre'><br>
								<input type='text' id='text' class='form-control' size='60' readonly='true'><br>
								<input type='button' value='Recommencer' onClick="raz()" class="btn btn-outline-secondary"></div>
							</div>
						</fieldset>
					</form>
					</div>
				<br>
			<div id="scroll_to_top">
    		<a href="#top"><img src="flecheUp.png" alt="Retourner en haut" /></a>
		</div>

	</body>
</html>