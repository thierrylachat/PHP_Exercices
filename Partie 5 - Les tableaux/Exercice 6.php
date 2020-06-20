<!-- Enoncé : avec le tableau de l'exercice 5, afficher la valeur de l'index 59. -->

<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'Exercice 6';
include 'header.php';
?>


<!-- Report du tableau associatif. -->

<?php $departments = array("80" => "Somme", "60" => "Oise", "02" => "Aisne", "62" => "Pas-De-Calais", "59" => "Nord");?>


<!-- Affichage de l'index 59 du tableau. -->

<p> Le département n°59 est : <strong><?=$departments[59];?></strong>. </p>


<!-- Insertion du footer. -->

<?php include 'footer.php';?>