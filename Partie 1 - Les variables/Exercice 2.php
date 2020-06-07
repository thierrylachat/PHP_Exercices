<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $lastname= 'Guibaud';
    $firstname= 'Hélène';
    $age= 33;
    $titre= 'Exercice 2';
    include 'header.php';
?>

<!-- Affichage des variables lastname, firstname et age. -->
<!-- Utilisation des points pour la concaténation. -->

<p><?= $lastname.' '.$firstname.' '.$age; ?></p>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>