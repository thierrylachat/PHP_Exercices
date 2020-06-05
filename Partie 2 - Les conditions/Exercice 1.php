<!-- Initialisation de variables et insertion du header et de la barre de navigation. -->

<?php
    $age= 15;
    $titre= 'Exercice 1';
    include 'header.php';
?>

<!-- Affichage de la variable name. -->

<p class="<?= $name ?>"><?php echo $name; ?></p>

<!-- Insertion du footer. -->

<?php include 'footer.php';