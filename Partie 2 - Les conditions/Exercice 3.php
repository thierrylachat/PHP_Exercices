<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $age= 13;
    $gender= 'homme';
    $titre= 'Exercice 3';
    include 'header.php';
?>

<!-- En fonction de l'âge et du genre afficher la phrase correspondante :
Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeur
Vous êtes une femme et vous êtes mineur  -->

<p>
    <?php 
    if ($gender == 'homme' and $age > 18) {
        echo "Vous êtes un homme et vous êtes majeur.";
    } elseif ($gender == 'homme' and $age < 18) {
        echo "Vous êtes un homme et vous êtes mineur.";
    } elseif ($gender == 'femme' and $age > 18) {
        echo "Vous êtes une femme et vous êtes majeur.";
    } else {
        echo "Vous êtes une femme et vous êtes mineur.";
    }
    ?>
</p>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>