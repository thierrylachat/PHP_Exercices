<!-- Création de variable et insertion du header et de la barre de navigation. -->

<?php
    $gender= 'Homme';
    $titre= 'Exercice 5';
    include 'header.php';
?>

<!-- Traduire ce code avec des if et des else :  

    <?php
        echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
    ?> -->

<p>
    <?php
    if ($gender != 'Homme') {
        echo "C'est une développeuse !!!";
    } else {
        echo "C'est un développeur !!!";
    }
    ?>
</p>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>