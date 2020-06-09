<!-- En allant de 20 à 0 avec un pas de 1, afficher le message "C'est presque bon !". -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 6';
    include 'header.php';
?>


<!-- Création d'une boucle For -->

<?php for ($step = 20; $step >= 0; $step -- ) {?>
    <p><?php echo "C'est presque bon !"; ?> </p>
<?php } ?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>