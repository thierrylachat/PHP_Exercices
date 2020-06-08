<!-- Traduire ce code avec des if et des else :  

    <?php
     echo ($isOk) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
    ?> -->


<!-- Création de variable et insertion du header et de la barre de navigation. -->
    
<?php

    $titre= 'Exercice 8';
    include 'header.php';

    $isOk = true;
    if ($isOk == true)
        {
            $message = "C'est OK !";
        }
        else
        {
           $message = "Ce n'est pas bon !";
        }  
?>

<!-- 1° solution : affichage du message dans un paragraphe. -->

<p><?= $message ?></p>

<!-- 2° solution : alternance php et html. -->

<?php if ($isOk == true) { ;?>
    <p>C'est OK !</p>
<?php } else { ;?>
    <p>Ce n'est pas bon !</p>
<?php } ;?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>