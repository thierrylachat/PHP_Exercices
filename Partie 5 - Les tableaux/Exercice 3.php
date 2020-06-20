<!-- Enoncé : avec le tableau de l'exercice , afficher la valeur de l'index 5. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 3';
    include 'header.php';
?>


<!-- Report du tableau months. -->

<?php 
    $months = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
?>    

<!-- Affichage de l'index 5 du tableau. -->

<p>La valeur de l'index 5 est <strong><?= $months[5] ;?></strong>.</p>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>