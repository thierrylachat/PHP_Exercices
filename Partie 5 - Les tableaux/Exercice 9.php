<!-- Enoncé : avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 9';
    include 'header.php';
    $result;
?>


<!-- Report du tableau associatif. -->

<?php $departments = array("80"=>"Somme", "60"=>"Oise", "02"=>"Aisne", "62"=>"Pas-De-Calais", "59"=>"Nord"); ?>


<!-- Affichage du tableau associatif. -->
<?php foreach ($departments as $element) {
    echo $element. '<br>'; }
?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>