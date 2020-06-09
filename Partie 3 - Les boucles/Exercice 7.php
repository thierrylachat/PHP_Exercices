<!-- En allant de 1 à 100 avec un pas de 15, afficher le message "On tient le bon bout !". -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 7';
    include 'header.php';
?>

<!-- Création d'une boucle For -->

<?php for ($step = 1; $step <= 100 ; $step += 15){ ?>
    <p> <?php echo 'On tient le bon bout !'; ?> </p> 
<?php } ;?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>