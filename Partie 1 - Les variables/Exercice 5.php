<!-- Initialisation de variables et insertion du header et de la barre de navigation. -->

<?php
    $int= null;
    $titre= 'Exercice 5';
    include 'header.php';
?>

<!-- Affichage de la variable int nulle et remplacement de sa valeur par 100.-->

<p><?= $int ?></p>
<?php $int= 100; ?>
<p><?= $int ?></p>

<!-- Affichage du type et de la valeur de la variable. A retravailler ! -->
<?php var_dump($int); ?>

<!-- Insertion du footer. -->

<?php include 'footer.php';