<!-- Enoncé : faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres. -->

<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 5';
    include 'header.php';
?>


<!-- Création de la fonction concat. -->

<?php function concat($number, $string) {
    return $number.' '.$string;
} ?>


<!-- Affichage de la concaténation avec appel de la fonction concat. -->

<p><?= concat(3, 'home'); ?></p>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>