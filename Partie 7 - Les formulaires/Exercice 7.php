<!-- Enoncé : avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 7';
    include 'header.php';
?>


<!-- Report du tableau associatif. -->

<?php $departments = array("80"=>"Somme", "60"=>"Oise", "02"=>"Aisne", "62"=>"Pas-De-Calais", "59"=>"Nord"); ?>
<?php $departments[51] = "Marne"; ?>


<!-- Affichage du tableau associatif. -->
<?php foreach ($departments as $element) {
    echo $element. '<br>'; }
?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>