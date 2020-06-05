<!-- Initialisation de variables et insertion du header et de la barre de navigation. -->

<?php
    $km= '1';
    $titre= 'Exercice 3';
    include 'header.php';
?>

<!-- Affichage de la variable km et changement successive de la valeur. -->

<p> <?= $km.'km' ?> </p>
<?php $km= '3'; ?>
<p> <?= $km.'km' ?> </p>
<?php $km= '125'; ?>
<p> <?= $km.'km' ?> </p>

<!-- Insertion du footer. -->

<?php include 'footer.php';