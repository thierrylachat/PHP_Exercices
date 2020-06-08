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

<!-- Deuxième solution -->

<?php
    $age= rand(1,120);
    $genre = substr(str_shuffle('FH'),0,1);
?>

<?php if ($age <= 18 && $genre == 'F') : ?>
    <p>Vous êtes une femme et vous êtes mineur.</p>
    <?php elseif ($age >= 18 && $genre == 'F') : ?>
    <p>Vous êtes une femme et vous êtes majeur.</p>
    <?php elseif ($age <= 18 && $genre == 'H') : ?>
    <p>Vous êtes une homme et vous êtes mineur.</p>
    <?php elseif ($age >= 18 && $genre == 'H') : ?>
    <p>Vous êtes un homme et vous êtes majeur.</p>
    <?php endif; ?>

<!-- Troisième solution -->

Elimnation des conditions au fur et à mesure...