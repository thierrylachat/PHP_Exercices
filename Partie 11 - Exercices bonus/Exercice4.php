<!-- Enoncé : 
Créer un page administration, elle ne doit être accessible que pour un utilisateur connecté. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice4';
    include 'header.php';
?>


<?php

if (!isset($_SESSION['user'])) {
		// redirection si pas connecté.
		header('location: Exercice3.php');
		// stop la lecture du script.
		exit();
	}
?>
	<div class="container">
		<div class="w-100 p-3">
			<h1>Page d'administration</h1>
			<p>
				Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
			</p>
		</div>
	</div>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>