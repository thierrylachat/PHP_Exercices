<!-- En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 5';
    include 'header.php';
?>


<!-- Première solution avec affichage du message "Vous êtes majeur" si l'âge est supérieur ou égal à 18. Dans le cas contraire, afficher "Vous êtes mineur". -->

<?php for($step = 1; $step <= 15; $step ++ ) {?>
    <p><?php echo 'On y arrive presque'; ?> </p>
<?php } ?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>