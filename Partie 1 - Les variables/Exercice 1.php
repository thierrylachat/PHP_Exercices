<!-- Initialisation de variables et insertion du header et de la barre de navigation. -->

<?php
    $name= 'Hélène';
    $titre= 'Exercice 1';
    include 'header.php';
    // include 'navbar.php';
?>

<!-- Affichage de la variable name. -->

<p class="<?= $name ?>"><?php echo $name; ?></p>

<!-- Insertion du footer. -->

<?php include 'footer.php';