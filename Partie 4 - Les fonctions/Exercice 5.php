<!-- Enoncé : faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres. -->

<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 5';
    include 'header.php';
?>


<!-- Création de la fonction concat. -->

<?php function concat($string, $number) {
    return $string.' '.$number;
} ?>


<!-- Affichage de la concaténation du nombre avec la chaine de caractères avec appel de la fonction concat. -->

<p><?= concat('Louis', 16); ?></p>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>