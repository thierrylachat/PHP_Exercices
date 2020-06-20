<!-- Enoncé : faire une page index.php.
Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'Exercice2';
include 'header.php';
?>


<!-- Test des paramètres âge de l'URL. -->

<?php
$message = '';
if (isset($_GET["age"])) {
    $message = $_GET["age"];
} else {
    $message = "L'âge n'existe pas.";
};
?>

<!-- Affiche du message. -->

<p> <?= $message ;?> </p>

<!-- Insertion du footer. -->

<?php include 'footer.php';?>