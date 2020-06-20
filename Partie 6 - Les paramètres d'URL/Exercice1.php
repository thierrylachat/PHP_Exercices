<!-- Enoncé :
Faire une page index.php.
Tester sur cette page que tous les paramètres de cette URL existent et les afficher : index.php?lastname=Nemare&firstname=Jean-->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'Exercice1';
include 'header.php';
?>


<!-- Test et affichage des paramètres name et firstname de l'URL. -->

<p> <?= $_GET['lastname'] ;?></p>
<p> <?= $_GET["firstname"] ;?></p>


<!-- Insertion du footer. -->

<?php include 'footer.php';?>