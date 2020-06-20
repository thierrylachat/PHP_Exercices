<!-- Enoncé :
Créer un tableau months et l'initialiser avec les valeurs suivantes :
janvier
février
mars
avril
mai
juin
juillet
aout
septembre
octobre
novembre
décembre -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'Exercice 1';
include 'header.php';
?>


<!-- Création du tableau months de 2 manières. -->

<?php
$months = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
$months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
?>


<!-- Affichage du tableau months de 2 manières. -->

<?php foreach ($months as $element) {
    echo $element . '<br>';
}?>

<br>

<?php print_r($months); ?>

<!-- Insertion du footer. -->

<?php include 'footer.php';?>