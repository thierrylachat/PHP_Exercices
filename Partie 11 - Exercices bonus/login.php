<!-- Enoncé :
Créer un formulaire de connexion dans une page login.php
A la validation du formulaire, créer une session utilisateur avec son login et un statut loggedIn.
Dans chaque page, si l'utilisateur est connecté, afficher la première lettre de son pseudo dans la barre de navigation. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'Me connecter';
include 'header.php';
?>

<!-- Création du formulaire de connexion. -->

<div class="container h-100 d-flex justify-content-center mt-4">
	<div class="m-4 col-8 card-login bg-secondary border border-dark">
		<form action="login.php" method="POST">
			<div class="p-3">

				<h2 class="h4 m-4">Me connecter</h2>
				<!-- Avatar. -->
				<img class="img-fluid" id="avatar" src="avatar.png" alt="Dessin d'avatar">
				<!-- Adresse mail. -->
				<div class="form-group p-1">
					<input class="form-control" type="text" name="login" placeholder="&#128100; Votre adresse email">
				</div>
				<!-- Mot de passe. -->
				<div class="form-group p-1">
					<input class="form-control" type="password" name="password"
						placeholder="&#128272; Votre mot de passe">
				</div>
				<div class="w-100 d-flex">
					<button class="mx-auto btn btn-outline-dark rounded-pill m-3 btn-login" type="submit">Me connecter</button>
				</div>
			</div>
		</form>
	</div>
</div>


<!-- Insertion du footer. -->

<?php include 'footer.php';?>