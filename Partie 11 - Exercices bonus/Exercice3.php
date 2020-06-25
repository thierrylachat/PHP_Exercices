<!-- Enoncé : 
Créer un formulaire de connexion dans une page login.php
A la validation du formulaire, créer une session utilisateur avec son login et un statut loggedIn.
Dans chaque page, si l'utilisateur est connecté, afficher la première lettre de son pseudo dans la barre de navigation. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice3';
    include 'header.php';
?>

	<div class="container">
		<div class="p-3 w-100">
			<form action="Exercice3.php" method="POST">
				<fieldset class="p-3 border border-dark">
					<legend>Me connecter</legend>
					<div class="form-group">
						<input class="form-control" type="text" name="login" placeholder="Votre adresse email">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="password" placeholder="Votre mot de passe">
					</div>
					<div class="w-100 d-flex">
						<button class="mx-auto btn btn-outline-dark rounded-pill" type="submit">Me connecter</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>