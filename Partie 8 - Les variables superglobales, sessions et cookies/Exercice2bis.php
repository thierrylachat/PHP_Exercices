<!-- Enoncé : 
Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.
Ces variables auront été définies directement dans le code. 
Il faudra afficher le contenu de ces variables sur la deuxième page. -->


<?php
// Démarrage de la session AVANT l'écriture du HTML et création variables lastname, firstname et age. //
session_start();
?>


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 2';
    include 'header.php';
?>

<!-- Affichage des variables firstname, lastname et age -->

<p>Bonjour tu es <?= $_SESSION['firstname'] ;?> <?= $_SESSION['lastname'] ;?> et tu as <?=$_SESSION['age'];?> ans. </p>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>

<!-- Mise en sommeil de la session ouverte. -->
<?php
session_write_close();
?>