<!-- Enoncé : 
Faire une fonction qui prend en paramètre deux nombres. 
La fonction doit retourner :
Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
Les deux nombres sont identiques si les deux nombres sont égaux -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 4';
    include 'header.php';
    $message;
?>


<!-- Création de la fonction compareNumbers. -->

<?php
    function compareNumbers($number1, $number2) {
        if ($number1 > $number2) {
            return 'Le premier nombre est plus grand que le deuxième.';
        } elseif ($number2 > $number1) {
            return 'Le premier nombre est plus petit que le deuxième.';
        }
        return "Les deux nombres sont identiques si les deux nombres sont égaux";
    }
;?>


<!-- Affichage du message avec appel de la fonction compareNumbers. -->

<p><?= compareNumbers(rand(1,10), rand(1,10)); ?></p>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>