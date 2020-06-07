<!-- Création de variables.
Dans la première mettre le résultat de l'opération 3 + 4.  
Dans la deuxième mettre le résultat de l'opération 5 * 20.  
Dans la troisième mettre le résultat de l'opération 45 / 5.  
Insertion du header et de la barre de navigation. -->

<?php
    $x= 3+4;
    $y= 5*20;
    $z= 45/5;
    $titre= 'Exercice 8';
    include 'header.php';
?>

<!-- Affichage du contenu des variables x, y et z. -->

<p><?= $x; ?></p>
<p><?= $y; ?></p>
<p><?= $z; ?></p>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>