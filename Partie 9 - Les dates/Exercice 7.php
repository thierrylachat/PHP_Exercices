<!-- Enoncé : afficher la date du jour + 20 jours. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 7';
    include 'header.php';
?>


<?php
    
    // Augmentation de 20 jours.
    $later = strtotime('+ 20 days');
    // Autre méthode.
    $later2 = new DateTime();
    $later2 -> add(new DateInterval('P20D'));
?>


<!-- Affichage de la date du jour + 20 jours. -->
<div>Dans 20 jours nous serons le <strong><?= date('d/m/Y', $later) ?></strong>.</div>
<div>Dans 20 jours nous serons le <strong><?= $later2 -> format("d-m-Y") ?></strong>.</div>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>