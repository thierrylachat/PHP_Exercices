<!-- Enoncé :
Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'Exercice 4';
include 'header.php';
?>


<!-- Récupération des données du cookie. -->

<?php
$login = $_COOKIE['login'] ?? '';
$password = $_COOKIE['password'] ?? '';
?>


<!-- Affichage des données du cookie. -->

<p>Votre identifiant est : <strong><?=$login ;?></strong> et votre de mot de passe est <strong><?= $password ;?></strong>.</p>


<!-- Insertion du footer. -->

<?php include 'footer.php';?>