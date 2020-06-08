<!-- Traduire ce code avec des if et des else :  

    <?php
      echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
    ?> -->


<!-- Création de variable et insertion du header et de la barre de navigation. -->
    
<?php

    $titre= 'Exercice 7';
    include 'header.php';

    $isOk = false;
    if ($isOk == false)
        {
            $message = "Ce n'est pas bon !";
        }
        else
        {
           $message = "C'est OK !";
        }  
?>

<!-- 1° solution : affichage du message dans un paragraphe. -->

<p><?= $message ?></p>

<!-- 2° solution : alternance php et html. -->

<?php if ($isOk == false) { ;?>
    <p>Ce n'est pas bon !</p>
<?php } else { ;?>
    <p>C'est bon !</p>
<?php } ;?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>