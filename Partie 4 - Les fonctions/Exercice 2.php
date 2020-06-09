<!-- Enoncé : faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine. -->

<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 2';
    include 'header.php';
?>


<!-- Création de la fonction displayString. -->

<?php function displayString($string) {
    return $string;
} ?>


<!-- Affichage du message ('Bonjour à tous !') avec appel de la fonction displayString. -->

<p><?= displayString('Bonjour à tous !'); ?></p>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>