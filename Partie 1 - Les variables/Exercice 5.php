<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $int= null;
    $titre= 'Exercice 5';
    include 'header.php';
?>

<!-- Affichage de la variable int de type null. -->

<?php var_dump($int); ?>

<!-- Remplacement de la valeur de int par 100 avec affichage. -->

<?php $int= 100; ?>
<p><?= $int; ?></p>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>