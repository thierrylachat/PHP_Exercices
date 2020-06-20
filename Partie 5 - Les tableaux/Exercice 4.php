<!-- Enoncé : avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'Exercice 4';
include 'header.php';
?>


<!-- Report du tableau months et remplacement du mois "Août". -->

<?php
$months = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
array_splice($months, 7, 1, "Août");
?>


<!-- 2° méthode pour le remplacement du mois de "Août" -->
<?php
$months[7] = "Août";
?>


<!-- Affichage du tableau. -->

<?php foreach ($months as $element) {
    echo $element . '<br>';}
?>


<!-- Insertion du footer. -->

<?php include 'footer.php';?>