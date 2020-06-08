<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $age= rand(1,120);
    $genre = substr(str_shuffle('FH'),0,1);
    $titre= 'Exercice 3';
    include 'header.php';
?>

<!-- En fonction de l'âge et du genre afficher la phrase correspondante :
Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeur
Vous êtes une femme et vous êtes mineur  -->

    <?php if ($age < 18 && $genre == 'F') : ?>
        <p>Vous êtes une femme et vous êtes mineur.</p>
    <?php  elseif ($age >= 18 && $genre =='F') : ?>
        <p>Vous êtes une femme et vous êtes majeur.</p>
    <?php  elseif ($age < 18 && $genre == 'H') : ?>
        <p>Vous êtes un homme et vous êtes mineur.</p>
    <?php  elseif ($age >= 18 && $genre == 'H') : ?>
        <p>Vous êtes un homme et vous êtes majeur.</p>
    <?php endif; ?>


<!-- Deuxième solution qui élimine les possibilités. -->

    <?php if ($age < 18 && $genre == 'F') : ?>
        <p>Vous êtes une femme et vous êtes mineur.</p>
    <?php  elseif ($age < 18) : ?>
        <p>Vous êtes un homme et vous êtes mineur.</p>
    <?php  elseif ($genre == 'F') : ?>
        <p>Vous êtes une femme et vous êtes majeur.</p>
    <?php  else : ?>
        <p>Vous êtes un homme et vous êtes majeur.</p>
    <?php endif; ?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>