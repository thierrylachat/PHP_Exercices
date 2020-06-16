<!-- Enoncé : 
Afficher le timestamp du jour.  
Afficher le timestamp du mardi 2 août 2016 à 15h00. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 4';
    include 'header.php';
?>


<?php

    $timestamp1 = time();
    // Autre methode.
    $timestamp2 = strtotime("NOW"); // 1 year ago, next friday, +5 days, etc... (autres paramètres)
    // voir mktime() pour soluce 3.
?>


    <div>Date du jour (timestamp, time()) : <strong><?= $timestamp1; ?></strong></div>
    <div>Date du jour (autre methode, strtotime()) : <strong><?= $timestamp2; ?></strong></div>

    <div>Mardi 2 Août 2016 à 15h00 : <strong><?= strtotime("Tuesday 2 August 2016 15 hours") ?></strong></div>
    <div>Dans 5 jours : <strong><?= strftime('%A', strtotime('+ 5 days')) ?></strong></div>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>