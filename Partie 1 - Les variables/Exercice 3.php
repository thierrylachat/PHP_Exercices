<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $km= 1;
    $titre= 'Exercice 3';
    include 'header.php';
?>

<!-- Affichage de la variable km. -->

<p> <?= $km.'km'; ?> </p>

<!-- Changement de la variable par la valeur 3. -->

<?php $km= 3; ?>
<p> <?= $km.'km'; ?> </p>

<!-- Changement de la variable par la valeur 125. -->

<?php $km= 125; ?>
<p> <?= $km.'km'; ?> </p>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>