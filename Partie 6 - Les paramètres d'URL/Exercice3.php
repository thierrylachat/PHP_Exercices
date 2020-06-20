<!-- Enoncé : faire une page index.php.
Tester sur cette page que tous les paramètres de cette URL existent et les afficher : index.php?startDate=2/05/2016&endDate=27/11/2016 -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'Exercice3';
include 'header.php';
?>


<!-- Test et affichage des paramètres name et firstname de l'URL. -->

<p> <?= $_GET["startDate"] ;?> </p>
<p> <?= $_GET["endDate"] ;?> </p>


<!-- Insertion du footer. -->

<?php include 'footer.php';?>