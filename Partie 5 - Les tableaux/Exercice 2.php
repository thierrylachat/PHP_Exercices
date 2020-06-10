<!-- Enoncé : avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 2';
    include 'header.php';
?>


<!-- Report du tableau months. -->

<?php 
    $months = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
?>    

<!-- Affichage de la troisième ligne du tableau soit l'index 2 du tableau. -->

<p> <?= $months[2] ;?> </p>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>