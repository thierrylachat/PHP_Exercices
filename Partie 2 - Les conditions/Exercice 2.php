<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $isEasy= true;
    $titre= 'Exercice 2';
    include 'header.php';
?>


<!-- Afficher "C'est facile !!" si c'est vrai. Dans le cas contraire afficher "C'est difficile !!!". -->

<?php if ($isEasy) { ?>
    <p>C'est facile !!</p>
<?php } else { ?>
    <p>C'est difficile !!!</p>
<?php } ?>


<?php if (!$isEasy) { ?>
    <p>C'est difficile !!!</p>
<?php } else { ?>
    <p>C'est facile !!</p>
<?php } ?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>