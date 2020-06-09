<!-- En allant de 200 à 0 avec un pas de 12, afficher le message "Enfin !!!!". -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 8';
    include 'header.php';
?>

<!-- Création d'une boucle For -->

<?php for ($step = 200; $step >= 0; $step -= 12) {?>
    <p><?php echo 'Enfin !!!!'; ?> </p>
<?php } ?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>