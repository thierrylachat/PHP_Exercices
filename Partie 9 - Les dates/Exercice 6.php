<!-- Enoncé : afficher le nombre de jours dans le mois de février de l'année 2016.-->

<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'exercice 6';
    include 'header.php';
?>


<!-- Création des variables. -->

<?php

    $nbDays = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
    // ou date('t', mktime(0, 0, 0, 2, 1, 2016))
?>


<!-- Affichage du nombre de jours en février 2016. -->

<div>En Février 2016, il y a <strong><?= $nbDays; ?></strong> jours.</div>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>