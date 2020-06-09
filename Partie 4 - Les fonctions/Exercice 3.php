<!-- Enoncé : faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoie la concaténation de ces deux chaines. -->

<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 3';
    include 'header.php';
?>


<!-- Création de la fonction concatString. -->

<?php function concatString($string1, $string2) {
    return $string1.' '.$string2;
} ?>


<!-- Affichage du message ('Bonjour à tous !') avec appel de la fonction concatString. -->

<p><?= concatString('Bonjour', 'à tous !'); ?></p>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>