<!-- Enoncé : créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom. -->

<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'Exercice 5';
include 'header.php';
?>


<!-- Création du tableau associatif. -->

<?php $departments = array("80" => "Somme", "60" => "Oise", "02" => "Aisne", "62" => "Pas-De-Calais", "59" => "Nord") ;?>
<?php $departments = ['02' => 'Aisne', '59' => 'Nord', '60' => 'Oise', '80' => 'Somme', '62' => 'Pas-de-calais'] ;?>


<!-- Affichage du tableau. -->

<?php foreach ($departments as $element) {
    echo $element . '<br>';}
?>


<!-- Insertion du footer. -->

<?php include 'footer.php';?>