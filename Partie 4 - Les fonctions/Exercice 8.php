<!-- Enoncé : 
Faire une fonction qui prend en paramètre trois nombres et qui renvoie la somme de ces nombres.  
Tous les paramètres doivent avoir une valeur par défaut. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 8';
    include 'header.php';
?>


<!-- Création de la fonction prez. -->

<?php function sum($number1, $number2, $number3) {
    return 'Vous êtes un '.$gender.' et vous êtes '.$age.'.';
} ?>


<!-- Affichage de la concaténation avec appel de la fonction prez. -->

<p><?= sum(3, 10, 4); ?></p>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>