<!-- Enoncé : faire une fonction qui retourne true. -->

<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 1';
    include 'header.php';
?>


<!-- Création de la fonction myFunction. -->

<?php function boolean() {
    return true;
} ?>


<!-- Appel de la fonction myFunction. -->

<p><?=  boolean(); ?></p>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>