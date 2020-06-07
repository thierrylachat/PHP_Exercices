<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $string= 'Hello world !';
    $int= 100;
    $float= 15.23;
    $boolean= true;

    $titre= 'Exercice 4';
    include 'header.php';
?>

<!-- Affichage des variables string, int, float et boolean. -->

<p><?= $string ?></p>
<p><?= $int ?></p>
<p><?= $float ?></p>
<p><?= $boolean ?></p>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>