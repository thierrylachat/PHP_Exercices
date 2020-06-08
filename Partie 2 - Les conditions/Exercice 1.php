<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $age= 45;
    $message= '';
    if ($age >= 18) {
        $message = 'Vous êtes majeur !';
    } else {
        $message = 'Vous êtes mineur !';
    }
    $titre= 'Exercice 1';
    include 'header.php';
?>


<!-- Première solution avec affichage du message "Vous êtes majeur" si l'âge est supérieur ou égal à 18. Dans le cas contraire, afficher "Vous êtes mineur". -->

<p><?= $message; ?></p>


<!-- Deuxième solution avec inscription des messages dans des paragraphes-->

<?php
if ($age >= 18 ) { ?> 
    <p>Vous êtes majeur !</p>
<?php } else { ?> 
    <p>Vous êtes mineur !</p>
<?php } ?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>