<!-- Enoncé : avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 4';
    include 'header.php';
?>


<!-- Report du tableau months. -->

<?php 
    $months = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
    $arrlength = count($months);
?>    

<!-- Affichage de l'index 3 du tableau. -->

<p> <?= $months[3] ;?> </p>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>