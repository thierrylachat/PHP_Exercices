<!-- Créer deux variables. 
Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas supérieure à 20 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- incrementer la première variable -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 2';
    include 'header.php';
    $first = 0;
    $second= 5;
?>


<!-- Première solution avec affichage du message "Vous êtes majeur" si l'âge est supérieur ou égal à 18. Dans le cas contraire, afficher "Vous êtes mineur". -->

<?php do { ?>
    <p> <?php echo ' '.($first * $second); ?> </p>
    <?php $first ++; ?>           
    <?php } while ($first <= 20) ;?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>