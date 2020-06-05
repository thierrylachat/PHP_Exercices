<!-- Initialisation de variables et insertion du header et de la barre de navigation. -->

<?php
    $int= 0;
    $titre= 'Exercice 5';
    include 'header.php';
    // include 'navbar.php';
?>

<!-- Affichage de la variable int nulle et remplacement de sa valeur par 100.-->

<p><?= $int ?></p>
<?php $int= 100; ?>
<p><?= $int ?></p>

<!-- Insertion du footer. -->

<?php include 'footer.php';