<!-- Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas inférieure ou égale à 10 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- décrémenter la première variable -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 3';
    include 'header.php';
    $firstNumber = 100;
    $secondNumber = 55;
?>


<!-- Création d'une boucle While -->

<?php while ($firstNumber > 10){ ?>
    <p> <?php echo $firstNumber * $secondNumber; ?> </p>
<?php 
    $firstNumber --;
    } ?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>