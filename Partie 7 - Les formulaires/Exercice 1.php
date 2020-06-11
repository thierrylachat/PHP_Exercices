<!-- Enoncé : créer un formulaire demandant le nom et le prénom. 
Ce formulaire doit rediriger vers la page user.php avec la méthode GET. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 1';
    include 'header.php';
?>


<!-- Création du tableau months. -->

<?php 
    $months = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
    $arrlength = count($months);
?>    


<!-- Affichage du tableau months. -->

<?php foreach ($months as $element) {
    echo $element. '<br>'; }
    ?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>