<!-- Enoncé : faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?week=12 -->

<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice5';
    include 'header.php';
?>


<!-- Test et affichage du paramètre week de l'URL. -->

<p> <?= $_GET["week"]; ?></p>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>