<!-- Traduire ce code avec des if et des else :

    <?php
        echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    ?> -->

    
<!-- Création de variable et insertion du header et de la barre de navigation. -->

<?php
    $gender= 'Homme';
    $titre= 'Exercice 5';
    include 'header.php';

    $genre = "Femme";
    if ($genre != "Homme")
    {
        $message = "C'est une développeuse !!!";
    }
    else
    {
       $message = "C'est un développeur !!!";
    }
?>


<!-- 1° solution -->
<p><?= $message ?></p>

<!-- 2° solution -->
<?php if ($gender != 'Homme') { ;?>
    <p>C'est une développeuse !!!</p>
<?php } else { ;?>
    <p>C'est un développeur !!!</p>
<?php } ;?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>