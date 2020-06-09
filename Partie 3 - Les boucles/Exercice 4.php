<!-- Créer une variable et l'initialiser à 1.  
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer de la moitié de sa valeur -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 4';
    include 'header.php';
    $i = 1;
?>


<!-- Création d'une boucle While -->

<?php while ($i < 10) { ?>
    <p> <?php echo $i; ?> </p>
<?php $i += $i / 2 ;
    } ?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>