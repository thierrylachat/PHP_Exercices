<!-- Création de variable et insertion du header et de la barre de navigation. -->

<?php
    $gender= 'Homme';
    $titre= 'Exercice 5';
    include 'header.php';
?>

<!-- Traduire ce code avec des if et des else :

    <?php
        echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    ?> -->

<!-- Première méthode non optimisée. -->
<p>
    <?php
    if ($gender != 'Homme') {
        echo "C'est une développeuse !!!";
    } else {
        echo "C'est un développeur !!!";
    }
    ?>
</p>

<!-- Seconde méthode optimisée. -->
<?php if ($gender != 'Homme') { ;?>
<p>C'est une développeuse !!!</p>
<?php } else { ;?>
<p>C'est un développeur !!!</p>
<?php } ;?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>