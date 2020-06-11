<!-- Enoncé : avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 8';
    include 'header.php';
?>


<!-- Création du tableau months. -->

<?php 
    $months = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
    $arrlength = count($months)-1;
?>  


<!-- Utilisation d'une boucle For pour affichage du tableau. -->
<?php for ($x = 0; $x <= $arrlength; $x++) {
        echo $months[$x] .'<br />';
        } 
?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>