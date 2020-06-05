<!-- Initialisation de variables et insertion du header et de la barre de navigation. -->

<?php
    $name= 'Hélène';
    $titre= 'Exercice 6';
    include 'header.php';
?>

<!-- Affichage du message: "Bonjour + name + , comment vas tu ?"-->

<p>Bonjour <?= $name ?>, comment vas-tu ?</p>

<!-- Insertion du footer. -->

<?php include 'footer.php';