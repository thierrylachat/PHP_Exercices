<!-- Initialisation de variables et insertion du header et de la barre de navigation. -->

<?php
    $age= 15;
    $titre= 'Exercice 1';
    include 'header.php';
?>

<!-- Affichage du message si l'âge est supérieur ou égale à 18", afficher Vous êtes majeur. Dans le cas contraire, afficher "Vous êtes mineur". -->

<p>
if ($age < 18) 
{
    echo 'Vous êtes majeur !';
} else {
    echo 'Vous êtes mineur !';
}
</p>

<!-- Insertion du footer. -->

<?php include 'footer.php';