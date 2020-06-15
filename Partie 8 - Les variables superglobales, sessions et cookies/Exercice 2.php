<!-- Enoncé : 
Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.
Ces variables auront été définies directement dans le code. 
Il faudra afficher le contenu de ces variables sur la deuxième page. -->


<?php
// Démarrage de la session AVANT l'écriture du HTML et création variables lastname, firstname et age. //
session_start();
?>

<?php
// Création des variables lastname, firstname, et age //
$_SESSION['lastname'] = 'Guibaud';
$_SESSION['firstname'] = 'Hélène';
$_SESSION['age'] = 33;
?>

<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 2';
    include 'header.php';
?>

<a href="Exercice2bis.php">Page annexe exercice 2</a>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>