<!-- Enoncé : 
Faire une page HTML permettant de donner à l'utilisateur :
son User Agent
son adresse ip
le nom du serveur -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 1';
    include 'header.php';
?>


<!-- Affichage du User Agent, de l'adresse IP et du nom du serveur.  -->

<p>Bonjour, votre User Agent est <strong><?= $_SERVER['HTTP_USER_AGENT']; ?></strong>,
votre adresse IP est <strong><?= $_SERVER['REMOTE_ADDR']; ?></strong>,
et le nom de votre serveur est <strong><?= $_SERVER['SERVER_NAME']; ?></strong>.</p>


<!-- Affichage des détails du tableau SERVER -->

<?php var_dump($_SERVER); ?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>