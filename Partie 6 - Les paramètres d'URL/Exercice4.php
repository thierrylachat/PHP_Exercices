<!-- Enoncé : Faire une page index.php.
Tester sur cette page que tous les paramètres de cette URL existent et les afficher : index.php?language=PHP&server=LAMP -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'Exercice4';
include 'header.php';
?>


<!-- Test et affichage des paramètres name et firstname de l'URL. -->

<p> <?= $_GET["language"] ;?> </p>
<p> <?= $_GET["server"] ;?> </p>


<!-- Insertion du footer. -->

<?php include 'footer.php';?>