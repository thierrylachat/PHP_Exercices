<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $x= 3+4;
    $y= 5*20;
    $z= 45/5;
    $titre= 'Exercice 8';
    include 'header.php';
?>

<!-- Affichage des valeurs x, y et z.  -->

<p><?= $x;?></p>
<p><?= $y;?></p>
<p><?= $z;?></p>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>