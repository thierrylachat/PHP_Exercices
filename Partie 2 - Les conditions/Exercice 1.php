<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $age= 15;
    $titre= 'Exercice 1';
    include 'header.php';
?>

<!-- Affichage du message "Vous êtes majeur" si l'âge est supérieur ou égal à 18. Dans le cas contraire, afficher "Vous êtes mineur". -->

<p>
    <?php if ($age > 18) {
        echo 'Vous êtes majeur !';
    } else {
        echo 'Vous êtes mineur !';
    }
    ?>
</p>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>


<!-- Deuxième solution -->
<?php
    $age= 45;
    $message= '';
    if ($age > 18) {
        $message = 'Vous êtes majeur !';
    } else {
        $message = 'Vous êtes mineur !';
    }
?>

<p><?= $message; ?></p>

<!-- Troisième solution pas besoin du echo...-->
<?php
$age = 32;
?>

<?php
if ($age >= 18 ) { ?> 
    <p>Vous êtes majeur !</p>
<?php } else { ?> 
    <p>Vous êtes mineur !</p>
<?php }