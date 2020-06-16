<!-- Enoncé : afficher la date du jour - 22 jours -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 8';
    include 'header.php';
?>


<?php
    
    // Retour arrière de 22 jours.
    $before = strtotime('- 22 days');
    // Autre methode.
    $before2 = new DateTime();
    $before2 -> sub(new DateInterval('P22D'));
?>


<!-- Affichage de la date du jour - 22 jours. -->
<div>Il y a 22 jours nous étions le <strong><?= date('d/m/Y', $before) ?></strong>.</div>
<div>Il y a 22 jours nous étions le <strong><?= $before2 -> format("d-m-Y") ?></strong>.</div>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>