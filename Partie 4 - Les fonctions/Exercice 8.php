<!-- Enoncé : 
Faire une fonction qui prend en paramètre trois nombres et qui renvoie la somme de ces nombres.  
Tous les paramètres doivent avoir une valeur par défaut. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 8';
    include 'header.php';
    $result;
?>


<!-- Création de la fonction sum. -->

<?php function sum($x = 5, $y = 12, $z = 20) {
    return $result = $x + $y + $z;
} ?>


<!-- Affichage de la somme des 3 nombres avec appel de la fonction sum. -->

<p><?= sum(); ?></p>


<!-- Affichage du nombre de paramètres. -->

<?php function argsNumber() {
    $numArgs = func_num_args();
    echo $numArgs;
} 
argsNumber($x = 5, $y = 12, $z = 20); ?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>