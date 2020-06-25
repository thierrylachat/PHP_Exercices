<!-- Enoncé :
Dans une page user.php, vérifier que le cookie utilisateur a bien été déposé et afficher les données de l'utilisateur.
La date de naissance doit être affichée en français -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'User';
include 'header.php';
?>


<?php
// Vérification de la présence du cookie.
if (isset($_COOKIE['user'])) {

    // Création du tableau avec les cookies data user.
    $user = unserialize($_COOKIE['user']);
	?>
	
	<!-- Création du container pour le stockage de données. -->
	<div class="container d-flex justify-content-center text-center">
		<div class="w-75 p-4">
			<h1 class="h4 p-4 m-4 text-center">Base de données du cookie créé.</h1>
			<div class="p-3 rounded border border-dark">

			<?php
			// Affichage du tableau.
				foreach ($user as $key => $value) {
					// Condition pour la civilité.
					if ($key == 'civility') {
						// Si la civilité équivaut à 1 on affiche monsieur sinon on affiche madame.
						$value = $value == 1 ? 'Monsieur' : 'Madame';
					}
					?> <p> <?=$value;?> </p> <?php
				}
				?>
			</div>
		</div>
	</div>

<?php
} else {
    ?>
	<p class="text-danger text-center m-4">Aucun utilisateur n'est inscrit.</p>
	<div class="text-center">
		<a class="btn btn-dark text-center" href="inscription.php">Retour à l'accueil</a>
	</div>
<?php
}

// Insertion du footer.
include 'footer.php';
?>