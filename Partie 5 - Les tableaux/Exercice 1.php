<!-- Enoncé : 
Créer un tableau months et l'initialiser avec les valeurs suivantes :
janvier
février
mars
avril
mai
juin
juillet
aout
septembre
octobre
novembre
décembre -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 1';
    include 'header.php';
?>


<!-- Création du tableau months. -->

<?php 
    $months = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
    $arrlength = count($months);
?>    


<!-- 2°solution de création du tableau non fonctionnelle -->
<!-- <?php for ($x = 0; $x <= $arrlength; $x++) { ;?>
        <p><?= $months[$x] ;?></p>
<?php } ;?> -->


<!-- Affichage du tableau months. -->

<?php foreach ($months as $element) {
    echo $element. '<br>'; }
?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>