<!-- Enoncé : afficher le nombre de jours qui sépare la date du jour avec le 16 mai 2016.-->

<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'exercice 5';
    include 'header.php';
?>


<!-- Création des variables. -->

<?php
    $date1 = date_create('2016-05-16');
    $date2 = date_create();
    $interval = date_diff($date1, $date2);
?>

   
<!-- Affichage de l'écart de jours. -->

<div>L'écart de jours entre aujourd'hui et le 16 Mai 2016 : <strong><?= $interval -> format('%R%a jours'); ?></strong>.</div>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>