<!-- Créer une variable et l'initialiser à 0.  
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer -->

<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 1';
    include 'header.php';
    $i = 0;
?>


<!-- Réalisation de la boucle while --> 

<?php while ($i <= 10){ ?>
    <p> <?php echo ''.$i; ?> </p>
<?php $i++; } ?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>